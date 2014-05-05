<?php
/* 
    Plugin Name: Bg Church Memos
    Plugin URI: http://bogaiskov.ru/plugin-church-memos/
    Description: Плагин позволяет создавать, хранить и распечатывать записки в православный храм «О Здравии» и «О Упокоении» непосредственно на Вашем сайте.
    Author: Vadim Bogaiskov
    Version: 1.0
    Author URI: http://bogaiskov.ru 
	Text Domain: bg_memos
*/

/*  Copyright 2014  Vadim Bogaiskov  (email: vadim.bogaiskov@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/*****************************************************************************************
	Блок загрузки плагина
	
******************************************************************************************/

// Запрет прямого запуска скрипта
if ( !defined('ABSPATH') ) {
	die( 'Sorry, you are not allowed to access this page directly.' ); 
}

define('BG_MEMOS_VERSION', '1.0');

function bg_memos_js_options () { ?>
	<script>
		function memos_button() {
			var x = screen.width/2 - 1020/2;
			var y = screen.height/2 - (750+60)/2;
			window.open("<?php echo plugins_url( '/' , __FILE__ );?>"+"notes.php","_blank", "scrollbars=1,width=1020,height=750,left="+x+",top="+y );
		}
	</script>
<?php
}
if ( !is_admin() ) {
	add_action( 'wp_head' , 'bg_memos_js_options' ); 
}

if ( defined('ABSPATH') && defined('WPINC') ) {
// Регистрируем шорт-код memos
	add_shortcode( 'memos_button', 'bg_memos_button' );
}
	
/*****************************************************************************************
	Функции запуска плагина
	
******************************************************************************************/
// Функция обработки шорт-кода ortcal_button
function bg_memos_button($atts) {
	extract( shortcode_atts( array(
		'val' => ' * Записки в храм '
	), $atts ) );

	$quote = "<button onClick='memos_button();'>".$val."</button>";
	return "{$quote}";
}
