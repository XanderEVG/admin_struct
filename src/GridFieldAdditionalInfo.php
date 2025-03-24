<?php

namespace App\Classes\DataStructs;

class GridFieldAdditionalInfo implements \JsonSerializable
{
    public function __construct(
        public string $field,
        public ?string $option_label,
    ) {
    }

    public function jsonSerialize(): array
    {
        $response = [
            'field' => $this->field,
            'optionLabel' => $this->option_label,
        ];

        return $response;
    }
}
