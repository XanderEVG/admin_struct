<?php

namespace Xanderevg\AdminStructLibrary;

class GridPlace implements \JsonSerializable
{
    public function __construct(
        public ?string $rowStart = null,
        public ?string $rowEnd = null,
        public ?string $colStart = null,
        public ?string $colEnd = null,
    ) {
    }

    public function jsonSerialize(): array
    {
        return [
            'rowStart' => $this->rowStart,
            'rowEnd' => $this->rowEnd,
            'colStart' => $this->colStart,
            'colEnd' => $this->colEnd,
        ];
    }
}
