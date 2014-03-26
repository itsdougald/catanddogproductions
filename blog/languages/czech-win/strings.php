<?php
	// Czech Language File
	// (c) 2006 Josef Klimosz, jklimosz <at> gmail <dot> com
	// for version 0.5.1 edited by (c) Lupyno, lupyno <at> seznam <dot> cz 

	// Simple PHP Version: 0.5.1
	// Czech Language Version: 0.5.1	

	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;			

		// Language: Czech
		$lang_string['language'] = 'czech';
		$lang_string['locale'] = array('cs_CZ', 'cs','czech');
		$lang_string['rss_locale'] = 'cs-CZ'; // New 0.4.8

		// Windows Charset: CP1250
		$lang_string['html_charset'] = 'CP1250';
		$lang_string['php_charset'] = 'CP1250';
		setlocale( LC_TIME, $lang_string['locale'] );		

		// Some Global Strings		

		// Menu
		$lang_string['menu_links'] = "Odkazy";
		$lang_string['menu_home'] = "Hlavn� str�nka";
		$lang_string['menu_contact'] = "Kontakt";
		$lang_string['menu_stats'] = "Statistiky";
		$lang_string['menu_calendar'] = "Kalend��"; // New for 0.4.8
		$lang_string['menu_archive'] = "Archivy";
		$lang_string['menu_viewarchives'] = "Uk�zat archivy";
		$lang_string['menu_menu'] = "Menu";
		$lang_string['menu_add'] = "P�idat z�znam";
		$lang_string['menu_add_static'] = "P�idat str�nku";
		$lang_string['menu_upload'] = "Nahr�t obr�zek";
		$lang_string['menu_setup'] = "Nastaven�";
		$lang_string['menu_categories'] = "Kategorie";
		$lang_string['menu_info'] = "Meta data";
		$lang_string['manage_users'] = "Spr�va u�ivatel�";
    $lang_string['manage_php_config'] = "zobrazit PHP nastaven�"; // New in 0.5.0.1
		$lang_string['menu_options'] = "Datum a �as";
		$lang_string['menu_themes'] = "Vzhledy";
		$lang_string['menu_colors'] = "Barvy";
		$lang_string['menu_change_login'] = "Zm�nit p�ihl�en�";
		$lang_string['menu_logout'] = "Odhl�en�";
		$lang_string['menu_login'] = "P�ihl�en�";
		$lang_string['menu_most_recent'] = "Nejnov�j�� koment��e";
		$lang_string['menu_most_recent_entries'] = "Nejnov�j�� z�znamy";
		$lang_string['menu_most_recent_trackback'] = "Nejnov�j�� odezvy";
		$lang_string['menu_add_block'] = "Bloky";
		$lang_string['menu_emoticons'] = "Smajl�ky"; // New for 0.4.7
		$lang_string['menu_avatar'] = "Avatar"; // New for 0.4.7
		$lang_string['menu_moderation'] = "Pr�va/IP nastaven�"; // New for 0.4.9
    $lang_string['menu_commentmoderation'] = "Neschv�len� koment��e"; // New for 0.5.0
    $lang_string['menu_random_entry'] = "N�hodn� z�znam"; // New for 0.5.2
	  $lang_string['menu_plugins'] = "Pluginy"; // New for 0.5.2
    $lang_string['notice_moderator1'] = "M�te ";
    $lang_string['notice_moderator2'] = " koment��(e/�), kter� �ekaj� na schv�len�.";
    $lang_string['notice_loggedin'] = "Nyn� jste p�ihl�eni!";
		
		
    // Counter
		$lang_string['counter_today'] = "Dnes:"; // New for 0.4.8
		$lang_string['counter_yesterday'] = "V�era:"; // New for 0.4.8
		$lang_string['counter_totalsidebar'] = "Celkem:"; // New for 0.4.8
		$lang_string['counter_title'] = "N�v�t�vy"; // New for 0.4.8

		// Other
		$lang_string['home'] = 'Zp�t na hlavn� str�nku';
		$lang_string['nav_next'] = 'Dal��';
		$lang_string['nav_back'] = 'Zp�t';
		$lang_string['nav_first'] = 'Prvn�'; // New in 0.5.0.1
    $lang_string['nav_last'] = 'Posledn�'; // New in 0.5.0.1
		$lang_string['search_title'] = 'Hledej';
		$lang_string['search_go'] = 'Jdi';
		$lang_string['page_generated_in'] = 'Str�nka generov�na %s sekund';
		$lang_string['counter_total'] = 'Zobrazen� webu: '; // New in 0.4.8
		$lang_string['read_more'] = '��st d�le...'; // New in 0.4.8
		$lang_string['randomentry'] = 'N�hodn� z�znam'; // New in 0.5.0.1
		$lang_string['randomquote'] = 'N�hodn� z�znam'; // New in 0.5.0.1

		// SB Functions
		$lang_string['sb_months'] = array( 'ledna', '�nora', 'b�ezna', 'dubna', 'kv�tna', '�ervna', '�ervence', 'srpna', 'z���', '��jna', 'listopadu', 'prosince' );
		$lang_string['sb_default_title'] = 'Bez n�zvu';
		$lang_string['sb_default_author'] = 'Bez autora';
		$lang_string['sb_default_footer'] = 'Bez patky';

		$lang_string['sb_edit'] = 'editovat';
		$lang_string['sb_delete'] = 'vymazat';
		$lang_string['sb_permalink'] = 'trval� odkaz';
		$lang_string['sb_trackback'] = 'zp�tn� sledov�n�';
		$lang_string['sb_postedby'] = 'Napsal'; // 0.5.0
    $lang_string['sb_admin'] = 'Administrator'; // 0.5.0
		$lang_string['sb_relatedlink'] = 'souvisej�c� odkaz'; // <-- New in 0.4.6		

		$lang_string['sb_add_comment_btn'] = 'p�idat koment��';
		$lang_string['sb_read_entry_btn'] = 'uk�zat z�znam'; // 0.5.0
		$lang_string['sb_comment_btn_number_first'] = true;
		$lang_string['sb_comment_btn'] = ' koment��';
		$lang_string['sb_comment_view'] = 'zobrazen�'; // 0.5.0
		$lang_string['sb_comments_plural_btn_number_first'] = false;
		$lang_string['sb_comments_plural_btn'] = 'koment��e:';
    $lang_string['sb_comments_plural_view'] = 'zobrazen�'; // 0.5.0	

		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '';
		$lang_string['sb_view_counter_post'] = ' zobrazen�';

		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = '';
		$lang_string['sb_view_counter_plural_post'] = ' zobrazen�';		

		$lang_string['sb_add_link_btn'] = 'p�idat odkaz';
		$lang_string['sb_rate_entry_btn'] = 'Klikn�te a ohodno�te z�znam';		

		// Z�znam Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
			$lang_string['label_subject'] = "N�zev:";
			$lang_string['label_insert'] = "Vlo�it:";
			$lang_string['btn_bold'] = " b ";
			$lang_string['btn_italic'] = " i ";
			$lang_string['btn_image'] = "img";
			$lang_string['btn_url'] = "url";
			$lang_string['btn_readmore'] = "D�le..."; // 0.4.8
			$lang_string['view_images'] = "Uk�zat obr�zky";
			$lang_string['label_entry'] = "Z�znam:";
			$lang_string['btn_preview'] = "&nbsp;Uk�zat&nbsp;";
			$lang_string['btn_post'] = "&nbsp;Odeslat&nbsp;";
			$lang_string['chk_visiblemenu'] = "Viditeln� (zobrazeno v menu)";
			$lang_string['file_name'] = "N�zev souboru (bez mezer a p��pony):";

			// Javascript Strings
			$lang_string['insert_styles'] = "Vlo�te text, kter� bude form�tov�n:";
			$lang_string['insert_image'] = "Vlo�te URL obr�zku:";
			$lang_string['insert_url1'] = "Vlo�te text, zobrazovan� pod odkazem (      voliteln�):";
			$lang_string['insert_url2'] = "Vlo�te �plnou URL odkazu:";
			$lang_string['insert_url3'] = "Otev��t odkaz v nov�m okn� (voliteln�):";
			$lang_string['form_error'] = "Vypl�te pole s n�zvem a z�znamem.";	

			// More Javascript Strings
			$lang_string['insert_image_optional'] = 'Volby:';
			$lang_string['insert_image_width'] = '���ka (voliteln�):';
			$lang_string['insert_image_height'] = 'V��ka (voliteln�):';
			$lang_string['insert_image_popup'] = 'Po kliknut� zobrazit cel� obr�zek v nov�m okn� (voliteln�):';
			$lang_string['insert_image_float'] = 'Um�st�n� (voliteln�):';
		
			$lang_string['day'] = 'Den';
			$lang_string['month'] = 'M�s.';
			$lang_string['year'] = 'Rok';
			$lang_string['hour'] = 'Hod.';
			$lang_string['minute'] = 'Min.';
			$lang_string['second'] = 'Sek.';
		}	

		switch ($page) {
			case 'add':
				// Add Z�znam
				$lang_string['title'] = "P�idat z�znam";
				$lang_string['instructions'] = "Chcet p�idat z�znam do str�nek? Vypl�te formul�� n�e a klikn�te na 'Uk�zat' pro n�hled nebo na 'Odeslat' pro ulo�en� z�znamu.";
				$lang_string['title_ad'] = "Potvrzen� ping� o odezv�ch";
				$lang_string['instructions_ad'] = "Toto jsou automaticky rozpoznan� URL, kam mohou b�t odes�l�ny pingy. Jestli�e na ur�itou URI ping pos�lat nechcete, odzna�te ji. Klikn�te na 'OK' pro odes�l�n� ping� na ozna�en� URI, nebo klikn�te na 'Zru�it' a pingy nebudou odes�l�ny.";
				$lang_string['label_tb_ping'] = "Pingy o odezv�ch odes�lat na (odd�lit ��rkami):";
				$lang_string['label_tb_autodiscovery'] = "Autorozpozn�n�";
				$lang_string['label_relatedlink'] = "Souvisej�c� odkaz";
				$lang_string['label_categories'] = "Seznam kategori�";

				// Preview / Edit Z�znam
				$lang_string['title_preview'] = "Uk�zat/editovat z�znam";
				$lang_string['instructions_preview'] = "Takto vypad� v� z�znam. Pokud pou��v�te stylov�n� textu nebo vkl�d�te obr�zky, nezapome�te 'uzav��t' v�echny 'tagy'.";
				$lang_string['title_update'] = "�pravy z�znamu";
				$lang_string['instructions_update'] = "V� z�znam m��ete upravit ve formul��i n�e. Po dokon�en� klikn�te na 'Uk�zat' nebo 'Odeslat'.";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Zru�it&nbsp;";

				// Error Response
				$lang_string['error'] = "<h2>Ouha!</h2>Z�znam nebyl ulo�en. B�hem ukl�d�n� se objevil probl�m.<br/><br/>Server ohl�sil:<br/>";
        $lang_string['success'] = "<h2>Z�znam ulo�en!!</h2>V� z�znam byl v po��dku ulo�en."; // 0.4.8.1
        break;
        
			case 'add_static':
				// Add Z�znam
				$lang_string['title'] = "P�idat str�nku";
				$lang_string['instructions'] = "Vypl�te formul�� n�e a p�idejte novou statickou str�nku. Na rozd�l od z�znam� se statick� str�nky objev� jako polo�ky v menu. To je vhodn� pro str�nky, kter� chcete m�t st�le k dispozici, jako nap�. Informace, Kontakty, Pl�ny a pod. Klikn�te na 'Uk�zat' pro n�hled nebo na 'Odeslat' pro ulo�en� str�nky.";

				// Preview / Edit Z�znam
				$lang_string['title_preview'] = "Uk�zat/editovat str�nku";
				$lang_string['instructions_preview'] = "Takto vypad� va�e str�nka. Pokud pou��v�te stylov�n� textu nebo vkl�d�te obr�zky, nezapome�te 'uzav��t' v�echny 'tagy'.";
				$lang_string['title_update'] = "�pravy str�nky";
				$lang_string['instructions_update'] = "Va�i str�nku m��ete upravit ve formul��i n�e. Po dokon�en� klikn�te na 'Uk�zat' nebo 'Odeslat'.";
				$lang_string['form_error'] = "Vypl�te  pole s n�zvem, textem a n�zvem souboru.";	

				// Error Response
				$lang_string['error'] = "<h2>Ouha!</h2>Z�znam nebyl ulo�en. B�hem ukl�d�n� se objevil probl�m.<br/><br/>Server ohl�sil:<br/>";
				break;
		
    	case 'add_block':
				// Add / Manage Blocks
				$lang_string['title'] = "P�idat/upravit bloky";
				$lang_string['instructions'] = "P�id�n� vlastn�ch blok�. Vypl�te formul�� n�e a klikn�te na 'P�idat blok'. Kliknut�m na tla��tka v�� a n� uprav�te um�st�n� bloku v postrann�m sloupci. Kliknut�m na tla��tko editovat blok uprav�te. Kliknut�m na tla��tko vymazat blok zru��te";
				$lang_string['up'] = "v��";
				$lang_string['down'] = "n�";
				$lang_string['edit'] = "editovat";
				$lang_string['delete'] = "vymazat";
				$lang_string['block_name'] = "N�zev bloku:";
				$lang_string['block_content'] = "Obsah bloku:";
				$lang_string['instructions_edit'] = "Pr�v� editujete blok:";
				$lang_string['instructions_modify'] = "Klikn�te n�e a editujte blok:";
				$lang_string['submit_btn_edit'] = "Editovat blok";
				$lang_string['submit_btn_add'] = "P�idat blok";
				$lang_string['form_error'] = "Vypl�te pole s n�zvem bloku.";
				break;
				
			case 'add_link':
				$lang_string['static_pages'] = "Statick� str�nky:";

				// Add / Manage Links
				$lang_string['title'] = "P�idat/upravit odkazy";
				$lang_string['instructions'] = "P�id�n� vlastn�ch odkaz� na jin� weby. Vypl�te formul�� n�e a klikn�te na 'P�idat odkaz'. Kliknut�m na tla��tka v�� a n� uprav�te um�st�n� odkazu v menu. Kliknut�m na tla��tko editovat odkaz uprav�te. Kliknut�m na tla��tko vymazat odkaz zru��te";
				$lang_string['up'] = "v��";
				$lang_string['down'] = "n�";
				$lang_string['edit'] = "editovat";
				$lang_string['delete'] = "vymazat";
				$lang_string['link_name'] = "N�zev odkazu:";
				$lang_string['link_url'] = "URL odkazu (Voliteln�. Nevypln�n�m vytvo��te odd�lova�):";
				$lang_string['instructions_edit'] = "Pr�v� editujete odkaz:";
				$lang_string['instructions_modify'] = "Klikn�te n�e a upravte odkaz:";
				$lang_string['submit_btn_edit'] = "Editovat odkaz";
				$lang_string['submit_btn_add'] = "P�idat odkaz";
				$lang_string['form_error'] = "Vypl�te pole s n�zvem odkazu.";
				break;
				
			case 'categories':
			
				// Add / Manage Links
				$lang_string['title'] = "P�idat/upravit kategorie";
				$lang_string['instructions'] = "Pou�ijte formul�� n�e pro vytvo�en� kategori�. Ka�dou kategorii zadejte ve form�tu 'N�zev kategorie (id ��slo)'. Hierarchii vytvo��te odsazen�m polo�ek mezerami.<br/><br/><b>P��klad:</b><br/>Hlavn� (1)<br/>Novinky (3)<br/>&nbsp;&nbsp;Nab�dky (6)<br/>&nbsp;&nbsp;Ud�losti (5)<br/>&nbsp;&nbsp;&nbsp;&nbsp;R�zn� (7)<br/>Technologie (2)<br/>";
				$lang_string['error'] = "Chyba";
				$lang_string['current_categories'] = "Vytvo�en� kategorie";
				$lang_string['no_categories_found'] = "Nejsou ��dn� kategorie";
				$lang_string['category_list'] = "Seznam kategori�:";
				$lang_string['validate'] = "Ov��en�";
				$lang_string['submit_btn'] = "&nbsp;Odeslat&nbsp;";
				break;
				
			case 'colors':
				// Change Colors
				$lang_string['title'] = "Zm�na barev";
				$lang_string['instructions'] = "Zde m��ete zm�nit barvy text� a pozad� str�nek. Nejprve vyberte pole n�e a pak pou�ijte nab�dku barev. P��slu�n� hodnoty se zm�n� automaticky.";
				$lang_string['bg_color'] = "Pozad� str�nky";
				$lang_string['main_bg_color'] = "Pozad� hlavn� str�nky";
				$lang_string['border_color'] = "Okraj str�nky";
				$lang_string['inner_border_color'] = "Vnit�n� okraj";
				$lang_string['header_bg_color'] = "Pozad� z�hlav�";
				$lang_string['header_txt_color'] = "Text z�hlav�";
				$lang_string['menu_bg_color'] = "Pozad� menu";
				$lang_string['footer_bg_color'] = "Pozad� z�pat�";
				$lang_string['txt_color'] = "Hlavn� text";
				$lang_string['headline_txt_color'] = "Text nadpisu";
				$lang_string['date_txt_color'] = "Text data";
				$lang_string['footer_txt_color'] = "Text z�pat�";
				$lang_string['link_reg_color'] = "Klidov� odkaz";
				$lang_string['link_hi_color'] = "Zvolen� odkaz";
				$lang_string['link_down_color'] = "Aktivn� odkaz";

				// More Colors
				$lang_string['entry_bg'] = "Pozad� z�znamu";
				$lang_string['entry_title_bg'] = "Pozad� n�zvu z�znamu";
				$lang_string['entry_border'] = "Okraj z�znamu";
				$lang_string['entry_title_text'] = "Text n�zvu z�znamu";
				$lang_string['entry_text'] = "Text z�znamu";
			
			  $lang_string['static_bg'] = "Pozad� statick� str�nky"; // 0.5.0
        $lang_string['static_title_bg'] = "Pozad� n�zvu statick� str�nky"; // 0.5.0
        $lang_string['static_border'] = "Okraj statick� str�nky"; // 0.5.0
        $lang_string['static_title_text'] = "Text n�zvu statick� str�nky"; // 0.5.0
        $lang_string['static_text'] = "Text statick� str�nky"; // 0.5.0

        $lang_string['comment_bg'] = "Pozad� koment��e"; // 0.5.0
        $lang_string['comment_title_bg'] = "Pozad� n�zvu koment��e"; // 0.5.0
        $lang_string['comment_border'] = "Okraj koment��e"; // 0.5.0
        $lang_string['comment_title_text'] = "Text n�zvu koment��e"; // 0.5.0
        $lang_string['comment_text'] = "Text koment��e"; // 0.5.0
			
      	$lang_string['menu_bg'] = "Pozad� menu";
				$lang_string['menu_title_bg'] = "Pozad� n�zvu menu";
				$lang_string['menu_border'] = "Okraj menu";
				$lang_string['menu_title_text'] = "Text n�zvu menu";
				$lang_string['menu_text'] = "Text menu";
				$lang_string['menu_link_reg_color'] = "Klidov� odkaz menu";
				$lang_string['menu_link_hi_color'] = "Zvolen� odkaz menu";
				$lang_string['menu_link_down_color'] = "Aktivn� odkaz menu";

				// Submit
				$lang_string['color_preset'] = "Barevn� sch�ma:";
				$lang_string['scheme_name'] = "Vlo�te n�zev vlastn�ho barevn�ho sch�ma:";
				$lang_string['scheme_file'] = "Vlo�te n�zev souboru (bez mezer a p��pony):";
				$lang_string['save_btn'] = "&nbsp;Ulo�it&nbsp;";
				$lang_string['form_error'] = "Vlo�te n�zev va�eho barevn�ho sch�ma.";
				$lang_string['submit_btn'] = "&nbsp;Odeslat&nbsp;";
				$lang_string['theme_doesnt_allow_colors'] = 'Vybran� vzhled neumo��uje volbu vlastn�ho barevn�ho sch�ma.';

				// Error Response
				$lang_string['error'] = "<h2>Ouha!</h2>Informace nebyly ulo�eny. B�hem ukl�d�n� se objevil probl�m.<br/><br/>Server ohl�sil:<br/>";
				$lang_string['success'] = "<h2>Barvy ulo�eny!</h2>Informace byla v po��dku ulo�ena."; // New for 0.4.8.1
        break;
			
      case 'comments':
				// Comments
				$lang_string['name'] = "Jm�no:"; //New in 0.4.6.2
				$lang_string['email'] = "E-mail:"; //New in 0.4.6.2
				$lang_string['homepage'] = "Str�nky:"; //New in 0.4.6.2
				$lang_string['koment��'] = "Koment��:"; //New in 0.4.6.2
				$lang_string['IPAddress'] = "IP adresa:";  // New for 0.4.6.2
				$lang_string['useragent'] = "Pou��v�te:";  // New for 0.4.6.2
				$lang_string['wrote'] = "<i>Na %s, %s napsal:</i><br/>\n<br/>\n%s"; // New for 0.4.6.2
				
				$lang_string['comment_capcha'] = "Antispam: Vlo�te �et�zec "; // 0.4.2
				$lang_string['title'] = "Koment��e";
				$lang_string['header'] = "Vlo�it koment��";
				$lang_string['instructions'] = "Vypl�te formul�� n�e a p�idejte v� vlastn� koment��.";
				$lang_string['comment_name'] = "Va�e jm�no:";
				$lang_string['comment_email'] = "E-mail:";
				$lang_string['comment_url'] = "URL:";
				$lang_string['commentposted'] = "Nov� koment�� odesl�n: ";  // New for 0.4.6.2
				$lang_string['comment_remember'] = "Zapamatovat:";
				$lang_string['comment_text'] = "Text koment��e:";
				$lang_string['post_btn'] = "&nbsp;Odeslat koment��&nbsp;";
				$lang_string['delete_btn'] = "vymazat";
				$lang_string['ban_btn'] = "Zak�zat IP"; // New for 0.4.8
				$lang_string['expired_comment1'] = "Litujeme. Koment��e byly umo�n�ny po dobu "; // New for 0.4.8
				$lang_string['expired_comment2'] = " dn�."; // New for 0.4.8
				
				$lang_string['blacklisted'] = "Promi�te, va�e IP adresa byla zablokov�na. Nem��ete vkl�dat ��dn� koment��e."; // New for 0.4.8
        $lang_string['bannedword'] = "V� koment��, url, jm�no nebo email obsahuj� slova, kter� byly zak�z�ny administr�torem. V� koment�� proto NEBYL ulo�en!."; // New for 0.4.8
        $lang_string['nocomments'] = "Koment��e jsou pro tento z�znam zak�z�ny."; // New for 0.4.9
        $lang_string['email_moderator'] = "Koment��e jsou nyn� schvalov�ny. Tento koment�� bude zkontrolov�n p�edt�m, ne� se zve�ejn�."; // New for 0.5.0
        $lang_string['user_notice_mod'] = "Schvalov�n� je na tomto blogu aktivn�. V� z�znam pot�ebuje kontrolu administr�tora p�edt�m, ne� se zve�ejn�."; // new for 0.5.0

        $lang_string['return_to_comments'] = 'N�vrat ke koment���m';
        
				// Error Response
				$lang_string['error_add'] = "<h2>Ouha!</h2>Koment�� nebyl ulo�en. B�hem ukl�d�n� se objevil probl�m.<br/><br/>Server ohl�sil:<br/>";
				$lang_string['error_delete'] = "<h2>Ouha!</h2>Koment�� nebyl vymaz�n. B�hem maz�n� se objevil probl�m.<br/><br/>Server ohl�sil:<br/>";
				$lang_string['error_ban'] = "<h2>Ouha!</h2>IP nebyla p�id�na do seznamu zak�zan�ch IP adres.<br/><br/>Server Reported:<br/>";
        $lang_string['success_add'] = "<h2>Koment�� p�id�n!</h2>V� koment�� byl �sp�n� ulo�en."; // New for 0.4.8.1
        $lang_string['success_delete'] = "<h2>Koment�� smaz�n!</h2>Koment�� byl definitivn� smaz�n."; // New for 0.4.8.1
        $lang_string['success_ban1'] = "<h2>IP adresa zak�z�na!";
        $lang_string['success_ban2'] = "</h2>Pro budouc� odebr�n� tohoto banu, pou�ijte mo�nosti spr�vy v z�lo�ce nastaven�."; // New for 0.4.8.1
        $lang_string['form_error'] = "Vypl�te pole se jm�nem, textem koment��e a Antispamem.";
        $lang_string['error_noip'] = "��dn� IP adresa nen� zad�na v blacklistu.";

        $lang_string[ 'error_comments_disabled' ] = '<h2>Chyba!</h2>Pozor! Koment��e jsou na tomto blogu zak�z�ny. Chcete snad spamovat?'; // New 0.5.0
        $lang_string[ 'error_no_match' ] = "<h2>Chyba!</h2>Va�e IP adresa nesed� se zadan�mi IP adresami. Chcete snad spamovat?"; // New 0.5.0
        $lang_string[ 'error_fields_missing' ] = '<h2>Chyba!</h2>Chyb� n�sleduj�c� pole: '; // New 0.5.0
        $lang_string[ 'error_spambot' ] = '<h2>Chyba!</h2>Nejsou zadan� symboly. Chcete snad spamovat?'; // New 0.5.0
        $lang_string[ 'error_capcha' ] = '<h2>Chyba!</h2>Symboly, kter� jste zadali nejsou spr�vn�.'; // New 0.5.0
        $lang_string[ 'error_bad_data' ] = '<h2>Chyba!</h2>Data pro z�pis nejsou spr�vn�. Jste hacker?'; // New 0.5.0
        $lang_string[ 'error_entry_missing' ] = '<h2>Chyba!</h2>Sna��te se komentovat an z�znamu, kter� neexistuje.'; // New 0.5.0
        $lang_string[ 'error_empty_text' ] = '<h2>Chyba!</h2>Nenapsali jste ��dn� z�znam nebo jm�no.'; // New 0.5.0
        break;

			case 'delete':
				$lang_string['title'] = "Vymazat z�znam";
				$lang_string['instructions'] = "Chcete vymazat tento z�znam? Ujist�te se, �e to opravdu chcete prov�st, akci nelze vr�tit...";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Zru�it&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Ouha!</h2>Nelze vymazat z�znam.<br/><br/>Server ohl�sil:<br/>";
				$lang_string['success'] = "<h2>Z�znam smaz�n!</h2>Tento z�znam byl ji� smaz�n."; // New for 0.4.8.1
				break;
				
			case 'delete_static':
				$lang_string['title'] = "Vymazat str�nku";
				$lang_string['instructions'] = "Chcete vymazat tuto str�nku? Ujist�te se, �e to opravdu chcete prov�st, akci nelze vr�tit......";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Zru�it&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Ouha!</h2>Nelze vymazat str�nku.<br/><br/>Server ohl�sil:<br/>";
				$lang_string['success'] = "<h2>Statick� str�nka byla smaz�na!</h2>Tato statick� str�nka byla ji� smaz�na."; // New for 0.4.8.1
				break;
				
			case 'image_list':
				$lang_string['title'] = "Seznam obr�zk�";
				$lang_string['instructions'] = "Kliknut�m na odkazy n�e zobraz�te obr�zky.<br/><br/>P�id�n� obr�zku do z�znamu:<br/>1) Ctrl (nebo prav�) klik na odkaz, vyberte 'Kop�rovat odkaz do schr�nky'.<br/>2) Vra�te se na p�id�n� nebo editaci z�znamu.<br/>3) Klikn�te na tla��tko 'img' a vlo�te adresu obr�zku do formul��e.";
				break;
				
			case 'info':
				$lang_string['title'] = "Meta data";
				$lang_string['instructions'] = "Informace n�e jsou pou�ity jako &quot;meta data&quot;, kter� pom�haj� vyhled�va��m v nalezen� spr�vn�ch informac� o va�ich str�nk�ch. Informace mohou b�t vyu��v�ny tak� v RSS kan�lech.";
				$lang_string['info_keywords'] = "Kl��ov� slova (seznam kl��ov�ch slov, odd�len�ch ��rkami):";
				$lang_string['info_description'] = "Popis (obsah nebo voln� textov� popis va�ich str�nek):";
				$lang_string['info_copyright'] = "Pr�va (copyright nebo odkaz na p��slu�n� dokument):";
				$lang_string['tracking_code'] = "Extern� K�d: (HTML k�d, kter� je t�eba spustit na hlavn� str�nce (v tagu hlavi�ky kv�li bezpe�nosti) pro ka�d�ho n�v�t�vn�ka str�nky nap�.: Google Analytics)";
        $lang_string['submit_btn'] = "&nbsp;Odeslat&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Ouha!</h2>Informace nebyly ulo�eny. B�hem ukl�d�n� informac� se objevil probl�m.<br/><br/>Server ohl�sil:<br/>";
        $lang_string['success'] = "<h2>Metadata ulo�ena!</h2>Informace byla v po��dku ulo�ena."; // New for 0.4.8.1
        $lang_string['form_error'] = "Vypl�te pole s n�zvem a jm�nem autora.";
				break;
				
			case 'index':
				// Index
				break;
				
			case 'static':
				// Index
				break;
				
			case 'rating':
				$lang_string['error'] = "<h2>Ouha!</h2>Informace nebyla ulo�ena. B�hem ukl�d�n� se objevil probl�m.<br/><br/>Server ohl�sil:<br/>";
        $lang_string['success'] = "<h2>Hlas ulo�en!</h2>Va�e hlasov�n� bylo v po��dku ulo�eno."; // New for 0.4.8.1
        break;
        
			case 'login':
				$lang_string['upgrade'] = "<h2>Obnoven�</h2>"; // New 0.3.8
				$lang_string['upgrade_count'] = "%n koment��ov�ch soubor� vy�aduje obnoven�:"; // New 0.3.8
				$lang_string['upgrade_url'] = "Obnovit koment��e"; // New 0.3.8
				$lang_string['title'] = "P�ihl�en�";
				$lang_string['instructions'] = "Vlo�te p�ihla�ovac� jm�no a heslo";
				$lang_string['username'] = "P�ihla�ovac� jm�no:";
				$lang_string['password'] = "Heslo";
				$lang_string['submit_btn'] = "&nbsp;Odeslat&nbsp;";
				// Success
				$lang_string['success'] = "<h2>�sp�ch!</h2>Jste p�ihl�en. P��jemnou pr�ci se str�nkami!<p />";
				// Wrong Heslo
				$lang_string['wrong_password'] = "<h2>Ouha!</h2>Nejste p�ihl�en. Zadejte sv� p�ihla�ovac� jm�no a heslo spr�vn� a zkuste to znovu.<p />";
        $lang_string['inactive_account'] = "<h2>Ouha!</h2>Nejste p�ihl�eni. V� ��et byl z n�jak�ho d�vodu deaktivov�n administr�torem.<p />";
        $lang_string['form_error'] = "Vypl�te pole se jm�nem a heslem.";
				break;
				
			case 'logout':
				$lang_string['title'] = "Odhl�en�";
        $lang_string['error'] = "<h2>Nashledanou!</h2>Jste odhl�eni. (Ani jste nebyli p�ihl�eni!)<p />";
        $lang_string['error_no_cookie'] = "<h2>Nashledanou!</h2>Jste odhl�eni. (Nebyly nalezeny cookies. Ani jste nebyli p�ihl�eni!)<p />"; // New 0.5.0
        $lang_string['success'] = "<h2>Nashledanou!</h2>Jste odhl�eni.<p />(Budete p�esm�rov�ni na hlavn� str�nku za 5 sekund.)<p />";
        break;

      case 'forms':
        $lang_string['title'] = "";
        $lang_string['instructions'] = "";
        // Error Response
        $lang_string['instructions'] = "<h2>Ouha!</h2>Odhl�en� neprob�hlo korektn�. Nelze vymazat cookie. Nebo jste st�le p�ihl�en?<p />";
				break;

			case 'set_login':
				$lang_string['title'] = "Zm�na p�ihla�ovac�ho jm�na a hesla";
				$lang_string['instructions'] = "Pou�ijte formul�� n�e a zm��te va�e p�ihla�ovac� jm�no a/nebo heslo. Vlo�te nov� p�ihla�ovac� jm�no a heslo, kter� chcete pou��vat.";
				$lang_string['username'] = "P�ihla�ovac� jm�no:";
				$lang_string['password'] = "Heslo:";
				$lang_string['submit_btn'] = "&nbsp;Odeslat&nbsp;";
				// Success
				$lang_string['success'] = "<h2>�sp�ch!</h2>Your P�ihla�ovac� jm�no a/nebo heslo je aktivn�. P��jemnou pr�ci se str�nkami!<p />";
				// Wrong Heslo
				$lang_string['wrong_password'] = "<h2>Ouha!</h2>Informace nebyla ulo�ena. P�i ukl�d�n� va�eho jm�na a/nebo hesla se objevil probl�m.<br/><br/>Server ohl�sil:<br/>";
				$lang_string['form_error'] = "Vypl�te pole se jm�nem a heslem.";
				$lang_string['explanation'] = "V aktu�ln� verzi programu byla zm�n�na struktura p�ihla�ov�n�.  Nad�le nelze zm�nit hesla a/nebo p�ihl�en� p��mo na str�nk�ch. Pokud chcete zm�nit heslo, vyma�te soubor /config/password.php a ujist�te se, �e soubory install*.php jsou ulo�eny na serveru. Pot� obnovte tuto str�nku nebo se odhla�te. Skript, pou�it� p�i vytv��en� str�nek, se spust� znovu.";  // New for 0.4.6
				break;
			case 'install00':
				$lang_string['title'] = "V�tejte";
				$lang_string['instructions'] = "D�kujeme, �e jste si vybrali Simple PHP Blog!";
				$lang_string['blog_choose_language'] = "Volba jazyka:";
				$lang_string['submit_btn'] = "&nbsp;Odeslat&nbsp;";
				break;
				
			case 'install01':
				$lang_string['title'] = "V�tejte";
				$lang_string['instructions'] = "
				D�kujeme, �e jste si vybrali Simple PHP Blog!<br/><br/>Simple PHP Blog je jednoduch� blogovac� syst�m. Vy�aduje PHP 4.1 nebo vy��� a nastaven� pr�v z�pisu na serveru. V�echny informace jsou ulo�eny v textov�ch souborech, tak�e nen� vy�adov�na datab�ze.<br/><br/>
				Nejprve je pot�eba vytvo�it t�i adres��e (<b>config</b>, <b>content</b> a <b>images</b>) pro ukl�d�n� va�ich informac�. Pak zad�te heslo a m��ete za��t pracovat.<br/><br/>
				<b>Klikn�te n�e a zahajte nastaven�:</b>";
				$lang_string['begin'] = "[ Zah�jit nastaven� ]";
				break;
				
			case 'install02':
				$lang_string['title'] = "Nastaven�";
				$lang_string['instructions'] = "Vytvo�en� adres��� <b>config</b>, <b>content</b> a <b>images</b>:";
				$lang_string['folder_exists'] = "OK! Adres��e existuj�. Nen� t�eba ��dn�ch �prav...";
				$lang_string['folder_failed'] = "Ouha! Nelze vytvo�it adres��...";
				$lang_string['folder_success'] = "�sp�ch! Adres�� vytvo�en...";
				// Help
				$lang_string['help'] = "
				<h2>Ouha!</h2>
				Nelze vytvo�it jeden nebo v�ce adres���!<br/><br/>To m��e b�t zp�sobeno:<br/>
				<ol>
				<li><b>Pr�va z�pisu</b> nejsou spr�vn� nastavena na p��stup <b>Read/Write</b>.</li>
				<li><b>UID</b> (identifikace u�ivatele) v�ech soubor� a adres��� mus� b�t toto�n�.</li>
				</ol>
				Zkuste prov�st opravy popsan� n�e a pak klikn�te na <b>Zkusit znovu</b>:<br/>
				<ol>
				<li>Manu�ln� vytvo�te n�sleduj�c� adres��e: <b>config</b>, <b>content</b> a <b>images</b>.</li>
				<li>Zajist�te <b>pr�va z�pisu</b> pro tyto adres��e: Pou�ijte v� FTP program: vlastn�k (Owner), u�ivatel (User) a sv�t (World) by m�li m�t p��stup <b>Read</b> a <b>Write</b>. <i>(P��padn� m��ete kontaktovat va�eho poskytovatele a po��dat o zm�nu...)</i></li>
				<li>Ujist�te se, �e UID v�ech va�ich soubor� a adres��� jsou shodn�. <i>(P��padn� m��ete kontaktovat va�eho poskytovatele a po��dat o zm�nu...)</i></li>
				</ol>";
				$lang_string['try_again'] = "[ Zkusit znovu ]";
				// Success
				$lang_string['success'] = "<h2>�sp�ch!</h2>Adres��e byly �sp�n� vytvo�eny!<p /><b>Klikn�te n�e pro pokra�ov�n�:</b>";
				$lang_string['continue'] = "[ Pokra�ovat ]";
				break;
				
			case 'install03':
				$lang_string['supported'] = "<b>V� webov� server podporuje n�sleduj�c� kryptok�dov�n�:</b>";
				$lang_string['standard'] = "Standardn� DES: ";
				$lang_string['extended'] = "Roz���en� DES: ";
				$lang_string['MD5'] = "MD5: ";
				$lang_string['blowfish'] = "Blowfish: ";
				$lang_string['enabled'] = "zapnuto";
				$lang_string['disabled'] = "vypnuto";
				$lang_string['using_standard'] = "<b>Pou�ito standardn� DES...</b>";
				$lang_string['using_extended'] = "<b>Pou�ito roz���en� DES...</b>";
				$lang_string['using_MD5'] = "<b style=\"color: green;\">Pou�ito MD5...</b>";
				$lang_string['using_blowfish'] = "<b style=\"color: green;\">Pou�ito Blowfish...</b>";
				$lang_string['using_unknown'] = "<b>Pou�ito nezn�m� k�dov�n�...</b>";
				$lang_string['salt_length'] = " <i>(Salt Length = %string)</i><br/>";
				$lang_string['title'] = "Zadat p�ihla�ovac� jm�no a heslo";
				$lang_string['instructions'] = "Pou�ijte formul�� n�e a zadejte p�ihla�ovac� jm�no a heslo.";
				$lang_string['username'] = "P�ihla�ovac� jm�no:";
				$lang_string['password'] = "Heslo:";
				$lang_string['submit_btn'] = "&nbsp;Odeslat&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Gratulujeme!</h2>Jste p�ihl�en. Klikn�te n�e a p�jd�te na nastaven�, kde m��ete zadat n�zev va�ich str�nek. P��jemnou pr�ci se str�nkami!<p />";
				$lang_string['btn_setup'] = "[ Nastaven� ]";
				// Wrong Heslo
				$lang_string['wrong_password'] = "<h2>Ouha!</h2>Informace nebyly ulo�eny. P�i ukl�d�n� va�eho p�ihla�ovac�ho jm�na a/nebo hesla se objevil probl�m.<br/><br/>Server ohl�sil:<br/>";
				$lang_string['form_error'] = "Vypl�te pole se jm�nem a heslem.";
				break;
				
			case 'install04':
				$lang_string['title'] = "Vytvo�en� souboru s heslem";
				$lang_string['instructions'] = "Toto je d�le�it� ��st:<br/>
				<ol>
				<li>Spus�e n�jak� textov� editor <i>(Notepad, WordPad, Word, BBEdit, Pico, VI atd...).</i></li>
				<li>Vytvo�te nov� textov� soubor.</li>
				<li>Zkop�rujte a vlo�te do souboru k�d z okna n�e.</li>
				<li>Soubor ulo�te a pojmenujte <b>password.php</b> <i>(soubor ulo�te jako <b>text</b> nebo <b>�ist� (plain) text</b>).</i></li>
				<li>Spus�te FTP program.</li>
				<li>Nahrejte soubor <b>password.php</b> do adres��e <b>config</b> na va�em serveru.</li>
				<li>Vyma�te <b>password.php</b> z va�eho disku.</li>
				</ol>
				";
				$lang_string['information'] = "<i>Pozn�mka: Pokud chcete zm�nit va�e p�ihla�ovac� jm�no a heslo (z�ejm� zapomenut�), vyma�te soubor <b>password.php</b> v adres��i <b>config</b>. P�i p��t� n�v�t�v� str�nek si cel� postup zopakujete...</i>";
				$lang_string['code'] = "K�d pro soubor <b>password.php</b>:";
				$lang_string['continue'] = "[ Pokra�ovat ]";
				break;
				
			case 'install05':
			case 'install06':
				$lang_string['title'] = "P�ihl�en�";
				$lang_string['instructions'] = "Vlo�te p�ihla�ovac� jm�no a heslo";
				$lang_string['username'] = "P�ihla�ovac� jm�no:";
				$lang_string['password'] = "Heslo";
				$lang_string['submit_btn'] = "&nbsp;Odeslat&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Gratulujeme!</h2>Jste p�ihl�en.<p />
				Klikn�te n�e a p�ejd�te na str�nku <b>Nastaven�</b>, kde m��ete up�esnit ostatn� vlastnosti str�nek.<p />
				<i>Pozn�mka: Nyn� je proces nastaven� dokon�en. Doporu�ujeme vymazat soubory <b>installXX.php</b> z va�eho webu (tj. install00.php a� install06.php).</i><p />";
				// Wrong Heslo
				$lang_string['wrong_password'] = "<h2>Ouha!</h2>Nejste p�ihl�en. Prov��te, zda je zadan� p�ihla�ovac� jm�no a heslo spr�vn� a zkuste to znovu.<p />";
				$lang_string['form_error'] = "Vypl�te pole se jm�nem a heslem.";
				// Success
				$lang_string['btn_setup'] = "[ Nastaven� ]";
				$lang_string['btn_try_again'] = "[ Zkusit znovu ]";
				break;
				
			case 'setup':
				$lang_string['title'] = "Nastaven�";
				$lang_string['instructions'] = "N�e m��ete zm�nit n�zev va�ich str�nek a osobn� informace.";
				$lang_string['blog_title'] = "N�zev str�nek:";
				$lang_string['blog_header'] = "URL pro grafickou hlavi�ku: images/blogheader.jpg (Nechte pr�zdn� pro z�kladn� t�mata).";
				$lang_string['blog_author'] = "Autor:";
				$lang_string['blog_email'] = "E-mail (v�ce e-mailov�ch adres by m�lo b�t odd�leno ��rkami, nevypln�n�m vypnete str�nku Kontaktujte mne)"; // Updated 0.4.7
				$lang_string['blog_avatar'] = "URL avataru (ponechte nevypln�n� pro ��dn�):"; // <-- New 0.4.7
				$lang_string['blog_footer'] = "Z�pat�:";
				$lang_string['blog_choose_language'] = "Volba jazyka:";
				$lang_string['blog_enable_comments'] = "Povolit koment��e";
				$lang_string['blog_comments_popup'] = "Koment��e otev�rat ve vyskakovac�m okn�";
				$lang_string['blog_enable_start_category'] = "Pou��t konkr�tn� kategorii z�znam� pro prvn� stranu: "; // Now for 0.5.1
        $lang_string['blog_search_top'] = "Zobrazit Hled�n� v z�znamech (m�sto um�st�n� v bo�n� li�t�)."; // New for 0.5.0
        $lang_string['blog_enable_static_block'] = "Zobrazit konkr�tn� blok jako prvn� z�znam v blogu: "; // New for 0.5.0
        $lang_string['static_block_border'] = 'Zobrazit okraj'; // New for 0.5.0
        $lang_string['static_block_noborder'] = 'Bez okraje'; // New for 0.5.0
				$lang_string['blog_enable_voting'] = "Povolit �ten���m hodnocen� z�znam�";
				$lang_string['blog_enable_cache'] = "Povolit ke�ov�n� z�znam� (m��e zrychlit na��t�n� u n�kter�ch server�)"; // New for 0.4.6
				$lang_string['blog_enable_calendar'] = "Zobrazit kalend��"; // New for 0.4.6
				$lang_string['blog_enable_archives'] = "Zobrazit archivy"; // New for 0.4.8
				$lang_string['blog_enable_counter'] = "Zobrazit ��ta� p��stup� v postrann�m sloupci"; // New for 0.4.8
				$lang_string['blog_counter_hours'] = "Po�et hodin do vynulov�n� p��stupu (pro specifickou IP adresu):"; // New for 0.4.8
				$lang_string['blog_enable_login'] = "Zobrazit p�ihl�en� (jinak si nejd��ve vytvo�te z�lo�ku \"login.php\"...)"; // New for 0.4.8
				$lang_string['blog_enable_title'] = "Povolit textov� n�zev blok� (odzna�te, pokud chcete pou��vat grafiku)"; // New for 0.4.6
				$lang_string['blog_enable_permalink'] = "Povolit pevn� odkazy na z�znamy"; // New for 0.4.6
				$lang_string['blog_enable_capcha'] = "Povolit antispam"; // New for 0.4.8
				$lang_string['blog_footer_counter'] = "Zobrazit ��ta� p��stup� v z�pat�"; // New for 0.4.8
				$lang_string['blog_enable_capcha_image'] = "Grafick� (mus� b�t instalov�na GD knihovna) / textov� antispam"; // New for 0.4.8
				$lang_string['blog_enable_stats'] = "Zobrazit statistiku v menu"; // New for 0.4.7
				$lang_string['blog_enable_lastcomments'] = "Zobrazit seznam nejnov�j��ch koment���"; // New for 0.4.7
				$lang_string['blog_enable_lastentries'] = "Zobrazit seznam nejnov�j��ch z�znam�"; // New for 0.4.7
				$lang_string['blog_email_notification'] = "Pos�lat e-mailovou notifikaci koment���";
				$lang_string['blog_send_pings'] = "Pos�lat &quot;pingy&quot;";
				$lang_string['blog_ping_urls'] = "Vlo�te kompletn� URL (nap�. http://rpc.weblogs.com/RPC2) slu�by pos�l�n� &quot;ping�&quot;.<br/>(M��ete vlo�it v�ce adres, odd�len�ch ��rkami)";
				$lang_string['blog_trackback_about'] = "Zp�tn� sledov�n� (trackbacks) zaji��uje notifikaci mezi weby. Web dostane informaci o tom, �e je na n�j odkazov�no, pomoc� odes�lan�ch ping�. Tak lze zjistit, kdo je p�ipojen na va�e str�nky.<br/> URL ping� m��ete vlo�it manu�ln�, nebo zkusit automatick� rozpozn�n�.";
				$lang_string['blog_trackback_enabled'] = "Povolit zp�tn� sledov�n� odkaz� a z�znam�";
				$lang_string['blog_trackback_auto_discovery'] = "Povolit automatick� rozpozn�v�n� v z�znamech, obsahuj�c�ch URL adresy";
				$lang_string['blog_max_entries'] = "Nejvy��� po�et zobrazen�ch z�znam�:";
				$lang_string['blog_comment_tags'] = "Tagy, povolen� v koment���ch:";
				$lang_string['blog_gzip_about'] = "Po��naje PHP 4.0.4 lze ��st a zapisovat soubory, komprimovan� metodou GZIP (.gz),	a u�et�it tak diskov� prostor. Tak� lze komprimovat str�nky odes�lan� prohl�e��m, podporuj�c�m tuto kompresi, a t�m u�et�it objem p�enosu dat.<br/><br/> Podpora knihovny Zlib v PHP nen� p�edem zapnuta. Pokud jsou volby neaktivn�, va�e instalace PHP neumo��uje GZIP kompresi.";
				$lang_string['blog_enable_gzip_txt'] = "Povolit kompresi GZIP pro datab�zov� soubory";
				$lang_string['blog_enable_gzip_output'] = "Povolit kompresi GZIP pro HTTP v�stup";
				$lang_string['submit_btn'] = "&nbsp;Odeslat&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Ouha!</h2>Informace nebyly ulo�eny. B�hem ukl�d�n� se objevil probl�m.<br/><br/>Server ohl�sil:<br/>";
        $lang_string['success'] = "<h2>Nastaven� ulo�eno!</h2>Informace byla v po��dku ulo�ena."; // New for 0.4.8.1
        $lang_string['form_error'] = "Vypl�te pole s n�zvem a jm�nem autora.";
				$lang_string['label_entry_order'] = "Po�ad� z�znam�:";
				$lang_string['select_new_to_old'] = "Od nejnov�j��ho";
				$lang_string['select_old_to_new'] = "Od nejstar��ho";
				$lang_string['label_comment_order'] = "Po�ad� koment���:";
				$lang_string['cal_sunday'] = "Ned�le";
				$lang_string['cal_monday'] = "Pond�l�";
				$lang_string['label_calendar_start'] = "Prvn� den v t�dnu";
				$lang_string['title_sidebar'] = "Postrann� sloupec"; // New in 0.4.7
				$lang_string['title_comments'] = "Koment��e"; // New in 0.4.7
				$lang_string['title_trackback'] = "Zp�tn� sledov�n�"; // New in 0.4.7
				$lang_string['title_compression'] = "Komprese"; // New in 0.4.7
				$lang_string['title_entries'] = "Z�znamy"; // New in 0.4.7
				$lang_string['title_general'] = "V�eobecn�"; // New in 0.4.7
				$lang_string['title_language'] = "Jazyk"; // New in 0.4.7
				$lang_string['blog_comment_days_expiry'] = "Kolik dn� budou umo�n�ny koment��e? (0 znamen� neomezen�)"; // New in 0.4.8
				$lang_string['blog_comments_moderation'] = "Zkontrolov�n� koment��� p�ihl�en�m u�ivatelem (v�dy viditeln� pro aktivn�ho u�ivatele)"; // New in 0.5.0
        $lang_string['comment_moderation'] = "Nastven� moderov�n� koment���"; // New in 0.5.0
				break;
			case 'comment_moderation':
        $lang_string['title'] = "Nezkontrolovan� koment��e";
        $lang_string['instructions'] = "Toto je seznam v�ech koment��� kter� nejsou k dispozici nep�ihl�en�m u�ivatel�m, proto�e nejsou schv�leni Administr�torem.";
        $lang_string['header'] = "Seznam moderace";
        $lang_string['enteredby'] = "Zaznamenal: ";
        $lang_string['entrydate'] = "Datum z�znamu: ";
        $lang_string['blogentrytitle'] = "N�zev Blogu: ";
        $lang_string['enteredcontent'] = "Obsah: ";
        $lang_string['totalunmodded'] = " celkov� po�et polo�ek �ekaj�c�ch na moderaci.";
        $lang_string['mod_approve'] = "[Schv�lit] ";
        $lang_string['mod_delete'] = "[Smazat]";
        break;
      case 'moderation':
        $lang_string['title'] = "Nastaven� moderace";
        $lang_string['instructions'] = "M��ete zm�nit seznam automatick� moderace.";
        $lang_string['submit_btn'] = "&nbsp;Ulo�it nastaven� moderace&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Ouha!</h2>Informace nebyla ulo�ena. Vyskytl se probl�m s ukl�d�n�m informac�.<br/><br/>Server Reported:<br/>";
        $lang_string['success'] = "<h2>Nastaven� ulo�ena!</h2>Informace byla v po��dku ulo�ena."; // New for 0.4.8.1
        $lang_string['banned_address_list_title'] = "<h2>Zak�zan� IP adresy</h2>";
        $lang_string['banned_address_list'] = "Zde je list IP adres, kter� byly zablokov�ny pro vkl�d�n� koment���. Ka�d� IP je na vlastn�m ��dku a mus� b�t ��seln� (ne DNS n�zvy - ne dom�ny). Pokud jste p�ihl�eni, IP mohou b�t blokov�ny p��mo z prohl�en� koment���.";
        $lang_string['banned_word_list_title'] = "<h2>Zak�zan� slova</h2>";
        $lang_string['banned_word_list'] = "Zde je seznam slov, kter� nejsou povoleny v adres�ch nebo v textu. Ka�d� slovo, nebo skupina slov, mus� b�t jen vlastn�m ��dku. Koment��e budou testov�ny vzhledem ke ka�d� �adce ve stejn�m po�ad� pro ud�len� banu.";
        break;
			case 'trackbacks':
				// Trackbacks
				$lang_string['title'] = "Zp�tn� sledov�n� (trackbacks)";
				$lang_string['header'] = "URL tohoto z�znamu pro zp�tn� sledov�n�:";
				$lang_string['delete_btn'] = "vymazat";
				// Error Response
				$lang_string['error_add'] = "Chyba p�i ukl�d�n� sledov�n�.";
        $lang_string['error_delete'] = "<h2>Ouha!</h2>Zp�tn� sledov�n� nebylo vymaz�no. Vyskytla se chyba p�i maz�n� zp�tn�ho sledov�n�.<br/><br/>Server odpov�d�:<br/>";
        $lang_string['success_delete'] = "<h2>Zp�tn� sledov�n� smaz�no!</h2>Z�znam pro zp�tn� sledov�n� byl vymaz�n."; // New for 0.4.8.1
        break;

			case 'options':
				$lang_string['title'] = "Volby";
				$lang_string['instructions'] = "Pou�ijte formul�� n�e pro nastaven� form�tu data a �asu va�ich z�znam�. M��ete zvolit 12 nebo 24 hodinov� form�t �asu a  kr�tk� nebo dlouh� form�t pro datum. <b>N�hled</b> bude upraven automaticky po ka�d� zm�n�.";
				// Long Date
				$lang_string['ldate_title'] = "Dlouh� form�t data:";
				$lang_string['weekday'] = "Den v t�dnu";
				$lang_string['month'] = "M�s�c";
				$lang_string['day'] = "Den";
				$lang_string['year'] = "Rok";
				$lang_string['none'] = "��dn�";
				// Short Date
				$lang_string['sdate_title'] = "Kr�tk� form�t data:";
				$lang_string['s_month'] = "M�s�c";
				$lang_string['s_mon'] = "MMM";
				$lang_string['s_day'] = "Den";
				$lang_string['s_year'] = "Rok";
				$lang_string['zero_day'] = "�vodn� nula pro den";
				$lang_string['show_century'] = "Uk�zat stolet�";
				// Time
				$lang_string['time_title'] = "Form�t �asu:";
				$lang_string['12hour'] = "12 hodinov�";
				$lang_string['24hour'] = "24 hodinov�";
				$lang_string['before_noon'] = "Dopoledne";
				$lang_string['after_noon'] = "Odpoledne";
				// Date
				$lang_string['date_title'] = "Zobrazen� data:";
				$lang_string['long_date'] = "Dlouh�";
				$lang_string['short_date'] = "Kr�tk�";
				$lang_string['time'] = "�as";
				// Menu
				$lang_string['menu_title'] = "Zobrazen� data v menu:";
				$lang_string['long_date'] = "Dlouh�";
				$lang_string['short_date'] = "Kr�tk�";
				// Used in multiple places
				$lang_string['zero_day'] = "�vodn� nula pro den";
				$lang_string['zero_month'] = "�vodn� nula pro m�s�c";
				$lang_string['zero_hour'] = "�vodn� nula pro hodinu";
				$lang_string['separator'] = "Odd�lova�:";
				$lang_string['preview'] = "N�hled:";
				$lang_string['server_offset'] = "Posun �asu na serveru:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Odeslat&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Ouha!</h2>Informace nebyly ulo�eny. B�hem ukl�d�n� se objevil probl�m.<br/><br/>Server ohl�sil:<br/>";
        $lang_string['success'] = "<h2>Nastaven� ulo�eno!</h2>Informace byla v po��dku ulo�ena."; // New for 0.4.8.1
        break;

			case 'themes':
				$lang_string['title'] = "Vzhledy";
				$lang_string['instructions'] = "Pou�ijte rozbalovac� menu a vyberte vzhled.";
				// Themes
				$lang_string['choose_theme'] = "Vzhledy:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Odeslat&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Ouha!</h2>Informace nebyly ulo�eny. B�hem ukl�d�n� se objevil probl�m.<br/><br/>Server ohl�sil:<br/>";
        $lang_string['success'] = "<h2>T�ma bylo vybr�no!</h2>Informace byla v po��dku ulo�ena."; // New for 0.4.8.1
        break;
          
			case 'upload_img':
				$lang_string['title'] = "Nahr�t obr�zek";
				$lang_string['instructions'] = "Klikn�te na tla��tko n�e a vyberte soubor k nahr�n�.";
				$lang_string['select_file'] = "Vybrat soubor:";
				$lang_string['upload_btn'] = "Nahr�t";
				// Error Response
				$lang_string['error'] = "<h2>Ouha!</h2>Nelze nahr�t obr�zek. Zde jsou podrobn�j�� informace:<br/><br/>Server ohl�sil:<br/>";
        $lang_string['success'] = "<h2>Obr�zek nahr�n!</h2>Obr�zek byl nahr�n a v po��dku ulo�en."; // New for 0.4.8.1
        break;
        
			case 'search':
				$lang_string['title'] = "V�sledky hled�n�";
				$lang_string['instructions'] = "V�sledky hled�n� pro <b>%string</b>:";
				$lang_string['not_found'] = "Nic nebylo nalezeno";
				break;
				
			case 'contact':
				$lang_string['contact_capcha'] = "Antispam: Vlo�te "; // 0.4.2
				$lang_string['title'] = "Kontaktujte mne";
				$lang_string['instructions'] = "Vypl�te formul��:";
				$lang_string['form_error'] = "Vypl�te pole V�c a Text zpr�vy.";
				$lang_string['name'] = "Jm�no:";
				$lang_string['email'] = "E-mail:";				
				$lang_string['subject'] = "V�c:";
				$lang_string['comment'] = "Text zpr�vy:";
				$lang_string['submit_btn'] = "&nbsp;Odeslat&nbsp;";
				$lang_string['success'] = "<h2>�sp�ch!</h2>Va�e zpr�va byla odesl�na.<p />";
				$lang_string['failure'] = "<h2>Chyba!</h2>Va�e zpr�va nebyla odesl�na. Nej�ast�j�� d�vod je �patn� zadan� antispamov� �et�zec.<p />";
				$lang_string['contactsent'] = "Kontakt odesl�n ze str�nek: ";  // New for 0.4.6
				$lang_string['IPAddress'] = "IP adresa:";  // New for 0.4.6
				$lang_string['useragent'] = "Pou��v�te:";  // New for 0.4.6
				$lang_string['wrote'] = "<i>%s %s napsal:</i><br/>\n<br/>\n%s"; // New for 0.4.6.2
				break;
				
			case 'stats':
				$lang_string["title"] = "Statistiky";
				$lang_string["general"] = "V�eobecn�";
				$lang_string["entry_info"] = "<b>%s</b> z�znam� obsahuje <b>%s</b> slov, ulo�en�ch v <b>%s</b> bajtech";
				$lang_string["comment_info"] = "<b>%s</b> koment��� obsahuje <b>%s</b> slov ulo�en�ch v <b>%s</b> bajtech";
				$lang_string["trackback_info"] = "<b>%s</b> zp�tn�ch sledov�n� ulo�en�ch v <b>%s</b> bajtech";
				$lang_string["static_info"] = "<b>%s</b> statick�ch str�nek obsahuje <b>%s</b> slov ulo�en�ch v <b>%s</b> bajtech";
				$lang_string["most_viewed_entries"] = "10 nej�ast�ji zobrazen�ch z�znam�";
				$lang_string["most_commented_entries"] = "10 nej�ast�ji komentovan�ch z�znam�";
				$lang_string["most_trackbacked_entries"] = "10 nejv�ce zp�tn� sledovan�ch z�znam�";
				$lang_string['vote_info'] = "<b>%s</b> hodnocen� ulo�en�ch v <b>%s</b> bajtech"; // 0.4.1
				$lang_string["most_voted_entries"] = "10 nejv�ce hodnocen�ch z�znam�"; // 0.4.1
				$lang_string["most_rated_entries"] = "10 nejl�pe hodnocen�ch z�znam�"; // 0.4.1
				break;
				  
			case 'errorpage-nocookies':  // New for 0.4.6
				$lang_string["title"] = 'HTTP chyba 403.8 - P��stup na str�nku/funkci zak�z�n';
				$lang_string["errorline1"] = 'Str�nka nebo funkce, kterou jste se pokusili vyvolat vy�aduje pou�it� cookies.';
				$lang_string["errorline2"] = 'Obnovte funk�nost cookie ve va�em prohl�e�i nebo ochrann�m software a zkuste v� po�adavek znovu.';
				$lang_string["clientid"] = 'ID klienta: ';
				break;
				
			case 'errorpage':  // New for 0.4.6
				$lang_string["403.8"] = 'HTTP Chyba 403.8 - P��stup na str�nku/funkci zak�z�n';
				$lang_string["404"] = 'HTTP Chyba 404 - Str�nka/funkce neexistuje';
				$lang_string["error_404"] = 'Str�nka nebo funkce, kterou jste se pokusili vyvolat neexistuje.';
				$lang_string["error_javascript"] = 'Str�nka nebo funkce, kterou jste se pokusili vyvolat vy�aduje javascript.';
				$lang_string["error_emailnotsent"] = 'Zpr�va, kterou jste se pokusili odeslat je vadn�.';
				$lang_string["error_emailnotsentcapcha"] = 'Zpr�va, kterou jste se pokusili odeslat, je vadn�, proto�e antispamov� �et�zec byl vlo�en nespr�vn� nebo v�bec.';
				$lang_string["clientid"] = 'ID klienta: ';
				break;
				
			case 'emoticons':  // New for 0.4.7
				$lang_string['title'] = "Administrace smajl�k�";
				$lang_string['instructions'] = "Vyberte smajl�ky, kter� chcete pou��vat. Do pol��ek formul��e zapi�te �et�zce, kter� budou nahrazov�ny smajl�ky. M��ete pou��t n�kolik r�zn�ch �et�zc�, odd�len�ch ��rkami.<br/><br/>Nap��klad:<br/>:) :-) :SMILE: :HAPPY:<br/><br/><i>(Doporu�ujeme pou��vat del�� ne� dvouznakov� �et�zce, aby nedoch�zelo k nep�edpokl�dan�m n�hrad�m v b�n�m textu)</i>";
				$lang_string["upload_instructions"] = 'Nahr�t nov� smajl�k:';
				$lang_string["upload_success"] = '�sp�ch! Obr�zek byl �sp�n� nahr�n!';
				$lang_string["upload_error"] = 'Chyba! Obr�zek nebyl nahr�n.';
				$lang_string["upload_invalid"] = 'Chyba! Nespr�vn� soubor s obr�zkem. Obr�zek mus� b�t png, jpg nebo gif.';
				$lang_string["save_success"] = 'Nastaven� smajl�k� bylo �sp�n� ulo�eno!';
				$lang_string["save_error"] = 'Chyba! Nastaven� smajl�k� nebylo ulo�eno.';
				$lang_string["save_button"] = 'Ulo�it smajl�ky';
				break;
				
				case 'archives': // New for 0.4.8
        $lang_string['title'] = "Archivy";
        $lang_string['showall'] = "Uk�zat v�e";
        break;

      case 'manage_users':
        $lang_string['title'] = "Upravit spr�vu u�ivatel�";
        $lang_string['instructions'] = "P�idat, upravit, nebo smazat u�ivatele, kte�� nejsou administr�to�i, ale maj� mo�nost z�znamy v blogu a/nebo moderovat koment��e.";
        $lang_string['fulladminerror'] = "Pro tuto volbu mus�te b�t p�ihl�en jako administr�tor!";
        $lang_string['header_user'] = "U�ivatel: ";
        $lang_string['header_property'] = "Vlastnictv�";
        $lang_string['header_value'] = "Hodnota";
        $lang_string['prop_username'] = "Jm�no:";
        $lang_string['prop_fullname'] = "Zobrazovan� jm�no:";
        $lang_string['prop_password'] = "Heslo:";
        $lang_string['prop_email'] = "Email:";
        $lang_string['prop_avatar'] = "URL obr�zku:";
        $lang_string['prop_state'] = "Aktivn�?";
        $lang_string['prop_sec_Moderate'] = "Moderace koment���?";
        $lang_string['prop_sec_Delete'] = "Maz�n� z�znam� v blogu?";
        $lang_string['prop_sec_Edit'] = "Editace jak�chkoliv z�znam�?";
        $lang_string['btn_SaveChanges'] = "Ulo�it zm�ny";
        $lang_string['btn_CreateUser'] = "Vytvo�it u�ivatele";
        $lang_string['btn_Cancel'] = "Cancel";  
        $lang_string['grid_header'] = "Seznam u�ivatel�";
        $lang_string['grid_login'] = 'Login';
        $lang_string['grid_email'] = 'Email';
        $lang_string['grid_avatar'] = 'Obr�zek';
        $lang_string['grid_state'] = 'Aktivn�?';
        $lang_string['btn_modify'] = 'Zm�nit';
        $lang_string['btn_delete'] = 'Smazat';
        $lang_string['create_user'] = 'Vytvo�it nov�ho u�ivatele';
        break;
        
			default:
				break;
		}
	}
?>
