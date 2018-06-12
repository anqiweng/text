<?php

namespace ProblemBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ProblemController extends AbstractProblemController
{
    /**
     * @Route("/",name="problem_index")
     */
    public function indexAction()
    {
        return $this->render('@Problem/Problem/index.html.twig');
    }
   
   /**
     * @Route("/{id}", name="problem_show")
     */
    public function showAction(int $id) {
        $problem = $this->problemManager->get($id);
        if(!$problem)
            throw new NotFoundHttpException;
        return $this->render("@Problem/Problem/show.html.twig", [
            "problem" => $problem
        ]);
    }
}
