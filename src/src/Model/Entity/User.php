<?php

namespace App\Model\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
	#[ORM\Column(type: 'integer')]
	#[ORM\Id]
	#[ORM\GeneratedValue]
	private ?int $id;

	#[ORM\Column(type: 'string', length: 255, nullable: false, unique: true)]
	protected string $email;

	#[ORM\Column(type: 'string', length: 255, nullable: false)]
	protected string $password;

	#[ORM\Column(type: 'string', length: 255, nullable: true)]
	protected ?string $firstName;

	#[ORM\Column(type: 'string', length: 255, nullable: true)]
	protected ?string $lastName;

	#[ORM\Column(type: 'string', length: 255, nullable: true)]
	protected ?string $phone;

	public function getId(): ?int {
		return $this->id;
	}

	/**
	 * @return string
	 */
	public function getEmail(): string {
		return $this->email;
	}

	/**
	 * @param string $email
	 * @return $this
	 */
	public function setEmail(string $email): self {
		$this->email = $email;
		return $this;
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

	public const ROLE_USER = 'user';

	/**
	 * @return array<string>
	 */
	public function getRoles(): array {
		return ['user'];
	}
	
	public function eraseCredentials() {
	}
	
	/**
	 * Returns the identifier for this user (e.g. its username or email address).
	 * @return string
	 */
	public function getUserIdentifier(): string {
		return $this->email;
	}
	
	/**
	 * @return null|string
	 */
	public function getPassword(): string {
		return $this->password;
	}

	/**
	 * @param string $password
	 * @return $this
	 */
	public function setPassword(string $password): self {
		$this->password = $password;
		return $this;
	}
}
