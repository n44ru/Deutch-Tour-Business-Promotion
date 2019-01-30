<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Galeria
 *
 * @ORM\Table(name="galeria", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Galeria
{
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
     * @var string
     *
     * @ORM\Column(name="imagen4", type="string", length=255, nullable=true)
     */
    private $imagen4;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen5", type="string", length=255, nullable=true)
     */
    private $imagen5;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen6", type="string", length=255, nullable=true)
     */
    private $imagen6;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen7", type="string", length=255, nullable=true)
     */
    private $imagen7;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen8", type="string", length=255, nullable=true)
     */
    private $imagen8;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set imagen1
     *
     * @param string $imagen1
     * @return Galeria
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
     * @return Galeria
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
     * @return Galeria
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
     * Set imagen4
     *
     * @param string $imagen4
     * @return Galeria
     */
    public function setImagen4($imagen4)
    {
        $this->imagen4 = $imagen4;

        return $this;
    }

    /**
     * Get imagen4
     *
     * @return string 
     */
    public function getImagen4()
    {
        return $this->imagen4;
    }

    /**
     * Set imagen5
     *
     * @param string $imagen5
     * @return Galeria
     */
    public function setImagen5($imagen5)
    {
        $this->imagen5 = $imagen5;

        return $this;
    }

    /**
     * Get imagen5
     *
     * @return string 
     */
    public function getImagen5()
    {
        return $this->imagen5;
    }

    /**
     * Set imagen6
     *
     * @param string $imagen6
     * @return Galeria
     */
    public function setImagen6($imagen6)
    {
        $this->imagen6 = $imagen6;

        return $this;
    }

    /**
     * Get imagen6
     *
     * @return string 
     */
    public function getImagen6()
    {
        return $this->imagen6;
    }

    /**
     * Set imagen7
     *
     * @param string $imagen7
     * @return Galeria
     */
    public function setImagen7($imagen7)
    {
        $this->imagen7 = $imagen7;

        return $this;
    }

    /**
     * Get imagen7
     *
     * @return string 
     */
    public function getImagen7()
    {
        return $this->imagen7;
    }

    /**
     * Set imagen8
     *
     * @param string $imagen8
     * @return Galeria
     */
    public function setImagen8($imagen8)
    {
        $this->imagen8 = $imagen8;

        return $this;
    }

    /**
     * Get imagen8
     *
     * @return string 
     */
    public function getImagen8()
    {
        return $this->imagen8;
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
