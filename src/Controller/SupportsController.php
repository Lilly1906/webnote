<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
     * @Route("/supports", name="supports")
     */

class SupportsController extends AbstractController
{
    /**
     * @Route("/", name="supports_index")
     */
    public function index()
    {
        return $this->render('supports/index.html.twig', [
            'controller_name' => 'SupportsController',
        ]);
    }
    /**
     * @Route("/FAQ", name="supports_FAQ")
     */
    public function FAQ()
    {
        return $this->render('supports/FAQ.html.twig', [
            'controller_name' => 'SupportsFAQController',
        ]);
    }
    /**
     * @Route("/feedback", name="supports_feedback")
     */
    public function feedback()
    {
        return $this->render('supports/feedback.html.twig', [
            'controller_name' => 'SupportsFeedbackController',
        ]);
    }
    /**
     * @Route("/contact", name="supports_index")
     */
    public function contact()
    {
        return $this->render('supports/contact.html.twig', [
            'controller_name' => 'SupportsContactController',
        ]);
    }
}
