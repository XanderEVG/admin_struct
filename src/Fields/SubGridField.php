<?php

namespace Xanderevg\AdminStructLibrary\Fields;

use Xanderevg\AdminStructLibrary\Enums\FieldShowIn;
use Xanderevg\AdminStructLibrary\Enums\FieldType;
use Xanderevg\AdminStructLibrary\GridField;
use Xanderevg\AdminStructLibrary\GridFields;

class SubGridField extends GridField
{
    public function __construct(
        string $name,
        string $label,
        ?GridFields $gridFields,
    ) {
        parent::__construct($name, $label, FieldType::SUBGRID);
        $this->setSubStruct($gridFields);
        $this->setShowIn(FieldShowIn::MODAL);
    }

    protected function outputFieldParams(): ?array
    {
        return [
            ...$this->outputFieldStdParams(),
            'subStruct',
        ];
    }
}
