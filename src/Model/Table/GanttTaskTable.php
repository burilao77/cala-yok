<?php
namespace App\Model\Table;
use Cake\ORM\Table;

class GanttTaskTable extends Table {

    public function initialize(array $config)
    {
        $this->table('gantt_tasks');
        $this->primaryKey('id');
    }

}