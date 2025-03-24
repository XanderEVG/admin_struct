<?php

namespace App\Classes\DataStructs\Fields;

use App\Classes\DataStructs\FieldType;
use App\Classes\DataStructs\GridField;

class StringSelectField extends GridField
{
    public function __construct(
        string $name,
        string $label,
        array $options,
        string $option_label = 'name',
        ?string $alias = null,
    ) {
        parent::__construct($name, $label, FieldType::STRING_SELECT, alias: $alias);
        $this->setOptions($options);
        $this->setOptionLabel($option_label);
    }
}
