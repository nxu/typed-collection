<?php

namespace Nxu\TypedCollection\Collections;

class TypedCollection extends AbstractTypedCollection
{
    protected $objectType = null;

    protected function isTypeValid($value): bool
    {
        return is_a($value, $this->objectType);
    }
}
