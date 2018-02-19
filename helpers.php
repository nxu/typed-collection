<?php

if (! function_exists('collect_array')) {
    function collect_array($value = null)
    {
        return new \Nxu\TypedCollection\Collections\ArrayCollection($value);
    }
}

if (! function_exists('collect_bool')) {
    function collect_bool($value = null)
    {
        return new \Nxu\TypedCollection\Collections\BooleanCollection($value);
    }
}

if (! function_exists('collect_callable')) {
    function collect_callable($value = null)
    {
        return new \Nxu\TypedCollection\Collections\CallableCollection($value);
    }
}

if (! function_exists('collect_float')) {
    function collect_float($value = null)
    {
        return new \Nxu\TypedCollection\Collections\FloatCollection($value);
    }
}

if (! function_exists('collect_integer')) {
    function collect_integer($value = null)
    {
        return new \Nxu\TypedCollection\Collections\IntegerCollection($value);
    }
}

if (! function_exists('collect_resource')) {
    function collect_resource($value = null)
    {
        return new \Nxu\TypedCollection\Collections\ResourceCollection($value);
    }
}

if (! function_exists('collect_string')) {
    function collect_string($value = null)
    {
        return new \Nxu\TypedCollection\Collections\StringCollection($value);
    }
}
