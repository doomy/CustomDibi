<?php


namespace Doomy\CustomDibi;

use Dibi\Connection as DibiConnection;

class Connection extends DibiConnection
{

    public function __sleep()
    {
        return [];
    }

    public function __wakeup()
    {
        return [];
    }
}