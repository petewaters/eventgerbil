<?php

namespace EventGerbil\Tests\Integration;

use PHPUnit\Framework\TestCase;

use EventGerbil\Core\Events\{ Dispatcher, Event, Listener };
use EventGerbil\Stubs\{ EventStub, ListenerStub };

class EventTest extends TestCase
{
   /** @test */
   public function can_dispatch_events_with_listener()
   {
        $event = new EventStub;
        $mockListener = $this->createMock(ListenerStub::class);
        $dispatcher = new Dispatcher;

        $mockListener->expects($this->once())->method('nibble')->with($event);

        $dispatcher->addListener('stubby', $mockListener);
        $dispatcher->dispatch($event);
   }

   /** @test */
   public function can_dispatch_events_with_listeners()
   {
        $event = new EventStub;
        $mockListener = $this->createMock(ListenerStub::class);
        $anotherListener = $this->createMock(ListenerStub::class);
        $dispatcher = new Dispatcher;

        $mockListener->expects($this->once())->method('nibble')->with($event);
        $anotherListener->expects($this->once())->method('nibble')->with($event);

        $dispatcher->addListener('stubby', $mockListener);
        $dispatcher->addListener('stubby', $anotherListener);
        $dispatcher->dispatch($event);
   }
}
