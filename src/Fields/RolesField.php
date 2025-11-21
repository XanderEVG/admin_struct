<?php

namespace Xanderevg\AdminStructLibrary\Fields;

use Xanderevg\AdminStructLibrary\Enums\FieldType;
use Xanderevg\AdminStructLibrary\GridField;

class RolesField extends GridField
{
    public function __construct(
        array $options,
        ?string $alias = null,
    ) {
        parent::__construct('roles', 'Роль пользователя', FieldType::ROLES, alias: $alias);
        $this->setOptions($options);
        $this->setOptionLabel('name');
        $this->setMultiple(true);
    }

    protected function outputFieldParams(): ?array
    {
        $params = [
            ...$this->outputFieldStdParams(),
            'optionLabel',
            'options',
        ];

        if ($this->mask) {
            $params[] = 'mask';
        }

        return $params;
    }
}
