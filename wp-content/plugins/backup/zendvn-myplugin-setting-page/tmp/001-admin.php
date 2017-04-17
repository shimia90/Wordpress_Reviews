<?php
require_once ZENDVN_MP_PLUGIN_DIR . 'includes/support.php';

class ZendvnMpAdmin {

    public  $_menuSlug          =   'zendvn-mp-my-setting';

    private $_setting_options;

    public function __construct() {

        $this->_setting_options     =   get_option('zendvn_mp_name', array());

        add_action('admin_menu', array($this, settingMenu));

        add_action('admin_init', array($this, 'registerSettings'));

    }

    public function settingMenu() {

        add_menu_page('My Settings', 'My Settings', 'manage_options', $this->_menuSlug, array($this, 'settingPage'), 'dashicons-admin-generic');

    }

    public function settingPage() {

        require_once ZENDVN_MP_PLUGIN_VIEW_DIR . '/setting_page.php';

    }

    public function registerSettings() {

        register_setting('zendvn_mp_options', 'zendvn_mp_name', array($this, 'validate_settings'));

        $mainSection    =   'zendvn_mp_main_section';
        add_settings_section($mainSection, 'Main Settings', array($this, 'mainSectionView'), $this->_menuSlug);

        //Settings Fields Of Main Section
        add_settings_field('zendvn_mp_new_title', 'Site Title', array($this, 'newTitleInput'), $this->_menuSlug, $mainSection);

        $extendSection  =   'zendvn_mp_extend_section';
        add_settings_section($extendSection, 'Extend Settings', array($this, 'mainSectionView'), $this->_menuSlug);

        // Settings Fields Of Extend Section
        add_settings_field('zendvn_mp_slogan', 'Slogan', array($this, 'sloganInput'), $this->_menuSlug, $extendSection);

        // Settings Fields Of Default Section
        // add_settings_field('zendvn_mp_security_code', '', array($this, 'securityCodeInput'), $this->_menuSlug, 'abc');
    }

    public function newTitleInput() {
        echo '<input type="text" name="zendvn_mp_name[zendvn_mp_new_title]" value="'.$this->_setting_options["zendvn_mp_new_title"].'" />';
    }

    public function sloganInput() {
        echo '<input type="text" name="zendvn_mp_slogan" value="'.get_option('zendvn_mp_slogan', '').'" />';
    }

    public function securityCodeInput() {
        echo '<p>Security Code</p>';
        echo '<p>This is Security Code</p>';
        echo '<input type="text" name="zendvn_mp_name[zendvn_mp_security_code]" value="'.$this->_setting_options["zendvn_mp_security_code"].'" />';
    }

    public function validate_settings($data_input) {

        /* echo '<pre style="font-weight: bold; color: red;">';
        print_r($data_input);
        echo '</pre>'; */
        update_option('zendvn_mp_slogan', $_POST['zendvn_mp_slogan']);
        return $data_input;
    }

    public function mainSectionView() {

    }

}