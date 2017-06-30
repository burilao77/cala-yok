<?php
namespace App\Model\Table;
use Cake\ORM\Table;

class GanttLinkTable extends Table {

    public function initialize(array $config)
    {
        $this->table('gantt_links');
        $this->primaryKey('id');
    }

}