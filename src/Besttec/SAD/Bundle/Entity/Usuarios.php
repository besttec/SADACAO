<?php

namespace Besttec\SAD\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuarios
 *
 * @ORM\Table(name="usuarios")
 * @ORM\Entity
 */
class Usuarios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_usuario", type="string", length=45, nullable=false)
     */
    private $nomeUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="login_usuario", type="string", length=20, nullable=true)
     */
    private $loginUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="senha_usuario", type="string", length=20, nullable=true)
     */
    private $senhaUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="cpf_usuario", type="string", length=11, nullable=true)
     */
    private $cpfUsuario;



    /**
     * Get idUsuario
     *
     * @return integer 
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set nomeUsuario
     *
     * @param string $nomeUsuario
     * @return Usuarios
     */
    public function setNomeUsuario($nomeUsuario)
    {
        $this->nomeUsuario = $nomeUsuario;

        return $this;
    }

    /**
     * Get nomeUsuario
     *
     * @return string 
     */
    public function getNomeUsuario()
    {
        return $this->nomeUsuario;
    }

    /**
     * Set loginUsuario
     *
     * @param string $loginUsuario
     * @return Usuarios
     */
    public function setLoginUsuario($loginUsuario)
    {
        $this->loginUsuario = $loginUsuario;

        return $this;
    }

    /**
     * Get loginUsuario
     *
     * @return string 
     */
    public function getLoginUsuario()
    {
        return $this->loginUsuario;
    }

    /**
     * Set senhaUsuario
     *
     * @param string $senhaUsuario
     * @return Usuarios
     */
    public function setSenhaUsuario($senhaUsuario)
    {
        $this->senhaUsuario = $senhaUsuario;

        return $this;
    }

    /**
     * Get senhaUsuario
     *
     * @return string 
     */
    public function getSenhaUsuario()
    {
        return $this->senhaUsuario;
    }

    /**
     * Set cpfUsuario
     *
     * @param string $cpfUsuario
     * @return Usuarios
     */
    public function setCpfUsuario($cpfUsuario)
    {
        $this->cpfUsuario = $cpfUsuario;

        return $this;
    }

    /**
     * Get cpfUsuario
     *
     * @return string 
     */
    public function getCpfUsuario()
    {
        return $this->cpfUsuario;
    }
}
