<?php
namespace WebBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use WebBundle\Entity\Categories;

class CategoriesData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $categorie1 = new Categories();
        $categorie1->setNom('Légumes');
        $categorie1->setImage("cat1.png");
        $manager->persist($categorie1);
       
        $categorie2 = new Categories();
        $categorie2->setNom('fruits');
        $categorie2->setImage("cat2.png");
        $manager->persist($categorie2);
       
        $manager->flush();
       
        $this->addReference('categorie1', $categorie1);
        $this->addReference('categorie2', $categorie2);
    }
    
    public function getOrder()
    {
        return 2;
    }
}