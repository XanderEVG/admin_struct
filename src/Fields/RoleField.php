<?php

namespace Xanderevg\AdminStructLibrary\Fields;

use Xanderevg\AdminStructLibrary\Enums\FieldType;
use Xanderevg\AdminStructLibrary\GridField;

class RoleField extends GridField
{
    public function __construct(
        array $options,
        ?string $alias = null,
    ) {
        parent::__construct('role', 'Роль пользователя', FieldType::ROLES, alias: $alias);
        $this->setOptions($options);
        $this->setOptionLabel('name');
    }

    protected function outputFieldParams(): ?array
    {
        $params = [
            ...$this->outputFieldStdParams(),
            'optionLabel',
        ];

        if ($this->mask) {
            $params[] = 'mask';
        }

        return $params;
    }
}
