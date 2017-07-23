<?php

namespace bogdanfinn\TheGamesDbBundle\Conversion;

use bogdanfinn\TheGamesDbBundle\Model\Game;

class GameTransformer
{
    public function __construct()
    {

    }

    /**
     * @param $apiResponse
     * @return array
     */
    public function assignGamesToModels($apiResponse)
    {
        $games = [];
        /** @var \SimpleXMLElement $xmlNode */
        foreach($apiResponse as $xmlNode){

            if('Game' == $xmlNode->getName()) {
                $game = new Game();
                $game->setId((int)$xmlNode->id);
                $game->setGameTitle((string)$xmlNode->GameTitle);
                $game->setPlatform((string)$xmlNode->Platform);
                $game->setReleaseDate((string)$xmlNode->ReleaseDate);
                $game->setOverview((string)$xmlNode->Overview);
                $game->setPlatformId((int)$xmlNode->PlatformId);
                $game->setSimilar($this->assignSimilarGameNodes($xmlNode->Similar));
                $game->setImages($this->assignImageNodes($xmlNode));
                $games[] = $game;
            }
        }

        if(1 === count($games)){
            return $games[0];
        }

        return $games;
    }

    /**
     * @param \SimpleXMLElement $xmlNode
     * @return array
     */
    private function assignImageNodes($xmlNode)
    {
        $gameImages = [];
        /** @var \SimpleXMLElement $imageNode */
        foreach($xmlNode->Images->fanart as $imageNode){
            /*if('fanart' === $imageNode->getName()) {
                $gameImage['name'] = $imageNode->getName();
                if ($imageNode->original) {
                    $gameImage['original'] = (string)$imageNode->original;
                }
                if ($imageNode->thumb) {
                    $gameImage['thumb'] = (string)$imageNode->thumb;
                }
                $gameImages[] = $gameImage;
            }*/
        }

        return $gameImages;
    }

    private function assignSimilarGameNodes($Similar)
    {
        return [];
    }

}
