<?php

namespace AppBundle\Controller\FrontEnd;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use AppBundle\Entity\Provider;
use AppBundle\Entity\Comment;
use AppBundle\Entity\TraineeShip;

class PromotionController extends Controller{

    /**
     *
     * @Route("/promotion/listing", name="promotion_listing")
     *
     */
    public function listPromoAction(Request $request)
    {

        $res = $request->query->get('a');
        $repo = $this->getDoctrine()->getManager()->getRepository('AppBundle\Entity\Promotion');
        $promotions = $repo->findAll($res); /* => on va chercher toutes les promotions pour les afficher sur une seule page */

        /* Affichage de tous les promotions du blog*/
        dump($promotions);
        /*return $this->render('Frontend/Promotion/promotionListing.html.twig', ['promotions' => $promotions]);*/
    }


    /**
     * @Route("/promotion/detail", name="promotion_detail ")
     */

    public function promotionDetailAction(Promotion $promotion)
    {



        return $this->render('FrontEnd/Promotion/promotionDetail.html.twig', ['promotion' => $promotion]);
    }

}
