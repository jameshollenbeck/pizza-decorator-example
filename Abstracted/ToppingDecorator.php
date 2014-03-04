<?php

namespace Abstracted;

use Interfaces\PizzaBuilder;

/**
 * All toppings that go on a pizza will need to extend this
 * class to get access to the pizza - and then inject the current
 * toppings data.
 *
 * @author James Hollenbeck <wrampd@gmail.com>
 * @version 1.0.0
 * 
 */
abstract class ToppingDecorator implements PizzaBuilder
{
	/**
	 * Concrete PizzaBuilder implementation.
	 * @var \Interfaces\PizzaBuilder
	 */
	protected $pizza;

	public function __construct(PizzaBuilder $pizza)
	{
		$this->pizza = $pizza;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getDescription()
	{
		return $this->pizza->getDescription();
	}

	/**
	 * {@inheritdoc}
	 */
	public function getCost()
	{
		return $this->pizza->getCost();
	}
}