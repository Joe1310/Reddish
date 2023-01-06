@extends('layouts.app')
<head>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<!-- Script to send a Get request to the Dota api to pull hero data-->
<script>
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'https://api.opendota.com/api/heroStats');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        if (xhr.status === 200) {
            var heroData = JSON.parse(xhr.responseText);
            heroData.sort(function(a, b) {
                return a.localized_name.localeCompare(b.localized_name);
            });
            heroData.forEach(function(hero) {
                var winRate = (hero.pro_win / hero.pro_pick) * 100;
                var heroImg = 'https://cdn.cloudflare.steamstatic.com' + hero.img;
                $('#hero-data').append(`
                    <tr>
                        <td>
                            <div class="hero-image">
                                <img src="${heroImg}" alt="${hero.localized_name}" style="display: inline-block; width: 73.3px; height: 41.3px;">
                            </div>
                        </td>
                        <td style="vertical-align: middle;">
                            <div class="hero-container">
                                <div class="hero-content">
                                    <b>${hero.localized_name}</b>
                                </div>
                            </div>
                        </td>
                        <td><div class="hero-content">${hero.pro_pick}</div></td>
                        <td><div class="hero-content">${winRate.toFixed(2)}%</div></td>
                        <td><div class="hero-content">${hero.pro_ban}</div></td>
                    </tr>
                `);
            });
        }
    };
    xhr.send(`api_key=`); // dota api doesnt require an api key, so just send empty.
</script>

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
    </tbody>
</table>


