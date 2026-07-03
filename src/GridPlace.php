<?php

namespace Xanderevg\AdminStructLibrary;

class GridPlace implements \JsonSerializable
{
    public function __construct(
        public ?int $rowStart = null,
        public ?int $rowEnd = null,
        public ?int $colStart = null,
        public ?int $colEnd = null,
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
