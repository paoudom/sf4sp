<?php

namespace App\Controller\Admin;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;




class AdminController extends BaseAdminController
{

   public function promoteAction()
   {

       $id = $this->request->query->get('id');

       $entity = $this->em->getRepository('User::class')->find($id);
       $entity->setRoles(['ROLE_ADMIN']);
       $this->em->flush();


       return $this->redirectToRoute('easyadmin', array(
           'action' => 'list',
           'entity' => $this->request->query->get('entity'),
       ));

   }

   public function demoteAction()
   {

       $id = $this->request->query->get('id');

       $entity = $this->em->getRepository('User::class')->find($id);
       $entity->setRoles(['ROLE_USER']);
       $this->em->flush();


       return $this->redirectToRoute('easyadmin', array(
           'action' => 'list',
           'entity' => $this->request->query->get('entity'),
       ));

   }


}