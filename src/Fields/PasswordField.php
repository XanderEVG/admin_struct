<?php

namespace Xanderevg\AdminStructLibrary\Fields;

use Xanderevg\AdminStructLibrary\Enums\FieldShowIn;
use Xanderevg\AdminStructLibrary\Enums\FieldType;
use Xanderevg\AdminStructLibrary\GridField;

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

    protected function outputFieldParams(): ?array
    {
        $params = [
            ...$this->outputFieldStdParams(),
        ];

        if ($this->maxLength) {
            $params[] = 'maxLength';
        }

        return $params;
    }
}
