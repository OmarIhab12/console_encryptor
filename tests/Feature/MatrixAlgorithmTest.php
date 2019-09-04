<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MatrixAlgorithmTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
      $encryptor = new \App\MatrixEncryptor();

      $encryted_string = $encryptor->encrypt("Hello World");
      $this->assertTrue($encryted_string != "Hello World");
      $result = $encryptor->decrypt($encryted_string);
      $this->assertEquals($result, "Hello World");

      $encryted_string = $encryptor->encrypt("a");
      $this->assertTrue($encryted_string != "a");
      $result = $encryptor->decrypt($encryted_string);
      $this->assertEquals($result, "a");

      $encryted_string = $encryptor->encrypt("A");
      $this->assertTrue($encryted_string != "A");
      $result = $encryptor->decrypt($encryted_string);
      $this->assertEquals($result, "A");

      $encryted_string = $encryptor->encrypt("zzzzzzzzzzzzzzzz");
      $this->assertTrue($encryted_string != "zzzzzzzzzzzzzzzz");
      $result = $encryptor->decrypt($encryted_string);
      $this->assertEquals($result, "zzzzzzzzzzzzzzzz");

      $encryted_string = $encryptor->encrypt("Robusta Encryption Task");
      $this->assertTrue($encryted_string != "Robusta Encryption Task");
      $result = $encryptor->decrypt($encryted_string);
      $this->assertEquals($result, "Robusta Encryption Task");

      $encryted_string = $encryptor->encrypt("Matrix Encryption and Decryption Algorithm Test");
      $this->assertTrue($encryted_string != "Matrix Encryption and Decryption Algorithm Test");
      $result = $encryptor->decrypt($encryted_string);
      $this->assertEquals($result, "Matrix Encryption and Decryption Algorithm Test");

      $encryted_string = $encryptor->encrypt("!@#$%^&*()_+~");
      $this->assertTrue($encryted_string != "!@#$%^&*()_+~");
      $result = $encryptor->decrypt($encryted_string);
      $this->assertEquals($result, "!@#$%^&*()_+~");

      $encryted_string = $encryptor->encrypt(" ");
      $this->assertEquals($encryted_string, " ");
      $result = $encryptor->decrypt($encryted_string);
      $this->assertEquals($result, " ");

      $encryted_string = $encryptor->encrypt("  ");
      $this->assertEquals($encryted_string, "  ");
      $result = $encryptor->decrypt($encryted_string);
      $this->assertEquals($result, "  ");

      $encryted_string = $encryptor->encrypt(" o ");
      $this->assertTrue($encryted_string != "o");
      $result = $encryptor->decrypt($encryted_string);
      $this->assertEquals($result, "o");

      $encryted_string = $encryptor->encrypt(null);
      $this->assertEquals($encryted_string, null);
      $result = $encryptor->decrypt($encryted_string);
      $this->assertEquals($result, null);

    }
}
