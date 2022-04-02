<?php

namespace App\Model\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class User
{
	#[ORM\Column(type: 'integer')]
	#[ORM\Id]
	#[ORM\GeneratedValue]
	private ?int $id;

	#[ORM\Column(type: 'string', length: 255)]
	protected ?string $firstName;

	#[ORM\Column(type: 'string', length: 255)]
	protected ?string $lastName;

	#[ORM\Column(type: 'string', length: 255)]
	protected ?string $phone;

	public function getId(): ?int {
		return $this->id;
	}

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
