<?php

namespace Xanderevg\AdminStructLibrary;

interface GridFieldsInterface
{
    public function __construct(GridField ...$fields);

    public function toArray(): array;
}
