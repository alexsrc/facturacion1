<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FacturaRepository")
 */
class Factura
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="id_factura_pk", type="integer", unique=true)
     */
    private $idFacturaPk;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_factura", type="string", length=255, nullable= FALSE)
     */

    private $codigoFactura;

    /**
     * @var \DateTimeime
     *
     * @ORM\Column(name="fecha", type="datetime", length=255, nullable= TRUE)
     */
    private $fecha;

    /**
     * @var float
     *
     * @ORM\Column(name="subtotal", type="float",  nullable= TRUE)
     */
    private $subtotal;

    /**
     * @var string
     *
     * @ORM\Column(name="total", type="string", nullable= FALSE)
     */
    private $total;

    /**
     * @var int
     *
     * @ORM\Column(name="id_item_fk", type="integer", length=255, nullable= FALSE)
     *
     */
    private $idItemFk;

    /**
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer", length=255, nullable= FALSE)
     */
    private $idUserFk;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Item", inversedBy="facturaItemRel")
     * @ORM\JoinColumn(name="id_item_fk", referencedColumnName="id_item_pk")
     */

    private $itemFacturaRel;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="facturaUserRel")
     * @ORM\JoinColumn(name="id_user_fk", referencedColumnName="id_user_pk")
     */

    private $userFacturaRel;


    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getIdFacturaPk()
    {
        return $this->idFacturaPk;
    }

    /**
     * @param mixed $idFacturaPk
     */
    public function setIdFacturaPk($idFacturaPk): void
    {
        $this->idFacturaPk = $idFacturaPk;
    }

    /**
     * @return string
     */
    public function getCodigoFactura(): string
    {
        return $this->codigoFactura;
    }

    /**
     * @param string $codigoFactura
     */
    public function setCodigoFactura(string $codigoFactura): void
    {
        $this->codigoFactura = $codigoFactura;
    }

    /**
     * @return \DateTimeime
     */
    public function getFecha(): \DateTime
    {
        return $this->fecha;
    }

    /**
     * @param \DateTimeime $fecha
     */
    public function setFecha(\DateTime $fecha): void
    {
        $this->fecha = $fecha;
    }

    /**
     * @return float
     */
    public function getSubtotal(): float
    {
        return $this->subtotal;
    }

    /**
     * @param float $subtotal
     */
    public function setSubtotal(float $subtotal): void
    {
        $this->subtotal = $subtotal;
    }

    /**
     * @return string
     */
    public function getTotal(): string
    {
        return $this->total;
    }

    /**
     * @param string $total
     */
    public function setTotal(string $total): void
    {
        $this->total = $total;
    }

    /**
     * @return int
     */
    public function getIdItemFk(): int
    {
        return $this->idItemFk;
    }

    /**
     * @param int $idItemFk
     */
    public function setIdItemFk(int $idItemFk): void
    {
        $this->idItemFk = $idItemFk;
    }

    /**
     * @return int
     */
    public function getIdUserFk(): int
    {
        return $this->idUserFk;
    }

    /**
     * @param int $idUserFk
     */
    public function setIdUserFk(int $idUserFk): void
    {
        $this->idUserFk = $idUserFk;
    }

    /**
     * @return mixed
     */
    public function getItemFacturaRel()
    {
        return $this->itemFacturaRel;
    }

    /**
     * @param mixed $itemFacturaRel
     */
    public function setItemFacturaRel($itemFacturaRel): void
    {
        $this->itemFacturaRel = $itemFacturaRel;
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
    public function setUserFacturaRel($userFacturaRel): void
    {
        $this->userFacturaRel = $userFacturaRel;
    }





}
