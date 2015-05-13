<?php

namespace Nayjest\ViewComponents\Common;

/**
 * Interface ChangesWatcherInterface
 *
 * The interface describes objects that can track it's state changes.
 *
 * @package Nayjest\ViewComponents\Common
 */
interface ChangesWatcherInterface
{
    /**
     * Returns true if object was changed since last call.
     * When called first time, returns true.
     *
     * @return bool
     */
    public function isChanged();
}
