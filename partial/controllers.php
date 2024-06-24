<?php 
$articles =  [
    [
        'title' => 'Article 1',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
        'img' => "https://static.vecteezy.com/system/resources/thumbnails/009/926/551/small_2x/3d-blog-writer-working-on-article-character-illustration-png.png",
        'isPublished' => false,
        'author' =>"David Douillet"
    ],
    [
        'title' => 'Article 2',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
        'img' => "../assets/img/pika.png",
        'isPublished' => true,
        'author' =>"David Trézeguet"


    ],
    [
        'title' => 'Article 3',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
        'img' => "../assets/img/pika.png",
        'isPublished' => true,
        'author' => "David Hasselhof"
    ]
];


function isStringTooLong($stringToCheck, $maxLength) {
    return mb_strlen($stringToCheck, 'UTF-8') > $maxLength;
}

function shortenString($isStringToShorten, $length) {
    return substr($isStringToShorten, 0 , $length);
}

?>