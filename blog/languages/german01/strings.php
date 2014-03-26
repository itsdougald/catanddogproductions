<?php
	// German Translation(s)
	// (c) 2004 Josef Angstenberger, jtxa <at> users <dot> sourceforge <dot> net (0.4.0)

	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;

		// Language: German
		$lang_string['language'] = 'german';

		$lang_string[ 'locale' ] = array('de_DE','german');
		$lang_string['rss_locale'] = 'de-DE'; // New 0.4.8

		// ISO Charset: ISO-8859-1
		$lang_string['html_charset'] = 'ISO-8859-1';
		$lang_string['php_charset'] = 'ISO-8859-1';
		
		setlocale(LC_TIME, $lang_string['locale'] );

		// Some Global Strings

		// Menu
		$lang_string['menu_links'] = "Links";
		$lang_string['menu_home'] = "Startseite";
		$lang_string['menu_contact'] = "Kontakt";
		$lang_string['menu_stats'] = "Statistik";
		$lang_string['menu_calendar'] = "Calendar"; // New for 0.4.8
		$lang_string['menu_archive'] = "Archiv";
		$lang_string['menu_viewarchives'] = "View Archives"; // New in 0.4.7
		$lang_string['menu_menu'] = "Men�";
		$lang_string['menu_add'] = "Eintrag hinzuf�gen";
		$lang_string['menu_add_static'] = "Statische Seite hinzuf�gen";
		$lang_string['menu_upload'] = "Bild hochladen";
		$lang_string['menu_setup'] = "Einstellungen";
		$lang_string['menu_categories'] = "Kategorien";
		$lang_string['menu_info'] = "Informationen";
		$lang_string['menu_options'] = "Optionen";
		$lang_string['menu_themes'] = "Theme";
		$lang_string['menu_colors'] = "Farben";
		$lang_string['menu_change_login'] = "Benutzerdaten";
		$lang_string['menu_logout'] = "[ Abmelden ]";
		$lang_string['menu_login'] = "[ Anmelden ]";
		$lang_string['menu_most_recent'] = "Die neuesten Kommentare";
		$lang_string['menu_most_recent_entries'] = "Die neuesten Eintr�ge";
		$lang_string['menu_most_recent_trackback'] = "Die neuesten Trackbacks";
		$lang_string['menu_add_block'] = "Bl�cke";
		$lang_string['menu_emoticons'] = "Emoticons"; // New for 0.4.7
		$lang_string['menu_avatar'] = "Avatar"; // New for 0.4.7
		
		// Counter
		$lang_string['counter_today'] = "Today:"; // New for 0.4.8
		$lang_string['counter_yesterday'] = "Yesterday:"; // New for 0.4.8
		$lang_string['counter_totalsidebar'] = "Total:"; // New for 0.4.8
		$lang_string['counter_title'] = "Counter Totals"; // New for 0.4.8

		// Other
		$lang_string['home'] = "Zur�ck zur Startseite";
		$lang_string['nav_next'] = 'Weiter';
		$lang_string['nav_back'] = 'Zur�ck';
		$lang_string['search_title'] = 'Suche:';
		$lang_string['search_go'] = 'Los!';
		$lang_string['page_generated_in'] = 'Seite in %s Sekunden generiert';
		$lang_string['counter_total'] = 'Site Views: '; // New in 0.4.8
		$lang_string['read_more'] = 'Read More...'; // New in 0.4.8

		// SB Functions
		$lang_string['sb_months'] = array( 'Januar', 'Februar', 'M�rz', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember' );
		$lang_string['sb_default_title'] = 'Kein Titel';
		$lang_string['sb_default_author'] = 'Kein Autor';
		$lang_string['sb_default_footer'] = 'Keine Fu�zeile';

		$lang_string['sb_edit'] = '�ndern';
		$lang_string['sb_delete'] = 'L�schen';
		$lang_string['sb_permalink'] = 'Permalink';
		$lang_string['sb_trackback'] = 'Trackbacks';
		$lang_string['sb_relatedlink'] = 'Related Link'; // <-- New in 0.4.6

		$lang_string['sb_add_comment_btn'] = 'Kommentar hinzuf�gen';
		$lang_string['sb_comment_btn_number_first'] = true;
		$lang_string['sb_comment_btn'] = 'Kommentar';
		$lang_string['sb_comments_plural_btn_number_first'] = true;
		$lang_string['sb_comments_plural_btn'] = 'Kommentare';

		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '';
		$lang_string['sb_view_counter_post'] = ' mal angeschaut';
		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = '';
		$lang_string['sb_view_counter_plural_post'] = ' mal angeschaut';

		$lang_string['sb_add_link_btn'] = '+ Link';

		$lang_string['sb_rate_entry_btn'] = 'Hier klicken um Eintrag zu bewerten';

		// Entry Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
				$lang_string['label_subject'] = "Titel:";
				$lang_string['label_insert'] = "Spezial-Code einf�gen:";
				$lang_string['btn_bold'] = " b ";
				$lang_string['btn_italic'] = " i ";
				$lang_string['btn_image'] = "img";
				$lang_string['btn_url'] = "url";
			$lang_string['btn_readmore'] = "read more"; // 0.4.8
				$lang_string['view_images'] = "Vorschau der hochgeladenen Bilder (Bilderliste)";
				$lang_string['label_entry'] = "Eintrag:";
				$lang_string['btn_preview'] = "Vorschau";
				$lang_string['btn_post'] = "Eintrag speichern";
				$lang_string['file_name'] = "Statischer Dateiname: (keine Leerzeichen / ohne Dateiendung)";
				// Javascript Strings
				$lang_string['insert_styles'] = "Den zu formatierenden Text eingeben.";
				$lang_string['insert_image'] = "Die URL f�r das Bild eingeben.";
				$lang_string['insert_url1'] = "Den anzuzeigenden Text f�r den Link eingeben (optional).";
				$lang_string['insert_url2'] = "Die vollst�ndige URL f�r den Link eingeben.";
				$lang_string['insert_url3'] = "�ffne URL in einem neuen Fenster (optional):";
				$lang_string['form_error'] = "Bitte die Felder Betreff und Eintrag vervollst�ndigen.";
				// More Javascript Strings
				$lang_string['insert_image_optional'] = 'Optional:';
				$lang_string['insert_image_width'] = 'Breite (optional):';
				$lang_string['insert_image_height'] = 'H�he (optional):';
				$lang_string['insert_image_popup'] = 'Beim Anklicken Bild in voller Gr��e als Pop-Up anzeigen (optional):';
				$lang_string['insert_image_float'] = 'Schwebend (optional):';
		
				$lang_string['day'] = 'Day';
				$lang_string['month'] = 'Month';
				$lang_string['year'] = 'Year';
				$lang_string['hour'] = 'Hour';
				$lang_string['minute'] = 'Minute';
				$lang_string['second'] = 'Second';
		}

		switch ($page) {
			case 'add':
				// Add Entry
				$lang_string['title'] = "Eintrag hinzuf�gen";
				$lang_string['instructions'] = "<p>Bereit zum Bloggen? Formular ausf�llen und auf 'Vorschau' klicken um zu sehen, wie der Eintrag aussehen wird; Oder auf 'Eintrag speichern', um den Eintrag zu ver�ffentlichen.</p>";
				$lang_string['title_ad'] = "Trackback Pings best�tigen";
				$lang_string['instructions_ad'] = "<p>Dies sind die automatisch erkannten URLs, welche angepingt werden sollen. Unerw�nschte URLs m�ssen unten abgew�hlt werden. Danach 'OK' dr�cken, um die angew�hlten URLs anzupingen oder 'Abbruch', um �berhaupt keine anzupingen.</p>";
				$lang_string['label_tb_ping'] = "Zu sendende Trackback Pings (durch Komma getrennt)";
				$lang_string['label_tb_autodiscovery'] = "Auto-Erkennung";
				$lang_string['label_relatedlink'] = "Related Link"; // New for 0.4.6
				$lang_string['label_categories'] = "Category List";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Eintrag Vorschau / �nderung";
				$lang_string['instructions_preview'] = "<p>So sieht der Eintrag aus. Bei der Verwendung von Textformatierungen oder Bilder daran denken, die 'Tags' zu schlie�en.</p>";
				$lang_string['title_update'] = "Eintrag aktualisieren";
				$lang_string['instructions_update'] = "<p>Der Eintrag kann in dem unteren Formular ge�ndert werden. Zum Abschlu� auf 'Vorschau' oder 'Abschicken' dr�cken.</p>";
				$lang_string['ok_btn'] = "OK";
				$lang_string['cancel_btn'] = "Abbruch";
				// Error Response
				$lang_string['error'] = "<h2>Hoppla!</h2><p>Eintrag nicht gespeichert. Es gab ein Problem beim Speichern dieses Eintrags.</p>Server meldet:<br />";
				break;
			case 'add_static':
				// Add Entry
				$lang_string['title'] = "Statische Seite hinzuf�gen";
				$lang_string['instructions'] = "<p>Das Formular ausf�llen, um eine statische Seite zu erzeugen. Anders als bei einem Blog Eintrag, erscheinen statische Seiten als Links im Men�. Sie sind f�r Seiten gedacht, die immmer verf�gbar sein sollen, wie etwa: �ber mich, Kontakt, Termine, etc.</p>
				<p>Auf 'Vorschau' klicken, um zu sehen, wie der Eintrag aussehen wird, oder auf 'speichern' klicken, um den Eintrag zu speichern.</p>";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Statische Seite Vorschau / �nderung";
				$lang_string['instructions_preview'] = "<p>So sieht die statische Seite aus. Wenn man Textformatierungen oder Bilder verwendet auch daran denken, die 'Tags' zu schlie�en.</p>";
				$lang_string['title_update'] = "Statische Seite aktualisieren";
				$lang_string['instructions_update'] = "<p>Die statische Seite kann in dem unteren Formular ge�ndert werden. Zum Abschlu� auf 'Vorschau' oder 'Abschicken' dr�cken.</p>";
				$lang_string['form_error'] = "Bitte Titel, Eintrag und Dateinamen vervollst�ndigen.";	
				// Error Response
				$lang_string['error'] = "<h2>Hoppla!</h2><p>Eintrag nicht gespeichert. Es gab ein Problem beim Speichern dieses Eintrags.</p>Server meldet:<br />";
				break;
			case 'add_block':
				// Add / Manage Blocks
				$lang_string['title'] = "Bl�cke hinzuf�gen / verwalten";
				$lang_string['instructions'] = "<p>Eigenen Block hinzuf�gen.</p>";
				$lang_string['up'] = "hoch";
				$lang_string['down'] = "runter";
				$lang_string['edit'] = "�ndern";
				$lang_string['delete'] = "l�schen";
				$lang_string['block_name'] = "Block Name:";
				$lang_string['block_content'] = "Block Inhalt:";
				$lang_string['instructions_edit'] = "<p>Momentan editierter Block:</p>";
				$lang_string['instructions_modify'] = "<p>Unten klicken, um den Block zu �ndern:</p>";
				$lang_string['submit_btn_edit'] = "Block �ndern";
				$lang_string['submit_btn_add'] = "Block hinzuf�gen";
				$lang_string['form_error'] = "Bitte das Namensfeld vervollst�ndigen.";
				break;
			case 'add_link':
				$lang_string['static_pages'] = "Statische Seiten:";
				// Add / Manage Links
				$lang_string['title'] = "Links hinzuf�gen / verwalten";
				$lang_string['instructions'] = "<p>Hier lassen sich Links auf andere Seiten hinzuf�gen. Formular unten ausf�llen und auf 'Link hinzuf�gen' klicken. Mit 'hoch' und 'runter' kann man die Reihenfolge der Links �ndern. Eintr�ge lassen sich mit dem '�ndern' bearbeiten oder mit 'l�schen' entfernen.</p>";
				$lang_string['up'] = "hoch";
				$lang_string['down'] = "runter";
				$lang_string['edit'] = "�ndern";
				$lang_string['delete'] = "l�schen";
				$lang_string['link_name'] = "Link Name:";
				$lang_string['link_url'] = "Link URL (optional). Um eine Unterteilung zu erzeugen keinen Text eingeben.";
				$lang_string['instructions_edit'] = "Folgender Link wird gerade bearbeitet:";
				$lang_string['instructions_modify'] = "Unten klicken, um den Link zu �ndern:";
				$lang_string['submit_btn_edit'] = "Link �ndern";
				$lang_string['submit_btn_add'] = "Link hinzuf�gen";
				$lang_string['form_error'] = "Namensfeld bitte vervollst�ndigen.";
				break;
			case 'categories':
				// Add / Manage Categories
				$lang_string['title'] =  "Kategorien hinzuf�gen / verwalten";
				$lang_string['instructions'] = "<p>In dem unteren Formular lassen sich die Kategories �ndern und hinzuf�gen. Jeder Eintrag sollte in dem Format 'Kategoriename (eindeutige Nummer)' sein. Um Hierarchien zu erstellen, die entsprechenden Eintr�ge mit Leerzeichen einr�cken.</p>
				<p><b>Beispiel:</b><br />Allgemein (1)<br />Neuigkeit (3)<br />&nbsp;&nbsp;Ank�ndigung (6)<br />&nbsp;&nbsp;Veranstaltung (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;Verschiedenes (7)<br />Technologie (2)</p>";
				$lang_string['error'] = "Fehler";
				$lang_string['current_categories'] = "Aktuelle Kategorien";
				$lang_string['no_categories_found'] = "Keine Kategorien gefunden";
				$lang_string['category_list'] = "Liste der Kategorien:";
				$lang_string['validate'] = "�berpr�fen";
				$lang_string['submit_btn'] = "Speichern";
				break;
			case 'colors':
				// Change Colors
				$lang_string['title'] = "Farben �ndern";
				$lang_string['instructions'] = "<p>Hier k�nnen Text- und Hintergrundfarbe des Blogs ge�ndert werden.</p>
				<p>Zuerst das zu �ndernde Feld w�hlen und danach die gew�nschte Farbe ausw�hlen. Es lassen sich auch fertige Farbschemata laden und neue speichern.</p>";
				$lang_string['bg_color'] = "Seiten Hintergrund";
				$lang_string['main_bg_color'] = "Hauptseite Hintergrund";
				$lang_string['border_color'] = "Seitenrand";
				$lang_string['inner_border_color'] = "Innerer Rand";
				$lang_string['header_bg_color'] = "Kopfzeile Hintergrund";
				$lang_string['header_txt_color'] = "Kopfzeile Text";
				$lang_string['menu_bg_color'] = "Men� Hintergrund";
				$lang_string['footer_bg_color'] = "Fu�zeile Hintergrund";
				$lang_string['txt_color'] = "Text";
				$lang_string['headline_txt_color'] = "Kopfzeile Text";
				$lang_string['date_txt_color'] = "Datum Text";
				$lang_string['footer_txt_color'] = "Fu�zeile Text";
				$lang_string['link_reg_color'] = "Link Standard";
				$lang_string['link_hi_color'] = "Link Hervorgehoben";
				$lang_string['link_down_color'] = "Link Aktiv";
				// More Colors
				$lang_string['entry_bg'] = "Eintrag Hintergrund";
				$lang_string['entry_title_bg'] = "Eintrag Titel Hintergrund";
				$lang_string['entry_border'] = "Eintrag Rand";
				$lang_string['entry_title_text'] = "Eintrag Titel Text";
				$lang_string['entry_text'] = "Eintrag Text";
				$lang_string['menu_bg'] = "Men� Hintergrund";
				$lang_string['menu_title_bg'] = "Men� Titel Hintergrund";
				$lang_string['menu_border'] = "Men� Rand";
				$lang_string['menu_title_text'] = "Men� Titel Text";
				$lang_string['menu_text'] = "Men� Text";
				$lang_string['menu_link_reg_color'] = "Men� Link Standard";
				$lang_string['menu_link_hi_color'] = "Men� Link Hervorgehoben";
				$lang_string['menu_link_down_color'] = "Men� Link Aktiv";
				$lang_string['theme_doesnt_allow_colors'] = 'The currently selected theme does not allow for custom colors.';
				// Submit
				$lang_string['color_preset'] = "Farbschema laden:";
				$lang_string['scheme_name'] = "Name f�r das Farbschema:";
				$lang_string['scheme_file'] = "Dateiname f�r das Farbschema (keine Leerzeichen / ohne Dateiendung):";
				$lang_string['save_btn'] = "Farbschema speichern";
				$lang_string['form_error'] = "Bitte Namen f�r das Farbschema eingeben.";
				$lang_string['submit_btn'] = "Farbwahl speichern";
				// Error Response
				$lang_string['error'] = "<h2>Hoppla!</h2><p>Eintrag nicht gespeichert. Es gab ein Problem beim Speichern der Farbwahl.</p>Server meldet:<br />";
				break;
			case 'comments':
				// Comments
				$lang_string['name'] = "Name:"; //New in 0.4.6.2
				$lang_string['email'] = "Email:"; //New in 0.4.6.2
				$lang_string['homepage'] = "Homepage:"; //New in 0.4.6.2
				$lang_string['comment'] = "Comment:"; //New in 0.4.6.2
				$lang_string['IPAddress'] = "IP Address:";  // New for 0.4.6.2
				$lang_string['useragent'] = "User Agent:";  // New for 0.4.6.2
				$lang_string['wrote'] = "<i>On %s, %s wrote:</i><br />\n<br />\n%s"; // New for 0.4.6.2
				$lang_string['commentposted'] = "New comment posted at: ";  // New for 0.4.6.2
				$lang_string['comment_capcha'] = "Anti-Spam: Enter "; // 0.4.2
				$lang_string['title'] = "Kommentare";
				$lang_string['header'] = "Kommentar hinzuf�gen";
				$lang_string['instructions'] = "<p>Bitte das Formular ausf�llen, um Deinen Kommentar hinzuzuf�gen.</p>";
				$lang_string['comment_name'] = "Dein Name:";
				$lang_string['comment_email'] = "E-Mail:";
				$lang_string['comment_url'] = "URL:";
				$lang_string['comment_remember'] = "Meine Daten merken:";
				$lang_string['comment_text'] = "Kommentar:";
				$lang_string['post_btn'] = "Kommentar speichern";
				$lang_string['delete_btn'] = "l�schen";
				$lang_string['expired_comment1'] = "We are sorry. New comments are not allowed after "; // New for 0.4.8
				$lang_string['expired_comment2'] = " days."; // New for 0.4.8
				
				$lang_string['blacklisted'] = "Sorry, your IP address has been banned. Comments not allowed."; // New for 0.4.8
				// Error Response
				$lang_string['error_add'] = "<h2>Hoppla!</h2><p>Kommentar nicht gespeichert. Es gab ein Problem beim Speichern dieses Eintrags.</p>Server meldet:<br />";
				$lang_string['error_delete'] = "<h2>Hoppla!</h2><p>Kommentar nicht gel�scht. Es gab ein Problem beim L�schen dieses Kommentars.</p>Server meldet:<br />";
				$lang_string['form_error'] = "Bitte Namens- und Kommentarfeld vervollst�ndigen.";
				break;
			case 'delete':
				$lang_string['title'] = "Eintrag l�schen";
				$lang_string['instructions'] = "<p>Dieser Eintrag soll gel�scht werden. Bitte sicherstellen, da� dies wirklich der Eintrag ist, den man loswerden will.</p><p>Es gibt keine M�glichkeit das L�schen r�ckg�ngig zu machen...</p>";
				$lang_string['ok_btn'] = "OK";
				$lang_string['cancel_btn'] = "Nicht l�schen";
				// Error Response
				$lang_string['error'] = "<h2>Hoppla!</h2><p>Eintrag nicht gel�scht. Es gab ein Problem beim L�schen dieses Eintrags.</p>Server meldet:<br />";
				break;
			case 'delete_static':
				$lang_string['title'] = "Statische Seite l�schen";
				$lang_string['instructions'] = "Diese statische Seite soll gel�scht werden. Bitte sicherstellen, da� dies wirklich die Seite ist, die man loswerden will. Es gibt keine M�glichkeit das L�schen r�ckg�ngig zu machen...";
				$lang_string['ok_btn'] = "OK";
				$lang_string['cancel_btn'] = "Abbruch";
				// Error Response
				$lang_string['error'] = "<h2>Hoppla!</h2><p>Statische Seite nicht gel�scht. Es gab ein Problem beim L�schen dieser statischen Seite.</p>Server meldet:<br />";
				break;
			case 'image_list':
				$lang_string['title'] = "Bilderliste";
				$lang_string['instructions'] = "<p>Um die Bilder anzuschauen auf die unteren Links klicken.</p>
				<p>So wird ein Bild zum Eintrag hinzugef�gt:
				<ol>
					<li>Rechte Maustaste auf einem Link und 'Link-Adresse kopieren' ausw�hlen.</li>
					<li>Zur�ck zur &quot;Eintrag hinzuf�gen&quot; oder &quot;Eintrag �ndern&quot; Seite.</li>
					<li>Auf den 'img' Knopf dr�cken und die URL im Fenster einf�gen.</li>
				</ol></p>";
				break;
			case 'info':
				$lang_string['title'] = "Meta-Daten Informationen";
				$lang_string['instructions'] = "<p>Die folgenden Informationen werden f�r die &quot;Meta-Daten&quot; benutzt. Sie helfen den Suchmaschinen die Seite korrekt zu erkennen. Informationen k�nnen auch f�r die RSS Feeds benutzt werden.</p>";
				$lang_string['info_keywords'] = "Stichw�rter: (Liste der Stichw�rter mit Komma getrennt.)";
				$lang_string['info_description'] = "Beschreibung: (Eine Zusammenfassung oder ein freie Beschreibung der Seite.)";
				$lang_string['info_copyright'] = "Rechte: (Copyright Erkl�rung oder ein Link zu einem Dokument mit solchen Informationen.)";
				$lang_string['submit_btn'] = "Informationen speichern";
				// Error Response
				$lang_string['error'] = "<h2>Hoppla!</h2><p>Information nicht gespeichert. Es gab ein Problem beim Speichern der Information.</p>Server meldet:<br />";
				$lang_string['form_error'] = "Bitte Feld f�r Titel und Autor vervollst�ndigen.";
				break;
			case 'index':
				// Index
				break;
			case 'static':
				// Index
				break;
			case 'rating':
				$lang_string['error'] = "<h2>Hoppla!</h2><p>Information nicht gespeichert. Es gab ein Problem beim Speichern der Information.</p>Server meldet:<br />";
				break;
			case 'login':
				$lang_string['upgrade'] = "<h2>Aktualisierung</h2>";
				$lang_string['upgrade_count'] = "%n Kommentardateien ben�tigen ein Aktualisierung:";
				$lang_string['upgrade_url'] = "Aktualisiere Kommentera";
				$lang_string['title'] = "Anmeldung";
				$lang_string['instructions'] = "<p>Benutzername and Pa�wort eingeben</p>";
				$lang_string['username'] = "Benutzername:";
				$lang_string['password'] = "Pa�wort";
				$lang_string['submit_btn'] = "Anmelden";
				// Success
				$lang_string['success'] = "<h2>Anmeldung erfolgreich!</h2><p>Fr�hliches bloggen!</p>";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Hoppla!</h2><p>Anmeldung fehlgeschlagen. Benutzername und Pa�wort auf korrekte Schreibweise �berpr�fen und es nochmal probieren.</p>";
				$lang_string['form_error'] = "Benutzername und Pa�wort vervollst�ndigen.";
				break;
			case 'logout':
				$lang_string['title'] = "Abmelden";
				$lang_string['instructions'] = "<h2>Hoppla!</h2><p>Abmelden fehlgeschlagen. Cookie konnte nicht gel�scht werden. Immer noch eingeloggt?</p>";
				break;
			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Error Response
				$lang_string['error'] = "<h2>Hoppla!</h2><p>Information nicht gespeichert. Es gab ein Problem beim Speichern der Information.</p>Server meldet:<br />";
				break;
			case 'set_login':
				$lang_string['title'] = "Benutzernamen und Pa�wort �ndern";
				$lang_string['instructions'] = "<p>Im unteren Formular kann man den neuen Benutzernamen und das neue Pa�wort setzen.</p>";
				$lang_string['username'] = "Benutzername:";
				$lang_string['password'] = "Pa�wort:";
				$lang_string['submit_btn'] = "Name und Pa�wort speichern";
				// Success
				$lang_string['success'] = "<h2>Erfolgreich!</h2><p>Dein neuer Benutzername und Pa�wort sind aktiv. Fr�hliches bloggen!</p>";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Hoppla!</h2><p>Information nicht gesichert. Es gab ein Problem beim Speichern des Benutzernamens und/oder Pa�worts.</p>Server meldet:<br />";
				$lang_string['form_error'] = "Bitte vervollst�ndige das Benutzernamen- und Pa�wort-Feld.";
				$lang_string['explanation'] = "In recent versions, our password structure has changed.  There is no longer a way to update passwords
					and/or logins from inside the blog code.  In order to change your password, delete /config/password.php and make sure install*.php
					exists on the local server.  Once that is done, refresh this page (or logout).  You will be presented with the same script
					to generate your password as you did when originally creating the blog site.";  // New for 0.4.6
				break;
			case 'install00':
				$lang_string['title'] = "Willkommen";
				$lang_string['instructions'] = "<p>Danke f�r die Wahl von Simple PHP Blog!</p>";
				$lang_string['blog_choose_language'] = "Bitte die Sprache f�r die Installation ausw�hlen:";
				$lang_string['submit_btn'] = "Weiter";
				break;
			case 'install01':
				$lang_string['title'] = "Herzlich Willkommen";
				$lang_string['instructions'] = "<p>Vielen Dank f�r die Wahl von Simple PHP Blog!</p>
				<p>Simple PHP Blog ist ein schlankes Blogging System. Es ben�tigt PHP 4.1 oder neuer und Schreibberechtigung auf dem Server. Alle Informationen sind in Textdateien gespeichert, so da� keine Datenbank ben�tigt wird.</p>
				<p>Zum Beginn mu� Simple PHP Blog drei Verzeichisse ('config', 'content' und 'images') erstellen, in denen die Informationen gespeichert werden.</p>";
				$lang_string['begin'] = "[ Mit der Installation beginnen ]";
				break;
			case 'install02':
				$lang_string['title'] = "Installation";
				$lang_string['instructions'] = "<p>Versuche die Verzeichnisse 'config', 'content' und 'images' zu erstellen:</p>";
				$lang_string['folder_exists'] = "OK! Verzeichnis existiert schon. Keine �nderung gemacht...";
				$lang_string['folder_failed'] = "Hoppla! Verzeichnis konnte nicht erstellt werden...";
				$lang_string['folder_success'] = "Erfolg! Verzeichnis wurde erstellt...";
				// Help
				$lang_string['help'] = "<h2>Hoppla!</h2>
				<p>Konnte ein odere mehrere Verzeichnisse nicht erstellen! Dies geschah wahrscheinlich aus einem der folgenden Gr�nden:
				<ol>
					<li><i><b>Schreibberechtigung</b> erlaubt keine <b>Lese-/Schreib-</b>Zugriffe.</i></li>
					<li><i>Die <b>UID</b>s (Benutzer IDs) aller Dateien und Verzeichnisse stimmen nicht �berein.</i></li>
				</ol>
				</p>
				<p>Bitte diese Hinweise zur Fehlerbehebung befolgen und erneut versuchen:</p>
				<ol>
					<li>Folgende Verzeichnisse von Hand erzeugen: <b>config</b>, <b>content</b> und <b>images</b>.</li>
					<li><b>Schreibberechtigung</b> f�r die Verzeichnisse einschalten. Im FTP Programm sollten Owner, User und World <b>Lese-</b> und <b>Schreib-</b>Zugriff haben. <i>(Vielleicht mu� man hierf�r seinen Provider kontaktieren...)</i></li>
					<li>Sicherstellen, ob die <b>UID</b>s aller Dateien und Verzeichnisse gleich sind. <i>(Vielleicht mu� man hierf�r seinen Provider kontaktieren...)</i></li>
				</ol>
				</p>";
				$lang_string['try_again'] = "[ Nochmals versuchen ]";
				// Success
				$lang_string['success'] = "<h2>Erfolg!</h2><p>Verzeichnis wurden erstellt!</p>";
				$lang_string['continue'] = "[ Weiter ]";
				break;
			case 'install03':
				$lang_string['supported'] = "<b>Your web server supports the following encryption schemes:</b>";
				$lang_string['standard'] = "Standard DES Encryption: ";
				$lang_string['extended'] = "Extended DES Encryption: ";
				$lang_string['MD5'] = "MD5 Encryption: ";
				$lang_string['blowfish'] = "Blowfish Encryption: ";
				$lang_string['enabled'] = "enabled";
				$lang_string['disabled'] = "disabled";
				$lang_string['using_standard'] = "<b>Using Standard DES Encryption...</b>";
				$lang_string['using_extended'] = "<b>Using Extended DES Encryption...</b>";
				$lang_string['using_MD5'] = "<b style=\"color: green;\">Using MD5 Encryption...</b>";
				$lang_string['using_blowfish'] = "<b style=\"color: green;\">Using Blowfish Encryption...</b>";
				$lang_string['using_unknown'] = "<b>Using Unknown Encryption...</b>";
				$lang_string['salt_length'] = " <i>(Salt Length = %string)</i><br />";
				$lang_string['title'] = "Benutzernamen und Pa�wort erzeugen";
				$lang_string['instructions'] = "<p>In dem Formular bitte Benutzernamen und Pa�wort eingeben. Dieser Benutzer ist berechtigt, Einstellungen im Blog vorzunehmen und Nachrichten einzustellen.</p>";
				$lang_string['username'] = "Benutzername:";
				$lang_string['password'] = "Pa�wort:";
				$lang_string['submit_btn'] = "Namen und Pa�wort speichern";
				// Success
				$lang_string['success'] = "<h2>Gl�ckwunsch!</h2><p>Anmeldung erfolgreich. Nun k�nnen die Einstellungen vorgenommen werden. Fr�hliches bloggen!</p>";
				$lang_string['btn_setup'] = "[ Zu den Einstellungen ]";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Hoppla!</h2><p>Informationen nicht gespeichert. Es gab ein Problem beim Speichern des Benutzernamens und/oder Pa�worts.</p>Server meldet:<br />";
				$lang_string['form_error'] = "Bitte Benutzernamen- und Pa�wort-Feld vervollst�ndigen.";
				break;
			case 'install04':
				$lang_string['title'] = "Create Password File";
				$lang_string['instructions'] = "Here's the tricky part:<br />
				<ol>
				<li>Open a Text Editor application. <i>(Note Pad, Word Pad, Word, BBEdit, Pico, VI, etc...)</i></li>
				<li>Create a New Text Document.</li>
				<li>Copy and paste the code in the box below into your document.</li>
				<li>Save your file and name it <b>password.php</b> <i>(Be sure to save it in <b>text</b> or <b>plain text</b> format.)</i></li>
				<li>Open a FTP application.</li>
				<li>Upload your new <b>password.php</b> into the <b>config</b> folder on your web site.</li>
				<li>Delete the <b>password.php</b> from your hard drive.</li>
				</ol>
				";
				$lang_string['information'] = "<i>Note: If you want to reset your username and password (probably because you forgot it), delete the <b>password.php</b> file in the <b>config</b> folder on your web site. The next time you visit your site, it will walk you through this installation process again...</i>";
				$lang_string['code'] = "Code for <b>password.php</b> file:";
				$lang_string['continue'] = "[ Continue ]";
				break;
			case 'install05':
			case 'install06':
				$lang_string['title'] = "Login";
				$lang_string['instructions'] = "Please enter your Username and Password below";
				$lang_string['username'] = "Username:";
				$lang_string['password'] = "Password";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Congratulations!</h2>You are now logged in.<p />
				Click below to visit the <b>Setup</b> page, where you can personalize your new blog.<p />
				<i>Note: Now that you've completed the installation process, it is recommended that you delete the <b>installXX.php</b> files from your web site. (i.e. install00.php through install06.php)</i><p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>You are not logged in. Please verify that you typed your Username and Password correctly and try again.<p />";
				$lang_string['form_error'] = "Please complete the Username and Password fields.";
				// Success
				$lang_string['btn_setup'] = "[ Setup ]";
				$lang_string['btn_try_again'] = "[ Try Again ]";
				break;
			case 'setup':
				$lang_string['title'] = "Einstellungen";
				$lang_string['instructions'] = "<p>Hier k�nnen der Name des Blogs und die pers�nlichen Informationen ge�ndert werden.</p>
				<p>Desweiteren werden hier die grundlegenden Einstellungen f�r das Blog vorgenommen.</p>";
				$lang_string['blog_title'] = "Blog Name:";
				$lang_string['blog_author'] = "Autor:";
				$lang_string['blog_email'] = "E-Mail:";
				$lang_string['blog_avatar'] = "Avatar URL: (Leave blank for none)."; // <-- New 0.4.7
				$lang_string['blog_footer'] = "Fu�zeile:";
				$lang_string['blog_choose_language'] = "Sprache ausw�hlen:";
				$lang_string['blog_enable_comments'] = "Besucher k�nnen Kommentare schreiben";
				$lang_string['blog_comments_popup'] = "Kommentare in einem Popup Fenster darstellen";
				$lang_string['blog_enable_cache'] = "Enable Blog Entry Cache (may provide speed increase on some servers)"; // New for 0.4.6
				$lang_string['blog_enable_voting'] = "Besucher k�nnen die Eintr�ge benoten";
				$lang_string['blog_email_notification'] = "Bei neuen Kommentaren E-Mail Benachrichtigung senden";
				$lang_string['blog_send_pings'] = "Weblog &quot;pings&quot; senden";
				$lang_string['blog_ping_urls'] = "Eingabe der vollst�ndigen URL (z.B. http://rpc.weblogs.com/RPC2), die man &quot;anpingen&quot; m�chte.<br />(Es k�nnnen mit Komma getrennt mehrere Adressen eingegeben werden.)";
				$lang_string['blog_trackback_about'] = "<p>Trackback bietet eine Methode, wie Blogs sich gegenseitig benachrichtigen k�nnen.
				Mit einem Trackback Ping wird ein anderes Blog benachrichtigt, da� es von hier verlinkt wird.
				Durch die empfangenen Trackback Pings kann man sehen, wer auf das eigene Blog verweist.</p>
				<p>Man kann die URL von Hand eingeben oder versuchen, es automatisch erkennen lassen.</p>";
				$lang_string['blog_trackback_enabled'] = "Trackback aktivieren";
				$lang_string['blog_trackback_auto_discovery'] = "Auto-Erkennung von URLs in Eintr�gen aktivieren";
				$lang_string['blog_max_entries'] = "Maximalanzahl der angezeigten Eintr�ge:";
				$lang_string['blog_comment_tags'] = "In Kommentaren erlaubte Tags:";
				$lang_string['blog_gzip_about'] = "<p>Seit der Version 4.0.4 von PHP gibt es die M�glichkeit gzip (.gz) komprimierte Dateien zu lesen und zu schreiben. 
				Hiermit l��t sich Plattenplatz sparen. Um Bandbreite (Traffic) zu sparen, kann PHP au�erdem die HTML Seiten
				automatisch komprimieren. Dies geschieht f�r die Browser, welche die gzip Komprimierung unterst�tzen.</p>
				<p>Zlib Unterst�tzung ist nicht standardm��ig bei PHP aktiviert. Wenn die Ankreuzfelder deaktiviert sind,
				dann unterst�tzt diese PHP Installation keine Zlib Erweiterung.</p>";
				$lang_string['blog_enable_gzip_txt'] = "GZIP Kompression f�r Datenbank Dateien einschalten";
				$lang_string['blog_enable_gzip_output'] = "GZIP Kompression f�r HTTP Ausgabe einschalten";
				$lang_string['submit_btn'] = "Einstellungen speichern";
				// Error Response
				$lang_string['error'] = "<h2>Hoppla!</h2>Information nicht gespeichert. Es gab ein Problem beim Speichern der Information.<br /><br />Server meldet:<br />";
				$lang_string['form_error'] = "Blog Name und Autor vervollst�ndigen.";
				$lang_string['label_entry_order'] = "Reihenfolge der Eintr�ge:";
				$lang_string['select_new_to_old'] = "Neue Eintr�ge zuerst";
				$lang_string['select_old_to_new'] = "Alte Eintr�ge zuerst";
				$lang_string['label_comment_order'] = "Kommentar Reihenfolge:";
				$lang_string['cal_sunday'] = "Sunday"; // New for 0.4.6
				$lang_string['cal_monday'] = "Monday"; // New for 0.4.6
				$lang_string['label_calendar_start'] = "Calendar Week Start Day"; // New for 0.4.6
				$lang_string['blog_enable_calendar'] = "Enable Calendar / Archives Block"; // New for 0.4.6
				$lang_string['blog_enable_archives'] = "Enable Archives Block"; // New for 0.4.8
				$lang_string['blog_enable_counter'] = "Enable Counter in Sidebar"; // New for 0.4.8
				$lang_string['blog_counter_hours'] = "Number of hours to delay before hits are counted again (based on specific ip address):"; // New for 0.4.8
				$lang_string['blog_enable_login'] = "Enable Login Link (Please bookmark \"login.php\" first...)"; // New for 0.4.8
				$lang_string['blog_enable_title'] = "Enable Plain Text Title Block (Clear checkbox if the title is in the header graphic)"; // New for 0.4.6
				$lang_string['blog_enable_permalink'] = "Enable Permalink on Blog Entries"; // New for 0.4.6
				$lang_string['blog_enable_capcha'] = "Enable Anti-Spam"; // New for 0.4.8
				$lang_string['blog_footer_counter'] = "Enable Counter in Footer"; // New for 0.4.8
				$lang_string['blog_enable_capcha_image'] = "Anti-Spam Images (GD library only) / Anti-Spam Text Field"; // New for 0.4.8
				$lang_string['blog_enable_stats'] = "Enable Stats Option in Menu"; // New for 0.4.7
				$lang_string['blog_enable_lastcomments'] = "Enable Most Recent Comments Listing"; // New for 0.4.7
				$lang_string['blog_enable_lastentries'] = "Enable Most Recent Entries Listing"; // New for 0.4.7
				$lang_string['title_sidebar'] = "Sidebar"; // New in 0.4.7
				$lang_string['title_comments'] = "Comments"; // New in 0.4.7
				$lang_string['title_trackback'] = "Trackbacks"; // New in 0.4.7
				$lang_string['title_compression'] = "Compression"; // New in 0.4.7
				$lang_string['title_entries'] = "Entries"; // New in 0.4.7
				$lang_string['title_general'] = "General"; // New in 0.4.7
				$lang_string['title_language'] = "Language"; // New in 0.4.7
				$lang_string['blog_comment_days_expiry'] = "Comments Allowed For How Many Days? (0 means no expiry)"; // New in 0.4.8
				break;
			case 'trackbacks':
				// Trackbacks
				$lang_string['title'] = "Trackbacks";
				$lang_string['header'] = "Trackback URL f�r diesen Eintrag:";
				$lang_string['delete_btn'] = "Trackback entfernen";
				// Error Response
				$lang_string['error_add'] = "Problem beim Speichern der Trackback Daten.";
				break;
			case 'options':
				$lang_string['title'] = "Optionen";
				$lang_string['instructions'] = "<p>In dem unteren Formular kann man die Datums- und Zeitanzeige f�r die Blog Eintr�ge und Kommentare �ndern. Man kann 12 und 24 Stunden Zeitformat, kurzes oder langes Daum ausw�hlen. Die <b>Vorschau</b> Felder aktualisieren automatisch, um die zuk�nfitge Formatierung anzuzeigen.</p>";
				// Long Date
				$lang_string['ldate_title'] = "Langes Datum:";
				$lang_string['weekday'] = "Wochentag";
				$lang_string['month'] = "Monat";
				$lang_string['day'] = "Tag";
				$lang_string['year'] = "Jahr";
				$lang_string['none'] = "Keines davon";
				// Short Date
				$lang_string['sdate_title'] = "Kurzes Datum:";
				$lang_string['s_month'] = "Monat";
				$lang_string['s_mon'] = "MMM";
				$lang_string['s_day'] = "Tag";
				$lang_string['s_year'] = "Jahr";
				$lang_string['zero_day'] = "F�hrende Null f�r Tag";
				$lang_string['show_century'] = "Jahrhundert anzeigen";
				// Time
				$lang_string['time_title'] = "Zeitformat:";
				$lang_string['12hour'] = "12-Stunden Format";
				$lang_string['24hour'] = "24-Stunden Format";
				$lang_string['before_noon'] = "Vormittag";
				$lang_string['after_noon'] = "Nachmittag";
				// Date
				$lang_string['date_title'] = "Datumsanzeige:";
				$lang_string['long_date'] = "Langes Datum";
				$lang_string['short_date'] = "Kurzes Datum";
				$lang_string['time'] = "Zeit";
				// Menu
				$lang_string['menu_title'] = "Datumsanzeige im Men�:";
				$lang_string['long_date'] = "Langes Datum";
				$lang_string['short_date'] = "Kurzes Datum";
				// Used in multiple places
				$lang_string['zero_day'] = "F�hrende Null f�r Tag";
				$lang_string['zero_month'] = "F�hrende Null f�r Monat";
				$lang_string['zero_hour'] = "F�hrende Null f�r Stunde";
				$lang_string['separator'] = "Trennzeichen:";
				$lang_string['preview'] = "Vorschau:";
				$lang_string['server_offset'] = "Zeitabweichung des Servers:";
				// Buttons
				$lang_string['submit_btn'] = "Optionen speichern";
				// Error Response
				$lang_string['error'] = "<h2>Hoppla!</h2>Information nicht gespeichert. Es gab ein Problem beim Speichern der Information.<br /><br />Server meldet:<br />";
				break;
			case 'themes':
				$lang_string['title'] = "Standard Theme �ndern";
				$lang_string['instructions'] = "<p>Benutze das Auswahlmen� um ein anderes Theme zu aktivieren.</p>";
				// Themes
				$lang_string['choose_theme'] = "Verf�gbare Themes:";
				// Buttons
				$lang_string['submit_btn'] = "Theme aktivieren";
				// Error Response
				$lang_string['error'] = "<h2>Hoppla!</h2><p>Information nicht gespeichert. Es gab ein Problem beim Speichern der Information.</p>Server meldet:<br />";
				break;
			case 'upload_img':
				$lang_string['title'] = "Bild hochladen";
				$lang_string['instructions'] = "<p>Auf den unteren Knopf klicken, um ein Bild hochzuladen.</p>";
				$lang_string['select_file'] = "Datei ausw�hlen:";
				$lang_string['upload_btn'] = "Bild hochladen";
				// Error Response
				$lang_string['error'] = "<h2>Hoppla!</h2><p>Bild konnte nicht hochgeladen werden.</p>Server meldet:<br />";
				break;
			case 'search':
				$lang_string['title'] = "Suchergebnisse";
				$lang_string['instructions'] = "<p>Suchergebnisse f�r <b>%string</b>:</p>";
				$lang_string['not_found'] = "Nichts gefunden";
				break;
			case 'contact':
				$lang_string['title'] = "Kontakt";
				$lang_string['instructions'] = "<p>Bitte das Formular ausf�llen:</p>";
				$lang_string['form_error'] = "Bitte Betreff- und Kommentar-Felder vervollst�ndigen.";
				$lang_string['name'] = "Name:";
				$lang_string['email'] = "E-Mail:";
				$lang_string['subject'] = "Betreff:";
				$lang_string['comment'] = "Kommentar:";
				$lang_string['submit_btn'] = "Nachricht absenden";
				$lang_string['success'] = "<h2>Erfolg!</h2><p>Die Nachricht wurde versandt.</p>";
				$lang_string['failure'] = "<h2>St�rung!</h2>Ihre Anzeige ist nicht gesendet worden. Am wahrscheinlichsten wurde das Anti- Spam nicht richtig eingetragen.<p />";
				$lang_string['contact_capcha'] = "Anti-Spam: Kommen Sie herein "; // 0.4.2
				$lang_string['contactsent'] = "Contact sent through: ";  // New for 0.4.6
				$lang_string['IPAddress'] = "IP Address:";  // New for 0.4.6
				$lang_string['useragent'] = "User Agent:";  // New for 0.4.6
				$lang_string['wrote'] = "<i>On %s, %s wrote:</i><br />\n<br />\n%s"; // New for 0.4.6.2
				break;
			case 'stats':
				$lang_string['title'] = "Statistik";
				$lang_string['general'] = "Allgemein";
				$lang_string['entry_info'] = "<b>%s</b> Eintr�ge mit <b>%s</b> W�rtern verbrauchen <b>%s</b> Bytes";
				$lang_string['comment_info'] = "<b>%s</b> Kommentare mit <b>%s</b> W�rtern verbrauchen <b>%s</b> Bytes";
				$lang_string['trackback_info'] = "<b>%s</b> Trackbacks verbrauchen <b>%s</b> Bytes";
				$lang_string['static_info'] = "<b>%s</b> Statische Seiten mit <b>%s</b> W�rtern verbrauchen <b>%s</b> Bytes";
				$lang_string['most_viewed_entries'] = "Die 10 meist betrachteten Eintr�ge";
				$lang_string['most_commented_entries'] = "Die 10 meist kommentierten Eintr�ge";
				$lang_string['most_trackbacked_entries'] = "Die 10 meist verlinkten Eintrage (durch Trackbacks)";
				$lang_string['vote_info'] = "<b>%s</b> votes stored in <b>%s</b> bytes"; // 0.4.1
				$lang_string["most_voted_entries"] = "10 Most voted entries"; // 0.4.1
				$lang_string["most_rated_entries"] = "10 Most rated entries"; // 0.4.1
				break;
			case 'errorpage-nocookies':  // New for 0.4.6
				$lang_string["title"] = 'HTTP Error 403.8 - Page/Function Access Denied';
				$lang_string["errorline1"] = 'The page or function you attempted to process requires the use of cookies.';
				$lang_string["errorline2"] = 'Restore cookie functionality within your browser or protection software and attempt your request again.';
				$lang_string["clientid"] = 'Client ID: ';
				break;
			case 'errorpage':  // New for 0.4.6
				$lang_string["403.8"] = 'HTTP Error 403.8 - Page/Function Access Denied';
				$lang_string["404"] = 'HTTP Error 404 - Page/Function Does Not Exist';
				$lang_string["error_404"] = 'The page or function you attempted to process does not exist.';
				$lang_string["error_javascript"] = 'The page or function you attempted requires javascript in order to properly function.';
				$lang_string["error_emailnotsent"] = 'The message you attempted to send has failed.';
				$lang_string["error_emailnotsentcapcha"] = 'The message you attempted to send has failed because the anti-spam entry was incorrect or missing.';
				$lang_string["clientid"] = 'Client ID: ';
				break;
			case 'emoticons':  // New for 0.4.7
				$lang_string['title'] = "Admin Emoticons";
				$lang_string['instructions'] = "
					Check the emoticons you want to use. Write in the box the Tags you want 
					to be replaced by the image. Multiple tags may be used, just separated them 
					by spaces.<br /><br />
		
					For instance:<br />
					:) :-) :SMILE: :HAPPY:<br /><br />
					
					<i>(It is highly recommended that you make the Tags longer than 2 characters, 
					otherwise unexpected substitutions may occur.)</i>";
				$lang_string["upload_instructions"] = 'Upload New Emoticon:';
				$lang_string["upload_success"] = 'Success! Image uploaded successfully!';
				$lang_string["upload_error"] = 'Error! Image was not uploaded.';
				$lang_string["upload_invalid"] = 'Error! Invalid image file. Image must be a png, jpg, or gif.';
				$lang_string["save_success"] = 'Emoticon preferences saved successfully!';
				$lang_string["save_error"] = 'Error! Emoticon preferences not saved.';
				$lang_string["save_button"] = 'Save Emoticons';
				break;
			default:
				break;
		}

	}

?>
