<?php

declare(strict_types=1);

class Config {

    protected static $settings = [];

    public static function get(string $key): string
    {
        return self::$settings[$key] ?? '';
    }

    public static function set(string $key, array|string $value)
    {
        self::$settings[$key] = $value;
    }
}