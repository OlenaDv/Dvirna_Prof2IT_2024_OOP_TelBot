<?php

namespace Config;

class Config{
    private function __construct()
    {

    }

    public static function getRout(){
        return [
            "GET" => [
                [
                    "uri" => "",
                    "controller" => "\\Controller\\HomeController",
                    "action" => "index",
                    "params" => "",
            ]
            ],
        ];
    }
}