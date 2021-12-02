<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


/**
 * @Route("/employe/", name="employe_")
 */
class EmployeController extends AbstractController
{
    /**
     * @Route(path= "employe/{id}",name="employe_voir", defaults={"id":99}, requirements = {"id":"\d+"})
     * 
     */
    public function voir(int $id){
        return $this->render('employe/voir.html.twig', [
            'id' => $id,
        ]);
    }
    
    /**
     * 
     * @Route(path= "employeV2/{id}", name="employe_voirV2")
     * @Template("employe/voir.html.twig")
     */
    public function voirEmployeV2($id) {
        
        return array(
            'id'=>$id
        );
    }
    
    /**
     * @Route(path= "employe/{nom}", name="employe_voirNom", requirements = {"nom":"[B][A-Za-zÀ-ÖØ-öø-ÿ]+"}, options = { "utf8": true })
     * @Template("employe/voirNom.html.twig")
     */
    public function voirNom(string $nom) {
        
        return array(
            'nom'=>$nom
        );
    }
}
