<?php

namespace bogdanfinn\TheGamesDbBundle\Http;

use bogdanfinn\TheGamesDbBundle\Conversion\GameTransformer;

class GameClient
{
    /**
     * @var TheGamesDbClient
     */
    private $theGamesDbClient;

    /**
     * @var
     */
    private $gameTransformer;

    /**
     * @param TheGamesDbClient $theGamesDbClient
     * @param GameTransformer $gameTransformer
     */
    public function __construct(TheGamesDbClient $theGamesDbClient, GameTransformer $gameTransformer)
    {
        $this->theGamesDbClient = $theGamesDbClient;
        $this->gameTransformer = $gameTransformer;
    }

    public function searchGame($searchQuery)
    {
        return $this->gameTransformer->assignGamesToModels($this->theGamesDbClient->xml("GetGamesList.php", ['name'=>$searchQuery]));
    }

    public function getGameById($id)
    {
        return $this->gameTransformer->assignGamesToModels($this->theGamesDbClient->xml("GetGame.php", ['id'=>$id]));
    }
}
