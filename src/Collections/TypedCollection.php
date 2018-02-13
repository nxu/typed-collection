<?php

namespace Nxu\TypedCollection\Collections;

class TypedCollection extends AbstractTypedCollection
{
    protected $valueType = null;

    protected function isTypeValid($value): bool
    {
        return is_a($value, $this->valueType);
    }
}
