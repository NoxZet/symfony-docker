<?php

namespace App\Model\Entity;

class User
{
	protected ?string $firstName;
	protected ?string $lastName;
	protected ?string $email;

	/**
	 * @return string|null
	 */
	public function getFirstName(): ?string {
		return $this->firstName;
	}

	/**
	 * @param string|null $firstName
	 */
	public function setFirstName(?string $firstName): void {
		$this->firstName = $firstName;
	}

	/**
	 * @return string|null
	 */
	public function getLastName(): ?string {
		return $this->lastName;
	}

	/**
	 * @param string|null $lastName
	 */
	public function setLastName(?string $lastName): void {
		$this->lastName = $lastName;
	}

	/**
	 * @return string|null
	 */
	public function getEmail(): ?string {
		return $this->email;
	}

	/**
	 * @param string|null $email
	 */
	public function setEmail(?string $email): void {
		$this->email = $email;
	}
}
