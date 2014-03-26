<?php

	// Slovak Language File
	// (c) 2009 palinux, admin <at> obchodp <dot> sk
	//

	// Simple PHP Version: 0.4.8
	// Slovak Language Version:   0.4.8.2	

	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;			

		// Language: Slovak
		$lang_string['language'] = 'slovak';	
		
		$lang_string['locale'] = array('sk_SK', 'sk','slovak');
		$lang_string['rss_locale'] = 'sk-SK'; // New 0.4.8

		// Windows Charset: CP1250
		$lang_string['html_charset'] = 'CP1250';
		$lang_string['php_charset'] = 'CP1250';	

		setlocale( LC_TIME, $lang_string['locale'] );		

		// Some Global Strings		

		// Menu
		$lang_string['menu_links'] = "Odkazy";
		$lang_string['menu_home'] = "Hlavn� str�nka";
		$lang_string['menu_contact'] = "Kontaktujte ma";
		$lang_string['menu_stats'] = "�tatistiky";
		$lang_string['menu_calendar'] = "Kalend�r"; // New for 0.4.8
		$lang_string['menu_archive'] = "Arch�vy";
		$lang_string['menu_viewarchives'] = "Uk�za� arch�vy";
		$lang_string['menu_menu'] = "Menu";
		$lang_string['menu_add'] = "Prida� z�znam";
		$lang_string['menu_add_static'] = "Prida� str�nku";
		$lang_string['menu_upload'] = "Nahra� obr�zok";
		$lang_string['menu_setup'] = "Nastavenie";
		$lang_string['menu_categories'] = "Kateg�ria";
		$lang_string['menu_info'] = "Meta d�ta";
		$lang_string['menu_options'] = "D�tum a cas";
		$lang_string['menu_themes'] = "Vzh�ady";
		$lang_string['menu_colors'] = "Farby";
		$lang_string['menu_change_login'] = "Zmeni� prihl�senie";
		$lang_string['menu_logout'] = "Odhl�senie";
		$lang_string['menu_login'] = "Prihl�senie";
		$lang_string['menu_most_recent'] = "Najnov�� koment�r";
		$lang_string['menu_most_recent_entries'] = "Najnov�ie z�znamy";
		$lang_string['menu_most_recent_trackback'] = "Najnov�ie ohlasy";
		$lang_string['menu_add_block'] = "Bloky";
		$lang_string['menu_emoticons'] = "Smajl�ky"; // New for 0.4.7
		$lang_string['menu_avatar'] = "Avatar"; // New for 0.4.7
		
		// Counter
		$lang_string['counter_today'] = "Dnes:"; // New for 0.4.8
		$lang_string['counter_yesterday'] = "V�era:"; // New for 0.4.8
		$lang_string['counter_totalsidebar'] = "Celkom:"; // New for 0.4.8
		$lang_string['counter_title'] = "N�v�tevy"; // New for 0.4.8

		// Other
		$lang_string['home'] = 'Zp� na hlavn� str�nku';
		$lang_string['nav_next'] = 'Dal��';
		$lang_string['nav_back'] = 'Zp�';
		$lang_string['search_title'] = 'H�adanie';
		$lang_string['search_go'] = 'H�adaj';
		$lang_string['page_generated_in'] = 'Str�nka generovan� %s sek�nd';
		$lang_string['counter_total'] = 'Zobrazenie webu: '; // New in 0.4.8
		$lang_string['read_more'] = '��ta� �alej...'; // New in 0.4.8

		// SB Functions
		$lang_string['sb_months'] = array( 'janu�ra', 'febru�ra', 'marca', 'apr�la', 'm�ja', 'j�na', 'j�la', 'augusta', 'septembra', 'okt�bra', 'novembra', 'decembra' );
		$lang_string['sb_default_title'] = 'Bez n�zvu';
		$lang_string['sb_default_author'] = 'Nezn�my autor';
		$lang_string['sb_default_footer'] = '';

		$lang_string['sb_edit'] = 'editova�';
		$lang_string['sb_delete'] = 'vymaza�';
		$lang_string['sb_permalink'] = 'trval� odkaz';
		$lang_string['sb_trackback'] = 'zp�tn� sledovanie';
		$lang_string['sb_relatedlink'] = 's�visiaci odkaz'; // <-- New in 0.4.6		

		$lang_string['sb_add_comment_btn'] = 'prida� koment�r';
		$lang_string['sb_comment_btn_number_first'] = true;
		$lang_string['sb_comment_btn'] = ' koment�r';
		$lang_string['sb_comments_plural_btn_number_first'] = false;
		$lang_string['sb_comments_plural_btn'] = 'koment�re:';		

		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '';
		$lang_string['sb_view_counter_post'] = ' zobrazenie';

		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = '';
		$lang_string['sb_view_counter_plural_post'] = ' zobrazenie';		

		$lang_string['sb_add_link_btn'] = 'prida� odkaz';
		$lang_string['sb_rate_entry_btn'] = 'Kliknite a ohodno�te z�znam';		

		// Z�znam Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
			$lang_string['label_subject'] = "N�zov:";
			$lang_string['label_insert'] = "Vlo�i�:";
			$lang_string['btn_bold'] = " b ";
			$lang_string['btn_italic'] = " i ";
			$lang_string['btn_image'] = "img";
			$lang_string['btn_url'] = "url";
			$lang_string['btn_readmore'] = "Dalej..."; // 0.4.8
			$lang_string['view_images'] = "Uk�zat obr�zky";
			$lang_string['label_entry'] = "Z�znam:";
			$lang_string['btn_preview'] = "&nbsp;Uk�za�&nbsp;";
			$lang_string['btn_post'] = "&nbsp;Odosla�;";
			$lang_string['file_name'] = "N�zov s�boru (bez medzier a pr�pony):";

			// Javascript Strings
			$lang_string['insert_styles'] = "Vlo�te text, ktor� bude form�tovan�:";
			$lang_string['insert_image'] = "Vlo�te URL obr�zku:";
			$lang_string['insert_url1'] = "Vlo�te text, zobrazovan� pod odkazom (      volite�n�):";
			$lang_string['insert_url2'] = "Vlo�te �pln� URL odkaz:";
			$lang_string['insert_url3'] = "Otvori� odkaz v novom okne (voliteln�):";
			$lang_string['form_error'] = "Vypl�te pole s n�zvom a z�znamom.";	

			// More Javascript Strings
			$lang_string['insert_image_optional'] = 'Vo�by:';
			$lang_string['insert_image_width'] = '��rka (volite�n�):';
			$lang_string['insert_image_height'] = 'V��ka (volite�n�):';
			$lang_string['insert_image_popup'] = 'Po kliknut� zobrazi� cel� obr�zok v novom okne (volite�n�):';
			$lang_string['insert_image_float'] = 'Umiestnenie (volite�n�):';
		
			$lang_string['day'] = 'De�';
			$lang_string['month'] = 'Mes.';
			$lang_string['year'] = 'Rok';
			$lang_string['hour'] = 'Hod.';
			$lang_string['minute'] = 'Min.';
			$lang_string['second'] = 'Sek.';
		}	

		switch ($page) {
			case 'add':
				// Add Z�znam
				$lang_string['title'] = "Prida� z�znam";
				$lang_string['instructions'] = "Chcete prida� z�znam do str�nok? Vypl�te formul�r ni��ie a kliknite na 'Uk�za�' pre n�h�ad alebo na 'Odosla�' pre ulo�enie z�znamu.";
				$lang_string['title_ad'] = "Potvrdenie pingu o odozv�ch";
				$lang_string['instructions_ad'] = "Toto s� automaticky rozpoznan� URI, kam m��u by� odoslan� pingy. Ak na ur�it� URI ping posla� nechcete, odzna�te ju. Kliknite na 'OK' pre odoslanie pingu na ozna�en� URI, alebo kliknite na 'Zru�i�' a pingy nebud� odoslan�.";
				$lang_string['label_tb_ping'] = "Pingy o odozv�ch odosiela� na (oddeli� �iarkami):";
				$lang_string['label_tb_autodiscovery'] = "Autorozpozn�vanie";
				$lang_string['label_relatedlink'] = "S�visiaci odkaz";
				$lang_string['label_categories'] = "Zoznam kateg�ri�";

				// Preview / Edit Z�znam
				$lang_string['title_preview'] = "Uk�za�/editova� z�znam";
				$lang_string['instructions_preview'] = "Takto vyzer� v� z�znam. Pokia� pou��v�te �t�lovanie textu alebo vklad�te obr�zky, nezabudnite 'uzavrie�' v�etky 'tagy'.";
				$lang_string['title_update'] = "�pravy z�znamu";
				$lang_string['instructions_update'] = "V� z�znam m��ete upravi� vo formul�ri ni��ie. Po dokon�en� kliknite na 'Uk�za�' alebo 'Odosla�'.";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Zru�i�&nbsp;";

				// Error Response
				$lang_string['error'] = "<h2>�ha!</h2>Z�znam nebol ulo�en�. Po�as ukladania sa objavil probl�m.<br /><br />Server ohl�sil:<br />";
				break;
			case 'add_static':
				// Add Z�znam
				$lang_string['title'] = "Prida� str�nku";
				$lang_string['instructions'] = "Vypl�te formul�r ni��ie a pridajte nov� statick� str�nku. Na rozdiel od z�znamov sa statick� str�nky objavia ako polo�ky v menu. To je vhodn� pre str�nky, ktor� chcete ma� st�le k dispoz�cii, ako napr. Inform�cie, Kontakty, Pl�ny a pod. Kliknite na 'Uk�za�t' pre n�hlad alebo na 'Odosla�' pre ulo�enie str�nky.";

				// Preview / Edit Z�znam
				$lang_string['title_preview'] = "Uk�za�/editova� str�nku";
				$lang_string['instructions_preview'] = "Takto vyzer� va�a str�nka. Pokia� pou��v�te �t�lovanie textu alebo vkl�d�te obr�zky, nezabudnite 'uzavrie�' v�etky 'tagy'.";
				$lang_string['title_update'] = "�pravy str�nky";
				$lang_string['instructions_update'] = "Va�u str�nku m��ete upravi� vo formul�ri ni��e. Po dokon�en� kliknite na 'Uk�za�' alebo 'Odosla�'.";
				$lang_string['form_error'] = "Vyplnte  pole s n�zvom, textom a n�zvom s�boru.";	

				// Error Response
				$lang_string['error'] = "<h2>�ha!</h2>Z�znam nebol ulo�en�. Po�as ukladania sa objavil probl�m.<br /><br />Server ohl�sil:<br />";
				break;
			case 'add_block':

				// Add / Manage Blocks
				$lang_string['title'] = "prida�/upravi� bloky";
				$lang_string['instructions'] = "Prid�nie vlastn�ch blokov. Vypl�te formul�r ni��e a kliknite na 'Prida� blok'. Kliknut�m na tla��tko vy� a ni� uprav�te umiestenie bloku v postrannom st�pci. Kliknut�m na tla��tko editova� blok uprav�te. Kliknut�m na tla��tko vymaza� blok zru��te";
				$lang_string['up'] = "vy�";
				$lang_string['down'] = "ni�";
				$lang_string['edit'] = "editova�";
				$lang_string['delete'] = "vymaza�";
				$lang_string['block_name'] = "N�zov bloku:";
				$lang_string['block_content'] = "Obsah bloku:";
				$lang_string['instructions_edit'] = "Pr�ve editujete blok:";
				$lang_string['instructions_modify'] = "Kliknite ni��ie a editujte blok:";
				$lang_string['submit_btn_edit'] = "Editova� blok";
				$lang_string['submit_btn_add'] = "Pridat blok";
				$lang_string['form_error'] = "Vypl�te pole s n�zvom bloku.";
				break;
			case 'add_link':
				$lang_string['static_pages'] = "Statick� str�nky:";

				// Add / Manage Links
				$lang_string['title'] = "prida�/upravi� odkazy";
				$lang_string['instructions'] = "Prid�vanie vlastn�ch odkazov na in� weby. Vypl�te formul�r ni��ie a kliknite na 'Prida� odkaz'. Kliknut�m na tla��tka vy� a ni� uprav�te umiestenie odkazu v menu. Kliknut�m na tla��tko editova� odkaz uprav�te. Kliknut�m na tla��tko vymaza� odkaz zru��te";
				$lang_string['up'] = "vy�";
				$lang_string['down'] = "ni�";
				$lang_string['edit'] = "editova�";
				$lang_string['delete'] = "vymaza�";
				$lang_string['link_name'] = "N�zov odkazu:";
				$lang_string['link_url'] = "URL odkazu (volite�n�. Nevyplnen�m vytvor�te oddelova�):";
				$lang_string['instructions_edit'] = "Pr�ve editujete odkaz:";
				$lang_string['instructions_modify'] = "Kliknite ni��ie a upravte odkaz:";
				$lang_string['submit_btn_edit'] = "Editova� odkaz";
				$lang_string['submit_btn_add'] = "Prida� odkaz";
				$lang_string['form_error'] = "Vypl�te pole s n�zvom odkazu.";
				break;
			case 'categories':

				// Add / Manage Links
				$lang_string['title'] = "prida�/upravi� kateg�rie";
				$lang_string['instructions'] = "Pou�ite formul�r ni��ie pre vytvorenie kategori�. Ka�d� kateg�riu zadajte vo form�te 'N�zov kateg�rie (id ��slo)'. Hierarchiu vytvor�te odsaden�m polo�iek medzerami.<br /><br /><b>Pr�klad:</b><br />Hlavn� (1)<br />Novinky (3)<br />&nbsp;&nbsp;Ponuky (6)<br />&nbsp;&nbsp;Udalosti (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;R�zne (7)<br />Technol�gie (2)<br />";
				$lang_string['error'] = "Chyba";
				$lang_string['current_categories'] = "Vytvoren� kateg�rie";
				$lang_string['no_categories_found'] = "Nie su �iadn� kateg�rie";
				$lang_string['category_list'] = "Zoznam kateg�ri�:";
				$lang_string['validate'] = "Overenie";
				$lang_string['submit_btn'] = "&nbsp;Odosla�&nbsp;";
				break;
			case 'colors':
				// Change Colors
				$lang_string['title'] = "Zmena farieb";
				$lang_string['instructions'] = "Tu m��ete zmeni� farby textov a pozadia str�nok. Najprv vyberte pole ni��ie a potom pou�ite ponuku farieb. Pr�slu�n� hodnoty sa zmenia automaticky.";
				$lang_string['bg_color'] = "Pozadie str�nky";
				$lang_string['main_bg_color'] = "Pozadie hlavnej str�nky";
				$lang_string['border_color'] = "Okraj str�nky";
				$lang_string['inner_border_color'] = "Vn�torn� okraj";
				$lang_string['header_bg_color'] = "Pozadie z�hlavia";
				$lang_string['header_txt_color'] = "Text z�hlavia";
				$lang_string['menu_bg_color'] = "Pozadie menu";
				$lang_string['footer_bg_color'] = "Pozadie z�p�tia";
				$lang_string['txt_color'] = "Hlavn� text";
				$lang_string['headline_txt_color'] = "Text nadpisu";
				$lang_string['date_txt_color'] = "Text data";
				$lang_string['footer_txt_color'] = "Text z�p�tia";
				$lang_string['link_reg_color'] = "K�udov� odkaz";
				$lang_string['link_hi_color'] = "Zvolen� odkaz";
				$lang_string['link_down_color'] = "Aktivn� odkaz";

				// More Colors
				$lang_string['entry_bg'] = "Pozadie z�znamu";
				$lang_string['entry_title_bg'] = "Pozadie n�zvu z�znamu";
				$lang_string['entry_border'] = "Okraj z�znamu";
				$lang_string['entry_title_text'] = "Text n�zvu z�znamu";
				$lang_string['entry_text'] = "Text z�znamu";
				$lang_string['menu_bg'] = "Pozadie menu";
				$lang_string['menu_title_bg'] = "Pozadie n�zvu menu";
				$lang_string['menu_border'] = "Okraj menu";
				$lang_string['menu_title_text'] = "Text n�zvu menu";
				$lang_string['menu_text'] = "Text menu";
				$lang_string['menu_link_reg_color'] = "K�udov� odkaz menu";
				$lang_string['menu_link_hi_color'] = "Zvolen� odkaz menu";
				$lang_string['menu_link_down_color'] = "Aktivn� odkaz menu";

				// Submit
				$lang_string['color_preset'] = "Farebn� sch�ma:";
				$lang_string['scheme_name'] = "Vlo�te n�zov vlastnej farebnej sch�my:";
				$lang_string['scheme_file'] = "Vlo�te n�zev s�boru (bez medzier a pr�pony):";
				$lang_string['save_btn'] = "&nbsp;Ulo�i�&nbsp;";
				$lang_string['form_error'] = "Vlo�te n�zov v�ej farebnej sch�my.";
				$lang_string['submit_btn'] = "&nbsp;Odosla�&nbsp;";
				$lang_string['theme_doesnt_allow_colors'] = 'Vybran� vzh�ad neumo��uje vo�bu vlastnej farebnej sch�my.';

				// Error Response
				$lang_string['error'] = "<h2>Ouha!</h2>Inform�cie neboli ulo�en�. Po�as ukladania sa objavil probl�m.<br /><br />Server ohl�sil:<br />";
				break;
			case 'comments':
				// Comments
				$lang_string['name'] = "Meno:"; //New in 0.4.6.2
				$lang_string['email'] = "E-mail:"; //New in 0.4.6.2
				$lang_string['homepage'] = "Str�nky:"; //New in 0.4.6.2
				$lang_string['koment�r'] = "Koment�r:"; //New in 0.4.6.2
				$lang_string['IPAddress'] = "IP adresa:";  // New for 0.4.6.2
				$lang_string['useragent'] = "Pou��v�te:";  // New for 0.4.6.2
				$lang_string['wrote'] = "<i>Na %s, %s nap�sal:</i><br />\n<br />\n%s"; // New for 0.4.6.2
				
				$lang_string['comment_capcha'] = "Antispam: Vlo�te re�azec "; // 0.4.2
				$lang_string['title'] = "Koment�re";
				$lang_string['header'] = "Vlo�i� koment�r";
				$lang_string['instructions'] = "Vypl�te formul�r ni��ie a pridajte v� vlastn� koment�r.";
				$lang_string['comment_name'] = "Va�e Meno:";
				$lang_string['comment_email'] = "E-mail:";
				$lang_string['comment_url'] = "URL:";
				$lang_string['commentposted'] = "Nov� koment�r odeslan�: ";  // New for 0.4.6.2
				$lang_string['comment_remember'] = "Zapam�tova�:";
				$lang_string['comment_text'] = "Text koment�ra:";
				$lang_string['post_btn'] = "&nbsp;Odosla� koment�r&nbsp;";
				$lang_string['delete_btn'] = "vymaza�";
				$lang_string['expired_comment1'] = "�utujeme. Koment�re boli umo�nen� po dobu "; // New for 0.4.8
				$lang_string['expired_comment2'] = " dn�."; // New for 0.4.8
				
				$lang_string['blacklisted'] = "Prep��te, va�a IP adresa bola zablokovan�. Nem��ete vkl�da� �iadne koment�re."; // New for 0.4.8
        
				// Error Response
				$lang_string['error_add'] = "<h2>F�ha!</h2>Koment�r nebol ulo�en�. Po�as uklad�nia sa objavil probl�m.<br /><br />Server ohl�sil:<br />";
				$lang_string['error_delete'] = "<h2>F�ha!</h2>Koment�r nebol vymazan�. Po�as mazania sa objavil probl�m.<br /><br />Server ohl�sil:<br />";
				$lang_string['form_error'] = "Vypl�te pole s menom, textom koment�ra a Antispamom.";
				break;

			case 'delete':
				$lang_string['title'] = "vymaza� z�znam";
				$lang_string['instructions'] = "Chcete vymaza� tento z�znam? Uistite sa, �e to naozaj chcete, akcia sa ned� vr�ti�...";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Zru�i�&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>F�ha!</h2>Ned� sa vymaza� z�znam.<br /><br />Server ohl�sil:<br />";
				break;
			case 'delete_static':
				$lang_string['title'] = "vymaza� str�nku";
				$lang_string['instructions'] = "Chcete vymaza� t�to str�nku? Uistite sa, �e to naozaj chcete, akcia sa ned� vr�ti�...";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Zru�i�&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>F�ha!</h2>Ned� sa vymaza� str�nka.<br /><br />Server ohl�sil:<br />";
				break;
			case 'image_list':
				$lang_string['title'] = "Zoznam obr�zkov";
				$lang_string['instructions'] = "Kliknut�m na odkazy ni��ie zobraz�te obr�zky.<br /><br />Prid�nie obr�zku do z�znamu:<br />1) Ctrl (alebo prav�) klik na odkaz, vyberte 'Kop�rova� odkaz do schr�nky'.<br />2) Vra�te sa na prid�nie alebo edit�ciu z�znamu.<br />3) Kliknite na tla��tko 'img' a vlo�te adresu obr�zku do formul�ra.";
				break;
			case 'info':
				$lang_string['title'] = "Meta data";
				$lang_string['instructions'] = "Inform�cie ni��ie s� pou�it� ako &quot;meta data&quot;, kter� pom�haj� vyh�ad�va�om n�js� spr�vne inform�cie o va�ich str�nk�ch. Inform�cie m��u by� vyu��van� tie� v RSS kan�loch.";
				$lang_string['info_keywords'] = "K���ov� slov� (zoznam k���ov�ch slov, oddelen�ch �iarkami):";
				$lang_string['info_description'] = "Popis (obsah alebo vo�n� textov� popis va�ich str�nok):";
				$lang_string['info_copyright'] = "Pr�va (copyright alebo odkaz na pr�slu�n� dokument):";
				$lang_string['submit_btn'] = "&nbsp;Odosla�&nbsp;";				// Error Response
				$lang_string['error'] = "<h2>F�ha!</h2>Informace neboli ulo�en�. Po�as ukladania informaci� sa objavil probl�m.<br /><br />Server ohl�sil:<br />";
				$lang_string['form_error'] = "Vypl�te pole s n�zvom a menom autora.";
				break;
			case 'index':
				// Index
				break;
			case 'static':
				// Index
				break;
			case 'rating':
				$lang_string['error'] = "<h2>F�ha!</h2>Inform�cie neboli ulo�en�. Po�as ukladania sa objavil probl�m.<br /><br />Server ohl�sil:<br />";
				break;
			case 'login':
				$lang_string['upgrade'] = "<h2>Obnovenie</h2>"; // New 0.3.8
				$lang_string['upgrade_count'] = "%n koment�rov�ch s�borov vy�aduje obnovenie:"; // New 0.3.8
				$lang_string['upgrade_url'] = "Obnovi� koment�re"; // New 0.3.8
				$lang_string['title'] = "Prihl�senie";
				$lang_string['instructions'] = "Vlo�te prihlasovacie meno a heslo";
				$lang_string['username'] = "Prihlasovacie meno:";
				$lang_string['password'] = "Heslo";
				$lang_string['submit_btn'] = "&nbsp;Odosla�&nbsp;";
				// Success
				$lang_string['success'] = "<h2>�spech!</h2>Ste prihl�sen�. Pr�jemn� pr�cu so str�nkami!<p />";
				// Wrong Heslo
				$lang_string['wrong_password'] = "<h2>F�ha!</h2>Nie ste prihl�sen�. Zadajte svoje prihlasovacie meno a heslo spr�vne a sk�ste to znova.<p />";
				$lang_string['form_error'] = "Vypl�te pole s menom a heslom.";
				break;
			case 'logout':
				$lang_string['title'] = "Odhl�senie";
				$lang_string['instructions'] = "<h2>F�ha!</h2>Odhl�senie neprebehlo korektne. Ned� sa vymaza� cookie.Alebo ste st�le prihl�sen�?<p />";
				break;
			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Error Response
				$lang_string['error'] = "<h2>F�ha!</h2>Inform�cie neboli ulo�en�. Po�as ukladania sa objavil probl�m.<br /><br />Server ohl�sil:<br />";
				break;
			case 'set_login':
				$lang_string['title'] = "Zmena prihlasovacieho mena a hesla";
				$lang_string['instructions'] = "Pou�ite formul�r ni��ie a zme�te va�e prihlasovacie meno a/alebo heslo. Vlo�te nov� prihlasovacie meno a heslo, ktor� chcete pou��va�.";
				$lang_string['username'] = "Prihlasovacie meno:";
				$lang_string['password'] = "Heslo:";
				$lang_string['submit_btn'] = "&nbsp;Odosla�&nbsp;";
				// Success
				$lang_string['success'] = "<h2>�spech!</h2>Va�e prihlasovacie meno a/alebo heslo je akt�vne. Pr�jemn� pr�cu so str�nkami!<p />";
				// Wrong Heslo
				$lang_string['wrong_password'] = "<h2>F�ha!</h2>Inform�cie neboli ulo�en�. Pri ulo�en� v�ho mena a/alebo hesla sa objavil probl�m.<br /><br />Server ohl�sil:<br />";
				$lang_string['form_error'] = "Vypl�te pole s menom a heslom.";
				$lang_string['explanation'] = "V aktu�lnej verzii programu bola zmenen� �trukt�ra prihlasovania.  Na�alej nie je m��n� zmeni� heslo a/alebo prihl�senie priamo na str�nkach. Pokia� chcete zmeni� heslo, vyma�te s�bor /config/password.php a uistete sa, �e s�bory install*.php s� ulo�en� na serveri. Potom obnovte t�to str�nku alebo sa odhl�ste. Skript, pou�it� pri vytv�ran� str�nok, sa spust� op�.";  // New for 0.4.6
				break;
			case 'install00':
				$lang_string['title'] = "Vitajte!";
				$lang_string['instructions'] = "�akujeme, �e ste si vybrali Simple PHP Blog!";
				$lang_string['blog_choose_language'] = "Vo�ba jazyka:";
				$lang_string['submit_btn'] = "&nbsp;Odosla�&nbsp;";
				break;
			case 'install01':
				$lang_string['title'] = "Vitajte!";
				$lang_string['instructions'] = "
				�akujeme, �e ste si vybrali Simple PHP Blog!<br /><br />Simple PHP Blog je jednoduch� blogovac� syst�m. Vy�aduje PHP 4.1 alebo vy��iu a nastavenie pr�v z�pisu na serveri. V�etky inform�cie s� ulo�en� v textov�ch s�boroch, tak�e nie je vy�adovan� datab�za.<br /><br />
				Najsk�r je potrebn� vytvori� tri adres�re (<b>config</b>, <b>content</b> a <b>images</b>) pre ukladanie va�ich inform�ci�. Potom zad�te heslo a m��ete za�a� pracova�.<br /><br />
				<b>Kliknite ni��ie a zah�jte nastavenie:</b>";
				$lang_string['begin'] = "[ Zah�ji� nastavenie ]";
				break;
			case 'install02':
				$lang_string['title'] = "Nastavenie";
				$lang_string['instructions'] = "Vytvorenie adres�rov <b>config</b>, <b>content</b> a <b>images</b>:";
				$lang_string['folder_exists'] = "OK! Adres�re existuj�. Nie su potrebn� �iadne �pravy...";
				$lang_string['folder_failed'] = "F�ha! Ned� sa vytvori� adres�r...";
				$lang_string['folder_success'] = "�spech! Adres�r je vytvoren�...";
				// Help
				$lang_string['help'] = "
				<h2>Ouha!</h2>
				Ned� sa vytvori� jeden alebo viac adres�rov!<br /><br />To m��e by� zp�soben�:<br />
				<ol>
				<li><b>Pr�va z�pisu</b> nie je spr�vne nastaven� pr�stup <b>Read/Write</b>.</li>
				<li><b>UID</b> (identifik�cia u��vate�a) v�etk�ch s�borov a adres�rov musia by� zhodn�.</li>
				</ol>
				Zk�ste previes� opravu pop�san� ni��ie a potom kliknite na <b>Sk�si� znova</b>:<br />
				<ol>
				<li>Manu�lne vytvorte n�sleduj�ce adres�re: <b>config</b>, <b>content</b> a <b>images</b>.</li>
				<li>Zaistite <b>pr�va z�pisu</b> pre tieto adres�re: Pou�ite v� FTP program: vlastn�k (Owner), u�ivate� (User) a svet (World) by mali ma� pr�stup <b>Read</b> a <b>Write</b>. <i>(Pr�padne m��ete kontaktova� v�ho poskytovate�a hostingu a po�iada� o zmenu...)</i></li>
				<li>Uistite se, �e UID v�etk�ch va�ich s�borov a adres�rov s� rovnak�. <i>(Pr�padne m��ete kontaktova� v�ho poskytovate�a hostingu a po�iada� o zmenu...)</i></li>
				</ol>";
				$lang_string['try_again'] = "[ Zk�si� znova ]";
				// Success
				$lang_string['success'] = "<h2>�spech!</h2>Adres�re boli �spe�ne vytvoren�!<p /><b>Kliknite ni��ie pre pokra�ovanie:</b>";
				$lang_string['continue'] = "[ Pokra�ova� ]";
				break;
			case 'install03':
				$lang_string['supported'] = "<b>V� webov� server podporuje n�sleduj�ce kryptok�dovanie:</b>";
				$lang_string['standard'] = "�tandardn� DES: ";
				$lang_string['extended'] = "Roz��ren� DES: ";
				$lang_string['MD5'] = "MD5: ";
				$lang_string['blowfish'] = "Blowfish: ";
				$lang_string['enabled'] = "zapnut�";
				$lang_string['disabled'] = "vypnut�";
				$lang_string['using_standard'] = "<b>Pou�it� �tandardn� DES...</b>";
				$lang_string['using_extended'] = "<b>Pou�it� roz��ren� DES...</b>";
				$lang_string['using_MD5'] = "<b style=\"color: green;\">Pou�it� MD5...</b>";
				$lang_string['using_blowfish'] = "<b style=\"color: green;\">Pou�it� Blowfish...</b>";
				$lang_string['using_unknown'] = "<b>Pou�it� nezn�me k�dovanie...</b>";
				$lang_string['salt_length'] = " <i>(Salt Length = %string)</i><br />";
				$lang_string['title'] = "Zada� prihlasovacie meno a heslo";
				$lang_string['instructions'] = "Pou�ite formul�r ni��ie a zadajte prihlasovacie meno a heslo.";
				$lang_string['username'] = "Prihlasovacie meno:";
				$lang_string['password'] = "Heslo:";
				$lang_string['submit_btn'] = "&nbsp;Odosla�&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Gratulujeme!</h2>Ste prihl�sen�. Kliknite ni��ie a prejdite na nastavenie, kde m��ete zada� n�zov va�ich str�nok. Pr�jemn� pr�cu so str�nkami!<p />";
				$lang_string['btn_setup'] = "[ Nastavenie ]";
				// Wrong Heslo
				$lang_string['wrong_password'] = "<h2>F�ha!</h2>Inform�cie neboli ulo�en�. Pri ukladan� v�ho prihlasovacieho mena a/alebo hesla sa objavil probl�m.<br /><br />Server ohl�sil:<br />";
				$lang_string['form_error'] = "Vypl�te pole s menom a heslom.";
				break;
			case 'install04':
				$lang_string['title'] = "Vytvorenie s�boru s heslom";
				$lang_string['instructions'] = "Toto je d�le�it� �as�:<br />
				<ol>
				<li>Spustite niektor� textov� editor <i>(Notepad, WordPad, Word, BBEdit, Pico, VI at�...).</i></li>
				<li>Vytvorte nov� textov� s�bor.</li>
				<li>Zkop�rujte a vlo�te do s�boru k�d z okna ni��ie.</li>
				<li>S�bor ulo�te a pomenujte <b>password.php</b> <i>(s�bor ulo�te ako <b>text</b> alebo <b>�ist� (plain) text</b>).</i></li>
				<li>Spustite FTP program.</li>
				<li>Nahrajte s�bor <b>password.php</b> do adres�ra <b>config</b> na va�om serveri.</li>
				<li>Vyma�te <b>password.php</b> z v�ho disku.</li>
				</ol>
				";
				$lang_string['information'] = "<i>Pozn�mka: Pokia� chcete zmeni� va�e prihlasovacie meno a heslo (asi zabudnut�), vyma�te s�bor <b>password.php</b> v adres�ri <b>config</b>. Pri bud�cej n�v�teve str�nok si cel� postup zopakujete...</i>";
				$lang_string['code'] = "K�d pro s�bor <b>password.php</b>:";
				$lang_string['continue'] = "[ Pokra�ova� ]";
				break;
			case 'install05':
			case 'install06':
				$lang_string['title'] = "Prihl�senie";
				$lang_string['instructions'] = "Vlo�te prihlasovacie meno a heslo";
				$lang_string['username'] = "Prihlasovacie meno:";
				$lang_string['password'] = "Heslo";
				$lang_string['submit_btn'] = "&nbsp;Odosla�&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Gratulujeme!</h2>Ste prihl�sen�.<p />
				Kliknite ni��ie a prejdite na str�nku <b>Nastavenie</b>, kde m��ete upresni� ostatn� vlastnosti str�nok.<p />
				<i>Pozn�mka: Teraz je proces nastavenia dokon�en�. Doporu�ujeme vymaza� s�bory <b>installXX.php</b> z v�ho webu (�i�e install00.php a� install06.php).</i><p />";
				// Wrong Heslo
				$lang_string['wrong_password'] = "<h2>F�ha!</h2>Nie ste prihl�sen�. Preverte, �i je zadan� prihlasovacie meno a heslo spr�vne a skuste to znova.<p />";
				$lang_string['form_error'] = "Vypl�te pole s menom a heslom.";
				// Success
				$lang_string['btn_setup'] = "[ Nastavenie ]";
				$lang_string['btn_try_again'] = "[ Sk�si� znova ]";
				break;
			case 'setup':
				$lang_string['title'] = "Nastavenie";
				$lang_string['instructions'] = "Ni��ie m��ete meni� n�zov va�ich str�nok a osobn� inform�cie.";
				$lang_string['blog_title'] = "N�zov str�nky:";
				$lang_string['blog_author'] = "Autor:";
				$lang_string['blog_email'] = "E-mail (viac e-mailov�ch adries by malo by� oddelen� �iarkami, nevyplnen�m vypnete str�nku Kontaktujte ma)"; // Updated 0.4.7
				$lang_string['blog_avatar'] = "URL avataru (ponechajte nevyplnen� pre �iadny):"; // <-- New 0.4.7
				$lang_string['blog_footer'] = "Z�p�tie:";
				$lang_string['blog_choose_language'] = "Vo�ba jazyka:";
				$lang_string['blog_enable_comments'] = "Povoli� koment�re";
				$lang_string['blog_comments_popup'] = "Koment�re otv�ra� vo vyskakovacom okne";
				$lang_string['blog_enable_voting'] = "Povoli� �itate�om hodnotenie z�znamov";
				$lang_string['blog_enable_cache'] = "Povoli� ke�ov�nie z�znamov (m��e zr�chli� na��tanie u niektor�ch serverov)"; // New for 0.4.6
				$lang_string['blog_enable_calendar'] = "Zobrazi� kalend�r"; // New for 0.4.6
				$lang_string['blog_enable_archives'] = "Zobrazi� arch�vy"; // New for 0.4.8
				$lang_string['blog_enable_counter'] = "Zobrazi� po��tadlo pr�stupov v postrannom st�pci"; // New for 0.4.8
				$lang_string['blog_counter_hours'] = "Po�et hod�n do vynulovania pr�stupu (pre �pecificku IP adresu):"; // New for 0.4.8
				$lang_string['blog_enable_login'] = "Zobrazi� prihl�senie (inak si najsk�r vytvorte z�lo�ku \"login.php\"...)"; // New for 0.4.8
				$lang_string['blog_enable_title'] = "Povoli� textov� n�zov blokov (odzna�te, pokia� chcete pou��va� grafiku)"; // New for 0.4.6
				$lang_string['blog_enable_permalink'] = "Povoli� pevn� odkazy na z�znamy"; // New for 0.4.6
				$lang_string['blog_enable_capcha'] = "Povoli� antispam"; // New for 0.4.8
				$lang_string['blog_footer_counter'] = "Zobrazi� po��tadlo pr�stupov v z�p�ti"; // New for 0.4.8
				$lang_string['blog_enable_capcha_image'] = "Graficky (mus� by� in�talovan� GD knihovna) / textov� antispam"; // New for 0.4.8
				$lang_string['blog_enable_stats'] = "Zobrazi� �tatistiku v menu"; // New for 0.4.7
				$lang_string['blog_enable_lastcomments'] = "Zobrazi� zoznam najnov��ch koment�rov"; // New for 0.4.7
				$lang_string['blog_enable_lastentries'] = "Zobrazi� zoznam najnov��ch z�znamov"; // New for 0.4.7
				$lang_string['blog_email_notification'] = "Posiela� e-mailov� notifik�ciu koment�rov";
				$lang_string['blog_send_pings'] = "Posiela� &quot;pingy&quot;";
				$lang_string['blog_ping_urls'] = "Vlo�te kompletn� URL (napr. http://www.obchodpc.sk) slu�by posielanie &quot;pingu&quot;.<br />(M��ete vlo�it viac adries, oddelen�ch �iarkami)";
				$lang_string['blog_trackback_about'] = "Zp�tn� sledovanie (trackbacks) zai��uje notifik�ciu medzi webmi. Web dostane inform�ciu o tom, �e je na� odk�zan�, pomocou odoslan�ch pingov. Tak ide zisti�, kdo je pripojen� na va�e str�nky.<br />
				   URI pingov m��ete vlo�i� manu�lne, alebo sk�si� automatick� rozpozn�vanie.";
				$lang_string['blog_trackback_enabled'] = "Povoli� zp�tn� sledovanie odkazov a z�znamov";
				$lang_string['blog_trackback_auto_discovery'] = "Povoli� automatick� rozpozn�vanie v z�znamoch, obsahuj�c�ch URL adresy";
				$lang_string['blog_max_entries'] = "Najvy��� po�et zobrazen�ch z�znamov:";
				$lang_string['blog_comment_tags'] = "Tagy, povolen� v koment�roch:";
				$lang_string['blog_gzip_about'] = "
					Po��naj�c PHP 4.0.4 ide ��ta� a zapisova� s�bory, komprimovan� met�dou GZIP (.gz),	a u�etri� tak diskov� priestor. Tie� ide komprimova� str�nky odoslan� prehliada�mi, podporuj�cim t�to kompresiu, a t�m u�etri� objem prenosu d�t.<br />
					<br />
					Podpora kni�nice Zlib v PHP nie je predom zapnut�. Pokia� s� Vo�by neakt�vne, va�a in�tal�cia PHP neumo��uje GZIP kompresiu.";
				$lang_string['blog_enable_gzip_txt'] = "Povoli� kompresiu GZIP pre datab�zov� s�bory";
				$lang_string['blog_enable_gzip_output'] = "Povoli� kompresiu GZIP pre HTTP v�stup";
				$lang_string['submit_btn'] = "&nbsp;Odosla�&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>F�ha!</h2>Inform�cie neboli ulo�en�. Po�as ukladania sa objavil probl�m.<br /><br />Server ohl�sil:<br />";
				$lang_string['form_error'] = "Vypl�te pole s n�zvom a menom autora.";
				$lang_string['label_entry_order'] = "Poradie z�znamov:";
				$lang_string['select_new_to_old'] = "Od najnov�ieho";
				$lang_string['select_old_to_new'] = "Od najstar�ieho";
				$lang_string['label_comment_order'] = "Poradie koment�rov:";
				$lang_string['cal_sunday'] = "Nede�a";
				$lang_string['cal_monday'] = "Pondelok";
				$lang_string['label_calendar_start'] = "Prv� de� v t��dni";
				$lang_string['title_sidebar'] = "Postrann� st�pec"; // New in 0.4.7
				$lang_string['title_comments'] = "Koment�r"; // New in 0.4.7
				$lang_string['title_trackback'] = "Zpetn� sledovanie"; // New in 0.4.7
				$lang_string['title_compression'] = "Kompresia"; // New in 0.4.7
				$lang_string['title_entries'] = "Z�znamy"; // New in 0.4.7
				$lang_string['title_general'] = "V�eobecne"; // New in 0.4.7
				$lang_string['title_language'] = "Jazyk"; // New in 0.4.7
				$lang_string['blog_comment_days_expiry'] = "Ko�ko dn� bud� umo�nen� koment�re? (0 znamen� neomedzene)"; // New in 0.4.8
				break;
			case 'trackbacks':
				// Trackbacks
				$lang_string['title'] = "Zpetn� sledovanie (trackbacks)";
				$lang_string['header'] = "URL tohoto z�znamu pre zpetn� sledovanie:";
				$lang_string['delete_btn'] = "vymaza�";
				// Error Response
				$lang_string['error_add'] = "Chyba pri ukladan� sledovania.";
				break;
			case 'options':
				$lang_string['title'] = "Vo�by";
				$lang_string['instructions'] = "Pou�ite formul�r ni��ie pre nastavenie form�tu d�t a �asu va�ich z�znamov. M��ete zvolit 12 alebo 24 hodinov� form�t �asu a kr�tky alebo dlh� form�t pre d�tum. <b>N�h�ad</b> bude upraven� automaticky po ka�dej zmene.";
				// Long Date
				$lang_string['ldate_title'] = "Dlh� form�t d�t:";
				$lang_string['weekday'] = "De� v t��dni";
				$lang_string['month'] = "Mesiac";
				$lang_string['day'] = "De�";
				$lang_string['year'] = "Rok";
				$lang_string['none'] = "�iadny";
				// Short Date
				$lang_string['sdate_title'] = "Kr�tky form�t d�t:";
				$lang_string['s_month'] = "Mesiac";
				$lang_string['s_mon'] = "MMM";
				$lang_string['s_day'] = "De�";
				$lang_string['s_year'] = "Rok";
				$lang_string['zero_day'] = "�vodn� nula pre de�";
				$lang_string['show_century'] = "Uk�za� storo�ie";
				// Time
				$lang_string['time_title'] = "Form�t �asu:";
				$lang_string['12hour'] = "12 hodinov�";
				$lang_string['24hour'] = "24 hodinov�";
				$lang_string['before_noon'] = "Dopoludnia";
				$lang_string['after_noon'] = "Poobede";
				// Date
				$lang_string['date_title'] = "Zobrazenie d�t:";
				$lang_string['long_date'] = "Dlh�";
				$lang_string['short_date'] = "Kr�tke";
				$lang_string['time'] = "�as";
				// Menu
				$lang_string['menu_title'] = "Zobrazenie d�t v menu:";
				$lang_string['long_date'] = "Dlh�";
				$lang_string['short_date'] = "Kr�tke";
				// Used in multiple places
				$lang_string['zero_day'] = "�vodn� nula pre de�";
				$lang_string['zero_month'] = "�vodn� nula pre mesiac";
				$lang_string['zero_hour'] = "�vodn� nula pre hodinu";
				$lang_string['separator'] = "Oddelova�:";
				$lang_string['preview'] = "N�h�ad:";
				$lang_string['server_offset'] = "Posun �asu na serveri:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Odosla�&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>F�ha!</h2>Inform�cie neboli ulo�en�. Po�as ukladania sa objavil probl�m.<br /><br />Server ohl�sil:<br />";
				break;
			case 'themes':
				$lang_string['title'] = "Vzh�ady";
				$lang_string['instructions'] = "Pou�ite rozbalovacie menu a vyberte vzh�ad.";
				// Themes
				$lang_string['choose_theme'] = "Vzh�ady:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Odesla�&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Ouha!</h2>Inform�cie neboli ulo�en�. Po�as ukladania sa objavil probl�m.<br /><br />Server ohl�sil:<br />";
				break;
			case 'upload_img':
				$lang_string['title'] = "Nahra� obr�zok";
				$lang_string['instructions'] = "Kliknite na tla��tko ni��ie a vyberte s�bor k nahraniu.";
				$lang_string['select_file'] = "Vybra� s�bor:";
				$lang_string['upload_btn'] = "Nahra�";
				// Error Response
				$lang_string['error'] = "<h2>F�ha!</h2>Ned� sa nahra� obr�zok. Tu s� podrobnej�ie inform�cie:<br /><br />Server ohl�sil:<br />";
				break;
			case 'search':
				$lang_string['title'] = "V�sledky h�adania";
				$lang_string['instructions'] = "V�sledky h�addnia pre <b>%string</b>:";
				$lang_string['not_found'] = "Ni� nebolo n�jden�";
				break;
			case 'contact':
				$lang_string['contact_capcha'] = "Antispam: Vlo�te "; // 0.4.2
				$lang_string['title'] = "Kontaktujte ma";
				$lang_string['instructions'] = "Vypl�te formul�r:";
				$lang_string['form_error'] = "Vypl�te pole Vec a Text spr�vy.";
				$lang_string['name'] = "Meno:";
				$lang_string['email'] = "E-mail:";				
				$lang_string['subject'] = "Vec:";
				$lang_string['comment'] = "Text spr�vy:";
				$lang_string['submit_btn'] = "&nbsp;Odosla�&nbsp;";
				$lang_string['success'] = "<h2>�sp�ch!</h2>Va�a spr�va bola odoslan�.<p />";
				$lang_string['failure'] = "<h2>Chyba!</h2>Va�a zpr�va nebola odoslan�. Naj�astej�� d�vod je �patne zadan� antispamov� re�azec.<p />";
				$lang_string['contactsent'] = "Kontakt odoslan� zo str�nok: ";  // New for 0.4.6
				$lang_string['IPAddress'] = "IP adresa:";  // New for 0.4.6
				$lang_string['useragent'] = "Pou��vate:";  // New for 0.4.6
				$lang_string['wrote'] = "<i>%s %s nap�sal:</i><br />\n<br />\n%s"; // New for 0.4.6.2
				break;
			case 'stats':
				$lang_string["title"] = "�tatistiky";
				$lang_string["general"] = "V�eobecne";
				$lang_string["entry_info"] = "<b>%s</b> z�znamov obsahuje <b>%s</b> slov, ulo�en�ch v <b>%s</b> bajtoch";
				$lang_string["comment_info"] = "<b>%s</b> koment�rov obsahuje <b>%s</b> slov ulo�en�ch v <b>%s</b> bajtoch";
				$lang_string["trackback_info"] = "<b>%s</b> zpetn�ch sledovan� ulo�en�ch v <b>%s</b> bajtoch";
				$lang_string["static_info"] = "<b>%s</b> �tatick�ch str�nok obsahuje <b>%s</b> slov ulo�en�ch v <b>%s</b> bajtoch";
				$lang_string["most_viewed_entries"] = "10 naj�astej�ie zobrazen�ch z�znamov";
				$lang_string["most_commented_entries"] = "10 naj�astej�ie komentovan�ch z�znamov";
				$lang_string["most_trackbacked_entries"] = "10 najviac zpetne sledovan�ch z�znamov";
				$lang_string['vote_info'] = "<b>%s</b> hodnoten� ulo�en�ch v <b>%s</b> bajtoch"; // 0.4.1
				$lang_string["most_voted_entries"] = "10 najviac hodnoten�ch z�znamov"; // 0.4.1
				$lang_string["most_rated_entries"] = "10 najlep�ie hodnoten�ch z�znamov"; // 0.4.1
				break;
			case 'errorpage-nocookies':  // New for 0.4.6
				$lang_string["title"] = 'HTTP chyba 403.8 - Pr�stup na str�nku/funkcia zak�zan�';
				$lang_string["errorline1"] = 'Str�nka alebo funkcia, ktor� ste se pok�sili vyvola� vy�aduje pou�itie cookies.';
				$lang_string["errorline2"] = 'Obnovte funk�nost cookie vo va�om prehliada�i alebo ochrannom software a sk�ste v� po�iadavok znovu.';
				$lang_string["clientid"] = 'ID klienta: ';
				break;
			case 'errorpage':  // New for 0.4.6
				$lang_string["403.8"] = 'HTTP Chyba 403.8 - Pr�stup na str�nku/funkcia zak�zan�';
				$lang_string["404"] = 'HTTP Chyba 404 - Str�nka/funkcia neexistuje';
				$lang_string["error_404"] = 'Str�nka alebo funkcia, ktor� ste sa pok�sili vyvola� neexistuje.';
				$lang_string["error_javascript"] = 'Str�nka alebo funkcia, ktor� ste sa pok�sili vyvola� vy�aduje javascript.';
				$lang_string["error_emailnotsent"] = 'Zpr�va, ktor� ste sa pok�sili odosla� je chybn�.';
				$lang_string["error_emailnotsentcapcha"] = 'Spr�va, ktor� ste se pok�sili odosla�, je chybn�, preto�e antispamov� retazec bol vlo�en� nespr�vne alebo v�bec.';
				$lang_string["clientid"] = 'ID klienta: ';
				break;
			case 'emoticons':  // New for 0.4.7
				$lang_string['title'] = "Administr�cia smajlikov";
				$lang_string['instructions'] = "
					Vyberte smajl�ky, ktor� chcete pou��va�. Do pol��ok formul�ra zap�te retazce, ktor� bud� nahradzovan� smajl�kmi. M��ete pou�� nieko�ko r�zn�ch retazcov, oddelen�ch �iarkami.<br /><br />
		
					Napr�klad:<br />
					:) :-) :SMILE: :HAPPY:<br /><br />
					
					<i>(Doporu�ujeme pou��va� dlh�ie ako dvouznakov� re�azec, 
					aby nedoch�dzalo k nepredpokladan�m n�hrad�m v be�nom texte)</i>";
				$lang_string["upload_instructions"] = 'Nahra� nov� smajl�k:';
				$lang_string["upload_success"] = '�spech! obr�zok bol �spe�ne nahran�!';
				$lang_string["upload_error"] = 'Chyba! obr�zok nebol nahran�.';
				$lang_string["upload_invalid"] = 'Chyba! Nespr�vny s�bor s obr�zkom. Obr�zok mus� by� png, jpg alebo gif.';
				$lang_string["save_success"] = 'Nastavenie smajl�kov bolo �spe�ne ulo�en�!';
				$lang_string["save_error"] = 'Chyba! Nastavenie smajl�kov nebolo ulo�en�.';
				$lang_string["save_button"] = 'Ulo�i� smajl�ky';
				break;
			default:
				break;
		}
	}
?>
