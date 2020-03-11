<?php
namespace App\Controller;
use App\Entity\Proporty;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\ProportyRepository;

class proportyController extends AbstractController
{
    private $twig;
    /**
     * @var Environment
     * @var ProportyRepository 
     */

    public function __construct(ProportyRepository $repository,$twig){
        $this->twig=$twig;
        $this->repository = $repository;
    }
   
       
    public function index(): Response 
    {
    $proporty = $this->repository->findAllVisible();
        dump($proporty);
    
        return new Response($this->twig->render('proporty/index.html.twig',[
            'current_menu' => 'proporties'
        ]));
    }
}