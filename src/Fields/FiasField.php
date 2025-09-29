<?php

namespace Xanderevg\AdminStructLibrary\Fields;

use Xanderevg\AdminStructLibrary\Enums\FieldType;
use Xanderevg\AdminStructLibrary\GridField;

class FiasField extends GridField
{
    public function __construct(
        string $name,
        string $label,
        string $fiasType = 'adm',
        bool $fiasOnlyTo = false,
        bool $fiasGetObject = false,
        ?string $alias = null,
    ) {
        parent::__construct($name, $label, FieldType::FIAS, alias: $alias);
    }

    protected function outputFieldParams(): ?array
    {
        $params = [
            ...$this->outputFieldStdParams(),
            'fiasType',
            'fiasOnlyTo',
            'referUrl',
            'fiasGetObject',
        ];

        if ($this->multiple) {
            $params[] = 'multiple';
        }
        if ($this->additionalInfo) {
            $params[] = 'additionalInfo';
        }
        if ($this->optionLabel) {
            $params[] = 'optionLabel';
        }

        return $params;
    }
}
