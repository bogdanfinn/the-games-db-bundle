<?php

namespace bogdanfinn\TheGamesDbBundle\Model;

class Game
{
    private $id;
    private $GameTitle;
    private $ReleaseDate;
    private $Platform;

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
     * @return mixed
     */
    public function getGameTitle()
    {
        return $this->GameTitle;
    }

    /**
     * @param mixed $GameTitle
     * @return Game
     */
    public function setGameTitle($GameTitle)
    {
        $this->GameTitle = $GameTitle;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReleaseDate()
    {
        return $this->ReleaseDate;
    }

    /**
     * @param mixed $ReleaseDate
     * @return Game
     */
    public function setReleaseDate($ReleaseDate)
    {
        $this->ReleaseDate = $ReleaseDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlatform()
    {
        return $this->Platform;
    }

    /**
     * @param mixed $Platform
     * @return Game
     */
    public function setPlatform($Platform)
    {
        $this->Platform = $Platform;
        return $this;
    }
}