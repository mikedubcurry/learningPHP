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

  public function selectAll(string $table, string $intoTable)
  {
    $statement = $this->pdo->prepare("select * from {$table}");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS, $intoTable);
  }
}
