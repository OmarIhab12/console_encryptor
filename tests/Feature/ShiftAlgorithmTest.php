<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ShiftAlgorithmTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
      $encryptor = new \App\ShiftEncryptor();

      //shift encryption test
      $result = $encryptor->encrypt("Hello World");
      $this->assertEquals($result, "Khoor Zruog");

      $result = $encryptor->encrypt("A");
      $this->assertEquals($result, "D");

      $result = $encryptor->encrypt("a");
      $this->assertEquals($result, "d");

      $result = $encryptor->encrypt("z");
      $this->assertEquals($result, "c");

      $result = $encryptor->encrypt("Y");
      $this->assertEquals($result, "B");

      $result = $encryptor->encrypt("x");
      $this->assertEquals($result, "a");

      $result = $encryptor->encrypt(" ");
      $this->assertEquals($result, " ");

      $result = $encryptor->encrypt(null);
      $this->assertEquals($result, null);

      //shift decryption tests

      $result = $encryptor->decrypt("Khoor Zruog");
      $this->assertEquals($result, "Hello World");

      $result = $encryptor->decrypt("D");
      $this->assertEquals($result, "A");

      $result = $encryptor->decrypt("d");
      $this->assertEquals($result, "a");

      $result = $encryptor->decrypt("c");
      $this->assertEquals($result, "z");

      $result = $encryptor->decrypt("B");
      $this->assertEquals($result, "Y");

      $result = $encryptor->decrypt("a");
      $this->assertEquals($result, "x");

      $result = $encryptor->decrypt(" ");
      $this->assertEquals($result, " ");

      $result = $encryptor->decrypt(null);
      $this->assertEquals($result, null);
    }
}
