<?php

namespace Nxu\TypedCollection\Collections;

class StringCollection extends AbstractTypedCollection
{
    protected function isTypeValid($value): bool
    {
        return is_string($value);
    }
}
