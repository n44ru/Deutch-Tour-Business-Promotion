<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Galeria;

class GalleryController extends Controller
{
    /**
     * @Route("/admin/gallery", name="gallery_admin")
     */
    public function aboutAction(Request $request)
    {
        $this->get('twig')->addGlobal('idioma', 'DE');
        $em = $this->getDoctrine()->getManager();
        $portada = $em->getRepository('AppBundle:Portada')->Find('1');
        //
        $em = $this->getDoctrine()->getManager();
        $gall = $em->getRepository('AppBundle:Galeria')->find('1');

        if ($_FILES) {
            //
            define('UPLOADPATH', 'images/gallery/');
            //
            $file1 = $_FILES['img1']['name'];
            $file2 = $_FILES['img2']['name'];
            $file3 = $_FILES['img3']['name'];
            $file4 = $_FILES['img4']['name'];
            $file5 = $_FILES['img5']['name'];
            $file6 = $_FILES['img6']['name'];
            $file7 = $_FILES['img7']['name'];
            $file8 = $_FILES['img8']['name'];

            if($file1)
            {
                $target1 = UPLOADPATH . $file1;
                move_uploaded_file($_FILES['img1']['tmp_name'], $target1);
                $gall->setImagen1($target1);
            }
            if($file2)
            {
                $target2 = UPLOADPATH . $file2;
                move_uploaded_file($_FILES['img2']['tmp_name'], $target2);
                $gall->setImagen2($target2);
            }
            if($file3)
            {
                $target3 = UPLOADPATH . $file3;
                move_uploaded_file($_FILES['img3']['tmp_name'], $target3);
                $gall->setImagen3($target3);
            }
            if($file4)
            {
                $target4 = UPLOADPATH . $file4;
                move_uploaded_file($_FILES['img4']['tmp_name'], $target4);
                $gall->setImagen4($target4);
            }
            if($file5)
            {
                $target5 = UPLOADPATH . $file5;
                move_uploaded_file($_FILES['img5']['tmp_name'], $target5);
                $gall->setImagen5($target5);
            }
            if($file6)
            {
                $target6 = UPLOADPATH . $file6;
                move_uploaded_file($_FILES['img6']['tmp_name'], $target6);
                $gall->setImagen2($target6);
            }
            if($file2)
            {
                $target7 = UPLOADPATH . $file7;
                move_uploaded_file($_FILES['img7']['tmp_name'], $target7);
                $gall->setImagen2($target7);
            }
            if($file8)
            {
                $target8 = UPLOADPATH . $file8;
                move_uploaded_file($_FILES['img8']['tmp_name'], $target8);
                $gall->setImagen8($target8);
            }

            $em->persist($gall);
            $em->flush();
        }
        return $this->render('admin/gallery_admin.html.twig', array('gall'=>$gall, 'por'=>$portada));
    }
    /**
     * @Route("/admin/activar/{id}/{valor}", name="index_activar")
     */
    public function activarAction(Request $request, $id, $valor)
    {
        $em = $this->getDoctrine()->getManager();
        $com = $em->getRepository('AppBundle:Comentarios')->find($id);
        $final_value="";
        if ($valor == "Si")
        {$final_value="No";;}
        else {$final_value="Si";}
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
            $text->setTitulotexto($name);
            $text->setTexto($men);
            $em->persist($text);
            $em->flush();
        return $this->redirectToRoute('index_admin');
    }
}