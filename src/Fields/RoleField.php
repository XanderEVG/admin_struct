<?php

namespace App\Classes\DataStructs\Fields;

use App\Classes\DataStructs\FieldType;
use App\Classes\DataStructs\GridField;
use App\Classes\Enums\UserRoles;

class RoleField extends GridField
{
    public function __construct(
        bool $with_admin_role = false,
        ?string $alias = null,
    ) {
        parent::__construct('role', 'Роль пользователя', FieldType::ROLES, alias: $alias);
        $options = $with_admin_role ? UserRoles::rolesWithDesc() : UserRoles::rolesWithDescWithoutAdmin();
        $this->setOptions($options);
        $this->setOptionLabel('name');
    }
}
