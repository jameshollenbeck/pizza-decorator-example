<?php

namespace Concrete;

use Abstracted\ToppingDecorator;
use Interfaces\PizzaBuilder;

/**
 * Add in the cost of Mozzarella Cheese to the pizza.
 *
 * @author James Hollenbeck <wrampd@gmail.com>
 * @version 1.0.0
 */
class MozzarellaCheeseDecorator extends ToppingDecorator
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
		return $this->pizza->getDescription() . ', Mozzarella Cheese';
	}

	/**
	 * {@inheritdoc}
	 */
	public function getCost()
	{
		return $this->pizza->getCost() + 1.50;
	}
}