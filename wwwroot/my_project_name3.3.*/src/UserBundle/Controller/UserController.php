<?php

namespace UserBundle\Controller;

use UserBundle\EntityManager\UserManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class UserController extends Controller
{
    /**
     * @var UserManager
     */
    private $userManager;

    public function __construct(UserManager $userManager) {
        $this->userManager = $userManager;
    }

    /**
     * @param string $username
     * @throws NotFoundHttpException
     *
     * @return Response
     *
     * @Route("/{username}", name="userdetail")
     */
    public function userDetailAction(string $username) {
        $user = $this->userManager->getByUsername($username);
        if(!$user)
            throw new NotFoundHttpException;         
        return $this->render("@User/User/userDetail.html.twig", [
            "user" => $user
        ]);
    }
}

