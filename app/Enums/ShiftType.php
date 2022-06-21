<?php

namespace App\Enums;

/**
 *
 */
class ShiftType
{
    const REHEARSAL = 'Próba';
    const CONCERT = 'Koncert';

    const TYPES = [
        self::REHEARSAL,
        self::CONCERT
    ];
}

?>
