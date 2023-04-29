<?php

function validBraces($braces)
{
  return preg_match('/^(\((?1)\)|\[(?1)]|{(?1)}|)*$/', $braces) == 1 ? true : false;
}

var_dump(validBraces("[({})](]"));

