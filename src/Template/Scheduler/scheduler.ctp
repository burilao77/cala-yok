<style type="text/css" media="screen">

    table tr th, table tr td {
        padding: 0px 0px;
    }

    body {
        line-height: 100%;
    }

    select {
        height: auto;
        width: auto;
        background-image: none;
    }

</style>

<script src="lib/dhtmlxScheduler/codebase/dhtmlxscheduler.js" 	type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="lib/dhtmlxScheduler/codebase/dhtmlxscheduler.css" type="text/css" media="screen" title="no title" charset="utf-8">

<div id="scheduler_here" class="dhx_cal_container" style='width:100%; height:500px;'>
    <div class="dhx_cal_navline">
        <div class="dhx_cal_prev_button">&nbsp;</div>
        <div class="dhx_cal_next_button">&nbsp;</div>
        <div class="dhx_cal_today_button"></div>
        <div class="dhx_cal_date"></div>
        <div class="dhx_cal_tab" name="day_tab" style="right:204px;"></div>
        <div class="dhx_cal_tab" name="week_tab" style="right:140px;"></div>
        <div class="dhx_cal_tab" name="month_tab" style="right:76px;"></div>
    </div>
    <div class="dhx_cal_header">
    </div>
    <div class="dhx_cal_data">
    </div>
</div>

<script type="text/javascript" charset="utf-8">
    document.body.onload = function() {
        scheduler.config.xml_date="%Y-%m-%d %H:%i";
//        scheduler.config.prevent_cache = true;

        scheduler.config.lightbox.sections=[
            {name:"description", height:130, map_to:"text", type:"textarea" , focus:true},
            {name:"location", height:43, type:"textarea", map_to:"details" },
            {name:"time", height:72, type:"time", map_to:"auto"}
        ];
        scheduler.config.first_hour = 4;
        scheduler.config.limit_time_select = true;
        scheduler.locale.labels.section_location="Location";



        scheduler.init('scheduler_here',new Date(2010,7,1),"month");
        scheduler.setLoadMode("month");
        scheduler.load("./scheduler_data");

        var dp = new dataProcessor("./scheduler_data");
        dp.init(scheduler);
    };
</script>