<?php

namespace App\Classes\DataStructs;

/**
 * Enum for specifying where a field should be shown.
 */
enum FieldShowIn: string implements \JsonSerializable
{
    case ALL = 'all';
    case GRID = 'grid';
    case MODAL = 'modal';
    case NONE = 'none';

    /**
     * Serialize the enum value to JSON.
     */
    public function jsonSerialize(): string
    {
        return $this->value;
    }

    /**
     * Get list of all possible values.
     *
     * @return array<string>
     */
    public static function valueList(): array
    {
        return array_column(self::cases(), 'value');
    }
}
