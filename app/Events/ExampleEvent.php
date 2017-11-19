<?php 

namespace EventGerbil\Events;

use EventGerbil\Core\Events\Event;
use EventGerbil\Models\ExampleModel;

class ExampleEvent extends Event
{
    public $model;

    public function __construct(ExampleModel $model)
    {
        $this->model = $model;
    }
}
