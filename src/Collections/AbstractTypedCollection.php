<?php

namespace Nxu\TypedCollection\Collections;

use Illuminate\Support\Collection;
use Nxu\TypedCollection\Exceptions\InvalidTypeException;

abstract class AbstractTypedCollection extends Collection
{
    public function __construct($items = [])
    {
        $items = $this->getArrayableItems($items);

        foreach ($items as $item) {
            if (! $this->isTypeValid($item)) {
                throw new InvalidTypeException();
            }
        }

        parent::__construct($items);
    }

    public function push($value)
    {
        if (! $this->isTypeValid($value)) {
            throw new InvalidTypeException();
        }

        return parent::push($value);
    }

    public function put($key, $value)
    {
        if (! $this->isTypeValid($value)) {
            throw new InvalidTypeException();
        }

        return parent::put($key, $value);
    }

    public function offsetSet($key, $value)
    {
        if (! $this->isTypeValid($value)) {
            throw new InvalidTypeException();
        }

        parent::offsetSet($key, $value);
    }

    abstract protected function isTypeValid($value): bool;
}
