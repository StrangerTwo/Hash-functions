<?php

// To hash the password, use
$hashed_password = password_hash("MySuperSafePassword!", PASSWORD_DEFAULT);
  
// To compare hash with plain text, use
$isPassCorrect = password_verify("MySuperSafePassword!", $hashed_password);

if ($isPassCorrect) {
    echo "Password is correct";
}else {
    echo "Password is incorrect";
}

