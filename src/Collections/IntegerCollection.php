<?php

namespace Nxu\TypedCollection\Collections;

class IntegerCollection extends AbstractTypedCollection
{
    protected function isTypeValid($value): bool
    {
        return is_integer($value);
    }
}
