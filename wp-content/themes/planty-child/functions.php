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

// Fonction pour ajouter le lien "Admin" au menu
function add_admin_link_to_menu($items, $args) {

    // Vérifier si l'utilisateur est connecté
    if (is_user_logged_in()) {
        
        // Ajouter le lien "Admin" uniquement si l'utilisateur est connecté
        $admin_link = '<li class="menu-item"><a href="' . esc_url(admin_url()) . '">Admin</a></li>';
        $items .= $admin_link;
    }
    return $items;
}

// Attacher la fonction au hook wp_nav_menu_items
add_filter('wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2);

?>
