<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Acercade;

class AcercadeController extends Controller
{
    /**
     * @Route("/admin/about", name="about_admin")
     */
    public function aboutAction(Request $request)
    {
        $this->get('twig')->addGlobal('idioma', 'DE');
        $em = $this->getDoctrine()->getManager();
        $portada = $em->getRepository('AppBundle:Portada')->Find('1');
        //
        $acercade = $em->getRepository('AppBundle:Acercade')->find('1');
        if ($request->request->count() > 1) {
            //
            $es = $request->request->get('es');
            $en = $request->request->get('en');
            $de = $request->request->get('de');
            //
            //
            // Metodo para SUBIR FICHEROS
            define('UPLOADPATH', 'images/about');
            //
            $file1 = $_FILES['f1']['name'];
            //
            $target1 = UPLOADPATH . '/' . $file1;
            //
            move_uploaded_file($_FILES['f1']['tmp_name'], $target1);

            $acercade->setTextoes($es);
            $acercade->setTextoen($en);
            $acercade->setTextode($de);

            if ($file1 != null)
                $acercade->setImagen($target1);

            $em->persist($acercade);
            $em->flush();
        }
        return $this->render('admin/about_admin.html.twig', array('acercade' => $acercade, 'por'=>$portada));
    }
}