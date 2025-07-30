<?php
header('Content-Type: application/json');

$songs = [
    ["title" => "歌うたいのバラッド", "url" => "/audio/song1.mp3"],
    ["title" => "桜絵", "url" => "/audio/song2.mp3"],
    ["title" => "M", "url" => "/audio/song3.mp3"],
    ["title" => "最後の雨", "url" => "/audio/song4.mp3"],
    ["title" => "DISCOVER", "url" => "/audio/song5.mp3"],
    ["title" => "雫", "url" => "/audio/song6.mp3"],
    ["title" => "純恋歌", "url" => "/audio/song7.mp3"]
];

echo json_encode($songs);
