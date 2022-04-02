<?php

namespace App\Model\Entity;

class User
{
	protected ?string $firstName;
	protected ?string $lastName;
	protected ?string $phone;

	/**
	 * @return string|null
	 */
	public function getFirstName(): ?string {
		return $this->firstName;
	}

	/**
	 * @param string|null $firstName
	 * @return $this
	 */
	public function setFirstName(?string $firstName): self {
		$this->firstName = $firstName;
		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getLastName(): ?string {
		return $this->lastName;
	}

	/**
	 * @param string|null $lastName
	 * @return $this
	 */
	public function setLastName(?string $lastName): self {
		$this->lastName = $lastName;
		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getPhone(): ?string {
		return $this->phone;
	}

	/**
	 * @param string|null $phone
	 * @return $this
	 */
	public function setPhone(?string $phone): self {
		$this->phone = $phone;
		return $this;
	}
}
