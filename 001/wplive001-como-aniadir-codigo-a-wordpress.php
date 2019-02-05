<?php
/*
 * #develotips001- Primer programa de WPLIVE
 * Author: Oh! Yeah Dev
 * Author URL: https://ohyeahdev.com
 * Título: Cómo añadir código a WordPress
 */ 

/*
 * Descripción
 *
 * Diferentes formas de añadir código a WordPress, de mejor a peor:
 * 
 * 1-. Crear un mu-plugin de funciones.
 * 2-. Crear un plugin de funciones.
 * 3-. Instalar el plugin "Code Snippets".
 * 4-. Modificar el fichero "functions.php" del tema (desde nuestro ordenador).
 * 5-. Modificar el fichero "functions.php" desde la administración de WordPress.
 *
 */

/* 
 * Snippet utilizado:  Quitar la barra de administración en el front
 */

add_filter( 'show_admin_bar', '__return_false' );
