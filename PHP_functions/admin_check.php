<?php

add_action('template_redirect','my_non_logged_redirect');
function my_non_logged_redirect()
{
     if ((in_category(1) && !is_user_logged_in() ))
    {
        wp_redirect( "............." );
        die();
    }
}

?>