<?php

namespace bogdanfinn\TheGamesDbBundle\Http;

use bogdanfinn\TheGamesDbBundle\Model\Game;

class GameClient
{
    /**
     * @var TheGamesDbClient
     */
    private $theGamesDbClient;

    /**
     * @param TheGamesDbClient $theGamesDbClient
     */
    public function __construct(TheGamesDbClient $theGamesDbClient)
    {
        $this->theGamesDbClient = $theGamesDbClient;
    }

    public function searchGame($searchQuery)
    {
        return $this->theGamesDbClient->xml("GetGamesList.php", Game::class, ['name'=>$searchQuery]);
    }

    public function getGameById($id)
    {
        return $this->theGamesDbClient->xml("GetGame.php", Game::class, ['id'=>$id]);
    }
}
