<?php
/**
 * Description of UsuarioDAO
 *
 * @author Andrey
 */
namespace Besttec\SAD\Bundle\DAO;
use Besttec\SAD\Bundle\Entity\Usuarios;


class UsuarioDAO 
{   
    /**
    *
    * @var type 
    */
    private $manager;    
    /**
     * 
     * @param type $doctrine
     */
    public function __construct($doctrine) 
    {
        $this->manager = $doctrine->getManager();
    }    
    /**
     * 
     * @param \Besttec\SAD\Bundle\Entity\Usuarios $usuario
     * @return boolean
     */
    public function gravarUsuario(Usuarios $usuario)
    {
        try {
            
            $this->manager->persist($usuario);
            $this->manager->flush();
            return true;
            
        } catch (Exception $ex) {
            return false;
        }
    }    
    /**
     * 
     * @param \Besttec\SAD\Bundle\Entity\Usuarios $usuario
     * @return boolean
     */
    public function editarUsuario(Usuarios $usuario) 
    {
        try {
       
            $this->manager->merge($usuario);
            $this->manager->flush();
            return true;
            
        } catch (Exception $ex) {
            return false;
        }        
    }    
    /**
     * 
     * @return type
     */
    public function getUsuarios()
    {
        try {
       
            $query = $this->manager->createQuery("SELECT u FROM BesttecSADBundle:Usuarios u");
            $usuarios = $query->getResult();
            return $usuarios;
            
        } catch (Exception $ex) {
            return null;
        }   
    }    
    /**
     * 
     * @param type $id
     * @return type
     */
    public function getUsuario($id) 
    {
        try {
       
            $query = $this->manager->createQuery("SELECT u FROM BesttecSADBundle:Usuarios u WHERE u.idUsuario = :id")
                    ->setParameter(":id", $id);
            
            $usuarios = $query->getResult();
            return $usuarios;
            
        } catch (Exception $ex) {
            return null;
        }  
    }
}
