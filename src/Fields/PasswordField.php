<?php

namespace App\Classes\DataStructs\Fields;

use App\Classes\DataStructs\FieldShowIn;
use App\Classes\DataStructs\FieldType;
use App\Classes\DataStructs\GridField;

class PasswordField extends GridField
{
    public function __construct(
        string $name = 'password',
        string $label = 'Пароль',
        ?string $alias = null,
    ) {
        parent::__construct($name, $label, FieldType::PASSWORD, alias: $alias);
        $this->setShowIn(FieldShowIn::MODAL);
    }
}
