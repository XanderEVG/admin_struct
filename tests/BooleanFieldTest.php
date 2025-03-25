<?php

use PHPUnit\Framework\TestCase;
use Xanderevg\AdminStructLibrary\Enums\FieldType;
use Xanderevg\AdminStructLibrary\Fields\BooleanField;
use Xanderevg\AdminStructLibrary\GridFieldAdditionalInfo;

class BooleanFieldTest extends TestCase
{
    public function testBooleanField()
    {
        $gridField = new BooleanField('field1', 'field1');
        $fieldArray = $gridField->jsonSerialize();
        self::assertEquals(null, $fieldArray['alias']);
        self::assertEquals('field1', $fieldArray['name']);
        self::assertInstanceOf(FieldType::class, $fieldArray['type']);
        self::assertEquals(FieldType::BOOLEAN, $fieldArray['type']);
        self::assertEquals(null, $fieldArray['defaultValue']);
    }

    public function testBooleanWithAlias()
    {
        $gridField = new BooleanField('field1', 'field1', 'table');
        $fieldArray = $gridField->jsonSerialize();
        self::assertEquals('table', $fieldArray['alias']);
        self::assertEquals('field1', $fieldArray['name']);
    }

    public function testBooleanWithDefauilValue()
    {
        $gridField = (new BooleanField('field1', 'field1', 'table'))->setDefaultValue(true);
        $fieldArray = $gridField->jsonSerialize();
        self::assertEquals('table', $fieldArray['alias']);
        self::assertEquals(true, $fieldArray['defaultValue']);
    }

    public function testBooleanWithAdditionalInfo()
    {
        $gridField = (new BooleanField('field1', 'field1', 'table'))->setAdditionalInfo([new GridFieldAdditionalInfo('field2')]);
        $fieldArray = $gridField->jsonSerialize();
        self::assertEquals('table', $fieldArray['alias']);
        self::assertInstanceOf(GridFieldAdditionalInfo::class, $fieldArray['additionalInfo'][0]);
    }
}
