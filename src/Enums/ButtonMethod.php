<?php

namespace Xanderevg\AdminStructLibrary\Enums;

enum ButtonMethod: string implements \JsonSerializable
{
    case GET = 'get';
    case POST = 'post';
    case PUT = 'put';
    case DELETE = 'delete';

    public function jsonSerialize(): string
    {
        return $this->name;
    }
}
