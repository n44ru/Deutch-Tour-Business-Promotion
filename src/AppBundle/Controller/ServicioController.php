<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Servicios;

class ServicioController extends Controller
{
    /**
     * @Route("/admin/servicios", name="servicios_ver")
     */
    public function aboutAction(Request $request)
    {
        $this->get('twig')->addGlobal('idioma', 'DE');
        $em = $this->getDoctrine()->getManager();
        $portada = $em->getRepository('AppBundle:Portada')->Find('1');
        //
        $em = $this->getDoctrine()->getManager();
        $serv = $em->getRepository('AppBundle:Servicios')->findAll();
        return $this->render('admin/servicios/servicios.html.twig', array('servicios'=>$serv, 'por'=>$portada));
    }
    /**
     * @Route("/admin/servicios/insertar", name="servicios_insertar")
     */
    public function insertarAction(Request $request)
    {
        $this->get('twig')->addGlobal('idioma', 'DE');
        $em = $this->getDoctrine()->getManager();
        $portada = $em->getRepository('AppBundle:Portada')->Find('1');
        //
        if ($request->request->count() > 1) {

            $tituloes = $request->request->get('s1');
            $textoes = $request->request->get('s2');
            $tituloen = $request->request->get('s3');
            $textoen = $request->request->get('s4');
            $titulode = $request->request->get('s5');
            $textode = $request->request->get('s6');
            //
            // Metodo para SUBIR FICHEROS
            define('UPLOADPATH', 'images/services');
            //
            $file1 = $_FILES['f1']['name'];
            $file2 = $_FILES['f2']['name'];
            $file3 = $_FILES['f3']['name'];
            //
            $target1 = UPLOADPATH . '/' . $file1;
            $target2 = UPLOADPATH . '/' . $file2;
            $target3 = UPLOADPATH . '/' . $file3;
            //
            move_uploaded_file($_FILES['f1']['tmp_name'], $target1);
            move_uploaded_file($_FILES['f2']['tmp_name'], $target2);
            move_uploaded_file($_FILES['f3']['tmp_name'], $target3);
            //
            $serv = new Servicios();
            $serv->setTituloes($tituloes);
            $serv->setTiuloen($tituloen);
            $serv->setTitulode($titulode);

            $serv->setTextoen($textoen);
            $serv->setTextoes($textoes);
            $serv->setTextode($textode);

            $serv->setImagen1($target1);
            $serv->setImagen2($target2);
            $serv->setImagen3($target3);
            //
            $em->persist($serv);
            $em->flush();
            return $this->redirectToRoute('servicios_ver');
        }
        return $this->render('admin/servicios/insertar.html.twig',array('por'=>$portada));
    }
    /**
     * @Route("/admin/servicios/editar/{id}", name="servicios_editar")
     */
    public function editarAction(Request $request, $id)
    {
        $this->get('twig')->addGlobal('idioma', 'DE');
        $em = $this->getDoctrine()->getManager();
        $portada = $em->getRepository('AppBundle:Portada')->Find('1');
        //
        $serv = $em->getRepository('AppBundle:Servicios')->find($id);
        if ($request->request->count() > 1) {
            $tituloes = $request->request->get('s1');
            $textoes = $request->request->get('s2');
            $tituloen = $request->request->get('s3');
            $textoen = $request->request->get('s4');
            $titulode = $request->request->get('s5');
            $textode = $request->request->get('s6');
            //
            // Metodo para SUBIR FICHEROS
            define('UPLOADPATH', 'images/services');
            //
            $file1 = $_FILES['f1']['name'];
            $file2 = $_FILES['f2']['name'];
            $file3 = $_FILES['f3']['name'];
            //
            $target1 = UPLOADPATH . '/' . $file1;
            $target2 = UPLOADPATH . '/' . $file2;
            $target3 = UPLOADPATH . '/' . $file3;
            //
            move_uploaded_file($_FILES['f1']['tmp_name'], $target1);
            move_uploaded_file($_FILES['f2']['tmp_name'], $target2);
            move_uploaded_file($_FILES['f3']['tmp_name'], $target3);
            //
            $serv->setTituloes($tituloes);
            $serv->setTiuloen($tituloen);
            $serv->setTitulode($titulode);

            $serv->setTextoen($textoen);
            $serv->setTextoes($textoes);
            $serv->setTextode($textode);

            if($file1!= null)
            $serv->setImagen1($target1);
            if($file2!= null)
            $serv->setImagen2($target2);
            if($file3!= null)
            $serv->setImagen3($target3);
            //
            $em->persist($serv);
            $em->flush();
            return $this->redirectToRoute('servicios_ver');
        }
        return $this->render('admin/servicios/editar.html.twig', array('servicios'=>$serv,'por'=>$portada));
    }
    /**
     * @Route("/admin/servicios/eliminar/{id}", name="servicios_eliminar")
     */
    public function EliminarAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $serv = $em->getRepository('AppBundle:Servicios')->find($id);
        $em->remove($serv);
        $em->flush();
        return $this->redirectToRoute('servicios_ver');
    }
}