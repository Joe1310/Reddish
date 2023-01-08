@extends('layouts.app')
<head>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
@section('title', 'Hero Stats')
<table>
    <thead>
        <tr>
            <th>
            </th>
            <th style="text-align: left;">
                Hero Name
            </th>
            <th style="text-align: center;">
                Recent Professional<br>Matches
            </th>
            <th style="text-align: center;">
                Recent Win Rate
            </th>
            <th style="text-align: center;">
                Recent Times<br>Banned
            </th>
        </tr>
    </thead>
    <tbody id="hero-data">
        @for ($i = 0; $i < count($heroNames); $i++)
            <tr>
                <td>
                    <div class="hero-image">
                        <img src={{$heroImages[$i]}} alt="{{$heroNames[$i]}}" style="display: inline-block; width: 73.3px; height: 41.3px;">
                    </div>
                </td>
                <td style="vertical-align: middle;">
                    <div class="hero-container">
                        <div class="hero-content">
                            <b>{{$heroNames[$i]}}</b>
                        </div>
                    </div>
                </td>
                <td><div class="hero-content">{{$heroProPicks[$i]}}</div></td>
                <td><div class="hero-content">{{$heroWinRates[$i]}}</div></td>
                <td><div class="hero-content">{{$heroProBans[$i]}}</div></td>
            </tr>
        @endfor
    </tbody>
</table>



