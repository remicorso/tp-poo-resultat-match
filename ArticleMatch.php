<?php

namespace MonApp\Blog;

use MonApp\Blog\Article;

final class ArticleMatch extends Article
{
    private $scoreTeamA;
    private $scoreTeamB;
    private $dateMatch;
    private $teamA;
    private $imageTeamA = 'img/psg.png';
    private $teamB;
    private $imageTeamB = 'img/madrid.png';
    private static $instance;


    private function __construct(string $author, string $title = null, int $scoreA, int $scoreB, string $teamA, string $teamB)
    {
        $this->scoreTeamA = $scoreA;
        $this->scoreTeamB = $scoreB;
        parent::__construct($title, $author);
        $this->teamA = $teamA;
        $this->teamB = $teamB;
    }

    // Score

    public function getScore(): string
    {
        return $this->scoreTeamA . ' - ' . $this->scoreTeamB;
    }

    public function setScore(string $score)
    {
        $this->score = $score;
    }

    // Date Match

    public function getDateMatch(): string
    {
        return $this->dateMatch;
    }
    public function setDateMatch(string $dateMatch)
    {
        $this->dateMatch = $dateMatch;
    }

    // Teams
    //// GET 
    /////// Team A
    public function getTeamA(): string
    {
        return $this->teamA;
    }
    public function getImageTeamA(): string
    {
        return $this->imageTeamA;
    }

    /////// Team B
    public function getTeamB(): string
    {
        return $this->teamB;
    }
    public function getImageTeamB(): string
    {
        return $this->imageTeamB;
    }


    //// GET 

    public function setTeamA(string $teamA)
    {
        $this->teamA = $teamA;
    }
    public function setTeamB(string $teamB)
    {
        $this->teamB = $teamB;
    }

    /** 
     * Retourne l'instance unique.
     *
     * @return Singleton
     */
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new ArticleMatch('Rémi Corso', 'Mon titre', 3, 0, 'Paris Saint-Germain', 'Real Madrid');
        }

        return self::$instance;
    }
}
