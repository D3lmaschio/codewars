<?php

function sieve_of_eratosthenes(int $n): array
{
  $is_prime = [];

  for ($i = 1; $i <= $n; $i++) {
    $is_prime[$i] = -1;
  }

  for ($i = 2; $i <= $n; $i++) {
    if ($is_prime[$i] === -1) {
      $is_prime[$i] = 1;

      for ($j = $i + $i; $j <= $n; $j += $i) {
        $is_prime[$j] = 0;
      }
    }
  }

  return $is_prime;
}

