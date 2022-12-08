<?php

namespace app\core\model;

use app\core\adapter\PDOxConnectionAdapter;

class BaseModel extends PDOxConnectionAdapter
{
	protected $fk;
	protected $table;

	private function table()
	{
		return $this->db()->table($this->table);
	}

	public function select(array|string $fields)
	{
		return $this->table()->select($fields);
	}

	public function where($where, $operator = null, $val = null, $type = '', $andOr = 'AND')
	{
		return $this->table()->where($where, $operator, $val, $type, $andOr);
	}

	public function pagination($perPage, $page)
	{
		return $this->table()->pagination($perPage, $page);
	}

	public function create($data)
	{
		return $this->table()->insert($data);
	}
}
