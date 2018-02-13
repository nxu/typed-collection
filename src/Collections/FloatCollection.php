<?php

namespace Nxu\TypedCollection\Collections;

class FloatCollection extends AbstractTypedCollection
{
    protected function isTypeValid($value): bool
    {
        return is_float($value);
    }
}
