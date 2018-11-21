<?php
namespace Fed0t\LiveoutEvents;

class Event {
    protected $event;
    public function __construct($event)
    {
        $this->event = $event;
    }
}