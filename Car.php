<?php
include ('RaceCarInterface.php');

class Car implements RaceCarInterface
{
	private $engine;
	private $capacity;
	
	public function setEngine($engine)
	{
		$this->engine = $engine;
		return $this;
	}
	
	public function setCapacity($capacity)
	{
		$this->capacity = $capacity;
		return $this;
	}
	
	public function getVMax()
	{
		return $this->engine * 30 - 200 / $this->capacity * 0.55;
	}
	
	public function getAcceleration()
	{
		return $this->engine * 3 - 90 / 1001;
	}
}