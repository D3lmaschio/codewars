<?php
require_once('sieve_of_eratosthenes.php');

function is_prime(int $n): bool
{
  return sieve_of_eratosthenes($n)[$n] === 1 ? true : false;
}
