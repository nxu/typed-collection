<?php

namespace Nxu\TypedCollection\Collections;

use Illuminate\Support\Collection;
use Nxu\TypedCollection\Exceptions\InvalidTypeException;

abstract class AbstractTypedCollection extends Collection
{
    public function __construct($items = [])
    {
        $items = $this->getArrayableItems($items);

        foreach ($items as $value) {
            $this->validateType($value);
        }

        parent::__construct($items);
    }

    public function push($value)
    {
        $this->validateType($value);
        return parent::push($value);
    }

    public function put($key, $value)
    {
        $this->validateType($value);
        return parent::put($key, $value);
    }

    public function offsetSet($key, $value)
    {
        $this->validateType($value);
        parent::offsetSet($key, $value);
    }

    protected function validateType($value)
    {
        if (! $this->isTypeValid($value)) {
            throw new InvalidTypeException();
        }
    }

    abstract protected function isTypeValid($value): bool;
}
