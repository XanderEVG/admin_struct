<?php

namespace App\Classes\DataStructs;

class GridField implements \JsonSerializable
{
    public mixed $default_value = null;
    public ?string $refer_url = null;
    public ?string $option_label = null;

    /**
     * @var array<string>|null
     */
    public ?array $dependency = null;

    /**
     * @var array|null
     *
     * TSelectAdditionalInfo = {
     *      field: string,
     *      optionLabel?: string
     * }
     */
    public ?array $additional_info = null;

    public ?array $options = null;
    public ?bool $required = false;
    public ?bool $multiple = null;
    public ?string $accept = null;

    // https://quasar.dev/vue-components/input#mask
    // https://github.com/quasarframework/quasar/blob/dev/ui/src/components/input/use-mask.js#L6
    public ?string $mask = null;
    public ?float $step = null;
    public ?float $min = null;
    public ?float $max = null;
    public ?int $max_length = null;
    public ?string $max_width = null;

    public ?bool $sortable = true;
    public ?bool $filterable = true;
    public ?bool $multiple_filter = false;
    public ?bool $readonly = false;
    public ?bool $clearable = null;
    public ?FieldShowOn $show_on = FieldShowOn::ALL;
    public ?FieldShowIn $show_in = FieldShowIn::ALL;
    public ?bool $autogrow = false;
    public ?array $sub_struct = null;
    public ?GridPlace $grid_place = null;
    public ?string $hint = null;

    public function __construct(
        public string $name,
        public string $label,
        public FieldType $type,
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
            'defaultValue' => $this->default_value,

            'referUrl' => $this->refer_url,
            'optionLabel' => $this->option_label,
            'dependency' => $this->dependency,
            'additionalInfo' => $this->additional_info,
            'options' => $this->options,

            'multiple' => $this->multiple,
            'accept' => $this->accept,
            'mask' => $this->mask,
            'step' => $this->step,
            'min' => $this->min,
            'max' => $this->max,
            'maxLength' => $this->max_length,
            'maxWidth' => $this->max_width,
            'required' => $this->required,
            'sortable' => $this->sortable,
            'filterable' => $this->filterable,
            'multipleFilter' => $this->multiple_filter,
            'readonly' => $this->readonly,
            'clearable' => $this->clearable,
            'showIn' => $this->show_in,
            'showOn' => $this->show_on,
            'autogrow' => $this->autogrow,
            'gridPlace' => $this->grid_place,
            'hint' => $this->hint,
        ];

        if ($this->sub_struct) {
            $response['sub_struct'] = $this->sub_struct;
        }

        return $response;
    }

    public function setDefaultValue(mixed $default_value): GridField
    {
        $this->default_value = $default_value;

        return $this;
    }

    public function setReferUrl(?string $refer_url): GridField
    {
        $this->refer_url = $refer_url;

        return $this;
    }

    public function setOptionLabel(?string $option_label): GridField
    {
        $this->option_label = $option_label;

        return $this;
    }

    public function setDependency(?array $dependency): GridField
    {
        $this->dependency = $dependency;

        return $this;
    }

    public function setAdditionalInfo(?array $additional_info): GridField
    {
        $this->additional_info = $additional_info;

        return $this;
    }

    public function addAdditionalInfo(GridFieldAdditionalInfo $additional_item): GridField
    {
        $this->additional_info[] = $additional_item;

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

    public function setMaxWidth(?string $max_width): GridField
    {
        $this->max_width = $max_width;

        return $this;
    }

    public function setSortable(?bool $sortable): GridField
    {
        $this->sortable = $sortable;

        return $this;
    }

    public function setMultipleFilter(?bool $multiple_filter): GridField
    {
        $this->multiple_filter = $multiple_filter;

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

    public function setShowOn(?FieldShowOn $show_on): GridField
    {
        $this->show_on = $show_on;

        return $this;
    }

    public function setShowIn(?FieldShowIn $show_in): GridField
    {
        $this->show_in = $show_in;

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

    public function setMaxLength(?int $max_length): GridField
    {
        $this->max_length = $max_length;

        return $this;
    }

    public function setFilterable(?bool $filterable): GridField
    {
        $this->filterable = $filterable;

        return $this;
    }

    public function setGridPlace(?GridPlace $grid_place): GridField
    {
        $this->grid_place = $grid_place;

        return $this;
    }

    public function setHint(?string $hint): GridField
    {
        $this->hint = $hint;

        return $this;
    }
}
