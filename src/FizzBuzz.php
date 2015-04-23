<?php


Class FizzBuzz {
	public function getResult($value)
	{
		$result = $value;
		if (($value % 3) == 0)
		{
			$result = "Fizz";
		}
		if (($value % 5) == 0)
		{
			$result = ($result == "Fizz") ? "FizzBuzz" : "Buzz";
		}

		return $result;

	}
}