<?php

declare(strict_types=1);

namespace LoomTest\Template\TestAsset;

use Loom\Template\DefaultParamsTrait;

class DefaultParameters
{
    use DefaultParamsTrait;

    public function getParameters()
    {
        return $this->defaultParams;
    }

    public function mergeParameters($template, array $params)
    {
        return $this->mergeParams($template, $params);
    }
}
