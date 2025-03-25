<?php

namespace Xanderevg\AdminStructLibrary\Enums;

enum FieldType: string implements \JsonSerializable
{
    case ID = 'id';

    case TEXT = 'text';
    case STRING = 'string';

    case SELECT = 'select';
    case STRING_SELECT = 'stringSelect';
    case SELECT_TREE = 'selectTree';
    case ROLES = 'roles';

    case BOOLEAN = 'boolean';
    case DATE = 'date';
    case DATETIME = 'datetime';
    case PASSWORD = 'password';

    case SLIDER = 'slider';
    case NUMBER = 'number';
    case FLOAT = 'float';

    case IMAGE = 'image';
    case FILE = 'file';
    case PHONE = 'phone';
    case EMAIL = 'email';

    case COORDINATE = 'coordinate';
    case EDITOR = 'editor';
    case LABEL = 'label';
    case FIAS = 'fias';
    case ANSWERS = 'answers';

    public function jsonSerialize(): string
    {
        return $this->value;
    }

    public static function valueList(): array
    {
        return array_column(self::cases(), 'value');
    }
}
