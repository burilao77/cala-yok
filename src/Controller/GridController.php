<?php
namespace App\Controller;
use Dhtmlx\Connector\GridConnector;
use Cake\ORM\TableRegistry;
use Cake\I18n\Time;

class GridController extends AppController {

    public function display() {
        $this->render("grid");
    }

    public function data() {
        Time::setToStringFormat('YYYY-MM-dd HH:mm:ss');
        $connector = new GridConnector(null, "PHPCake");
        $connector->configure(TableRegistry::get('SchedulerEvent'), "event_id", "start_date, end_date, event_name");
        $connector->render();
    }

}