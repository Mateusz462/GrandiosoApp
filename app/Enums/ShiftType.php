<?php

namespace App\Enums;

/**
 *
 */
class ShiftType
{
    const REHEARSAL = 'Próba';
    const CONCERT = 'Koncert';
    const TRAVEL = 'Wyjazd';

    const TYPES = [
        self::REHEARSAL,
        self::CONCERT,
        self::TRAVEL
    ];
}

?>
