<?php

namespace Vyuldashev\LaravelOpenApi\Factories;

use GoldSpecDigital\ObjectOrientedOAS\Objects\Response;
use Vyuldashev\LaravelOpenApi\Concerns\Referencable;
use Vyuldashev\LaravelOpenApi\Attributes\Response as ResponseAttribute;

abstract class ResponseFactory
{
    use Referencable;

    abstract public function build(ResponseAttribute $attribute): Response;
}
