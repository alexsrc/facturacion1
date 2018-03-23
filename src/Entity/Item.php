<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ItemRepository")
 */
class Item
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="id_item_pk", type="integer", unique=true)
     */
    private $idItemPk;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_item", type="string", length=255, nullable= TRUE)
     */
    private $codigoItem;

    /**
     * @var float
     *
     * @ORM\Column(name="iva", type="float", nullable= TRUE)
     */
    private $iva;

    /**
     * @var float
     *
     * @ORM\Column(name="valor", type="float", nullable= TRUE)
     *
     */
    private $valor;

    /**
     * @var string
     *
     * @ORM\Column(name="id_factura_fk", type="string", nullable= TRUE)
     *
     */
    private $idFacturaFk;


    /**
     * @var string
     *
     * @ORM\Column(name="nombre_producto", type="string", nullable= true)
     *
     */
    private $nombreProducto;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Factura", mappedBy="itemFacturaRel")
     */
    private $facturaItemRel;


    public function getId()
    {
        return $this->id;
    }




    /**
     * @return string
     */
    public function getCodigoItem()
    {
        return $this->codigoItem;
    }

    /**
     * @param string $codigoItem
     */
    public function setCodigoItem(string $codigoItem)
    {
        $this->codigoItem = $codigoItem;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdItemPk()
    {
        return $this->idItemPk;
    }

    /**
     * @param mixed $idItemPk
     */
    public function setIdItemPk($idItemPk)
    {
        $this->idItemPk = $idItemPk;
        return $this;
    }

    /**
     * @return float
     */
    public function getIva()
    {
        return $this->iva;
    }

    /**
     * @param float $iva
     */
    public function setIva(float $iva)
    {
        $this->iva = $iva;
        return $this;
    }

    /**
     * @return float
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @param float $valor
     */
    public function setValor(float $valor)
    {
        $this->valor = $valor;
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
     * @return string
     */
    public function getNombreProducto()
    {
        return $this->nombreProducto;
    }

    /**
     * @param string $nombreProducto
     */
    public function setNombreProducto(string $nombreProducto)
    {
        $this->nombreProducto = $nombreProducto;
        return $this;
    }



    /**
     * @return mixed
     */
    public function getFacturaItemRel()
    {
        return $this->facturaItemRel;
    }

    /**
     * @param mixed $facturaItemRel
     */
    public function setFacturaItemRel($facturaItemRel)
    {
        $this->facturaItemRel = $facturaItemRel;
        return $this;
    }



}
