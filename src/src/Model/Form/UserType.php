<?php

namespace App\Model\Form;

use App\Model\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options): void {
		$builder
			->add('firstName', TextType::class, ['label' => 'Jméno'])
			->add('lastName', TextType::class, ['label' => 'Příjmení'])
			->add('phone', TextType::class, ['label' => 'Telefon'])
			->add('insert', SubmitType::class, ['label' => 'Vložit']);
	}

	public function configureOptions(OptionsResolver $resolver) {
		$resolver->setDefaults([
			'data_class' => User::class,
		]);
	}
}