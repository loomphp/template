<?php
declare(strict_types=1);

namespace Loom\Template\Exception;

use DomainException;

class RenderingException extends DomainException implements ExceptionInterface
{
}
