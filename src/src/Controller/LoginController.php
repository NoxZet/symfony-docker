<?php

namespace App\Controller;

use App\Model\Entity\User;
use App\Model\Form\LoginType;
use App\Model\Storage\UserStorage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class LoginController extends AbstractController
{
	#[Route('/login', name: 'app_login')]
	public function main(Request $request, UserStorage $userStorage, ?UserInterface $userInterface): Response {
		// var_dump($userInterface);
		// die();
		$form = $this->createForm(LoginType::class, null, [
			'action' => $this->generateUrl('app_login'),
		]);
		$form->handleRequest($request);
		return $this->render('Login/main.html.twig', [
			'form' => $form->createView(),
		]);
	}
}
