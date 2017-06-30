<?php
namespace App\Controller;
use Dhtmlx\Connector\GanttConnector;
use Cake\ORM\TableRegistry;
use Cake\I18n\Time;

class GanttController extends AppController {

    public function display() {
        $this->render("gantt");
    }

    public function data() {
        Time::setToStringFormat('YYYY-MM-dd HH:mm:ss');
        $connector = new GanttConnector(null, "PHPCake");
        $connector->render_links(TableRegistry::get('GanttLink'), "id", "source,target,type");
        $connector->render_table(TableRegistry::get('GanttTask'), "id", "start_date,duration,text,progress,parent");
    }

}