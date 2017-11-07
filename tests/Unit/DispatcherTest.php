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
}