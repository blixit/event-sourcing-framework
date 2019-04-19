<?php

declare(strict_types=1);

namespace Blixit\EventSourcing\Tests\Aggregate;

use Blixit\EventSourcing\Tests\Event\FakeEvent;
use PHPUnit\Framework\TestCase;

class AggregateRootTest extends TestCase
{
    public function testAggregateRoot() : void
    {
        $fake = new FakeAggregateRoot();
        $fake->record(FakeEvent::occur('1', []));

        $events = $fake->getRecordedEvents();
        $this->assertNotEmpty($events);

        $this->assertInstanceOf(FakeEvent::class, $events[0]);
    }
}