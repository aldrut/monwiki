<?php
namespace App\DataFixtures;


use App\Entity\Users;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
//use Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory;


class UsersFixtures extends Fixture  {
  //  private $hasher;

    public function __construct() {
        // $factory = new PasswordHasherFactory([  'common' => ['algorithm' => 'bcrypt'],
        //                                         'memory-hard' => ['algorithm' => 'sodium'],
        //                                     ]);
        // $this->hasher =  $factory->getPasswordHasher('common');
    }


    public function load(ObjectManager $manager) {


        $tab = array( 
            array('name'=>'DRUT','firstname'=>'Alexandre','mail'=>'adrut@free.fr','pwd'=>'1111','phone'=>'01','subdate'=>'21-09-2021 12:55','nbresponse'=>'1','role'=>'admin','newsletter'=>'false','activated'=>'false','imgsrc'=>'/ttt','nbquestion'=>'1'),
            array('name'=>'DRUT','firstname'=>'Alexandre','mail'=>'adrut@free.fr','pwd'=>'1111','phone'=>'01','subdate'=>'21-09-2021 12:55','nbresponse'=>'1','role'=>'admin','newsletter'=>'false','activated'=>'false','imgsrc'=>'/ttt','nbquestion'=>'1'),
            array('name'=>'DRUT','firstname'=>'Alexandre','mail'=>'adrut@free.fr','pwd'=>'1111','phone'=>'01','subdate'=>'21-09-2021 12:55','nbresponse'=>'1','role'=>'admin','newsletter'=>'false','activated'=>'false','imgsrc'=>'/ttt','nbquestion'=>'1'),
            array('name'=>'DRUT','firstname'=>'Alexandre','mail'=>'adrut@free.fr','pwd'=>'1111','phone'=>'01','subdate'=>'21-09-2021 12:55','nbresponse'=>'1','role'=>'admin','newsletter'=>'false','activated'=>'false','imgsrc'=>'/ttt','nbquestion'=>'1'),
            array('name'=>'DRUT','firstname'=>'Alexandre','mail'=>'adrut@free.fr','pwd'=>'1111','phone'=>'01','subdate'=>'21-09-2021 12:55','nbresponse'=>'1','role'=>'admin','newsletter'=>'false','activated'=>'false','imgsrc'=>'/ttt','nbquestion'=>'1'),
            // array('name'=>'DRUT','firstname'=>'Alexandre','mail'=>'adrut@free.fr','pwd'=>'1111','phone'=>'01','subdate'=>'21-09-2021 12:55','nbresponse'=>'1','role'=>'admin','newsletter'=>'false','activated'=>'false','imgsrc'=>'/ttt','nbquestion'=>'1'),
            // array('name'=>'DRUT','firstname'=>'Alexandre','mail'=>'adrut@free.fr','pwd'=>'1111','phone'=>'01','subdate'=>'21-09-2021 12:55','nbresponse'=>'1','role'=>'admin','newsletter'=>'false','activated'=>'false','imgsrc'=>'/ttt','nbquestion'=>'1'),
            // array('name'=>'DRUT','firstname'=>'Alexandre','mail'=>'adrut@free.fr','pwd'=>'1111','phone'=>'01','subdate'=>'21-09-2021 12:55','nbresponse'=>'1','role'=>'admin','newsletter'=>'false','activated'=>'false','imgsrc'=>'/ttt','nbquestion'=>'1'),
            // array('name'=>'DRUT','firstname'=>'Alexandre','mail'=>'adrut@free.fr','pwd'=>'1111','phone'=>'01','subdate'=>'21-09-2021 12:55','nbresponse'=>'1','role'=>'admin','newsletter'=>'false','activated'=>'false','imgsrc'=>'/ttt','nbquestion'=>'1'),
            // array('name'=>'DRUT','firstname'=>'Alexandre','mail'=>'adrut@free.fr','pwd'=>'1111','phone'=>'01','subdate'=>'21-09-2021 12:55','nbresponse'=>'1','role'=>'admin','newsletter'=>'false','activated'=>'false','imgsrc'=>'/ttt','nbquestion'=>'1'),
            // array('name'=>'DRUT','firstname'=>'Alexandre','mail'=>'adrut@free.fr','pwd'=>'1111','phone'=>'01','subdate'=>'21-09-2021 12:55','nbresponse'=>'1','role'=>'admin','newsletter'=>'false','activated'=>'false','imgsrc'=>'/ttt','nbquestion'=>'1'),
            // array('name'=>'DRUT','firstname'=>'Alexandre','mail'=>'adrut@free.fr','pwd'=>'1111','phone'=>'01','subdate'=>'21-09-2021 12:55','nbresponse'=>'1','role'=>'admin','newsletter'=>'false','activated'=>'false','imgsrc'=>'/ttt','nbquestion'=>'1'),
            // array('name'=>'DRUT','firstname'=>'Alexandre','mail'=>'adrut@free.fr','pwd'=>'1111','phone'=>'01','subdate'=>'21-09-2021 12:55','nbresponse'=>'1','role'=>'admin','newsletter'=>'false','activated'=>'false','imgsrc'=>'/ttt','nbquestion'=>'1'),
            // array('name'=>'DRUT','firstname'=>'Alexandre','mail'=>'adrut@free.fr','pwd'=>'1111','phone'=>'01','subdate'=>'21-09-2021 12:55','nbresponse'=>'1','role'=>'admin','newsletter'=>'false','activated'=>'false','imgsrc'=>'/ttt','nbquestion'=>'1'),
            // array('name'=>'DRUT','firstname'=>'Alexandre','mail'=>'adrut@free.fr','pwd'=>'1111','phone'=>'01','subdate'=>'21-09-2021 12:55','nbresponse'=>'1','role'=>'admin','newsletter'=>'false','activated'=>'false','imgsrc'=>'/ttt','nbquestion'=>'1'),
            // array('name'=>'DRUT','firstname'=>'Alexandre','mail'=>'adrut@free.fr','pwd'=>'1111','phone'=>'01','subdate'=>'21-09-2021 12:55','nbresponse'=>'1','role'=>'admin','newsletter'=>'false','activated'=>'false','imgsrc'=>'/ttt','nbquestion'=>'1'),
            // array('name'=>'DRUT','firstname'=>'Alexandre','mail'=>'adrut@free.fr','pwd'=>'1111','phone'=>'01','subdate'=>'21-09-2021 12:55','nbresponse'=>'1','role'=>'admin','newsletter'=>'false','activated'=>'false','imgsrc'=>'/ttt','nbquestion'=>'1'),
            // array('name'=>'DRUT','firstname'=>'Alexandre','mail'=>'adrut@free.fr','pwd'=>'1111','phone'=>'01','subdate'=>'21-09-2021 12:55','nbresponse'=>'1','role'=>'admin','newsletter'=>'false','activated'=>'false','imgsrc'=>'/ttt','nbquestion'=>'1'),
            // array('name'=>'DRUT','firstname'=>'Alexandre','mail'=>'adrut@free.fr','pwd'=>'1111','phone'=>'01','subdate'=>'21-09-2021 12:55','nbresponse'=>'1','role'=>'admin','newsletter'=>'false','activated'=>'false','imgsrc'=>'/ttt','nbquestion'=>'1'),
            // array('name'=>'DRUT','firstname'=>'Alexandre','mail'=>'adrut@free.fr','pwd'=>'1111','phone'=>'01','subdate'=>'21-09-2021 12:55','nbresponse'=>'1','role'=>'admin','newsletter'=>'false','activated'=>'false','imgsrc'=>'/ttt','nbquestion'=>'1'),
            // array('name'=>'DRUT','firstname'=>'Alexandre','mail'=>'adrut@free.fr','pwd'=>'1111','phone'=>'01','subdate'=>'21-09-2021 12:55','nbresponse'=>'1','role'=>'admin','newsletter'=>'false','activated'=>'false','imgsrc'=>'/ttt','nbquestion'=>'1'),
            // array('name'=>'DRUT','firstname'=>'Alexandre','mail'=>'adrut@free.fr','pwd'=>'1111','phone'=>'01','subdate'=>'21-09-2021 12:55','nbresponse'=>'1','role'=>'admin','newsletter'=>'false','activated'=>'false','imgsrc'=>'/ttt','nbquestion'=>'1'),
            // array('name'=>'DRUT','firstname'=>'Alexandre','mail'=>'adrut@free.fr','pwd'=>'1111','phone'=>'01','subdate'=>'21-09-2021 12:55','nbresponse'=>'1','role'=>'admin','newsletter'=>'false','activated'=>'false','imgsrc'=>'/ttt','nbquestion'=>'1'),
            // array('name'=>'DRUT','firstname'=>'Alexandre','mail'=>'adrut@free.fr','pwd'=>'1111','phone'=>'01','subdate'=>'21-09-2021 12:55','nbresponse'=>'1','role'=>'admin','newsletter'=>'false','activated'=>'false','imgsrc'=>'/ttt','nbquestion'=>'1'),
            // array('name'=>'DRUT','firstname'=>'Alexandre','mail'=>'adrut@free.fr','pwd'=>'222','phone'=>'01','subdate'=>'21-09-2021 12:55','nbresponse'=>'1','role'=>'admin','newsletter'=>'false','activated'=>'false','imgsrc'=>'/ttt','nbquestion'=>'1')
            
        );

        foreach ($tab as $row) {
        $news = new Users();
        $news -> setName($row['name']);
        $news -> setFirstname($row['firstname']);
        $news -> setMail($row['mail']);
        // $news -> setPwd($row['pwd']);
        // $news -> setPhone($row['phone']);
        $news -> setSubdate(new DateTime($row['subdate']));
        $news -> setImgsrc($row['imgsrc']);
        $news -> setNbresponse($row['nbresponse']);
        $news -> setNbquestion($row['nbquestion']);
        $news -> setRole($row['role']);
        $news -> setNewsletter($row['newsletter']);
        $news -> setActivated($row['activated']);

           $manager->persist($news);

        $manager->flush(); 
        }


        

        
    }
}

?>