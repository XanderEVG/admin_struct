<?php

use PHPUnit\Framework\TestCase;
use Xanderevg\AdminStructLibrary\Enums\FieldType;
use Xanderevg\AdminStructLibrary\Fields\StringField;

class StringFieldTest extends TestCase
{
    public function testStringField()
    {
        $gridField = new StringField('field1', 'field1');
        $fieldArray = $gridField->jsonSerialize();
        self::assertArrayNotHasKey('alias', $fieldArray);
        self::assertEquals('field1', $fieldArray['name']);
        self::assertInstanceOf(FieldType::class, $fieldArray['type']);
        self::assertEquals(FieldType::STRING, $fieldArray['type']);
        self::assertNotContains('defaultValue', $fieldArray);
    }

    public function testStringFieldWithAlias()
    {
        $gridField = new StringField('field1', 'field1', null, 'fooo_field');
        $fieldArray = $gridField->jsonSerialize();
        self::assertArrayHasKey('alias', $fieldArray);
        self::assertEquals('fooo_field', $fieldArray['alias']);
        self::assertEquals('field1', $fieldArray['name']);
        self::assertInstanceOf(FieldType::class, $fieldArray['type']);
        self::assertEquals(FieldType::STRING, $fieldArray['type']);
    }

    public function testStringFieldWithLenght()
    {
        $gridField = new StringField('field1', 'field1', 500);
        $fieldArray = $gridField->jsonSerialize();
        self::assertEquals('field1', $fieldArray['name']);
        self::assertInstanceOf(FieldType::class, $fieldArray['type']);
        self::assertEquals(FieldType::STRING, $fieldArray['type']);
        self::assertEquals(500, $fieldArray['maxLength']);
    }

    public function testStringFieldWithMask()
    {
        $gridField = (new StringField('field1', 'field1', 500))->setMask('1234');
        $fieldArray = $gridField->jsonSerialize();
        self::assertEquals('field1', $fieldArray['name']);
        self::assertInstanceOf(FieldType::class, $fieldArray['type']);
        self::assertEquals(FieldType::STRING, $fieldArray['type']);
        self::assertEquals(500, $fieldArray['maxLength']);
        self::assertEquals('1234', $fieldArray['mask']);
    }
}
