<?php

namespace App\Enums;

enum SpiderTypeEnum: string
{
    case SPIDER = 'spider';
    case API = 'api';

    public static function getNames()
    {
        return array_column(self::cases(), 'name');
    }

    public static function getValues()
    {
        return array_column(self::cases(), 'value');
    }

    public static function array(): array
    {
        return array_combine(self::getValues(), self::getNames());
    }
}
