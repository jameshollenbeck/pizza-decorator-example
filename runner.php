<?php

require_once 'autoload.php';

use Concrete\ToppingPepperoniDecorator;
use Concrete\MozzarellaCheeseDecorator;
use Concrete\PlainPizzaDecorator;
use Concrete\PizzaSauceDecorator;

/**
 * Entry class into the program [php runner.php]
 */
class Runner
{
	/**
	 * make-a the pizza
	 */
	public function __construct()
	{
		$myPizza = new ToppingPepperoniDecorator(new MozzarellaCheeseDecorator(new PizzaSauceDecorator(new PlainPizzaDecorator())));

		echo 'My Pizza: ' . $myPizza->getDescription() . ' will cost: $' . $myPizza->getCost() . PHP_EOL;
	}

	/**
	 * Return, and subsequently run, a new Pizza Builder
	 * @return Runner new Runner;
	 */
	public static function execute()
	{
		return new Runner();
	}
}

$pizza = Runner::execute();