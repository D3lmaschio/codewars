<?php

function toWeirdCase(string $str): string
{
  return implode(" ", array_reduce(
    array: explode(" ", $str),
    callback: function($carry, $item): array 
    {
      $carry[] = implode(array_map(
        function($k, $v): string 
        { 
          return $k % 2 == 0 ? $split[$k] = strtoupper($v) : $split[$k] = strtolower($v);
        },
        array_keys(str_split($item)),
        array_values(str_split($item))
      ));
      return $carry;
    }
  ));
}

