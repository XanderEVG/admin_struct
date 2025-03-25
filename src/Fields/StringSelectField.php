<?php

namespace Xanderevg\AdminStructLibrary\Fields;

use Xanderevg\AdminStructLibrary\Enums\FieldType;
use Xanderevg\AdminStructLibrary\GridField;

class StringSelectField extends GridField
{
    public function __construct(
        string $name,
        string $label,
        array $options,
        string $optionLabel = 'name',
        ?string $alias = null,
    ) {
        parent::__construct($name, $label, FieldType::STRING_SELECT, alias: $alias);
        $this->setOptions($options);
        $this->setOptionLabel($optionLabel);
    }
}
