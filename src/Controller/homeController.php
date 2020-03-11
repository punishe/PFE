<?php
namespace App\Controller;
use App\Repository\ProportyRepository;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
class homeController 
{
    private $twig;
    /**
     * @var Environment 
     */
    
    public function __construct($twig){
    $this->twig=$twig;
}
    public function index(ProportyRepository $repository): Response
    {
        $proporties= $repository->findLatest();
        return new Response($this->twig->render('pages/home.html.twig', [ 'proporties' => $proporties ]));
    }
}