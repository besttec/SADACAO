<?php

namespace Besttec\SAD\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Historicos
 *
 * @ORM\Table(name="historicos", indexes={@ORM\Index(name="fk_historicos_oficios1", columns={"oficios_num_oficio"}), @ORM\Index(name="fk_historicos_secretarias1", columns={"secretarias_id_secretaria"}), @ORM\Index(name="fk_historicos_usuarios1", columns={"usuarios_id_usuario"})})
 * @ORM\Entity
 */
class Historicos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_historico", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idHistorico;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_saida", type="date", nullable=false)
     */
    private $dataSaida;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_retorno", type="date", nullable=true)
     */
    private $dataRetorno;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="text", nullable=false)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=false)
     */
    private $status;

    /**
     * @var \Usuarios
     *
     * @ORM\ManyToOne(targetEntity="Usuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuarios_id_usuario", referencedColumnName="id_usuario")
     * })
     */
    private $usuariosUsuario;

    /**
     * @var \Oficios
     *
     * @ORM\ManyToOne(targetEntity="Oficios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="oficios_num_oficio", referencedColumnName="num_oficio")
     * })
     */
    private $oficiosNumOficio;

    /**
     * @var \Secretarias
     *
     * @ORM\ManyToOne(targetEntity="Secretarias")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="secretarias_id_secretaria", referencedColumnName="id_secretaria")
     * })
     */
    private $secretariasSecretaria;



    /**
     * Get idHistorico
     *
     * @return integer 
     */
    public function getIdHistorico()
    {
        return $this->idHistorico;
    }

    /**
     * Set dataSaida
     *
     * @param \DateTime $dataSaida
     * @return Historicos
     */
    public function setDataSaida($dataSaida)
    {
        $this->dataSaida = $dataSaida;

        return $this;
    }

    /**
     * Get dataSaida
     *
     * @return \DateTime 
     */
    public function getDataSaida()
    {
        return $this->dataSaida;
    }

    /**
     * Set dataRetorno
     *
     * @param \DateTime $dataRetorno
     * @return Historicos
     */
    public function setDataRetorno($dataRetorno)
    {
        $this->dataRetorno = $dataRetorno;

        return $this;
    }

    /**
     * Get dataRetorno
     *
     * @return \DateTime 
     */
    public function getDataRetorno()
    {
        return $this->dataRetorno;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     * @return Historicos
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string 
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Historicos
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set usuariosUsuario
     *
     * @param \Besttec\SAD\Bundle\Entity\Usuarios $usuariosUsuario
     * @return Historicos
     */
    public function setUsuariosUsuario(\Besttec\SAD\Bundle\Entity\Usuarios $usuariosUsuario = null)
    {
        $this->usuariosUsuario = $usuariosUsuario;

        return $this;
    }

    /**
     * Get usuariosUsuario
     *
     * @return \Besttec\SAD\Bundle\Entity\Usuarios 
     */
    public function getUsuariosUsuario()
    {
        return $this->usuariosUsuario;
    }

    /**
     * Set oficiosNumOficio
     *
     * @param \Besttec\SAD\Bundle\Entity\Oficios $oficiosNumOficio
     * @return Historicos
     */
    public function setOficiosNumOficio(\Besttec\SAD\Bundle\Entity\Oficios $oficiosNumOficio = null)
    {
        $this->oficiosNumOficio = $oficiosNumOficio;

        return $this;
    }

    /**
     * Get oficiosNumOficio
     *
     * @return \Besttec\SAD\Bundle\Entity\Oficios 
     */
    public function getOficiosNumOficio()
    {
        return $this->oficiosNumOficio;
    }

    /**
     * Set secretariasSecretaria
     *
     * @param \Besttec\SAD\Bundle\Entity\Secretarias $secretariasSecretaria
     * @return Historicos
     */
    public function setSecretariasSecretaria(\Besttec\SAD\Bundle\Entity\Secretarias $secretariasSecretaria = null)
    {
        $this->secretariasSecretaria = $secretariasSecretaria;

        return $this;
    }

    /**
     * Get secretariasSecretaria
     *
     * @return \Besttec\SAD\Bundle\Entity\Secretarias 
     */
    public function getSecretariasSecretaria()
    {
        return $this->secretariasSecretaria;
    }
}
