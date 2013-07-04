<?php

namespace App\Model;

use Orno\Db\Driver\Pdo;
use Orno\Db\Query;

class AuthorModel
{
	protected $driver;
	protected $query;
	public $result;

	public function __construct($author_id){
		$config = [
            'database' => 'mysql:dbname=ornoblog;host=localhost;charset=utf8',
            'username' => 'root',
            'password' => 'bILLIe50-'
        ];
        $this->driver = new Pdo($config);
        $this->query = new Query($this->driver);

        $this->getAuthor($author_id);
        return $this->result;
	}

	public function getAuthor($user_id) {
		$this->query->prepare("select * from users where id = '{$user_id}'");
        $this->query->execute();

        $this->result = $this->query->fetch();
	}
}