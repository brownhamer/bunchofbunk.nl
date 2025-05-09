<?php #=========================================================================

$HOME = onLocalhost() ? 'http://localhost/bunchofbunk.nl' : 'https://bunchofbunk.nl';

#-------------------------------------------------------------------------------
$bobpages = [
    'band' => "Band",
    'albums' => "Albums",
    'pleasedtomeetyou' => "Pleased To Meet You",
    'pleasedtomeetyoumaster' => "Pleased To Meet You Master",
    'difficult2nd' => "Difficult 2nd",
    'fearless' => "Fearless",
];

#-------------------------------------------------------------------------------
# External link icons created using:
# https://t3.gstatic.com/faviconV2?client=SOCIAL&type=FAVICON&fallback_opts=TYPE,SIZE,URL&url=https://muzikantenbank.net/&size=16

# Links to various sites, also useable in Markdown using [BOBLINK_<key>]
$boblinks = [
    'bunchofbunk' => [
        'url'  => $HOME.'/',
        'text' => 'Bunch of Bunk',
        'icon' => $PATH_TO_ROOT.'/images/favicon/favicon-16.png',
        'tag'  => 'We rock!',
    ],

    'alt0' => [
        'url'  => 'https://alt0.nl',
        'text' => 'Alt0.nl',
        'icon' => $PATH_TO_ROOT.'/images/alt0.png',
    ],
    'fieldtrip' => [
        'url'  => 'https://www.facebook.com/bandfieldtrip/',
        'text' => 'Fieldtrip',
        'icon' => $PATH_TO_ROOT.'/images/fieldtrip.png',
    ],
    'xyzon' => [
        'url'  => 'http://xyzon.nl',
        'text' => 'Xyzon',
        'icon' => $PATH_TO_ROOT.'/images/xyzon.png',
    ],

    'mail' => [
        'url'  => 'mailto:band@bunchofbunk.nl',
        'text' => 'Mail',
        'icon' => $PATH_TO_ROOT.'/images/mail.png',
    ],
    'muzikantenbank' => [
        'url'  => 'https://www.muzikantenbank.net',
        'text' => 'Muzikantenbank.NET',
        'icon' => $PATH_TO_ROOT.'/images/muzikantenbank.png',
    ],
    'reverbnation' => [
        'url'  => 'https://www.reverbnation.com/bunchofbunk',
        'text' => 'ReverbNation',
        'icon' => $PATH_TO_ROOT.'/images/reverbnation.png',
    ],
    'spotify' => [
        'url'  => 'https://open.spotify.com/artist/5hRck8ylzUPLXWXrcHKJ2D',
        'text' => 'Spotify',
        'icon' => $PATH_TO_ROOT.'/images/spotify.png',
    ],
    'youtube' => [
        'url'  => 'https://www.youtube.com/channel/UCyjs_qrurO6OdGXZgcJhK-g',
        'text' => 'YouTube',
        'icon' => $PATH_TO_ROOT.'/images/youtube.png',
    ],
];

#============================================================================ ?>
