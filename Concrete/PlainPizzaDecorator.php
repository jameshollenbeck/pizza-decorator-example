<?php

namespace Concrete;

use Abstracted\ToppingDecorator;
use Interfaces\PizzaBuilder;

/**
 * Add in the cost of a base pizza (just dough).
 *
 * @author James Hollenbeck <wrampd@gmail.com>
 * @version 1.0.0
 */
class PlainPizzaDecorator implements PizzaBuilder
{
	/**
	 * {@inheritdoc}
	 */
	public function getDescription()
	{
		return 'Plain Pizza Dough';
	}

	/**
	 * {@inheritdoc}
	 */
	public function getCost()
	{
		return 7.99;
	}
}