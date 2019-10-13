<?php

declare(strict_types=1);

namespace LoomTest\Template\TestAsset;

use Loom\Template\ArrayParametersTrait;

class ArrayParameters
{
    use ArrayParametersTrait;

    public function normalize($params)
    {
        return $this->normalizeParams($params);
    }
}
