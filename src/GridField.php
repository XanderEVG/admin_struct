<?php

namespace Xanderevg\AdminStructLibrary;

use Xanderevg\AdminStructLibrary\Enums\FieldShowIn;
use Xanderevg\AdminStructLibrary\Enums\FieldShowOn;
use Xanderevg\AdminStructLibrary\Enums\FieldType;

class GridField implements \JsonSerializable
{
    public mixed $defaultValue = null;
    public ?string $referUrl = null;
    public ?string $optionLabel = null;

    /**
     * @var array<string>|null
     */
    public ?array $dependency = null;

    /**
     * @var GridFieldAdditionalInfo[]|null
     */
    public ?array $additionalInfo = null;

    public ?array $options = null;
    public ?bool $required = false;
    public ?bool $multiple = null;
    public ?string $accept = null;

    public ?string $mask = null;
    public ?float $step = null;
    public ?float $min = null;
    public ?float $max = null;
    public ?int $maxLength = null;
    public ?string $maxWidth = null;

    public ?bool $sortable = true;
    public ?bool $filterable = true;
    public ?bool $multipleFilter = false;
    public ?bool $readonly = false;
    public ?bool $clearable = null;
    public ?FieldShowOn $showOn = FieldShowOn::ALL;
    public ?FieldShowIn $showIn = FieldShowIn::ALL;
    public ?bool $autogrow = false;
    public ?array $subStruct = null;
    public ?GridPlace $gridPlace = null;
    public ?string $hint = null;
    public ?string $placeholder = null;
    public ?string $orderKey = null;
    public ?string $fiasType = null;
    public ?bool $fiasOnlyTo = null;
    public ?bool $fiasGetObject = null;
    public ?array $customOptions = null;
    public ?string $radioGroup = null;

    public function __construct(
        public string $name,
        public string $label,
        public FieldType|string $type,
        public ?string $alias = null,
    ) {
    }

    public function jsonSerialize(): array
    {
        $response = [
            'alias' => $this->alias ?? null,
            'name' => $this->name,
            'label' => $this->label,
            'type' => $this->type,
            'defaultValue' => $this->defaultValue,

            'referUrl' => $this->referUrl,
            'optionLabel' => $this->optionLabel,
            'dependency' => $this->dependency,
            'additionalInfo' => $this->additionalInfo,
            'options' => $this->options,
            'orderByKey' => $this->orderKey,

            'multiple' => $this->multiple,
            'accept' => $this->accept,
            'mask' => $this->mask,
            'step' => $this->step,
            'min' => $this->min,
            'max' => $this->max,
            'maxLength' => $this->maxLength,
            'maxWidth' => $this->maxWidth,
            'required' => $this->required,
            'sortable' => $this->sortable,
            'filterable' => $this->filterable,
            'multipleFilter' => $this->multipleFilter,
            'readonly' => $this->readonly,
            'clearable' => $this->clearable,
            'showIn' => $this->showIn,
            'showOn' => $this->showOn,
            'autogrow' => $this->autogrow,
            'gridPlace' => $this->gridPlace,
            'hint' => $this->hint,
            'placeholder' => $this->placeholder,
            'fiasType' => $this->fiasType,
            'fiasOnlyTo' => $this->fiasOnlyTo,
            'fiasGetObject' => $this->fiasGetObject,
            'customOptions' => $this->customOptions,
            'radioGroup' => $this->radioGroup,
        ];

        if ($this->subStruct) {
            $response['subStruct'] = $this->subStruct;
        }

        $outputParams = $this->outputFieldParams();
        if ($outputParams !== null) {
            $response = array_intersect_key($response, array_flip($outputParams));
        }

        return $response;
    }

    protected function outputFieldParams(): ?array
    {
        return null;
    }

    protected function outputFieldStdParams(): ?array
    {
        $params = [
            'name',
            'label',
            'type',
            'required',
            'sortable',
            'filterable',
            'readonly',
            'showIn',
            'showOn',
        ];

        if ($this->alias) {
            $params[] = 'alias';
        }

        if ($this->defaultValue) {
            $params[] = 'defaultValue';
        }

        if ($this->gridPlace) {
            $params[] = 'gridPlace';
        }

        if ($this->dependency) {
            $params[] = 'dependency';
        }

        if ($this->hint) {
            $params[] = 'hint';
        }

        if ($this->placeholder) {
            $params[] = 'placeholder';
        }

        if ($this->maxWidth) {
            $params[] = 'maxWidth';
        }

        if ($this->clearable) {
            $params[] = 'clearable';
        }

        if ($this->customOptions) {
            $params[] = 'customOptions';
        }


        return $params;
    }

