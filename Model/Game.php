<?php

namespace bogdanfinn\TheGamesDbBundle\Model;

class Game
{
    private $id;
    private $gameTitle;
    private $releaseDate;
    private $platform;
    private $platformId;
    private $overview;
    private $genres;
    private $esrbRating;
    private $players;
    private $coop;
    private $youtube;
    private $publisher;
    private $developer;
    private $rating;
    private $similar;
    private $images; //[fanart or boxart screenshot, clearlogo]

    public function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return
     */
    public function getGameTitle()
    {
        return $this->gameTitle;
    }

    /**
     * @param  $gameTitle
     * @return Game
     */
    public function setGameTitle($gameTitle)
    {
        $this->gameTitle = $gameTitle;
        return $this;
    }

    /**
     * @return
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * @param $releaseDate
     * @return Game
     */
    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;
        return $this;
    }

    /**
     * @return
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * @param $platform
     * @return Game
     */
    public function setPlatform($platform)
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlatformId()
    {
        return $this->platformId;
    }

    /**
     * @param mixed $platformId
     * @return Game
     */
    public function setPlatformId($platformId)
    {
        $this->platformId = $platformId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOverview()
    {
        return $this->overview;
    }

    /**
     * @param mixed $overview
     * @return Game
     */
    public function setOverview($overview)
    {
        $this->overview = $overview;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGenres()
    {
        return $this->genres;
    }

    /**
     * @param mixed $genres
     * @return Game
     */
    public function setGenres($genres)
    {
        $this->genres = $genres;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEsrbRating()
    {
        return $this->esrbRating;
    }

    /**
     * @param mixed $esrbRating
     * @return Game
     */
    public function setEsrbRating($esrbRating)
    {
        $this->esrbRating = $esrbRating;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlayers()
    {
        return $this->players;
    }

    /**
     * @param mixed $players
     * @return Game
     */
    public function setPlayers($players)
    {
        $this->players = $players;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCoop()
    {
        return $this->coop;
    }

    /**
     * @param mixed $coop
     * @return Game
     */
    public function setCoop($coop)
    {
        $this->coop = $coop;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getYoutube()
    {
        return $this->youtube;
    }

    /**
     * @param mixed $youtube
     * @return Game
     */
    public function setYoutube($youtube)
    {
        $this->youtube = $youtube;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * @param mixed $publisher
     * @return Game
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeveloper()
    {
        return $this->developer;
    }

    /**
     * @param mixed $developer
     * @return Game
     */
    public function setDeveloper($developer)
    {
        $this->developer = $developer;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param mixed $rating
     * @return Game
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSimilar()
    {
        return $this->similar;
    }

    /**
     * @param mixed $similar
     * @return Game
     */
    public function setSimilar($similar)
    {
        $this->similar = $similar;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param mixed $images
     * @return Game
     */
    public function setImages($images)
    {
        $this->images = $images;
        return $this;
    }
}