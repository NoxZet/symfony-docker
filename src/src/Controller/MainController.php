<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController
{
	#[Route('/')]
	public function main(): Response {
		return new Response('');
	}
}