<?php

namespace Xanderevg\AdminStructLibrary\Fields;

use Xanderevg\AdminStructLibrary\Enums\FieldType;
use Xanderevg\AdminStructLibrary\GridField;

class SliderField extends GridField
{
    public function __construct(
        string $name,
        string $label,
        int $min,
        int $max,
        ?string $alias = null,
    ) {
        parent::__construct($name, $label, FieldType::SLIDER, alias: $alias);
        $this->setMin($min);
        $this->setMax($max);
    }
}
