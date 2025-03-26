<?php

namespace Xanderevg\AdminStructLibrary;

interface MultiRolePageInterface
{
    public static function page(array $userRoles): array;

    public static function getClassName(): string;
}
