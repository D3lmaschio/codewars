<?php
function toWeirdCase($string) 
{
  $arr = explode(" ", $string);
  
  array_walk($arr, function(&$v1, $k1) 
  { 
    $v1 = str_split($v1);
    array_walk($v1, function(&$v2, $k2) 
      {
        $k2 % 2 == 0 ? $v2 = strtoupper($v2) : $v2 = strtolower($v2);
      }
    );
    $v1 = implode($v1);
  });

  return implode(" ", $arr);
}

