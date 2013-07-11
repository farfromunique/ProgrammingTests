<?php
//FizzBuzz: List numbers from 1 to 100. 
//   If number is divisible by 3, write "Fizz" instead. 
//   If divisible by 5, write "Buzz" instead.
//   If divisible by 3 and 5, write "FizzBuzz" insted.

for ($i=1; $i<=100;$i++)
{
  if (($i % 3 == 0) or ($i % 5 == 0))
	{
		if (($i % 3 == 0) and ($i % 5 == 0))
		{
			echo "FizzBuzz<br />";
		}
		else if ($i % 5 == 0)
		{
			echo "Buzz<br />";
		}
		else
		{
			echo "Fizz<br />";
		}
	}
	else
	{
		echo $i . "<br />";
	}
}

?>
