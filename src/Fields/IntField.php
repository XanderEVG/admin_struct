<?php

namespace Xanderevg\AdminStructLibrary\Fields;

use Xanderevg\AdminStructLibrary\Enums\FieldType;
use Xanderevg\AdminStructLibrary\GridField;

class IntField extends GridField
{
    public function __construct(
        string $name,
        string $label,
        ?string $alias = null,
    ) {
        parent::__construct($name, $label, FieldType::NUMBER, alias: $alias);
    }

    protected function outputFieldParams(): ?array
    {
        $params = [
            ...$this->outputFieldStdParams(),
        ];

        if ($this->min) {
            $params[] = 'min';
        }
        if ($this->max) {
            $params[] = 'max';
        }
        if ($this->mask) {
            $params[] = 'mask';
        }

        return $params;
    }
}
