=== Bg Church Memos ===

Contributors: VBog

Donate link: http://bogaiskov.ru/about-me/donate/

Tags: orthodoxy, christianity, православие, христианство, ορθοδοξία, χριστιανισμός

Requires at least: 3.0.1

Tested up to: 4.7.0

Stable tag: trunk

License: GPLv2

License URI: http://www.gnu.org/licenses/gpl-2.0.html


Orhodox church memos on your site.


== Description ==

Plugin allows you create, keep and print church memos for the health and for the repose.

Details in Russian only:

Плагин позволяет создавать, хранить и распечатывать записки в православный храм «О Здравии» и «О Упокоении». 

Чтобы вставить в текст статьи кнопку для вызова календаря используется шорт код  `[memos_button val='Записки в храм']`

Для настройки внешнего вида кнопки задайте свойства класса `memos_button` в  файле стилей вашей темы.

== Installation ==

1. Upload 'bg-church-memos' directory to the '/wp-content/plugins/' directory.

2. Activate the plugin through the 'Plugins' menu in WordPress.

== Frequently Asked Questions ==

= На всех ли темах WP работает плагин? =

Для нормальной работы плагина необходимо, чтобы в соответствии с WordPress Codex в файле *footer.php* Вашей темы WordPress непосредственно перед тегом `</body>` вызывалась функция `wp_footer();`


= Шорт-код не работает... :-( =

В старых темах могут не обрабатываться шорт-коды во виджетах. В этом случае нужно установить какой-нибудь плагин, исправляющий этот недостаток или просто внести изменения в код темы. Для этого в файл *functions.php* необходимо добавить всего одну строку:

`add_filter ('widget_text', 'do_shortcode');`

… и всё заработает! 🙂

== Screenshots ==

1. Записки в храм

== Changelog ==

= 1.1 =

* Исправлены некоторые неточности

= 1.0 =

* Начальная версия. / Start version

== Upgrade Notice ==

== License ==

GNU General Public License v2

