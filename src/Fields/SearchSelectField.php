<?php

namespace Xanderevg\AdminStructLibrary\Fields;

use Xanderevg\AdminStructLibrary\Enums\FieldType;
use Xanderevg\AdminStructLibrary\GridField;

class SearchSelectField extends GridField
{
    public function __construct(
        string $name,
        string $label,
        string $referUrl,
        string $optionLabel,
        ?string $alias = null,
    ) {
        parent::__construct($name, $label, FieldType::SEARCH_SELECT, alias: $alias);
        $this->setReferUrl($referUrl);
        $this->setOptionLabel($optionLabel);
    }

    public function setOrderKey(?string $orderKey): static
    {
        $this->orderKey = $orderKey;

        return $this;
    }
}
