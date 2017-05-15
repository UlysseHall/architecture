<?php
use App\Model\Queries\Builder;
use App\Core\Setup;

require_once "vendor/autoload.php";

$build = new Builder('articles', Setup::getConnexion());

