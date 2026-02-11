<?php

namespace Xanderevg\AdminStructLibrary\Fields;

use Xanderevg\AdminStructLibrary\Enums\FieldType;
use Xanderevg\AdminStructLibrary\GridField;

class RadioField extends GridField
{
    public function __construct(
        string $name,
        string $label,
        string $radioGroup,
        ?string $alias = null,
    ) {
        parent::__construct($name, $label, FieldType::RADIO, alias: $alias);
        $this->setRadioGroup($radioGroup);
    }

    protected function outputFieldParams(): ?array
    {
        $params = [
            ...$this->outputFieldStdParams(),
        ];

        if ($this->radioGroup) {
            $params[] = 'radioGroup';
        }

        return $params;
    }
}
