<?php

namespace Besttec\SAD\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Oficios
 *
 * @ORM\Table(name="oficios")
 * @ORM\Entity
 */
class Oficios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="num_oficio", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numOficio;

    /**
     * @var string
     *
     * @ORM\Column(name="data_cricao_oficio", type="string", length=45, nullable=false)
     */
    private $dataCricaoOficio;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="text", nullable=false)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="remetente", type="string", length=45, nullable=true)
     */
    private $remetente;

    /**
     * @var string
     *
     * @ORM\Column(name="destinatario", type="string", length=45, nullable=true)
     */
    private $destinatario;



    /**
     * Get numOficio
     *
     * @return integer 
     */
    public function getNumOficio()
    {
        return $this->numOficio;
    }

    /**
     * Set dataCricaoOficio
     *
     * @param string $dataCricaoOficio
     * @return Oficios
     */
    public function setDataCricaoOficio($dataCricaoOficio)
    {
        $this->dataCricaoOficio = $dataCricaoOficio;

        return $this;
    }

    /**
     * Get dataCricaoOficio
     *
     * @return string 
     */
    public function getDataCricaoOficio()
    {
        return $this->dataCricaoOficio;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     * @return Oficios
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
     * Set remetente
     *
     * @param string $remetente
     * @return Oficios
     */
    public function setRemetente($remetente)
    {
        $this->remetente = $remetente;

        return $this;
    }

    /**
     * Get remetente
     *
     * @return string 
     */
    public function getRemetente()
    {
        return $this->remetente;
    }

    /**
     * Set destinatario
     *
     * @param string $destinatario
     * @return Oficios
     */
    public function setDestinatario($destinatario)
    {
        $this->destinatario = $destinatario;

        return $this;
    }

    /**
     * Get destinatario
     *
     * @return string 
     */
    public function getDestinatario()
    {
        return $this->destinatario;
    }
}
