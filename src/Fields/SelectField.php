<?php

namespace App\Classes\DataStructs\Fields;

use App\Classes\DataStructs\FieldType;
use App\Classes\DataStructs\GridField;

class SelectField extends GridField
{
    public function __construct(
        string $name,
        string $label,
        string $refer_url,
        string $option_label,
        ?string $alias = null,
    ) {
        parent::__construct($name, $label, FieldType::SELECT, alias: $alias);
        $this->setReferUrl($refer_url);
        $this->setOptionLabel($option_label);
    }
}
