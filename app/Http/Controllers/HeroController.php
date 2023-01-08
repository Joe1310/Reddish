<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\HttpRequest;

class HeroController extends Controller
{
    public function index(HttpRequest $httpRequest)
    {
        $heros = $httpRequest->getHeros();
        uasort($heros, function($a, $b) {
            return strcmp($a->localized_name, $b->localized_name);
        });
        $heroNames = [];
        $heroImages = [];
        $heroProPicks = [];
        $heroWinRates = [];
        $heroProBans = [];
        foreach($heros as $hero){
            array_push($heroNames, $hero->localized_name);
            $temp = 'https://cdn.cloudflare.steamstatic.com'.$hero->img;
            array_push($heroImages, $temp);
            array_push($heroProPicks, $hero->pro_pick);
            array_push($heroWinRates, (round($hero->pro_win / $hero->pro_pick, 4)*100)."%");
            array_push($heroProBans, $hero->pro_ban);
        }
        return view('other.winrates', ['heroNames' => $heroNames, 'heroImages' => $heroImages, 
        'heroProPicks' => $heroProPicks, 'heroWinRates' => $heroWinRates, 'heroProBans' => $heroProBans]);
    }
}
