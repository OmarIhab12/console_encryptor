<?php

namespace App;

interface Encryptor {
    public function encrypt($unencrypted_string);
    public function decrypt($encrypted_string);
}
