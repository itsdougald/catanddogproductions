<?php
	// French Language File
	// (c) 2004 Thibaud Chon�, thibaud <dot> chone <at> insa-lyon <dot> fr (0.3.7)
	// (c) 2005 Bill Bateman (0.4.6)
	// (c) 2006 Christian Clavet
	// (c) 2006 Clement Moulin (0.4.9)
	// (c) 2008 Francis Roux-Serret (0.5.2)


	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;

		// Language: Francais
		$lang_string['language'] = 'fran�ais';
		$lang_string['locale'] = array('fr_FR','fra','french');
		$lang_string['rss_locale'] = 'fr-FR'; // New 0.4.8

		// ISO Charset: ISO-8859-1
		$lang_string['html_charset'] = 'ISO-8859-1';
		$lang_string['php_charset'] = 'ISO-8859-1';
		setlocale( LC_TIME, $lang_string['locale'] );

		// Some Global Strings

		// Menu
		$lang_string['menu_links'] = "Liens";
		$lang_string['menu_home'] = "Accueil";
		$lang_string['menu_contact'] = "Contactez-moi";
		$lang_string['menu_stats'] = "Statistiques";
		$lang_string['menu_calendar'] = "Calendrier"; // New for 0.4.8
		$lang_string['menu_archive'] = "Archives";
		$lang_string['menu_viewarchives'] = "Voir toutes les archives";
		$lang_string['menu_menu'] = "Menu";
		$lang_string['menu_add'] = "Ajouter entr�e";
		$lang_string['menu_add_static'] = "Ajouter page statique";
		$lang_string['menu_upload'] = "Image de t�l�chargement";
		$lang_string['menu_setup'] = "Configuration";
		$lang_string['menu_categories'] = "Cat�gories";
		$lang_string['menu_info'] = "Meta Tags";
		$lang_string['manage_users'] = "Gestion utilisateurs";
		$lang_string['manage_php_config'] = "Voir config. PHP"; // New in 0.5.0.1
		$lang_string['menu_options'] = "Date &amp; Heure";
		$lang_string['menu_themes'] = "Th�mes";
		$lang_string['menu_colors'] = "Couleurs";
		$lang_string['menu_change_login'] = "Changer le login";
		$lang_string['menu_logout'] = "D�connexion";
		$lang_string['menu_login'] = "Connexion";
		$lang_string['menu_most_recent'] = "Derniers commentaires";
		$lang_string['menu_most_recent_entries'] = "Derni�res entr�es";
		$lang_string['menu_most_recent_trackback'] = "Derniers trackbacks";
		$lang_string['menu_add_block'] = "Blocs";
		$lang_string['menu_emoticons'] = "Emotic�nes"; // New for 0.4.7
		$lang_string['menu_avatar'] = "Avatar"; // New for 0.4.7
		$lang_string['menu_moderation'] = "Mod�ration"; // New for 0.4.9
		$lang_string['menu_commentmoderation'] = "Commentaires non mod�r�s"; // New for 0.5.0
		$lang_string['menu_random_entry'] = "Entr�e al�atoire"; // New for 0.5.2
		$lang_string['menu_plugins'] = "Plugins"; // New for 0.5.2
		$lang_string['notice_moderator1'] = "Vous avez ";
		$lang_string['notice_moderator2'] = " commentaire(s) n�cessitant votre approbation.";
		$lang_string['notice_loggedin'] = "Vous �tes actuellement identifi�.";


		// Counter
		$lang_string['counter_today'] = "Aujourd'hui:"; // New for 0.4.8
		$lang_string['counter_yesterday'] = "Hier:"; // New for 0.4.8
		$lang_string['counter_totalsidebar'] = "Total:"; // New for 0.4.8
		$lang_string['counter_title'] = "Total compteurs"; // New for 0.4.8

		// Other
		$lang_string['home'] = "Retour accueil";
		$lang_string['nav_next'] = 'Suivant';
		$lang_string['nav_back'] = 'Pr�c�dent';
		$lang_string['nav_first'] = 'Premier'; // New in 0.5.0.1
		$lang_string['nav_last'] = 'Dernier'; // New in 0.5.0.1
		$lang_string['search_title'] = 'Rechercher';
		$lang_string['search_go'] = 'OK';
		$lang_string['page_generated_in'] = 'Page g�n�r�e en %s secondes';
		$lang_string['counter_total'] = 'Visites site: '; // New in 0.4.8
		$lang_string['read_more'] = 'En savoir plus...'; // New in 0.4.8
		$lang_String['randomentry'] = 'Entr�e al�atoire'; // New in 0.5.0.1
		$lang_string['randomquote'] = 'Citation al�atoire'; // New in 0.5.0.1

		// SB Functions
		$lang_string['sb_months'] = array( 'Janvier', 'F�vrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Ao�t', 'Septembre', 'Octobre', 'Novembre', 'D�cembre' );
		$lang_string['sb_default_title'] = 'Sans Titre';
		$lang_string['sb_default_author'] = 'Sans Auteur';
		$lang_string['sb_default_footer'] = 'Sans bas de page';

		$lang_string['sb_edit'] = 'Editer';
		$lang_string['sb_delete'] = 'Supprimer';
		$lang_string['sb_permalink'] = 'permalien';
		$lang_string['sb_trackback'] = 'trackbacks';
		$lang_string['sb_postedby'] = 'Post� par'; // 0.5.0
		$lang_string['sb_admin'] = 'Administrateur'; // 0.5.0
		$lang_string['sb_relatedlink'] = '� propos'; // <-- New in 0.4.6

		$lang_string['sb_add_comment_btn'] = 'Ajouter un commentaire';
		$lang_string['sb_read_entry_btn'] = 'lire entr�e'; // 0.5.0
		$lang_string['sb_comment_btn_number_first'] = true;
		$lang_string['sb_comment_btn'] = 'commentaire';
		$lang_string['sb_comment_view'] = 'lire'; // 0.5.0
		$lang_string['sb_comments_plural_btn_number_first'] = true;
		$lang_string['sb_comments_plural_btn'] = 'commentaires';
		$lang_string['sb_comments_plural_view'] = 'lectures'; // 0.5.0

		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '';
		$lang_string['sb_view_counter_post'] = ' lecture';

		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = '';
		$lang_string['sb_view_counter_plural_post'] = ' lectures';

		$lang_string['sb_add_link_btn'] = 'G�rer les liens';
		$lang_string['sb_rate_entry_btn'] = "Cliquez pour �valuer l'entr�e";

		// Entry Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
			$lang_string['label_subject'] = "Sujet:";
			$lang_string['label_insert'] = "Insertion sp�ciale:";
			$lang_string['btn_bold'] = " b ";
			$lang_string['btn_italic'] = " i ";
			$lang_string['btn_image'] = "img";
			$lang_string['btn_url'] = "url";
			$lang_string['btn_readmore'] = "en savoir plus"; // 0.4.8
			$lang_string['view_images'] = "Voir les images t�l�charg�es";
			$lang_string['label_entry'] = "Entr�e:";
			$lang_string['btn_preview'] = "&nbsp;Aper�u&nbsp;";
			$lang_string['btn_post'] = "&nbsp;Envoyer&nbsp;";
		  $lang_string['chk_visiblemenu'] = "Visible (afficher dans le menu)";
			$lang_string['file_name'] = "Nom de fichier statique: (sans espaces ni extension de fichiers)";

			// Javascript Strings
			$lang_string['insert_styles'] = "Entrez le texte � formater:";
			$lang_string['insert_image'] = "Entrez l\\'URL de l\\'image:";
			$lang_string['insert_url1'] = "Entrez le texte � afficher pour le lien (optionnel):";
			$lang_string['insert_url2'] = "Entrez l\\'URL compl�te du lien:";
			$lang_string['insert_url3'] = "Ouvrir l\\'URL dans une nouvelle fen�tre (optionnel):";
			$lang_string['form_error'] = "Veuillez compl�ter les champs Sujet et Entr�e.";

			// More Javascript Strings
			$lang_string['insert_image_optional'] = 'Optionnel:';
			$lang_string['insert_image_width'] = 'Largeur (optionnel):';
			$lang_string['insert_image_height'] = 'Taille (optionnel):';
			$lang_string['insert_image_popup'] = 'Ouvrir en taille r�elle dans un popup lorsque cliqu�e (optionnel):';
			$lang_string['insert_image_float'] = 'Flottante (optionnel):';

			$lang_string['day'] = 'Jour';
			$lang_string['month'] = 'Mois';
			$lang_string['year'] = 'Ann�e';
			$lang_string['hour'] = 'Heure';
			$lang_string['minute'] = 'Minute';
			$lang_string['second'] = 'Seconde';
		}

		switch ($page) {
			case 'add':
				// Add Entry
				$lang_string['title'] = "Ajouter une entr�e";
				$lang_string['instructions'] = "�tes vous pr�t � bloguer? Remplissez le formulaire ci dessous, puis cliquez sur 'Aper�u' pour voir � quoi va ressembler votre entr�e, ou sur 'Poster' pour sauvegarder votre entr�e.";
				$lang_string['title_ad'] = "Confirmez les pings de Trackback";
				$lang_string['instructions_ad'] = "Ce sont les URIs auto-d�couvertes que vous �tes sur le point de pinguer. Si vous ne voulez pas pinguer une certaine URI, d�selectionnez-l� ci-dessous. Puis cliquez sur le bouton 'OK' pour pinguer les URIs v�rifi�es ou sur 'Annuler' pour ne rien pinguer du tout.";
				$lang_string['label_tb_ping'] = "Pings de Trackback � envoyer (s�par�s par des virgules)";
				$lang_string['label_tb_autodiscovery'] = "auto-d�couverte";
				$lang_string['label_relatedlink'] = "A propos";
				$lang_string['label_categories'] = "Liste des cat�gories";

				// Preview / Edit Entry
				$lang_string['title_preview'] = "Aper�u / Edition d'entr�e";
				$lang_string['instructions_preview'] = "Voici � quoi votre entr�e va ressembler. Si vous utilisez diff�rents styles de texte ou si vous incluez des images, veillez � bien 'fermer' toutes vos 'balises'.";
				$lang_string['title_update'] = "Modifier une entr�e";
				$lang_string['instructions_update'] = "Vous pouvez modifier votre entr�e en utilisant le formulaire ci-dessous. Cliquez sur 'Aper�u' ou sur 'Envoyer' lorque vous avez fini.";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Annuler&nbsp;";

				// Error Response
				$lang_string['error'] = "<h2>Oooups!</h2>Entr�e non sauvegard�e. Une erreur est survenue lors de la sauvegarde de votre entr�e.<br /><br />Le serveur a retourn�:<br />";
				$lang_string['success'] = "<h2>Entr�e sauvegard�e!</h2>Votre entr�e a �t� sauvegard�e avec succ�s."; // 0.4.8.1
				break;

			case 'add_static':
				// Add Entry
				$lang_string['title'] = "Ajouter une page statique";
				$lang_string['instructions'] = "Remplissez le formulaire suivant pour cr�er une page statique. Contrairement � une entr�e classique, les pages statiques apparaissent en lien dans le menu de droite. Ce sont des pages que vous souhait�es toujours accessibles comme par exemple: � propos de moi, me contacter, mon agenda, etc. Cliquez sur 'Apercu' pour voir � quoi cette page ressemblera, ou sur 'Envoyer' pour la sauvegarder.";

				// Preview / Edit Entry
				$lang_string['title_preview'] = "Aper�u / Edition de page statique";
				$lang_string['instructions_preview'] = "Voici � quoi ressemblera votre page statique. Si vous utilisez diff�rents styles de texte ou si vous incluez des images, veillez a bien 'fermer' toutes vos 'balises'.";
				$lang_string['title_update'] = "Modifier page statique";
				$lang_string['instructions_update'] = "Vous pouvez modifier votre entr�e � l'aide du formulaire ci-dessous. Cliquez sur 'Apercu' ou sur 'Envoyer' lorque vous avez termin�.";
				$lang_string['form_error'] = "Veuillez compl�ter les champs Sujet, Entr�e et Nom de fichier.";

				// Error Response
				$lang_string['error'] = "<h2>Oouups!</h2>Entr�e non sauvegard�e. Une erreur est survenue lors de la sauvegarde.<br /><br />Le serveur a retourn�:<br />";
				break;

			case 'add_block':
				// Add / Manage Blocks
				$lang_string['title'] = "Ajouter / G�rer les blocs";
				$lang_string['instructions'] = "Ajouter un bloc personnalis�";
				$lang_string['up'] = "haut";
				$lang_string['down'] = "bas";
				$lang_string['edit'] = "editer";
				$lang_string['delete'] = "effacer";
				$lang_string['block_name'] = "Nom du bloc:";
				$lang_string['block_content'] = "Contenu du bloc:";
				$lang_string['instructions_edit'] = "Vous �tes en train d'�diter le bloc:";
				$lang_string['instructions_modify'] = "Cliquez ci-dessous pour modifier un bloc:";
				$lang_string['submit_btn_edit'] = "Editer le bloc";
				$lang_string['submit_btn_add'] = "Ajouter un bloc";
				$lang_string['form_error'] = "Veuillez renseigner le champ Nom.";
				break;

			case 'add_link':
				$lang_string['static_pages'] = "Pages statiques:";

				// Add / Manage Links
				$lang_string['title'] = "Ajouter / G�rer les liens";
				$lang_string['instructions'] = "Ajouter des liens personnalis�s vers d'autres sites. Remplissez le formulaire ci-dessous et cliquez sur 'Ajouter le lien'. Utilisez les boutons 'Haut' et 'Bas' pour changer l'ordre des liens. Cliquez sur le bouton 'Editer' pour modifier un lien. Cliquez sur le bouton 'Effacer' pour supprimer un lien.";
				$lang_string['up'] = "haut";
				$lang_string['down'] = "bas";
				$lang_string['edit'] = "editer";
				$lang_string['delete'] = "effacer";
				$lang_string['link_name'] = "Nom du lien:";
				$lang_string['link_url'] = "URL du lien : (Optionnel. Laissez vide pour cr�er un s�parateur.)";
				$lang_string['instructions_edit'] = "Vous �ditez actuellement le lien:";
				$lang_string['instructions_modify'] = "Cliquez ci-dessous pour modifier un lien:";
				$lang_string['submit_btn_edit'] = "Editer le lien";
				$lang_string['submit_btn_add'] = "Ajouter un lien";
				$lang_string['form_error'] = "Veuillez renseigner le champ Nom.";
				break;

			case 'categories':

				// Add / Manage Links
				$lang_string['title'] = "Ajouter / G�rer les cat�gories";
				$lang_string['instructions'] = "Utilisez le formulaire ci-dessous pour ajouter et �diter vos cat�gories. Chaque cat�gorie doit respecter le format suivant: 'nom de cat�gorie (num�ro identifiant)'.  Ajouter un espace devant une cat�gories pour en faire une sous-cat�gorie.<br /><br /><b>Exemple:</b><br />G�n�ral (1)<br />Nouvelles (3)<br />&nbsp;&nbsp;Annonces (6)";
				$lang_string['error'] = "Erreur";
				$lang_string['current_categories'] = "Cat�gories actuelles";
				$lang_string['no_categories_found'] = "Aucunes cat�gories trouv�es";
				$lang_string['category_list'] = "Liste des cat�gories:";
				$lang_string['validate'] = "V�rifier";
				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";
				break;

			case 'colors':
				// Change Colors
				$lang_string['title'] = "Changer les couleurs";
				$lang_string['instructions'] = "Vous pouvez changer les couleurs du texte et du fond de votre blog. S�lectionnez d'abord le champs ci-dessous, puis utilisez la palette pour composer votre couleur. Les valeurs changent automatiquement.";
				$lang_string['bg_color'] = "Fond de page";
				$lang_string['main_bg_color'] = "Fond de la page principale";
				$lang_string['border_color'] = "Bordure de page";
				$lang_string['inner_border_color'] = "Bordure interne";
				$lang_string['header_bg_color'] = "Ent�te: fond";
				$lang_string['header_txt_color'] = "Ent�te: texte";
				$lang_string['menu_bg_color'] = "Menu: fond";
				$lang_string['footer_bg_color'] = "Pied de page: fond";
				$lang_string['txt_color'] = "Texte principal";
				$lang_string['headline_txt_color'] = "Titres";
				$lang_string['date_txt_color'] = "Dates";
				$lang_string['footer_txt_color'] = "Pied de page: texte";
				$lang_string['link_reg_color'] = "Lien";
				$lang_string['link_hi_color'] = "Lien survol�";
				$lang_string['link_down_color'] = "Lien activ�";

				// More Colors
				$lang_string['entry_bg'] = "Entr�e: fond";
				$lang_string['entry_title_bg'] = "Entr�e: fond titre";
				$lang_string['entry_border'] = "Entr�e: bordure";
				$lang_string['entry_title_text'] = "Entr�e: texte titre";
				$lang_string['entry_text'] = "Entr�e: texte";

				$lang_string['static_bg'] = "Static: fond"; // 0.5.0
				$lang_string['static_title_bg'] = "Static: fond titre"; // 0.5.0
				$lang_string['static_border'] = "Static: bordure"; // 0.5.0
				$lang_string['static_title_text'] = "Static: texte titre"; // 0.5.0
				$lang_string['static_text'] = "Static: texte"; // 0.5.0

				$lang_string['comment_bg'] = "Commentaire: fond"; // 0.5.0
				$lang_string['comment_title_bg'] = "Commentaire: fond titre"; // 0.5.0
				$lang_string['comment_border'] = "Commentaire: bordure"; // 0.5.0
				$lang_string['comment_title_text'] = "Commentaire: texte titre"; // 0.5.0
				$lang_string['comment_text'] = "Commentaire: texte"; // 0.5.0

				$lang_string['menu_bg'] = "Menu: fond";
				$lang_string['menu_title_bg'] = "Menu: fond titre";
				$lang_string['menu_border'] = "Menu: bordure";
				$lang_string['menu_title_text'] = "Menu: texte titre";
				$lang_string['menu_text'] = "Menu: texte";
				$lang_string['menu_link_reg_color'] = "Menu: lien";
				$lang_string['menu_link_hi_color'] = "Menu: lien survol�";
				$lang_string['menu_link_down_color'] = "Menu: lien activ�";

				// Submit
				$lang_string['color_preset'] = "Profils de couleur:";
				$lang_string['scheme_name'] = "Entrez le nom de votre profil de couleur personnalis�:";
				$lang_string['scheme_file'] = "Entrez le nom du fichier de votre profil de couleur: (sans espaces ni extension de fichiers)";
				$lang_string['save_btn'] = "&nbsp;Enregistrer&nbsp;";
				$lang_string['form_error'] = "Veuillez entrer un nom pour votre profil de couleur personnalis�.";
				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";
				$lang_string['theme_doesnt_allow_colors'] = 'Le th�me actuellement s�lectionn� n\'autorise pas les couleurs personnalis�es.';

				// Error Response
				$lang_string['error'] = "<h2>Oouups!</h2>Param�tres non sauvegard�s. Une erreur est survenue durant l'enregistrement.<br /><br />Le serveur a retourn�:<br />";
				$lang_string['success'] = "<h2>Couleurs sauv�es!</h2>Les param�tres ont �t� sauvegard�s avec succ�s."; // New for 0.4.8.1
				break;

			case 'comments':
				// Comments
				$lang_string['name'] = "Nom:"; //New in 0.4.6.2
				$lang_string['email'] = "Email:"; //New in 0.4.6.2
				$lang_string['homepage'] = "Site Internet:"; //New in 0.4.6.2
				$lang_string['comment'] = "Commentaire:"; //New in 0.4.6.2
				$lang_string['IPAddress'] = "Adresse IP:";  // New for 0.4.6.2
				$lang_string['useragent'] = "Navigateur:";  // New for 0.4.6.2
				$lang_string['wrote'] = "<i>Le %s, %s a �crit:</i><br />\n<br />\n%s"; // New for 0.4.6.2

				$lang_string['comment_capcha'] = "Anti-Spam: Entrez "; // 0.4.2
				$lang_string['title'] = "Commentaires";
				$lang_string['header'] = "Ajouter un commentaire";
				$lang_string['instructions'] = "Remplissez ce formulaire pour ajouter votre propre commentaire.";
				$lang_string['comment_name'] = "Votre nom:";
				$lang_string['comment_email'] = "Email:";
				$lang_string['comment_url'] = "URL:";
				$lang_string['commentposted'] = "Nouveau commentaire post� sur: ";  // New for 0.4.6.2
				$lang_string['comment_remember'] = "Se souvenir de moi:";
				$lang_string['comment_text'] = "Votre commentaire:";
				$lang_string['post_btn'] = "&nbsp;Poster un commentaire&nbsp;";
				$lang_string['delete_btn'] = "effacer";
				$lang_string['ban_btn'] = "interdire IP"; // New for 0.4.8
				$lang_string['expired_comment1'] = "D�sol�, les nouveaux commentaires ne sont pas autoris�s apr�s "; // New for 0.4.8
				$lang_string['expired_comment2'] = " jours."; // New for 0.4.8

				$lang_string['blacklisted'] = "D�sol�, votre adresse IP a �t� interdite. Commentaires non autoris�s."; // New for 0.4.8
				$lang_string['bannedword'] = "Votre commentaire, URL, nom ou email contiennent un ou plusieurs mot(s) qui ont �t� interdits par l'administrateur. Votre commentaire N'A PAS �t� enregistr�."; // New for 0.4.8
				$lang_string['nocomments'] = "Les commentaires ne sont pas disponibles pour cette entr�e."; // New for 0.4.9
				$lang_string['email_moderator'] = "Les commentaires sont mod�r�s. Ce commentaire doit �tre approuv� avant d'�tre vu par le public."; // New for 0.5.0
				$lang_string['user_notice_mod'] = "Ce blog est mod�r�. Votre commentaire n�cessite l'approbation des administrateurs avant d'�tre visible."; // new for 0.5.0
		
				$lang_string['return_to_comments'] = 'Retourner aux commentaires';

				// Error Response
				$lang_string['error_add'] = "<h2>Oouups!</h2>Commentaire non sauvegard�. Une erreur est survenue lors de l'enregistrement de votre commentaire.<br /><br />Le serveur a retourn�:<br />";
				$lang_string['error_delete'] = "<h2>Oouups!</h2>Commentaire non supprim�. Une erreur est survenue lors de la suppression du commentaire.<br /><br />Le serveur a retourn�:<br />";
				$lang_string['error_ban'] = "<h2>Oouups!</h2>L'IP n'a pas �t� ajout�e � la liste des IP interdites.<br /><br />Le serveur a retourn�:<br />";
				$lang_string['success_add'] = "<h2>Commentaire ajout�!</h2>Votre commentaire a �t� sauvegard� avec succ�s."; // New for 0.4.8.1
				$lang_string['success_delete'] = "<h2>Commentaire supprim�!</h2>Le commentaire a �t� supprim�."; // New for 0.4.8.1
				$lang_string['success_ban1'] = "<h2>IP interdite!";
				$lang_string['success_ban2'] = "</h2>Pour retirer cette interdiction ult�rieurement, utilisez l'option Mod�ration du menu Pr�f�rences."; // New for 0.4.8.1
				$lang_string['form_error'] = "Veuillez renseigner les champs Nom, Commentaire et Anti-Spam.";
				$lang_string['error_noip'] = "Aucune IP n'a �t� fournie pour l'interdiction.";

				$lang_string[ 'error_comments_disabled' ] = '<h2>Erreur!</h2>Hey! Les commentaires sont d�sactiv�s sur ce blog. �tes-vous un spambot?'; // New 0.5.0
				$lang_string[ 'error_no_match' ] = "<h2>Erreur!</h2>Votre adresse IP ne correspond pas � l'IP de l'entr�e. �tes-vous un spambot?"; // New 0.5.0
				$lang_string[ 'error_fields_missing' ] = '<h2>Erreur!</h2>Les champs suivants ne sont pas renseign�s: '; // New 0.5.0
				$lang_string[ 'error_spambot' ] = '<h2>Erreur!</h2>Il manque les donn�es capcha. �tes-vous un spambot?'; // New 0.5.0
				$lang_string[ 'error_capcha' ] = '<h2>Erreur!</h2>Le capcha entr� est incorrect.'; // New 0.5.0
				$lang_string[ 'error_bad_data' ] = '<h2>Erreur!</h2>Donn�es POST invalides. �tes-vous un spambot?'; // New 0.5.0
				$lang_string[ 'error_entry_missing' ] = '<h2>Erreur!</h2>Vous essayez de mettre un commentaire sur une entr�e qui n\'existe pas.'; // New 0.5.0
				$lang_string[ 'error_empty_text' ] = '<h2>Erreur!</h2>Vous n\'avez mis aucun commentaire ou pas pr�cis� votre nom.'; // New 0.5.0
				break;

			case 'delete':
				$lang_string['title'] = "Supprimer une entr�e";
				$lang_string['instructions'] = "Ceci est l'entr�e que vous vous appretez � effacer. Assurez-vous que vous �tes certain de vouloir la supprimer car l'op�ration est irr�versible...";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Annuler&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Oouups!</h2>Impossible de supprimer l'entr�e.<br /><br />Le serveur a retourn�:<br />";
				$lang_string['success'] = "<h2>Entr�e supprim�e!</h2>L'entr�e a �t� supprim�e."; // New for 0.4.8.1
				break;

			case 'delete_static':
				$lang_string['title'] = "Effacer une page statique";
				$lang_string['instructions'] = "Ceci est la page statique que vous vous appretez � effacer. Assurez-vous que vous �tes certain de vouloir la supprimer car l'op�ration est irr�versible...";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Annuler&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Oouups!</h2>Impossible de supprimer la page.<br /><br />Le serveur a retourn�:<br />";
				$lang_string['success'] = "<h2>Page statique supprim�e!</h2>La page statique a �t� supprim�e."; // New for 0.4.8.1
				break;

			case 'image_list':
				$lang_string['title'] = "Liste des images";
				$lang_string['instructions'] = "Cliquez sur les liens ci-dessous pour voir les images.<br><br>Pour ajouter une image � votre entr�e:<br>1) Cliquez tout en appuyant sur CONTROL et s�lectionnez 'Copier le raccourci'.<br>2) Retournez sur la page d'ajout ou d'�dition d'entr�e.<br>3) Cliquez sur le bouton 'img' et collez l'URL dans la fen�tre.";
				break;

			case 'info':
				$lang_string['title'] = "Meta-Donn�es";
				$lang_string['instructions'] = "Les informations ci-dessous sont utilis�es comme &quot;meta-donn�es&quot;, qui aident les moteurs de recherche � correctement trouver et identifier votre site. Ces informations peuvent �galement �tre utilis�es dans les flux RSS.";
				$lang_string['info_keywords'] = "Mots clefs: (Liste de mots clefs s�par�s par des virgules.)";
				$lang_string['info_description'] = "Description: (Un r�sum� ou une description libre de votre site.)";
				$lang_string['info_copyright'] = "Droits: (Informations sur la license du contenu, ou lien vers un document contenant ces informations.)";
				$lang_string['tracking_code'] = "Code de tracking externe: (code HTML ayant besoin de tourner sur la page principale (dans les tags d\{en-t�te par s�curit�) uniquement pour chaque utilisateur qui arrive sur la page - par ex. Google Analytics)";
				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Oouups!</h2>Informations non sauvegard�es. Une erreur est survenue durant la sauvegarde de vos informations.<br /><br />Le serveur a retourn�:<br />";
				$lang_string['success'] = "<h2>Meta-Donn�es sauvegard�es!</h2>Les informations ont �t� sauvegard�es avec succ�s."; // New for 0.4.8.1
				$lang_string['form_error'] = "Veuillez renseigner les champs Titre et Auteur.";
				break;

			case 'index':
				// Index
				break;

			case 'static':
				// Index
				break;

			case 'rating':
				$lang_string['error'] = "<h2>Oouups!</h2>Information non sauvegard�e. Une erreur est survenue lors de la sauvegarde.<br /><br />Le serveur a retourn�:<br />";
				$lang_string['success'] = "<h2>Vote enregist�!</h2>Votre �valuation a �t� enregistr�e avec succ�s."; // New for 0.4.8.1
				break;

			case 'login':
				$lang_string['upgrade'] = "<h2>Mettre � jour</h2>"; // New 0.3.8
				$lang_string['upgrade_count'] = "%n fichiers de commentaires ont besoins d'�tre mis � jour:"; // New 0.3.8
				$lang_string['upgrade_url'] = "Mise � jour des commentaires"; // New 0.3.8
				$lang_string['title'] = "Connexion";
				$lang_string['instructions'] = "Veuillez entrez votre nom d'utilisateur et votre mot de passe ci-dessous.";
				$lang_string['username'] = "Nom d'utilisateur:";
				$lang_string['password'] = "Mot de passe:";
				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Succ�s!</h2>Vous �tes maintenant connect�. Joyeux blogging!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Oooups!</h2>Vous n'�tes pas connect�. Veuillez v�rifier que vous avez correctement saisi votre nom d'utilsateur et votre mot de passe et essayez � nouveau.<p />";
				$lang_string['inactive_account'] = "<h2>Oooups!</h2>Vous n'�tes pas connect�. Votre compte a �t� d�sactiv� par un administrateur.<p />";
				$lang_string['form_error'] = "Veuillez renseigner les champs Nom et Mot de passe";
				break;

			case 'logout':
				$lang_string['title'] = "D�connexion";
				$lang_string['error'] = "<h2>Au revoir!</h2>Vous �tes maintenant d�connect�. (Vous n'�tiez pas connect� de toutes mani�res!)<p />";
				$lang_string['error_no_cookie'] = "<h2>Au revoir!</h2>Vous �tes maintenant d�connect�. (Le cookie n'a pas �t� trouv�. Vous n'�tiez pas connect� de toutes mani�res!)<p />"; // New 0.5.0
				$lang_string['success'] = "<h2>Au revoir!</h2>Vous �tes maintenant d�connect�.<p />";
				break;

			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Error Response
				$lang_string['error'] = "<h2>Oouups!</h2>Information non sauvegard�e. Une erreur est survenue lors de la sauvegarde de votre entr�e.<br /><br />Le serveur a retourn�:<br />";
				break;

			case 'set_login':
				$lang_string['title'] = "Changer le nom d'utilisateur et le mot de passe";
				$lang_string['instructions'] = "Utiliser le formulaire ci-dessous pour changer votre nom d'utilisateur et/ou votre mot de passe. Entrez le nom d'utilisateur et le mot de passe que vous voulez utiliser.";
				$lang_string['username'] = "Nom d'utilisateur:";
				$lang_string['password'] = "Mot de passe:";
				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Succ�s!</h2>Votre nom d'utilisateur et/ou votre mot de passe sont activ�s. Joyeux blogging!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Oouups!</h2>Information non sauvegard�e. Une erreur est survenue lors de la sauvegarde de votre nom d'utilisateur et/ou de votre mot de passe.<br /><br />Le serveur a retourn�:<br />";
				$lang_string['form_error'] = "Veuillez renseigner les champs nom d'utilisateur et mot de passe.";
				$lang_string['explanation'] = "Dans les versions r�centes, la structure de mot de passe a chang�. Il n'y a plus de moyen de mettre � jour le mot de passe
					et/ou le nom d'utilisateur depuis le code du blog. Afin de changer votre mot de passe, effacez le fichier /config/password.php and assurez vous que install*.php
					existent sur le serveur local.  Une fois que cela est fait, actualisez cette page (ou d�connectez-vous).  Vous verrez alors le m�me script
					pour g�n�rer votre mot de passe que celui que vous avez eu lors de la cr�ation originale de votre blog.";  // New for 0.4.6
				break;

			case 'install00':
				$lang_string['title'] = "Bienvenue";
				$lang_string['instructions'] = "Merci d'avoir choisi Simple PHP Blog!";
				$lang_string['blog_choose_language'] = "Choisissez votre langue:";
				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";
				break;

			case 'install01':
				$lang_string['title'] = "Bienvenue";
				$lang_string['instructions'] = "
				Merci d'avoir choisi Simple PHP Blog!<br /><br />Simple PHP Blog est un syst�me de blog l�ger. Elle n�c�ssite au minimum PHP 4.1, ainsi que les droits d'�criture sur le serveur. Toutes les informations sont stock�es dans des fichiers texte, aucune base de donn�e n'est n�cessaire.<br /><br />
				Afin de commencer, Simple PHP Blog doit cr�er trois dossiers (<b>config</b>, <b>content</b>, et <b>images</b>) afin de stocker vos informations. Apr�s cela, vous cr�erez votre mot de passe pour pouvoir commencer � blogguer.<br /><br />
				<b>Cliquez ci-dessous pour commencer la configuration:</b>";
				$lang_string['begin'] = "[ Commencer la configuration ]";
				break;

			case 'install02':
				$lang_string['title'] = "Configuration";
				$lang_string['instructions'] = "Tentative de cr�ation des dossiers <b>config</b>, <b>content</b>, et <b>images</b>:";
				$lang_string['folder_exists'] = "Le dossier existe d�j&agrave;. Aucun changement effectu�...";
				$lang_string['folder_failed'] = "Oouups! Impossible de cr�er le dossier...";
				$lang_string['folder_success'] = "Succ�s! Le dossier a �t� cr��...";
				// Help
				$lang_string['help'] = "
				<h2>Oouups!</h2>
				Impossible de cr�er un ou plusieurs dossiers!<br /><br />Les raisons les plus probables sont:<br />
				<ol>
				<li>Les <b>droits d'�criture</b> ne sont pas configur� pour autoris� les acc�s en <b>Lecture/Ecriture</b>.</li>
				<li>Les <b>UID</b>'s (ID utilisateurs) de tous les fichiers et dossiers doivent correspondrent.</li>
				</ol>
				Suivez les instructions de d�pannage ci-dessous et cliquez sur <b>R�essayer</b>:<br />
				<ol>
				<li>Cr�ez manuellement les dossiers suivants: <b>config</b>, <b>content</b>, et <b>images</b>.</li>
				<li>Activez les <b>droits d'�criture</b> sur les dossiers: � l'aide de votre logiciel FTP, le propri�taire, l'utilisateur et tout le monde doivent avoir les acc�s <b>Lecture</b> et <b>Ecriture</b>. <i>(Vous pouvez avoir besoin de contacter votre h�bergeur pour changer cela...)</i></li>
				<li>Assurez-vous que les UID de tous vos fichiers et dossiers soient identiques. <i>(Vous pouvez avoir besoin de contacter votre h�bergeur pour changer cela...)</i></li>
				</ol>";
				$lang_string['try_again'] = "[ R�essayer ]";
				// Success
				$lang_string['success'] = "<h2>Succ�s!</h2>Les dossiers ont �t� cr��s avec succ�s!<p /><b>Cliquez ci-dessous pour continuer:</b>";
				$lang_string['continue'] = "[ Continuer ]";
				break;

			case 'install03':
				$lang_string['supported'] = "<b>Votre serveur web supporte les m�thodes de cryptage suivantes:</b>";
				$lang_string['standard'] = "Cryptage DES standard: ";
				$lang_string['extended'] = "Cryptage DES �tendu: ";
				$lang_string['MD5'] = "Cryptage MD5: ";
				$lang_string['blowfish'] = "Cryptage Blowfish: ";
				$lang_string['enabled'] = "Activ�";
				$lang_string['disabled'] = "D�sactiv�";
				$lang_string['using_standard'] = "<b>Utilisation du cryptage DES standard...</b>";
				$lang_string['using_extended'] = "<b>Utilisation du cryptage DES �tendu...</b>";
				$lang_string['using_MD5'] = "<b style=\"color: green;\">Utilisation du cryptage MD5...</b>";
				$lang_string['using_blowfish'] = "<b style=\"color: green;\">Utilisation du cryptage Blowfish...</b>";
				$lang_string['using_unknown'] = "<b>Utilisation d'un cryptage inconnu...</b>";
				$lang_string['salt_length'] = " <i>(Longueur secret = %string)</i><br />";
				$lang_string['title'] = "Cr�ation du nom d'utilisateur et du mot de passe";
				$lang_string['instructions'] = "Utilisez le formulaire ci-dessous pour cr�er votre nom d'utilisateur et votre mot de passe.";
				$lang_string['username'] = "Nom d'utilisateur:";
				$lang_string['password'] = "Mot de passe:";
				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";
				// Success
				$lang_string['success'] = "<h2>F�licitations!</h2>Vous �tes maintenant connect�. Cliquez ci-dessous pour vous rendre sur la page de configuration o� vous pourrez nommer votre blog. Joyeux blogging!<p />";
				$lang_string['btn_setup'] = "[ Configuration ]";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Oouups!</h2> Informations non sauvegard�es. Une erreur est survenue durant la sauvegarde de votre nom d'utilisateur et/ou de votre mot de passe.<br /><br />Le serveur a retourn�:<br />";
				$lang_string['form_error'] = "Veuillez renseigner les champs nom d'utilisateur et mot de passe.";
				break;

			case 'install04':
				$lang_string['title'] = "Cr�ation du fichier mot de passe";
				$lang_string['instructions'] = "Voici la partie astucieuse:<br />
				<ol>
				<li>Ouvrez un �diteur de texte. <i>(Note Pad, Word Pad, Word, BBEdit, Pico, VI, etc...)</i></li>
				<li>Cr�ez un nouveau document texte.</li>
				<li>Copiez et collez le code contenu dans le champs texte ci-dessous dans votre document.</li>
				<li>Sauvegardez votre fichier et appelez-le <b>password.php</b> <i>(Assurez vous de le sauvegarder au format <b>Texte</b>.)</i></li>
				<li>Lancez un logiciel FTP.</li>
				<li>Transf�rez votre nouveau <b>password.php</b> dans le dossier <b>config</b> sur votre site web.</li>
				<li>Supprimez <b>password.php</b> de votre disque dur.</li>
				</ol>
				";
				$lang_string['information'] = "<i>Note: Si vous voulez r�initialiser votre nom d'utilisateur et votre mot de passe (en cas d'oubli par exemple), supprimez <b>password.php</b> dans <b>config</b> sur le serveur web. A votre prochaine visite, le processus d'installation vous demandera de d�finir un nouveau mot de passe.</i>";
				$lang_string['code'] = "Code du fichier <b>password.php</b>:";
				$lang_string['continue'] = "[ Continuer ]";
				break;

			case 'install05':
			case 'install06':
				$lang_string['title'] = "Connexion";
				$lang_string['instructions'] = "Veuillez entrer votre nom d'utilisateur et votre mot de passe ci-dessous";
				$lang_string['username'] = "Nom d'utilisateur:";
				$lang_string['password'] = "Mot de passe:";
				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";
				// Success
				$lang_string['success'] = "<h2>F�licitations!</h2>Vous �tes maintenant connect�.<p />
				Cliquez ci-dessous pour vous rendre sur la <b>page de configuration</b>, o� vous pourrez personnaliser votre nouveau blog.<p />
				<i>PS: maintenant que vous avez compl�t� le processu d'installation, il est recommand� que vous supprimiez les fichiers <b>installXX.php</b> de votre site web (c�d. install00.php jusqu'� install06.php)</i><p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Oouups!</h2>Vous n'�tes pas connect�. Veuillez v�rifier que vous avez correctement saisi votre nom d'utilisateur et votre mot de passe et essayez de nouveau.<p />";
				$lang_string['form_error'] = "Veuillez renseigner les champs Nom d'utilisateur et Mot de passe.";
				// Success
				$lang_string['btn_setup'] = "[ Configuration ]";
				$lang_string['btn_try_again'] = "[ R�essayer ]";
				break;

			case 'setup':
				$lang_string['title'] = "Pr�f�rences";
				$lang_string['instructions'] = "Vous pouvez modifier le nom de votre blog ainsi que vos informations personnelles ci-dessous.";
				$lang_string['blog_title'] = "Nom du blog:";
				$lang_string['blog_header'] = "URL d'en-t�te graphique: images/blogheader.jpg (Laissez blanc pour l'image par d�faut du th�me).";
				$lang_string['blog_author'] = "Auteur:";
				$lang_string['blog_email'] = "Email: (des adresses s�par�es doivent �tre s�par�es par des virgules - vide d�sactive l'option Me contacter)"; // Updated 0.4.7
				$lang_string['blog_avatar'] = "Avatar URL: (Laissez vide pour aucun)."; // <-- New 0.4.7
				$lang_string['blog_footer'] = "Pied de Page:";
				$lang_string['blog_choose_language'] = "Choisissez votre langue:";
				$lang_string['blog_enable_comments'] = "Activer les commentaires";
				$lang_string['blog_comments_popup'] = "Ouvrir les commentaires dans des popups";
				$lang_string['blog_enable_start_category'] = "Utilise une cat�gorie sp�cifique pour la premi�re page des entr�es: "; // Now for 0.5.1
				$lang_string['blog_search_top'] = "Afficher la recherche dans les entr�es (au lieu de la barre de menu)"; // New for 0.5.0
				$lang_string['blog_enable_static_block'] = "Affiche un bloc particulier comme premi�re entr�e des entr�es du blog: "; // New for 0.5.0
				$lang_string['static_block_border'] = 'Affiche la bordure'; // New for 0.5.0
				$lang_string['static_block_noborder'] = 'Pas de bordure'; // New for 0.5.0
				$lang_string['blog_enable_voting'] = "Activer les votes utilisateurs";
				$lang_string['blog_enable_cache'] = "Activer le cache des entr�es (peut am�liorer la vitesse sur certains serveurs)"; // New for 0.4.6
				$lang_string['blog_enable_calendar'] = "Activer Calendrier"; // New for 0.4.6
				$lang_string['blog_enable_archives'] = "Activer le bloc Archives"; // New for 0.4.8
				$lang_string['blog_enable_counter'] = "Activer le compteur dans la barre"; // New for 0.4.8
				$lang_string['blog_counter_hours'] = "Nombre d'heures � attendre avant que les hits soient � nouveau compt�s (bas� sur chaque adresse IP):"; // New for 0.4.8
				$lang_string['blog_enable_login'] = "Activer le lien Connexion (Veillez � mettre \"login.php\" en favori avant...)"; // New for 0.4.8
				$lang_string['blog_enable_title'] = "Activer le titre du blog texte (D�cocher si le titre est dans l'ent�te graphique)"; // New for 0.4.6
				$lang_string['blog_enable_permalink'] = "Activer les Permaliens sur les entr�es du blog"; // New for 0.4.6
				$lang_string['blog_enable_capcha'] = "Activer Anti-Spam"; // New for 0.4.8
				$lang_string['blog_footer_counter'] = "Activer le compteur dans le pied de page"; // New for 0.4.8
				$lang_string['blog_enable_capcha_image'] = "Images Anti-Spam (n�cessite la librairie GD) / Champs texte Anti-Spam"; // New for 0.4.8
				$lang_string['blog_enable_stats'] = "Activer l'option Statistiques dans le menu"; // New for 0.4.7
				$lang_string['blog_enable_lastcomments'] = "Activer la liste des derniers commentaires"; // New for 0.4.7
				$lang_string['blog_enable_lastentries'] = "Activer la liste des deni�res entr�es"; // New for 0.4.7
				$lang_string['blog_email_notification'] = "Envoyez une notification par email lorsque de nouveaux commentaires sont post�s";
				$lang_string['blog_send_pings'] = "Activer l'envoi de &quot;pings&quot;";
				$lang_string['blog_ping_urls'] = "Entrez l'URL compl�te (ex. http://rpc.weblogs.com/RPC2) du service � &quot;pinguer&quot;.<br />(Vous pouvez entrer plus d'une adresse, s�par�s par des virgules.)";
				$lang_string['blog_trackback_about'] = "Les trackbacks sont une m�thode de notification entre blogs. Laissez un
					autre blog savoir que vous avec un lien vers lui en lui envoyant un ping trackback. D�couvrez qui s'est li� �
					votre blog en recevant des pings trackback.<br />
				   Vous pouvez soit entrer les URIs � pinguer manuellement, ou essayer de le faire automatiquement avec
				   l'auto-d�couverte.";
				$lang_string['blog_trackback_enabled'] = "Activer les trackbacks dans mon blog";
				$lang_string['blog_trackback_auto_discovery'] = "Activer l'auto-d�couverte de trackbacks lorsque qu'une soumission contient des URLs";
				$lang_string['blog_max_entries'] = "Nombre d'entr�es maximum � afficher:";
				$lang_string['blog_comment_tags'] = "Balises autoris�es dans les commentaires:";
				$lang_string['blog_gzip_about'] = "
					Depuis PHP 4.0.4, il est possible de lire et �crire des fichiers compress�s gzip (.gz), 
					permettant d'�conomiser de l'espace disque. Il peut �galement, de mani�re transparente, compress�e les pages qui sont envoy�es aux navigateurs
					supporte la compression gzip, permettant ainsi une �conomie de bande passante.<br />
					<br />
					Le support de Zlib dans PHP n'est pas activ� par d�faut. Si les cases � coch�es sont d�sactiv�es, c'est que votre
					installation de PHP n'inclus pas l'extension Zlib.";
				$lang_string['blog_enable_gzip_txt'] = "Activer la compression GZIP pour les fichiers de base de donn�es";
				$lang_string['blog_enable_gzip_output'] = "Actvier la compression GZIP pour la sortie HTTP";
				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Oouups!</h2>Param�tres non sauvegard�s. Une erreur est survenue lors de la sauvegarde.<br /><br />Le serveur a retourn�:<br />";
				$lang_string['success'] = "<h2>Preferences sauvegard�es!</h2>Les information ont �t� sauvegard�es avec succ�s."; // New for 0.4.8.1
				$lang_string['form_error'] = "Veuillez renseigner les champs Titre et Auteur.";
				$lang_string['label_entry_order'] = "Ordre des entr�es:";
				$lang_string['select_new_to_old'] = "Lister les plus r�centes en premier";
				$lang_string['select_old_to_new'] = "Lister les plus anciennes en premier";
				$lang_string['label_comment_order'] = "Ordre des commentaires:";
				$lang_string['cal_sunday'] = "Lundi";
				$lang_string['cal_monday'] = "Monday";
				$lang_string['label_calendar_start'] = "Premier jour de la semaine du calendrier";
				$lang_string['title_sidebar'] = "Barre lat�rale"; // New in 0.4.7
				$lang_string['title_comments'] = "Commentaires"; // New in 0.4.7
				$lang_string['title_trackback'] = "Trackbacks"; // New in 0.4.7
				$lang_string['title_compression'] = "Compression"; // New in 0.4.7
				$lang_string['title_entries'] = "Entr�es"; // New in 0.4.7
				$lang_string['title_general'] = "G�n�ral"; // New in 0.4.7
				$lang_string['title_language'] = "Langue"; // New in 0.4.7
				$lang_string['blog_comment_days_expiry'] = "Les commentaires sont permis pendant combien de jours? (0 = infini)"; // New in 0.4.8
				$lang_string['blog_comments_moderation'] = "Les commentaires du blog doivent �tre approuv�s par un utilisateur identifi� avant d'�tre rendus publics
				  (toujours visibles pour un utilisateur identifi�)"; // New in 0.5.0
				$lang_string['comment_moderation'] = "Options de mod�ration"; // New in 0.5.0
				break;
			case 'comment_moderation':
				$lang_string['title'] = "Commentaires non mod�r�s";
				$lang_string['instructions'] = "Voici une liste de tous les commentaires non disponibles pour les utilisateurs non identifi�s
					car ils n'ont pas �t� approuv�s par un mod�rateur.";
				$lang_string['header'] = "Liste de mod�ration";
				$lang_string['enteredby'] = "Entr� par: ";
				$lang_string['entrydate'] = "Entr� le: ";
				$lang_string['blogentrytitle'] = "Titre de l'entr� de blog: ";
				$lang_string['enteredcontent'] = "Contenu: ";
				$lang_string['totalunmodded'] = " �l�ment(s) au total attendant d'�tre approuv�s.";
				$lang_string['mod_approve'] = "[Approuver] ";
				$lang_string['mod_delete'] = "[Supprimer]";
				break;
			case 'moderation':
				$lang_string['title'] = "Pr�f�rences de mod�ration";
				$lang_string['instructions'] = "Vous pouvez modifier les listes d'auto-mod�ration ici.";
				$lang_string['submit_btn'] = "&nbsp;Enregistrer les param�tres de mod�ration&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Oouups!</h2>Informations non sauvegard�es. Une erreur est survenue lors de la sauvegarde.<br /><br />Le serveur a retourn�:<br />";
				$lang_string['success'] = "<h2>Preferences sauvegard�es!</h2>Les informations ont �t� sauvegard�es avec succ�s."; // New for 0.4.8.1
				$lang_string['banned_address_list_title'] = "<h2>Adresses IP interdites</h2>";
				$lang_string['banned_address_list'] = "Ci-dessous, la liste des adresses IP qui ont �t� interdites pour l'ajout de commentaires. Chaque IP est une sur une ligne s�par�e et doit �tre au format num�rique (pas de nom DNS). Lorsque vous �tes connect�, les IPs peuvent �tre interdites directement depuis la vue commentaires.";
				$lang_string['banned_word_list_title'] = "<h2>Mots interdits</h2>";
				$lang_string['banned_word_list'] = "Ci-dessous, la liste des mots qui ne sont pas autoris�s dans les URLs ou le texte. Chaque mot ou groupe de mot sont sur une ligne s�par�e. Les commentaires seront test�s pour chacune des lignes afin de v�rifier s'ils sont interdits.";
				break;
			case 'trackbacks':
				// Trackbacks
				$lang_string['title'] = "Trackbacks";
				$lang_string['header'] = "URL de trackback pour cette entr�e:";
				$lang_string['delete_btn'] = "effacer";
				// Error Response
				$lang_string['error_add'] = "Erreur lors de la sauvegarde du trackback";
				$lang_string['error_delete'] = "<h2>Oouups!</h2>Trackback non supprim�. Une erreur est survenue lors de la suppression.<br /><br />Le serveur a retourn�:<br />";
				$lang_string['success_delete'] = "<h2>Trackback supprim�!</h2>Le lien trackback a �t� supprim�."; // New for 0.4.8.1
				break;

			case 'options':
				$lang_string['title'] = "Options";
				$lang_string['instructions'] = "Utilisez ce formulaire pour personnaliser les formats de date et d'heure utilis�s sur votre blog. Vous pouvez choisir une horloge � 12 ou 24 heures. Un format de date long ou court. Et les champs d'<b>aper�u</b> se mettent automatiquement � jour afin de vous montrer comment votre format apparaitra.";
				// Long Date
				$lang_string['ldate_title'] = "Format date longue:";
				$lang_string['weekday'] = "Jour de la semaine";
				$lang_string['month'] = "Mois";
				$lang_string['day'] = "Jour";
				$lang_string['year'] = "Ann�e";
				$lang_string['none'] = "Aucun";
				// Short Date
				$lang_string['sdate_title'] = "Format date courte:";
				$lang_string['s_month'] = "Mois";
				$lang_string['s_mon'] = "MMM";
				$lang_string['s_day'] = "Jour";
				$lang_string['s_year'] = "Ann�e";
				$lang_string['zero_day'] = "Z�ros devant les jours";
				$lang_string['show_century'] = "Afficher les si�cles";
				// Time
				$lang_string['time_title'] = "Format de l'heure:";
				$lang_string['12hour'] = "Horloge � 12 heures";
				$lang_string['24hour'] = "Horloge � 24 heures";
				$lang_string['before_noon'] = "Avant Midi";
				$lang_string['after_noon'] = "Apr�s Midi";
				// Date
				$lang_string['date_title'] = "Format d'affichage de la date:";
				$lang_string['long_date'] = "Date longue";
				$lang_string['short_date'] = "Date courte";
				$lang_string['time'] = "Heure";
				// Menu
				$lang_string['menu_title'] = "Format d'affichage de la date dans menu:";
				$lang_string['long_date'] = "Date longue";
				$lang_string['short_date'] = "Date courte";
				// Used in multiple places
				$lang_string['zero_day'] = "Z�ros devant les jours";
				$lang_string['zero_month'] = "Z�ros devant les mois";
				$lang_string['zero_hour'] = "Z�ros devant les heures";
				$lang_string['separator'] = "S�parateur:";
				$lang_string['preview'] = "Aper�u:";
				$lang_string['server_offset'] = "D�calage serveur:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Oouups!</h2>Param�tres non sauvegard�s. Une erreur est survenue lors de la sauvegarde.<br /><br />Le serveur a retourn�:<br />";
				$lang_string['success'] = "<h2>Options sauvegard�es!</h2>Les informations ont �t� sauvegard�es avec succ�s."; // New for 0.4.8.1
				break;

			case 'themes':
				$lang_string['title'] = "Th�mes";
				$lang_string['instructions'] = "Utilisant le menu d�roulant pour choisir un th�me diff�rent.";
				// Themes
				$lang_string['choose_theme'] = "Th�mes:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Oouups!</h2>Param�tres non sauvegard�s. Une erreur est survenue lors de la sauvegarde.<br /><br />Le serveur a retourn�:<br />";
				$lang_string['success'] = "<h2>Th�me s�lectionn�!</h2>Les informations ont �t� sauvegard�es avec succ�s."; // New for 0.4.8.1
				break;

			case 'upload_img':
				$lang_string['title'] = "Envoi d'image";
				$lang_string['instructions'] = "Cliquez sur le bouton ci-dessous pour s�lectionner un fichier � envoyer.";
				$lang_string['select_file'] = "S�lectionner un fichier:";
				$lang_string['upload_btn'] = "Envoyer";
				// Error Response
				$lang_string['error'] = "<h2>Oouups!</h2>Impossible d'envoyer une image.<br /><br />Le serveur a retourn�:<br />";
				$lang_string['success'] = "<h2>Image transf�r�e!</h2>L'image a �t� sauvegard�e avec succ�s."; // New for 0.4.8.1
				break;

			case 'search':
				$lang_string['title'] = "R�sultats de la recherche";
				$lang_string['instructions'] = "R�sultats de la recherche pour <b>%string</b>:";
				$lang_string['not_found'] = "Aucun r�sultat";
				break;

			case 'contact':
				$lang_string['contact_capcha'] = "Anti-Spam: Entrez "; // 0.4.2
				$lang_string['title'] = "Me contacter";
				$lang_string['instructions'] = "Remplissez le formulaire:";
				$lang_string['form_error'] = "Veuillez renseigner les champs Sujet et Commentaire.";
				$lang_string['name'] = "Nom:";
				$lang_string['email'] = "Email:";
				$lang_string['subject'] = "Sujet:";
				$lang_string['comment'] = "Commentaire:";
				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";
				$lang_string['success'] = "<h2>Succ�s!</h2>Votre message a �t� envoy�.<p />";
				$lang_string['failure'] = "<h2>Erreur!</h2> Votre message n'a pas �t� envoy�. Tr�s probablement car vous n'avez pas saisi correctement le code anti-spam<p />";
				$lang_string['contactsent'] = "Contact envoy� depuis: ";  // New for 0.4.6
				$lang_string['IPAddress'] = "Adresse IP:";  // New for 0.4.6
				$lang_string['useragent'] = "Navigateur:";  // New for 0.4.6
				$lang_string['wrote'] = "<i>Le %s, %s a �crit:</i><br />\n<br />\n%s"; // New for 0.4.6.2
				break;

			case 'stats':
				$lang_string['title'] = "Statistiques";
				$lang_string['general'] = "G�n�ral";
				$lang_string['entry_info'] = "<b>%s</b> entr�es totalisant <b>%s</b> mots utilisant <b>%s</b> octets";
				$lang_string['comment_info'] = "<b>%s</b> commentaires totalisant <b>%s</b> mots utilisant <b>%s</b> octets";
				$lang_string['trackback_info'] = "<b>%s</b> trackbacks utilisant <b>%s</b> octets";
				$lang_string['static_info'] = "<b>%s</b> pages statiques totalisant <b>%s</b> mots utilisant <b>%s</b> octets";
				$lang_string['most_viewed_entries'] = "Les 10 entr�es les plus vues";
				$lang_string['most_commented_entries'] = "Les 10 entr�es les plus comment�es";
				$lang_string['most_trackbacked_entries'] = "Les 10 entr�es les plus trackback�es";
				$lang_string['vote_info'] = "<b>%s</b> votes utilisant <b>%s</b> octets"; // 0.4.1
				$lang_string["most_voted_entries"] = "Les 10 entr�es les plus vot�es"; // 0.4.1
				$lang_string["most_rated_entries"] = "Les 10 entr�es les plus �valu�es"; // 0.4.1
				break;

			case 'errorpage-nocookies':  // New for 0.4.6
				$lang_string["title"] = 'Erreur 403.8 - Acc�s � la page/fonction interdit';
				$lang_string["errorline1"] = "La page � laquelle vous essayer d'acc�der n�cessite l'utilisation de cookies.";
				$lang_string["errorline2"] = "Veuillez r�activer le support des cookies dans votre navigateur ou votre logiciel de protection et tentez votre requ�te � nouveau.";
				$lang_string["clientid"] = 'ID client: ';
				break;

			case 'errorpage':  // New for 0.4.6
				$lang_string["403.8"] = 'Erreur HTTP 403.8 - Acc�s � la page/fonction interdit';
				$lang_string["404"] = "Erreur HTTP 404 - La page/fonction n'existe pas";
				$lang_string["error_404"] = "La page ou la fonction demand�e n'existe pas.";
				$lang_string["error_javascript"] = "La page ou la fonction que vous avez demand� n�cessite Javascript pour fonctionner correctement.";
				$lang_string["error_emailnotsent"] = "Le message que vous avez essayer d'envoyer a �chou�.";
				$lang_string["error_emailnotsentcapcha"] = "Le message n'a pas �t� envoy� car le code anti-spam �tait incorrect.";
				$lang_string["clientid"] = 'Id client: ';
				break;

			case 'emoticons':  // New for 0.4.7
				$lang_string['title'] = "Administration des �motic�nes";
				$lang_string['instructions'] = "
					Cochez les �moticones que vous souhaitez utiliser. Ecrivez dans les champs les Balises que vous voulez
					remplacez par l'image. Plusieurs balises peuvent �tre utilis�es, s�parez-les simplement
					par des espaces.<br /><br />

					Par exemple:<br />
					:) :-) :SMILE: :HAPPY:<br /><br />

					<i>(Il est recommand� de choisir des balises de plus de 2 carat�res,
					afin d'�viter les remplacements non souhait�s.)</i>";
				$lang_string["upload_instructions"] = 'Envoi de nouvelles �motic�nes:';
				$lang_string["upload_success"] = 'Image envoy�e avec succ�s!';
				$lang_string["upload_error"] = 'Erreur! L\'image n\'a pas �t� transf�r�e.';
				$lang_string["upload_invalid"] = "Erreur! Fichier image invalide. L'image doit �tre au format png, jpg, ou gif.";
				$lang_string["save_success"] = 'Param�tres d\'�moticones sauvegard�s avec succ�s!';
				$lang_string["save_error"] = 'Erreur! Les param�tres d\'�moticones non pas �t� sauvegard�s.';
				$lang_string["save_button"] = 'Sauvegarder les �motic�nes';
				break;

			case 'archives': // New for 0.4.8
				$lang_string['title'] = "Archives";
				$lang_string['showall'] = "Voir toutes";
				break;

			case 'manage_users':
				$lang_string['title'] = "Gestion des utilisateurs r�dacteurs";
				$lang_string['instructions'] = "Ajouter, modifier ou supprimer des utilisateurs qui ne sont pas administrateurs, mais peuvent cr�er des entr�es de blog et/ou mod�rer les commentaires.";
				$lang_string['fulladminerror'] = "Vous devez �tre un v�ritable administrateur pour acc�der � cet �cran!";
				$lang_string['header_user'] = "Utilisateur: ";
				$lang_string['header_property'] = "Propri�t�";
				$lang_string['header_value'] = "Valeur";
				$lang_string['prop_username'] = "Identifiant:";
				$lang_string['prop_fullname'] = "Nom affich�:";
				$lang_string['prop_password'] = "Mot de passe:";
				$lang_string['prop_email'] = "Email:";
				$lang_string['prop_avatar'] = "URL avatar:";
				$lang_string['prop_state'] = "Actif?";
				$lang_string['prop_sec_Moderate'] = "Mod�re les commentaires?";
				$lang_string['prop_sec_Delete'] = "Supprime les entr�es de blog?";
				$lang_string['prop_sec_Edit'] = "Modifier n'importe quelle entr�e?";
				$lang_string['btn_SaveChanges'] = "Sauver changements";
				$lang_string['btn_CreateUser'] = "Cr�er utilisateur";
				$lang_string['btn_Cancel'] = "Annuler";  
				$lang_string['grid_header'] = "Liste des utilisateurs";
				$lang_string['grid_login'] = 'Identifiant';
				$lang_string['grid_email'] = 'Email';
				$lang_string['grid_avatar'] = 'Avatar';
				$lang_string['grid_state'] = 'Actif?';
				$lang_string['btn_modify'] = 'Modifier';
				$lang_string['btn_delete'] = 'Supprimer';
				$lang_string['create_user'] = 'Cr�er nouvel utilisateur';
				break;

			default:
				break;
		}
	}
?>
