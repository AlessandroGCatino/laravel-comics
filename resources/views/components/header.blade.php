<?php

$navElements = [[
        "name" => "characters",
        "link" => "#"
    ],
    [
        "name" => "comics",
        "link" => "#"
    ],
    [
        "name" => "movies",
        "link" => "#"
    ],
    [
        "name" => "tv",
        "link" => "#"
    ],
    [
        "name" => "games",
        "link" => "#"
    ],
    [
        "name" => "collectibles",
        "link" => "#"
    ],
    [
        "name" => "videos",
        "link" => "#"
    ],
    [
        "name" => "fans",
        "link" => "#"
    ],
    [
        "name" => "news",
        "link" => "#"
    ],
    [
        "name" => "shop",
        "link" => "#"
    ]
];

?>

<div id="external">
    <div class="container py-3 d-flex justify-content-between">
        <figure>
            <img src={{ Vite::asset("resources/img/dc-logo.png")}} alt="Header Logo">
        </figure>
        <nav class="d-flex align-items-center">
            <ul class="d-flex gap-3 text-uppercase">
                @foreach ($navElements as $elements)
                <li>
                    <a href="<?= $elements['link']?>"> {{ $elements["name"] }} </a>
                </li>
                @endforeach
            </ul>
        </nav>
    </div>
</div>

<style lang="scss" scoped>
    figure{
        width: 70px;
        
    }
</style>
