<?php

namespace Xanderevg\AdminStructLibrary\Fields;

use Xanderevg\AdminStructLibrary\Enums\FieldType;
use Xanderevg\AdminStructLibrary\GridField;

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
