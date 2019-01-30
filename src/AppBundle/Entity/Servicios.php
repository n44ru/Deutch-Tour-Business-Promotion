<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Servicios
 *
 * @ORM\Table(name="servicios", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Servicios
{
    /**
     * @var string
     *
     * @ORM\Column(name="tituloes", type="string", length=255, nullable=true)
     */
    private $tituloes;

    /**
     * @var string
     *
     * @ORM\Column(name="textoes", type="string", length=3000, nullable=true)
     */
    private $textoes;

    /**
     * @var string
     *
     * @ORM\Column(name="tiuloen", type="string", length=255, nullable=true)
     */
    private $tiuloen;

    /**
     * @var string
     *
     * @ORM\Column(name="textoen", type="string", length=3000, nullable=true)
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
     * @ORM\Column(name="textode", type="string", length=3000, nullable=true)
     */
    private $textode;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen1", type="string", length=255, nullable=true)
     */
    private $imagen1;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen2", type="string", length=255, nullable=true)
     */
    private $imagen2;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen3", type="string", length=255, nullable=true)
     */
    private $imagen3;

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
     * @return Servicios
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
     * @return Servicios
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
     * Set tiuloen
     *
     * @param string $tiuloen
     * @return Servicios
     */
    public function setTiuloen($tiuloen)
    {
        $this->tiuloen = $tiuloen;

        return $this;
    }

    /**
     * Get tiuloen
     *
     * @return string 
     */
    public function getTiuloen()
    {
        return $this->tiuloen;
    }

    /**
     * Set textoen
     *
     * @param string $textoen
     * @return Servicios
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
     * @return Servicios
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
     * @return Servicios
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
     * Set imagen1
     *
     * @param string $imagen1
     * @return Servicios
     */
    public function setImagen1($imagen1)
    {
        $this->imagen1 = $imagen1;

        return $this;
    }

    /**
     * Get imagen1
     *
     * @return string 
     */
    public function getImagen1()
    {
        return $this->imagen1;
    }

    /**
     * Set imagen2
     *
     * @param string $imagen2
     * @return Servicios
     */
    public function setImagen2($imagen2)
    {
        $this->imagen2 = $imagen2;

        return $this;
    }

    /**
     * Get imagen2
     *
     * @return string 
     */
    public function getImagen2()
    {
        return $this->imagen2;
    }

    /**
     * Set imagen3
     *
     * @param string $imagen3
     * @return Servicios
     */
    public function setImagen3($imagen3)
    {
        $this->imagen3 = $imagen3;

        return $this;
    }

    /**
     * Get imagen3
     *
     * @return string 
     */
    public function getImagen3()
    {
        return $this->imagen3;
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
