<?php

namespace Nayjest\ViewComponents\Resources;

class IncludedResourcesRegistry
{
    protected $included = [];

    public function isIncluded($src)
    {
        return in_array($src, $this->included, true);
    }

    public function markAsIncluded($src)
    {
        $this->included[] = $src;
    }
}
