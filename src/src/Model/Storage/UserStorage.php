<?php

namespace App\Model\Storage;

use App\Model\Entity;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserStorage
{
	protected EntityManagerInterface $entityManager;
	protected UserPasswordHasherInterface $passwordHasher;

	public function __construct(
		EntityManagerInterface $entityManager,
		UserPasswordHasherInterface $passwordHasher
	) {
		$this->entityManager = $entityManager;
		$this->passwordHasher = $passwordHasher;
	}

	public function createUser(string $email, string $plaintextPassword): Entity\User {
		$user = (new Entity\User())->setEmail($email);
		$password = $this->passwordHasher->hashPassword($user, $plaintextPassword);
		$user->setPassword($password);
		return $user;
	}

	public function emailExists(string $email) {
		return !is_null($this->entityManager->getRepository(Entity\User::class)->findOneBy([
			'email' => $email,
		]));
	}

	public function save(Entity\User $user): self {
		$this->entityManager->persist($user);
		$this->entityManager->flush();
		return $this;
	}

	/**
	 * @return Entity\User[]
	 */
	public function fetchAll(): array {
		return $this->entityManager->getRepository(Entity\User::class)->findAll();
	}
}