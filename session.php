<?php 
session_start();
class dark_mode {
    private $post_data;
    public function __construct() {
        $this->post_data = $_POST;
        if($this->post_data['mode'] == 'dark_mode'){
            $_SESSION['dark_mode'] = 'on';
            echo 'on';
        }
        if($this->post_data['mode'] == 'normal_mode'){
            $_SESSION['dark_mode'] = 'off';
            echo 'off';
        }
    }
}
new dark_mode;