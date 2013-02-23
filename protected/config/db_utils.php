<?php
@include "db_connection.php";

if (!isset($dbCnx))
{
	echo(<<<EOT

You need to configure this program.  Set up '$dirname/db_connection.php'.
You can see '$dirname/db_connection.php.example' for guidance.


EOT
);
	exit;
}
