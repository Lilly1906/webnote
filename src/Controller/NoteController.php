<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/note", name="note")
 */

class NoteController extends AbstractController
{
    /**
     * @Route("/", name="note_index")
     */
    public function index()
    {
        return $this->render('note/index.html.twig', [
            'controller_name' => 'NoteController',
        ]);
    }
    /**
     * @Route("/create", name="note_create")
     */
    public function create()
    {
        return $this->render('note/create.html.twig', [
            'controller_name' => 'NoteCreateController',
        ]);
    }
    /**
     * @Route("/update", name="note_update")
     */
    public function update()
    {
        return $this->render('note/update.html.twig', [
            'controller_name' => 'NoteUpdateController',
        ]);
    }
    /**
     * @Route("/read", name="note_read")
     */
    public function read()
    {
        return $this->render('note/read.html.twig', [
            'controller_name' => 'NoteReadController',
        ]);
    }
    /**
     * @Route("/delete", name="note_delete")
     */
    public function delete()
    {
        return $this->render('note/delete.html.twig', [
            'controller_name' => 'NoteDeleteController',
        ]);
    }
}
