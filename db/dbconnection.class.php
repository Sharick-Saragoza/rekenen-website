<?php

class dbconnection extends PDO
{
    private $host = "portfoliosharick.nl.mysql";
    private $dbname = "portfoliosharick_nlrekenen";
    private $user = "portfoliosharick_nlrekenen";
    private $pass = "503PELICT";
    public function __construct()
    {
        parent::__construct("mysql:host=".$this->host.";dbname=".$this->dbname."; charset=utf8", $this->user, $this->pass);
        $this->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }
}
