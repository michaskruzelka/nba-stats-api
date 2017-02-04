<?php

namespace Michaskruzelka\NBA\Api;

class Constants
{
    const TEAMS = [
        'ATL' => [
            'id' => 1610612737,
            'abbr' => 'ATL',
            'city' => 'Atlanta',
            'code' => 'hawks',
            'name' => 'Hawks',
            'conference' => 'Eastern',
            'division' => 'Southeast'
        ],
        'BOS' => [
            'id' => 1610612738,
            'abbr' => 'BOS',
            'city' => 'Boston',
            'code' => 'celtics',
            'name' => 'Celtics',
            'conference' => 'Eastern',
            'division' => 'Atlantic'
        ],
        'BKN' => [
            'id' => 1610612751,
            'abbr' => 'BKN',
            'city' => 'Brooklyn',
            'code' => 'nets',
            'name' => 'Nets',
            'conference' => 'Eastern',
            'division' => 'Atlantic'
        ],
        'CHA' => [
            'id' => 1610612766,
            'abbr' => 'CHA',
            'city' => 'Charlotte',
            'code' => 'hornets',
            'name' => 'Hornets',
            'conference' => 'Eastern',
            'division' => 'Southeast'
        ],
        'CHI' => [
            'id' => 1610612741,
            'abbr' => 'CHI',
            'city' => 'Chicago',
            'code' => 'bulls',
            'name' => 'Bulls',
            'conference' => 'Eastern',
            'division' => 'Central'
        ],
        'CLE' => [
            'id' => 1610612739,
            'abbr' => 'CLE',
            'city' => 'Cleveland',
            'code' => 'cavaliers',
            'name' => 'Cavaliers',
            'conference' => 'Eastern',
            'division' => 'Central'
        ],
        'DAL' => [
            'id' => 1610612742,
            'abbr' => 'DAL',
            'city' => 'Dallas',
            'code' => 'mavericks',
            'name' => 'Mavericks',
            'conference' => 'Western',
            'division' => 'Southwest'
        ],
        'DEN' => [
            'id' => 1610612743,
            'abbr' => 'DEN',
            'city' => 'Denver',
            'code' => 'nuggets',
            'name' => 'Nuggets',
            'conference' => 'Western',
            'division' => 'Northwest'
        ],
        'DET' => [
            'id' => 1610612765,
            'abbr' => 'DET',
            'city' => 'Detroit',
            'code' => 'pistons',
            'name' => 'Pistons',
            'conference' => 'Eastern',
            'division' => 'Central'
        ],
        'GSW' => [
            'id' => 1610612744,
            'abbr' => 'GSW',
            'city' => 'Golden State',
            'code' => 'warriors',
            'name' => 'Warriors',
            'conference' => 'Western',
            'division' => 'Pacific'
        ],
        'HOU' => [
            'id' => 1610612745,
            'abbr' => 'HOU',
            'city' => 'Houston',
            'code' => 'rockets',
            'name' => 'Rockets',
            'conference' => 'Western',
            'division' => 'Southwest'
        ],
        'IND' => [
            'id' => 1610612754,
            'abbr' => 'IND',
            'city' => 'Indiana',
            'code' => 'pacers',
            'name' => 'Pacers',
            'conference' => 'Eastern',
            'division' => 'Central'
        ],
        'LAC' => [
            'id' => 1610612746,
            'abbr' => 'LAC',
            'city' => 'Los Angeles',
            'code' => 'clippers',
            'name' => 'Clippers',
            'conference' => 'Western',
            'division' => 'Pacific'
        ],
        'LAL' => [
            'id' => 1610612747,
            'abbr' => 'LAL',
            'city' => 'Los Angeles',
            'code' => 'lakers',
            'name' => 'Lakers',
            'conference' => 'Western',
            'division' => 'Pacific'
        ],
        'MEM' => [
            'id' => 1610612763,
            'abbr' => 'MEM',
            'city' => 'Memphis',
            'code' => 'grizzlies',
            'name' => 'Grizzlies',
            'conference' => 'Western',
            'division' => 'Southwest'
        ],
        'MIA' => [
            'id' => 1610612748,
            'abbr' => 'MIA',
            'city' => 'Miami',
            'code' => 'heat',
            'name' => 'Heat',
            'conference' => 'Eastern',
            'division' => 'Southeast'
        ],
        'MIL' => [
            'id' => 1610612749,
            'abbr' => 'MIL',
            'city' => 'Milwaukee',
            'code' => 'bucks',
            'name' => 'Bucks',
            'conference' => 'Eastern',
            'division' => 'Central'
        ],
        'MIN' => [
            'id' => 1610612750,
            'abbr' => 'MIN',
            'city' => 'Minnesota',
            'code' => 'timberwolves',
            'name' => 'Timberwolves',
            'conference' => 'Western',
            'division' => 'Northwest'
        ],
        'NOP' => [
            'id' => 1610612740,
            'abbr' => 'NOP',
            'city' => 'New Orleans',
            'code' => 'pelicans',
            'name' => 'Pelicans',
            'conference' => 'Western',
            'division' => 'Southwest'
        ],
        'NYK' => [
            'id' => 1610612752,
            'abbr' => 'NYK',
            'city' => 'New York',
            'code' => 'knicks',
            'name' => 'Knicks',
            'conference' => 'Eastern',
            'division' => 'Atlantic'
        ],
        'OKC' => [
            'id' => 1610612760,
            'abbr' => 'OKC',
            'city' => 'Oklahoma City',
            'code' => 'thunder',
            'name' => 'Thunder',
            'conference' => 'Western',
            'division' => 'Northwest'
        ],
        'ORL' => [
            'id' => 1610612753,
            'abbr' => 'ORL',
            'city' => 'Orlando',
            'code' => 'magic',
            'name' => 'Magic',
            'conference' => 'Eastern',
            'division' => 'Southeast'
        ],
        'PHI' => [
            'id' => 1610612755,
            'abbr' => 'PHI',
            'city' => 'Philadelphia',
            'code' => 'sixers',
            'name' => 'Sixers',
            'conference' => 'Eastern',
            'division' => 'Atlantic'
        ],
        'PHX' => [
            'id' => 1610612756,
            'abbr' => 'PHX',
            'city' => 'Phoenix',
            'code' => 'suns',
            'name' => 'Suns',
            'conference' => 'Western',
            'division' => 'Pacific'
        ],
        'POR' => [
            'id' => 1610612757,
            'abbr' => 'POR',
            'city' => 'Portland',
            'code' => 'blazers',
            'name' => 'Trail Blazers',
            'conference' => 'Western',
            'division' => 'Northwest'
        ],
        'SAC' => [
            'id' => 1610612758,
            'abbr' => 'SAC',
            'city' => 'Sacramento',
            'code' => 'kings',
            'conference' => 'Western',
            'division' => 'Pacific'
        ],
        'SAS' => [
            'id' => 1610612759,
            'abbr' => 'SAS',
            'city' => 'San Antonio',
            'code' => 'spurs',
            'name' => 'Spurs',
            'conference' => 'Western',
            'division' => 'Southwest'
        ],
        'TOR' => [
            'id' => 1610612761,
            'abbr' => 'TOR',
            'city' => 'Toronto',
            'code' => 'raptors',
            'name' => 'Raptors',
            'conference' => 'Eastern',
            'division' => 'Atlantic'
        ],
        'UTA' => [
            'id' => 1610612762,
            'abbr' => 'UTA',
            'city' => 'Utah',
            'code' => 'jazz',
            'name' => 'Jazz',
            'conference' => 'Western',
            'division' => 'Northwest'
        ],
        'WAS' => [
            'id' => 1610612764,
            'abbr' => 'WAS',
            'city' => 'Washington',
            'code' => 'wizards',
            'name' => 'Wizards',
            'conference' => 'Eastern',
            'division' => 'Southeast',
        ]
    ];

    const LEAGUES = [
        'NBA' => '00',
        'ABA' => '01'
    ];
}
