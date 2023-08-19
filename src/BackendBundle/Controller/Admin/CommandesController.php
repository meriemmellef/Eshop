<?php

namespace BackendBundle\Controller\Admin;

use DoctrineExtensions\Query\Mysql\Date;
//use JavierEguiluz\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;
use EasyCorp\Bundle\EasyAdminBundle\EasyAdminBundle  as BaseAdminController;
use JavierEguiluz\Bundle\EasyAdminBundle\Event\EasyAdminEvents;
use WebBundle\Entity\Commandes;

/**
 * This is an example of how to use a custom controller for a backend entity.
 */
class CommandesController extends BaseAdminController
{

    /**
     * Performs a database query based on the search query provided by the user.
     * It supports pagination and field sorting.
     *
     * @param string $entityClass
     * @param string $searchQuery
     * @param array $searchableFields
     * @param int $page
     * @param int $maxPerPage
     * @param string|null $sortField
     * @param string|null $sortDirection
     *
     * @return Pagerfanta The paginated query results
     */
    protected function findBy($entityClass, $searchQuery, array $searchableFields, $page = 1, $maxPerPage = 15, $sortField = null, $sortDirection = null)
    {
        $queryBuilder = $this->executeDynamicMethod('create<EntityName>SearchQueryBuilder', array($entityClass, $searchQuery, $searchableFields, $sortField, $sortDirection));

//        $queryBuilder->andWhere('entity.roles LIKE :roles')
//                ->setParameter('roles', '%ROLE_GROSSISTE%')
//        ;

        $this->dispatch(EasyAdminEvents::POST_SEARCH_QUERY_BUILDER, array(
            'query_builder' => $queryBuilder,
            'search_query' => $searchQuery,
            'searchable_fields' => $searchableFields,
        ));

        return $this->get('easyadmin.paginator')->createOrmPaginator($queryBuilder, $page, $maxPerPage);
    }

    /**
     * Performs a database query to get all the records related to the given
     * entity. It supports pagination and field sorting.
     *
     * @param string $entityClass
     * @param int $page
     * @param int $maxPerPage
     * @param string|null $sortField
     * @param string|null $sortDirection
     *
     * @return Pagerfanta The paginated query results
     */
    protected function findAll($entityClass, $page = 1, $maxPerPage = 15, $sortField = null, $sortDirection = null)
    {
        if (empty($sortDirection) || !in_array(strtoupper($sortDirection), array('ASC', 'DESC'))) {
            $sortDirection = 'DESC';
        }
        $request = $this->get('request');

        if ($request->getMethod() == 'POST') {
            $datee = $request->get('dateLiv');
            $commande = $this->getDoctrine()->getRepository('WebBundle:Commandes')->findOneById($request->get('idcommande'));
            if ($datee === '') {
                $commande->setStatus(2);
            } else {
                $commande->setDeliveryDate(new \DateTime($datee));
                $commande->setStatus(2);
            }
            // increment nbr achat produit
            $prodRepo = $this->getDoctrine()->getRepository('WebBundle:Produits');
            $enMang = $this->getDoctrine()->getEntityManager();
            foreach ($commande->getCommande()['produit'] as $p){
            $produit = $prodRepo->findOneById($p['id']);
            if ($produit){
                $nq = $produit->getNbAchat()+ $p['quantite'];
                $produit->setNbAchat($nq);
                $enMang->merge($produit);
                $enMang->flush();
            }


            }
            $message = \Swift_Message::newInstance()
                ->setSubject('Validation commande - Commande du '.$commande->getDeliveryDate()->format('Y-m-d'))
                ->setFrom(array('b2b.total@gmail.com' => "Total B2B"))
                ->setTo($commande->getUtilisateur()->getEmailCanonical())
                ->setCharset('utf-8')
                ->setContentType('text/html')
                ->setBody($this->renderView('FrontendBundle:SwiftLayout:validationCommande.html.twig', array('commande' => $commande)));

            $this->get('mailer')->send($message);

            $this->getDoctrine()->getEntityManager()->merge($commande);
            $this->getDoctrine()->getEntityManager()->flush();
        }
        $queryBuilder = $this->executeDynamicMethod('create<EntityName>ListQueryBuilder', array($entityClass, $sortDirection, $sortField));
        $queryBuilder->andWhere('entity.grossiste = :roles');
        $queryBuilder->andWhere('entity.valider = true')
            ->setParameter('roles', $this->getUser());

        $this->dispatch(EasyAdminEvents::POST_LIST_QUERY_BUILDER, array(
            'query_builder' => $queryBuilder,
            'sort_field' => $sortField,
            'sort_direction' => $sortDirection,
        ));

        return $this->get('easyadmin.paginator')->createOrmPaginator($queryBuilder, $page, $maxPerPage);
    }

    public function showAction()
    {
        $commande = $this->getDoctrine()->getRepository('WebBundle:Commandes')->findOneById($this->request->query->get('id'));

        return $this->render('@Backend/admin/commande/listeDesProduits.html.twig', array('posts' => $commande));
    }

    /**
     * Given a method name pattern, it looks for the customized version of that
     * method (based on the entity name) and executes it. If the custom method
     * does not exist, it executes the regular method.
     *
     * For example:
     *   executeDynamicMethod('create<EntityName>Entity') and the entity name is 'User'
     *   if 'createUserEntity()' exists, execute it; otherwise execute 'createEntity()'
     *
     * @param string $methodNamePattern The pattern of the method name (dynamic parts are enclosed with <> angle brackets)
     * @param array $arguments The arguments passed to the executed method
     *
     * @return mixed
     */
    private function executeDynamicMethod($methodNamePattern, array $arguments = array())
    {
        $methodName = str_replace('<EntityName>', $this->entity['name'], $methodNamePattern);
        //var_dump($methodName);die();

        if (!is_callable(array($this, $methodName))) {
            $methodName = str_replace('<EntityName>', '', $methodNamePattern);
        }

        return call_user_func_array(array($this, $methodName), $arguments);
    }
}
