<?php

declare(strict_types=1);

namespace Verdient\Hyperf3\Event;

use Psr\EventDispatcher\EventDispatcherInterface;
use Verdient\Hyperf3\Di\Container;

/**
 * 事件
 *
 * @author Verdient。
 */
class Event
{
    /**
     * 派发事件
     *
     * @param object $event 事件
     *
     * @author Verdient。
     */
    public static function dispatch(object $event): object
    {
        if ($eventDispatcher = Container::getOrNull(EventDispatcherInterface::class)) {
            return $eventDispatcher->dispatch($event);
        }

        return $event;
    }
}
