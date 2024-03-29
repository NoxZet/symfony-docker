<?php

namespace App\Controller;

use App\Model\Entity\User;
use App\Model\Form\UserType;
use App\Model\Storage\UserStorage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
	#[Route('/')]
	public function main(Request $request, UserStorage $userStorage): Response {
		return $this->render('Main/main.html.twig', [
		]);
	}
}
