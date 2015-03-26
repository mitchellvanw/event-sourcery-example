<?php namespace Mitchell\EventSourceryExample\EventStore;

final class AggregateIdentity {

    private $id;

    public function __construct($id) {
        $this->id = $id;
    }

    public function __toString() {
        return $this->id;
    }
}