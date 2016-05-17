<?php
namespace App\Services;

use Unirest\Request;

class Mashape
{
    public function getAllCards(){
        $cards = Request::get(
            "https://omgvamp-hearthstone-v1.p.mashape.com/cards",
            [
                "X-Mashape-Key" => env('MASHAPE_API_KEY')
            ]
        );

        return $cards;
    }
}