<?php

namespace EventGerbil\Core\Events;

use EventGerbil\Core\Events\{ Event, Listener };

class Dispatcher
{
    protected $listeners = [];

    public function getListeners() :array
    {
        return $this->listeners;
    }

    public function hasListeners(string $name) 
    {
        return isset($this->listeners[$name]) ? true : false;
    }

    public function getListenersByEventName(string $name) : array
    {
        return $this->listeners[$name] ?? [];
    }

    public function addListener($name, Listener $listener)
    {
        $this->listeners[$name][] = $listener;
    }
}