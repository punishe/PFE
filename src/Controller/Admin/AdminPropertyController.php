<?php
namespace App\Controller\Admin;

use App\Entity\Hotel;
use App\Form\PropertyType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\HotelRepository;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
class AdminPropertyController extends AbstractController
{
   
 
     /**
      * @var HotelRepository
      */
     /**
      * @var ObjectManager
      */
      private $em;
        public function __construct(HotelRepository $repository,ObjectManager $em)
        {
         $this->repository= $repository;
         $this->em = $em;
        }
        /**
         * @Route("/Admin", name="admin.proporty.index")
         * return \Symfony\Component\HttpFoundation\Response;
         */
       
     public function index() 
     {
      $proporties = $this->repository->findAll();
      
       return $this->render('admin/proporty/index.html.twig', compact('proporties'));
     }
     /**
      * @Route("/Admin/proporty/create",name="admin.proporty.new")
      * @param Hotel $proporty
      * @param Request $request
      * return \Symfony\Component\HttpFoundation\Response
      */
     public function new(Request $request){
       $proporty=new Hotel();
       $form=$this->createForm(PropertyType::class,$proporty);
       $form->handleRequest($request);
       if($form->isSubmitted() && $form->isValid()){
           $this->em->persist($proporty);
           $this->em->flush();
           $this->addFlash('success','données crées avec succès');
           return $this->redirectToRoute('admin.proporty.index');
       }
       return $this->render('admin/proporty/new.html.twig', [
        'proporty' => $proporty,
        'form' => $form->createView()
        ]);
     }
     /**
      * @Route("/admin/proporty/{id}",name="admin.proporty.edit", methods="GET|POST")
      * @param Hotel $proporty
      * @param Request $request
      * return \Symfony\Component\HttpFoundation\Response
      */
     public function edit(Hotel $proporty, Request $request ){
         $form=$this->createForm(PropertyType::class, $proporty);
         $form->handleRequest($request);
         if ($form->isSubmitted() && $form->isValid()) {
             $this->em->flush();
             $this->addFlash('success','données modifiés avec succès');
             return $this->redirectToRoute('admin.proporty.index');
         }
         return $this->render('admin/proporty/edit.html.twig', [
           'proporty' => $proporty,
           'form' => $form->createView()
           ]);
     }
     /**
      * @Route("/admin/proporty/{id}",name="admin.proporty.delete", methods="DELETE")
      * @param Hotel $proporty
      * @param Request $request  
      * return \Symfony\Component\HttpFoundation\RedirectResponse
      */
 
     public function delete(Hotel $proporty,Request $request)
     {
         if ($this->isCsrfTokenValid('delete' . $proporty->getId(), $request->get('_token')))
         {
             $this->em->remove($proporty);
             $this->em->flush();
             $this->addFlash('success','données supprimés avec succès');

            
         }

         return $this->redirectToRoute('admin.proporty.index');
     }
    


}













