<?php

namespace Besttec\SAD\Bundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Besttec\SAD\Bundle\Entity\Historicos;
use Besttec\SAD\Bundle\Entity\Oficios;
use Besttec\SAD\Bundle\Entity\Secretarias;
use Besttec\SAD\Bundle\Entity\Usuarios;
use Besttec\SAD\Bundle\RegraNegocio\HistoricoRN;
use Besttec\SAD\Bundle\RegraNegocio\OficioRN;
use Besttec\SAD\Bundle\RegraNegocio\UsuarioRN;
use Besttec\SAD\Bundle\RegraNegocio\SecretariaRN;
use Besttec\SAD\Bundle\DAO\OficioDAO;
use Besttec\SAD\Bundle\DAO\UsuarioDAO;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BesttecSADBundle:Default:index.html.twig');
    }
    
    public function novooficioAction()
    {
        $usuarioDAO = new UsuarioDAO($this->getDoctrine());
        $usuarioRN = new UsuarioRN($usuarioDAO);
        //
        return $this->render('BesttecSADBundle:Default:novooficio.html.twig', 
                array("usuarios" => $usuarioRN->getUsuarios()));
    }
    
    public function historicoAction()
    {
        return $this->render('BesttecSADBundle:Default:historico.html.twig');
    }
    
    public function salvaroficioAction(Request $request)
    {   
        
        $dados = $request->request->all();
        $oficio = new Oficios();
        $oficio->setDataCricaoOficio($dados['data']);
        $oficio->setDescricao($dados['descricao']);
        $oficio->setNumOficio($dados['cod_oficio']);
        $oficio->setDestinatario($dados['para_quem']);
        
        $oficioDAO = new OficioDAO($this->getDoctrine());
        $oficioRN = new OficioRN($oficioDAO);
        $resultado = $oficioRN->gravarOficio($oficio);
        
        $resultadoJson = array("resultado" => $resultado);
        
        return new JsonResponse($resultadoJson);
    }
    
    public function geraroficioAction(Request $request)
    {
        $dados = $request->request->All();        
        $oficio = new Oficios();
        $oficio->setNumOficio($dados['cod_oficio']);
        $oficioDAO = new OficioDAO($this->getDoctrine());
        
        return $this->render('BesttecSADBundle:Default:oficio.html.twig',
                array('oficio'=>$oficioDAO->getOficio($oficio->getNumOficio())));
    }
}