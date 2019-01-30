<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Contactos;

class ContactoController extends Controller
{
    /**
     * @Route("/admin/contact", name="contact_admin")
     */
    public function aboutAction(Request $request)
    {
        $this->get('twig')->addGlobal('idioma', 'DE');
        $em = $this->getDoctrine()->getManager();
        $portada = $em->getRepository('AppBundle:Portada')->Find('1');
        //
        $con = $em->getRepository('AppBundle:Contactos')->findAll();
        return $this->render('admin/contact_admin.html.twig', array('contact'=>$con, 'por'=>$portada));
    }
    /**
     * @Route("/admin/contact/eliminar/{id}", name="contactos_eliminar")
     */
    public function eliminarAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $com = $em->getRepository('AppBundle:Contactos')->find($id);
        $em->remove($com);
        $em->flush();
        return $this->redirectToRoute('contact_admin');
    }
}