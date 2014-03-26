<?php
  // Bulgarian Language File
  // (c) 2004 Alexander Palmo, apalmo <at> bigevilbrain <dot> com 
  // Edits: 26.09.2007 Peicho Dimitrov info <at> alein <dot> org
  // Ако имам правописни грешки, поправете си ги ;)
  // Превода е на 98%

  // Simple PHP Version: 0.5.1
  // Language Version:   0.5.1

  function sb_language( $page ) {
    global $language, $html_charset, $php_charset, $lang_string;

    // Language: English
    $lang_string['language'] = 'bulgarian';
    $lang_string['locale'] = array('bg_BG', 'bulgaria', 'bul');
    $lang_string['rss_locale'] = 'bg-BG'; // New 0.4.8

    // ISO Charset: ISO-8859-1
		$lang_string['html_charset'] = 'windows-1251';
		$lang_string['php_charset'] = 'windows-1251';
    setlocale( LC_TIME, $lang_string['locale'] );

    // Global Strings

    // Menu
    $lang_string['menu_links'] = "Връзки";
    $lang_string['menu_home'] = "Начало";
    $lang_string['menu_contact'] = "Обратна връзка";
    $lang_string['menu_stats'] = "Статистика";
    $lang_string['menu_calendar'] = "Календар"; // New for 0.4.8
    $lang_string['menu_archive'] = "Архив";
    $lang_string['menu_viewarchives'] = "Виж Архив";
    $lang_string['menu_menu'] = "Меню";
    $lang_string['menu_add'] = "Добави Новина";
    $lang_string['menu_add_static'] = "Добави Страница";
    $lang_string['menu_upload'] = "Добави Изображение";
    $lang_string['menu_setup'] = "Настройки";
    $lang_string['menu_categories'] = "Категории";
    $lang_string['menu_info'] = "Мета Тагове";
    $lang_string['manage_users'] = "Редакция на Потребители";
    $lang_string['manage_php_config'] = "PHP Конфигурация"; // New in 0.5.0.1
    $lang_string['menu_options'] = "Дата &amp; Час";
    $lang_string['menu_themes'] = "Теми";
    $lang_string['menu_colors'] = "Цветове";
    $lang_string['menu_change_login'] = "Смяна на Логин";
    $lang_string['menu_logout'] = "Изход";
    $lang_string['menu_login'] = "Вход";
    $lang_string['menu_most_recent'] = "Последни коментари";
    $lang_string['menu_most_recent_entries'] = "Последни новини";
    $lang_string['menu_most_recent_trackback'] = "Последни препратки";
    $lang_string['menu_add_block'] = "Блокове";
    $lang_string['menu_emoticons'] = "Емотикони"; // New for 0.4.7
    $lang_string['menu_avatar'] = "Аватар"; // New for 0.4.7
    $lang_string['menu_moderation'] = "IP Модерация"; // New for 0.4.9
    $lang_string['menu_commentmoderation'] = "Чакащи коментари"; // New for 0.5.0
	$lang_string['menu_random_entry'] = "Произволни Записи"; // New for 0.5.2
	$lang_string['menu_plugins'] = "Плъгини"; // New for 0.5.2
    $lang_string['notice_moderator1'] = "Вие имате ";
    $lang_string['notice_moderator2'] = " коментар(и) чакащи одобрение.";
    $lang_string['notice_loggedin'] = "В момента сте влезли.";
    

    // Counter
    $lang_string['counter_today'] = "Днес:"; // New for 0.4.8
    $lang_string['counter_yesterday'] = "Вчера:"; // New for 0.4.8
    $lang_string['counter_totalsidebar'] = "Всичко:"; // New for 0.4.8
    $lang_string['counter_title'] = "Посещения"; // New for 0.4.8

    // Other
    $lang_string['home'] = 'Към началото';
    $lang_string['nav_next'] = 'Следваща страница';
    $lang_string['nav_back'] = 'Предишна страница';
    $lang_string['nav_first'] = 'Първа'; // New in 0.5.0.1
    $lang_string['nav_last'] = 'Последна'; // New in 0.5.0.1
    $lang_string['search_title'] = 'Търсене';
    $lang_string['search_go'] = 'Давай';
    $lang_string['page_generated_in'] = 'Страницата зареди за %s секунди';
    $lang_string['counter_total'] = 'Посещения: '; // New in 0.4.8
    $lang_string['read_more'] = 'Повече по темата...'; // New in 0.4.8
    $lang_String['randomentry'] = 'Произволни Записи'; // New in 0.5.0.1
    $lang_string['randomquote'] = 'Произволни Цитати'; // New in 0.5.0.1

    // SB Functions
    $lang_string['sb_months'] = array( 'Януари', 'Февруару', 'Март', 'Април', 'Май', 'Юни', 'Юли', 'Август', 'Септември', 'Октомви', 'Ноември', 'Декември' );
    $lang_string['sb_default_title'] = 'Без Име';
    $lang_string['sb_default_author'] = 'Без Автор';
    $lang_string['sb_default_footer'] = 'Без Подтекст';

    $lang_string['sb_edit'] = 'редактирай';
    $lang_string['sb_delete'] = 'изтрий';
    $lang_string['sb_permalink'] = 'линк';
    $lang_string['sb_trackback'] = 'препратки';
    $lang_string['sb_postedby'] = 'Публикувано от'; // 0.5.0
    $lang_string['sb_admin'] = 'Администратор'; // 0.5.0
    $lang_string['sb_relatedlink'] = 'свързан линк'; // <-- New in 0.4.6

    $lang_string['sb_add_comment_btn'] = 'добави коментар';
    $lang_string['sb_read_entry_btn'] = 'виж записа'; // 0.5.0
    $lang_string['sb_comment_btn_number_first'] = true;
    $lang_string['sb_comment_btn'] = 'коментар';
    $lang_string['sb_comment_view'] = 'виж'; // 0.5.0
    $lang_string['sb_comments_plural_btn_number_first'] = true;
    $lang_string['sb_comments_plural_btn'] = 'коментара';
    $lang_string['sb_comments_plural_view'] = 'прегледано'; // 0.5.0

    // ( 1 view )
    $lang_string['sb_view_counter_pre'] = '';
    $lang_string['sb_view_counter_post'] = ' преглед';

    // ( 2 views )
    $lang_string['sb_view_counter_plural_pre'] = '';
    $lang_string['sb_view_counter_plural_post'] = ' прегледа';

    $lang_string['sb_add_link_btn'] = 'добави връзка';
    $lang_string['sb_rate_entry_btn'] = 'Кликни за Оценка';

    // Entry Text Editor
    if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
      $lang_string['label_subject'] = "Относно:";
      $lang_string['label_insert'] = "Специални Възможности:";
      $lang_string['btn_bold'] = " b ";
      $lang_string['btn_italic'] = " i ";
      $lang_string['btn_image'] = "img";
      $lang_string['btn_url'] = "url";
      $lang_string['btn_readmore'] = "Повече..."; // 0.4.8
      $lang_string['view_images'] = "Прегледай прикачените изображения";
      $lang_string['label_entry'] = "Текст:";
      $lang_string['btn_preview'] = "&nbsp;Прегледай&nbsp;";
      $lang_string['btn_post'] = "&nbsp;Изпрати&nbsp;";
      $lang_string['chk_visiblemenu'] = "Видимо (Покажи в менюто)";
      $lang_string['file_name'] = "Име на статичния файл (без интервали или файлови разширения)";

      // Javascript Strings
      $lang_string['insert_styles'] = "Въведи стил на текста:";
      $lang_string['insert_image'] = "Въведи пълен URL на изображението:";
      $lang_string['insert_url1'] = "Въведи текста, който ще се изписва при връзката (незадължително):";
      $lang_string['insert_url2'] = "Въведи пълен URL на връзката:";
      $lang_string['insert_url3'] = "Oтвори URL в нов прозорец (незадължително):";
      $lang_string['form_error'] = "Моля, попълни полетата за тема и съдържание.";

      // More Javascript Strings
      $lang_string['insert_image_optional'] = 'Незадължително:';
      $lang_string['insert_image_width'] = 'Ширина (незадължително):';
      $lang_string['insert_image_height'] = 'Височина (незадължително):';
      $lang_string['insert_image_popup'] = 'Виж в пълен размер в нов прозорец при кликване (незадължително):';
      $lang_string['insert_image_float'] = 'Свободно (незадължително):';

      $lang_string['day'] = 'Ден';
      $lang_string['month'] = 'Месец';
      $lang_string['year'] = 'Годин';
      $lang_string['hour'] = 'Час';
      $lang_string['minute'] = 'Минута';
      $lang_string['second'] = 'Секунда';
    }

    switch ($page) {
      case 'add':
        // Add Entry
        $lang_string['title'] = "Добавяне на новина";
        $lang_string['instructions'] = "Попълни формата, след завършване кликни <strong>'Преглед'</strong> за предварителен преглед на новината или <strong>'Изпрати'</strong> за публикуване новината на сайта.";
        $lang_string['title_ad'] = "Потвърди Пингване на Препратка";
        $lang_string['instructions_ad'] = "These are the Auto-Discovered URIs you're about to ping. If you do not want to ping a certain URI, uncheck it below. Then press the 'OK' button to ping the checked URIs or press 'Cancel' to not ping at all.";
        $lang_string['label_tb_ping'] = "Trackback ping(s) to send (comma separated)";
        $lang_string['label_tb_autodiscovery'] = "автоматично откриване";
        $lang_string['label_relatedlink'] = "Свързан Линк";
        $lang_string['label_categories'] = "Списък на категориите";

        // Preview / Edit Entry
        $lang_string['title_preview'] = "Преглед / редактиране на новината";
        $lang_string['instructions_preview'] = "Така ще изглежда новината. <strong>Обърни внимание,</strong>: че ако използваш разделяне на текста, прикачил си изоображение или си дал линк, трябва да се увериш, че всички тагове са затворени.";
        $lang_string['title_update'] = "Обновяване на новината";
        $lang_string['instructions_update'] = "Можеш да промениш новината, използвайки следната форма. Когато завършиш, използвай бутоните <strong>'Преглед'</strong> и '<strong>Изпрати'</strong>.";
        $lang_string['ok_btn'] = "&nbsp;OK&nbsp;";
        $lang_string['cancel_btn'] = "&nbsp;Отмени&nbsp;";

        // Error Response
        $lang_string['error'] = "<h2>Упс!</h2>Новината не е запазена! При опита за запазване е възникнала грешка.<br /><br />Отговор на сървъра:<br />";
        $lang_string['success'] = "<h2>Новината е записана!</h2>Въведената новина е успешно записана."; // 0.4.8.1
        break;

      case 'add_static':
        // Add Entry
        $lang_string['title'] = "Добави статична страница";
        $lang_string['instructions'] = "Попълни следната форма за създаване на статична страница. За разлика от обичайните, статичните страници се показват в менюто от другата страна. На тях е удобно да се помества информация, която трябва да бъде винаги достъпна: контакти, отговори на често задавани въпроси, график за работа и т.н. Използвай бутона 'Преглед' за предварителен преглед на страницата и 'Изпрати' за запазване на страницата.";

        // Preview / Edit Entry
        $lang_string['title_preview'] = "Преглед / редактиране на статична страница";
        $lang_string['instructions_preview'] = "Така изглежда статичната страница. Ако използваш стил или изображение, не забравяй да затвориш всички 'тагове'.";
        $lang_string['title_update'] = "Обнови статичната страница";
        $lang_string['instructions_update'] = "Можеш да промениш страницата, използвайки формата по-долу. Когато завършиш редактирането, използвай бутоните 'Преглед' и 'Изпрати'.";
        $lang_string['form_error'] = "Моля, попълни полетата Относно, Текст, и Име на файл.";

        // Error Response
        $lang_string['error'] = "<h2>Упс!</h2>Страницата не е запазена.<br /><br />Отговор на сървъра: <br />";
        break;

      case 'add_block':
        // Add / Manage Blocks
        $lang_string['title'] = "Въведи / Оформи Блок";
        $lang_string['instructions'] = "Въведи обичайни Блокове";
        $lang_string['up'] = "нагоре";
        $lang_string['down'] = "надолу";
        $lang_string['edit'] = "редакция";
        $lang_string['delete'] = "изтрий";
        $lang_string['block_name'] = "Име на Блока:";
        $lang_string['block_content'] = "Съдържание на Блока:";
        $lang_string['instructions_edit'] = "В момента редактирате Блок.";
        $lang_string['instructions_modify'] = "Кликнете по-долу за промени в Блока.";
        $lang_string['submit_btn_edit'] = "Редактирай Блока";
        $lang_string['submit_btn_add'] = "Добави Блок";
        $lang_string['form_error'] = "Попълете полето Име.";
        break;

      case 'add_link':
        $lang_string['static_pages'] = "Статични Страници:";

        // Add / Manage Links
        $lang_string['title'] = "Добавяне / промяна на връзки";
        $lang_string['instructions'] = "Тук можеш да добавиш връзки към други сайтове. Попълни формата и кликни бутона <strong>'Изпрати'</strong>. Кликвай 'нагоре' или 'надолу' за промяна на поредността на връзките. Използвай 'промени' за редактиране на връзката и 'изтрий' - за изтриване.";
        $lang_string['up'] = "нагоре";
        $lang_string['down'] = "надолу";
        $lang_string['edit'] = "редакция";
        $lang_string['delete'] = "изтрий";
        $lang_string['link_name'] = "Име:";
        $lang_string['link_url'] = "URL:";
        $lang_string['instructions_edit'] = "Вие Редактирате връзката:";
        $lang_string['instructions_modify'] = "Промени нужната връзка:";
        $lang_string['submit_btn_edit'] = "Изпрати";
        $lang_string['submit_btn_add'] = "Добави Линк";
        $lang_string['form_error'] = "Попълни полетата за Име и Адрес на връзката.";
        break;

      case 'categories':

        // Add / Manage Links
        $lang_string['title'] = "Добавяне / Оформяне на Категории";
        $lang_string['instructions'] = "Използвайте следната форма за да добавите и редактирате категориите. Всяка категория трябва да бъде в този формат 'име на категорията (id номер)'. Разделяйте с интервали за да създадете йерархии.<br /><br /><b>Пример:</b><br />Обща (1)<br />Новини (3)<br />&nbsp;&nbsp;Съобщения (6)<br />&nbsp;&nbsp;Събития (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;Разни (7)<br />Техника (2)<br />";
        $lang_string['error'] = "Грешка";
        $lang_string['current_categories'] = "Настоящи Категории";
        $lang_string['no_categories_found'] = "Няма Открити Категории";
        $lang_string['category_list'] = "Списък на Категориите:";
        $lang_string['validate'] = "Потвърждаване";
        $lang_string['submit_btn'] = "&nbsp;Изпрати&nbsp;";
        break;

      case 'colors':
        // Change Colors
        $lang_string['title'] = "Смяна на Цветовете";
        $lang_string['instructions'] = "Можее да промените цветовете, използвани на страницата. Използвайте палитрата за избор на подходящия цвят, после запишете шестнадесетичното обозначение на цвета в съответното поле..";
		// По-добре не ги превеждайте.
        $lang_string['bg_color'] = "BG Page";
        $lang_string['main_bg_color'] = "BG Main Page";
        $lang_string['border_color'] = "Page Border";
        $lang_string['inner_border_color'] = "Inner Border";
        $lang_string['header_bg_color'] = "BG Header";
        $lang_string['header_txt_color'] = "Header Text";
        $lang_string['menu_bg_color'] = "BG Menu";
        $lang_string['footer_bg_color'] = "BG Footer";
        $lang_string['txt_color'] = "Main Text";
        $lang_string['headline_txt_color'] = "Headline Text";
        $lang_string['date_txt_color'] = "Date Text";
        $lang_string['footer_txt_color'] = "Footer Text";
        $lang_string['link_reg_color'] = "Link Default";
        $lang_string['link_hi_color'] = "Link Hover";
        $lang_string['link_down_color'] = "Link Active";

        // More Colors
        $lang_string['entry_bg'] = "Entry BG";
        $lang_string['entry_title_bg'] = "Entry Title BG";
        $lang_string['entry_border'] = "Entry Border";
        $lang_string['entry_title_text'] = "Entry Title Text";
        $lang_string['entry_text'] = "Entry Text";

        $lang_string['static_bg'] = "Static BG"; // 0.5.0
        $lang_string['static_title_bg'] = "Static Title BG"; // 0.5.0
        $lang_string['static_border'] = "Static Border"; // 0.5.0
        $lang_string['static_title_text'] = "Static Title Text"; // 0.5.0
        $lang_string['static_text'] = "Static Text"; // 0.5.0

        $lang_string['comment_bg'] = "Comment BG"; // 0.5.0
        $lang_string['comment_title_bg'] = "Comment Title BG"; // 0.5.0
        $lang_string['comment_border'] = "Comment Border"; // 0.5.0
        $lang_string['comment_title_text'] = "Comment Title Text"; // 0.5.0
        $lang_string['comment_text'] = "Comment Text"; // 0.5.0

        $lang_string['menu_bg'] = "Menu BG";
        $lang_string['menu_title_bg'] = "Menu Title BG";
        $lang_string['menu_border'] = "Menu Border";
        $lang_string['menu_title_text'] = "Menu Title Text";
        $lang_string['menu_text'] = "Menu Text";
        $lang_string['menu_link_reg_color'] = "Menu Link Default";
        $lang_string['menu_link_hi_color'] = "Menu Link Hover";
        $lang_string['menu_link_down_color'] = "Menu Link Active";

        // Submit
        $lang_string['color_preset'] = "Цветови схеми:";
        $lang_string['scheme_name'] = "Въведете име на обичайна цветова схема:";
        $lang_string['scheme_file'] = "Въведете име на файла на цветовата схема (без интервали и файлови разширения)";
        $lang_string['save_btn'] = "&nbsp;Запази&nbsp;";
        $lang_string['form_error'] = "Въведете име на избраната цветова схема.";
        $lang_string['submit_btn'] = "&nbsp;Изпрати&nbsp;";
        $lang_string['theme_doesnt_allow_colors'] = 'Избраната тема не позволява промяна на цветовете.';

        // Error Response
        $lang_string['error'] = "<h2>Упс!</h2>Информацията не е запазена! При опита за запазване е възникнала грешка.<br /><br />Отговор на сървъра:<br />";
        $lang_string['success'] = "<h2>Цветовете са записани!</h2>Информацият е успешно запазена."; // New for 0.4.8.1
        break;

      case 'comments':
        // Comments
        $lang_string['name'] = "Име:"; //New in 0.4.6.2
        $lang_string['email'] = "Email:"; //New in 0.4.6.2
        $lang_string['homepage'] = "Лична Страница:"; //New in 0.4.6.2
        $lang_string['comment'] = "Коментар:"; //New in 0.4.6.2
        $lang_string['IPAddress'] = "IP Адрес:";  // New for 0.4.6.2
        $lang_string['useragent'] = "Браузър:";  // New for 0.4.6.2
        $lang_string['wrote'] = "<i>В %s, %s написа:</i><br />\n<br />\n%s"; // New for 0.4.6.2

        $lang_string['comment_capcha'] = "Въведете Anti-Spam кода: "; // 0.4.2
        $lang_string['title'] = "Коментари";
        $lang_string['header'] = "Добавяне на коментар";
        $lang_string['instructions'] = "Попълни формата по-долу.";
        $lang_string['comment_name'] = "Вашето име/никнейм:";
        $lang_string['comment_email'] = "Email:";
        $lang_string['comment_url'] = "Сайт:";
        $lang_string['commentposted'] = "Коментарът е изпратен на: ";  // New for 0.4.6.2
        $lang_string['comment_remember'] = "Помни ме:";
        $lang_string['comment_text'] = "Коментар:";
        $lang_string['post_btn'] = "&nbsp;Изпрати&nbsp;";
        $lang_string['delete_btn'] = "изтрий";
        $lang_string['ban_btn'] = "бан на IP-то"; // New for 0.4.8
        $lang_string['expired_comment1'] = "Коментари са разрешени само за новини не по-стари от "; // New for 0.4.8
        $lang_string['expired_comment2'] = " дни."; // New for 0.4.8

        $lang_string['blacklisted'] = "Този IP е баннат. Коментарите от него са забранени."; // New for 0.4.8
        $lang_string['bannedword'] = "Вашият коментар, url, име или e-mail съдържат забранени от собственика на сайта дума(и). Вашият коментар няма да бъде публикуван."; // New for 0.4.8
        $lang_string['nocomments'] = "Коментарите не са разрешени за тази статия."; // New for 0.4.9
        $lang_string['email_moderator'] = "Коментарът в момента подлежи на одобрение. Чак след това ще се бъде видим в страницата."; // New for 0.5.0
        $lang_string['user_notice_mod'] = "Всички коментари подлежат на одобрение от собственика на този уеб-сайт. Вашият коментар ще бъде видим веднага след одобрението му."; // new for 0.5.0

        $lang_string['return_to_comments'] = 'Назад към Коментарите';

        // Error Response
        $lang_string['error_add'] = "<h2>Упс!</h2>Коментарът не е запазен. При опита за запазване е възникнал проблем.<br /><br />Отговор на сървъра:<br />";
        $lang_string['error_delete'] = "<h2>Упс!</h2>Коментарът не е изтрит. При опита за изтриване е възникнала грешка.<br /><br />Отговор на сървъра:<br />";
        $lang_string['error_ban'] = "<h2>Упс!</h2>IP-то НЕ е добавено в бан листата.<br /><br />Отговор на сървъра:<br />";
        $lang_string['success_add'] = "<h2>Коментарът е добавен!</h2>Вашият коментар беше успешно въведен."; // New for 0.4.8.1
        $lang_string['success_delete'] = "<h2>Коментарът е Изтрит!</h2>Коментарът беше изтрит."; // New for 0.4.8.1
        $lang_string['success_ban1'] = "<h2>IP-то е Забранено!";
        $lang_string['success_ban2'] = "</h2>Зада премахнете тази ip забрана в бъдеще, използвайте определения линк в менюто."; // New for 0.4.8.1
        $lang_string['form_error'] = "Моля, попълнете полетата за заглавие и текст на коментара, както и Anti-Spam кода.";
        $lang_string['error_noip'] = "No IP Provided for Blacklist Request.";

        $lang_string[ 'error_comments_disabled' ] = '<h2>Грешка!</h2>Ей! Коментарите са забранени в тази страница. Ти спам-бот ли си?'; // New 0.5.0
        $lang_string[ 'error_no_match' ] = "<h2>Грешка!</h2>Вашият IP адрес не съвпада с публикуващият IP адрес. Ти спам-бот ли си?"; // New 0.5.0
        $lang_string[ 'error_fields_missing' ] = '<h2>Грешка!</h2>Липсват следните полета: '; // New 0.5.0
        $lang_string[ 'error_spambot' ] = '<h2>Грешка!</h2>Не сте въвели Анти-Спам кода.'; // New 0.5.0
        $lang_string[ 'error_capcha' ] = '<h2>Грешка!</h2>Въведеният Анти-Спам код е неправилен.'; // New 0.5.0
        $lang_string[ 'error_bad_data' ] = '<h2>Грешка!</h2>Публикуваната информация е НЕВАЛИДНА. Hacking attempt?'; // New 0.5.0
        $lang_string[ 'error_entry_missing' ] = '<h2>Грешка!</h2>Вие се опитвате да изпратите коментар към статия която не съществува.'; // New 0.5.0
        $lang_string[ 'error_empty_text' ] = '<h2>Грешка!</h2>Не сте въвели коментар или вашето име.'; // New 0.5.0
        break;

      case 'delete':
        $lang_string['title'] = "Изтриване на текст";
        $lang_string['instructions'] = "Преди да изтриете текста още веднъж се уверете, че искате да изтриете точно него, защото след изтриването му, не е възможно да бъде възстановен...";
        $lang_string['ok_btn'] = "&nbsp;Изтрий&nbsp;";
        $lang_string['cancel_btn'] = "&nbsp;Отмени&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Упм!</h2>Неуспешно изтриване на бележка.<br /><br />Отговор на сървъра:<br />";
        $lang_string['success'] = "<h2>Записът е изтрит!</h2>Записът беше успешно изтрит."; // New for 0.4.8.1
        break;

      case 'delete_static':
        $lang_string['title'] = "Изтриване на статична страница";
        $lang_string['instructions'] = "Преди да изтриете тази страница още веднъж се уверете, че искате да изтриете точно нея, защото няма възможност за възтановяване.";
        $lang_string['ok_btn'] = "&nbsp;Изтриване&nbsp;";
        $lang_string['cancel_btn'] = "&nbsp;Отмени&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Упс!</h2>Страницата не е изтрита.<br /><br />Отговор на сървъра:<br />";
        $lang_string['success'] = "<h2>Статичната страница е изтрита!</h2>Сттичната страница е успешно изтрита."; // New for 0.4.8.1
        break;

      case 'image_list':
        $lang_string['title'] = "Каталог на изображения";
        $lang_string['instructions'] = "Кликнете съответната връзка за преглеждане на изображенията.<br /><br />За поставяне на изображение в текста:<br />1) Кликнете с десен бутон на мишката върху връзката и изберете точка от менюто <em>Копиране на връзка</em>.<br />2) Върнете се в прозореца за добавяне / промяна.<br />3) Кликнете бутон <strong>'img'</strong> и добавете в появилото се място връзката от буфера за обмен.";
        break;

      case 'info':
        $lang_string['title'] = "Meta-Data Информация";
        $lang_string['instructions'] = "Тази информация &quot;meta-data&quot;, ще помогне на търсачките точно да идентифицират и намират сайта. Информацията може да бъде използвана и за RSS feeds.";
        $lang_string['info_keywords'] = "Ключови думи (Списък на ключовите думи, разделени със запетайки)";
        $lang_string['info_description'] = "Описание (Свободен текст с описание на сайта)";
        $lang_string['info_copyright'] = "Права (Запазени права или линк към документите, съдържащи тази информация)";
        $lang_string['tracking_code'] = "Външен проследяващ код: (HTML код изискван от някои търсачки да бъде въведен в началната страница(в <head>) примерно за Google бот-Анализаторите)";
        $lang_string['submit_btn'] = "&nbsp;Изпрати&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Упс!</h2>Информацията не е запазена. При опита за запазване е възникнал е проблем.<br /><br />Отговор на сървъра:<br />";
        $lang_string['success'] = "<h2>Meta-Data Информация е записана!</h2>Информацията беше успешно записана."; // New for 0.4.8.1
        $lang_string['form_error'] = "Моля, попълнете полетата Заглавие и Автор.";
        break;

      case 'index':
        // Index
        break;

      case 'static':
        // Index
        break;

      case 'rating':
        $lang_string['error'] = "<h2>Упс!</h2>Информацията не е запазена. При опита за запазване е възникнал е проблем.<br /><br />Отговор на сървъра:<br />";
        $lang_string['success'] = "<h2>Гласуването успешно!</h2>Вапият рейтинг беше добавен успешно."; // New for 0.4.8.1
        break;

      case 'login':
        $lang_string['upgrade'] = "<h2>Ъпгрейд</h2>"; // New 0.3.8
        $lang_string['upgrade_count'] = "%n коментара имат нужда от ъпгрейд:"; // New 0.3.8
        $lang_string['upgrade_url'] = "Ъпгрейд на Коментарите"; // New 0.3.8
        $lang_string['title'] = "Вход";
        $lang_string['instructions'] = "Моля, въведете вашето потребитско име и парола";
        $lang_string['username'] = "Username:";
        $lang_string['password'] = "Password";
        $lang_string['submit_btn'] = "&nbsp;Изпрати&nbsp;";
        // Success
        $lang_string['success'] = "<h2>Влизането беше успешно!</h2>Вече сте влезли в системата. Приятно прекарване!<p />";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>Упс!</h2>Неуспешно влизане. Проверете правилно ли са въведени името на потребителя и паролата.<br />";
        $lang_string['inactive_account'] = "<h2>Упс!</h2>Неуспешно влизане в системата. Вашият акаунт е деактивиран от собственика на сайта поради някаква причина.<p />";
        $lang_string['form_error'] = "Моля, попълнете полетата за име на потребител и парола.";
        break;

      case 'logout':
        $lang_string['title'] = "Изход";
        $lang_string['error'] = "<h2>До скоро!</h2>Вие излязохте от системата.<p />";
        $lang_string['error_no_cookie'] = "<h2>До скоро!</h2>Вие излязохте от системата. (Не са намерени cookies.)<p />"; // New 0.5.0
        $lang_string['success'] = "<h2>До скоро!</h2>Вие излязохте от системата.<p />(Пренасочване към началото след 5 секунди.)<p />";
        break;

      case 'forms':
        $lang_string['title'] = "";
        $lang_string['instructions'] = "";
        // Error Response
        $lang_string['error'] = "<h2>Упс!</h2>Информацията не е запазена. При опита за запазване е възникнала грешка.<br /><br />Отговор на сървъра:<br />";
        break;

      case 'set_login':
        $lang_string['title'] = "Смени Потребител &amp; Парола";
        $lang_string['instructions'] = "Попълнете формата за смяна на Потребител и/или Парола. Въведете новите Потребител и Парола.";
        $lang_string['username'] = "Потребител:";
        $lang_string['password'] = "Парола:";
        $lang_string['submit_btn'] = "&nbsp;Изпрати&nbsp;";
        // Success
        $lang_string['success'] = "<h2>Успешна промяна!</h2>Потребителят и/или Паролата са активни.<p />";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>Упс!</h2>Информацията не е запазена. При опита за запазване е възникнал проблем.<br /><br />Отговор на сървъра:<br />";
        $lang_string['form_error'] = "Моля, попълнете полетата Потребител и Парола.";
        $lang_string['explanation'] = "В последните версии начинът на сменяване на паролата е сменен. Вече няма възможност за смяна на парола и/или потребител през страницата. За да промените паролата и/или потребителя, изтрийте /config/password.php и се уверете, че install*.php съществува на сървъра. Когато сте готови, опреснете тази страница (или излезте от системата). Ще бъдете насочени да генерирате нова парола	от същия скрипт, който се използва при създаването на страницата.";  // New for 0.4.6
        break;

      case 'install00':
        $lang_string['title'] = "Добре Дошли";
        $lang_string['instructions'] = "Благодарности че избрахте Simple PHP Blog!";
        $lang_string['blog_choose_language'] = "Изберете Език:";
        $lang_string['submit_btn'] = "&nbsp;Изпрати&nbsp;";
        break;

      case 'install01':
        $lang_string['title'] = "Добре Дошли";
        $lang_string['instructions'] = "Благодарности че избрахте Simple PHP Blog!<br /><br />Simple PHP Blog е блог система. Тя изисква да имате PHP 4.1 или по-висока версия, и права за писане по файловете на вашият хостинг сървър. Всичката информация се записва в обикновенни текстови файлове, така чеso не се изисква поддръжка на база данни.<br /><br />
        Няколко стъпки в началото, Simple PHP Blog изисква да създадете 3 папки в основната директория на страницата си (<b>config</b>, <b>content</b>, и <b>images</b>) където всъщност ще се съдържа вашата информация. След това, вие ще създадете вашият потребител и парола с които ще можете да пишете статии по блога си.<br /><br />
        <b>Натиснете тук за да започнете инсталацията:</b>";
        $lang_string['begin'] = "[ Зпочни Инсталацията ]";
        break;

      case 'install02':
        $lang_string['title'] = "Инсталация";
        $lang_string['instructions'] = "Опит за създаване на папките <b>config</b>, <b>content</b>, и <b>images</b>:";
        $lang_string['folder_exists'] = "Добре! Папките съществуват. Не са необходими промени...";
        $lang_string['folder_failed'] = "Опс! Папките не могат да бъдат създадени...";
        $lang_string['folder_success'] = "Успешно! Папките са създадени...";
        // Help
        $lang_string['help'] = "
        <h2>Опс!</h2>
        Невъзможност за създаване на всичките или на някоя от папките!<br /><br />Това най-често се случва защото:<br />
        <ol>
        <li><b>Правата за писане</b> не са разрешени<b> Четене/Писане</b> достъпа.</li>
        <li><b>UID</b>-тата (потребителските ID-та) трябва да са еднакви за всички файлове и папки.</li>
        </ol>
        Следвайте тези инструкции по-долу и кликнете на <b>Опитай Отново</b>:<br />
        <ol>
        <li>Ръчно създайте следните папки: <b>config</b>, <b>content</b>, и <b>images</b>.</li>
        <li>Разрешете <b>Правата за Писане</b> на тези папки: Във вашата FTP програма, Owner, User, и World трябва да имат <b>Read</b> и <b>Write</b> достъп. <i>(Трябва да се свържете с вашият service provider за да ги смените... ако нямате права за това.)</i></li>
        <li>Убедете се че всички UID-та на всички файлове и папки са едни и същи. <i>(Трябва да се свържете с вашият service provider за да ги смените... ако нямате права за това.)</i></li>
        </ol>";
        $lang_string['try_again'] = "[ Опитай Отново ]";
        // Success
        $lang_string['success'] = "<h2>Успешно!</h2>Папките са създадени успешно!<p /><b>Натиснете долу за да продължите:</b>";
        $lang_string['continue'] = "[ Продължи ]";
        break;

      case 'install03':
        $lang_string['supported'] = "<b>Вашият уеб-сървър поддържа следните схеми за криптиране:</b>";
        $lang_string['standard'] = "Standard DES Encryption: ";
        $lang_string['extended'] = "Extended DES Encryption: ";
        $lang_string['MD5'] = "MD5 Encryption: ";
        $lang_string['blowfish'] = "Blowfish Encryption: ";
        $lang_string['enabled'] = "Активна";
        $lang_string['disabled'] = "Неактивна";
        $lang_string['using_standard'] = "<b>Използване на Standard DES Encryption...</b>";
        $lang_string['using_extended'] = "<b>Използване на Extended DES Encryption...</b>";
        $lang_string['using_MD5'] = "<b style=\"color: green;\">Използване на MD5 Encryption...</b>";
        $lang_string['using_blowfish'] = "<b style=\"color: green;\">Използване на Blowfish Encryption...</b>";
        $lang_string['using_unknown'] = "<b>Използване на Непозната Схема...</b>";
        $lang_string['salt_length'] = " <i>(Salt Length = %string)</i><br />";
        $lang_string['title'] = "Създаване на Потребител &amp; Парола";
        $lang_string['instructions'] = "Използвайте формата по-долу за да създадете Потребител и Парола.";
        $lang_string['username'] = "Потребител:";
        $lang_string['password'] = "Парола:";
        $lang_string['submit_btn'] = "&nbsp;Изпрати&nbsp;";
        // Success
        $lang_string['success'] = "<h2>Поздравления!</h2>Вие успешно инсталирахте всичко необходимо. Кликнете на линка долу за да разгледате и промените Настройките по вашият Блог. Приятно прекарване!<p />";
        $lang_string['btn_setup'] = "[ Настройки ]";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>Опс!</h2>Информацията НЕ е записата успешно. Проблема се състои в записването на Вашият Потребител и/или Парола.<br /><br />Отговор на сървъра:<br />";
        $lang_string['form_error'] = "Моля, попълнете полетата Потребител и Парола.";
        break;

      case 'install04':
        $lang_string['title'] = "Създаване на файла с Паролата";
        $lang_string['instructions'] = "Това е целия трик:<br />
        <ol>
        <li>Отворете текстов редактор. <i>(Notepad, Wordpad, Word, BBEdit, Pico, VI, др...)</i></li>
        <li>Създайте нов текстов документ.</li>
        <li>Копирайте и въведете (Copy/paste) кода който е показан в блока по-долу в текстовия файл.</li>
        <li>Запишете файла като <b>password.php</b> <i>(Бъдете сигурни че записвате файла в <b>text</b> или <b>plain text</b> формат и че разширението на файла е 100% .php)</i></li>
        <li>Отворете вашата FTP програма.</li>
        <li>Качете Вашият нов <b>password.php</b> файл в папката <b>config</b> на Вашият уеб-сайт.</li>
        <li>Изтрийте <b>password.php</b> от Вашият компютър.</li>
        </ol>
        ";
        $lang_string['information'] = "<i>Забележка: Ако искате да смените паролата/потребитела си (ако сте си забравили паролата), изтрийте <b>password.php</b> файла от <b>config</b> папката на Вашият уеб-сайт. Веднага след това отворете страницата си, която ще ви подкани да преминете през същата процедура както до сега...</i>";
        $lang_string['code'] = "Код за <b>password.php</b> файла:";
        $lang_string['continue'] = "[ Продължи ]";
        break;

      case 'install05':
      case 'install06':
        $lang_string['title'] = "Вход";
        $lang_string['instructions'] = "Моля, въведете Вашите Потребител/Парола по-долу";
        $lang_string['username'] = "Потребител:";
        $lang_string['password'] = "Парола";
        $lang_string['submit_btn'] = "&nbsp;Изпрати&nbsp;";
        // Success
        $lang_string['success'] = "<h2>Поздравления!</h2>Вие влязохте в системата.<p />
        Кликнете на <b>Настройки</b> за да персонализирате новия си Блог.<p />
        <i>Забележка: Сега, след като завършихте успешно инсталацията, препоръчваме Ви да изтриете всички <b>installXX.php</b> файлове от Вашият уеб-сайт. (тоест от install00.php до install06.php)</i><p />";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>Опс!</h2>Влизането в системата Не беше успешно. Моля, проверете въведените от Вас Потребител и Парола, след това опитайте отново.<p />";
        $lang_string['form_error'] = "Моля, попълнете полетата Потребител и Парола.";
        // Success
        $lang_string['btn_setup'] = "[ Настройки ]";
        $lang_string['btn_try_again'] = "[ Опитай Отново ]";
        break;

      case 'setup':
        $lang_string['title'] = "Настройки";
        $lang_string['instructions'] = "Оттук можеш да промениш името на сайта и личната информация.";
        $lang_string['blog_title'] = "Име на сайта:";
        $lang_string['blog_header'] = "Изображение на Хедъра - URL: images/blogheader.jpg (Оставете празно за хедър по подразбиране на самия стил).";
        $lang_string['blog_author'] = "Автор:";
        $lang_string['blog_email'] = "Имейл: (Разделете емайл адресите с запетая - ако е празно опцията За контакти е спряна)"; // Updated 0.4.7
        $lang_string['blog_avatar'] = "Аватр URL: images/avatar.jpg (Оставете празно ако искате да спрете тази фукнция)."; // <-- New 0.4.7
        $lang_string['blog_footer'] = "Подтекст:";
        $lang_string['blog_choose_language'] = "Изберете език:";
        $lang_string['blog_enable_comments'] = "Разрешете Коментарите";
        $lang_string['blog_comments_popup'] = "Отваряй Коментари в нов прозорец";
		$lang_string['blog_enable_start_category'] = "Използвай специфична категория за първата страница от записи: "; // Now for 0.5.1
        $lang_string['blog_search_top'] = "Покажи търсачката (вместо тази в блока)"; // New for 0.5.0
        $lang_string['blog_enable_static_block'] = "Покажи определен блок при първото влизане в блог-а: "; // New for 0.5.0
        $lang_string['static_block_border'] = 'Показвай Бордера'; // New for 0.5.0
        $lang_string['static_block_noborder'] = 'Без Бордер'; // New for 0.5.0
        $lang_string['blog_enable_voting'] = "Разреши Оценка";
        $lang_string['blog_enable_cache'] = "Разреши Кеш на новините (може да увеличи скоростта при някои сървъри)"; // New for 0.4.6
        $lang_string['blog_enable_calendar'] = "Разреши блок Календар"; // New for 0.4.6
        $lang_string['blog_enable_archives'] = "Разреши блок Архив"; // New for 0.4.8
        $lang_string['blog_enable_counter'] = "Разреши блок Посещения"; // New for 0.4.8
        $lang_string['blog_counter_hours'] = "След колко часа броячът да отчита посещението за ново (за определен ip адрес):"; // New for 0.4.8
        $lang_string['blog_enable_login'] = "Разреши линк Вход (ако не, входът става невидим за посетители, а ти можеш да влизаш през http://yoursite.com/login.php)"; // New for 0.4.8
        $lang_string['blog_enable_title'] = "Разреши името на сайта като текст (Не маркирай, ако името се съдържа в логото)"; // New for 0.4.6
        $lang_string['blog_enable_permalink'] = "Разреши Линк на новината да се вижда под нея"; // New for 0.4.6
        $lang_string['blog_enable_capcha'] = "Разреши Anti-Spam филтър"; // New for 0.4.8
        $lang_string['blog_footer_counter'] = "Разреши Посещения (общо) в подтекста"; // New for 0.4.8
        $lang_string['blog_enable_capcha_image'] = "Anti-Spam изображение (GD library only) / Anti-Spam текст"; // New for 0.4.8
        $lang_string['blog_enable_stats'] = "Разреши линк Статистики"; // New for 0.4.7
        $lang_string['blog_enable_lastcomments'] = "Разреши блок Последни коментари"; // New for 0.4.7
        $lang_string['blog_enable_lastentries'] = "Разреши блок Последни новини"; // New for 0.4.7
        $lang_string['blog_email_notification'] = "Изпращане на имейл при публикуване на коментар";
        $lang_string['blog_send_pings'] = "Изпращане на Пинг &quot;pings&quot;";
        $lang_string['blog_ping_urls'] = "Въведи пълен URL (например http://rpc.weblogs.com/RPC2) на пингващия сървър &quot;ping&quot;.<br />(Можеш да въведеш и повече адреси, разделени от запетайки.)";
        $lang_string['blog_trackback_about'] = "Проследяването на препратки е начин за известяване между блогове. Позволява на други блогове	да разберат, че в блога ти има линк към тях, чрез изпращането на проследяващ пинг. Както и да видиш кой е дал линк към твоя блог чрез получаването на проследяващ пинг.<br />Можеш или да въведеш ръчно пингващия URIs или да оставиш това на автоматично откриване.";
        $lang_string['blog_trackback_enabled'] = "Разреши Препратки";
        $lang_string['blog_trackback_auto_discovery'] = "Разреши автоматично откриване при въвеждане на съобщения, съдържащи URLs";
        $lang_string['blog_max_entries'] = "Максимум показвани новини:";
        $lang_string['blog_comment_tags'] = "Позволени тагове в коментарите:";
        $lang_string['blog_gzip_about'] = "
          От версия PHP 4.0.4, PHP дава възможност за четене и писане на gzip (.gz) компресирани файлове,
					спестявайки място на диска. Може също да компресира страниците, които се изпращат към браузъри,
					поддържащи gzip компрасия, спестявайки трафик.<br />
					<br />
					Zlib не се поддържа от PHP по подразбиране. Ако липсват местата за маркирането на компресията,
					значи твоята инсталация на PHP не поддържа Zlib разширение.";
        $lang_string['blog_enable_gzip_txt'] = "Разреши GZIP компресия за База данни файловете";
        $lang_string['blog_enable_gzip_output'] = "Разреши GZIP компресия за HTTP изпращане";
        $lang_string['submit_btn'] = "&nbsp;Запази&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Упс!</h2>Информацията не може да се запази. При опита за запазване е възникнала грешка.<br /><br />Отговор на сървъра:<br />";
        $lang_string['success'] = "<h2>Настройките са Запазени!</h2>Информацията беше успешно записана."; // New for 0.4.8.1
        $lang_string['form_error'] = "Моля, попълнете полетата Име и Автор.";
        $lang_string['label_entry_order'] = "Ред на показване на новините:";
        $lang_string['select_new_to_old'] = "Започни от най-новите";
        $lang_string['select_old_to_new'] = "Започни от най-старите";
        $lang_string['label_comment_order'] = "Ред на показване на коментарите:";
        $lang_string['cal_sunday'] = "Неделя";
        $lang_string['cal_monday'] = "Понеделник";
        $lang_string['label_calendar_start'] = "Начало на седмицата в календара";
		$lang_string['title_sidebar'] = "Допълнителни"; // New in 0.4.7
		$lang_string['title_comments'] = "Коментари"; // New in 0.4.7
		$lang_string['title_trackback'] = "Препратки"; // New in 0.4.7
		$lang_string['title_compression'] = "Компресия"; // New in 0.4.7
		$lang_string['title_entries'] = "Новини"; // New in 0.4.7
		$lang_string['title_general'] = "Главни"; // New in 0.4.7
		$lang_string['title_language'] = "Език"; // New in 0.4.7
        $lang_string['blog_comment_days_expiry'] = "Колко дена след публикуване на новина могат да се пишат коментари за нея? (0 означава безсрочно)"; // New in 0.4.8
        $lang_string['blog_comments_moderation'] = "Одобрение на коментарите преди да бъдат публично достъпни (винаги видими за влезли в системата потребители)"; // New in 0.5.0
        $lang_string['comment_moderation'] = "Настройки на Модерацият"; // New in 0.5.0
        break;
      case 'comment_moderation':
        $lang_string['title'] = "Чакащи коментари";
        $lang_string['instructions'] = "Това е списък с всички коментари които не са влезли в системата защото те трябва да бъдат одобрени от собсвеника на уеб-сайта.";
        $lang_string['header'] = "Списък за Модериране";
        $lang_string['enteredby'] = "Добавено от: ";
        $lang_string['entrydate'] = "Добавено на: ";
        $lang_string['blogentrytitle'] = "Заглавие: ";
        $lang_string['enteredcontent'] = "Съдържание: ";
        $lang_string['totalunmodded'] = " коментара очакващи проверка/одобрение.";
        $lang_string['mod_approve'] = "[Одобри] ";
        $lang_string['mod_delete'] = "[Изтрий]";
        break;
      case 'moderation':
        $lang_string['title'] = "Настройки на Модерирането";
        $lang_string['instructions'] = "Можете да конфигурирате автоматично отсяване.";
        $lang_string['submit_btn'] = "&nbsp;Запиши Настройките&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Опс!</h2>Информацията Не беше записана.<br /><br />Отговор на сървъра:<br />";
        $lang_string['success'] = "<h2>Настройките са записани!</h2>Информацията е запазена успешно."; // New for 0.4.8.1
        $lang_string['banned_address_list_title'] = "<h2>Забранени IP адреси</h2>";
        $lang_string['banned_address_list'] = "По-долу е списъка с ip адресите, които нямат право да добавят коментари. Всяко ip трябва да бъде на отделен ред и трябва да бъде въведено като ip адре, а не като hostname(без DNS имена). След като влезете в системата, IP-то може да бъде забранено направо при разглеждането на самия коментар.";
        $lang_string['banned_word_list_title'] = "<h2>Забранени Думи</h2>";
        $lang_string['banned_word_list'] = "По-долу е списъка от забранените думи, които не са разрешени за въвеждане в коментарите. Всяка дума трябва да бъде на отделен самостоятелен ред.";
        break;
      case 'trackbacks':
        // Trackbacks
        $lang_string['title'] = "Препратки";
        $lang_string['header'] = "Адрес за препратка:";
        $lang_string['delete_btn'] = "изтрий";
        // Error Response
        $lang_string['error_add'] = "Грешка при запазването на данните за препратката.";
        $lang_string['error_delete'] = "<h2>Опс!</h2>Препратката Не беше изтрита. Възникна проблем при изтриването.<br /><br />Отговор на сървъра:<br />";
        $lang_string['success_delete'] = "<h2>Препратката е изтрита!</h2>Препратката беше успешно изтрита."; // New for 0.4.8.1
        break;

      case 'options':
        $lang_string['title'] = "Параметри";
        $lang_string['instructions'] = "Настройки на параметрите за показване на дата и час. Полетата <strong>Предварителен преглед</strong> автоматично се обновяват при промяна на който и да е параметър.";
        // Long Date
        $lang_string['ldate_title'] = "Дълъг формат на дата:";
        $lang_string['weekday'] = "Ден от седмицата";
        $lang_string['month'] = "Месец";
        $lang_string['day'] = "Ден";
        $lang_string['year'] = "Година";
        $lang_string['none'] = "празно";
        // Short Date
        $lang_string['sdate_title'] = "Кратък формат на дата:";
        $lang_string['s_month'] = "Месец";
        $lang_string['s_mon'] = "MMM";
        $lang_string['s_day'] = "Ден";
        $lang_string['s_year'] = "Година";
        $lang_string['zero_day'] = "01 вместо 1";
        $lang_string['show_century'] = "Показвай хилядолетие";
        // Time
        $lang_string['time_title'] = "Формат на час:";
        $lang_string['12hour'] = "12-часов формат";
        $lang_string['24hour'] = "24-часов формат";
        $lang_string['before_noon'] = "До обяд";
        $lang_string['after_noon'] = "След обяд";
        // Date
        $lang_string['date_title'] = "Формат на показване:";
        $lang_string['long_date'] = "Дълга дата";
        $lang_string['short_date'] = "Кратка дата";
        $lang_string['time'] = "Час";
        // Menu
        $lang_string['menu_title'] = "Меню Формат на показване на дата:";
        $lang_string['long_date'] = "Дълга дата";
        $lang_string['short_date'] = "Кратка дата";
        // Used in multiple places
        $lang_string['zero_day'] = "01 вместо 1 за ден";
        $lang_string['zero_month'] = "01 вместо 1 за месец";
        $lang_string['zero_hour'] = "01 вместо 1 за час";
        $lang_string['separator'] = "Разделител:";
        $lang_string['preview'] = "Предварителен преглед:";
        $lang_string['server_offset'] = "Разлика от сървъра:";
        // Buttons
        $lang_string['submit_btn'] = "&nbsp;Запази&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Упс!</h2>Параметрите не са запазени. Възникнала грешка при опита за запазване.<br /><br />Отговор на сървъра:<br />";
        $lang_string['success'] = "<h2>Настройките са записани!</h2> Информацията беше запазена успешно."; // New for 0.4.8.1
        break;

      case 'themes':
        $lang_string['title'] = "Теми";
        $lang_string['instructions'] = "Използвай падащото меню, за да си избереш предпочитана тема.";
        // Themes
        $lang_string['choose_theme'] = "Теми:";
        // Buttons
        $lang_string['submit_btn'] = "&nbsp;Изпрати&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Упс!</h2>Информацията не е запазена. Възникнал е проблем при опита за запазване.<br /><br />Отговор на сървъра:<br />";
        $lang_string['success'] = "<h2>Настройките са записани!</h2> Информацията беше запазена успешно."; // New for 0.4.8.1
        break;

      case 'upload_img':
        $lang_string['title'] = "Прикачване на изображение";
        $lang_string['instructions'] = "Кликни бутон 'Преглед' за да избереш изображение от локалния диск.";
        $lang_string['select_file'] = "Избери файл:";
        $lang_string['upload_btn'] = "Добави";
        // Error Response
        $lang_string['error'] = "<h2>Упс!</h2>При опита за прикачване на изображението е възникнала грешка. Служебна информация:<br /><br />Отговор на сървъра:<br />";
        $lang_string['success'] = "<h2>Изображението е качено!</h2> Информацията беше запазена успешно."; // New for 0.4.8.1
        break;

      case 'search':
        $lang_string['title'] = "Резултати от Търсенето";
        $lang_string['instructions'] = "Резултати от търсенето на <b>%string</b>:";
        $lang_string['not_found'] = "Няма намерени резултати";
        break;

      case 'contact':
        $lang_string['contact_capcha'] = "Въведете Anti-Spam кода "; // 0.4.2
        $lang_string['title'] = "За контакти";
        $lang_string['instructions'] = "Моля, попълете формата:";
        $lang_string['form_error'] = "Моля, Попълнете полетата Относно и Текст.";
        $lang_string['name'] = "Име:";
        $lang_string['email'] = "Емайл:";
        $lang_string['subject'] = "Относно:";
        $lang_string['comment'] = "Текст:";
        $lang_string['submit_btn'] = "&nbsp;Изпрати&nbsp;";
        $lang_string['success'] = "<h2>Благодаря!</h2>Съобщението беше изпратено успешно.<p />";
        $lang_string['failure'] = "<h2>Грешка!</h2>Съобщението не беше изпратено. Най-вероятно кодът за Anti Spam не е бил въведен правилно.<p />";
        $lang_string['contactsent'] = "Контактната форма е изпратена от: ";  // New for 0.4.6
        $lang_string['IPAddress'] = "IP Адрес:";  // New for 0.4.6
        $lang_string['useragent'] = "User Agent:";  // New for 0.4.6
        $lang_string['wrote'] = "<i>В %s, %s написа:</i><br />\n<br />\n%s"; // New for 0.4.6.2
        break;

      case 'stats':
        $lang_string["title"] = "Статистики";
        $lang_string["general"] = "Общо";
        $lang_string["entry_info"] = "<b>%s</b> статии, използвани са <b>%s</b> думи или <b>%s</b> байта";
        $lang_string["comment_info"] = "<b>%s</b> коментара, използвани са <b>%s</b> думи или <b>%s</b> байта";
        $lang_string["trackback_info"] = "<b>%s</b> препратки или <b>%s</b> байта";
        $lang_string["static_info"] = "<b>%s</b> статични страници, използвани са <b>%s</b> думи или <b>%s</b> байта";
        $lang_string["most_viewed_entries"] = "10-те най-преглеждани статии";
        $lang_string["most_commented_entries"] = "10-те най-коментирани статии";
        $lang_string["most_trackbacked_entries"] = "10-те най-препращани статии";
        $lang_string['vote_info'] = "<b>%s</b> гласа или <b>%s</b> байта"; // 0.4.1
        $lang_string["most_voted_entries"] = "10-те най-често оценявани статии"; // 0.4.1
        $lang_string["most_rated_entries"] = "10-те най-високо оценени статии"; // 0.4.1
        break;

      case 'errorpage-nocookies':  // New for 0.4.6
        $lang_string["title"] = 'HTTP Error 403.8 - Страницата / Функцията е недостъпна';
        $lang_string["errorline1"] = 'Страницата или функцията, която искаш да ползваш, се нуждаят от cookies.';
        $lang_string["errorline2"] = 'Поправи в браузъра си или в друг активиран защитен софтуер настройките за cookies и опитай отново.';
        $lang_string["clientid"] = 'Клиентско ID: ';
        break;

      case 'errorpage':  // New for 0.4.6
        $lang_string["403.8"] = 'HTTP Error 403.8 - Страницата / Функцията е недостъпна.';
        $lang_string["404"] = 'HTTP Error 404 - Страницата / Функцията не съществува.';
        $lang_string["error_404"] = 'Страницата или функцията, която се опитваш да намериш, не съществува.';
        $lang_string["error_javascript"] = 'Страницата или функцията, която се опитваш да намериш, изисква javascript за да работи.';
        $lang_string["error_emailnotsent"] = 'Неуспешно изпращане на съобщението.';
        $lang_string["error_emailnotsentcapcha"] = 'Неуспешно изпращане на съобщението, поради празно или неточно попълнено поле на Anti Spam код.';
        $lang_string["clientid"] = 'Клиентско ID: ';
        break;

      case 'emoticons':  // New for 0.4.7
        $lang_string['title'] = "Админ Емотикони";
        $lang_string['instructions'] = "
          Отбележи емотиконите, които искаш да използваш. Срещу тях напиши таговете, които искаш
					да заместват картинките. Могат да се изпозват множество тагове, но трябва да се
					разделят с празно място.<br /><br />
					Например:<br />
					:) :-) :SMILE: :HAPPY:<br /><br />
					<i>(В този случай е задължително да използваш тагове с повече от 2 знака,
					иначе може да се получи неочаквано заместване.)</i>";
        $lang_string["upload_instructions"] = 'Качи нови емотикони:';
        $lang_string["upload_success"] = 'Успешно! Изображенията са качени успешно!';
        $lang_string["upload_error"] = 'Грешка! Изображенията не са качени.';
        $lang_string["upload_invalid"] = 'Грешка! Невалиден файл на изображение. Изображенията трябва да са с разширение png, jpg, или gif.';
        $lang_string["save_success"] = 'Предпочитаните емотикони са успешно запазени!';
        $lang_string["save_error"] = 'Грешка! Предпочитаните емотикони не са запазени.';
        $lang_string["save_button"] = 'Изпрати';
        break;

      case 'archives': // New for 0.4.8
        $lang_string['title'] = "Архиви";
        $lang_string['showall'] = "Покажи Всички";
        break;

      case 'manage_users':
        $lang_string['title'] = "Управление и Редакция на Потребители";
        $lang_string['instructions'] = "Добавяне, Редакция или Изтриване на поребители които не са администратори но имат права за писане по страницата и модериране на коментарите.";
        $lang_string['fulladminerror'] = "Вие трябва да сте администратор за да напрвите това!";
        $lang_string['header_user'] = "Потребител: ";
        $lang_string['header_property'] = "Свойство";
        $lang_string['header_value'] = "Стойност";
        $lang_string['prop_username'] = "Потребител:";
        $lang_string['prop_fullname'] = "Име:";
        $lang_string['prop_password'] = "Парола:";
        $lang_string['prop_email'] = "Емайл:";
        $lang_string['prop_avatar'] = "Аватар URL:";
        $lang_string['prop_state'] = "Активен?";
        $lang_string['prop_sec_Moderate'] = "Модерация на Коментарите?";
        $lang_string['prop_sec_Delete'] = "Триене на Записи?";
        $lang_string['prop_sec_Edit'] = "Редакция на Всичко?";
        $lang_string['btn_SaveChanges'] = "Запиши Промените";
        $lang_string['btn_CreateUser'] = "Създаване на Потребител";
        $lang_string['btn_Cancel'] = "Отмени";  
        $lang_string['grid_header'] = "Списък с Потребители";
        $lang_string['grid_login'] = 'Бход';
        $lang_string['grid_email'] = 'Емайл';
        $lang_string['grid_avatar'] = 'Аватар';
        $lang_string['grid_state'] = 'Активен?';
        $lang_string['btn_modify'] = 'Редакция';
        $lang_string['btn_delete'] = 'Изтрий';
        $lang_string['create_user'] = 'Създаване на Нов Потребител';
        break;

      default:
        break;
    }
  }
?>
