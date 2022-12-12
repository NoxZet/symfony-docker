<?php

namespace App\Controller;

use App\Model\Entity\User;
use App\Model\Form\RegisterType;
use App\Model\Storage\UserStorage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegisterController extends AbstractController
{
	#[Route('/register')]
	public function main(Request $request, UserStorage $userStorage): Response {
		$form = $this->createForm(RegisterType::class, []);
		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {
			['email' => $email, 'password' => $password] = $form->getData();
			if (!$userStorage->emailExists($email)) {
				$userStorage->save($userStorage->createUser($email, $password));
				$this->addFlash('success', 'User created');
			} else {
				$this->addFlash('error', 'Email taken');
			}
		}
		return $this->render('Register/main.html.twig', [
			'form' => $form->createView(),
		]);
	}
}
