<?php namespace Mitchell\EventSourceryExample\Accounts\Event;

use Mitchell\EventSourceryExample\EventStore\DomainEvent;

final class MemberWasRegistered implements DomainEvent {

    private $firstName;
    private $lastName;

    public function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
}