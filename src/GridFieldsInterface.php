<?php

namespace App\Classes\DataStructs;

interface GridFieldsInterface
{
    public function __construct(GridField ...$fields);

    public function toArray(): array;
}
