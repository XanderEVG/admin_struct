<?php

namespace App\Classes\DataStructs\Fields;

use App\Classes\DataStructs\FieldType;
use App\Classes\DataStructs\GridField;

class FiasField extends GridField
{
    public function __construct(
        string $name,
        string $label,
        ?string $alias = null,
    ) {
        parent::__construct($name, $label, FieldType::FIAS, alias: $alias);
    }
}
