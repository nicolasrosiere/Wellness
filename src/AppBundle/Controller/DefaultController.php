<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        /*
        $repository_img = $this->getDoctrine()->getManager()->getRepository('AppBundle:Image');
        $repository_service = $this->getDoctrine()->getEntityManager()->getRepository('AppBundle:ServicesCategory');
        $repository_provider = $this->getDoctrine()->getEntityManager()->getRepository('AppBundle:Provider');

        $listLastTraineeships = $this->getDoctrine()->getEntityManager()->getRepository('AppBundle:TraineeShip')->getLastListTraineeships(4);
        $listLastPromotions = $this->getDoctrine()->getEntityManager()->getRepository('AppBundle:Promotion')->getLastListPromotions(4);


        $monthService = $repository_service->findOneBy(
            array("forward" => "1")
        );

        if ($monthService == null) {
            throw $this->createNotFoundException("Pas de service du mois trouvé !");
        }

        return $this->render('default/index.html.twig', array(
            'monthService' => $monthService,
            'provider' => $repository_provider,
            'listLastTraineeships' => $listLastTraineeships,
            'listLastPromotions' => $listLastPromotions
        ));

        */

        return $this->render('default/index.html.twig');
    }
}
