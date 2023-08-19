<?php

$container->setParameter('database_host', getenv('MYSQL_HOST'));
$container->setParameter('database_port', getenv('MYSQL_PORT'));
$container->setParameter('database_name', getenv('MYSQL_DATABASE'));
$container->setParameter('database_user', getenv('MYSQL_PORT'));
$container->setParameter('database_password', getenv('MYSQL_PASSWORD'));
