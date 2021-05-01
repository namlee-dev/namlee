<?php

namespace NamLee\Models;

use NamLee\Utils\Database;
use PDO;

class Article extends CoreModel
{
    private $title;
    private $date;
    private $category_id;
    private $excerpt;
    private $content;

    /**
     * Retrieve all the articles, newest first
     *
     * @return Article[]
     */
    public static function findAll()
    {
        // Instantiating PDO
        $pdo = Database::getPDO();

        // Data recovery request
        $query = "SELECT article.*, category.name AS category_name
                    FROM `article`
                    INNER JOIN `category`ON article.category_id = category.id
                    ORDER BY `id` DESC
                ;";

        // Run the query
        $pdoStatement = $pdo->prepare($query);
        $pdoStatement->execute();
        $articlesList = $pdoStatement->fetchAll(PDO::FETCH_CLASS, Article::class);

        // Return the articles in an array
        return $articlesList;
    }

    /**
    * Retrieve 1 article by the id
    *
    * @param integer $id
    * @return Article
    */
    public static function find(int $article_id)
    {
        // PDO instanciation
        $pdo = Database::getPDO();

        // Request to retrieve all the datas
        $query = "SELECT article.*, category.name AS category_name
                    FROM `article`
                    INNER JOIN `category`ON article.category_id = category.id
                    WHERE article.id = :id
                ;";

        // Run the request
        $pdoStatement = $pdo->prepare($query);
        $pdoStatement->bindValue(':id', $article_id, PDO::PARAM_INT);
        $pdoStatement->execute();
        $article = $pdoStatement->fetchObject(Article::class);

        // Return the article
        return $article;
    }

    /**
     * Get the category name of the article
     */
    public function getCategory()
    {
        return $this->category_name;
    }

    /**
     * Retrieve all the articles, oldest first
     *
     * @return Article[]
     */
    public static function findForSitemap()
    {
        // Instantiating PDO
        $pdo = Database::getPDO();

        // Data recovery request
        $query = "SELECT article.*, category.name AS category_name
                    FROM `article`
                    INNER JOIN `category`ON article.category_id = category.id
                    ORDER BY 'id'
                ;";

        // Run the query
        $pdoStatement = $pdo->prepare($query);
        $pdoStatement->execute();
        $articlesList = $pdoStatement->fetchAll(PDO::FETCH_CLASS, Article::class);

        // Return the articles in an array
        return $articlesList;
    }

    // STEP Getter & Setter 
    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of Excerpt
     */
    public function getExcerpt()
    {
        return $this->excerpt;
    }

    /**
     * Set the value of Excerpt
     *
     * @return  self
     */
    public function setExcerpt($excerpt)
    {
        $this->excerpt = $excerpt;

        return $this;
    }

    /**
     * Get the value of content
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of category_id
     */
    public function getCategory_id()
    {
        return $this->category_id;
    }

    /**
     * Set the value of category_id
     *
     * @return  self
     */
    public function setCategory_id($category_id)
    {
        $this->category_id = $category_id;

        return $this;
    }
}
