<?php

namespace App\Classes\DataStructs\Fields;

use App\Classes\DataStructs\FieldType;
use App\Classes\DataStructs\GridField;

class FileField extends GridField
{
    public function __construct(
        string $name,
        string $label,
        string $accept = '.pdf, .doc, .docx, .odt, .ods, .xls, .xlsx',
        bool $multiple = false,
        string $refer_url = '/api/files',
        ?string $alias = null,
    ) {
        parent::__construct($name, $label, FieldType::FILE, alias: $alias);
        $this->setReferUrl($refer_url);
        $this->setAccept($accept);
        $this->setMultiple($multiple);
        $this->setSortable(false);
        $this->setFilterable(false);
    }
}
