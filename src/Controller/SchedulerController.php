<?php
namespace App\Controller;
use Dhtmlx\Connector\SchedulerConnector;
use Cake\ORM\TableRegistry;
use Cake\I18n\Time;


class SchedulerController extends AppController {

    public function display() {
        $this->render("scheduler");
    }

    public function data() {
        Time::setToStringFormat('YYYY-MM-dd HH:mm:ss');
        $connector = new SchedulerConnector(null, "PHPCake");
        $connector->configure(TableRegistry::get('SchedulerEvent'), "event_id", "start_date, end_date, event_name");
        $connector->render();
    }

}