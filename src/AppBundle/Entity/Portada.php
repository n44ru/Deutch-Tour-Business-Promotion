<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Portada
 *
 * @ORM\Table(name="portada", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Portada
{
    /**
     * @var string
     *
     * @ORM\Column(name="tituloes", type="string", length=255, nullable=false)
     */
    private $tituloes;

    /**
     * @var string
     *
     * @ORM\Column(name="textoes", type="string", length=1000, nullable=false)
     */
    private $textoes;

    /**
     * @var string
     *
     * @ORM\Column(name="tituloen", type="string", length=255, nullable=true)
     */
    private $tituloen;

    /**
     * @var string
     *
     * @ORM\Column(name="textoen", type="string", length=255, nullable=true)
     */
    private $textoen;

    /**
     * @var string
     *
     * @ORM\Column(name="titulode", type="string", length=255, nullable=true)
     */
    private $titulode;

    /**
     * @var string
     *
     * @ORM\Column(name="textode", type="string", length=255, nullable=true)
     */
    private $textode;

    /**
     * @var string
     *
     * @ORM\Column(name="sloganes", type="string", length=255, nullable=true)
     */
    private $sloganes;

    /**
     * @var string
     *
     * @ORM\Column(name="sloganen", type="string", length=255, nullable=true)
     */
    private $sloganen;

    /**
     * @var string
     *
     * @ORM\Column(name="slogande", type="string", length=255, nullable=true)
     */
    private $slogande;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set tituloes
     *
     * @param string $tituloes
     * @return Portada
     */
    public function setTituloes($tituloes)
    {
        $this->tituloes = $tituloes;

        return $this;
    }

    /**
     * Get tituloes
     *
     * @return string 
     */
    public function getTituloes()
    {
        return $this->tituloes;
    }

    /**
     * Set textoes
     *
     * @param string $textoes
     * @return Portada
     */
    public function setTextoes($textoes)
    {
        $this->textoes = $textoes;

        return $this;
    }

    /**
     * Get textoes
     *
     * @return string 
     */
    public function getTextoes()
    {
        return $this->textoes;
    }

    /**
     * Set tituloen
     *
     * @param string $tituloen
     * @return Portada
     */
    public function setTituloen($tituloen)
    {
        $this->tituloen = $tituloen;

        return $this;
    }

    /**
     * Get tituloen
     *
     * @return string 
     */
    public function getTituloen()
    {
        return $this->tituloen;
    }

    /**
     * Set textoen
     *
     * @param string $textoen
     * @return Portada
     */
    public function setTextoen($textoen)
    {
        $this->textoen = $textoen;

        return $this;
    }

    /**
     * Get textoen
     *
     * @return string 
     */
    public function getTextoen()
    {
        return $this->textoen;
    }

    /**
     * Set titulode
     *
     * @param string $titulode
     * @return Portada
     */
    public function setTitulode($titulode)
    {
        $this->titulode = $titulode;

        return $this;
    }

    /**
     * Get titulode
     *
     * @return string 
     */
    public function getTitulode()
    {
        return $this->titulode;
    }

    /**
     * Set textode
     *
     * @param string $textode
     * @return Portada
     */
    public function setTextode($textode)
    {
        $this->textode = $textode;

        return $this;
    }

    /**
     * Get textode
     *
     * @return string 
     */
    public function getTextode()
    {
        return $this->textode;
    }

    /**
     * Set sloganes
     *
     * @param string $sloganes
     * @return Portada
     */
    public function setSloganes($sloganes)
    {
        $this->sloganes = $sloganes;

        return $this;
    }

    /**
     * Get sloganes
     *
     * @return string 
     */
    public function getSloganes()
    {
        return $this->sloganes;
    }

    /**
     * Set sloganen
     *
     * @param string $sloganen
     * @return Portada
     */
    public function setSloganen($sloganen)
    {
        $this->sloganen = $sloganen;

        return $this;
    }

    /**
     * Get sloganen
     *
     * @return string 
     */
    public function getSloganen()
    {
        return $this->sloganen;
    }

    /**
     * Set slogande
     *
     * @param string $slogande
     * @return Portada
     */
    public function setSlogande($slogande)
    {
        $this->slogande = $slogande;

        return $this;
    }

    /**
     * Get slogande
     *
     * @return string 
     */
    public function getSlogande()
    {
        return $this->slogande;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
