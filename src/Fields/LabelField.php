<?php

namespace Xanderevg\AdminStructLibrary\Fields;

use Xanderevg\AdminStructLibrary\Enums\FieldType;
use Xanderevg\AdminStructLibrary\GridField;
use Xanderevg\AdminStructLibrary\GridPlace;

class LabelField extends GridField
{
    public function __construct(
        string $name,
        string $label,
        ?GridPlace $gridPlace,
    ) {
        parent::__construct($name, $label, FieldType::LABEL);
        $this->setGridPlace($gridPlace);
    }
}
