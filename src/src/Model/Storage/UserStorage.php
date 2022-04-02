<?php

namespace App\Model\Storage;

use App\Model\Entity;

class UserStorage
{
	public function __construct() {
	}

	public function save(Entity\User $user): self {
		return $this;
	}

	/**
	 * @return Entity\User[]
	 */
	public function fetchAll(): array {
		return [];
	}
}