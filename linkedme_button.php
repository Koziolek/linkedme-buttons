<?php

/*
Plugin Name: Linkedme Button
Plugin URI: http://koziolek.github.io/linkedme-buttons/
Description: Adding linkedin profile button via shortcode
Version: 1.0
Author: koziolek
Author URI: http://koziolekweb.pl
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/

class LinkedmeButton
{
    /**
     * LinkedmeButton constructor.
     */
    public function __construct()
    {
        define('linkedme_button_plugin_url', plugins_url('/', __FILE__));
        add_shortcode('linkedme', array($this, 'linkedme_display'));
    }

    public function linkedme_display($atts, $content = null)
    {
        $atts = shortcode_atts(
            array(
                'id' => ""
            ), $atts);

        $html = '';
        $profile_id = $atts['id'];
        $html .= "<a class='linkedme' href='https://www.linkedin.com/in/$profile_id/'>";
        $html .= "<img src='" . linkedme_button_plugin_url . "/img/linkedin_button.png' alt='Linked me Button'/>";
        $html .= "</a>";
        return $html;
    }
}

new LinkedmeButton();

?>