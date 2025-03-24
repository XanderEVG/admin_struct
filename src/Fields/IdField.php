<?php

namespace App\Classes\DataStructs\Fields;

use App\Classes\DataStructs\FieldShowIn;
use App\Classes\DataStructs\FieldType;
use App\Classes\DataStructs\GridField;

class IdField extends GridField
{
    public function __construct(
        string $name = 'id',
        string $label = 'Ид',
        ?string $alias = null,
    ) {
        parent::__construct($name, $label, FieldType::NUMBER, alias: $alias);
        $this->setShowIn(FieldShowIn::GRID);
        $this->setReadonly(true);
    }
}
