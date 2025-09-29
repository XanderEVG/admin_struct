<?php

namespace Xanderevg\AdminStructLibrary\Fields;

use Xanderevg\AdminStructLibrary\Enums\FieldType;
use Xanderevg\AdminStructLibrary\GridField;

class PhoneField extends GridField
{
    public function __construct(
        string $name = 'phone',
        string $label = 'Телефон',
        ?int $maxLength = 12,
        ?string $alias = null,
    )
    {
        parent::__construct($name, $label, FieldType::PHONE, alias: $alias);
        $this->setMaxLength($maxLength);
    }

    protected function outputFieldParams(): ?array
    {
        $params = [
            ...$this->outputFieldStdParams(),
        ];

        if ($this->mask) {
            $params[] = 'mask';
        }
        if ($this->maxLength) {
            $params[] = 'maxLength';
        }

        return $params;
    }
}
