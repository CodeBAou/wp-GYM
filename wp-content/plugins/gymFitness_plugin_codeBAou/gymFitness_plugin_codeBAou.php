<?php 

/*
Plugin Name: gynFitnness_codeBAou
Plugin URI: 
Description: Plugin de prueba 
Version:1.0.0
Author:CodeBAou
Author URI:
License: https://www.gnu.org/licenses/gpl-3.0.html
*/

//Si alguien intenta abrir este codigo con el navegador no muestra nada (OCULTAR CODIGO)
if(!defined('ABSPATH')) die();

// Registrar Custom Post Type
function gymfitness_clases_post_type() {

	$labels = array(

		'name'                  => _x( 'Clase', 'Post Type General Name', 'gymfitness' ),
		'singular_name'         => _x( 'Clase', 'Post Type Singular Name', 'gymfitness' ),
		'menu_name'             => __( 'Clases', 'gymfitness' ),
		'name_admin_bar'        => __( 'Clase', 'gymfitness' ),
		'archives'              => __( 'Archivo', 'gymfitness' ),
		'attributes'            => __( 'Atributos', 'gymfitness' ),
		'parent_item_colon'     => __( 'Clase Padre', 'gymfitness' ),
		'all_items'             => __( 'Todas Las Clases', 'gymfitness' ),
		'add_new_item'          => __( 'Agregar Clase', 'gymfitness' ),
		'add_new'               => __( 'Agregar Clase', 'gymfitness' ),
		'new_item'              => __( 'Nueva Clase', 'gymfitness' ),
		'edit_item'             => __( 'Editar Clase', 'gymfitness' ),
		'update_item'           => __( 'Actualizar Clase', 'gymfitness' ),
		'view_item'             => __( 'Ver Clase', 'gymfitness' ),
		'view_items'            => __( 'Ver Clase', 'gymfitness' ),
		'search_items'          => __( 'Buscar Clase', 'gymfitness' ),
		'not_found'             => __( 'No Encontrado', 'gymfitness' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'gymfitness' ),
		'featured_image'        => __( 'Imagen Destacada', 'gymfitness' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'gymfitness' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'gymfitness' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'gymfitness' ),
		'insert_into_item'      => __( 'Insertar en Clase', 'gymfitness' ),
		'uploaded_to_this_item' => __( 'Agregado en Clase', 'gymfitness' ),
		'items_list'            => __( 'Lista de Clase', 'gymfitness' ),
		'items_list_navigation' => __( 'Navegación de Clase', 'gymfitness' ),
        'filter_items_list'     => __( 'Filtrar Clase', 'gymfitness' ),
        
    );
    
	$args = array(

		'label'                 => __( 'Clase', 'gymfitness' ),
		'description'           => __( 'Clases para el Sitio Web', 'gymfitness' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
        'capability_type'       => 'page',
        
    );
	
	//Nombre post-type
	register_post_type( 'gymfitness_clases', $args);

}
// init - cuand se inicie wordpress
add_action( 'init', 'gymfitness_clases_post_type', 0 ); // 0 - indica la prioridad


// Agregar Instructores
function gymfitness_instructores() {
	$name='Instructorres';
	$labels = array(
		'name'                  => _x( 'Instructores', 'Post Type General Name', 'gymfitness' ),
		'singular_name'         => _x( 'Instructor', 'Post Type Singular Name', 'gymfitness' ),
		'menu_name'             => __( 'Instructores', 'gymfitness' ),
		'name_admin_bar'        => __( 'Instructor', 'gymfitness' ),
		'archives'              => __( 'Archivo', 'gymfitness' ),
		'attributes'            => __( 'Atributos', 'gymfitness' ),
		'parent_item_colon'     => __( 'Instructor Padre', 'gymfitness' ),
		'all_items'             => __( 'Todas Las Instructores', 'gymfitness' ),
		'add_new_item'          => __( 'Agregar Instructor', 'gymfitness' ),
		'add_new'               => __( 'Agregar Instructor', 'gymfitness' ),
		'new_item'              => __( 'Nueva Instructor', 'gymfitness' ),
		'edit_item'             => __( 'Editar Instructor', 'gymfitness' ),
		'update_item'           => __( 'Actualizar Instructor', 'gymfitness' ),
		'view_item'             => __( 'Ver Instructor', 'gymfitness' ),
		'view_items'            => __( 'Ver Instructores', 'gymfitness' ),
		'search_items'          => __( 'Buscar Instructor', 'gymfitness' ),
		'not_found'             => __( 'No Encontrado', 'gymfitness' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'gymfitness' ),
		'featured_image'        => __( 'Imagen Destacada', 'gymfitness' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'gymfitness' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'gymfitness' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'gymfitness' ),
		'insert_into_item'      => __( 'Insertar en Instructor', 'gymfitness' ),
		'uploaded_to_this_item' => __( 'Agregado en Instructor', 'gymfitness' ),
		'items_list'            => __( 'Lista de Instructores', 'gymfitness' ),
		'items_list_navigation' => __( 'Navegación de Instructores', 'gymfitness' ),
		'filter_items_list'     => __( 'Filtrar Instructores', 'gymfitness' ),
	);
	
	$args = array(
		'label'                 => __( 'Instructores', 'gymfitness' ),
		'description'           => __( 'Instructores para el Sitio Web', 'gymfitness' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 7,
        'menu_icon'             => 'dashicons-admin-users',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	
	register_post_type( 'instructores', $args );

}

add_action( 'init', 'gymfitness_instructores', 0 );

?>
