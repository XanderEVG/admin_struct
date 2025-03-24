<?php

namespace App\Classes\Enums\Buttons;

enum ButtonType implements \JsonSerializable
{
    case NONE;
    case RELOAD;
    case MODEL;
    case MODAL_HTML;
    case MODAL_DOCS;
    case MODAL_IMAGES;
    case INPUT_ROW;
    case INPUT_ROWS_MULTIPLE;
    case DOWNLOAD;
    case IMPORT;
    case READONLY;

    public function jsonSerialize(): string
    {
        return $this->name;
    }
}
