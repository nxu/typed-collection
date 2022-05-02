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

    public function push(...$values)
    {
        $this->validateTypes(...$values);

        return parent::push($values);
    }

    public function put($key, $value)
    {
        $this->validateType($value);

        return parent::put($key, $value);
    }

    public function offsetSet($key, $value): void
    {
        $this->validateType($value);
        parent::offsetSet($key, $value);
    }

    public function keys()
    {
        return collect($this)->keys();
    }

    public function pluck($value, $key = null)
    {
        return collect($this)->pluck($value, $key);
    }

    public function diffKeys($items)
    {
        return collect($this)->diffKeys($items);
    }

    public function diffKeysUsing($items, callable $callback)
    {
        return collect($this)->diffKeysUsing($items, $callback);
    }

    public function groupBy($groupBy, $preserveKeys = false)
    {
        return collect($this)->groupBy($groupBy, $preserveKeys);
    }

    public function map(callable $callback)
    {
        return collect($this)->map($callback);
    }

    public function mapToDictionary(callable $callback)
    {
        return collect($this)->mapToDictionary($callback);
    }

    public function mapWithKeys(callable $callback)
    {
        return collect($this)->mapWithKeys($callback);
    }

    protected function validateType($value)
    {
        if (! $this->isTypeValid($value)) {
            throw new InvalidTypeException();
        }
    }

    protected function validateTypes(...$values)
    {
        foreach ($values as $value) {
            $this->validateType($value);
        }
    }

    abstract protected function isTypeValid($value): bool;
}
