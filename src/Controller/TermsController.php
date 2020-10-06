<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/terms", name="terms")
 */

class TermsController extends AbstractController
{
    /**
     * @Route("/", name="terms_index")
     */
    public function index()
    {
        return $this->render('terms/index.html.twig', [
            'controller_name' => 'TermsController',
        ]);
    }
    /**
     * @Route("/privacyPolice", name="terms_privacyPolice")
     */
    public function privacyPolice()
    {
        return $this->render('terms/privacyPolice.html.twig', [
            'controller_name' => 'PrivacyPoliceController',
        ]);
    }
    /**
     * @Route("/termsSale", name="terms_termsSale")
     */
    public function termsSale()
    {
        return $this->render('terms/termsSale.html.twig', [
            'controller_name' => 'TermsOfSaleController',
        ]);
    }
    /**
     * @Route("/termsUse", name="terms_termsUse")
     */
    public function termsUse()
    {
        return $this->render('terms/termsUse.html.twig', [
            'controller_name' => 'TermsOfUseController',
        ]);
    }
}
