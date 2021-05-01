<?php

namespace NamLee\Models;

use NamLee\Utils\Database;
use PDO;

class Category extends CoreModel
{
    private $name;

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
                    FROM `category`
                    ORDER BY `id` DESC
                ;";

        // Run the query
        $pdoStatement = $pdo->prepare($query);
        $pdoStatement->execute();
        $categoriesList = $pdoStatement->fetchAll(PDO::FETCH_CLASS, Category::class);

        // Return the categories in an array
        return $categoriesList;
    }

    public static function find(int $category_id)
    {
        // PDO instanciation
        $pdo = Database::getPDO();

        // Request to retrieve all the datas
        $query = "SELECT *
                    FROM `category`
                    WHERE `id` = :id
                ;";

        // Run the query
        $pdoStatement = $pdo->prepare($query);
        $pdoStatement->bindValue(':id', $category_id, PDO::PARAM_INT);
        $pdoStatement->execute();
        $category = $pdoStatement->fetchObject(Category::class);

        return $category;
    }

    /**
     * Retrieve all the categories by name
     *
     * @return $categoriesList
     */
    public static function findForSitmap()
    {
        // Instantiating PDO
        $pdo = Database::getPDO();

        // Data recovery request
        $query = "SELECT *
                    FROM `category`
                    ORDER BY `name`
                ;";

        // Run the query
        $pdoStatement = $pdo->prepare($query);
        $pdoStatement->execute();
        $categoriesList = $pdoStatement->fetchAll(PDO::FETCH_CLASS, Category::class);

        // Return the categories in an array
        return $categoriesList;
    }

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
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
