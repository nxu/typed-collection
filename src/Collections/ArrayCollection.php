<?php

namespace Nxu\TypedCollection\Collections;

class ArrayCollection extends AbstractTypedCollection
{
    protected function isTypeValid($value): bool
    {
        return is_array($value);
    }
}
