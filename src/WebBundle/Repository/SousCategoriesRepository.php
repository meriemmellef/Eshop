<?php

namespace WebBundle\Repository;

/**
 * CategoriesRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SousCategoriesRepository extends \Doctrine\ORM\EntityRepository
{
    public function getListSousCategorie($code_pays,$station,$categorie_id)
    {
        $q=$this->createQueryBuilder('sub')
            ->leftJoin("sub.pays", "p")
            ->leftJoin("sub.produits", "subpr")
            ->leftJoin("subpr.station", "s")
            ->leftJoin("sub.categorie", "c")
            ->where('p.code = :pays')
            ->andWhere(' subpr.sous_categorie = sub and sub.isActive = true and  subpr.is_active = true ')
            ->groupBy('sub')
            ->having('count(subpr) > 0')
            ->setParameter('pays', $code_pays);

        if( $station != ''){
            $q ->andWhere('s.id = :station_id')
                ->setParameter('station_id',$station);
        }
        if( $categorie_id != ''){
            $q ->andWhere('c.id = :categorie_id')
                ->setParameter('categorie_id', $categorie_id);
        }
        return $q->getQuery()->getResult();

    }

    public function getSousCategorieByPaysAll($pays,$search,$categorie_id)
    {
        $q=$this->createQueryBuilder('sc')
            ->select('sc,c,p')
            ->leftJoin("sc.pays", "p")
            ->leftJoin("sc.categorie", "c")
            ->where('p = :pays')
           // ->andWhere('sc.isActive = true')
          //  ->andWhere('c.isActive = true')
            ->setParameter('pays', $pays)
            ->orderBy('sc.id','DESC');

        if($search !=""){
            $q  ->andWhere('sc.nom like :search OR sc.nom_en like :search')
                ->setParameter('search', '%'.$search.'%');

        }
        if($categorie_id !=""){
            $q  ->andWhere('c.id = :categorie_id')
                ->setParameter('categorie_id', $categorie_id);

        }
        return $q->getQuery()->getArrayResult();

    }


    public function getSousCategorieByPays($pays,$search,$categorie_id)
    {
        $q=$this->createQueryBuilder('sc')
            ->select('sc,c,p')
            ->leftJoin("sc.pays", "p")
            ->leftJoin("sc.categorie", "c")
            ->where('p = :pays')
            ->andWhere('sc.isActive = true')
            ->andWhere('c.isActive = true')
            ->setParameter('pays', $pays)
            ->orderBy('sc.id','DESC');

        if($search !=""){
            $q  ->andWhere('sc.nom like :search OR sc.nom_en like :search')
                ->setParameter('search', '%'.$search.'%');

        }
        if($categorie_id !=""){
            $q  ->andWhere('c.id = :categorie_id')
                ->setParameter('categorie_id', $categorie_id);

        }
        return $q->getQuery()->getArrayResult();

    }



    public function getSousCategorieAdminALL($search,$categorie_id)
    {
        $q=$this->createQueryBuilder('sc')
            ->select('sc,c,p')
            ->leftJoin("sc.pays", "p")
            ->leftJoin("sc.categorie", "c")
            ->where('sc.pays IS NULL')
            //->andWhere('sc.isActive = true')
            ->andWhere('c.isActive = true')
            // ->setParameter('pays', $pays)
            ->orderBy('sc.id','DESC');

        if($search !=""){
            $q  ->andWhere('sc.nom like :search OR sc.nom_en like :search')
                ->setParameter('search', '%'.$search.'%');

        }
        if($categorie_id !=""){
            $q  ->andWhere('c.id = :categorie_id')
                ->setParameter('categorie_id', $categorie_id);

        }
        return $q->getQuery()->getArrayResult();

    }


    public function getSousCategorieAdmin($search,$categorie_id)
    {
        $q=$this->createQueryBuilder('sc')
            ->select('sc,c,p')
            ->leftJoin("sc.pays", "p")
            ->leftJoin("sc.categorie", "c")
            ->where('sc.pays IS NULL')
            ->andWhere('sc.isActive = true')
            ->andWhere('c.isActive = true')
           // ->setParameter('pays', $pays)
            ->orderBy('sc.id','DESC');

        if($search !=""){
            $q  ->andWhere('sc.nom like :search OR sc.nom_en like :search')
                ->setParameter('search', '%'.$search.'%');

        }
        if($categorie_id !=""){
            $q  ->andWhere('c.id = :categorie_id')
                ->setParameter('categorie_id', $categorie_id);

        }
        return $q->getQuery()->getArrayResult();

    }


    public function getAllSousCategorieByPays($pays,$search,$categorie_id)
    {
        $q=$this->createQueryBuilder('sc')
            ->select('sc,c')
            ->leftJoin("sc.pays", "p")
            ->leftJoin("sc.categorie", "c")
            ->where('sc.pays = :pays')
            //->andWhere('sc.isActive = true')
           // ->andWhere('c.isActive = true')
            ->setParameter('pays', $pays)
            ->orderBy('sc.id','DESC');

        if($search !=""){
            $q  ->andWhere('sc.nom like :search OR sc.nom_en like :search')
                ->setParameter('search', '%'.$search.'%');

        }
        if($categorie_id !=""){
            $q  ->andWhere('c.id = :categorie_id')
                ->setParameter('categorie_id', $categorie_id);

        }
        return $q->getQuery()->getArrayResult();

    }


}
