<?php
	// Swedish Language Translation(s)
	// (c) 2004 Hans K Hard, hans <at> nikielhard <dot> se (0.4.1)

	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;
			
		// Language: Swedish
		$lang_string['language'] = 'swedish';
		
		$lang_string[ 'locale' ] = array('sv_SE','sve_SWE','swedish');
		$lang_string['rss_locale'] = 'sv-SE'; // New 0.4.8
		
		// ISO Charset: ISO-8859-1 -- http://us4.php.net/manual/en/function.htmlspecialchars.php
		$lang_string['html_charset'] = 'ISO-8859-15';
		$lang_string['php_charset'] = 'ISO-8859-15';
		
		setlocale(LC_TIME, $lang_string['locale'] ); // <-- New 0.3.7
		
		// Some Global Strings
		
		// Menu
		$lang_string['menu_links'] = "L�nkar";
		$lang_string['menu_home'] = "Hem";
		$lang_string['menu_contact'] = "Contact Me";
		$lang_string['menu_stats'] = "Stats";
		$lang_string['menu_calendar'] = "Calendar"; // New for 0.4.8
		$lang_string['menu_archive'] = "Arkiv";
		$lang_string['menu_viewarchives'] = "View Archives"; // New in 0.4.7 
		$lang_string['menu_menu'] = "Meny";
		$lang_string['menu_add'] = "L�gg till blog";
		$lang_string['menu_add_static'] = "L�gg till statisk post";
		$lang_string['menu_upload'] = "Ladda upp bilder";
		$lang_string['menu_setup'] = "Setup";
		$lang_string['menu_categories'] = "Categories";
		$lang_string['menu_info'] = "Information"; // <-- New 0.3.7
		$lang_string['menu_options'] = "Inst�llningar";
		$lang_string['menu_themes'] = "Teman";
		$lang_string['menu_colors'] = "F�rger";
		$lang_string['menu_change_login'] = "�ndra inloggning";
		$lang_string['menu_logout'] = "Logga ut";
		$lang_string['menu_login'] = "Logga in";
		$lang_string['menu_most_recent'] = "Senaste kommentarer";
		$lang_string['menu_most_recent_entries'] = "Most Recent Entries";
		$lang_string['menu_most_recent_trackback'] = "Most Recent Trackbacks";
		$lang_string['menu_add_block'] = "Blocks";
		$lang_string['menu_emoticons'] = "Emoticons"; // New for 0.4.7
		$lang_string['menu_avatar'] = "Avatar"; // New for 0.4.7
		
		// Counter
		$lang_string['counter_today'] = "Today:"; // New for 0.4.8
		$lang_string['counter_yesterday'] = "Yesterday:"; // New for 0.4.8
		$lang_string['counter_totalsidebar'] = "Total:"; // New for 0.4.8
		$lang_string['counter_title'] = "Counter Totals"; // New for 0.4.8
		
		// Other
		$lang_string['home'] = 'Hem';
		$lang_string['nav_next'] = 'N�sta'; // <-- New 0.3.7
		$lang_string['nav_back'] = 'Tillbaks'; // <-- New 0.3.7
		$lang_string['search_title'] = 'S�k:'; // <-- New 0.3.7
		$lang_string['search_go'] = 'Starta'; // <-- New 0.3.7
		$lang_string['page_generated_in'] = 'Sidan genererades p� %s sekunder.'; // <-- New 0.3.7
		$lang_string['counter_total'] = 'Site Views: '; // New in 0.4.8
		$lang_string['read_more'] = 'More...'; // New in 0.4.8
		
		// SB Functions
		$lang_string['sb_months'] = array( 'Januari', 'Februari', 'Mars', 'April', 'Maj', 'Juni', 'Juli', 'Augusti', 'September', 'Oktober', 'November', 'December' );
 		$lang_string['sb_default_title'] = 'Ingen titel';
		$lang_string['sb_default_author'] = 'Ingen �gare';
		$lang_string['sb_default_footer'] = 'Ingen sidfot';
		
		$lang_string['sb_edit'] = '�ndra';
		$lang_string['sb_delete'] = 'Radera';
		$lang_string['sb_permalink'] = 'permalink';
		$lang_string['sb_trackback'] = 'trackbacks';
		$lang_string['sb_relatedlink'] = 'related link'; // <-- New in 0.4.6
		
		$lang_string['sb_add_comment_btn'] = 'L�gg till kommentar';
		$lang_string['sb_comment_btn_number_first'] = false;
		$lang_string['sb_comment_btn'] = 'kommentar';
		$lang_string['sb_comments_plural_btn_number_first'] = false;
		$lang_string['sb_comments_plural_btn'] = 'kommentarer';
		
		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '';
		$lang_string['sb_view_counter_post'] = ' visning';
		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = '';
		$lang_string['sb_view_counter_plural_post'] = ' visningar';
		
		$lang_string['sb_add_link_btn'] = '+ l�nk';
		
		$lang_string['sb_rate_entry_btn'] = 'Click to Rate Entry';
		
		// Entry Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
				$lang_string['label_subject'] = "�mne:";
				$lang_string['label_insert'] = "L�gg till special:";
				$lang_string['btn_bold'] = " b ";
				$lang_string['btn_italic'] = " i ";
				$lang_string['btn_image'] = "img";
				$lang_string['btn_url'] = "url";
			$lang_string['btn_readmore'] = "read more"; // 0.4.8
				$lang_string['view_images'] = "Visa uppladdade bilder";
				$lang_string['label_entry'] = "Text:";
				$lang_string['btn_preview'] = "&nbsp;F�rhandsgranska&nbsp;";
				$lang_string['btn_post'] = "&nbsp;Spara&nbsp;";
				$lang_string['file_name'] = "Static File Name: (no spaces or file extensions)";
				// Javascript Strings 
				$lang_string['insert_styles'] = "Skriv text att formatteras";
				$lang_string['insert_image'] = "Skriv in URL till bilden";
				$lang_string['insert_url1'] = "Skriv in text till l�nken";
				$lang_string['insert_url2'] = "Skriv in fullst�ndig URL till l�nken";
				$lang_string['insert_url3'] = "�ppna URL i nytt f�nster (Ej n�dv�ndigt):"; // <-- New 0.3.6
				$lang_string['form_error'] = "V�nligen fyll i b�de �mne och text f�lten.";
				// More Javascript Strings <-- New 0.3.6
				$lang_string['insert_image_optional'] = 'Alternativ:';
				$lang_string['insert_image_width'] = 'Bredd (Ej n�dv�ndigt):';
				$lang_string['insert_image_height'] = 'H�jd (Ej n�dv�ndigt):';
				$lang_string['insert_image_popup'] = 'Titta p� fullstor bild i ett pop-up f�nster (Ej n�dv�ndigt):';
				$lang_string['insert_image_float'] = 'Flytande beskrivning (Ej n�dv�ndig):';
		
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
				$lang_string['title'] = "L�gg till";
				$lang_string['instructions'] = "�r du redo att l�gga till en Blog post? Fyll i formul�ret nedan! Klicka p� 'F�rhandsgranska' f�r att se hur din Blog-post kommer se ut, eller klicka p� 'Spara' f�r att g�ra just det.";
				$lang_string['title_ad'] = "Confirm Trackback Pings";
				$lang_string['instructions_ad'] = "These are the Auto-Discovered URIs you're about to ping. If you do not want to ping a certain URI, uncheck it below. Then press the 'OK' button to ping the checked URIs or press 'Cancel' to not ping at all.";
				$lang_string['label_tb_ping'] = "Trackback ping(s) to send (comma separated)";
				$lang_string['label_tb_autodiscovery'] = "autodiscovery";
				$lang_string['label_relatedlink'] = "Related Link"; // New for 0.4.6
				$lang_string['label_categories'] = "Category List";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "F�rhandsgranska / �ndra Blog-post";
				$lang_string['instructions_preview'] = "S� h�r ser din Blog-post ut. Om du har anv�nt text styles eller bilder, kom ih�g att avsluta alla dina 'tags'.";
				$lang_string['title_update'] = "�ndra Blog-post";
				$lang_string['instructions_update'] = "Du kan �ndra din Blog-post i formul�ret nedan. Klicka 'F�rhandsgranska' eller 'Spara' n�r du �r f�rdig.";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Cancel&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Oops!</h2>Blog-posten sparades inte. Det uppstod ett problem att spara.<br /><br />Serveren rapporterade:<br />";
				break;
			case 'add_static':
				// Add Entry
				$lang_string['title'] = "L�gg till statisk post";
				$lang_string['instructions'] = "Fyll i formul�ret nedan f�r att l�gga till en statisk post. Till skillnad fr�n en normal Blog-post visas en statisk post som en l�nk i menyn. Statiska poster �r till f�r sidor som alltid skall vara tillg�ngliga, s� som: Om mig, Kontakta oss, Schema, etc. Klicka 'F�rhandsgranska' f�r att se hur din statiska post kommer se ut, eller klicka p�  'Spara' f�r att g�ra just det.";
 				// Preview / Edit Entry
				$lang_string['title_preview'] = "F�rhandsgranska / �ndra statisk post";
				$lang_string['instructions_preview'] = "S� h�r kommer din statiska post se ut. Om du anv�nder text styles eller bilder, kom ih�g att avsluta alla dina 'taggar'.";
				$lang_string['title_update'] = "�ndra statisk post";
				$lang_string['instructions_update'] = "Du kan �ndra din statiska post i formul�ret nedan. Klicka 'F�rhandsgranska' p� nytt, eller 'Spara' n�r du �r klar.";
				$lang_string['form_error'] = "Please complete the Subject, Entry, and File Name fields.";	
				// Error Response
				$lang_string['error'] = "<h2>Oops!</h2>Postningen sparades inte!<br /><br />ServernRapporterade:<br />";
 				break;
			case 'add_block':
				// Add / Manage Blocks
				$lang_string['title'] = "Add / Manage Links";
				$lang_string['instructions'] = "Add custom Blocks";
				$lang_string['up'] = "up";
				$lang_string['down'] = "down";
				$lang_string['edit'] = "edit";
				$lang_string['delete'] = "delete";
				$lang_string['block_name'] = "Block Name:";
				$lang_string['block_content'] = "Block content:";
				$lang_string['instructions_edit'] = "You are currently editing block:";
				$lang_string['instructions_modify'] = "Click below to modify a block:";
				$lang_string['submit_btn_edit'] = "Edit Block";
				$lang_string['submit_btn_add'] = "Add Block";
				$lang_string['form_error'] = "Please complete the Name field.";
				break;
			case 'add_link':
				$lang_string['static_pages'] = "Static Pages:";
				// Add / Manage Links
				$lang_string['title'] = "L�gg till / �ndra L�nkar";
				$lang_string['instructions'] = "�ndra l�nkar till  andra sajter. Fyll i  formul�ret nedan och klicka 'L�gg till l�nk' f�r att uppdatera. Klicka upp eller ned f�r att �ndra ordningsf�ljd. Klicka '�ndra' f�r att korrigera en l�nk. Klicka 'Ta bort' f�r att radera en l�nk";
				$lang_string['up'] = "Upp";
				$lang_string['down'] = "Ned";
				$lang_string['edit'] = "�ndra";
				$lang_string['delete'] = "Ta bort";
				$lang_string['link_name'] = "L�nk namn:";
				$lang_string['link_url'] = "URL:";
				$lang_string['instructions_edit'] = "Du kan �ndra l�nken h�r:";
				$lang_string['instructions_modify'] = "Klicka nedan f�r att modifera en l�nk:";
				$lang_string['submit_btn_edit'] = "�ndra l�nken";
				$lang_string['submit_btn_add'] = "L�gg till l�nk";
				$lang_string['form_error'] = "V�nlligen fyl i b�de namn och URL.";
				break;
			case 'categories':
				// Add / Manage Links
				$lang_string['title'] = "Add / Manage Categories";
				$lang_string['instructions'] = "Use the form below to add and edit your categories. Each category item should be in this format 'category name (id number)'. Indent items with spaces to create heirarchies.<br /><br /><b>Example:</b><br />General (1)<br />News (3)<br />&nbsp;&nbsp;Announcements (6)<br />&nbsp;&nbsp;Events (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;Misc (7)<br />Technology (2)<br />";
				$lang_string['error'] = "Error";
				$lang_string['current_categories'] = "Current Categories";
				$lang_string['no_categories_found'] = "No Categories Found";
				$lang_string['category_list'] = "Category List:";
				$lang_string['validate'] = "Validate";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				break;
			case 'colors':
				// Change Colors
				$lang_string['title'] = "Titel";
				$lang_string['instructions'] = "Du kan �ndra f�rgerna p� din Blog. Anv�nd f�rgv�ljaren, eller skriv in HEX v�rden i f�lten nedan.";
				$lang_string['bg_color'] = "Sidobakgrund";
				$lang_string['main_bg_color'] = "Huvudsidans backgrund";
				$lang_string['border_color'] = "Sidans kant";
				$lang_string['inner_border_color'] = "Indv�ndig kant";
				$lang_string['header_bg_color'] = "Sidhuvudets bakgrund";
				$lang_string['header_txt_color'] = "Sidhuvudets Text";
				$lang_string['menu_bg_color'] = "Menyf�tets bakgrund";
				$lang_string['footer_bg_color'] = "Sidfotens bakgrund";
				$lang_string['txt_color'] = "Text";
				$lang_string['headline_txt_color'] = "Rubrik text";
				$lang_string['date_txt_color'] = "Datumtext";
				$lang_string['footer_txt_color'] = "Sidfotens Text";
				$lang_string['link_reg_color'] = "Allm�n l�nk";
				$lang_string['link_hi_color'] = "Markerad l�nk";
				$lang_string['link_down_color'] = "Bes�kt l�nk";
				// More Colors
				$lang_string['entry_bg'] = "Textf�ltets bakgrund";
				$lang_string['entry_title_bg'] = "Textf�ltets titels bakgrund";
				$lang_string['entry_border'] = "Textf�ltets kant";
				$lang_string['entry_title_text'] = "Titeltext";
				$lang_string['entry_text'] = "Textf�lt";
				$lang_string['menu_bg'] = "Menybakgrund";
				$lang_string['menu_title_bg'] = "Menytitel BG";
				$lang_string['menu_border'] = "Menykant";
				$lang_string['menu_title_text'] = "Menytitelns text";
				$lang_string['menu_text'] = "Menytext";
				$lang_string['menu_link_reg_color'] = "Menyl�nk standard";
				$lang_string['menu_link_hi_color'] = "Menyl�nk hover";
				$lang_string['menu_link_down_color'] = "Aktiv menyl�nk";
				// Submit
				$lang_string['color_preset'] = "Color Schemes:";
				$lang_string['scheme_name'] = "Enter a custom color scheme name:";
				$lang_string['scheme_file'] = "Enter scheme file name: (no spaces or file extensions)";
				$lang_string['save_btn'] = "&nbsp;Save&nbsp;";
				$lang_string['form_error'] = "Please enter a name for your custom color scheme.";
				$lang_string['submit_btn'] = "&nbsp;Spara&nbsp;";
				$lang_string['theme_doesnt_allow_colors'] = 'The currently selected theme does not allow for custom colors.';
				// Error Response
				$lang_string['error'] = "<h2>Oops!</h2>Informationen sparades inte!. Det uppstod ett problem....<br /><br />Servern rapporterade:<br/>";
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
				$lang_string['title'] = "Kommentarer";
				$lang_string['header'] = "L�gg till kommentar";
				$lang_string['instructions'] = "Fyll i formul�ret nedan f�r att l�gga till din kommentar.";
				$lang_string['comment_name'] = "Ditt namn:";
				$lang_string['comment_email'] = "Email:";
				$lang_string['comment_url'] = "URL:";
				$lang_string['comment_remember'] = "Remember me:";
				$lang_string['comment_text'] = "Kommentar:";
				$lang_string['post_btn'] = "&nbsp;Spara kommentaren&nbsp;";
				$lang_string['delete_btn'] = "Radera";
				$lang_string['expired_comment1'] = "We are sorry. New comments are not allowed after "; // New for 0.4.8
				$lang_string['expired_comment2'] = " days."; // New for 0.4.8
				
				$lang_string['blacklisted'] = "Sorry, your IP address has been banned. Comments not allowed."; // New for 0.4.8
				// Error Response
				$lang_string['error_add'] = "<h2>Oops!</h2>Kommentaren sparades inte! Det uppstod ett problem....<br /><br />Servern rapporterade:<br />";
				$lang_string['error_delete'] = "<h2>Oops!</h2>Kommentaren sparades inte! Det uppstod ett problem....<br /><br />Servern rapporterade:<br />";
				$lang_string['form_error'] = "Var v�nlig och fyll i Ditt namn f�r att l�mna en kommentar."; 
				break;
			case 'delete':
				$lang_string['title'] = "Radera Blog-post";
				$lang_string['instructions'] = "Det h�r �r den Blog-post du valt att radera, �r du helt s�ker att det �r det du vill g�ra?";
				$lang_string['ok_btn'] = "&nbsp;Ja&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Nej&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Oops!</h2>Blog-posten kunde inte raderas.<br /><br />Servern rapporterade:<br />";
				break;
			case 'delete_static':
				$lang_string['title'] = "Radera statisk post";
				$lang_string['instructions'] = "Det h�r �r den statiska post du valt att radera, �r du helt s�ker att det �r det du vill g�ra?";
				$lang_string['ok_btn'] = "&nbsp;Ok&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Avbryt&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Oops!</h2>Den statiska posten kunde inte raderas!<br /><br />Servern rapporterade:<br />";
				break;
			case 'image_list':
				$lang_string['title'] = "Bildarkiv";
				$lang_string['instructions'] = "Klicka p� en av l�nkarna nedan f�r att se motsvarande bild.<br /><br />F�r att l�gga till en bild till din Blog-post:<br />1) H�gerklicka en l�nk och v�lj 'Kopiera'.<br />2) G� tillbaks till din Blog-post i editorn.<br />3) Klicka sedan p� 'img' knappen och klistra in den kopierade l�nken.";
                                break;
			case 'info': // New 0.3.7
				$lang_string['title'] = "Meta-Data Information";
				$lang_string['instructions'] = "Informationen nedan anv�nds av s�kmotorer p� webben f�r att korrerkt hitta och identifiera inneh�llet p� din sajt. Informationen kan ocks� anv�ndas av RSS nyhetstj�nster.";
                                $lang_string['info_keywords'] = "Nyckelord: (En lista av kommaseparerade ord.)";
				$lang_string['info_description'] = "Beskrivning: (Antingen en sammanfattning av inneh�llet p� din sajt, eller fritext beskrivning.)";
				$lang_string['info_copyright'] = "R�ttigheter: (Copyright information, eller en l�nk till ett dokument som inneeh�ller motsvarand information.)";
				$lang_string['submit_btn'] = "&nbsp;Spara&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Oops!</h2>Informationen sparades inte!. Servern st�tte p� ett problem under det att den f�rs�kte spara din information.<br /><br />Servern rapporterade:<br />";
				$lang_string['form_error'] = "V�nligen fyll i titel- och f�rfattarf�lten.";
				break;
			case 'index':
				// Index
				break;
			case 'static':
				// Index
				break;
			case 'rating':
				$lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your information.<br /><br />Server Reported:<br />";
				break;
			case 'login':
				$lang_string['upgrade'] = "<h2>Upgrade</h2>"; // New 0.3.8
				$lang_string['upgrade_count'] = "%n comment files need to be upgraded:"; // New 0.3.8
				$lang_string['upgrade_url'] = "Upgrade Comments"; // New 0.3.8
				$lang_string['title'] = "Logga in";
				$lang_string['instructions'] = "Skriv in anv�ndarnamn och l�senord:";
				$lang_string['username'] = "Anv�ndarnamn:";
				$lang_string['password'] = "L�senord";
				$lang_string['submit_btn'] = "&nbsp;Logga in&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Inloggad!</h2>Du �r nu inloggad!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Oops!</h2>Du blev inte inloggad! Anv�ndarnamn eller l�senord var felaktigt, prova igen.<p />";
				$lang_string['form_error'] = "Skriv in anv�ndarnamn och l�senord:";
				break;
			case 'logout':
				$lang_string['title'] = "Logga ut";
				$lang_string['instructions'] = "<h2>Oops!</h2>Ett fel intr�ffade vid avloggningstillf�llet: Cookien kunde inte raderas!<p />";
				break;
			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Error Response
				$lang_string['error'] = "<h2>Oops!</h2>Informationen sparades inte! Det upstod ett problem....<br /><br />Servern rapporterade:<br />";
				break;
			case 'set_login': 
				$lang_string['title'] = "�ndra anv�ndarnamn &amp; L�senord";
				$lang_string['instructions'] = "Anv�nda formul�ret nedan f�r att �ndra ditt anv�ndarnamn och l�senord.";
				$lang_string['username'] = "Anv�ndarnamn:";
				$lang_string['password'] = "L�senord:";
				$lang_string['submit_btn'] = "&nbsp;Spara&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Sparat!</h2>Ditt anv�ndarnamn och l�senord �r nu sparat!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Oops!</h2>Informationen sparades inte! Servern st�tte p� ett problem att spara ditt anv�ndarnamn och l�senord.<br /><br />Servern rapporterade:<br />";
				$lang_string['form_error'] = "V�nligen fyll i anv�ndarnamn och l�senordsf�lten.";
				$lang_string['explanation'] = "In recent versions, our password structure has changed.  There is no longer a way to update passwords
					and/or logins from inside the blog code.  In order to change your password, delete /config/password.php and make sure install*.php
					exists on the local server.  Once that is done, refresh this page (or logout).  You will be presented with the same script
					to generate your password as you did when originally creating the blog site.";  // New for 0.4.6
				break;
			case 'install00': // <-- New
				$lang_string['title'] = "Welcome!";
				$lang_string['instructions'] = "Thank you for choosing Simple PHP Blog!";
				$lang_string['blog_choose_language'] = "Choose Language:";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				break;
			case 'install01': // <-- New
				$lang_string['title'] = "V�lkommen";
				$lang_string['instructions'] = "
				Tack f�r att du valt Simple PHP Blog!<br /><br />Simple PHP Blog �r ett enkelt bloggsystem. Det kr�ver PHP 4.1 eller b�ttre, och skrivr�ttigheter till serverkatalogerna den k�rs ifr�n. All information sparas i enkla filer, s� inga databaser kr�vs �verhuvudtaget.<br /><br /> F�r att kunna b�rja anv�nda Simple PHP Blog, kr�vs tre kataloger  ('config', 'content' och 'images') som underkataloger till din SPHPBlog katalog. Dessa anv�nds f�r att lagra all din information.<br /><br /> <b>Klicka nedan f�r att starta installationsrutinen:</b>";
				$lang_string['begin'] = "[ Begin Setup ]";
				break;
			case 'install02': // <-- New
				$lang_string['title'] = "Installation";
				$lang_string['instructions'] = "F�rs�ker skapa 'config', 'content', och 'images' kataloger:";
				$lang_string['folder_exists'] = "Okej! katalogen finns redan! Inga �ndringar gjorda...";
				$lang_string['folder_failed'] = "Oops! Kunde inte skapa katalogen...";
				$lang_string['folder_success'] = "Katalogen skapades...";
				// Help
				$lang_string['help'] = "<h2>Oops!</h2> Kunde inte skapa en eller flera kataloger, det beror sannorlikt p�:<br>
				<i>1) <b>Skriv r�ttigheter</b> saknas!<b>L�s/Skriv r�ttigheter kr�vs i SPHPBlog katalogen.</b></i><br>
				<i>2) <b>UID</b>'s (user ID's) f�r alla filer och foldrar maste st�mma �verrens.</i><p />
				
				G� igenom trouble-shooting instruktionen nedan och f�rs�k igen:<p />				
				1) Skapa, manuellt, f�ljande kataloger: <b>config</b>, <b>content</b>, och <b>images</b>.<p />
				2) S�tt <b>Skriv r�ttigheter</b> p� dessa kataloger. I ditt FTP-programm, Owner, User, och World skall ha <b>Read</b> och <b>Write</b> access. <i>(Du kan beh�va kontakta ditt webb-hotell f�r att �ndra dessa inst�llningar...)</i><p />
				3) Se till att UID's f�r filer och kataloger �r exakt desamma �verallt. <i>(Du kan beh�va kontakta ditt webb-hotell f�r att �ndra dessa inst�llningar...)</i>";
				$lang_string['try_again'] = "[ F�rs�k igen ]";
				// Success
				$lang_string['success'] = "<h2>Katalogerna skapade!</h2><p /><b>Klicka nedan f�r att forts�tta:</b>";
				$lang_string['continue'] = "[ Forts�tt ]";
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
				$lang_string['salt_length'] = " <i>(Salt Length = %string)</i><br />"; // <-- New
				$lang_string['title'] = "Skapa anv�ndarnamn och l�senord";
				$lang_string['instructions'] = "Anv�nd formul�ret nedan f�r att ange det anv�ndarnamn och l�senord du vill anv�nda f�r att administrera din sajt.";
				$lang_string['username'] = "Anv�ndarnamn:";
				$lang_string['password'] = "L�senord:";
				$lang_string['submit_btn'] = "&nbsp;Spara&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Gratulerar!</h2>Du �r nu inloggad. Klicka p� l�nken nedan f�r att g� till Setup sidan d�r du kan namnge din Blog-sajt. <br /><h2>Lycka till!</h2><p />";
				$lang_string['btn_setup'] = "[ Setup ]";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Oops!</h2>Informationen sparades inte. Servern lagrade inte ditt anv�ndarnamn/l�senord.<br /><br />Servern rapporterade:<br />";
				$lang_string['form_error'] = "V�nligen fyll i b�de f�ltet f�r anv�ndarnamn och f�r l�senord.";
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
				$lang_string['title'] = "Setup";
				$lang_string['instructions'] = "Du kan �ndra namnet p� din Blog-sajt samt din personliga information i formul�ret nedan.";
				$lang_string['blog_title'] = "Titel:";
				$lang_string['blog_author'] = "F�rfattare:";
				$lang_string['blog_email'] = "E-post:"; // <-- New 0.3.7
				$lang_string['blog_avatar'] = "Avatar URL: (Leave blank for none)."; // <-- New 0.4.7
				$lang_string['blog_footer'] = "Sidfot:";
				$lang_string['blog_choose_language'] = "V�lj spr�k:";
				$lang_string['blog_enable_comments'] = "Till�t kommentarer"; // <-- New 0.3.6
				$lang_string['blog_comments_popup'] = "�ppna kommentarer i ett pop-up f�nster"; // <-- New 0.3.6
				$lang_string['blog_enable_voting'] = "Enable Users to Rate Entries";
				$lang_string['blog_email_notification'] = "Skicka e-post n�r kommentarer givits"; // <-- New 0.3.7
				$lang_string['blog_enable_cache'] = "Enable Blog Entry Cache (may provide speed increase on some servers)"; // New for 0.4.6
				$lang_string['blog_send_pings'] = "Skicka weblog-&quot;pings&quot;"; // <-- New 0.3.7
				$lang_string['blog_ping_urls'] = "Skriv in fullst�nding URL (i.e. http://rpc.weblogs.com/RPC2) till &quot;ping&quot-tj�nsten;.<br />(Du kan skriva in fler �n en adress! Separera dessa med kommatecken.)"; // <-- New 0.3.7
				$lang_string['blog_trackback_about'] = "Trackback provides a method of notification between blogs. Let another
					blog know that you are linking to them by sending them a trackback ping. See who is linking to 
					your blog by receiving trackback pings.<br />
				   You can either enter the URIs to ping manually, or try to do it automatically through 
				   Auto-Discovery.";
				$lang_string['blog_trackback_enabled'] = "Enable trackback in my blog";
				$lang_string['blog_trackback_auto_discovery'] = "Enable Auto-Discovery when submitting a post containing URLs";
				$lang_string['blog_max_entries'] = "Maximalt antal poster att visa:"; // <-- New 0.3.6
				$lang_string['blog_comment_tags'] = "Till�tna taggar i kommentarer:"; // <-- New 0.3.6
				$lang_string['blog_gzip_about'] = "
					Sedan PHP 4.0.4, har PHP haft m�jlighet att l�sa och skriva gzip (.gz) komprimerade filer, 
					f�r att spara diskutrymme. PHP kan ocks�, transparent, komprimera webbsidor 
					som skickas till webbl�sare som st�djer GZip komprimering och p� s� s�tt spara bandbredd.<br />
					<br />
					Zlib support i PHP �r inte inkompilerat som standard. Om checkboxarna �r gr�markerade har
					din installation av PHP inget ZLib st�d och kan s�lunda inte komprimera.";
				$lang_string['blog_enable_gzip_txt'] = "Aktivera GZIP komprimering f�r databasfiler"; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_output'] = "Aktivera GZIP kopmrimering f�r HTTP data"; // <-- New 0.3.7
				$lang_string['submit_btn'] = "&nbsp;Spara&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Oops!</h2>Informationen sparades inte.<br /><br />Servern rapporterade:<br />";
				$lang_string['form_error'] = "V�nligen fyll i b�de titel och f�rfattare";
				$lang_string['label_entry_order'] = "Sorteringsordning:";
				$lang_string['select_new_to_old'] = "Visa nyast f�rst";
				$lang_string['select_old_to_new'] = "Visa �ldst f�rst";
				$lang_string['label_comment_order'] = "Kommentarernas sorteringsordning:";
								$lang_string['cal_sunday'] = "Sunday"; // New for 0.4.6
				$lang_string['cal_monday'] = "Monday"; // New for 0.4.6
				$lang_string['label_calendar_start'] = "Calendar Week Start Day"; // New for 0.4.6
				$lang_string['title_sidebar'] = "Sidebar"; // New in 0.4.7
				$lang_string['title_comments'] = "Comments"; // New in 0.4.7
				$lang_string['title_trackback'] = "Trackbacks"; // New in 0.4.7
				$lang_string['title_compression'] = "Compression"; // New in 0.4.7
				$lang_string['title_entries'] = "Entries"; // New in 0.4.7
				$lang_string['title_general'] = "General"; // New in 0.4.7
				$lang_string['title_language'] = "Language"; // New in 0.4.7
				$lang_string['blog_comment_days_expiry'] = "Comments Allowed For How Many Days? (0 means no expiry)"; // New in 0.4.8
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
				break;
			case 'options':
				$lang_string['title'] = "Inst�llningar";
				$lang_string['instructions'] = "Anv�nd formul�ret nedan f�r att st�lla in hur datum och tid visas. Du kan v�lja mellan 12 eller 24 timmars klocka. Kort eller l�ngt datumformat. <b>F�rhandsgranskning</b>-delen p� sidan uppdateras automatiskt s� du kan se hur formattering kommer se ut p� din sajt.";
				// Long Date
				$lang_string['ldate_title'] = "L�ngt datumformat:";
				$lang_string['weekday'] = "Veckodag";
				$lang_string['month'] = "M�nad";
				$lang_string['day'] = "Dag";
				$lang_string['year'] = "�r";
				$lang_string['none'] = "Inget";
				// Short Date
				$lang_string['sdate_title'] = "Kort datumformat:";
				$lang_string['s_month'] = "M�nad";
				$lang_string['s_mon'] = "MMM";
				$lang_string['s_day'] = "Dag";
				$lang_string['s_year'] = "�r";
				$lang_string['zero_day'] = "Inledanden nolla f�r dagar";
				$lang_string['show_century'] = "Visa �rhundrade";
				// Time
				$lang_string['time_title'] = "Tidsformat:";
				$lang_string['12hour'] = "12-timmarsklocka";
				$lang_string['24hour'] = "24-timmarsklocka";
				$lang_string['before_noon'] = "F�rmiddag";
				$lang_string['after_noon'] = "Eftermiddag";
				// Date
				$lang_string['date_title'] = "Datumformat:";
				$lang_string['long_date'] = "L�ngt datumformat";
				$lang_string['short_date'] = "Kort datumformat";
				$lang_string['time'] = "Tid";
				// Menu
				$lang_string['menu_title'] = "Menyns datumformat:";
				$lang_string['long_date'] = "L�ngt datumformat";
				$lang_string['short_date'] = "Kort datumformat";
				// Used in multiple places
				$lang_string['zero_day'] = "Inledande nolla f�r dagar";
				$lang_string['zero_month'] = "Inledande nolla f�r m�nader";
				$lang_string['zero_hour'] = "Inledande nolla f�r timmar";
				$lang_string['separator'] = "Separat�r:";
				$lang_string['preview'] = "F�rhandsgranska:";
				$lang_string['server_offset'] = "Tidsoffset:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Spara&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Oops!</h2>Informationen sparades inte. <br /><br />Servern rapporterade:<br />";
				break;
			case 'themes':
				$lang_string['title'] = "Teman";
				$lang_string['instructions'] = "Anv�nd drop-down menyn f�r att v�lja tema.";
				// Themes
				$lang_string['choose_theme'] = "Teman:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Spara&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Oops!</h2>Informationen sparades inte. <br /><br />Servern rapporterade:<br />";
				break;
			case 'upload_img':
				$lang_string['title'] = "Ladda upp bilder";
				$lang_string['instructions'] = "Klicka p� knappen nedan f�r att v�lja vilken bild som skall laddas upp.";
				$lang_string['select_file'] = "V�lj fil:";
				$lang_string['upload_btn'] = "Ladda upp";
				// Error Response
				$lang_string['error'] = "<h2>Oops!</h2>Kunde inte spara bilden.<br /><br />Servern rapporterade:<br />";
				break;
			case 'search': // <-- New 0.3.7
				$lang_string['title'] = "S�kresultat";
				$lang_string['instructions'] = "S�kresultat f�r <b>%string</b>:";
				$lang_string['not_found'] = "Inget resultat.";
				break;
			case 'contact':
				$lang_string['title'] = "Contact Me";
				$lang_string['instructions'] = "Fill in the form:";
				$lang_string['form_error'] = "Please complete the Subject and Comment fields.";
				$lang_string['name'] = "Name:";
				$lang_string['email'] = "Email:";
				$lang_string['subject'] = "Subject:";
				$lang_string['comment'] = "Comment:";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				$lang_string['success'] = "<h2>Success!</h2>Your message has been sent.<p />";
				$lang_string['failure'] = "<h2>Error!</h2>Your message has not been sent. Most likely the Anti Spam was not entered properly.<p />";
				$lang_string['contact_capcha'] = "Anti-Spam: Enter "; // 0.4.2	
				$lang_string['contactsent'] = "Contact sent through: ";  // New for 0.4.6
				$lang_string['IPAddress'] = "IP Address:";  // New for 0.4.6
				$lang_string['useragent'] = "User Agent:";  // New for 0.4.6
				$lang_string['wrote'] = "<i>On %s, %s wrote:</i><br />\n<br />\n%s"; // New for 0.4.6.2
				break;
			case 'stats':
				$lang_string["title"] = "Statistics";
				$lang_string["general"] = "General";
				$lang_string["entry_info"] = "<b>%s</b> entries using <b>%s</b> words stored in <b>%s</b> bytes";
				$lang_string["comment_info"] = "<b>%s</b> comments using <b>%s</b> words stored in <b>%s</b> bytes";
				$lang_string["trackback_info"] = "<b>%s</b> trackbacks stored in <b>%s</b> bytes";
				$lang_string["static_info"] = "<b>%s</b> static pages using <b>%s</b> words stored in <b>%s</b> bytes";
				$lang_string["most_viewed_entries"] = "10 Most viewed entries";
				$lang_string["most_commented_entries"] = "10 Most commented entries";
				$lang_string["most_trackbacked_entries"] = "10 Most trackbacked entries";
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
