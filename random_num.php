<?php

// function to generate random prime number
function get_prime_num_list($rA = 1, $rB = 1000)
{
	$prime_num_list = [];

	for($p = count($prime_num_list); $p < 6; $p++)
	{
		$prime_num = get_prime_num($rA, $rB);

		if( ! in_array($prime_num, $prime_num_list))
		{
			$prime_num_list[] = $prime_num;
		}
	}

	return $prime_num_list;
}

function get_prime_num($rA = 1, $rB = 1000)
{
	$num = rand($rA, $rB);
	$prime = TRUE;
	for($i = 2; $i <= $num / 2; $i++)
	{
		if($num % $i == 0)
		{
			$prime = FALSE;
			break;
		}
	}

	if($prime)
	{
		return $num;
	}
	else
	{
		return get_prime_num($rA, $rB);
	}
}


$range_set = [
	1 => [1, 1000],
	2 => [1001, 2000],
	3 => [2001, 3000],
	4 => [3001, 4000],
	5 => [4001, 5000],
];

// run the above function 6 times
for($i = 1; $i <= 5; $i++)
{
	echo "Random prime numbers range({$range_set[$i][0]}, {$range_set[$i][1]}) = " . implode(get_prime_num_list($range_set[$i][0], $range_set[$i][1]), ', ') . "\r\n";
	echo "=============================================================================\r\n\r\n";
}