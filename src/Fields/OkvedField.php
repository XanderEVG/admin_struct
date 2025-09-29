<?php

namespace Xanderevg\AdminStructLibrary\Fields;

use Xanderevg\AdminStructLibrary\Enums\FieldType;
use Xanderevg\AdminStructLibrary\GridField;

class OkvedField extends GridField
{
    public function __construct(
        string $name,
        string $label,
        string $referUrl,
        string $optionLabel = 'title',
        ?string $alias = null,
    ) {
        parent::__construct($name, $label, FieldType::SELECT, alias: $alias);
        $this->setReferUrl($referUrl);
        $this->setOptionLabel($optionLabel);
    }

    public function setOrderKey(?string $orderKey): static
    {
        $this->orderKey = $orderKey;

        return $this;
    }

    protected function outputFieldParams(): ?array
    {
        $params = [
            ...$this->outputFieldStdParams(),
            'referUrl',
            'optionLabel',
        ];

        if ($this->additionalInfo) {
            $params[] = 'additionalInfo';
        }
        if ($this->orderKey) {
            $params[] = 'orderKey';
        }
        if ($this->multiple) {
            $params[] = 'multiple';
        }

        return $params;
    }
}
