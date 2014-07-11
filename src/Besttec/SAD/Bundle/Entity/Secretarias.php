<?php

namespace Besttec\SAD\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Secretarias
 *
 * @ORM\Table(name="secretarias")
 * @ORM\Entity
 */
class Secretarias
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_secretaria", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSecretaria;

    /**
     * @var string
     *
     * @ORM\Column(name="secretaria", type="string", length=45, nullable=false)
     */
    private $secretaria;



    /**
     * Get idSecretaria
     *
     * @return integer 
     */
    public function getIdSecretaria()
    {
        return $this->idSecretaria;
    }

    /**
     * Set secretaria
     *
     * @param string $secretaria
     * @return Secretarias
     */
    public function setSecretaria($secretaria)
    {
        $this->secretaria = $secretaria;

        return $this;
    }

    /**
     * Get secretaria
     *
     * @return string 
     */
    public function getSecretaria()
    {
        return $this->secretaria;
    }
}
