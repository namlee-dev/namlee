<?php

namespace NamLee\Models;

use NamLee\Utils\Database;
use PDO;

class Project extends CoreModel
{
    private $title;
    private $excerpt;
    private $content;
    private $image;
    private $url;

    /**
    * Retrieve all the projects
    *
    * @return Project[]
    */
    public static function findAll()
    {
        // Instantiating PDO
        $pdo = Database::getPDO();

        // Data recovery request
        $query = "SELECT *
                    FROM `project`
                    ORDER BY `id` DESC
                ;";

        // Run the query
        $pdoStatement = $pdo->prepare($query);
        $pdoStatement->execute();
        $projectsList = $pdoStatement->fetchAll(PDO::FETCH_CLASS, Project::class);

        // Return the projects in an array
        return $projectsList;
    }

    /**
    * Retrieve 1 project by the id
    *
    * @param integer $id
    * @return Project
    */
    public static function find(int $project_id)
    {
        // PDO instanciation
        $pdo = Database::getPDO();

        // Request to retrieve all the datas
        $query = "SELECT *
                    FROM `project`
                    WHERE `id` = :id
                ;";

        // Run the query
        $pdoStatement = $pdo->prepare($query);
        $pdoStatement->bindValue(':id', $project_id, PDO::PARAM_INT);
        $pdoStatement->execute();
        $project = $pdoStatement->fetchObject(Project::class);

        return $project;
    }

    /**
    * Retrieve all the projects, oldest first
    *
    * @return Project[]
    */
    public static function findForSitemap()
    {
        // Instantiating PDO
        $pdo = Database::getPDO();

        // Data recovery request
        $query = "SELECT *
                    FROM `project`
                    ORDER BY `id`
                ;";

        // Run the query
        $pdoStatement = $pdo->prepare($query);
        $pdoStatement->execute();
        $projectsList = $pdoStatement->fetchAll(PDO::FETCH_CLASS, Project::class);

        // Return the projects in an array
        return $projectsList;
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
     * Get the value of image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of url
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set the value of url
     *
     * @return  self
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }
}
