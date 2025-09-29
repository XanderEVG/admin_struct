<?php

namespace Xanderevg\AdminStructLibrary\Fields;

use Xanderevg\AdminStructLibrary\Enums\FieldType;
use Xanderevg\AdminStructLibrary\GridField;

class NumberField extends GridField
{
    public function __construct(
        string $name,
        string $label,
        ?int $min = null,
        ?int $max = null,
        ?string $alias = null,
    ) {
        parent::__construct($name, $label, FieldType::NUMBER, alias: $alias);
        $this->setMin($min);
        $this->setMax($max);
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
