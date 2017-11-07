<?php

namespace EventGerbil\Core\Events;

use EventGerbil\Core\Events\{ Event, Listener };

class Dispatcher
{
    protected $listeners = [];

    public function getListeners() : array
    {
        return $this->listeners;
    }

    public function addListener($name, Listener $listener)
    {
        $this->listeners[$name][] = $listener;
    }
}