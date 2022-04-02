<?php

namespace App\Model\Storage;

use App\Model\Entity;
use Doctrine\ORM\EntityManagerInterface;

class UserStorage
{
	protected EntityManagerInterface $entityManager;

	public function __construct(EntityManagerInterface $entityManager) {
		$this->entityManager = $entityManager;
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