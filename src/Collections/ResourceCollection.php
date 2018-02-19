<?php

namespace Nxu\TypedCollection\Collections;

class ResourceCollection extends AbstractTypedCollection
{
    protected function isTypeValid($value): bool
    {
        return is_resource($value);
    }
}
