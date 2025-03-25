<?php

namespace Xanderevg\AdminStructLibrary\Fields;

use Xanderevg\AdminStructLibrary\Enums\FieldType;
use Xanderevg\AdminStructLibrary\GridField;

class FileField extends GridField
{
    public function __construct(
        string $name,
        string $label,
        string $accept = '.pdf, .doc, .docx, .odt, .ods, .xls, .xlsx',
        bool $multiple = false,
        string $referUrl = '/api/files',
        ?string $alias = null,
    ) {
        parent::__construct($name, $label, FieldType::FILE, alias: $alias);
        $this->setReferUrl($referUrl);
        $this->setAccept($accept);
        $this->setMultiple($multiple);
        $this->setSortable(false);
        $this->setFilterable(false);
    }
}
