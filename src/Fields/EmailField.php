<?php

namespace Xanderevg\AdminStructLibrary\Fields;

use Xanderevg\AdminStructLibrary\Enums\FieldType;
use Xanderevg\AdminStructLibrary\GridField;

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
