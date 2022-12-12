<?php

namespace App\Model\Form;

use App\Model\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegisterType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options): void {
		$builder
			->add('email', TextType::class, ['label' => 'Email'])
			->add('password', TextType::class, ['label' => 'Password'])
			->add('submit', SubmitType::class, ['label' => 'Create account']);
	}
}