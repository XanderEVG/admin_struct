<?php

namespace App\Classes\DataStructs;

class GridFields implements GridFieldsInterface
{
    private array $fields;

    public function __construct(GridField ...$fields)
    {
        $this->fields = $fields;
    }

    public function addField(GridField $field): void
    {
        $this->fields[] = $field;
    }

    public function editField(string $field_name, GridField $field): void
    {
        foreach ($this->fields as $field_index => $exist_field) {
            if ($exist_field->name === $field_name) {
                $this->fields[$field_index] = $field;

                return;
            }
        }
    }

    public function deleteField(string $field_name): void
    {
        foreach ($this->fields as $field_index => $exist_field) {
            if ($exist_field->name === $field_name) {
                unset($this->fields[$field_index]);

                return;
            }
        }
    }

    public function addSubStruct($field_name, GridFields $sub_struct): void
    {
        foreach ($this->fields as $field_index => $exist_field) {
            if ($exist_field->name === $field_name) {
                $this->fields[$field_index]->sub_struct = $sub_struct->toArray();

                return;
            }
        }
    }

    public function toArray(): array
    {
        $response = [];
        foreach ($this->fields as $field) {
            $response[$field->name] = $field;
        }

        return $response;
    }
}
