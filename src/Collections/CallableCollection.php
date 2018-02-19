<?php

namespace Nxu\TypedCollection\Collections;

class CallableCollection extends AbstractTypedCollection
{
    protected function isTypeValid($value): bool
    {
        return is_callable($value);
    }
}
