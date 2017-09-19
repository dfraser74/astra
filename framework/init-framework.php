<?php

do_action( 'astra_before_setup' );

function astra_setup() {
	
	$framework_path = ASTRA_THEME_DIR . 'framework/';
	
	$structure_path = $framework_path . 'structure/';
	require_once $structure_path . 'layout.php';
	require_once $structure_path . 'loops.php';
	require_once $structure_path . 'sidebar.php';
}

add_action( 'astra_init', 'astra_setup' );

do_action( 'astra_init' );

do_action( 'astra_after_setup' );
