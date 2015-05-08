<?php

namespace Nayjest\ViewComponents\Structure;

use Nayjest\Manipulator\Manipulator;
use Nayjest\ViewComponents\BaseComponents\ComponentInterface;
use Traversable;

trait TreeNodesCollectionTrait
{
    abstract public function toArray();

    /**
     * @param string $section_name
     * @return ComponentInterface[]
     */
    public function findAllBySection($section_name)
    {
        $results = [];
        foreach ($this->toArray() as $item) {
            if (
                $item instanceof ComponentInterface
                && $item->getRenderSection() === $section_name
            ) {
                $results[] = $item;
            }
        }
        return $results;
    }

    /**
     * @param Traversable|array $data
     * @return $this
     */
    public function fillItemsWith($data)
    {
        foreach($this->toArray() as $item) {
            $writable = Manipulator::getWritable($item);
            $fields = Manipulator::getValues($data, $writable);
            Manipulator::assign($item, $fields);
        }
        return $this;
    }
}