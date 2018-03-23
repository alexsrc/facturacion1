<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Date;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="id_user_pk", type="integer", unique=true)
     */
    private $idUserPk;

    /**
     * @var int
     *
     * @ORM\Column(name="identificacion", type="integer", length=255, nullable= FALSE)
     */

    private $identificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre1", type="string", length=255, nullable= FALSE)
     */

    private $nombre1;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre2", type="string", length=255, nullable= TRUE)
     */

    private $nombre2;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido1", type="string", length=255, nullable= TRUE)
     */

    private $apellido1;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido2", type="string", length=255, nullable= FALSE)
     */

    private $apellido2;

    /**
     * @var Date
     *
     * @ORM\Column(name="fecha_nacimiento", type="string", length=255, nullable= TRUE)
     */

    private $fechaNacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=255, nullable= TRUE)
     */

    private $telefono;

    /**
     * @var string
     * @ORM\Column(name="id_factura_fk", type="string", length=255, nullable= TRUE)
     */
    private $idFacturaFk;

    /**
     * @ORM\OneToMany(targetEntity="Factura", mappedBy="userFacturaRel")
     *
     */
    private $userFacturaRel;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getIdUserPk()
    {
        return $this->idUserPk;
    }

    /**
     * @param mixed $idUserPk
     */
    public function setIdUserPk($idUserPk)
    {
        $this->idUserPk = $idUserPk;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdentificacion()
    {
        return $this->identificacion;
    }

    /**
     * @param int $identificacion
     */
    public function setIdentificacion($identificacion)
    {
        $this->identificacion = $identificacion;
        return $this;
    }

    /**
     * @return string
     */
    public function getNombre1()
    {
        return $this->nombre1;
    }

    /**
     * @param string $nombre1
     */
    public function setNombre1($nombre1)
    {
        $this->nombre1 = $nombre1;
        return $this;
    }

    /**
     * @return string
     */
    public function getNombre2()
    {
        return $this->nombre2;
    }

    /**
     * @param string $nombre2
     */
    public function setNombre2($nombre2)
    {
        $this->nombre2 = $nombre2;
        return $this;
    }

    /**
     * @return string
     */
    public function getApellido1()
    {
        return $this->apellido1;
    }

    /**
     * @param string $apellido1
     */
    public function setApellido1($apellido1)
    {
        $this->apellido1 = $apellido1;
        return $this;
    }

    /**
     * @return string
     */
    public function getApellido2()
    {
        return $this->apellido2;
    }

    /**
     * @param string $apellido2
     */
    public function setApellido2($apellido2)
    {
        $this->apellido2 = $apellido2;
        return $this;
    }

    /**
     * @return Date
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * @param Date $fechaNacimiento
     */
    public function setFechaNacimiento( $fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;
        return $this;
    }

    /**
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * @param string $telefono
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdFacturaFk()
    {
        return $this->idFacturaFk;
    }

    /**
     * @param string $idFacturaFk
     */
    public function setIdFacturaFk(string $idFacturaFk)
    {
        $this->idFacturaFk = $idFacturaFk;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserFacturaRel()
    {
        return $this->userFacturaRel;
    }

    /**
     * @param mixed $userFacturaRel
     */
    public function setUserFacturaRel($userFacturaRel)
    {
        $this->userFacturaRel = $userFacturaRel;
        return $this;
    }




}
