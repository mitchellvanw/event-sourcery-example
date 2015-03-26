<?php namespace Mitchell\EventSourceryExample\EventStore;

final class AggregateHistory {

    /** @var array */
    private $event;

    public function __construct(array $event) {
        $this->event = $event;
    }
}