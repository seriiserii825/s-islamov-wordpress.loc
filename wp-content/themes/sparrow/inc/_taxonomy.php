<?php 

// хук для регистрации
add_action('init', 'create_taxonomy_skills');
function create_taxonomy_skills(){
	// список параметров: http://wp-kama.ru/function/get_taxonomy_labels
	register_taxonomy('skills', array('portfolio'), array(
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => array(
			'name'              => 'Skills',
			'singular_name'     => 'Skills',
			'search_items'      => 'Search Skills',
			'all_items'         => 'All Skills',
			'view_item '        => 'View Skills',
			'parent_item'       => 'Parent Skills',
			'parent_item_colon' => 'Parent Skills:',
			'edit_item'         => 'Edit Skills',
			'update_item'       => 'Update Skills',
			'add_new_item'      => 'Add New Skills',
			'new_item_name'     => 'New Skills Name',
			'menu_name'         => 'Skills',
		),
		'description'           => '', // описание таксономии
		'public'                => true,
		'publicly_queryable'    => null, // равен аргументу public
		'show_in_nav_menus'     => true, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_in_menu'          => true, // равен аргументу show_ui
		'show_tagcloud'         => true, // равен аргументу show_ui
		'show_in_rest'          => null, // добавить в REST API
		'rest_base'             => null, // $taxonomy
		'hierarchical'          => false,
		'update_count_callback' => '',
		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => null, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
		'show_admin_column'     => false, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
		'_builtin'              => false,
		'show_in_quick_edit'    => null, // по умолчанию значение show_ui
	) );
}