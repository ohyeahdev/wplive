<?php
/*
 * #develotips 003- Tercer programa de WPLIVE
 * Author: Oh! Yeah Dev
 * Author URL: https://ohyeahdev.com
 * Título: Cómo crear shortcodes en WordPress - Parte 1
 */ 

/*
 * Descripción
 * 
 * Se describe cómo crear un shortcode de texto sencillo en WordPress
 */

/*
 * WP Live: Develotip #3
 */

/* Crear shortcode que devuelve texto */
function ohyd_short_texto_despedida(){
	$despedida = 'Esto es todo por ahora.<br />';
	$despedida .= 'Os recuerdo que podéis valorar este podcast en Itunes y en Ivoox.<br />';
	$despedida .= 'Has la próxima!!';

	return $despedida;
 }
 add_shortcode('despedida','ohyd_short_texto_despedida');