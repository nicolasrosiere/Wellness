<?php

namespace AppBundle\DataFixtures\ORM;

use Hautelook\AliceBundle\Doctrine\DataFixtures\AbstractLoader;

class AppFixtures extends AbstractLoader{

    public function getFixtures(){
        return array(
            __DIR__ . '/Town.yml',
            __DIR__ . '/PostalCode.yml',
            __DIR__ . '/Locality.yml',
            __DIR__ . '/Newsletter.yml',
            __DIR__ . '/surfer.yml',
            __DIR__ . '/ServicesCategory.yml',
            __DIR__ . '/Provider.yml',
            __DIR__ . '/Comment.yml',
            __DIR__ . '/Abuse.yml',
            __DIR__ . '/Traineeship.yml',
            __DIR__ . '/Promotion.yml',
            __DIR__ . '/Block.yml',
            __DIR__ . '/Image.yml',
        );
    }

    public function userType(){
        $userType = array('ADMIN', 'SURFER', 'PROVIDER');

        return $userType[array_rand($userType)];
    }

    public function imageType(){
        $imageType = array('jpeg', 'jpg', 'png');

        return $imageType[array_rand($imageType)];
    }


}