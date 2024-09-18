<?php
function triangle($bottom, $height)
{
  return $bottom * $height / 2;
}

function square($side)
{
  return $side ** 2;
}

function trapezoid($top_side,$bottom_side,$height)
{
  return ($top_side + $bottom_side) * $height / 2;
}

echo triangle(8,4) . "<br />";
echo square(6) . "<br />";
echo  trapezoid(5,6,5). "<br />";
