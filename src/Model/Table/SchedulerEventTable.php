<?php
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class SchedulerEventTable extends Table {

    public function initialize(array $config)
    {
        $this->table('scheduler_events');
        $this->primaryKey('event_id');
    }

    public function validationDefault(Validator $validator) {
        $validator->notEmpty("event_name");
        return $validator;
    }

}