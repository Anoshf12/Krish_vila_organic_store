<?php
function passwordEncrypter($purePassword) {
  global $encryptedPassword;
  $purePassword = "Krish".$purePassword."Villa";
  $encryptedPassword = md5($purePassword);
  return $encryptedPassword;
}
?>