<?php

use PHPUnit\Framework\TestCase;
use Xanderevg\AdminStructLibrary\Exceptions\GridFieldsHasDuplicationsException;
use Xanderevg\AdminStructLibrary\Fields\BooleanField;
use Xanderevg\AdminStructLibrary\Fields\StringField;
use Xanderevg\AdminStructLibrary\GridFields;

class GridFieldsTest extends TestCase
{
    public function testGridFieldsCount()
    {
        $gridFields = (new GridFields(
            new BooleanField('field1', 'field1'),
            new StringField('field2', 'field2')
        ))->toArray();
        self::assertCount(2, $gridFields);
    }

    public function testGridFieldsDuplicate()
    {
        $this->expectException(GridFieldsHasDuplicationsException::class);

        $gridFields = (new GridFields(
            new BooleanField('field1', 'field1'),
            new StringField('field1', 'field2')
        ))->toArray();
    }
}