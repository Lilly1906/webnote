<?php

namespace App\Controller;


use App\Entity\Message;
use App\Form\MessageType;
use App\Repository\MessageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/message", name="message")
 */
class MessageController extends AbstractController
{
    /**
     * @Route("/", name="message_index", methods={"GET"})
     */
    public function index()
    {
        return $this->render('message/index.html.twig', [
            'controller_name' => 'MessageController',
        ]);
    }

    /**
     * @Route("/create", name="message_create", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $message = new MessageController();
        $form = $this->createForm(MessageType::class, $message);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($message);
            $entityManager->flush();

            return $this->redirectToRoute('message_index');
        }

        return $this->render('message/new.html.twig', [
            'message' => $message,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/create", name="message_create", methods={"GET"})
     */
    public function create()
    {
        return $this->render('message/create.html.twig', [
            'controller_name' => 'MessageCreateController',
        ]);
    }
    /**
     * @Route("/update", name="message_update", methods={"GET"})
     */
    public function update()
    {
        return $this->render('message/update.html.twig', [
            'controller_name' => 'MessageUpdateController',
        ]);
    }
    /**
     * @Route("/read", name="message_read", methods={"GET"})
     */
    public function read()
    {
        return $this->render('message/read.html.twig', [
            'controller_name' => 'MessageReadController',
        ]);
    }
    /**
     * @Route("/delete", name="message_delete", methods={"GET"})
     */
    public function delete()
    {
        return $this->render('message/delete.html.twig', [
            'controller_name' => 'MessageDeleteController',
        ]);
    }
}
