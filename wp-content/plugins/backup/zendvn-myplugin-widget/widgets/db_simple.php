<?php
class Zendvn_Mp_Db_Simple {

    public function __construct() {
        add_action('wp_dashboard_setup', array($this, 'widget'));
    }

    public function widget() {
        wp_add_dashboard_widget('zendvn_mp_widget_db_simple', 'My Information', array($this, 'ordering'));
    }

    public function ordering() {
        $args       =   array(
            'author'    =>  1
        );

        $wpQuery    =   new WP_Query();
        echo '<pre style="font-weight: bold; color: red;">';
        print_r($wpQuery);
        echo '</pre>';

        if($wpQuery->have_posts()) {
            while ($wpQuery->have_posts()) {
                $wpQuery->the_post();

            }
        }
    }

}