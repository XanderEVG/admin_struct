<?php

namespace Xanderevg\AdminStructLibrary;

interface PageInterface
{
    public static function page(string $userRole): array;

    public static function getClassName(): string;
}
