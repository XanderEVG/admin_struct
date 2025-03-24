<?php

namespace App\Classes\DataStructs\Fields;

use App\Classes\DataStructs\FieldType;
use App\Classes\DataStructs\GridField;

class PhoneField extends GridField
{
    public function __construct(
        string $name = 'phone',
        string $label = 'Телефон',
        ?int $max_length = 12,
        ?string $alias = null,
    ) {
        parent::__construct($name, $label, FieldType::PHONE, alias: $alias);
        $this->setMaxLength($max_length);
    }
}
