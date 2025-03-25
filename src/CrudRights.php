<?php

namespace Xanderevg\AdminStructLibrary;

class CrudRights implements \JsonSerializable
{
    public function __construct(
        public bool $create = false,
        public bool $read = false,
        public bool $update = false,
        public bool $delete = false,
    ) {
    }

    public function setAll(bool $right): self
    {
        $this->create = $right;
        $this->read = $right;
        $this->update = $right;
        $this->delete = $right;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            'c' => $this->create,
            'r' => $this->read,
            'u' => $this->update,
            'd' => $this->delete,
        ];
    }
}
