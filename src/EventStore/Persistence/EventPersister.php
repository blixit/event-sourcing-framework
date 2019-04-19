<?php

declare(strict_types=1);

namespace Blixit\EventSourcing\EventStore\Persistence;

use Blixit\EventSourcing\Event\EventInterface;
use Blixit\EventSourcing\Stream\StreamName;

class EventPersister implements EventPersisterInterface
{
    public function persist(EventInterface $event) : EventInterface
    {
        return $event;
    }

    /**
     * @param mixed $aggregateId
     *
     * @return EventInterface[]
     */
    public function get($aggregateId) : array
    {
        return [];
    }

    /**
     * @return EventInterface[]
     */
    public function getByStream(StreamName $streamName) : array
    {
        return [];
    }

    /**
     * @return EventInterface[]
     */
    public function getByEvent(string $eventClassname) : array
    {
        return [];
    }
}
