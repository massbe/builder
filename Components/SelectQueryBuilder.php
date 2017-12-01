<?php

namespace Components;

class SelectQueryBuilder
{
    private $nameTable;
    private $colums;
    private $where;
    private $order;
    private $limit;

    public function __construct(string $nameTable)
    {
        if (!preg_match("/^[A-Za-z0-9]+$/", $nameTable)) {
            throw new \Exception('Неправильно задано название таблицы');
        }
        $this->nameTable = $nameTable;
    }

    public function colums(array $array)
    {
        $this->colums = $array;
        return $this;
    }

    public function where(string $where)
    {
        $this->where = $where;
        return $this;
    }

    public function order(string $order)
    {
        $this->order = $order;
        return $this;
    }

    public function limit(int $limit)
    {
        $this->limit = $limit;
        return $this;
    }

    public function get()
    {
        $string = "SELECT ";

        $string .= ($this->colums) ? implode(", ", $this->colums)." " : "* ";
        $string .= "FROM ".$this->nameTable;

        if ($this->where) {
            $string .= " WHERE ".$this->where;
        }

        if ($this->limit) {
            $string .= " LIMIT ".$this->limit;
        }

        if ($this->order) {
            $string .= " ORDER BY ".$this->order;
        }

        echo $string;
    }
}