<?php

namespace Vyuldashev\LaravelOpenApi\Factories;

use GoldSpecDigital\ObjectOrientedOAS\Objects\PathItem;
use Vyuldashev\LaravelOpenApi\Attributes\Callback as CallbackAttribute;

abstract class CallbackFactory
{
    abstract public function build(CallbackAttribute $attribute): PathItem;
}
