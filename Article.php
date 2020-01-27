<?php

namespace MonApp\Blog;

abstract class Article
{
    private $title;
    private $content;
    private $author;
    private const CREATE_IMP = '1440';
    private static $maxLength = 1000;

    public function __construct(string $title = null, string $author)
    {

        $this->author = $author;
        if ($title != null) {
            $this->title = $title;
        }
    }



    // Get Title
    public function getTitle(): ?string
    {
        return $this->title;
    }
    // Set Title
    public function setTitle(string $title)
    {
        if (strlen($title) <= 5) {
            throw new \Exception('Votre titre ne contient pas 5 charactères !');
        }

        try {
            $this->title = $title;
        } catch (\Exception $e) {
            echo 'Exception : ' .  $e->getMessage() . '\n';
        }
    }

    // Get Content
    public function getContent(): string
    {
        return $this->content;
    }
    // Set Content
    public function setContent(string $content)
    {
        $this->content = $content;
    }

    // Get Date
    public function getDate(): string
    {
        return Article::CREATE_IMP;
    }

    // Get MaxLength
    public function getMaxLength(): int
    {
        return self::$maxLength;
    }

    // Get Author
    public function getAuthor(): string
    {
        return $this->author;
    }
    // Set Author
    public function setAuthor(string $author)
    {
        $this->author = $author;
    }
}
