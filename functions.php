<?php


// �J�e�S���[����rel���폜
function remove_category_list_rel( $output ) {
    return str_replace( ' rel="category"', '', $output );
}
add_filter( 'the_category', 'remove_category_list_rel' );


// �Œ�y�[�W���X�gclass�폜
function my_list_pages( $output, $args ) {
return preg_replace('/\sclass="(.+?)"/', '', $output );
}
add_filter( 'wp_list_pages', 'my_list_pages', 10, 2 );


// �J�e�S���[���X�gclass�폜
function my_list_categories( $output, $args ) {
return preg_replace('/\sclass="(.+?)"/', '', $output );
}
add_filter( 'wp_list_categories', 'my_list_categories', 10, 2 );


// a�^�O�^�C�g���폜
function delete_list_categories_title_attribute( $output ) {
	$output = preg_replace( '/ title="[^"]*"/', '', $output );
	return $output;
}
add_filter( 'wp_list_categories', 'delete_list_categories_title_attribute' );
add_filter( 'the_category', 'delete_list_categories_title_attribute' );


?>