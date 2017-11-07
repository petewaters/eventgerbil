<?php

namespace EventGerbil\Stubs;

use EventGerbil\Core\Events\Event;

class EventStub extends Event
{
    public function getName()
    {
        return "stubby";
    }
}