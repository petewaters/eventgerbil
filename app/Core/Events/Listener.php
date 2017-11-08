<?php

namespace EventGerbil\Core\Events;

use EventGerbil\Core\Events\Event;

abstract class Listener
{
    abstract public function nibble(Event $event);

    public function getName()
    {
        return (new ReflectionClass($this))->getShortName();
    }
}