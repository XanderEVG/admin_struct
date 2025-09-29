<?php

namespace Xanderevg\AdminStructLibrary\Fields;

use Xanderevg\AdminStructLibrary\Enums\FieldType;
use Xanderevg\AdminStructLibrary\GridField;

class SearchStringField extends GridField
{
    public function __construct(
        string $name,
        string $label,
        ?int $maxLength = null,
        ?string $alias = null,
    ) {
        parent::__construct($name, $label, FieldType::SEARCH_STRING, alias: $alias);
        $this->setMaxLength($maxLength);
    }

    protected function outputFieldParams(): ?array
    {
        $params = [
            ...$this->outputFieldStdParams(),
            'referUrl',
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
