<?php

namespace App\Classes\DataStructs\Fields;

use App\Classes\DataStructs\FieldType;
use App\Classes\DataStructs\GridField;
use App\Classes\DataStructs\GridPlace;

class LabelField extends GridField
{
    public function __construct(
        string $name,
        string $label,
        ?GridPlace $grid_place,
    ) {
        parent::__construct($name, $label, FieldType::LABEL);
        $this->setGridPlace($grid_place);
    }
}
