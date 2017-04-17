<?php
class Zendvn_Mp_Widget_Last_Post extends WP_Widget {

    public function __construct() {
        $id_base        =   'zendvn-mp-widget-last-post';
        $name           =   'Abc Last Post';
        $widget_options =   array(
            'classname'     =>      'zendvn-mp-wg-css-last-post',
            'description'   =>      'Hien thi nhung bai viet moi nhat'
        );
        $control_options    =   array('width' => '250px');
        parent::__construct($id_base, $name, $widget_options, $control_options);
    }

    public function widget($args, $instance) {

    }

    public function update($new_instance, $old_instance) {

        return $instance;
    }

    public function form($instance) {

    }

}