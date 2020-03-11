<?php
namespace App\Controller\Admin;

use App\Entity\Proporty;
use App\Form\PropertyType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\ProportyRepository;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
class AdminPropertyController extends AbstractController
{
   
 
     /**
      * @var ProportyRepository
      */
     /**
      * @var ObjectManager
      */
      private $em;
        public function __construct(ProportyRepository $repository,ObjectManager $em)
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
         * @Route("/Admin/proporty/create", name="admin.proporty.new")
         * return \Symfony\Component\HttpFoundation\Response;
         */
     public function new(Request $request){
       $proporty=new Proporty();
       $form=$this->createForm(PropertyType::class,$proporty);
       $form->handleRequest($request);
       if($form->isSubmitted() && $form->isValid()){
           $this->em->persist($proporty);
           $this->em->flush();
           return $this->redirectToRoute('admin.proporty.index');
       }
       return $this->render('admin/proporty/edit.html.twig', [
        'proporty' => $proporty,
        'form' => $form->createView()
        ]);
     }
     /**
      * @Route("/admin/proporty/{id}",name="admin.proporty.edit")
      * @param Proporty $proporty
      * @param Request $request
      * return \Symfony\Component\HttpFoundation\Response
      */
     public function edit(Proporty $proporty, Request $request ){
        $form=$this->createForm(PropertyType::class,$proporty);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $this->em->flush();
            return $this->redirectToRoute('admin.proporty.index');
        }
        return $this->render('admin/proporty/edit.html.twig', [
           'proporty' => $proporty,
           'form' => $form->createView()
           ]);
     }



}













