<?php

namespace Xanderevg\AdminStructLibrary;

class GridFieldAdditionalInfo implements \JsonSerializable
{
    public function __construct(
        public string $field,
        public ?string $optionLabel = null,
    ) {
    }

    public function jsonSerialize(): array
    {
        $response = [
            'field' => $this->field,
            'optionLabel' => $this->optionLabel,
        ];

        return $response;
    }
}
