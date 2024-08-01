<?php
function planty_child_enqueue_styles() {
    $parent_style = 'parent-style';

    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array($parent_style),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'planty_child_enqueue_styles');




// Hook du lien admin //

// Ajout du lien "Admin" dans le menu pour les utilisateurs connectés
add_filter('wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2);

function add_admin_link_to_menu($items, $args) {
    // Vérifiez si l'utilisateur est connecté et si c'est le bon emplacement de menu
    if (is_user_logged_in() && $args->theme_location == 'menu_2') {
        // Créez le lien Admin
        $admin_link = '<li class="menu-item"><a href="' . admin_url() . '">Admin</a></li>';
        // Ajoutez le lien Admin aux éléments du menu
        $items .= $admin_link;
    }
    return $items;
}


add_filter('wp_nav_menu_items', 'debug_admin_link_to_menu', 10, 2);

function debug_admin_link_to_menu($items, $args) {
    if (is_user_logged_in()) {
        error_log('Menu Location: ' . $args->theme_location); // Enregistre l'emplacement du menu dans le fichier de log des erreurs
    }
    return $items;
}
?>