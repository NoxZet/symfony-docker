<?php

namespace App\Model\Service;

use App\Model\Entity;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserService
{
	protected UserPasswordHasherInterface $passwordHasher;

	public function __construct(UserPasswordHasherInterface $passwordHasher) {
		$this->passwordHasher = $passwordHasher;
	}

	public function createUser(string $email, string $plaintextPassword): Entity\User {
		$user = (new Entity\User())->setEmail($email);
		$password = $this->passwordHasher->hashPassword($user, $plaintextPassword);
		$user->setPassword($password);
		return $user;
	}
}