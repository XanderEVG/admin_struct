<?php

use PHPUnit\Framework\TestCase;
use Xanderevg\AdminStructLibrary\Enums\FieldType;
use Xanderevg\AdminStructLibrary\GridField;
use Xanderevg\AdminStructLibrary\GridFieldAdditionalInfo;

class GridFieldTest extends TestCase
{
    public function testBooleanField()
    {
        $gridField = new GridField('field1', 'field1', FieldType::BOOLEAN);
        $fieldArray = $gridField->jsonSerialize();
        self::assertEquals(null, $fieldArray['alias']);
        self::assertEquals('field1', $fieldArray['name']);
        self::assertInstanceOf(FieldType::class, $fieldArray['type']);
        self::assertEquals(FieldType::BOOLEAN, $fieldArray['type']);
        self::assertEquals(null, $fieldArray['defaultValue']);
    }

    public function testBooleanWithAlias()
    {
        $gridField = new GridField('field1', 'field1', FieldType::BOOLEAN, 'table');
        $fieldArray = $gridField->jsonSerialize();
        self::assertEquals('table', $fieldArray['alias']);
        self::assertEquals('field1', $fieldArray['name']);
    }

    public function testBooleanWithDefauilValue()
    {
        $gridField = (new GridField('field1', 'field1', FieldType::BOOLEAN, 'table'))->setDefaultValue(true);
        $fieldArray = $gridField->jsonSerialize();
        self::assertEquals('table', $fieldArray['alias']);
        self::assertEquals(true, $fieldArray['defaultValue']);
    }

    public function testBooleanWithAdditionalInfo()
    {
        $gridField = (new GridField('field1', 'field1', FieldType::BOOLEAN, 'table'))->setAdditionalInfo([new GridFieldAdditionalInfo('field2')]);
        $fieldArray = $gridField->jsonSerialize();
        self::assertEquals('table', $fieldArray['alias']);
        self::assertInstanceOf(GridFieldAdditionalInfo::class, $fieldArray['additionalInfo'][0]);
    }
}