    public function setDefaultValue(mixed $defaultValue): GridField
    {
        $this->defaultValue = $defaultValue;

        return $this;
    }

    public function setReferUrl(?string $referUrl): GridField
    {
        $this->referUrl = $referUrl;

        return $this;
    }

    public function setOptionLabel(?string $optionLabel): GridField
    {
        $this->optionLabel = $optionLabel;

        return $this;
    }

    public function setDependency(?array $dependency): GridField
    {
        $this->dependency = $dependency;

        return $this;
    }

    /**
     * @param GridFieldAdditionalInfo[] $additionalInfo
     */
    public function setAdditionalInfo(?array $additionalInfo): GridField
    {
        $this->additionalInfo = $additionalInfo;

        return $this;
    }

    public function addAdditionalInfo(GridFieldAdditionalInfo $additionalItem): GridField
    {
        $this->additionalInfo[] = $additionalItem;

        return $this;
    }

    public function setOptions(?array $options): GridField
    {
        $this->options = $options;

        return $this;
    }

    public function require($required = true): GridField
    {
        $this->required = $required;

        return $this;
    }

    public function setMultiple(?bool $multiple): GridField
    {
        $this->multiple = $multiple;

        return $this;
    }

    public function setAccept(?string $accept): GridField
    {
        $this->accept = $accept;

        return $this;
    }

    public function setMask(?string $mask): GridField
    {
        $this->mask = $mask;

        return $this;
    }

    public function setStep(?float $step): GridField
    {
        $this->step = $step;

        return $this;
    }

    public function setMin(?float $min): GridField
    {
        $this->min = $min;

        return $this;
    }

    public function setMax(?float $max): GridField
    {
        $this->max = $max;

        return $this;
    }

    public function setMaxWidth(?string $maxWidth): GridField
    {
        $this->maxWidth = $maxWidth;

        return $this;
    }

    public function setSortable(?bool $sortable): GridField
    {
        $this->sortable = $sortable;

        return $this;
    }

    public function setMultipleFilter(?bool $multipleFilter): GridField
    {
        $this->multipleFilter = $multipleFilter;

        return $this;
    }

    public function setReadonly(?bool $readonly): GridField
    {
        $this->readonly = $readonly;

        return $this;
    }

    public function setClearable(?bool $clearable): GridField
    {
        $this->clearable = $clearable;

        return $this;
    }

    public function setShowOn(?FieldShowOn $showOn): GridField
    {
        $this->showOn = $showOn;

        return $this;
    }

    public function setShowIn(?FieldShowIn $showIn): GridField
    {
        $this->showIn = $showIn;

        return $this;
    }

    public function setAutogrow(?bool $autogrow): GridField
    {
        $this->autogrow = $autogrow;

        return $this;
    }

    public function setAlias(?string $alias): GridField
    {
        $this->alias = $alias;

        return $this;
    }

    public function setMaxLength(?int $maxLength): GridField
    {
        $this->maxLength = $maxLength;

        return $this;
    }

    public function setFilterable(?bool $filterable): GridField
    {
        $this->filterable = $filterable;

        return $this;
    }

    public function setGridPlace(?GridPlace $gridPlace): GridField
    {
        $this->gridPlace = $gridPlace;

        return $this;
    }

    public function setHint(?string $hint): GridField
    {
        $this->hint = $hint;

        return $this;
    }
    public function setPlaceholder(?string $placeholder): GridField
    {
        $this->placeholder = $placeholder;

        return $this;
    }

    public function setFiasGetObject(?bool $fiasGetObject): GridField
    {
        $this->fiasGetObject = $fiasGetObject;

        return $this;
    }

    public function setFiasOnlyTo(?bool $fiasOnlyTo): GridField
    {
        $this->fiasOnlyTo = $fiasOnlyTo;

        return $this;
    }

    public function setFiasType(?string $fiasType): GridField
    {
        $this->fiasType = $fiasType;

        return $this;
    }

    public function getCustomOptions(): ?array
    {
        return $this->customOptions;
    }

    public function setCustomOptions(?array $customOptions): GridField
    {
        $this->customOptions = $customOptions;

        return $this;
    }

    public function getRadioGroup(): ?string
    {
        return $this->radioGroup;
    }

    public function setRadioGroup(?string $radioGroup): GridField
    {
        $this->radioGroup = $radioGroup;

        return $this;
    }
}
