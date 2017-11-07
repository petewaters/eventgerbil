<?php

namespace EventGerbil\Core\Listeners;

use EventGerbil\Core\Events\Event;

abstract class Listener
{
    abstract public function handle(Event $event);

    public function getName()
    {
        return (new ReflectionClass($this))->getShortName();
    }
}