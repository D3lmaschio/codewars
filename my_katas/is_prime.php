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
  var_dump($is_prime);
  return $is_prime;
}

function is_prime(int $n): bool
{
  return sieve_of_eratosthenes($n)[$n] === 1 ? true : false;
}
