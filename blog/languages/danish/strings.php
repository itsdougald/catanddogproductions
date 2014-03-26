<?php

	// Danish Language File
	// (c) 2005-2006 Jan Normann Nielsen, spam <at> dubbekarl <dot> dk
	// (c) 2004 Thomas Petersen, thomasp <at> nsd <dot> dk
	//
	// Simple PHP Version: 0.4.8
	// Language Version:   0.4.8
		
	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;
			
		// Language: Danish
		$lang_string['language'] = 'dansk';
		
		$lang_string[ 'locale' ] = array('da_DK','danish');
		$lang_string['rss_locale'] = 'da-DK';
		
		// ISO Charset: ISO-8859-15 - Se http://us4.php.net/manual/en/function.htmlspecialchars.php for valg af ISO-8859-15-tegns�t.
		$lang_string['html_charset'] = 'ISO-8859-15';
		$lang_string['php_charset'] = 'ISO-8859-15';
		
		setlocale( LC_TIME, $lang_string['locale'] );
		
		// Some Global Strings
		
		// Menu
		$lang_string['menu_links'] = "Links";
		$lang_string['menu_home'] = "Forside";
		$lang_string['menu_contact'] = "Kontakt mig";
		$lang_string['menu_stats'] = "Statistik";
		$lang_string['menu_calendar'] = "Kalender";
		$lang_string['menu_viewarchives'] = "Vis arkiv";
		$lang_string['menu_archive'] = "Arkiv";
		$lang_string['menu_menu'] = "Menu";
		$lang_string['menu_add'] = "Opret meddelelse";
		$lang_string['menu_add_static'] = "Opret statisk side";
		$lang_string['menu_upload'] = "Upload billede";
		$lang_string['menu_setup'] = "Indstillinger";
		$lang_string['menu_categories'] = "Kategorier";
		$lang_string['menu_info'] = "Meta-tags";
		$lang_string['menu_options'] = "Dato &amp; tid";
		$lang_string['menu_themes'] = "Temaer";
		$lang_string['menu_colors'] = "Farver";
		$lang_string['menu_change_login'] = "Skift login";
		$lang_string['menu_logout'] = "Log af";
		$lang_string['menu_login'] = "Log p�";
		$lang_string['menu_most_recent'] = "Nyeste kommentarer";
		$lang_string['menu_most_recent_entries'] = "Nyeste meddelelser";
		$lang_string['menu_most_recent_trackback'] = "Nyeste trackbacks";
		$lang_string['menu_add_block'] = "Blokke";
		$lang_string['menu_emoticons'] = "Hum�rikoner";
		$lang_string['menu_avatar'] = "Displaybillede";
		
		// Counter
		$lang_string['counter_today'] = "I dag:";
		$lang_string['counter_yesterday'] = "I g�r:";
		$lang_string['counter_totalsidebar'] = "I alt:";
		$lang_string['counter_title'] = "Totaler for t�ller";
		
		// Other
		$lang_string['home'] = "Tilbage til forside";
		$lang_string['nav_next'] = 'N�ste';
		$lang_string['nav_back'] = 'Forrige';
		$lang_string['search_title'] = 'S�g:';
		$lang_string['search_go'] = 'S�g';
		$lang_string['page_generated_in'] = 'Side genereret p� %s sekunder';
		$lang_string['counter_total'] = 'Sidevisninger: ';
		$lang_string['read_more'] = 'L�s mere...';
		
		// SB Functions
		$lang_string['sb_months'] = array( 'Januar', 'Februar', 'Marts', 'April', 'Maj', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'December' );
		$lang_string['sb_default_title'] = 'Ingen titel';
		$lang_string['sb_default_author'] = 'Ingen forfatter';
		$lang_string['sb_default_footer'] = 'Ingen sidefod';
		
		$lang_string['sb_edit'] = 'rediger';
		$lang_string['sb_delete'] = 'slet';
		$lang_string['sb_permalink'] = 'permalink';
		$lang_string['sb_trackback'] = 'trackbacks';
		$lang_string['sb_relatedlink'] = 'relateret link';
		
		$lang_string['sb_add_comment_btn'] = 'tilf�j kommentar';
		$lang_string['sb_comment_btn_number_first'] = true;
		$lang_string['sb_comment_btn'] = 'kommentar';
		$lang_string['sb_comments_plural_btn_number_first'] = true;
		$lang_string['sb_comments_plural_btn'] = 'kommentarer';
		
		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '';
		$lang_string['sb_view_counter_post'] = ' visning';

		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = '';
		$lang_string['sb_view_counter_plural_post'] = ' visninger';
		
		$lang_string['sb_add_link_btn'] = '+ link';
		$lang_string['sb_rate_entry_btn'] = 'Klik for at vurdere meddelelsen';
		
		// Entry Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
			$lang_string['label_subject'] = "Emne:";
			$lang_string['label_insert'] = "Inds�t speciel:";
			$lang_string['btn_bold'] = " f ";
			$lang_string['btn_italic'] = " k ";
			$lang_string['btn_image'] = "bil";
			$lang_string['btn_url'] = "url";
			$lang_string['btn_readmore'] = "l�s mere";
			$lang_string['view_images'] = "Vis uploadede billeder";
			$lang_string['label_entry'] = "Meddelelse:";
			$lang_string['btn_preview'] = "&nbsp;Vis&nbsp;";
			$lang_string['btn_post'] = "&nbsp;Gem&nbsp;";
			$lang_string['file_name'] = "Statisk filnavn: (ingen mellemrum eller filendelse)";

			// Javascript Strings
			$lang_string['insert_styles'] = "Indtast tekst, der skal formateres:";
			$lang_string['insert_image'] = "Indtast URL til billedet:";
			$lang_string['insert_url1'] = "Indtast tekst til linket:";
			$lang_string['insert_url2'] = "Indtast den fulde URL til linket:";
			$lang_string['insert_url3'] = "�bn URL i nyt vindue (valgfrit):";
			$lang_string['form_error'] = "Udfyld venligst emne- og meddelelse-felterne.";

			// More Javascript Strings
			$lang_string['insert_image_optional'] = 'Valgfrit:';
			$lang_string['insert_image_width'] = 'Bredde (valgfrit):';
			$lang_string['insert_image_height'] = 'H�jde (valgfrit):';
			$lang_string['insert_image_popup'] = 'Vis fuld st�rrelse i pop-up-vindue ved klik (valgfrit):';
			$lang_string['insert_image_float'] = 'Flydende (valgfrit):';
		
			$lang_string['day'] = 'Dag';
			$lang_string['month'] = 'M�ned';
			$lang_string['year'] = '�r';
			$lang_string['hour'] = 'Time';
			$lang_string['minute'] = 'Minut';
			$lang_string['second'] = 'Sekund';
		}
	
		switch ($page) {
			case 'add':
				// Add Entry
				$lang_string['title'] = "Tilf�j meddelelse";
				$lang_string['instructions'] = "Er du klar til at blogge? Udfyld formularen herunder og klik 'Vis' for at se, hvordan din meddelelse ser ud, eller klik 'Ok' for at gemme meddelelsen.";
				$lang_string['title_ad'] = "Godkend trackback-pings";
				$lang_string['instructions_ad'] = "Dette er de auto-opdagede URI'er, som vil blive pinget. Hvis du ikke �nsker at pinge en bestemt URI, s� frav�lg den herunder. Klik p� knappen 'Ok' for at pinge de valgte URI'er, eller klik p� 'Annuller' for ikke at pinge noget.";
				$lang_string['label_tb_ping'] = "Trackback-ping(s), der skal sendes (adskilt af komma)";
				$lang_string['label_tb_autodiscovery'] = "auto-opdagelse";
				$lang_string['label_relatedlink'] = "Relateret link";
				$lang_string['label_categories'] = "Kategori-liste";

				// Preview / Edit Entry
				$lang_string['title_preview'] = "Vis/rediger meddelelse";
				$lang_string['instructions_preview'] = "S�dan ser din meddelelse ud. Hvis du bruger tekstformatering eller inkluderer billeder, skal du huske at 'lukke' alle dine 'tags'.";
				$lang_string['title_update'] = "Opdater meddelelse";
				$lang_string['instructions_update'] = "Du kan �ndre din meddelelse ved at udfylde formularen herunder. Klik p� 'Vis' eller 'Ok', n�r du er f�rdig.";
				$lang_string['ok_btn'] = "&nbsp;Ok&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Annuller&nbsp;";

				// Error Response
				$lang_string['error'] = "<h2>Ups!</h2>Meddelelsen blev ikke gemt. Der opstod et problem med at gemme.<br /><br />Serveren sagde:<br />";
				break;
			case 'add_static':
				// Add Entry
				$lang_string['title'] = "Tilf�j statisk side";
				$lang_string['instructions'] = "Udfyld formularen herunder for at lave en statisk side. I mods�tning til en normal blog-meddelelse optr�der statiske sider som links i menuen til h�jre og bruges som sider, der altid skal v�re tilg�ngelige, fx Om Mig, Kontakt Os, Kalender osv. Klik p� 'Vis' for at se, hvordan din side ser ud eller klik p� 'Godkend' for at gemme siden.";

				// Preview / Edit Entry
				$lang_string['title_preview'] = "Vis/rediger statisk side";
				$lang_string['instructions_preview'] = "S�dan ser din statiske side ud. Hvis du bruger tekstformatering eller inkluderer billeder, skal du huske at 'lukke' alle dine 'tags'.";
				$lang_string['title_update'] = "Opdater statisk side";
				$lang_string['instructions_update'] = "Du kan �ndre din statiske side ved af udfylde formularen herunder. Klik p� 'Vis' eller 'Godkend', n�r du er f�rdig.";
				$lang_string['form_error'] = "Udfyld venligst emne-, meddelelses- og filnavn-felterne.";

				// Error Response
				$lang_string['error'] = "<h2>Ups!</h2>Siden blev ikke gemt. Der opstod et problem med at gemme.<br /><br />Serveren sagde:<br />";
				break;
			case 'add_block':

				// Add / Manage Blocks
				$lang_string['title'] = "Tilf�j/rediger blokke";
				$lang_string['instructions'] = "Tilf�j specielle blokke";
				$lang_string['up'] = "op";
				$lang_string['down'] = "ned";
				$lang_string['edit'] = "rediger";
				$lang_string['delete'] = "slet";
				$lang_string['block_name'] = "Navn p� blok:";
				$lang_string['block_content'] = "Indhold af blok:";
				$lang_string['instructions_edit'] = "Du redigerer lige nu blokken:";
				$lang_string['instructions_modify'] = "Klik herunder for at redigere en blok:";
				$lang_string['submit_btn_edit'] = "Rediger blok";
				$lang_string['submit_btn_add'] = "Tilf�j blok";
				$lang_string['form_error'] = "Udfyld venligst navn-feltet.";
				break;
			case 'add_link':
				$lang_string['static_pages'] = "Statiske sider:";

				// Add / Manage Links
				$lang_string['title'] = "Tilf�j/rediger links";
				$lang_string['instructions'] = "Her kan du tilf�je links til andre sites. Udfyld formularen herunder og klik 'Tilf�j link' for at tilf�je et link. Klik p� knapperne 'op' eller 'ned' for at �ndre r�kkef�lgen. Klik p� knappen 'rediger' for at redigere et link. Klik p� knappen 'slet' for at slette et link.";
				$lang_string['up'] = "op";
				$lang_string['down'] = "ned";
				$lang_string['edit'] = "rediger";
				$lang_string['delete'] = "slet";
				$lang_string['link_name'] = "Link-navn:";
				$lang_string['link_url'] = "Link-URL: (valgfrit - efterlad tom for at lave en adskilning.)";
				$lang_string['instructions_edit'] = "Du er ved at redigere linket:";
				$lang_string['instructions_modify'] = "Klik herunder for at redigere et link:";
				$lang_string['submit_btn_edit'] = "Rediger link";
				$lang_string['submit_btn_add'] = "Tilf�j link";
				$lang_string['form_error'] = "Udfyld venligst navn-feltet.";
				break;
			case 'categories':

				// Add / Manage Links
				$lang_string['title'] = "Tilf�j/rediger kategorier";
				$lang_string['instructions'] = "Udfyld formularen herunder for at tilf�je og redigere dine kategorier. Hver kategori skal v�re p� f�lgende format: 'kategorinavn (id-nummer)'. Brug indrykning med mellemrum og til at lave hierarkier med.<br /><br /><b>Eksempel:</b><br />Generelt (1)<br />Nyheder (3)<br />&nbsp;&nbsp;Opslag (6)<br />&nbsp;&nbsp;Events (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;Forskelligt (7)<br />Teknologi(2)<br />";
				$lang_string['error'] = "Fejl";
				$lang_string['current_categories'] = "Nuv�rende kategorier";
				$lang_string['no_categories_found'] = "Der er ingen kategorier";
				$lang_string['category_list'] = "Liste over kategorier:";
				$lang_string['validate'] = "Check";
				$lang_string['submit_btn'] = "&nbsp;Godkend&nbsp;";
				break;
			case 'colors':
				// Change Colors
				$lang_string['title'] = "Skift farver";
				$lang_string['instructions'] = "Du kan �ndre tekst- og baggrundsfarverne for din blog. V�lg et felt herunder, og brug s� farvev�lgeren til at blande farven. V�rdien �ndres automatisk.";
				$lang_string['bg_color'] = "Side-baggrund";
				$lang_string['main_bg_color'] = "Hovedside-baggrund";
				$lang_string['border_color'] = "Sidekant";
				$lang_string['inner_border_color'] = "Indvendig kant";
				$lang_string['header_bg_color'] = "Sidehoved-baggrund";
				$lang_string['header_txt_color'] = "Sidehoved-tekst";
				$lang_string['menu_bg_color'] = "Menu-baggrund";
				$lang_string['footer_bg_color'] = "Sidefod-baggrund";
				$lang_string['txt_color'] = "Br�dtekst";
				$lang_string['headline_txt_color'] = "Overskrift-tekst";
				$lang_string['date_txt_color'] = "Dato-tekst";
				$lang_string['footer_txt_color'] = "Sidefod-tekst";
				$lang_string['link_reg_color'] = "Link (standard)";
				$lang_string['link_hi_color'] = "Link (valgt)";
				$lang_string['link_down_color'] = "Link (aktivt)";

				// More Colors
				$lang_string['entry_bg'] = "Meddelelse-baggrund";
				$lang_string['entry_title_bg'] = "Meddelelsestitel-baggrund";
				$lang_string['entry_border'] = "Meddelelse-kant";
				$lang_string['entry_title_text'] = "Meddelelsestitel-tekst";
				$lang_string['entry_text'] = "Meddelelse-tekst";
				$lang_string['menu_bg'] = "Menu-baggrund";
				$lang_string['menu_title_bg'] = "Menu-titel-baggrund";
				$lang_string['menu_border'] = "Menu-kant";
				$lang_string['menu_title_text'] = "Menutitel-tekst";
				$lang_string['menu_text'] = "Menu-tekst";
				$lang_string['menu_link_reg_color'] = "Menu-link (standard)";
				$lang_string['menu_link_hi_color'] = "Menu-link (valgt)";
				$lang_string['menu_link_down_color'] = "Menu-link (aktivt)";

				// Submit
				$lang_string['color_preset'] = "Farveskemaer:";
				$lang_string['scheme_name'] = "Indtast et navn til farveskemaet:";
				$lang_string['scheme_file'] = "Indtast filnavnet for farveskemaet: (ingen mellemrum eller filendelse)";
				$lang_string['save_btn'] = "&nbsp;Gem&nbsp;";
				$lang_string['form_error'] = "Indtast venligst et navn til dit farveskema.";
				$lang_string['submit_btn'] = "&nbsp;Godkend&nbsp;";
				$lang_string['theme_doesnt_allow_colors'] = 'Det valgte tema tillader ikke brugerdefinerede farver.';

				// Error Response
				$lang_string['error'] = "<h2>Ups!</h2>Informationerne blev ikke gemt. Der opstod et problem med at gemme.<br /><br />Serveren sagde:<br />";
				break;
			case 'comments':
				// Comments
				$lang_string['name'] = "Navn:";
				$lang_string['email'] = "E-mail:";
				$lang_string['homepage'] = "Hjemmeside:";
				$lang_string['comment'] = "Kommentar:";
				$lang_string['IPAddress'] = "IP-adresse:";
				$lang_string['useragent'] = "Browser:";
				$lang_string['wrote'] = "<i>Den %s skrev %s:</i><br />\n<br />\n%s";

				$lang_string['comment_capcha'] = "Anti-spam: Indtast ";
				$lang_string['title'] = "Kommentarer";
				$lang_string['header'] = "Tilf�j kommentar";
				$lang_string['instructions'] = "Udfyld formularen herunder for at tilf�je dine egne kommentarer.";
				$lang_string['comment_name'] = "Dit navn:";
				$lang_string['comment_email'] = "E-mail:";
				$lang_string['comment_url'] = "URL:";
				$lang_string['commentposted'] = "Ny kommentar skrevet p�: ";
				$lang_string['comment_remember'] = "Husk mig:";
				$lang_string['comment_text'] = "Kommentar:";
				$lang_string['post_btn'] = "&nbsp;Gem kommentar&nbsp;";
				$lang_string['delete_btn'] = "slet";
				$lang_string['expired_comment1'] = "Beklager, men nye kommentarer kan ikke skriver efter ";
				$lang_string['expired_comment2'] = " dage.";
				
				$lang_string['blacklisted'] = "Beklager, men din IP-adresse er blevet bandlyst. Kommentarer er ikke tilladt.";

				// Error Response
				$lang_string['error_add'] = "<h2>Ups!</h2>Kommentaren blev ikke gemt. Der opstod et problem med at gemme.<br /><br />Serveren sagde:<br />";
				$lang_string['error_delete'] = "<h2>Ups!</h2>Kommentaren blev ikke slettet. Der opstod et problem med at slette.<br /><br />Serveren sagde:<br />";
				$lang_string['form_error'] = "Udfyld venligst navn-, kommentar- og anti-spam-felterne.";
				break;

			case 'delete':
				$lang_string['title'] = "Slet meddelelse";
				$lang_string['instructions'] = "Dette er den meddelelse, du er ved at slette. Er du helt sikker p� at du vil slette den? Du kan ikke fortryde...";
				$lang_string['ok_btn'] = "&nbsp;Slet&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Annuller&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Ups!</h2>Meddelelsen blev ikke slettet.<br /><br />Serveren sagde:<br />";
				break;
			case 'delete_static':
				$lang_string['title'] = "Slet statisk side";
				$lang_string['instructions'] = "Dette er den statiske side, du er ved at slette. Er du helt sikker p� at du vil slette den? Du kan ikke fortryde...";
				$lang_string['ok_btn'] = "&nbsp;Slet&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Annuller&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Ups!</h2>Siden blev ikke slettet.<br /><br />Serveren sagde:<br />";
				break;
			case 'image_list':
				$lang_string['title'] = "Liste over billeder";
				$lang_string['instructions'] = "Klik p� links herunder for at se billederne.<br /><br />For at tilf�je et billede til din meddelelse skal du:<br />1) H�jreklik p� et link og v�lg 'Kopier genvej'.<br />2) G� tilbage til siden 'Tilf�j meddelelse' eller 'Rediger meddelelse'.<br />3) Klik p� knappen 'bil' og inds�t URL'en i vinduet.";
				break;
			case 'info':
				$lang_string['title'] = "Informationer om meta-data";
				$lang_string['instructions'] = "Informationerne herunder benyttes til &quot;meta-data&quot;, som hj�lper s�gemaskiner med at finde og identificere dit site. Informationerne kan ogs� bruges i RSS-feeds.";
				$lang_string['info_keywords'] = "N�gleord: (Adskil flere n�gleord af kommaer.)";
				$lang_string['info_description'] = "Beskrivelse: (En opsummering eller beskrivelse af dit site i fritekst.)";
				$lang_string['info_copyright'] = "Rettigheder: (Copyright eller link til document, der indeholder den p�g�ldende information.)";
				$lang_string['submit_btn'] = "&nbsp;Gem&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Ups!</h2>Informationerne blev ikke gemt. Der opstod et problem med at gemme.<br /><br />Serveren sagde:<br />";
				$lang_string['form_error'] = "Udfyld venligst n�gleord-, beskrivelse- og rettigheder-felterne.";
				break;
			case 'index':
				// Index
				break;
			case 'static':
				// Index
				break;
			case 'rating':
				$lang_string['error'] = "<h2>Ups!</h2>Informationerne blev ikke gemt. Der opstod et problem med at gemme.<br /><br />Serveren sagde:<br />";
				break;
			case 'login':
				$lang_string['upgrade'] = "<h2>Opgrader</h2>";
				$lang_string['upgrade_count'] = "%n kommentarfiler skal opgraderes:";
				$lang_string['upgrade_url'] = "Opgrader kommentarer";
				$lang_string['title'] = "Log p�";
				$lang_string['instructions'] = "Indtast brugernavn og adgangskode herunder";
				$lang_string['username'] = "Brugernavn:";
				$lang_string['password'] = "Adgangskode";
				$lang_string['submit_btn'] = "&nbsp;Log p�&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Login lykkedes!</h2>Du er nu logget p�. Held og lykke med din blogging!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Ups!</h2>Du er ikke logget ind. Unders�g venligst, at du har skrevet brugernavn og adgangskode rigtigt, og pr�v s� igen.<p />";
				$lang_string['form_error'] = "Udfyld venligst brugernavn- og adgangskode-felterne.";
				break;
			case 'logout':
				$lang_string['title'] = "Log af";
				$lang_string['instructions'] = "<h2>Ups!</h2>Det lykkedes ikke at logge af. Cookie kunne ikke slettes. Hvorfor er du stadig logget p�?<p />";
				break;
			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Error Response
				$lang_string['error'] = "<h2>Ups!</h2>Informationerne blev ikke gemt. Der opstod et problem med at gemme.<br /><br />Serveren sagde:<br />";
				break;
			case 'set_login':
				$lang_string['title'] = "Skift brugernavn og adgangskode";
				$lang_string['instructions'] = "Udfyld formularen herunder for at �ndre brugernavn og adgangskode. Indtast brugernavn og adgangskode, som du �nsker at benytte.";
				$lang_string['username'] = "Brugernavn:";
				$lang_string['password'] = "Adgangskode:";
				$lang_string['submit_btn'] = "&nbsp;Gem&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Brugernavn/adgangskode �ndret!</h2>Dit nye brugernavn og/eller adgangskode er nu aktivt. Held og lykke med din blogging!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Ups!</h2>Informationerne blev ikke gemt. Der opstod et problem med at gemme dit brugernavn og/eller din adgangskode.<br /><br />Serveren sagde:<br />";
				$lang_string['form_error'] = "Udfyld venligst brugernavn- og adgangskode-felterne.";
				$lang_string['explanation'] = "I nyere version er strukturen for adgangskoder �ndret. Det er ikke l�ngere muligt at opdatere adgangskoder 
					og/eller logins fra blog-koden. For at �ndre din adgangskode, skal du slette filen /config/password.php og s�rge for, at filerne
					install*.php findes p� din lokale server. S� snart det er gjort, skal du opdatere denne side (eller logge ud). Du vil blive
					pr�senteret med den samme side til generering af adgangskode, som oprindeligt blev brugt til at oprette blog-siden.";
				break;
			case 'install00':
				$lang_string['title'] = "Velkommen";
				$lang_string['instructions'] = "Tak fordi du har valgt Simple PHP Blog!";
				$lang_string['blog_choose_language'] = "V�lg sprog:";
				$lang_string['submit_btn'] = "&nbsp;Godkend&nbsp;";
				break;
			case 'install01':
				$lang_string['title'] = "Velkommen";
				$lang_string['instructions'] = "
				Tak fordi du valgte Simple PHP Blog!<br /><br />Simple PHP Blog er et letv�gts-blogging-system. Det kr�ver PHP 4.1 eller h�jere og skriverettigheder p� serveren. Alle informationer lagres i flade filer, s� der kr�ves ingen database.<br /><br />
				For at komme i gang skal Simple PHP Blog oprette tre mapper ('<b>config</b>', '<b>content</b>' og '<b>images</b>'), hvor dine informationer gemmes. Derefter skal du oprette din adgangskode og kan s� starte med at blogge.<br /><br />
				<b>Klik herunder for at begynde installationen:</b>";
				$lang_string['begin'] = "[ Begynd installation ]";
				break;
			case 'install02':
				$lang_string['title'] = "Installation";
				$lang_string['instructions'] = "Fors�ger at oprettet mapperne '<b>config</b>', '<b>content</b>', and '<b>images</b>':";
				$lang_string['folder_exists'] = "Okay! Mappen findes allerede. Der er ikke foretaget nogen �ndringer...";
				$lang_string['folder_failed'] = "Ups! Mappen kunne ikke oprettes...";
				$lang_string['folder_success'] = "Mappen er nu blevet oprettet...";
				// Help
				$lang_string['help'] = "
				<h2>Ups!</h2>
				�n eller flere mapper kunne ikke oprettes!<br /><br />Dette skyldes formodentlig:<br />
				<ol>
				<li><b>Skriverettigheder</b> er ikke sat til at tillade <b>L�se/skrive</b>-adgang.</li>
				<li><b>UID</b>'erne (bruger-ID'er) skal stemme overens for alle filer og mapper.</li>
				</ol>
				F�lg instruktionerne herunder og <b>pr�v igen</b>:<br />
				<ol>
				<li>Opret manuelt de tre mapper: <b>config</b>, <b>content</b>, and <b>images</b>.</li>
				<li>Giv <b>skriverettigheder</b> p� mapperne. I dit FTP-program skal Owner, User og World have <b>Read</b> (l�se-) og <b>Write</b> (skrive-)adgang. <i>(Du skal m�ske kontakte din udbyder for at �ndre dette...)</i></li>
				<li>S�rg for, at alle UID'er p� alle dine mapper og filer er den samme. <i>(Du skal m�ske kontakte din udbyder for at �ndre dette...)</i></li>
				</ol>";
				$lang_string['try_again'] = "[ Pr�v igen ]";
				// Success
				$lang_string['success'] = "<h2>Mapper oprettet!</h2>Mapperne er nu blevet oprettet!<p /><b>Klik herunder for at forts�tte:</b>";
				$lang_string['continue'] = "[ Forts�t ]";
				break;
			case 'install03':
				$lang_string['supported'] = "<b>Din webserver underst�tter f�lgende typer kryptering:</b>";
				$lang_string['standard'] = "Standard DES-kryptering: ";
				$lang_string['extended'] = "Udvidet DES-kryptering: ";
				$lang_string['MD5'] = "MD5-kryptering: ";
				$lang_string['blowfish'] = "Blowfish-kryptering: ";
				$lang_string['enabled'] = "sl�et til";
				$lang_string['disabled'] = "sl�et fra";
				$lang_string['using_standard'] = "<b>Benytter standard DES-kryptering...</b>";
				$lang_string['using_extended'] = "<b>Benytter udvidet DES-kryptering...</b>";
				$lang_string['using_MD5'] = "<b style=\"color: green;\">Benytter MD5-kryptering...</b>";
				$lang_string['using_blowfish'] = "<b style=\"color: green;\">Benytter Blowfish-kryptering...</b>";
				$lang_string['using_unknown'] = "<b>Benytter ukendt kryptering...</b>";
				$lang_string['salt_length'] = " <i>(Salt-l�ngde = %string)</i><br />";
				$lang_string['title'] = "Opret brugernavn og adgangskode";
				$lang_string['instructions'] = "Udfyld formularen herunder for at oprette brugernavn og adgangskode.";
				$lang_string['username'] = "Brugernavn:";
				$lang_string['password'] = "Adgangskode:";
				$lang_string['submit_btn'] = "&nbsp;Godkend&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Til lykke!</h2>Du er nu logget p�. Klik herunder for at g� til ops�tning, hvor du kan navngive din blog. Held og lykke med din blogging!<p />";
				$lang_string['btn_setup'] = "[ Ops�tning ]";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Ups!</h2>Informationerne blev ikke gemt. Der opstod et problem med at gemme dit brugernavn og/eller adgangskode.<br /><br />Serveren sagde:<br />";
				$lang_string['form_error'] = "Udfyld venligst brugernavn- og adgangskode-felterne.";
				break;
			case 'install04':
				$lang_string['title'] = "Opret adgangskodefil";
				$lang_string['instructions'] = "Her er den sv�re del:<br />
				<ol>
				<li>�bn et tekstredigerings-program. <i>(Notesblok, Word Pad, Word, BBEdit, Pico, VI osv...)</i></li>
				<li>Opret et nyt tekstdokument.</li>
				<li>Kopier og inds�t indholdet af boksen nedenfor i dokumentet.</li>
				<li>Gem din fil under navnet <b>password.php</b> <i>(S�rg for at gemme den i <b>tekst-</b> eller <b>\"almindelig tekst\"</b>-format.)</i></li>
				<li>�bn et FTP-program.</li>
				<li>Upload din nye fil <b>password.php</b> til <b>config</b>-mappen h�rende til din hjemmeside.</li>
				<li>Fjern filen <b>password.php</b> fra din harddisk.</li>
				</ol>
				";
				$lang_string['information'] = "<i>Bem�rk: Hvis vil nulstille brugernavn og adgangskode (for eksempel hvis du har glemt informationerne), skal du slette filen <b>password.php</b> i din mappe <b>config</b> h�rende til din hjemmeside. N�ste gang du bes�ger din hjemmeside, vil du skulle gennemf�re denne installationsproces igen...</i>";
				$lang_string['code'] = "Indhold til filen <b>password.php</b>:";
				$lang_string['continue'] = "[ Forts�t ]";
				break;
			case 'install05':
			case 'install06':
				$lang_string['title'] = "Log p�";
				$lang_string['instructions'] = "Indtast dit brugernavn og adgangskode nedenfor";
				$lang_string['username'] = "Brugernavn:";
				$lang_string['password'] = "Adgangskode";
				$lang_string['submit_btn'] = "&nbsp;Send&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Til lykke!</h2>Du er nu logget p�.<p />
				Klik nedenfor for at g� til siden <b>Ops�tning</b>, hvor du kan g�re din blog personlig.<p />
				<i>Bem�rk: Da du nu har gennemg�et installationsprocessen, anbefales det, at du sletter filerne <b>installXX.php</b> fra din hjemmeside. (dvs. filerne fra install00.php til install06.php)</i><p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Ups!</h2>Du er ikke logget p�. Unders�g venligst, at du har skrevet dit brugernavn og adgangskode korrekt og pr�v igen.<p />";
				$lang_string['form_error'] = "Udfyld venligst brugernavn- og adgangskode-felterne.";
				// Success
				$lang_string['btn_setup'] = "[ Ops�tning ]";
				$lang_string['btn_try_again'] = "[ Pr�v igen ]";
				break;
			case 'setup':
				$lang_string['title'] = "Ops�tning";
				$lang_string['instructions'] = "Du kan �ndre navnet p� din blog og dine personlige informationer herunder.";
				$lang_string['blog_title'] = "Blog-navn:";
				$lang_string['blog_author'] = "Forfatter:";
				$lang_string['blog_email'] = "E-mail (Flere e-mail-adresser skal adskilles af komma, og med tomt indhold sl�s funktionen \"Kontakt mig\" fra):";
				$lang_string['blog_avatar'] = "URL til displaybillede: (Tomt indhold for intet billede)";
				$lang_string['blog_footer'] = "Sidefod:";
				$lang_string['blog_choose_language'] = "V�lg sprog:";
				$lang_string['blog_enable_comments'] = "Tillad brugerkommentarer";
				$lang_string['blog_comments_popup'] = "�bn kommentarer i pop-up-vindue";
				$lang_string['blog_enable_voting'] = "Tillad brugere at vurdere meddelelser";
				$lang_string['blog_enable_cache'] = "Sl� blog-meddelses-cache til (kan give for�get hastighed p� nogen servere)";
				$lang_string['blog_enable_calendar'] = "Sl� kalender/arkiv-blok til";
				$lang_string['blog_enable_archives'] = "Sl� arkiv-blok til";
				$lang_string['blog_enable_counter'] = "Sl� t�ller i side-bar til";
				$lang_string['blog_counter_hours'] = "Antal timer, der skal g�, f�r sidevisninger t�lles igen (baseret p� IP-adressen):";
				$lang_string['blog_enable_login'] = "Sl� login-link til (Husk at gemme et bogm�rke til \"login.php\" f�rst...)";
				$lang_string['blog_enable_title'] = "Sl� klartekst-titel-blok til (Fjern krydset, hvis titlen er i titel-grafikken)";
				$lang_string['blog_enable_permalink'] = "Sl� permalink for blog-meddelelser til";
				$lang_string['blog_enable_capcha'] = "Sl� anti-spam til";
				$lang_string['blog_footer_counter'] = "Sl� t�ller i sidefod til";
				$lang_string['blog_enable_capcha_image'] = "Billeder til anti-spam (kun GD-bibliokteket) / Tekstfelt til anti-spam";
				$lang_string['blog_enable_stats'] = "Sl� statistik til i menuen";
				$lang_string['blog_enable_lastcomments'] = "Sl� liste med mest kommenterede indl�g til";
				$lang_string['blog_enable_lastentries'] = "Sl� liste med nyeste indl�g til";
				$lang_string['blog_email_notification'] = "Send e-mail, n�r der skrives kommentarer";
				$lang_string['blog_send_pings'] = "Send weblog-&quot;pings&quot;";
				$lang_string['blog_ping_urls'] = "Indtast den fulde URL (fx http://rpc.weblogs.com/RPC2) p� den service, der skal &quot;pinges&quot;.<br />(Du kan indtaste mere end �n adresse ved at adskille med kommaer.)";
				$lang_string['blog_trackback_about'] = "Trackback sender beskeder mellem blogs. Du kan lade en anden 
					blog vide, at du linker til den, ved at sende dem et trackback-ping, og du kan se hvem der linker til
					din blog ved at modtage trackback-pings.<br />
				   Du kan enten manuelt indtaste URI'erne, der skal pinges, eller g�re det automatisk ved
				   auto-opdagelse.";
				$lang_string['blog_trackback_enabled'] = "Sl� trackback i min blog til";
				$lang_string['blog_trackback_auto_discovery'] = "Sl� auto-opdagelse ved oprettelse af meddelelse indeholdende URL'er til";
				$lang_string['blog_max_entries'] = "Det maksimale antal meddelelser, der skal vises:";
				$lang_string['blog_comment_tags'] = "Tags, der tillades i kommentarer:";
				$lang_string['blog_gzip_about'] = "
					Siden PHP 4.0.4 har PHP kunnet l�se og skrive gzip-komprimerede filer (.gz),
					s� der spares diskplads. PHP kan ogs� komprimere sider, der sendes til browsere,
					som underst�tter gzip-kompression og derved spare b�ndbredde.<br />
					<br />
					Underst�ttelse af Zlib i PHP er ikke sl�et til som standard. Hvis nedenst�ende afkrydsningsfelter ikke virker,
					underst�tter din PHP-installation ikke Zlib-udvidelsen";
				$lang_string['blog_enable_gzip_txt'] = "Tillad GZIP-kompression af databasefiler";
				$lang_string['blog_enable_gzip_output'] = "Tillad GZIP-kompression af HTTP-output";
				$lang_string['submit_btn'] = "&nbsp;Gem&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Ups!</h2>Informationerne blev ikke gemt. Der opstod et problem med at gemme.<br /><br />Serveren sagde:<br />";
				$lang_string['form_error'] = "Udfyld venligst titel- og forfatter-felterne.";
				$lang_string['label_entry_order'] = "R�kkef�lge for meddelelser:";
				$lang_string['select_new_to_old'] = "Vis nyeste f�rst";
				$lang_string['select_old_to_new'] = "Vis �ldste f�rst";
				$lang_string['label_comment_order'] = "R�kkef�lge for kommentarer:";
				$lang_string['cal_sunday'] = "S�ndag";
				$lang_string['cal_monday'] = "Mandag";
				$lang_string['label_calendar_start'] = "Kalenderens f�rste ugedag";
				$lang_string['title_sidebar'] = "Side-bar";
				$lang_string['title_comments'] = "Kommentarer";
				$lang_string['title_trackback'] = "Trackbacks";
				$lang_string['title_compression'] = "Kompression";
				$lang_string['title_entries'] = "Indl�g";
				$lang_string['title_general'] = "Generelt";
				$lang_string['title_language'] = "Sprog";
				$lang_string['blog_comment_days_expiry'] = "Kommentarer tilladt i hvor mange dage? (0 giver ingen begr�nsning)";

				break;
			case 'trackbacks':
				// Trackbacks
				$lang_string['title'] = "Trackbacks";
				$lang_string['header'] = "Trackback-URL for denne meddelelse:";
				$lang_string['delete_btn'] = "slet";
				// Error Response
				$lang_string['error_add'] = "Trackback-data kunne ikke gemmes.";
				break;
			case 'options':
				$lang_string['title'] = "Indstillinger";
				$lang_string['instructions'] = "Udfyld formularen herunder for at indstille visning af dato og tidspunkter for meddelelser og kommentarer. Du kan v�lge 12- eller 24-timers ur og kort eller langt datoformat. <b>Eksempel</b>-omr�derne opdateres automatisk for at vise, hvordan formateringen ser ud.";
				// Long Date
				$lang_string['ldate_title'] = "Langt datoformat:";
				$lang_string['weekday'] = "Ugedag";
				$lang_string['month'] = "M�ned";
				$lang_string['day'] = "Dag";
				$lang_string['year'] = "�r";
				$lang_string['none'] = "Ingen";
				// Short Date
				$lang_string['sdate_title'] = "Kort datoformat:";
				$lang_string['s_month'] = "M�ned";
				$lang_string['s_mon'] = "MMM";
				$lang_string['s_day'] = "Dag";
				$lang_string['s_year'] = "�r";
				$lang_string['zero_day'] = "Foranstillet nul for dag";
				$lang_string['show_century'] = "Vis �rhundrede";
				// Time
				$lang_string['time_title'] = "Tidsformat:";
				$lang_string['12hour'] = "12-times ur";
				$lang_string['24hour'] = "24-times ur";
				$lang_string['before_noon'] = "F�r middag";
				$lang_string['after_noon'] = "Efter middag";
				// Date
				$lang_string['date_title'] = "Format for datoer:";
				$lang_string['long_date'] = "Lang dato";
				$lang_string['short_date'] = "Kort dato";
				$lang_string['time'] = "Tid";
				// Menu
				$lang_string['menu_title'] = "Format for menu-datoer:";
				$lang_string['long_date'] = "Lang dato";
				$lang_string['short_date'] = "Kort dato";
				// Used in multiple places
				$lang_string['zero_day'] = "Foranstillet nul for dag";
				$lang_string['zero_month'] = "Foranstillet nul for m�ned";
				$lang_string['zero_hour'] = "Foranstillet nul for time";
				$lang_string['separator'] = "Adskiller:";
				$lang_string['preview'] = "Eksempel:";
				$lang_string['server_offset'] = "Tidsforskel p� server:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Gem&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Ups!</h2>Informationerne blev ikke gemt. Der opstod et problem med at gemme.<br /><br />Serveren sagde:<br />";
				break;
			case 'themes':
				$lang_string['title'] = "Temaer";
				$lang_string['instructions'] = "Brug listen til at v�lge andet tema.";
				// Themes
				$lang_string['choose_theme'] = "Temaer:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Gem&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Ups!</h2>Informationerne blev ikke gemt. Der opstod et problem med at gemme.<br /><br />Serveren sagde:<br />";
				break;
			case 'upload_img':
				$lang_string['title'] = "Upload billede";
				$lang_string['instructions'] = "Klik p� knappen herunder for at v�lge den fil, der skal uploades.";
				$lang_string['select_file'] = "V�lg fil:";
				$lang_string['upload_btn'] = "Upload";
				// Error Response
				$lang_string['error'] = "<h2>Ups!</h2>Billedet kunne ikke uploades. Her er mere information:<br /><br />Serveren sagde:<br />";
				break;
			case 'search':
				$lang_string['title'] = "S�geresultat";
				$lang_string['instructions'] = "Resultat af s�gning efter <b>%string</b>:";
				$lang_string['not_found'] = "Ingen resultater";
				break;
			case 'contact':
				$lang_string['contact_capcha'] = "Anti-spam: Indtast ";
				$lang_string['title'] = "Kontakt mig";
				$lang_string['instructions'] = "Udfyld formularen:";
				$lang_string['form_error'] = "Udfyld venligst emne- og kommentar-felterne.";
				$lang_string['name'] = "Navn:";
				$lang_string['email'] = "E-mail:";
				$lang_string['subject'] = "Emne:";
				$lang_string['comment'] = "Kommentar:";
				$lang_string['submit_btn'] = "&nbsp;Send&nbsp;";
				$lang_string['success'] = "<h2>Afsendt!</h2>Din kommentar er nu blevet sendt.<p />";
				$lang_string['failure'] = "<h2>Fejl!</h2>Din meddelelse er ikke blevet sendt. Det er mest sandsynligt, at Anti-spam-koden ikke blev indtastet korrekt.<p />";
				$lang_string['contactsent'] = "Kontakt sendt gennem: ";
				$lang_string['IPAddress'] = "IP-address:"; 
				$lang_string['useragent'] = "User agent:"; 
				$lang_string['wrote'] = "<i>Den %s skrev %s:</i><br />\n<br />\n%s";
				break;
			case 'stats':
				$lang_string["title"] = "Statistikker";
				$lang_string["general"] = "Generelt";
				$lang_string["entry_info"] = "<b>%s</b> meddelelser med <b>%s</b> ord gemt i <b>%s</b> bytes";
				$lang_string["comment_info"] = "<b>%s</b> kommentarer med <b>%s</b> ord gemt i <b>%s</b> bytes";
				$lang_string["trackback_info"] = "<b>%s</b> trackbacks gemt i <b>%s</b> bytes";
				$lang_string["static_info"] = "<b>%s</b> statiske sider med <b>%s</b> ord gemt i <b>%s</b> bytes";
				$lang_string["most_viewed_entries"] = "10 mest viste meddelelser";
				$lang_string["most_commented_entries"] = "10 mest kommenterede meddelelser";
				$lang_string["most_trackbacked_entries"] = "10 mest trackback'ede meddelelser";
				$lang_string['vote_info'] = "<b>%s</b> stemmer gemt i  <b>%s</b> bytes";
				$lang_string["most_voted_entries"] = "10 meddelelser med flest stemmer";
				$lang_string["most_rated_entries"] = "10 meddelelser med h�jeste stemmer";
				break;
			case 'errorpage-nocookies':
				$lang_string["title"] = 'HTTP-fejl 403.8 - Adgang n�gtet til side/funktion';
				$lang_string["errorline1"] = 'Siden eller funktionen, du har �nsket, kr�ver brug af cookies.';
				$lang_string["errorline2"] = 'Du skal sl� cookies til i din browser eller beskyttelses-software og fors�ge igen.';
				$lang_string["clientid"] = 'Klient-ID: ';
				break;
			case 'errorpage':
				$lang_string["403.8"] = 'HTTP-fejl 403.8 - Adgang n�gtet til side/funktion';
				$lang_string["404"] = 'HTTP-fejl 404 - Side/funktion findes ikke';
				$lang_string["error_404"] = 'Den efterspurgte side findes ikke.';
				$lang_string["error_javascript"] = 'Den efterspurgte side eller funktion kr�ver javascript for at virke korrekt.';
				$lang_string["error_emailnotsent"] = 'Afsendelse af meddelelsen mislykkedes.';
				$lang_string["error_emailnotsentcapcha"] = 'Afsendelse af meddelelser mislykkedes fordi anti-spam-koden ikke var korrekt eller manglede.';
				$lang_string["clientid"] = 'Klient-ID: ';
				break;
			case 'emoticons':  // New for 0.4.7
				$lang_string['title'] = "Administration af hum�rikoner";
				$lang_string['instructions'] = "
					Afkryds de hum�rikoner, du �nsker at bruge. Skriv i tekstboksen de tags,
					som du �nsker skal erstattes af billedet. Du kan benytte flere tags, de
					skal blot adskilles af mellemrum.<br /><br />
		
					For eksempel:<br />
					:) :-) :SMILE: :HAPPY:<br /><br />
					
					<i>(Det anbefales kraftigt, at du laver tags l�ngere end 2 tegn, ellers kan der
					opst� uventede udskiftninger i teksten.)</i>";
				$lang_string["upload_instructions"] = 'Upload ny hum�rikon:';
				$lang_string["upload_success"] = 'Upload lykkedes. Billedet blev uploadet korrekt.';
				$lang_string["upload_error"] = 'Fejl! Billedet blev ikke uploadet.';
				$lang_string["upload_invalid"] = 'Fejl! Ugyldig billedfil. Billedet skal v�re PNG, JPG eller GIF.';
				$lang_string["save_success"] = 'Indstillinger for hum�rikoner blev gemt.';
				$lang_string["save_error"] = 'Fejl! Indstillinger for hum�rikoner blev ikke gemt.';
				$lang_string["save_button"] = 'Gem hum�rikoner';
				break;
			default:
				break;
		}
	}
?>
