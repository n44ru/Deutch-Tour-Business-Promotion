<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acercade
 *
 * @ORM\Table(name="acercade", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Acercade
{
    /**
     * @var string
     *
     * @ORM\Column(name="textoes", type="string", length=1000, nullable=true)
     */
    private $textoes;

    /**
     * @var string
     *
     * @ORM\Column(name="textoen", type="string", length=255, nullable=true)
     */
    private $textoen;

    /**
     * @var string
     *
     * @ORM\Column(name="textode", type="string", length=255, nullable=true)
     */
    private $textode;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen", type="string", length=255, nullable=true)
     */
    private $imagen;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set textoes
     *
     * @param string $textoes
     * @return Acercade
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
     * Set textoen
     *
     * @param string $textoen
     * @return Acercade
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
     * Set textode
     *
     * @param string $textode
     * @return Acercade
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
     * Set imagen
     *
     * @param string $imagen
     * @return Acercade
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string 
     */
    public function getImagen()
    {
        return $this->imagen;
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
