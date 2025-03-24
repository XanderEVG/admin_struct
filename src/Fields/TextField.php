<?php

namespace App\Classes\DataStructs\Fields;

use App\Classes\DataStructs\FieldType;
use App\Classes\DataStructs\GridField;

class TextField extends GridField
{
    public function __construct(
        string $name,
        string $label,
        ?int $max_length = null,
        ?string $alias = null,
    ) {
        parent::__construct($name, $label, FieldType::TEXT, alias: $alias);
        $this->setMaxLength($max_length);
    }
}
