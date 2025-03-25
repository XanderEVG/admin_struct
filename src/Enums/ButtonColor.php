<?php

namespace Xanderevg\AdminStructLibrary\Enums;

enum ButtonColor: string implements \JsonSerializable
{
    case POSITIVE = 'positive';
    case NEGATIVE = 'negative';
    case WARNING = 'warning';
    case ACCENT = 'accent';
    case PRIMARY = 'primary';
    case SECONDARY = 'secondary';
    case INFO = 'info';

    public function jsonSerialize(): string
    {
        return $this->value;
    }
}
