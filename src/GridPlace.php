<?php

namespace App\Classes\DataStructs;

class GridPlace implements \JsonSerializable
{
    public function __construct(
        public ?string $row_start = null,
        public ?string $row_end = null,
        public ?string $col_start = null,
        public ?string $col_end = null,
    ) {
    }

    public function jsonSerialize(): array
    {
        return [
            'rowStart' => $this->row_start,
            'rowEnd' => $this->row_end,
            'colStart' => $this->col_start,
            'colEnd' => $this->col_end,
        ];
    }
}
