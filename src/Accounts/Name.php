<?php namespace Mitchell\EventSourceryExample\Accounts;

final class Name {

    private $firstName;
    private $lastName;

    public function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getFullName() {
        return "{$this->firstName} {$this->lastName}";
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function __toString() {
        return $this->getFullName();
    }
}