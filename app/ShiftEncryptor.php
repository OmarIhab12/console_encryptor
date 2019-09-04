<?php

namespace App;

class ShiftEncryptor implements Encryptor {

  public function encrypt ($unencryted_string){
    if($unencryted_string == null){
      return $unencryted_string;
    }

    $encrypted_string = "";
    $dictionary = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $dictionary_length = strlen($dictionary);

    for ($i = 0; $i < strlen($unencryted_string); $i++) {
      $position = stripos($dictionary, $unencryted_string[$i]);
      if($position === false) {
        $encrypted_string .= $unencryted_string[$i];
      }
      else {
        $position += 3;

        if ($position >= $dictionary_length)
        {
          $position = $position - $dictionary_length;
        }
        if(ctype_upper($unencryted_string[$i])){
          $encrypted_string .= $dictionary[$position];
        }
        else {
          $encrypted_string .= strtolower($dictionary[$position]);
        }
      }
    }
    return $encrypted_string;
  }

  public function decrypt ($encryted_string){
    if($encryted_string == null){
      return $encryted_string;
    }

    $decrypted_string = "";
    $dictionary = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $dictionary_length = strlen($dictionary);

    for ($i = 0; $i < strlen($encryted_string); $i++) {
      $position = stripos($dictionary, $encryted_string[$i]);
      if($position === false) {
        $decrypted_string .= $encryted_string[$i];
      }
      else {

        $position -= 3;

        if ($position < 0)
        {
          $position = $position + $dictionary_length;
        }
        if(ctype_upper($encryted_string[$i])){
          $decrypted_string .= $dictionary[$position];
        }
        else {
          $decrypted_string .= strtolower($dictionary[$position]);
        }
      }
    }

    return $decrypted_string;
  }
}
