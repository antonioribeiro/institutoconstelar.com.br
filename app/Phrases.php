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
                'author' => 'Gary Yontef',
                'phrase' => 'A experiência é mais confiável do que a interpretação.',
            ],

            [
                'author' => 'Bert Hellinger',
                'phrase' => 'Nas profundezas o futuro e o passado são indênticos. Ali só existe espaço, não existe tempo.',
            ],

            [
                'author' => 'Bert Hellinger',
                'phrase' => 'Através da constelação tenho, repentinamente, acesso a uma realidade que não consigo perceber por meio do pensamento.',
            ],

            [
                'author' => 'Gary Yontef',
                'phrase' => 'Na gestalt terapia o paciente é visto como um colaborador, aprendendo a autocurar-se.',
            ],
        ])->shuffle();
    }
}
