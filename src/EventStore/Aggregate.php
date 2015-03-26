<?php namespace Mitchell\EventSourceryExample\EventStore;

abstract class Aggregate {

    abstract protected function applyEvent(DomainEvent $event);

    public function apply(array $history) {
        foreach ($history as $event)
            $this->applyEvent($event);
    }
}