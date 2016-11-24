<?php

namespace AppBundle\Controller\FrontEnd ;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use AppBundle\Entity\Provider;
use AppBundle\Entity\Comment;
use AppBundle\Entity\TraineeShip;

class ProviderController extends Controller{

    /**
     *
     * @Route("/provider/listing", name="listing_provider")
     *
     */
    public function listAction(Request $request)
    {

        $res = $request->query->get('a');
        $repo = $this->getDoctrine()->getManager()->getRepository('AppBundle\Entity\Provider');
        $providers = $repo->findAll($res); /* => on va chercher tous les prestataires pour les afficher sur une seule page */

        /* Affichage de tous les prestataires du blog*/

        return $this->render('FrontEnd/Provider/providerListing.html.twig', ['providers' => $providers]);
    }


    /**
     * @Route("/provider/detail/{id}", name="provider_detail")
     */

    public function oneProviderAction($id)
    {

        $repo = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('AppBundle\Entity\Provider')
        ;

        $provider = $repo->find($id);

        return $this->render('FrontEnd/Provider/providerDetail.html.twig', ['provider' => $provider]);
    }

}
