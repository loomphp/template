<?php

declare(strict_types=1);

namespace Loom\Template;

use Traversable;

use function get_class;
use function gettype;
use function is_array;
use function is_object;
use function iterator_to_array;
use function method_exists;
use function sprintf;

trait ArrayParametersTrait
{
    /**
     * Cast params to an array, if possible.
     *
     * Casts the provided $params argument to an array, using the following rules:
     *
     * - null values result in an empty array
     * - array values are returned verbatim
     * - Traversables are cast using iterator_to_array
     *   using PHP's type casting
     * - scalar values result in an exception
     *
     * @param mixed $params
     * @throws Exception\InvalidArgumentException for non-array, non-object parameters.
     */
    private function normalizeParams($params) : array
    {
        if (null === $params) {
            return [];
        }

        if (is_array($params)) {
            return $params;
        }

        if ($params instanceof Traversable) {
            return iterator_to_array($params);
        }

        if (is_object($params)) {
            return (array) $params;
        }

        throw new Exception\InvalidArgumentException(sprintf(
            '%s template adapter can only handle arrays, Traversables, and objects '
            . 'when rendering; received %s',
            get_class($this),
            gettype($params)
        ));
    }
}
