<?php

namespace App\Enums;

/**
 *
 */
class UserRole
{
    const SUPERADMIN = 'SuperAdmin';
    const ADMIN = 'Admin';
    const EMPLOYEE = 'Employee';
    const PARENT = 'Parent';
    const USER = 'User';

    const TYPES = [
        self::SUPERADMIN,
        self::ADMIN,
        self::EMPLOYEE,
        self::PARENT,
        self::USER
    ];
}

?>
