<?php

namespace App\Enums;

/**
 *
 */
class RehearsalType
{
    const MARSCHING = 'Musztra';
    const PARADE = 'Parada marszowa';
    const CONCERT = 'Koncertowa';
    const SECTIONS = 'Sekcyjna';

    const TYPES = [
        self::MARSCHING,
        self::PARADE,
        self::CONCERT,
        self::SECTIONS
    ];
}

?>
