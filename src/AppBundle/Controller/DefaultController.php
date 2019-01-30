<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Contactos;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Comentarios;

class DefaultController extends Controller
{
    /**
     * @Route("/kuba/home/{idioma}", name="homepage")
     */
    public function indexAction(Request $request, $idioma)
    {
        // Variable de Idioma
        if($idioma!=null)
        $this->get('twig')->addGlobal('idioma', $idioma);
        else $this->get('twig')->addGlobal('idioma', 'DE');
        //
        $em = $this->getDoctrine()->getManager();
        $gall = $em->getRepository('AppBundle:Galeria')->find(1);
        $query = $em->createQuery('SELECT  p FROM AppBundle:Comentarios p WHERE p.activo = ?1 ');
        $query->setParameter(1, 'Si');
        $com = $query->getResult();

        $portada = $em->getRepository('AppBundle:Portada')->find('1');

        if ($request->request->count() > 1) {
            $name = $request->request->get('nombre');
            $men = $request->request->get('mensaje');
            $coms = new Comentarios();
            $coms->setNombre($name);
            $coms->setTexto($men);
            $coms->setActivo('No');
            $em->persist($coms);
            $em->flush();
            return $this->redirectToRoute('homepage', array('idioma'=>$idioma));
        }
        return $this->render('default/index.html.twig', array('com' => $com, 'por'=>$portada, 'gall'=>$gall));
    }
    /**
     * @Route("/kuba/about/{idioma}", name="about")
     */
    public function aboutAction(Request $request, $idioma)
    {
        $em = $this->getDoctrine()->getManager();
        // Variable de Idioma
        if($idioma!=null)
            $this->get('twig')->addGlobal('idioma', $idioma);
        else $this->get('twig')->addGlobal('idioma', 'DE');
        //
        $portada = $em->getRepository('AppBundle:Portada')->find('1');
        //
        $em = $this->getDoctrine()->getManager();
        $acercade = $em->getRepository('AppBundle:Acercade')->find('1');
        return $this->render('default/about.html.twig', array('acercade'=>$acercade, 'por'=>$portada));
    }
    /**
     * @Route("/kuba/services/{idioma}", name="services")
     */
    public function servicesAction(Request $request, $idioma)
    {
        $em = $this->getDoctrine()->getManager();
        // Variable de Idioma
        if($idioma!=null)
            $this->get('twig')->addGlobal('idioma', $idioma);
        else $this->get('twig')->addGlobal('idioma', 'DE');
        //
        $portada = $em->getRepository('AppBundle:Portada')->find('1');
        //
        $em = $this->getDoctrine()->getManager();
        $serv = $em->getRepository('AppBundle:Servicios')->findAll();

        return $this->render('default/all_services.html.twig',array('servicios'=>$serv, 'por'=> $portada));
    }
    /**
     * @Route("/kuba/services/{id}/{idioma}", name="services_by_id")
     */
    public function servicesbyidAction(Request $request, $id, $idioma)
    {
        $em = $this->getDoctrine()->getManager();
        // Variable de Idioma
        if($idioma!=null)
            $this->get('twig')->addGlobal('idioma', $idioma);
        else $this->get('twig')->addGlobal('idioma', 'DE');
        //
        $portada = $em->getRepository('AppBundle:Portada')->find('1');
        //
        $em = $this->getDoctrine()->getManager();
        $serv = $em->getRepository('AppBundle:Servicios')->find($id);

        return $this->render('default/services.html.twig',array('servicio'=>$serv, 'por'=>$portada));
    }
    /**
     * @Route("/kuba/gallery/{idioma}", name="gallery")
     */
    public function galleryAction(Request $request, $idioma)
    {
        // Variable de Idioma
        if($idioma!=null)
            $this->get('twig')->addGlobal('idioma', $idioma);
        else $this->get('twig')->addGlobal('idioma', 'DE');
        //
        $em = $this->getDoctrine()->getManager();
        $portada = $em->getRepository('AppBundle:Portada')->find('1');
        $galeria = $em->getRepository('AppBundle:Galeria')->find('1');
        return $this->render('default/gallery.html.twig', array('gall'=>$galeria, 'por'=>$portada));
    }
    /**
     * @Route("/kuba/contact/{idioma}", name="contact")
     */
    public function contactAction(Request $request, $idioma)
    {
        // Variable de Idioma
        if($idioma!=null)
            $this->get('twig')->addGlobal('idioma', $idioma);
        else $this->get('twig')->addGlobal('idioma', 'DE');
        //
        $this->get('twig')->addGlobal('mensajefinal', 'vacio');
        //
        $em = $this->getDoctrine()->getManager();
        $portada = $em->getRepository('AppBundle:Portada')->find('1');
        if ($request->request->count() > 1) {
            $date = date('Y-m-d H:i:s');
            $name = $request->request->get('name');
            $email = $request->request->get('email');
            $men = $request->request->get('mensaje');
            $coms = new Contactos();
            $coms->setNombre($name);
            $coms->setEmail($email);
            $coms->setMensaje($men);
            $coms->setFecha($date);

            //
            $to = 'kubaimhavanna@gmail.com';
            //
            $subject= 'Mensaje de '.$name;

            $msg= $email.' '.$men;
            //
            mail($to,$subject,$msg);
            //
            $em->persist($coms);
            $em->flush();
            return $this->redirectToRoute('contact', array('idioma'=>$idioma));
        }
        return $this->render('default/contact.html.twig',array('por'=>$portada));
    }
    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render(
            'admin/login.html.twig',
            array(
                // last username entered by the user
                'last_username' => $lastUsername,
                'error' => $error,
            )
        );
    }
    /**
     * @Route("/logout", name="user_logout")
     */
    public function logoutAction(Request $request)
    {
    }
    /**
     * @Route("/admin/dashboard", name="dash_admin")
     */
    public function dashAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $this->get('twig')->addGlobal('idioma', 'DE');
        $portada = $em->getRepository('AppBundle:Portada')->find('1');
        return $this->render('admin/dashboard.html.twig', array('por'=>$portada));
    }
}
