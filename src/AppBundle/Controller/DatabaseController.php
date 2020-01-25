<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Actor;
use AppBundle\Repository\ActorClassRepository;
use AppBundle\Repository\ActorRepository;
use AppBundle\Repository\ArmaRepository;
use AppBundle\Repository\EnemigoRepository;
use AppBundle\Repository\ItemRepository;
use AppBundle\Repository\SkillRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;


class DatabaseController extends Controller
{




    /**
     * @Route("/dbswitch", name="sustituirDatabase")
     */
    public function indexAction(Request $request, ArmaRepository $armaRepository, ItemRepository $itemRepository,
                                SkillRepository $skillRepository, ActorClassRepository $actorClassRepository,
                                EnemigoRepository $enemigoRepository, ActorRepository $actorRepository)
    {

        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];

        $serializer = new Serializer($normalizers, $encoders);

        $elemento = $actorRepository->findAll();
        $result = [null];
        $jsonContent = $serializer->serialize($elemento, 'json');


        if ($request->get('entidad') != null){
            switch ($request->get('entidad')){
                case '$dataWeapons':
                    $elemento = $armaRepository->findAll();
                    $jsonContent = $serializer->serialize($elemento, 'json');
                    return new Response( $jsonContent, 200);
                    break;
                case '$dataItems':
                    $elemento = $itemRepository->findAll();
                    $jsonContent = $serializer->serialize($elemento, 'json');
                    return new Response( $jsonContent, 200);
                    break;
                case '$dataArmors':
                    break;
                case '$dataSkills':
                    $elemento = $skillRepository->findAll();
                    $jsonContent = $serializer->serialize($elemento, 'json');
                    return new Response( $jsonContent, 200);
                    break;
                case '$dataClasses':
                    $elemento = $actorClassRepository->findAll();
                    $jsonContent = $serializer->serialize($elemento, 'json');
                    return new Response( $jsonContent, 200);
                    break;
                case '$dataEnemies':
                    $elemento = $enemigoRepository->findAll();
                    $jsonContent = $serializer->serialize($elemento, 'json');
                    return new Response( $jsonContent, 200);
                    break;
                case '$dataActors':
                    $elemento = $actorRepository->findAll();
                    $jsonContent = $serializer->serialize($elemento, 'json');
                    return new Response( $jsonContent, 200);
                    break;
            }
        }

        return new Response( $jsonContent, 200);
    }

}
