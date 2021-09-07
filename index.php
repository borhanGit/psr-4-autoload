<?php

use MyApp\Data\Database;
use MyApp\Game\Game;
use MyApp\Game\GameController;
use MyApp\Game\Player\Player;

require_once realpath("vendor/autoload.php");

$database = new Database();
$player = new Player();
$game = new Game();
$gameController = new GameController();
