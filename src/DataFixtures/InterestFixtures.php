<?php
namespace App\DataFixtures;

use App\Entity\Interest;
use App\Entity\Users;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
//use Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory;


class InterestFixtures extends Fixture  {

    public function __construct() {}

    public function load(ObjectManager $manager) {

        $tab = array(
            array('name'=>'php','description'=>'développement'),
            array('name'=>'mysql','description'=>'base de donnée')

        );


        foreach ($tab as $row) {
            
            $interest = new Interest();
            $interest -> setName($row['name']);
            $interest -> setDescription($row['description']);

            $manager->persist($interest);

            $manager->flush();

        }
    }
}