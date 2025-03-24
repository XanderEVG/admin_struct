<?php

namespace App\Classes\DataStructs\Fields;

use App\Classes\DataStructs\FieldType;
use App\Classes\DataStructs\GridField;

class NumberField extends GridField
{
    public function __construct(
        string $name,
        string $label,
        ?int $min = null,
        ?int $max = null,
        ?string $alias = null,
    ) {
        parent::__construct($name, $label, FieldType::NUMBER, alias: $alias);
        $this->setMin($min);
        $this->setMax($max);
    }
}
