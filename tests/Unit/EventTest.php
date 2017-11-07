<?php

namespace EventGerbil\Tests\Unit;

use PHPUnit\Framework\TestCase;

use EventGerbil\Stubs\{ EventStub, EventStubNameless };

class EventTest extends TestCase
{
    /** @test */
    public function can_get_event_name()
    {
        $event = new EventStub;

        $this->assertEquals('stubby', $event->getName());
    }

    /** @test */
    public function defaults_to_class_name_for_event_name()
    {
        $event = new EventStubNameless;

        $this->assertEquals('EventStubNameless', $event->getName());
    }
}