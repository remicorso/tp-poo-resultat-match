<?php

namespace MonApp\Blog;

use MonApp\Blog\ArticleMatch;

class Singleton extends Article
{
    private static $instance;

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

    /**
     * Constructeur en privé pour éviter toute autre instanciation.
     */
    private function construct()
    { }

    /**
     * Méthode clone en privé pour éviter tout clonage.
     *
     * @return void
     */
    private function __clone()
    { }
}
