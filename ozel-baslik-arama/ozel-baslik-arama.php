<?php
/**
 * Plugin Name:       Özel Başlıkta Arama
 * Plugin URI:        https://wordpres.tr/ozel-baslik-arama
 * Description:       WordPress arama fonksiyonunu sadece gönderi başlıklarında arama yapacak şekilde kısıtlar. Bu eklentiye dil desteği otomatik olarak eklenmiştir.
 * Version:           1.0.0
 * Author:            Sercan USLU
 * Author URI:        https://srcnx.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       ozel-baslik-arama
 * Domain Path:       /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function oba_load_textdomain() {
    load_plugin_textdomain( 'ozel-baslik-arama', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'oba_load_textdomain' );

function oba_search_only_in_titles( $search, $wp_query ) {
    global $wpdb;

    if ( ! is_admin() && $wp_query->is_main_query() && $wp_query->is_search() ) {
        if ( empty( $search ) ) {
            return $search;
        }

        $search_terms = $wp_query->query_vars['search_terms'];
        $n = ! empty( $wp_query->query_vars['exact'] ) ? '' : '%';

        $search = '';
        $searchand = '';

        foreach ( (array) $search_terms as $term ) {
            $term = esc_sql( $wpdb->esc_like( $term ) );
            $search .= "{$searchand}($wpdb->posts.post_title LIKE '{$n}{$term}{$n}')";
            $searchand = ' AND ';
        }

        if ( ! empty( $search ) ) {
            $search = " AND ({$search}) ";
        } else {
            $search = " AND (1=0) ";
        }
    }

    return $search;
}
add_filter( 'posts_search', 'oba_search_only_in_titles', 500, 2 );
?>
