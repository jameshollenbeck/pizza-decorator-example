<?php

namespace Concrete;

use Abstracted\ToppingDecorator;
use Interfaces\PizzaBuilder;

/**
 * Add in the cost of Pizza Sauce to the pizza.
 *
 * @author James Hollenbeck <wrampd@gmail.com>
 * @version 1.0.0
 */
class PizzaSauceDecorator extends ToppingDecorator
{
	public function __construct(PizzaBuilder $pizza)
	{
		$this->pizza = $pizza;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getDescription()
	{
		return $this->pizza->getDescription() . ', Pizza Sauce';
	}

	/**
	 * {@inheritdoc}
	 */
	public function getCost()
	{
		return $this->pizza->getCost() + 0.75;
	}
}