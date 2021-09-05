<?php

namespace App\Core\Database;

use PDO;

class QueryBuilder
{
    /**
     * The PDO instance.
     *
     * @var PDO
     */
    protected $pdo;

    /**
     * Create a new QueryBuilder instance.
     *
     * @param PDO $pdo
     */
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * Select all records from a database table.
     *
     * @param string $table
     */
    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    /**
     * Select all records from a database table.
     *
     * @param string $table
     */
    public function selectById($table, $id)
    {

        $statement = $this->pdo->prepare("select * from {$table} WHERE id = {$id}");
        // $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    /**
     * Select all records from a database table.
     *
     * @param string $table
     */
    public function selectBySex($table, $sex)
    {

        $statement = $this->pdo->prepare("select * from {$table} WHERE sex = '{$sex}'");
        // $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    /**
     * Select all records from a database table.
     *
     * @param string $table
     */
    public function getImgByID($table, $id)
    {

        $statement = $this->pdo->prepare("SELECT * FROM `dogs` RIGHT JOIN `imagelib` ON imagelib.`dogsId` = dogs.`id` WHERE dogs.id = $id");
        // die(var_dump($statement));
        // SELECT  * FROM `dogs` RIGHT JOIN `imagelib` ON imagelib.`dogsId` = dogs.`id`

        // $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    /**
     * Insert a record into a table.
     *
     * @param  string $table
     * @param  array  $parameters
     */
    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
        } catch (\Exception $e) {
            //
        }
    }
}
