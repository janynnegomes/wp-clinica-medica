<?php

add_action( 'wp_dashboard_setup', 'climed_add_calendar_dashboard_widget' );

function climed_add_calendar_dashboard_widget() {
    wp_add_dashboard_widget(
        'climed_calendar_dashboard_widget', 
        'Calendar', 
        'climed_dashboard_calendar_widget', 
        'climed_dashboard_calendar_widget_handle'
    );
}

function climed_dashboard_calendar_widget() {
    # get saved data
    
    $output = climed_schedule_calendar_container();

    echo "<div class='feature_post_class_wrap'>
        <label style='background:#ccc;'>$output</label>
    </div>
    ";
}

function climed_dashboard_calendar_widget_handle()
{
}

function climed_schedule_calendar_container(){

ob_start(); ?>

<form action="">

<div id="attendances">
    
    <h3>//TODO: Create the calendar body</h3>
    <div id="climed_calendar" class="calendar" data-role="calendar" data-locale='en | ru'></div>
    
    <script src="<?php echo PLUGIN_URL;?>js/metro-calendar.js"></script>
   
    <script >

    jQuery(document).ready(function($) {

       var cal = $(".calendar").calendar({
        multiSelect: true,
        getDates: function(data){
            var r = "", out = $("#calendar-output").html("");
            $.each(data, function(i, d){
                r += d + "<br />";
            });
            out.html(r);
        },
        click: function(d){
            var out = $("#calendar-output2").html("");
            out.html(d);
        }
    });
 
    // Add date
    cal.calendar('setDate', '2013-7-21');
    cal.calendar('setDate', '2013-07-2');
 
    // Remove date
    cal.calendar('unsetDate', '2013-07-2');
});
    </script>
</div>

</form>
<?php 

return ob_get_clean(); } ?>