<?php
class Car{
	public function __construct($make, $color, $cost, $country,$size)
	{
		$this->make = $make;
		$this->color = $color;
		$this->cost = $cost;
		$this->country = $country;
		$this->size = $size;
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
	
	public function size()
	{
		return $this->size;
	}
}


$car = new car("Toyota","Red","2.1m","Japan","medium");
echo $car->make();
echo "<br>";
echo $car->color();
echo "<br/>";
echo $car->cost();
echo "<br/>";
echo $car->country();
echo "<br/>";
echo $car->size();
