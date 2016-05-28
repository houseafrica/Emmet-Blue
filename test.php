<?php
require __DIR__."/vendor/autoload.php";

use \EmmetBlue\Database\Crud\Abstraction\InsertQueryBuilder;

$qb = new InsertQueryBuilder();

$sqlQuery = $qb
			->into("students", ["firstname", "lastname"])
			->values([
				[InsertQueryBuilder::wrapString("sam", "'")],
				[InsertQueryBuilder::wrapString("chukz", "'")],
				[InsertQueryBuilder::wrapString("lucky", "'")]
			]);
echo $sqlQuery;