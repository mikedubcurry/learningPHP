<?php

class QueryBuilder
{
  /**
   * Class constructor.
   */
  /**
   * Class constructor.
   */
  public function __construct(protected PDO $pdo)
  {
  }

  public function selectAll(string $table)
  {
    $statement = $this->pdo->prepare("select * from {$table}");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS);
  }

  public function insert($table, $parameters)
  {
    $sql = sprintf(
      'insert into %s (%s) values (%s)',
      $table,
      implode(',', array_keys($parameters)),
      ':' . implode(', :', array_keys($parameters))
    );

    try {
      $statement = $this->pdo->prepare($sql);

      $statement->execute($parameters);
    } catch (PDOException $e) {
      die("oops, something went wrong...");
    }
  }
}
