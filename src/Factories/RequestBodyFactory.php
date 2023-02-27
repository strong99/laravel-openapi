<?php

namespace Vyuldashev\LaravelOpenApi\Factories;

use GoldSpecDigital\ObjectOrientedOAS\Objects\RequestBody;
use Vyuldashev\LaravelOpenApi\Concerns\Referencable;
use Vyuldashev\LaravelOpenApi\Attributes\Request as RequestAttribute;

abstract class RequestBodyFactory
{
    use Referencable;

    abstract public function build(RequestAttribute $attribute): RequestBody;
}
