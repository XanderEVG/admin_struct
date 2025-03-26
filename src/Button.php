<?php

namespace Xanderevg\AdminStructLibrary;

use Xanderevg\AdminStructLibrary\Enums\ButtonColor;
use Xanderevg\AdminStructLibrary\Enums\ButtonMethod;
use Xanderevg\AdminStructLibrary\Enums\ButtonType;

class Button implements \JsonSerializable
{
    public function __construct(
        public string $tooltip,
        public string $icon,
        public string $label,
        public string $getUrl,
        public string $actionUrl,
        public ButtonType $type,
        public ButtonMethod $actionMethod,
        public ButtonColor $color,
        public ?int $colsInModal = 1,
        public ?bool $enable = true,
        public ?GridFields $struct = null,
    ) {
    }

    public function setStruct(?GridFields $struct): Button
    {
        $this->struct = $struct;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            'tooltip' => $this->tooltip,
            'icon' => $this->icon,
            'label' => $this->label,
            'getUrl' => $this->getUrl,
            'actionUrl' => $this->actionUrl,
            'type' => $this->type,
            'actionMethod' => $this->actionMethod,
            'color' => $this->color,
            'colsInModal' => $this->colsInModal,
            'enable' => $this->enable,
            'struct' => $this->struct,
        ];
    }
}
