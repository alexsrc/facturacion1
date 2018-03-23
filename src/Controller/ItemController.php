<?php

namespace App\Controller;

use App\Entity\Item;
use App\Forms\Type\FormTypeItem;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ItemController extends Controller
{
    /**
     * @Route("/item", name="item")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        //$conUser= new User();
        $arItem = $em->getRepository('App:Item')->findAll();

        return $this->render('item/listadoItem.html.twig', [
            "items"=>$arItem
        ]);
    }

    /**
     * @Route("/item/nuevo/{idItem}", requirements={"idItem"="\d+"},defaults={"idItem"=0}, name="registrarItem")
     */
    public function nuevoItem(Request $request, $idItem){
        $em = $this->getDoctrine()->getManager();
        $arItem= new Item();
        if($idItem != 0) {
            $arItem = $em->getRepository('App:Item')->find($idItem);
        }
        $form = $this->createForm(FormTypeItem::class, $arItem); //create form
        $form->handleRequest($request);
        //$arFactura = $em->getRepository('App:Factura')->find(1);
        if($form->isSubmitted() && $form->isValid()){
            $em->persist($arItem);
            $em->flush();
            return $this->redirectToRoute('item');
        }
        else {
            return $this->render('item/nuevo.html.twig', [
                "form" => $form->createView()
            ]);
        }
    }

    /**
     * @Route("/item/eliminar/{idItem}", requirements={"idItem"="\d+"},defaults={"idItem"=0}, name="eliminarItem")
     */
    public function eliminarUsuario($idItem){
        $em = $this->getDoctrine()->getManager();
        $arUser= new Item();
        if($idItem != 0) {
            $db = $em->getRepository('App:Item')->find($idItem);
            if ($db!=null)
                $em->remove($db);
            $em->flush();
        }
        return $this->redirectToRoute('item');
    }
}
