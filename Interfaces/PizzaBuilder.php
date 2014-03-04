<?php

namespace Interfaces;

/**
 * Each piece of a pizza has the ability to get its description
 * and cost in order to contribute its information to a full pizza.
 *
 * @author James Hollenbeck <wrampd@gmail.com>
 */
interface PizzaBuilder
{
	/**
	 * Get the description of the current part of the pizza.
	 * @return string The description of this part of the pizza.
	 */
	public function getDescription();

	/**
	 * Get the cost of the pizza, with this portion
	 * of the pizza being contributed (ie call the paretn get cost and 
	 * add in this part's cost to that.)
	 * 
	 * @return [type] [description]
	 */
	public function getCost();
}
