<?php

namespace Xanderevg\AdminStructLibrary\Fields;

use Xanderevg\AdminStructLibrary\Enums\FieldType;
use Xanderevg\AdminStructLibrary\GridField;

class ImageField extends GridField
{
    public function __construct(
        string $name,
        string $label,
        string $accept = 'image/*',
        bool $multiple = false,
        string $referUrl = '/api/files',
        ?string $alias = null,
    ) {
        parent::__construct($name, $label, FieldType::IMAGE, alias: $alias);
        $this->setReferUrl($referUrl);
        $this->setAccept($accept);
        $this->setMultiple($multiple);
        $this->setSortable(false);
        $this->setFilterable(false);
    }

    protected function outputFieldParams(): ?array
    {
        $params = [
            ...$this->outputFieldStdParams(),
            'multiple',
            'accept',
            'referUrl',
        ];

        if ($this->maxLength) {
            $params[] = 'maxLength';
        }
        if ($this->additionalInfo) {
            $params[] = 'additionalInfo';
        }

        return $params;
    }
}
