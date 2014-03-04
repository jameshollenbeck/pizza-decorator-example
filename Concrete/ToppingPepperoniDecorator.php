<?php

namespace Concrete;

use Abstracted\ToppingDecorator;
use Interfaces\PizzaBuilder;

/**
 * Add in the cost of Pepperoni to the pizza.
 *
 * @author James Hollenbeck <wrampd@gmail.com>
 * @version 1.0.0
 */
class ToppingPepperoniDecorator extends ToppingDecorator
{
	public function __construct(PizzaBuilder $pizza)
	{
		parent::__construct($pizza);
	}

	/**
	 * {@inheritdoc}
	 */
	public function getDescription()
	{
		return $this->pizza->getDescription() . ', Pepperoni Slices';
	}

	/**
	 * {@inheritdoc}
	 */
	public function getCost()
	{
		return $this->pizza->getCost() + 1.00;
	}
}