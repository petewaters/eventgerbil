<?php 

namespace EventGerbil\Listeners;

use EventGerbil\Core\Events\Listener;
use EventGerbil\Core\Events\Event;

class ExampleListener extends Listener
{
    public function nibble(Event $event)
    {
        echo 'Do something: ' . $event->model->id;
    }
}

