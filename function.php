<?php
function validate_input($var)
{
  $var=trim($var);
  $var=strip_tags($var);
  $var=stripslashes($var);
  return $var;
}




 ?>
