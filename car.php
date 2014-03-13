<?php
class Car{
	public function __construct($make, $color, $cost, $country)
	{
		$this->make = $make;
		$this->color = $color;
		$this->cost = $cost;
		$this->country = $country;
	}

	public function make()
	{
		return $this->make;
	}

	public function color()
	{
		return $this->color;
	}

	public function cost()
	{
		return $this->cost;
	}

	public function country()
	{
		return $this->country;
	}
}


$car = new car("Toyota","Red","2.1m","Japan");
echo $car->make();
echo "<br>";
echo $car->color();
echo "<br/>";
echo $car->cost();
echo "<br/>";
echo $car->country();