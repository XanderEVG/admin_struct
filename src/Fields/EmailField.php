<?php

namespace App\Classes\DataStructs\Fields;

use App\Classes\DataStructs\FieldType;
use App\Classes\DataStructs\GridField;

class EmailField extends GridField
{
    public function __construct(
        string $name = 'email',
        string $label = 'E-mail',
        ?string $alias = null,
    ) {
        parent::__construct($name, $label, FieldType::EMAIL, alias: $alias);
    }
}
