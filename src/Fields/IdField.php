<?php

namespace Xanderevg\AdminStructLibrary\Fields;

use Xanderevg\AdminStructLibrary\Enums\FieldShowIn;
use Xanderevg\AdminStructLibrary\Enums\FieldType;
use Xanderevg\AdminStructLibrary\GridField;

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
