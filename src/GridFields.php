<?php

namespace Xanderevg\AdminStructLibrary;

use Xanderevg\AdminStructLibrary\Exceptions\GridFieldsHasDuplicationsException;

class GridFields implements GridFieldsInterface
{
    /** @var GridField[] */
    private array $fields = [];

    /** @var array<string, true> */
    private array $fieldNamesHash = [];

    public function __construct(GridField ...$fields)
    {
        foreach ($fields as $field) {
            $this->validateAndAddToHash($field);
        }
        $this->fields = $fields;
    }

    public function addField(GridField $field): void
    {
        $this->validateAndAddToHash($field);
        $this->fields[] = $field;
    }

    public function editField(string $fieldName, GridField $newField): void
    {
        foreach ($this->fields as $i => $existingField) {
            if ($existingField->name === $fieldName) {

                if ($newField->name !== $fieldName) {
                    $this->validateName($newField->name);

                    unset($this->fieldNamesHash[$fieldName]);
                    $this->fieldNamesHash[$newField->name] = true;
                }

                $this->fields[$i] = $newField;
                return;
            }
        }

        throw new \OutOfBoundsException("Field '{$fieldName}' not found");
    }

    public function deleteField(string $fieldName): void
    {
        foreach ($this->fields as $i => $existingField) {
            if ($existingField->name === $fieldName) {
                unset($this->fields[$i]);
                unset($this->fieldNamesHash[$fieldName]);
                $this->fields = array_values($this->fields);
                return;
            }
        }
    }

    public function addSubStruct(string $fieldName, GridFields $subStruct): void
    {
        foreach ($this->fields as $i => $existField) {
            if ($existField->name === $fieldName) {
                $this->fields[$i]->subStruct = $subStruct->toArray();

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

    private function validateName(string $name): void
    {
        if (isset($this->fieldNamesHash[$name])) {
            throw new GridFieldsHasDuplicationsException(
                "Field name '{$name}' already exists in grid structure"
            );
        }
    }

    private function validateAndAddToHash(GridField $field): void
    {
        $this->validateName($field->name);
        $this->fieldNamesHash[$field->name] = true;
    }
}
