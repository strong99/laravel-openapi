<?php

namespace Vyuldashev\LaravelOpenApi\Factories;

use GoldSpecDigital\ObjectOrientedOAS\Objects\RequestBody;
use Vyuldashev\LaravelOpenApi\Concerns\Referencable;
use Vyuldashev\LaravelOpenApi\Attributes\RequestBody as RequestBodyAttribute;

abstract class RequestBodyFactory
{
    use Referencable;

    abstract public function build(RequestAttribute $attribute): RequestBody;
}
