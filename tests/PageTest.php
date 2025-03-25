<?php

use PHPUnit\Framework\TestCase;
use Xanderevg\AdminStructLibrary\AbstractPage;
use Xanderevg\AdminStructLibrary\Button;
use Xanderevg\AdminStructLibrary\CrudRights;
use Xanderevg\AdminStructLibrary\Enums\ButtonColor;
use Xanderevg\AdminStructLibrary\Enums\ButtonMethod;
use Xanderevg\AdminStructLibrary\Enums\ButtonType;
use Xanderevg\AdminStructLibrary\Fields\BooleanField;
use Xanderevg\AdminStructLibrary\Fields\StringField;
use Xanderevg\AdminStructLibrary\GridFields;

class PageTest extends TestCase
{
    public function testPage()
    {
        $page = new class() extends AbstractPage {

            protected static function calcCrud(string $userRole): CrudRights
            {
                return new CrudRights($userRole === 'admin', $userRole === 'admin', $userRole === 'admin', $userRole === 'admin');
            }

            protected static function generateStruct(string $userRole): GridFields
            {
                return new GridFields(
                    new BooleanField('field1', 'field1'),
                    new StringField('field2', 'field2')
                );
            }

            protected static function generateButtons(string $userRole): array
            {
                return [new Button('go to home', 'btn1', 'gohome', '/', '/', ButtonMethod::GET, ButtonType::RELOAD, ButtonColor::ACCENT)];
            }
        };

        $page_info = $page::page('admin');
        self::assertEquals('Новая страница', $page_info['pageName']);
        self::assertEquals(true, $page_info['rights']->create);
        self::assertCount(1, $page_info['buttons']);
        self::assertCount(2, $page_info['struct']);
        self::assertEquals('field1', $page_info['struct']['field1']->name);
    }
}