<?php

class User {

  private $id;
  public $name;
  public $lastname;
  public $email;
  protected $password;

  public function __construct(int $id)
  {
    $this->id = $id;
  }

  public function setName(string $name) {
    $this->name = $name;
  }

  public function setLastname(string $lastname) {
    $this->lastname = $lastname;
  }

  public function getFullName()
  {
    return $this->name . ' ' . $this->lastname;
  }

  public function __destruct()
  {
    echo 'Se terminó el objeto User';
  }
}

?>
