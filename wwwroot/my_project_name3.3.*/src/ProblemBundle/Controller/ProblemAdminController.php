<?php
namespace ProblemBundle\Controller;

use ProblemBundle\Entity\Problem;
use ProblemBundle\EntityManager\ProblemManager;
use ProblemBundle\Form\ProblemType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ProblemAdminController extends Controller
{   
    /**
     * @var ProblemManager
     */
    private $problemManager;
   
    public function _construct(ProblemManager $problemManager)
    {
        $this->problemManager = $problemManager;
    }

    /**
     * @Route("/edit/{id}", name="problemadmin_edit")
     */

    public function editAction(int $id, Request $request, ProblemManager $problemManager)
    {
        $problem = $problemManager->get($id);
        if(!$problem)
            return new NotFoundHttpException;
        $form = $this->createForm(ProblemType::class, $problem);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $problem = $form->getData();
            $this->getDoctrine()->getManager()->persist($problem);
            $this->getDoctrine()->getManager()->flush();
        }
        return $this->render('@Problem/ProblemAdmin/edit.html.twig', [
            'form' => $form->createView(),
            'problem' => $problem
        ]);
    }
    /**
     * @Route("/new", name="problemadmin_new")
     */

    public function newAction(Request $request) {
        $problem = new Problem;
        $form = $this->createForm(ProblemType::class, $problem);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $problem = $form->getData();
	    $problem->setProvider($this->getUser());
            $this->getDoctrine()->getManager()->persist($problem);
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('problemadmin_edit', ["id" => $problem->getID()]);
        }
        return $this->render('@Problem/ProblemAdmin/edit.html.twig', [
            'form' => $form->createView(),
            'problem' => $problem
        ]);
    }
}
