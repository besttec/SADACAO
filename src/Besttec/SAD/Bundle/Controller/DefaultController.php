<?php

namespace Besttec\SAD\Bundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BesttecSADBundle:Default:index.html.twig');
    }
    
    public function novooficioAction()
    {
        return $this->render('BesttecSADBundle:Default:novooficio.html.twig');
    }
    
    public function historicoAction()
    {
        return $this->render('BesttecSADBundle:Default:historico.html.twig');
    }
    
    public function geraroficioAction(Request $request)
    {
        $dados = $request->request->All();
        
        //var_dump($dados);
        
        //return $this->render('BesttecSADBundle:Default:oficio.html.twig', array('dados'=>$dados));
    }
}
