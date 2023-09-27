<?php
/**
 * Summary of generatePassword
 * @param mixed $length
 * @return string
 */
function generatePassword($length) {
  $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()_+';
  $password = '';
  $characterCount = strlen($characters);

  for ($i = 0; $i < $length; $i++) {
    $randomIndex = rand(0, $characterCount - 1);
    $password .= $characters[$randomIndex];
  }

  return $password;
}

$length = 12;
$password = generatePassword($length);
echo "Generated password: " . $password;