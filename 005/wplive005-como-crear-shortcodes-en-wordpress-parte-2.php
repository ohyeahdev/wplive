<?php
/*
 * #develotips 005- Quinto programa de WPLIVE
 * Author: Oh! Yeah Dev
 * Author URL: https://ohyeahdev.com
 * Título: Cómo crear shortcodes en WordPress - Parte 2 (Con parámetros)
 */ 
/*
 * Descripción
 * 
 * Se describe cómo crear un shortcode con parámetros para WordPress
 */
/*
 * WP Live: Develotip #5
 */

 /* Crear shotcode con parámetros */
function ohyd_short_texto_despedida_avanzado( $atts ) {
	$atributos = shortcode_atts( array (
		'color'	=>	'',
		'fondo' =>	'',
	), $atts );
	$despedida = '<p style="color: ' . $atributos['color'] . '; background-color: ' . $atributos['fondo'] . ';">';
	$despedida .= 'Esto es todo por ahora.<br />';
	$despedida .= 'Os recuerdo que podéis valorar este podcast en Itunes y en Ivoox.<br />';
	$despedida .= 'Hasta la próxima!!';
	$despedida .= '</p>';
	return $despedida;
}

add_shortcode( 'despedida2', 'ohyd_short_texto_despedida_avanzado');