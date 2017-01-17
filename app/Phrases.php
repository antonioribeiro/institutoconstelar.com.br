<?php

namespace App;

class Phrases
{
    protected static $items = [];

    public static function random()
    {
        return static::getRawData()->pop();
    }

    public static function getRawData()
    {
        if (static::$items) {
            return static::$items;
        }

        return static::$items = collect([
            [
                'author' => 'Bert Hellinger',
                'phrase' => 'O preço para sair da depressão é a humildade.',
            ],

            [
                'author' => 'Fritz Perls',
                'phrase' => 'A verdade só pode ser tolerada se descoberta por conta própria.',
            ],
        ])->shuffle();
    }
}
