<?php
namespace App\Controller;

use App\Entity\Adherent;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\Request;


class Stats
{

    public function __invoke($data)
    {
        var_dump($data);
        die();
        // $resultat = $manager->createQuery('SELECT COUNT(l) FROM App\Entity\Livre l')->getSingleScalarResult();
        // $data = ["nbAdherents" => $resultat];
        // $data = $serializer->encode($data);
        // return $data;
    }
}