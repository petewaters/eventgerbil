<?php

namespace EventGerbil\Tests\Unit;

use PHPUnit\Framework\TestCase;

use EventGerbil\Stubs\{ ListenerStub, EventStub };

use TypeError;

class ListenerTest extends TestCase
{
   /** @test */
   public function nibble_accepts_event()
   {
       $listener = (new ListenerStub)->nibble(new EventStub);
       $this->addToAssertionCount(1);
   }

   /** @test */
   public function throws_error_if_not_event()
   {
       $this->expectException(TypeError::class);
       $listener = (new ListenerStub)->nibble('a bit of a non-event');
   }
}