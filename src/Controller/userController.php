<?php

namespace App\Controller;

use App\Entity\User;
use App\Forms\Type\FormTypeUser;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class userController extends Controller
{
    /**
     * @Route("/user", name="user")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        //$conUser= new User();
        $conUser = $em->getRepository('App:User')->findAll();

        return $this->render('user/listadoUsuario.html.twig', [
            "usuarios"=>$conUser
        ]);
    }

    /**
     * @Route("/user/nuevo/{idUsuario}", requirements={"idUsuario"="\d+"},defaults={"idUsuario"=0}, name="registrarUsuario")
     */
    public function nuevoUsuario(Request $request, $idUsuario){
        $em = $this->getDoctrine()->getManager();
        $arUser= new User();
        if($idUsuario != 0) {
            $arUser = $em->getRepository('App:User')->find($idUsuario);
        }
        $form = $this->createForm(FormTypeUser::class, $arUser); //create form
        $form->handleRequest($request   );
        //$arFactura = $em->getRepository('App:Factura')->find(1);
        if($form->isSubmitted() && $form->isValid()){
            $fecha = new \DateTime('now');
           $arUser->setFechaNacimiento($fecha->format('y-m-d'));

            $em->persist($arUser);
            $em->flush();
            return $this->redirectToRoute('user');
        }
        else {
            return $this->render('user/nuevo.html.twig', [
                "form" => $form->createView()
            ]);
        }
    }
    /**
     * @Route("/user/eliminar/{idUsuario}", requirements={"idUsuario"="\d+"},defaults={"idUsuario"=0}, name="eliminarUsuario")
     */
    public function eliminarUsuario($idUsuario){
        $em = $this->getDoctrine()->getManager();
        $arUser= new User();
        if($idUsuario != 0) {
            $db = $em->getRepository('App:User')->find($idUsuario);
            if ($db!=null)
                $em->remove($db);
            $em->flush();
        }
        return $this->redirectToRoute('user');
    }
}
