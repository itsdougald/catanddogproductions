<?php

	// Magyar nyelvi file
	// (c) 2006 BuBuk�k Team
	//

	// Simple PHP Version: 0.4.1
	// Language Version:   0.4.1.0	

	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;
		

		// Language: Magyar
		$lang_string['language'] = 'magyar';	
		
		$lang_string['locale'] = array('hu_HU', 'hu');
		$lang_string['rss_locale'] = 'hu-HU'; // New 0.4.8

		// ISO Charset: ISO-8859-2
		$lang_string['html_charset'] = 'ISO-8859-2';
		$lang_string['php_charset'] = 'ISO-8859-1';	

		setlocale( LC_TIME, $lang_string['locale'] );		

		// Some Global Strings		

		// Menu
		$lang_string['menu_links'] = "Linkek";
		$lang_string['menu_home'] = "F�oldal";
		$lang_string['menu_contact'] = "Kapcsolat";
		$lang_string['menu_stats'] = "Statisztika";
		$lang_string['menu_archive'] = "Arh�vum";
		$lang_string[ 'menu_viewarchives' ] = "Arh�vum megtekint�se";
		$lang_string['menu_menu'] = "Men�";
		$lang_string['menu_add'] = "Hozz�ad";
		$lang_string['menu_add_static'] = "Statikus oldal hozz�ad�sa";
		$lang_string['menu_upload'] = "K�p felt�lt�se";
		$lang_string['menu_setup'] = "Be�ll�t�sok";
		$lang_string['menu_categories'] = "Kateg�ri�k";
		$lang_string['menu_info'] = "Meta elemek";
		$lang_string['menu_options'] = "D�tum &amp; Id�";
		$lang_string['menu_themes'] = "T�m�k";
		$lang_string['menu_colors'] = "Sz�nek";
		$lang_string['menu_change_login'] = "Bejelentkez�s v�ltoztat�sa";
		$lang_string['menu_logout'] = "Kijelentkez�s";
		$lang_string['menu_login'] = "Admin Bejelentkez�s";
		$lang_string['menu_most_recent'] = "Leg�jabb hozz�sz�l�sok";
		$lang_string['menu_most_recent_entries'] = "Leg�jabb bejegyz�sek";
		$lang_string['menu_most_recent_trackback'] = "Most Recent Trackbacks";
		$lang_string['menu_add_block'] = "Blokkok";
		$lang_string['menu_emoticons'] = "Emotikonok"; // New for 0.4.7
		$lang_string['menu_avatar'] = "Avatar"; // New for 0.4.7
		$lang_string['menu_name'] = "N�v: ";
		$lang_string['menu_pass'] = "Jelsz�: ";

		// Other
		$lang_string['home'] = 'Vissza a f�oldalra';
		$lang_string['nav_next'] = 'K�vetkez�';
		$lang_string['nav_back'] = 'El�z�';
		$lang_string['search_title'] = 'Keres�s';
		$lang_string['search_go'] = 'Mehet';
		$lang_string['page_generated_in'] = 'Az oldal %s m�sodperc alatt gener�l�dott';		

		// SB Functions
		$lang_string['sb_months'] = array( 'Janu�r', 'Febru�r', 'M�rcius', '�prilis', 'M�jus', 'J�nius', 'J�lius', 'Augusztus', 'Szeptember', 'Oct�ber', 'November', 'December' );
		$lang_string['sb_default_title'] = 'Nincs c�m';
		$lang_string['sb_default_author'] = 'Nincs szerz�';
		$lang_string['sb_default_footer'] = 'Nincs l�bjegyzet';

		$lang_string['sb_edit'] = 'szerkeszt';
		$lang_string['sb_delete'] = 't�r�l';
		$lang_string['sb_permalink'] = 'permalink';
		$lang_string['sb_trackback'] = 'trackbackek';
		$lang_string['sb_relatedlink'] = 'kapcsol�d� link'; // <-- New in 0.4.6		

		$lang_string['sb_add_comment_btn'] = 'hozz�sz�l�s';
		$lang_string['sb_comment_btn_number_first'] = true;
		$lang_string['sb_comment_btn'] = 'hozz�sz�l�s';
		$lang_string['sb_comments_plural_btn_number_first'] = true;
		$lang_string['sb_comments_plural_btn'] = 'hozz�sz�l�s';		

		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '';
		$lang_string['sb_view_counter_post'] = ' megtekint�s';

		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = '';
		$lang_string['sb_view_counter_plural_post'] = ' megtekint�s';		

		$lang_string['sb_add_link_btn'] = 'Linkek m�dos�t�sa';
		$lang_string['sb_rate_entry_btn'] = 'Bejegyz�s oszt�lyz�sa';		

		// Entry Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
			$lang_string['label_subject'] = "T�rgy:";
			$lang_string['label_insert'] = "Speci�lis karakter:";
			$lang_string['btn_bold'] = " b ";
			$lang_string['btn_italic'] = " i ";
			$lang_string['btn_image'] = "img";
			$lang_string['btn_url'] = "url";
			$lang_string['view_images'] = "Felt�lt�tt k�pek beilleszt�se";
			$lang_string['label_entry'] = "Bejegyz�s:";
			$lang_string['btn_preview'] = "&nbsp;Megtekint�s&nbsp;";
			$lang_string['btn_post'] = "&nbsp;K�ld�s&nbsp;";
			$lang_string['file_name'] = "Statikus File Neve: (sz�k�z�k �s kiterjeszt�s n�lk�l)";

			// Javascript Strings
			$lang_string['insert_styles'] = "�rd be a form�zand� sz�veget:";
			$lang_string['insert_image'] = "�rd be a k�p URL-�t:";
			$lang_string['insert_url1'] = "�rd be a linknak szolg�l� sz�veget (Opcion�lis):";
			$lang_string['insert_url2'] = "�rd be a k�p teljes URL-�t:";
			$lang_string['insert_url3'] = "URL-t �j ablakban nyit (Opcion�lis):";
			$lang_string['form_error'] = "T�ltsd ki a T�rgy �s Bevitel mez�ket.";	

			// More Javascript Strings
			$lang_string['insert_image_Opcion�lis'] = 'Option�lis:';
			$lang_string['insert_image_width'] = 'Sz�less�g (Opcion�lis):';
			$lang_string['insert_image_height'] = 'Magass�g (Opcion�lis):';
			$lang_string['insert_image_popup'] = 'Teljes m�retben mutassa, ha �j ablakban ny�lik (Opcion�lis):';
			$lang_string['insert_image_float'] = 'Lebeg� (Opcion�lis):';
		
			$lang_string['day'] = 'Nap';
			$lang_string['month'] = 'H�nap';
			$lang_string['year'] = '�v';
			$lang_string['hour'] = '�ra';
			$lang_string['minute'] = 'Perc';
			$lang_string['second'] = 'M�sodperc';
		}	

		switch ($page) {
			case 'add':
				// Add Entry
				$lang_string['title'] = "Sz�veg bevitele";
				$lang_string['instructions'] = "K�sz vagy a blogol�sra? T�ltsd ki az �vet �s kattints az 'El�n�zetre', hogy megl�sd, hogy n�znek ki a bevitt adatok, vagy kattints a 'K�ld�sre', hogy mentsd a bevitt adatokat.";
				$lang_string['title_ad'] = "Trackback Pingek j�v�hagy�sa";
				$lang_string['instructions_ad'] = "These are the Auto-Discovered URIs you're about to ping. If you do not want to ping a certain URI, uncheck it below. Then press the 'OK' button to ping the checked URIs or press 'Cancel' to not ping at all.";
				$lang_string['label_tb_ping'] = "Trackback ping(ek) k�ld�se (vessz�vel elv�lasztva)";
				$lang_string['label_tb_autodiscovery'] = "�nfelt�r�s";
				$lang_string['label_relatedlink'] = "Kapcsol�d� link";
				$lang_string['label_categories'] = "Kateg�ria lista";

				// Preview / Edit Entry
				$lang_string['title_preview'] = "El�n�zet / Bejegyz�s szerkeszt�se";
				$lang_string['instructions_preview'] = "�gy n�z ki a bejegyz�sed. Ha sz�vegst�lusokat alkalmazol, ne felejtsd el bez�rni az �sszes jel�l�elemet.";
				$lang_string['title_update'] = "A bejegyz�s friss�t�se";
				$lang_string['instructions_update'] = "Az al�bbi k�rd��v seg�ts�g�vel v�ltoztathatod a bejegyz�sedet. Kattints az 'El�n�zetre' vagy a 'K�ld�sre', ha k�szen vagy.";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;M�gsem&nbsp;";

				// Hiba Response
				$lang_string['error'] = "<h2>Hopp�, vazze!</h2>A bejegyz�s nincs elmentve. Probl�ma ad�dott a ment�skor.<br /><br />A szerver �zenete:<br />";
				break;
			case 'add_static':
				// Add Entry
				$lang_string['title'] = "Statikus oldal hozz�ad�sa";
				$lang_string['instructions'] = "T�ltsd ki a k�rd��vet a statikus oldal hozz�ad�s�hoz. A t�bbi blogbejegyz�st�l elt�r�en, a statikus bejegyz�sek a jobb oldali men�ben jelennek meg.";

				// Preview / Edit Entry
				$lang_string['title_preview'] = "El�n�zet / Statikus oldal m�dos�t�sa";
				$lang_string['instructions_preview'] = "�gy n�z ki a statikus oldalad. Ha sz�vegst�lusokat vagy k�peket alkalmazol, ne felejtsd el bez�rni az �sszes jel�l�elemet.";
				$lang_string['title_update'] = "Statikus oldal friss�t�se";
				$lang_string['instructions_update'] = "Itt jav�thatod a bejegyz�sedet. Kattints az 'El�n�zetre' vagy a 'K�ld�sre', ha k�szen vagy.";
				$lang_string['form_error'] = "T�ltsd ki a T�rgy, Bejegyz�s �s Filen�v mez�ket!";	

				// Hiba Response
				$lang_string['error'] = "<h2>Hopp�, vazze!</h2>A bejegyz�s nincs elmentve. Probl�ma ad�dott a ment�skor.<br /><br />A szerver �zenete:<br />";
				break;
			case 'add_block':

				// Add / Manage Blocks
				$lang_string['title'] = "Blokkok hozz�ad�sa / kezel�se";
				$lang_string['instructions'] = "Saj�t blokkok hozz�ad�sa";
				$lang_string['up'] = "fel";
				$lang_string['down'] = "le";
				$lang_string['edit'] = "szerkeszt";
				$lang_string['delete'] = "t�r�l";
				$lang_string['block_name'] = "Blokk neve:";
				$lang_string['block_content'] = "Blokk tartalma:";
				$lang_string['instructions_edit'] = "Pillanatnyilag ezt a blokkot szerkeszted:";
				$lang_string['instructions_modify'] = "Kattints ide a blokk szerkeszt�s�hez:";
				$lang_string['submit_btn_edit'] = "Blokk szerkeszt�se";
				$lang_string['submit_btn_add'] = "Blokk hozz�ad�sa";
				$lang_string['form_error'] = "T�ltsd ki a N�v mez�t.";
				break;
			case 'add_link':
				$lang_string['static_pages'] = "Statikus oldalak:";

				// Add / Manage Links
				$lang_string['title'] = "Linkek hozz�ad�sa / kezel�se";
				$lang_string['instructions'] = "Saj�t linkek hozz�ad�sa m�s oldalakhoz. T�ltsd ki az al�bbi k�rd��vet, �s kattints a 'Link hozz�ad�s�ra'. Kattints a 'Fel' vagy 'Le' gombokra, hogy megv�ltoztasd a linkok sorrendj�t. Kattints a 'Szerkeszt�s' gombra a link szerkeszt�s�hez. Kattints a 'T�rl�s' gombra a link t�rl�s�hez.";
				$lang_string['up'] = "fel";
				$lang_string['down'] = "le";
				$lang_string['edit'] = "szerkeszt";
				$lang_string['delete'] = "t�r�l";
				$lang_string['link_name'] = "A link neve:";
				$lang_string['link_url'] = "A link c�me: (Opcion�lis. Hagyd �resen, hogy megjelenjen egy elv�laszt�.)";
				$lang_string['instructions_edit'] = "Pillanatnyilag ezt a linket szerkeszted:";
				$lang_string['instructions_modify'] = "Kattints a link szerkeszt�s�hez:";
				$lang_string['submit_btn_edit'] = "Link szerkeszt�se";
				$lang_string['submit_btn_add'] = "Link hozz�ad�sa";
				$lang_string['form_error'] = "T�ltsd ki a N�v mez�t.";
				break;
			case 'categories':

				// Add / Manage Links
				$lang_string['title'] = "Kateg�ri�k hozz�ad�sa / kezel�se";
				$lang_string['instructions'] = "Kateg�ri�k hozz�ad�s�hoz �s szerkeszt�s�hez haszn�ld az al�bbi k�rd��vet. Mindegyik kateg�riaelemnek 'kateg�rian�v (sz�m)' form�ban kell lennie. Sz�k�z�kkel k�sz�thetsz hierarchikus list�t.<br /><br /><b>P�ld�ul:</b><br />�ltal�nos (1)<br />H�rek (3)<br />&nbsp;&nbsp;�nnepek (6)<br />&nbsp;&nbsp;Esem�nyek (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;K�l�nf�le (7)<br />Tehnol�gia (2)<br />";
				$lang_string['error'] = "Hiba";
				$lang_string['current_categories'] = "Jelenlegi kateg�ri�k";
				$lang_string['no_categories_found'] = "Nincsenek kateg�ri�k";
				$lang_string['category_list'] = "Kateg�rialista:";
				$lang_string['validate'] = "�rv�nyes�t";
				$lang_string['submit_btn'] = "Mehet";
				break;
			case 'colors':
				// Change Colors
				$lang_string['title'] = "Sz�nek cser�je";
				$lang_string['instructions'] = "Itt cser�lheted a sz�vegek �s h�tterek sz�neit. El�sz�r v�laszd ki a mez�t, majd haszn�ld a sz�npalett�t a sz�nek kever�s�hez. Az �rt�k automatikusan v�ltozik kattint�skor.";
				$lang_string['bg_color'] = "Az oldal h�ttere";
				$lang_string['main_bg_color'] = "A f�oldal h�ttere";
				$lang_string['border_color'] = "Az oldal szeg�lye";
				$lang_string['inner_border_color'] = "Bels� szeg�ly";
				$lang_string['header_bg_color'] = "A fejl�c h�ttere";
				$lang_string['header_txt_color'] = "A fejl�c sz�vege";
				$lang_string['menu_bg_color'] = "A men� h�ttere";
				$lang_string['footer_bg_color'] = "A l�bl�c h�ttere";
				$lang_string['txt_color'] = "F�sz�veg";
				$lang_string['headline_txt_color'] = "A c�msor sz�vege";
				$lang_string['date_txt_color'] = "A d�tum sz�vege";
				$lang_string['footer_txt_color'] = "A l�bl�c sz�vege";
				$lang_string['link_reg_color'] = "Alap�rtelmezett link";
				$lang_string['link_hi_color'] = "Fedett link";
				$lang_string['link_down_color'] = "Akt�v link";

				// More Colors
				$lang_string['entry_bg'] = "A bejegyz�s h�ttere";
				$lang_string['entry_title_bg'] = "A bejegyz�s c�m�nek h�ttere";
				$lang_string['entry_border'] = "A bejegyz�s szeg�lye";
				$lang_string['entry_title_text'] = "A bejegyz�s c�m�nek sz�vege";
				$lang_string['entry_text'] = "A bejegyz�s sz�vege";
				$lang_string['menu_bg'] = "A men� h�ttere";
				$lang_string['menu_title_bg'] = "A men� c�m�nek h�ttere";
				$lang_string['menu_border'] = "A men� szeg�lye";
				$lang_string['menu_title_text'] = "A men� c�m�nek sz�vege";
				$lang_string['menu_text'] = "A men� sz�vege";
				$lang_string['menu_link_reg_color'] = "Alap�rtelmezett men�link";
				$lang_string['menu_link_hi_color'] = "Fedett men�link";
				$lang_string['menu_link_down_color'] = "Akt�v men�link";

				// Mehet
				$lang_string['color_preset'] = "Sz�ns�m�k:";
				$lang_string['scheme_name'] = "�rj be saj�t s�manevet:";
				$lang_string['scheme_file'] = "�rd be a s�ma nev�t: (helyek �s kiterjeszt�sek n�lk�l)";
				$lang_string['save_btn'] = "&nbsp;Ment�s&nbsp;";
				$lang_string['form_error'] = "�rj be saj�t s�manevet.";
				$lang_string['submit_btn'] = "Mehet";
				$lang_string['theme_doesnt_allow_colors'] = 'A jelenleg kiv�lasztott t�ma nem enged�lyez saj�t sz�neket.';

				// Hiba Response
				$lang_string['error'] = "<h2>Hopp�, vazze!</h2>Az inform�ci� nincs elmentve. Probl�ma ad�dott a ment�skor.<br /><br />A szerver �zenete:<br />";
				break;
			case 'comments':
				// Comments
				$lang_string['name'] = "N�v:"; //New in 0.4.6.2
				$lang_string['email'] = "Email:"; //New in 0.4.6.2
				$lang_string['homepage'] = "Honlap:"; //New in 0.4.6.2
				$lang_string['comment'] = "Megjegyz�s:"; //New in 0.4.6.2
				$lang_string['IPAddress'] = "IP c�m:";  // New for 0.4.6.2
				$lang_string['useragent'] = "A felhaszn�l� programa:";  // New for 0.4.6.2
				$lang_string['wrote'] = "<i>%s -kor, %s ezt �rta:</i><br />\n<br />\n%s"; // New for 0.4.6.2
				
				$lang_string['comment_capcha'] = "Anti-Spam: �rd be ezt a sz�mot: "; // 0.4.2
				$lang_string['title'] = "Megjegyz�sek";
				$lang_string['header'] = "Megjegyz�s hozz�ad�sa";
				$lang_string['instructions'] = "T�ltsd ki az al�bbi k�rd��vet a megjegyz�s hozz�ad�s�hoz.";
				$lang_string['comment_name'] = "Neved:";
				$lang_string['comment_email'] = "Email:";
				$lang_string['comment_url'] = "URL:";
				$lang_string['commentposted'] = "�j megjegyz�s k�ld�se ekkor: ";  // New for 0.4.6.2
				$lang_string['comment_remember'] = "Jegyezz meg:";
				$lang_string['comment_text'] = "Megjegyz�s:";
				$lang_string['post_btn'] = "&nbsp;Megjegyz�s k�ld�se&nbsp;";
				$lang_string['delete_btn'] = "t�r�l";

				// Hiba Response
				$lang_string['error_add'] = "<h2>Hopp�, vazze!</h2>A megjegyz�s nincs elmentve. Probl�ma ad�dott a megjegyz�s ment�se k�zben.<br /><br />A szerver �zenete:<br />";
				$lang_string['error_delete'] = "<h2>Hopp�, vazze!</h2>A megjegyz�s nincs t�r�lve. Probl�ma ad�dott a megjegyz�s t�rl�se k�zben.<br /><br />A szerver �zenete:<br />";
				$lang_string['form_error'] = "T�ltsd ki a N�v, Megjegyz�s �s Anti-Spam mez�ket.";
				break;

			case 'delete':
				$lang_string['title'] = "Bejegyz�s t�rl�se";
				$lang_string['instructions'] = "Ezt a bejegyz�st akarod t�r�lni. Gondold meg, biztos vagy-e benne!";
				$lang_string['ok_btn'] = "&nbsp;Ok&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;M�gsem&nbsp;";
				// Hiba Response
				$lang_string['error'] = "<h2>Hopp�, vazze!</h2>A bejegyz�s nem lett t�r�lve.<br /><br />A szerver �zenete:<br />";
				break;
			case 'delete_static':
				$lang_string['title'] = "Statikus oldal t�rl�se";
				$lang_string['instructions'] = "Ezt a statikus oldalt akarod t�r�lni. Gondold meg, biztos vagy-e benne!";
				$lang_string['ok_btn'] = "&nbsp;Ok&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;M�gsem&nbsp;";
				// Hiba Response
				$lang_string['error'] = "<h2>Hopp�, vazze!</h2>A bejegyz�s nem lett t�r�lve.<br /><br />A szerver �zenete:<br />";
				break;
			case 'image_list':
				$lang_string['title'] = "K�plista";
				$lang_string['instructions'] = "Kattints az al�bbi linkre a k�pek megtekint�s�hez.<br /><br />K�p hozz�ad�s�hoz a bejegyz�shez:<br />1) CTRL-kattint�s a linkre �s v�laszd a 'Link v�g�lapra m�sol�s�t'.<br />2) T�rj vissza a bejegyz�shez vagy a szerkeszt�shez.<br />3) Kattints a 'K�p' gombra, �s illeszd be az URL az ablakba.";
				break;
			case 'info':
				$lang_string['title'] = "Meta-inform�ci�";
				$lang_string['instructions'] = "Az al�bbi adatok metainform�ci�k, amelyek a keres�motorokat seg�tik, hogy megtal�lj�k az oldalt.";
				$lang_string['info_keywords'] = "Kulcsszavak: (vessz�vel elv�lasztva)";
				$lang_string['info_description'] = "Le�r�s: (Az oldalad k�r�l�r�sa.)";
				$lang_string['info_copyright'] = "Jogok: (M�sol�sv�delem, stb.)";
				$lang_string['submit_btn'] = "Mehet";
				// Hiba Response
				$lang_string['error'] = "<h2>Hopp�, vazze!</h2>Az inform�ci� nincs mentve. Probl�ma ad�dott az inform�ci� ment�se k�zben.<br /><br />A szerver �zenete:<br />";
				$lang_string['form_error'] = "T�ltsd ki a C�m �s Felad� mez�ket.";
				break;
			case 'index':
				// Index
				break;
			case 'static':
				// Index
				break;
			case 'rating':
				$lang_string['error'] = "<h2>Hopp�, vazze!</h2>Az inform�ci� nincs mentve. Probl�ma ad�dott az inform�ci� ment�se k�zben.<br /><br />A szerver �zenete:<br />";
				break;
			case 'login':
				$lang_string['upgrade'] = "<h2>Friss�t�s</h2>"; // New 0.3.8
				$lang_string['upgrade_count'] = "%n megjegyz�st kell friss�teni:"; // New 0.3.8
				$lang_string['upgrade_url'] = "Megjegyz�sek friss�t�se"; // New 0.3.8
				$lang_string['title'] = "Admin Bejelentkez�s";
				$lang_string['instructions'] = "�rd be a felhaszn�l�nevedet �s a jelsz�t.";
				$lang_string['username'] = "Felhaszn�l�n�v:";
				$lang_string['password'] = "Jelsz�";
				$lang_string['submit_btn'] = "Mehet";
				// Success
				$lang_string['success'] = "<h2>Siker!</h2>Be vagy jelentkezve! �lvezd a blogodat!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Hopp�, vazze!</h2>Nem vagy bejelentkezve! Ellen�rizd, hogy helyesen �rtad-e be a felhaszn�l�nevedet �s a jelszavadat!<p />";
				$lang_string['form_error'] = "�rd be a felhaszn�l�nevedet �s a jelsz�t.";
				break;
			case 'logout':
				$lang_string['title'] = "Kijelentkez�s";
				$lang_string['instructions'] = "<h2>Hopp�, vazze!</h2>A kijelentkez�s nem siker�lt. A cookiet nem lehet t�r�lni. Mi�rt vagy m�g mindig bejelentkezve?<p />";
				break;
			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Hiba Response
				$lang_string['error'] = "<h2>Hopp�, vazze!</h2>Az inform�ci� nincs mentve. Probl�ma ad�dott a bejegyz�s ment�se k�zben.<br /><br />A szerver �zenete:<br />";
				break;
			case 'set_login':
				$lang_string['title'] = "Felhaszn�l�n�v �s jelsz� cser�je";
				$lang_string['instructions'] = "Az al�bbi k�rd��v seg�ts�g�vel v�ltoztathatod a felhaszn�l�nevedet �s jelszavadat. �rd be a felhaszn�l�nevet �s a jelsz�t, amit haszn�lni szeretn�l.";
				$lang_string['username'] = "Felhaszn�l�n�v:";
				$lang_string['password'] = "Jelsz�:";
				$lang_string['submit_btn'] = "Mehet";
				// Success
				$lang_string['success'] = "<h2>Siker!</h2>A felhaszn�l�neved �s jelszavad akt�v! �lvezd a blogodat!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Hopp�, vazze!</h2>Az inform�ci� nincs mentve. Probl�ma ad�dott a felhaszn�l�n�v �s/vagy jelsz� ment�se k�zben.<br /><br />A szerver �zenete:<br />";
				$lang_string['form_error'] = "�rd be a felhaszn�l�nevedet �s a jelsz�t.";
				$lang_string['explanation'] = "Az ut�bbi verzi�kban a jelsz�strukt�r�nk megv�ltozott. Ezent�l nincs m�d a jelszavak friss�t�s�re a blog k�dj�n bel�l. Ha v�ltoztatni akarod a jelsz�t, t�r�ld a /config/password.php file-t, �s ellen�rizd, hogy az install*.php f�jlok l�teznek a szerveren. Amint ez k�sz, friss�tsd ezt az oldalt, vagy jelentkezz ki. Azt az oldalt fogod kapni, amit el�sz�r is kapt�l, mikor megadtad az eredeti jelsz�t.";  // New for 0.4.6
				break;
			case 'install00':
				$lang_string['title'] = "Isten hozott";
				$lang_string['instructions'] = "K�sz�nj�k, hogy a Simple PHP Blogot haszn�lod!";
				$lang_string['blog_choose_language'] = "V�lassz nyelvet:";
				$lang_string['submit_btn'] = "Mehet";
				break;
			case 'install01':
				$lang_string['title'] = "Isten hozott";
				$lang_string['instructions'] = "
				K�sz�nj�k, hogy a Simple PHP Blogot v�lasztottad!<br /><br />A Simple PHP Blog egy egyszer� blogrendszer. PHP 4.1-et vagy jobbat, valamint �r�sjogot ig�nyel a szerveren. Minden inform�ci� egyszer� f�jlokban t�rol�dik, teh�t nincs sz�ks�g adatb�zisra.<br /><br />
				Els� l�p�sk�nt a Simple PHP Blog 3 k�nyvt�rat fog k�sz�teni (<b>config</b>, <b>content</b>, �s <b>images</b>), amelyekben az inform�ci�kat t�rolja majd. Ut�na megadhatod a felhaszn�l�nevet �s a jelsz�t, majd kezdheted a blogol�st!<br /><br />
				<b>Kattints al�bb a telep�t�s elkezd�s�hez:</b>";
				$lang_string['begin'] = "[ A telep�t�s kezd�se ]";
				break;
			case 'install02':
				$lang_string['title'] = "Telep�t�s";
				$lang_string['instructions'] = "A <b>config</b>, <b>content</b>, �s <b>images</b> k�nyvt�rak l�trehoz�sa:";
				$lang_string['folder_exists'] = "OK! A k�nyvt�r m�r l�tezik. Nem t�rt�nt v�ltoztat�s.";
				$lang_string['folder_failed'] = "Hopp�, vazze! Nem j�tt l�tre a k�nyvt�r...";
				$lang_string['folder_success'] = "Siker! A k�nyvt�r l�trej�tt...";
				// Help
				$lang_string['help'] = "
				<h2>Hopp�, vazze!</h2>
				Egy vagy t�bb k�nyvt�r nem j�tt l�tre!<br /><br />Tal�n ezek miatt van:<br />
				<ol>
				<li><b>Nincsenek enged�lyezve az <b>olvas�si/�r�si</b> jogok.</li>
				<li>Minden file �s k�nyvt�r <b>felhaszn�l�i azonos�t�ja</b> meg kell, hogy egyezzen.</li>
				</ol>
				K�vesd az al�bbi hibaelh�r�t�si tan�csokat, �s <b>pr�b�ld �jra</b>:<br />
				<ol>
				<li>Manu�lisan hozd l�tre ezeket a k�nyvt�rakat: <b>config</b>, <b>content</b>, and <b>images</b>.</li>
				<li>Enged�lyezett <b>�r�sjogok</b> a k�nyvt�rakon: az FTP programodban, a tulajdonosnak, a felhaszn�l�nak, �s a vil�gnak is legyenek <b>olvas�si</b> �s <b>�r�si</b> jogai. <i>(Esetleg l�pj kapcsolatba a rendszeradminisztr�torral...)</i></li>
				<li>Ellen�rizd, hogy minden file �s k�nyvt�r felhaszn�l�i azonos�t�ja megegyezik. <i>(Esetleg l�pj kapcsolatba a rendszeradminisztr�torral...)</i></li>
				</ol>";
				$lang_string['try_again'] = "[ Pr�b�ld �jra ]";
				// Success
				$lang_string['success'] = "<h2>Siker!</h2>A k�nyvt�rak sikeresen l�trej�ttek!<p /><b>Kattints al�bb a folytat�shoz:</b>";
				$lang_string['continue'] = "[ Folytat�s ]";
				break;
			case 'install03':
				$lang_string['supported'] = "<b>A webszervered az al�bb titkos�t�sokat ismeri:</b>";
				$lang_string['standard'] = "Standard DES Titkos�t�s: ";
				$lang_string['extended'] = "B�v�tett DES Titkos�t�s: ";
				$lang_string['MD5'] = "MD5 Titkos�t�s: ";
				$lang_string['blowfish'] = "Blowfish Titkos�t�s: ";
				$lang_string['enabled'] = "enged�lyezve";
				$lang_string['disabled'] = "tiltva";
				$lang_string['using_standard'] = "<b>Standard DES Titkos�t�s haszn�lata...</b>";
				$lang_string['using_extended'] = "<b>Extended DES Titkos�t�s haszn�lata...</b>";
				$lang_string['using_MD5'] = "<b style=\"color: green;\">MD5 Titkos�t�s... haszn�lata</b>";
				$lang_string['using_blowfish'] = "<b style=\"color: green;\">Blowfish Titkos�t�s haszn�lata...</b>";
				$lang_string['using_unknown'] = "<b>Ismeretlen Titkos�t�s haszn�lata...</b>";
				$lang_string['salt_length'] = " <i>(Salt hossz = %string)</i><br />";
				$lang_string['title'] = "Felhaszn�l�n�v �s jelsz� l�trehoz�sa";
				$lang_string['instructions'] = "Az al�bbi k�rd��vvel hozz l�tre felhaszn�l�nevet �s jelsz�t.";
				$lang_string['username'] = "Felhaszn�l�n�v:";
				$lang_string['password'] = "Jelsz�:";
				$lang_string['submit_btn'] = "Mehet";
				// Success
				$lang_string['success'] = "<h2>Gratula!</h2>Be vagy jelentkezve. Kattints al�bb a Telep�t�shez, ahol elnevezheted a blogot. �lvezd a blogodat!<p />";
				$lang_string['btn_setup'] = "[ Telep�t�s ]";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Hopp�, vazze!</h2>Az inform�ci� nincs mentve. Probl�ma ad�dott a felhaszn�l�n�v �s/vagy a jelsz� ment�se k�zben.<br /><br />A szerver �zenete:<br />";
				$lang_string['form_error'] = "�rd be a felhaszn�l�nevedet �s a jelsz�t.";
				break;
			case 'install04':
				$lang_string['title'] = "A jelsz�t tartalmaz� file l�trehoz�sa";
				$lang_string['instructions'] = "Itt a tr�kk�s r�sze:<br />
				<ol>
				<li>Nyiss meg egy sz�vegszerkeszt�-alkalmaz�st: <i>(NotePad, WordPad, Word, BBEdit, Pico, VI, stb...)</i></li>
				<li>Hozz l�tre egy �j �res dokumentumot.</li>
				<li>M�sold �s illeszd be az al�bbi k�dot a dokumentumba.</li>
				<li>Mentsd el a file-t <b>password.php</b> n�ven. <i>(Figyelj oda, hogy sima sz�vegk�nt mentsd el!)</i></li>
				<li>Nyisd meg az FTP programodat.</li>
				<li>T�ltsd fel a <b>password.php</b>-t a <b>config</b> k�nyvt�rba.</li>
				<li>T�r�ld a <b>password.php</b>-t a merevlemezedr�l.</li>
				</ol>
				";
				$lang_string['code'] = "A <b>password.php</b> k�dja:";
				$lang_string['information'] = "<i>Megjegyz�s: Ha ki akarod cser�lni a felhaszn�l�neved �s a jelszavad, t�r�ld a <b>password.php</b> file-t a <b>config</b> k�nyvt�rb�l. Amikor legk�zelebb l�togatsz az oldalra, �jra v�gigmehetsz a telep�t�si folyamaton.</i>";
				$lang_string['continue'] = "[ Folytat�s ]";
				break;
			case 'install05':
			case 'install06':
				$lang_string['title'] = "Admin Bejelentkez�s";
				$lang_string['instructions'] = "�rd be a felhaszn�l�neved �s a jelszavad:";
				$lang_string['username'] = "Felhaszn�l�n�v:";
				$lang_string['password'] = "Jelsz�";
				$lang_string['submit_btn'] = "Mehet";
				// Success
				$lang_string['success'] = "<h2>Gratula!</h2>Be vagy jelentkezve.<p />
				Kattints <b>IDE</b>, hogy szem�lyre szabd a blogot.<p />
				<i>Megjegyz�s: Most, hogy a telep�t�s befejez�d�tt, aj�nlott t�r�lni a <b>installXX.php</b> file-okat a weboldalr�l. (install00.php -> install06.php)</i><p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Hopp�, vazze!</h2>Nem vagy bejelentkezve. Ellen�rizd, hogy helyesen �rtad-e be a felhaszn�l�nevedet �s a jelszavadat, majd pr�b�ld �jra.<p />";
				$lang_string['form_error'] = "�rd be a felhaszn�l�nevedet �s a jelsz�t.";
				// Success
				$lang_string['btn_setup'] = "[ Telep�t�s ]";
				$lang_string['btn_try_again'] = "[ Pr�b�ld �jra ]";
				break;
			case 'setup':
				$lang_string['title'] = "Telep�t�s";
				$lang_string['instructions'] = "Al�bb cser�lheted a blogod nev�t �s a szem�lyes inform�ci�kat.";
				$lang_string['blog_title'] = "A blog neve:";
				$lang_string['blog_author'] = "Szerz�:";
				$lang_string['blog_email'] = "Email: (Vessz�vel v�laszd el az email-c�meket - ha �resen hagyod, a Kapcsolat opci� hat�s�t veszti)"; // Updated 0.4.7
				$lang_string['blog_avatar'] = "Avatar URL: (Hagyd �resen, ha nincs)."; // <-- New 0.4.7
				$lang_string['blog_footer'] = "L�bl�c:";
				$lang_string['blog_choose_language'] = "V�lassz nyelvet:";
				$lang_string['blog_enable_comments'] = "Komment�rok enged�lyez�se";
				$lang_string['blog_comments_popup'] = "Komment�rok �j ablak val� megnyit�sa";
				$lang_string['blog_enable_voting'] = "A bejegyz�sek �rt�kel�s�nek enged�lyez�se";
				$lang_string['blog_enable_cache'] = "Blog-gyors�t�t�r enged�lyez�se)"; // New for 0.4.6
				$lang_string['blog_enable_calendar'] = "Napt�r / Arch�vum blokkok enged�lyez�se"; // New for 0.4.6
				$lang_string['blog_enable_title'] = "Sima sz�veges c�m enged�lyez�se (T�r�ld a bejel�l�st, ha a c�m a fejl�c grafik�j�ban van)"; // New for 0.4.6
				$lang_string['blog_enable_permalink'] = "Permalink enged�lyez�se bejegyz�sekn�l"; // New for 0.4.6
				$lang_string['blog_enable_stats'] = "Statisztika enged�lyez�se a men�ben"; // New for 0.4.7
				$lang_string['blog_enable_lastcomments'] = "Leg�jabb komment�rok list�z�s�nak enged�lyez�se"; // New for 0.4.7
				$lang_string['blog_enable_lastentries'] = "Leg�jabb bejegyz�sek list�z�s�nak enged�lyez�se"; // New for 0.4.7
				$lang_string['blog_email_notification'] = "Email-figyelmeztet�s k�ld�se �j be�r�skor";
				$lang_string['blog_send_pings'] = "Webnapl� &quot;pingek&quot; k�ld�se";
				$lang_string['blog_ping_urls'] = "�rd be a teljes URL-t (pl. http://rpc.weblogs.com/RPC2) &quot;pingel�shez&quot;.<br />(T�bb c�met is be�rhatsz vessz�kkel elv�lasztva.)";
				$lang_string['blog_trackback_about'] = "A trackback blogok k�z�tti �rtes�t�st biztos�t. A trackpack ping �ltal a blog megtudja, hogy linkelsz r�. �ltaluk megl�thatod, ki linkel a blogodra.<br />
				   A pingel�si URI-t megadhatod magad is, vagy automatikusan kider�theted.";
				$lang_string['blog_trackback_enabled'] = "Trackback enged�lyez�se a blogban";
				$lang_string['blog_trackback_auto_discovery'] = "Auto-Discovery enged�lyez�se URL-t tartalmaz� k�ld�skor";
				$lang_string['blog_max_entries'] = "Maximum kijelzend� bejegyz�sek sz�ma:";
				$lang_string['blog_comment_tags'] = "Megjegyz�sekben enged�lyezett jel�l�elemek:";
				$lang_string['blog_gzip_about'] = "
					A PHP 4.0.4 �ta, a PHP-nek lehet�s�ge van a gzip (.gz) t�m�r�tett f�jlok �r�s�ra �s olvas�s�ra, a helysp�rol�s �rdek�ben.
					 L�thatatlanul t�m�r�theti a b�ng�sz�be k�ld�tt oldalakat is, amelyek t�mogatj�k a gzip-t�m�r�t�st, a sebess�gn�vel�s �rdek�ben.<br />
					<br />
					A Zlib-t�mogat�s a PHP-ben alap�rtelmezettk�nt nincs bekapcsolva. Ha a jel�l�n�gyzet nincs bepip�lva, akkor a PHP nem t�mogatja a Zlibet.";
				$lang_string['blog_enable_gzip_txt'] = "GZIP t�m�r�t�s enged�lyez�se az adatb�zisban lev� fileok sz�m�ra";
				$lang_string['blog_enable_gzip_output'] = "GZIP t�m�r�t�s enged�lyez�se a HTTP kimenet sz�m�ra";
				$lang_string['submit_btn'] = "Mehet";
				// Hiba Response
				$lang_string['error'] = "<h2>Hopp�, vazze!</h2>Az inform�ci� nincs mentve. Probl�ma ad�dott az inform�ci� ment�se k�zben.<br /><br />A szerver �zenete:<br />";
				$lang_string['form_error'] = "Sziveskedj a C�m �s a Szerz� mez�ket kit�lteni.";
				$lang_string['label_entry_order'] = "Bejegyz�s Sorrend:";
				$lang_string['select_new_to_old'] = "�jat el�re";
				$lang_string['select_old_to_new'] = "R�git el�re";
				$lang_string['label_comment_order'] = "Megjegyz�s Sorrend:";
				$lang_string['cal_sunday'] = "Vas�rnap";
				$lang_string['cal_monday'] = "H�tf�";
				$lang_string['label_calendar_start'] = "Napt�ri H�t Kezd� Napja";
				$lang_string['title_sidebar'] = "Oldals�v"; // New in 0.4.7
				$lang_string['title_comments'] = "Megjegyz�sek"; // New in 0.4.7
				$lang_string['title_trackback'] = "Trackbackek"; // New in 0.4.7
				$lang_string['title_compression'] = "T�m�r�t�s"; // New in 0.4.7
				$lang_string['title_entries'] = "Bejegyz�sek"; // New in 0.4.7
				$lang_string['title_general'] = "�ltal�nos"; // New in 0.4.7
				$lang_string['title_language'] = "Nyelv"; // New in 0.4.7
				break;
			case 'trackbacks':
				// Trackbacks
				$lang_string['title'] = "Trackbackek";
				$lang_string['header'] = "Trackback c�m ehhez a bejegyz�shez:";
				$lang_string['delete_btn'] = "t�rl�s";
				// Hiba Response
				$lang_string['error_add'] = "Hiba a trackback elment�se k�zben.";
				break;
			case 'options':
				$lang_string['title'] = "Opci�k";
				$lang_string['instructions'] = "Haszn�ld a lejjebb tal�lhat� �rlapot a blogban �s a bejegyz�sekben tal�lhat� d�tum �s id� kijelz�s�nek testreszab�s�hoz. V�laszthatsz 12 �s 24 �r�s id�kijelz�st. R�vid �s hossz� d�tumkijelz�st.  �s a  <b>Megtekint�s</b> r�szben megn�zheted hogy fog megjelenni a form�z�sod.";
				// Long Date
				$lang_string['ldate_title'] = "Hossz� d�tumform�tum:";
				$lang_string['weekday'] = "H�tk�znap";
				$lang_string['month'] = "H�nap";
				$lang_string['day'] = "Nap";
				$lang_string['year'] = "�v";
				$lang_string['none'] = "Semmi";
				// Short Date
				$lang_string['sdate_title'] = "R�vid d�tumform�tum:";
				$lang_string['s_month'] = "H�nap";
				$lang_string['s_mon'] = "HHH";
				$lang_string['s_day'] = "Nap";
				$lang_string['s_year'] = "�v";
				$lang_string['zero_day'] = "Kezdeti nulla a napokhoz";
				$lang_string['show_century'] = "�vsz�zad mutat�sa";
				// Time
				$lang_string['time_title'] = "Id�form�tum:";
				$lang_string['12hour'] = "12-�r�s n�zet";
				$lang_string['24hour'] = "24-�r�s n�zet";
				$lang_string['before_noon'] = "D�lel�tt";
				$lang_string['after_noon'] = "D�lut�n";
				// Date
				$lang_string['date_title'] = "D�tum kijelz�s�nek m�dja:";
				$lang_string['long_date'] = "Hossz� d�tum";
				$lang_string['short_date'] = "R�vid d�tum";
				$lang_string['time'] = "Id�";
				// Menu
				$lang_string['menu_title'] = "Men� d�tum�nak kijelz�si m�dja:";
				$lang_string['long_date'] = "Hossz� d�tum";
				$lang_string['short_date'] = "R�vid d�tum";
				// Used in multiple places
				$lang_string['zero_day'] = "Kezdeti nulla a napokhoz";
				$lang_string['zero_month'] = "Kezdeti nulla a h�napokhoz";
				$lang_string['zero_hour'] = "Kezdeti nulla az �r�khoz";
				$lang_string['separator'] = "Elv�laszt�:";
				$lang_string['preview'] = "Megtekint�s:";
				$lang_string['server_offset'] = "Szerver-�zemsz�net:";
				// Buttons
				$lang_string['submit_btn'] = "Mehet";
				// Hiba Response
				$lang_string['error'] = "<h2>Hopp�, vazze!</h2>Az inform�ci� nincs mentve. Probl�ma ad�dott az inform�ci� ment�se k�zben.<br /><br />A szerver �zenete:<br />";
				break;
			case 'themes':
				$lang_string['title'] = "T�m�k";
				$lang_string['instructions'] = "Haszn�ld a leny�l� men�t k�l�nb�z� t�m�k kiv�laszt�s�hoz.";
				// Themes
				$lang_string['choose_theme'] = "T�m�k:";
				// Buttons
				$lang_string['submit_btn'] = "Mehet";
				// Hiba Response
				$lang_string['error'] = "<h2>Hopp�, vazze!</h2>Az inform�ci� nincs mentve. Probl�ma ad�dott az inform�ci� ment�se k�zben.<br /><br />A szerver �zenete:<br />";
				break;
			case 'upload_img':
				$lang_string['title'] = "K�p felt�lt�se";
				$lang_string['instructions'] = "Kattints a gombra k�pek felt�lt�s�hez.";
				$lang_string['select_file'] = "V�lassz file-t:";
				$lang_string['upload_btn'] = "Felt�lt�s";
				// Hiba Response
				$lang_string['error'] = "<h2>Hopp�, vazze!</h2>A k�p nem lett felt�ltve. Tov�bbi inform�ci�k:<br /><br />A szerver �zenete:<br />";
				break;
			case 'search':
				$lang_string['title'] = "A keres�s eredm�nye";
				$lang_string['instructions'] = "A keres�s eredm�nye ehhez: <b>%string</b>:";
				$lang_string['not_found'] = "Nincs eredm�ny!";
				break;
			case 'contact':
				$lang_string['contact_capcha'] = "Anti-Spam: �rd be ezt a sz�mot: "; // 0.4.2
				$lang_string['title'] = "Kapcsolat";
				$lang_string['instructions'] = "T�ltsd ki a k�rd��vet:";
				$lang_string['form_error'] = "T�ltsd ki a t�rgy �s megjegyz�s mez�ket.";
				$lang_string['name'] = "N�v:";
				$lang_string['email'] = "Email:";				
				$lang_string['subject'] = "T�rgy:";
				$lang_string['comment'] = "Megjegyz�s:";
				$lang_string['submit_btn'] = "Mehet";
				$lang_string['success'] = "<h2>Siker!</h2>Az �zenet el lett k�ldve.<p />";
				$lang_string['failure'] = "<h2>Hiba!</h2>Az �zenet nem lett elk�ldve. Val�sz�n�leg az Anti Spam rosszul lett be�rva.<p />";
				$lang_string['contactsent'] = "Kontakt kereszt�lk�ldve ezen: ";  // New for 0.4.6
				$lang_string['IPAddress'] = "IP c�m:";  // New for 0.4.6
				$lang_string['useragent'] = "A felhaszn�l� programa:";  // New for 0.4.6
				$lang_string['wrote'] = "<i>%s, %s �rta:</i><br />\n<br />\n%s"; // New for 0.4.6.2
				break;
			case 'stats':
				$lang_string["title"] = "Statisztika";
				$lang_string["general"] = "�ltal�nos";
				$lang_string["entry_info"] = "<b>%s</b> bejegyz�s, melyben <b>%s</b> sz� tal�lhat�, <b>%s</b> byte m�ret�.";
				$lang_string["comment_info"] = "<b>%s</b> bejegyz�s, melyben <b>%s</b> sz� tal�lhat�, <b>%s</b> byte m�ret�.";
				$lang_string["trackback_info"] = "<b>%s</b> trackbackek nagys�ga <b>%s</b> byte.";
				$lang_string["static_info"] = "<b>%s</b> statikus oldal, melyben <b>%s</b> sz� tal�lhat�, <b>%s</b> byte m�ret�";
				$lang_string["most_viewed_entries"] = "10 Legt�bbsz�r megtekintett bejegyz�s";
				$lang_string["most_commented_entries"] = "10 Legt�bb megjegyz�st kapott bejegyz�s";
				$lang_string["most_trackbacked_entries"] = "10 Legt�bb trackback-et kapott bejegyz�s";
				$lang_string['vote_info'] = "<b>%s</b> szavazatok m�rete <b>%s</b> byte."; // 0.4.1
				$lang_string["most_voted_entries"] = "10 Legt�bb szavazatot kapott bejegyz�s"; // 0.4.1
				$lang_string["most_rated_entries"] = "10 Legt�bbre �rt�kelt bejegyz�s"; // 0.4.1
				break;
			case 'errorpage-nocookies':  // New for 0.4.6
				$lang_string["title"] = 'HTTP Hiba 403.8 - Oldal/Funkci� Bel�p�s Megtagadva';
				$lang_string["errorline1"] = 'Az oldal vagy funkci� amelyet megpr�b�lt lek�rni, cookie-k haszn�lat�t ig�nyli!';
				$lang_string["errorline2"] = 'Cookie-k haszn�lat�t vissza�ll�t�sa a b�ng�sz�ben vagy a v�delmi software-ben, vagy pr�b�ld meg m�geszer.';
				$lang_string["clientid"] = 'Kliens ID: ';
				break;
			case 'errorpage':  // New for 0.4.6
				$lang_string["403.8"] = 'HTTP Hiba 403.8 - Oldal/Funkci� Bel�p�s Megtagadva';
				$lang_string["404"] = 'HTTP Hiba 404 - Oldal/Funkci� Nem L�tezik';
				$lang_string["error_404"] = 'Az oldal vagy funkci� amelyet megpr�b�lt�l lek�rni nem l�tezik!';
				$lang_string["error_javascript"] = 'Az oldal vagy funkci� amelley pr�b�lkozt�l java szkriptet k�vetel a helyes m�k�d�shez!';
				$lang_string["error_emailnotsent"] = 'Az �zenet elk�ld�se sikertelen!';
				$lang_string["error_emailnotsentcapcha"] = 'Az �zenet elk�ld�se sikertelen, mert a spam v�delmi mez� �res vagy hib�san lett kit�ltve!';
				$lang_string["clientid"] = 'Kliens ID: ';
				break;
			case 'emoticons':  // New for 0.4.7
				$lang_string['title'] = "Admin Emotikonok";
				$lang_string['instructions'] = "
					Pip�ld be az emotikonokat, amelyeket haszn�lni akarsz.
					�rd be a hozz� tartoz� mez�be azt a kifejez�st, amelyet 
					majd helyettes�t az emotikon. T�bb kifejez�s is haszn�lhat�
					�res hellyel sz�tv�lasztva.<br /><br />
		
					P�ld�ul:<br />
					:) :-) :MOSOLY: :BOLDOG:<br /><br />
					
					<i>(Aj�nlott hogy a kifejez�sek 2 karaktern�l hosszabbak legyenek,
					k�l�nben v�ratlan helyettes�t�sek k�vetkezhetnek be.)</i>";
				$lang_string["upload_instructions"] = '�j emotikon felt�lt�se:';
				$lang_string["upload_success"] = 'Siker! A k�p sikeresen fel lett t�ltve!';
				$lang_string["upload_error"] = 'Hiba! A k�p nem lett felt�ltve!';
				$lang_string["upload_invalid"] = 'Hiba! �rv�nytelen k�pfile. A kiterjeszt�s png, jpg vagy gif kell hogy legyen.';
				$lang_string["save_success"] = 'Az emotikonok be�ll�t�sai sikeresen el lettek mentve!';
				$lang_string["save_error"] = 'Hiba! Az emotikonok be�ll�t�sai nem lettek elmentve!';
				$lang_string["save_button"] = 'Emotikonok ment�se';
				break;
			default:
				break;
		}
	}
?>
