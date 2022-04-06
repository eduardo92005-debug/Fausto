<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Doctrine\ORM\EntityManager;
use Doctrine\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="app_contact")
     */
    public function index(Request $request, EntityManagerInterface $em): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $data = $form->getData();
            $contact->setNom($data->getNom());
            $contact->setSujet($data->getSujet());
            $contact->setMessage($data->getMessage());
            $em->persist($contact);
            $em->flush();
            return $this->redirectToRoute('app_contact');
        }
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
            'form' => $form->createView(),
        ]);
    }
   
}
