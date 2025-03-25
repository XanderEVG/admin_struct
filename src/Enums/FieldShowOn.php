<?php

namespace Xanderevg\AdminStructLibrary\Enums;

enum FieldShowOn: string implements \JsonSerializable
{
    case ALL = 'all';
    case CREATE = 'create';
    case EDIT = 'edit';
    case NONE = 'none';

    public function jsonSerialize(): string
    {
        return $this->value;
    }

    public static function valueList(): array
    {
        return array_column(self::cases(), 'value');
    }
}
