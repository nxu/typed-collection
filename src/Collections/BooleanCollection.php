<?php

namespace Nxu\TypedCollection\Collections;

class BooleanCollection extends AbstractTypedCollection
{
    protected function isTypeValid($value): bool
    {
        return is_bool($value);
    }
}
