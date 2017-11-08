<?php

namespace EventGerbil\Tests\Unit;

use PHPUnit\Framework\TestCase;

use EventGerbil\Stubs\{ ListenerStub, EventStub };
use EventGerbil\Core\Events\{ Dispatcher, Event };

class DispatcherTest extends TestCase
{
   /** @test */
   public function holds_array_of_listeners()
   {
        $dispatcher = new Dispatcher;

        $this->assertEmpty($dispatcher->getListeners());
        $this->assertInternalType('array', $dispatcher->getListeners());
   }

   /** @test */
   public function can_add_listeners()
   {
        $dispatcher = new Dispatcher;
        $dispatcher->addListener('shh', new ListenerStub);

        $this->assertCount(1, $dispatcher->getListeners()['shh']);
   }

   /** @test */
   public function can_get_listener_by_event_name()
   {
        $dispatcher = new Dispatcher;
        $dispatcher->addListener('shh', new ListenerStub);

        $this->assertCount(1, $dispatcher->getListenersByEventName('shh'));
   }

   /** @test */
   public function returns_empty_array_if_no_listeners_found_for_event_name()
   {
        $dispatcher = new Dispatcher;

        $this->assertCount(0, $dispatcher->getListenersByEventName('shh'));
   }

   /** @test */
   public function can_check_for_listeners_for_event()
   {
        $dispatcher = new Dispatcher;

        $this->assertFalse($dispatcher->hasListeners('shh'));
   }
}