<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Comentarios;

class IndexController extends Controller
{
    /**
     * @Route("/admin/index", name="index_admin")
     */
    public function aboutAction(Request $request)
    {
        $this->get('twig')->addGlobal('idioma', 'DE');
        $em = $this->getDoctrine()->getManager();
        $portada = $em->getRepository('AppBundle:Portada')->Find('1');
        $em = $this->getDoctrine()->getManager();
        $com = $em->getRepository('AppBundle:Comentarios')->findAll();
        $text = $em->getRepository('AppBundle:Portada')->find('1');
        if ($request->request->count() > 1) {

            $this->editarAction($request);
        }
        return $this->render('admin/index_admin.html.twig', array('com' => $com, 'text' => $text, 'por' => $portada));
    }

    /**
     * @Route("/admin/activar/{id}/{valor}", name="index_activar")
     */
    public function activarAction(Request $request, $id, $valor)
    {
        $em = $this->getDoctrine()->getManager();
        $com = $em->getRepository('AppBundle:Comentarios')->find($id);
        $final_value = "";
        if ($valor == "Si") {
            $final_value = "No";;
        } else {
            $final_value = "Si";
        }
        $com->setActivo($final_value);
        $em->persist($com);
        $em->flush();
        return $this->redirectToRoute('index_admin');
    }

    /**
     * @Route("/admin/eliminar/{id}", name="index_eliminar")
     */
    public function eliminarAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $com = $em->getRepository('AppBundle:Comentarios')->find($id);
        $em->remove($com);
        $em->flush();
        return $this->redirectToRoute('index_admin');
    }
    /* Esto es para el texto de la Portada*/
    /**
     * @Route("/admin/texto/", name="index_texto")
     */
    public function editarAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $text = $em->getRepository('AppBundle:Portada')->Find('1');
        $name = $request->request->get('titulo');
        $men = $request->request->get('texto');

        $nameen = $request->request->get('tituloen');
        $menen = $request->request->get('textoen');

        $namede = $request->request->get('titulode');
        $mende = $request->request->get('textode');

        $text->setTituloes($name);
        $text->setTextoes($men);

        $text->setTituloen($nameen);
        $text->setTextoen($menen);

        $text->setTitulode($namede);
        $text->setTextode($mende);

        $em->persist($text);
        $em->flush();
        return $this->redirectToRoute('index_admin');
    }
}