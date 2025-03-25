<?php

namespace Xanderevg\AdminStructLibrary;

class AbstractPage implements PageInterface
{
    protected static string $menuGroup = '';
    protected static string $pageName = 'Новая страница';
    protected static string $frontUrl = '/new_page';
    protected static string $apiUrl = '/api/new_page';
    protected static string $pageType = 'grid';
    protected static string $selectionMode = 'multiple';

    public static function getClassName(): string
    {
        $fullClassName = static::class;
        $className = substr($fullClassName, strrpos($fullClassName, '\\') + 1, strlen($fullClassName) - 1);

        return lcfirst($className);
    }

    protected static function calcCrud(string $userRole): CrudRights
    {
        throw new \BadMethodCallException('Метод getCrud должен быть переопределен в потомке');
    }

    protected static function generateStruct(string $userRole): GridFields
    {
        throw new \BadMethodCallException('Метод getStruct должен быть переопределен в потомке');
    }

    /**
     * @return Button[]
     */
    protected static function generateButtons(string $userRole): array
    {
        return [];
    }

    public static function page(string $userRole): array
    {
        $crud = static::calcCrud($userRole);
        $struct = static::generateStruct($userRole);
        $buttons = static::generateButtons($userRole);

        return [
            'menuGroup' => static::$menuGroup,
            'pageName' => static::$pageName,
            'frontUrl' => static::$frontUrl,
            'apiUrl' => static::$apiUrl,
            'pageType' => static::$pageType,
            'selectionMode' => static::$selectionMode,
            'rights' => $crud,
            'buttons' => $buttons,
            'struct' => $struct->toArray(),
        ];
    }
}
