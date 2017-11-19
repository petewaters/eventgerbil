<?php

use EventGerbil\Core\Events\Dispatcher;
use EventGerbil\Listeners\ExampleListener;
use EventGerbil\Events\ExampleEvent;
use EventGerbil\Models\ExampleModel;

require_once __DIR__ . '/../bootstrap/init.php';

$model = new ExampleModel;
$model->id = 1;

$dispatcher = new Dispatcher;

$dispatcher->addListener('ExampleEvent', new ExampleListener);

$dispatcher->dispatch(new ExampleEvent($model));
