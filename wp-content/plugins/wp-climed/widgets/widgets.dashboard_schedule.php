<?php

add_action( 'wp_dashboard_setup', 'prefix_add_dashboard_widget' );

function prefix_add_dashboard_widget() {
    wp_add_dashboard_widget(
        'climed_dashboard_widget', 
        'Attendances Schedule', 
        'prefix_dashboard_widget', 
        'prefix_dashboard_widget_handle'
    );
}

function prefix_dashboard_widget() {
    # get saved data
    
    $output = climed_schedule_panel();

    echo "<div class='feature_post_class_wrap'>
        <label style='background:#ccc;'>$output</label>
    </div>
    ";
}

function prefix_dashboard_widget_handle()
{
    # get saved data
    if( !$widget_options = get_option( 'climed_dashboard_widget_options' ) )
        $widget_options = array( );

    # process update
    if( 'POST' == $_SERVER['REQUEST_METHOD'] && isset( $_POST['climed_dashboard_widget_options'] ) ) {
        # minor validation
        $widget_options['feature_post'] = absint( $_POST['climed_dashboard_widget_options']['feature_post'] );
        # save update
        update_option( 'climed_dashboard_widget_options', $widget_options );
    }

    # set defaults  
    if( !isset( $widget_options['feature_post'] ) )
        $widget_options['feature_post'] = '';


    echo "<p><strong>Available Pages</strong></p>
    <div class='feature_post_class_wrap'>
        <label>Title</label>";
    wp_dropdown_pages( array(
        'post_type'        => 'page',
        'selected'         => $widget_options['feature_post'],
        'name'             => 'climed_dashboard_widget_options[feature_post]',
        'id'               => 'feature_post',
        'show_option_none' => '- Select -'
    ) );
    echo "</div>";
}

function climed_schedule_panel(){

ob_start(); ?>

<form action="">

<div id="attendances">
    <div id="attendances_type">
        <h3>Attendance Type</h3>
        <input type="radio" name="attendance_type" value="0">Medical Consultation<br>
        <input type="radio" name="attendance_type" value="1">Medical Examination 
    </div>
    
</div>

</form>
<?php 

return ob_get_clean(); } ?>