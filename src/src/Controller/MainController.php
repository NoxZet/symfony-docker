<?php

namespace App\Controller;

use App\Model\Entity\User;
use App\Model\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
	#[Route('/')]
	public function main(): Response {
		$user = new User();
		$form = $this->createForm(UserType::class, $user);
		return $this->render('Main/main.html.twig', [
			'form' => $form->createView(),
			'users' => [],
		]);
	}
}
