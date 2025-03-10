<?php

function init_edit_css()
{
    add_editor_style("assets/css/styles.css");
}

add_action("after_setup_theme", "init_edit_css");

function init_view_css()
{
    wp_enqueue_style("week7-style", get_stylesheet_directory_uri() . "/assets/css/styles.css");
}

add_action("wp_enqueue_scripts", "init_view_css");

function init_week7_custom_blocks()
{
    register_block_type(__DIR__ . "/build/products-list");
}

add_action("init", "init_week7_custom_blocks");