<?php
	// Spanish Language Translation(s)
	// (c) 2004 Javier Guti�rrez Chamorro (Guti), guti <at> ya <dot> com (0.4.7)
	//  Retocado por Cristian Olate, cristian <dot> olate <at> gmail <dot> com (0.4.8)
    //  Retocado por Montse Trevi�o mtrevim <at> gmail <dot> com  (0.5.1) [2008]
	
	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;
		
		// Language: Spanish
		$lang_string['language'] = 'spanish';
		$lang_string[ 'locale' ] = array('es_ES', 'esp', 'spanish');
		$lang_string['rss_locale'] = 'es-ES'; // New 0.4.8
		
		// ISO Charset: ISO-8859-1
		$lang_string['html_charset'] = 'ISO-8859-1';
		$lang_string['php_charset'] = 'ISO-8859-1';
		setlocale( LC_TIME, $lang_string['locale'] );
		
		// Some Global Strings
		
		// Menu
		$lang_string['menu_links'] = "Enlaces";
		$lang_string['menu_home'] = "Principal";
		$lang_string['menu_contact'] = "Contactanos"; // <-- New 0.3.8
		$lang_string['menu_stats'] = "Estad�sticas"; // <-- New 0.3.7r
		$lang_string['menu_calendar'] = "Calendario"; // New for 0.4.8
		$lang_string['menu_archive'] = "Archivo";
		$lang_string['menu_viewarchives'] = "Ver Archivos"; // New in 0.4.7
		$lang_string['menu_menu'] = "Men�";
		$lang_string['menu_add'] = "Agregar Entrada";
		$lang_string['menu_add_static'] = "Agregar P�gina Est�tica";
		$lang_string['menu_upload'] = "Subir Imagen";
		$lang_string['menu_setup'] = "Configuraci�n";
		$lang_string['menu_categories'] = "Categor�as";
		$lang_string['menu_info'] = "Informaci�n"; // <-- New 0.3.7
		$lang_string['manage_users'] = "Administraci�n Usuarios";
    	$lang_string['manage_php_config'] = "Ver Configuraci�n PHP"; // New in 0.5.0.1
		$lang_string['menu_options'] = "Opciones";
		$lang_string['menu_themes'] = "Temas";
		$lang_string['menu_colors'] = "Colores";
		$lang_string['menu_change_login'] = "Cambiar usuario/contrase�a";
		$lang_string['menu_logout'] = "Salir";
		$lang_string['menu_login'] = "Entrar";
		$lang_string['menu_most_recent'] = "�ltimos Comentarios";
		$lang_string['menu_most_recent_entries'] = "�ltimos Art�culos";
		$lang_string['menu_most_recent_trackback'] = "�ltimos Trackbacks"; // <-- New 0.3.8
		$lang_string['menu_add_block'] = "Bloques";
		$lang_string['menu_emoticons'] = "Emoticones"; // New for 0.4.7
		$lang_string['menu_avatar'] = "Avatar"; // New for 0.4.7
		$lang_string['menu_moderation'] = "Moderaci�n Palabras/IP"; // New for 0.4.9
		$lang_string['menu_commentmoderation'] = "Comentarios sin moderar"; // New for 0.5.0
		$lang_string['menu_random_entry'] = "Entrada Aleatoria"; // New for 0.5.2
		$lang_string['menu_plugins'] = "Plugins"; // New for 0.5.2
		$lang_string['notice_moderator1'] = "Tienes ";
		$lang_string['notice_moderator2'] = " comentario(s) sin moderar.";
		$lang_string['notice_loggedin'] = "Actualmente est�s logueado.";
		
		// Counter
		$lang_string['counter_today'] = "Hoy:"; // New for 0.4.8
		$lang_string['counter_yesterday'] = "Ayer:"; // New for 0.4.8
		$lang_string['counter_totalsidebar'] = "Total:"; // New for 0.4.8
		$lang_string['counter_title'] = "Contador Total"; // New for 0.4.8

		// Other
		$lang_string['home'] = 'P�gina Principal';
		$lang_string['nav_next'] = 'Siguiente'; // <-- New 0.3.7
		$lang_string['nav_back'] = 'Anterior'; // <-- New 0.3.7
		$lang_string['nav_first'] = 'Primero'; // New in 0.5.0.1
    	$lang_string['nav_last'] = '�ltimo'; // New in 0.5.0.1
		$lang_string['search_title'] = 'B�squeda'; // <-- New 0.3.7
		$lang_string['search_go'] = 'Enviar'; // <-- New 0.3.7
		$lang_string['page_generated_in'] = 'P�gina generada en %s segundos'; // <-- New 0.3.7
		$lang_string['counter_total'] = 'Site Views: '; // New in 0.4.8
		$lang_string['read_more'] = 'Leer m�s...'; // New in 0.4.8
		$lang_String['randomentry'] = 'Entrada Aleatoria'; // New in 0.5.0.1
   		$lang_string['randomquote'] = 'Quote Aleatoria'; // New in 0.5.0.1
		
		// SB Functions
		$lang_string['sb_months'] = array( 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre' );
		$lang_string['sb_default_title'] = 'Sin t�tulo';
		$lang_string['sb_default_author'] = 'Sin autor';
		$lang_string['sb_default_footer'] = 'Pie de P�gina';
		$lang_string['sb_edit'] = 'editar';
		$lang_string['sb_delete'] = 'borrar';
		$lang_string['sb_permalink'] = 'enlace permanente'; // <-- New 0.3.8
		$lang_string['sb_trackback'] = 'trackbacks'; // <-- New 0.3.8
	    $lang_string['sb_postedby'] = 'Posteado por'; // 0.5.0
    	$lang_string['sb_admin'] = 'Administrador'; // 0.5.0
		$lang_string['sb_relatedlink'] = 'enlace relacionado'; // <-- New in 0.4.6
		$lang_string['sb_add_comment_btn'] = 'a�adir comentario';
		$lang_string['sb_read_entry_btn'] = 'ver entrada'; // 0.5.0
		$lang_string['sb_comment_btn_number_first'] = true;
		$lang_string['sb_comment_btn'] = 'comentario';
		$lang_string['sb_comment_view'] = 'ver'; // 0.5.0
		$lang_string['sb_comments_plural_btn_number_first'] = true;
		$lang_string['sb_comments_plural_btn'] = 'comentarios';
		$lang_string['sb_comment_view'] = 'visualizaciones'; // 0.5.0
		
		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '';
		$lang_string['sb_view_counter_post'] = ' visualizaci�n';
		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = '';
		$lang_string['sb_view_counter_plural_post'] = ' visualizaciones';
		$lang_string['sb_add_link_btn'] = 'A�adir Enlaces';
		$lang_string['sb_rate_entry_btn'] = 'Haga clic para valorar la entrada';
		
		// Entry Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
				$lang_string['label_subject'] = "T�tulo:";
				$lang_string['label_insert'] = "Extras (Negrita / Cursiva / URL / Imagen):";
				$lang_string['btn_bold'] = " N ";
				$lang_string['btn_italic'] = " I ";
				$lang_string['btn_image'] = "IMG";
				$lang_string['btn_url'] = "URL";
				$lang_string['btn_readmore'] = "leer m�s"; // 0.4.8
				$lang_string['view_images'] = "Ver im�genes cargadas";
				$lang_string['label_entry'] = "Texto:";
				$lang_string['btn_preview'] = "&nbsp;Previsualizar&nbsp;";
				$lang_string['btn_post'] = "&nbsp;Publicar&nbsp;";
				$lang_string['chk_visiblemenu'] = "Visible (Se muestra en el men�)";
				$lang_string['file_name'] = "Nombre de fichero est�tico: (sin espacios ni extensiones de fichero)"; // <-- New 0.3.8
				
				// Javascript Strings
				$lang_string['insert_styles'] = "Introduzca el texto";
				$lang_string['insert_image'] = "Introduzca la direcci�n URL para la imagen";
				$lang_string['insert_url1'] = "Introduzca el texto a ser mostrado con el enlace (opcional)";
				$lang_string['insert_url2'] = "Introduzca la direcci�n web completa para el enlace";
				$lang_string['insert_url3'] = "Abrir URL en una nueva ventana (Opcional):"; // <-- New 0.3.6
				$lang_string['form_error'] = "Por favor rellene los campos T�tulo y Texto.";
				
				// More Javascript Strings <-- New 0.3.6
				$lang_string['insert_image_optional'] = 'Opcional:';
				$lang_string['insert_image_width'] = 'Ancho (Opcional):';
				$lang_string['insert_image_height'] = 'Alto (Opcional):';
				$lang_string['insert_image_popup'] = 'Ver en una ventana emergente al hacer clic (Opcional):';
				$lang_string['insert_image_float'] = 'Flotar (Opcional):';
				
				$lang_string['day'] = 'D�a';
				$lang_string['month'] = 'Mes';
				$lang_string['year'] = 'A�o';
				$lang_string['hour'] = 'Hora';
				$lang_string['minute'] = 'Minutos';
				$lang_string['second'] = 'Segundos';
		}
		switch ($page) {
			case 'add':
				// Add Entry
				$lang_string['title'] = "A�adir Entrada";
				$lang_string['instructions'] = "Para colocar una entrada llene los campos que se encuentran debajo, puede previsualizar la entrada antes de publicarla.";
				$lang_string['title_ad'] = "Confirmar Pings de Trackback"; // <-- New 0.3.8
				$lang_string['instructions_ad'] = "�stos son los Auto-Discovered URIs sobre los que har� ping. Si no quiere hacer ping a un cierto URI, deschequee. Entonces pulse 'OK' para hacer ping sobre las URIs chequeadas o pulse 'Cancel' para no realizar ningun ping."; // <-- New 0.3.8
				$lang_string['label_tb_ping'] = "Trackback ping(s) a enviar (separados por comas)"; // <-- New 0.3.8
				$lang_string['label_tb_autodiscovery'] = "autodiscovery"; // <-- New 0.3.8
				$lang_string['label_relatedlink'] = "Enlace Relacionado"; // New for 0.4.6
				$lang_string['label_categories'] = "Lista de Categor�as";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Previsualizar / Editar entrada";
				$lang_string['instructions_preview'] = "As� es como se ve su entrada";
				$lang_string['title_update'] = "Actualizar entrada";
				$lang_string['instructions_update'] = "Puede cambiar su entrada utilizando el formulario que se encuentra debajo.";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;"; // <-- New 0.3.8
				$lang_string['cancel_btn'] = "&nbsp;Cancelar&nbsp;"; // <-- New 0.3.8
				// Error Response
				$lang_string['error'] = "<h2>�Ups!</h2>La entrada no pudo ser guardada. Se encontr� un problema mientras se almacenaba la entrada.<br /><br />Respuesta del servidor:<br />";
				$lang_string['success'] = "<h2>�Entrada guardada! </h2>La entrada ha sido guardada satisfactoriamente."; // 0.4.8.1
				break;
			case 'add_static':
				// Add Entry
				$lang_string['title'] = "A�adir P�gina Est�tica";
				$lang_string['instructions'] = "Rellena el formulario que se encuentra debajo para crear una p�gina est�tica. A diferencia de una entrada ordinaria a la bit�cora, las entradas est�ticas aparecen como enlaces en el men� de la derecha. Podr�an usarse para p�ginas que desees que esten disponibles siempre, tales como: Sobre m�, Cont�ctenos, Agenda, etc. Presione 'Previsualizar' para mirar como lucir� la p�gina, o presione 'Publicar' para guardar la p�gina";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Previsualizar / Editar P�gina Est�tica";
				$lang_string['instructions_preview'] = "As� es como su p�gina est�tica lucir�. Si esta usando estilos de texto o ha incluido im�genes, recuerde 'cerrar' todas las 'etiquetas'.";
				$lang_string['title_update'] = "Actualizar P�gina Est�tica";
				$lang_string['instructions_update'] = "Puedes cambiar la entrada usando el formulario que se encuentra debajo. Presiona 'Previsualizar' o 'Publicar' cuando estes listo.";
				$lang_string['form_error'] = "Por favor rellene los campos T�tulo, Texto y Nombre.";	
				// Error Response
				$lang_string['error'] = "<h2>�Ups!</h2>La entrada no pudo ser guardada. Se encontr� un problema mientras se almacenaba la entrada.<br /><br />Respuesta del servidor:<br />";
				break;
			case 'add_block':
				// Add / Manage Blocks
				$lang_string['title'] = "Agregar / Administrar Bloques";
				$lang_string['instructions'] = "Agregar Bloque Personalizado para mostrar en el Men� Lateral";
				$lang_string['up'] = "Arriba";
				$lang_string['down'] = "Abajo";
				$lang_string['edit'] = "Editar";
				$lang_string['delete'] = "Borrar";
				$lang_string['block_name'] = "Nombre del Bloque:";
				$lang_string['block_content'] = "Contenido del Bloque:";   
				$lang_string['instructions_edit'] = "Est�s editando un Bloque:";
				$lang_string['instructions_modify'] = "Haga clic debajo en <b>Editar</b> para modificar el Bloque:";
				$lang_string['submit_btn_edit'] = "Editar Bloque";
				$lang_string['submit_btn_add'] = "Agregar Bloque";
				$lang_string['form_error'] = "Por favor rellene el campo Nombre."; 
				break;
			case 'add_link':
				// Add / Manage Links
				$lang_string['static_pages'] = "P�ginas Est�ticas:";
				$lang_string['title'] = "Agregar / Administrar Enlaces";
				$lang_string['instructions'] = "Agregar enlaces a otros sitios web. Presione los botones Arriba y Abajo para cambiar el orden de los enlaces.";
				$lang_string['up'] = "Arriba";
				$lang_string['down'] = "Abajo";
				$lang_string['edit'] = "Editar";
				$lang_string['delete'] = "Borrar";
				$lang_string['link_name'] = "Nombre del Enlace:";
				$lang_string['link_url'] = "URL (Direcci�n Web):";
				$lang_string['instructions_edit'] = "Est�s editando un enlace:";
				$lang_string['instructions_modify'] = "Haga clic debajo en <b>Editar</b> para modificar el enlace:"; // <-- New
				$lang_string['submit_btn_edit'] = "Editar enlace";
				$lang_string['submit_btn_add'] = "Agregar enlace";
				$lang_string['form_error'] = "Por favor rellene los campos Nombre y URL.";
				break;
			case 'categories':
				// Add / Manage Links
				$lang_string['title'] = "Agregar / Administrar Categor�as";
				$lang_string['instructions'] = "Rellena el formulario que se encuentra debajo para crear una categor�a. Cada categor�a debe estar en este formato 'nombre de la categoria (n�mero id)'. Divide los elementos con espacios para crear categor�as.<br /><br /><b>Ejemplo:</b><br />General (1)<br />Noticias (3)<br />&nbsp;&nbsp;Anuncios (6)<br />&nbsp;&nbsp;Eventos (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;Misc (7)<br />Tecnologia (2)<br />";
				$lang_string['error'] = "Error";
				$lang_string['current_categories'] = "Categorias Actuales";
				$lang_string['no_categories_found'] = "No se encontraron Categorias";
				$lang_string['category_list'] = "Lista de Categorias:";
				$lang_string['validate'] = "Validar";
				$lang_string['submit_btn'] = "&nbsp;Aceptar&nbsp;";
				break;
			case 'colors':
				// Change Colors
				$lang_string['title'] = "Cambiar colores";
				$lang_string['instructions'] = "Puede cambiar los colores del texto y del fondo de la entrada.";
				$lang_string['bg_color'] = "Fondo de p�gina";
				$lang_string['main_bg_color'] = "Fondo de la p�gina principal";
				$lang_string['border_color'] = "Borde de p�gina";
				$lang_string['inner_border_color'] = "Borde Interior";
				$lang_string['header_bg_color'] = "Fondo del encabezado";
				$lang_string['header_txt_color'] = "Texto del encabezado";
				$lang_string['menu_bg_color'] = "Fondo del men�";
				$lang_string['footer_bg_color'] = "Fondo del pie de p�gina";
				$lang_string['txt_color'] = "Texto principal";
				$lang_string['headline_txt_color'] = "Texto del encabezado";
				$lang_string['date_txt_color'] = "Texto de la fecha";
				$lang_string['footer_txt_color'] = "Texto del pie de p�gina";
				$lang_string['link_reg_color'] = "Enlace normal";
				$lang_string['link_hi_color'] = "Enlace resaltado";
				$lang_string['link_down_color'] = "Enlace visitado";
				// More Colors
				$lang_string['entry_bg'] = "Fondo de la entrada";
				$lang_string['entry_title_bg'] = "Fondo del t�tulo de la entrada";
				$lang_string['entry_border'] = "Borde de la entrada";
				$lang_string['entry_title_text'] = "Texto del t�tulo de la entrada";
				$lang_string['entry_text'] = "Texto de la entrada";
				$lang_string['static_bg'] = "Fondo P�g. Est�tica"; // 0.5.0
				$lang_string['static_title_bg'] = "Fondo T�tulo P�g. Est�tica"; // 0.5.0
				$lang_string['static_border'] = "Borde P�g. Est�tica"; // 0.5.0
				$lang_string['static_title_text'] = "Texto T�tulo P�g. Est�tica"; // 0.5.0
				$lang_string['static_text'] = "Texto P�g. Est�tica"; // 0.5.0
		
				$lang_string['comment_bg'] = "Fondo Comentarios"; // 0.5.0
				$lang_string['comment_title_bg'] = "Fondo T�tulo Comentarios"; // 0.5.0
				$lang_string['comment_border'] = "Borde Comentario"; // 0.5.0
				$lang_string['comment_title_text'] = "Texto T�tulo Comentario"; // 0.5.0
				$lang_string['comment_text'] = "Texto Comentario"; // 0.5.0
				$lang_string['menu_bg'] = "Fondo del men�";
				$lang_string['menu_title_bg'] = "Fondo del t�tulo del men�";
				$lang_string['menu_border'] = "Borde del men�";
				$lang_string['menu_title_text'] = "Texto del t�tulo del men�";
				$lang_string['menu_text'] = "Texto del men�";
				$lang_string['menu_link_reg_color'] = "Enlace normal en el men�";
				$lang_string['menu_link_hi_color'] = "Enlace resaltado en el men�";
				$lang_string['menu_link_down_color'] = "Enlace visitado en el men�";
				// Submit
				$lang_string['color_preset'] = "Esquemas de Color:";
				$lang_string['scheme_name'] = "Introduzca un nombre para el Esquema de Color Personalizado:";
				$lang_string['scheme_file'] = "Introduzca el nombre del fichero del Esquema: (sin espacio ni extensiones)";
				$lang_string['form_error'] = "Por favor, introduzca un nombre para su Esquema de Color Personalizado.";
				$lang_string['save_btn'] = "&nbsp;Guardar&nbsp;";
				$lang_string['submit_btn'] = "&nbsp;Aceptar&nbsp;";
				$lang_string['theme_doesnt_allow_colors'] = 'El tema seleccionado no permite un Esquema de Color Personalizado.';
				// Error Response
				$lang_string['error'] = "<h2>�Ups!</h2>La informaci�n no pudo ser guardada. Se encontr� un problema mientras se almacenaba su informaci�n.<br /><br />Respuesta del servidor:<br />";
        		$lang_string['success'] = "<h2>�Colores Guardados!</h2>La informaci�n se ha guardado correctamente."; // New for 0.4.8.1				
				break;
			case 'comments':
				// Comments
				$lang_string['name'] = "Nombre:"; //New in 0.4.6.2
				$lang_string['email'] = "Email:"; //New in 0.4.6.2
				$lang_string['homepage'] = "P&aacute;gina:"; //New in 0.4.6.2
				$lang_string['comment'] = "Comentario:"; //New in 0.4.6.2
				$lang_string['title'] = "Comentarios";
				$lang_string['header'] = "Agregar comentario";
				$lang_string['instructions'] = "Rellene los campos de abajo para dejar su comentario.";
				$lang_string['comment_name'] = "Nombre:";
				$lang_string['comment_email'] = "Email:"; // 0.3.8
				$lang_string['commentposted'] = "Nuevo comentario publicado en: ";  // New for 0.4.6.2
				$lang_string['IPAddress'] = "Direcci&oacute;n IP:";  // New for 0.4.6.2
				$lang_string['useragent'] = "Agente Usuario:";  // New for 0.4.6.2
				$lang_string['comment_url'] = "Web:"; // 0.3.8
				$lang_string['comment_capcha'] = "Anti-Spam: Introduzca "; // 0.4.2
				$lang_string['form_error'] = "Por favor rellene los campos Nombre, Comentario y el campo Anti-Spam."; //0.4.2
				$lang_string['comment_remember'] = "Recordar mi informaci�n personal:"; // 0.3.8
				$lang_string['comment_text'] = "Comentario:";
				$lang_string['post_btn'] = "&nbsp;Publicar comentario&nbsp;";
				$lang_string['delete_btn'] = "Borrar";
				$lang_string['ban_btn'] = "ban ip"; // New for 0.4.8
				$lang_string['expired_comment1'] = "Lo sentimos. No se permiten nuevos comentarios despu�s de "; // New for 0.4.8
				$lang_string['expired_comment2'] = " d�as."; // New for 0.4.8
				
				$lang_string['blacklisted'] = "Lo sentimos, su direcci�n IP ha sido baneada. No se permiten comentarios."; // New for 0.4.8
				$lang_string['wrote'] = "<i>El %s, %s escribi&oacute;:</i><br />\n<br />\n%s"; // New for 0.4.6.2
				$lang_string['bannedword'] = "Tu comentario, url, nombre o e-mail contienen palabra(s) que han sido prohibidas por el administrador. Tu comentario NO se ha publicado."; // New for 0.4.8
				$lang_string['nocomments'] = "Los comentarios no est�n disponibles para esta entrada."; // New for 0.4.9
				$lang_string['email_moderator'] = "Los comentarios est�n actualmente moderados. Este comentario necesita ser aprovado antes de ser visto por el p�blico."; // New for 0.5.0
				$lang_string['user_notice_mod'] = "En este blog est� activada la moderaci�n. Tu comentario requiere que los administradores lo aprueben antes de hacerse visible."; // new for 0.5.0

        $lang_string['return_to_comments'] = 'Volver a Comentarios';
				
				// Error Response
				$lang_string['error_add'] = "<h2>Whoops!</h2>Comentario no grabado. Ocurri� un problema mientras se guardaba su comentario.<br /><br />Respuesta del servidor:<br />";
				$lang_string['error_delete'] = "<h2>Whoops!</h2>Comentario no borrado. Ocurri� un problema mientras se borraba su comentario.<br /><br />Respuesta del servidor:<br />";
				$lang_string['error_ban'] = "<h2>Whoops!</h2>La IP no se a�adi� a la lista de ip prohibidas.<br /><br />Respuesta del servidor:<br />";
				$lang_string['success_add'] = "<h2>�Comentario a�adido!</h2>Tu comentario se ha almacenado correctamente."; // New for 0.4.8.1
				$lang_string['success_delete'] = "<h2>�Comentario Eliminado!</h2> El Comentario ha sido borrado."; // New for 0.4.8.1
				$lang_string['success_ban1'] = "<h2>IP Prohibida!";
				$lang_string['success_ban2'] = "</h2>Para eliminar esta prohibici�n en el futuro, utiliza la opci�n de Moderaci�n en el men� de Preferencias."; // New for 0.4.8.1
				$lang_string['form_error'] = "Por favor, completa los campos de Nombre, Comentario y Anti-Spam.";
				$lang_string['error_noip'] = "No se ha proporcionado ninguna IP para la solicitud de Blacklist.";
		
				$lang_string[ 'error_comments_disabled' ] = '<h2>�Error!</h2>Hey! Los comentarios est�n deshabilitados en este blog. �Eres un spambot?'; // New 0.5.0
				$lang_string[ 'error_no_match' ] = "<h2>�Error!</h2>Tu direcci�n IP no coincide con ninguna direcci�n IP publicada. �Eres un spambot?"; // New 0.5.0
				$lang_string[ 'error_fields_missing' ] = '<h2>�Error!</h2>Faltan los siguientes campos: '; // New 0.5.0
				$lang_string[ 'error_spambot' ] = '<h2>�Error!</h2>Faltan datos del verificador anti-spam. �Eres un spambot?'; // New 0.5.0
				$lang_string[ 'error_capcha' ] = '<h2>�Error!</h2>El verificador anti-spam introducido es incorrecto.'; // New 0.5.0
				$lang_string[ 'error_bad_data' ] = '<h2>�Error!</h2>Los datos publicados no son v�lidos. �Eres un hacker?'; // New 0.5.0
				$lang_string[ 'error_entry_missing' ] = '<h2>�Error!</h2>Est�s intentado comentar uan entrada que no existe'; // New 0.5.0
				$lang_string[ 'error_empty_text' ] = '<h2>�Error!</h2>No has introducido ning�n comentario o tu nombre.'; // New 0.5.0
				break;
			case 'delete':
				$lang_string['title'] = "Borrar entrada";
				$lang_string['instructions'] = "Est� a punto de borrar una entrada, aseg�rese de querer borrarla porque no hay forma de deshacer el cambio...";
				$lang_string['ok_btn'] = "&nbsp;Borrar&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Cancelar&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>�Ups!</h2>No se pudo borrar la entrada.<br /><br />Respuesta del servidor:<br />";
				$lang_string['success'] = "<h2>�Entada eliminada!</h2>La entrada ha sido eliminada."; // New for 0.4.8.1
				break;
			case 'delete_static':
				$lang_string['title'] = "Borrar P�gina Est�tica";
				$lang_string['instructions'] = "Est� a punto de borrar una p�gina est�tica, aseg�rese de querer borrarla porque no hay forma de deshacer el cambio...";
				$lang_string['ok_btn'] = "&nbsp;Ok&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Cancelar&nbsp;";
				$lang_string['error'] = "<h2>�Ups!</h2>No se pudo borrar la entrada.<br /><br />Respuesta del servidor:<br />";
				 $lang_string['success'] = "<h2>�P�gina Est�tica Eliminada!</h2>La p�gina est�tica fue eliminada."; // New for 0.4.8.1
				break;
			case 'image_list':
				$lang_string['title'] = "Lista de im�genes";
				$lang_string['instructions'] = "Haga clic en los enlaces que estan debajo para ver la imagen.<br><br>Para agregar una imagen a su entrada:<br>1) Haga clic derecho en un enlace y seleccione 'Copiar en el portapapeles'.<br>2) Regrese a la p�gina de agregar o editar entrada.<br>3) Haga clic en el bot�n Imagen y pegue el enlace en la ventana.";
				break;
			case 'info': // New 0.3.7
				$lang_string['title'] = "Informaci�n de Meta-datos";
				$lang_string['instructions'] = "Esta informaci�n se usa para los &quot;meta-datos&quot;, que ayudan a los buscadores a indexar su web. Tambi�n se usan para generar los feeds RSS.";
				$lang_string['info_keywords'] = "Palabras clave: (Lista de palabras clave separadas por comas.)";
				$lang_string['info_description'] = "Descripci�n: (Un resumen o texto libre sobre tu sitio.)";
				$lang_string['info_copyright'] = "Derechos: (Informaci�n de copyright o un enlace a la p�gina que la contiene.)";
				$lang_string['tracking_code'] = "Codigo de Tracking Externo: (c�digo HTML que necesita ejecutarse en la p�gina principal (en los tags de la cabecera para m�s seguridad) solo por cada usuario que accede a la p�gina. Por ejemplo Google Analytics)";
				$lang_string['submit_btn'] = "&nbsp;Guardar&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>�Ups!</h2>La informaci�n no pudo ser guardada. Se encontr� un problema mientras se almacenaba su informaci�n.<br /><br />Respuesta del servidor:<br />";
				$lang_string['success'] = "<h2>�Informaci�n Guardada!</h2>La informaci�n fue guardada satisfactopriamente."; // New for 0.4.8.1
				$lang_string['form_error'] = "Por favor rellene los campos T�tulo y Autor.";
				break;
			case 'index':
				// Index
				break;
			case 'static':
				// Index
				break;
			case 'rating': // New 0.3.8
				$lang_string['error'] = "<h2>�Ups!</h2>La informaci�n no pudo ser guardada. Se encontr� un problema mientras se almacenaba su informaci�n.<br /><br />Respuesta del servidor:<br />";
				$lang_string['success'] = "<h2>�Votaci�n guardada!</h2>Tu puntuaci�n ha sido almacenada satisfactoriamente."; // New for 0.4.8.1
				break;			
			case 'login':
				$lang_string['upgrade'] = "<h2>Actualizaci�n</h2>"; // New 0.3.8
				$lang_string['upgrade_count'] = "%n ficheros de comentarios necesitan ser actualizados:"; // New 0.3.8
				$lang_string['upgrade_url'] = "Actualizar Comentarios"; // New 0.3.8
				$lang_string['title'] = "Ingreso";
				$lang_string['instructions'] = "Introduzca su nombre de usuario y contrase�a";
				$lang_string['username'] = "Usuario:";
				$lang_string['password'] = "Contrase�a";
				$lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
				// Success
				$lang_string['success'] = "<h2>�Bienvenido!</h2>�Se ha conectado con �xito!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>�Ups!</h2>No puede ingresar. Verifique su nombre de usuario y contrase�a e int�ntelo de nuevo.<p />";
				$lang_string['inactive_account'] = "<h2>�Ups!</h2>No has podido ingresar. Tu cuenta ha sido deshabilitada por el adminisrador por alguna raz�n.<p />";
				$lang_string['form_error'] = "Por favor rellene los campos Usuario y Contrase�a."; // <-- Need Translation
				break;
			case 'logout':
				$lang_string['title'] = "Salir";
				$lang_string['instructions'] = "<h2>�Ups!</h2>Error intentando salir. No se pudo borrar la cookie. �Por que sigue conectado?<p />";
				$lang_string['error'] = "<h2>�Adi�s!</h2>Ya no est�s dentro. (Aunque tampoco hab�as entrado!)<p />";
				$lang_string['error_no_cookie'] = "<h2>�Adi�s!</h2>Ya no est�s dentro. (Aunque tampoco hab�as entrado!)<p />"; // New 0.5.0
				$lang_string['success'] = "<h2>�Adi�s!</h2>Ya no est�s dentro.<p />(Redireccionando a Inicio en 5 segundos.)<p />";
				break;
			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Error Response
				$lang_string['error'] = "<h2>�Ups!</h2>La informaci�n no pudo ser guardada. Se encontr� un problema mientras se almacenaba su informaci�n.<br /><br />Respuesta del servidor:<br />";
				break;
			case 'set_login':
				$lang_string['title'] = "Cambiar Usuario y Contrase�a";
				$lang_string['instructions'] = "Use el formulario inferior para cambiar su nombre de usuario y contrase�a. Inserta el nombre de usuario y la contrase�a que quieras usar.";
				$lang_string['username'] = "Usuario:";
				$lang_string['password'] = "Contrase�a:";
				$lang_string['submit_btn'] = "&nbsp;Guardar&nbsp;";
				// Success
				$lang_string['success'] = "<h2>�Listo!</h2>Su nuevo nombre de usuario y/o contrase�a esta activo desde ahora.<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>�Ups!</h2>Informaci�n no guardada. Hubo un error mientras se guardaba su nombre de usuario y contrase�a .<br /><br />Respuesta del servidor:<br />";
				$lang_string['form_error'] = "Por favor complete los campos Usuario y Contrase�a.";
				$lang_string['explanation'] = "En las versiones recientes, la estructura de la contrase�a ha cambiado. Ya no hay manera de actualizar contrase�as
				    y/o logins desde el c�digo del blog. Para cambiar su contrase�a, elimine el archivo /config/password.php y aseg�rese de que existen los ficheros
					install*.php en el servidor local. Una vez hecho esto, refresque la p�gina (o descon�ctese). Se le presentar� el mismo formulario para crear la
					contrase�a que vi� cuando cre� por primera vez el blog.";  // New for 0.4.6
				break;
			case 'install00':
				$lang_string['title'] = "Bienvenido";
				$lang_string['instructions'] = "�Gracias por elegir Simple PHP Blog!";
				$lang_string['blog_choose_language'] = "Selecci�n de Idioma:";
				$lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
				break;
			case 'install01':
				$lang_string['title'] = "Bienvenido";
				$lang_string['instructions'] = "�Gracias por elegir Simple PHP Blog!<br /><br />Simple PHP Blog es un sistema de blogging de peso ligero. Requiere PHP is 4.1 o superior y permisos de escritura en el servidor. Toda la informaci�n es guardada en archivos de texto plano por lo que no requiere una base de datos para funcionar.<br /><br />
				Para comenzar, Simple PHP Blog necesita crear tres carpetas ('config', 'content', e 'images') en la cuales guardar� su informaci�n.<br /><br />
				<b>Haga clic debajo para comenzar la instalaci�n:</b>";
				$lang_string['begin'] = "[ Comenzar Instalaci�n ]";
				break;
			case 'install02':
				$lang_string['title'] = "Instalaci�n";
				$lang_string['instructions'] = "Intentando crear las carpetas 'config', 'content', e 'images':";
				$lang_string['folder_exists'] = "�Listo! Las carpetas ya exist�an. No se hicieron cambios...";
				$lang_string['folder_failed'] = "�Ups! No se pudieron crear las carpetas...";
				$lang_string['folder_success'] = "�Listo! Carpetas creadas...";
				// Help
				$lang_string['help'] = "
				<h2>�Ups!</h2>�No se pudieron crear una o m�s de las carpetas! Esto sucede usualmente debido a:<br>
				<i>1) <b>Permisos de escritura</b> no estan configurados para permitir acceso de  <b>Escritura/Lectura</b>.</i><br>
				<i>2) Las <b>UID</b>'s (user ID's) de todos los archivos y carpetas deben corresponder.</i><p />
				Siga las instrucciones siguientes para resolver el problema y luego intente de nuevo:<p />				
				1) Cree manualmente las siguientes carpetas: <b>config</b>, <b>content</b>, e <b>images</b>.<p />
				2) Habilite <b>Permisos de escritura</b> a las carpetas. En su cliente FTP; Owner, User, y World deben tener acceso de <b>Read</b> y <b>Write</b>. <i>(Podr�a necesitar contactar a su proveedor de servicios para cambiar esto...)</i><p />
				3) Aseg�rese de que las UID's de todos sus archivos y carpetas son los mismos. <i>(Podr�a necesitar contactar a su proveedor de servicios para cambiar esto...)</i>";
				$lang_string['try_again'] = "[ Reintentar ]";
				// Success
				$lang_string['success'] = "<h2>�Listo!</h2>�Carpetas creadas exitosamente!<p /><b>Haga clic debajo para continuar:</b>";
				$lang_string['continue'] = "[ Continuar ]";
				break;
			case 'install03':
				$lang_string['supported'] = "<b>Su servidor web soporta los siguientes esquemas de cifrado:</b>";
				$lang_string['standard'] = "Standard DES Encryption: ";
				$lang_string['extended'] = "Extended DES Encryption: ";
				$lang_string['MD5'] = "MD5 Encryption: ";
				$lang_string['blowfish'] = "Blowfish Encryption: ";
				$lang_string['enabled'] = "habilitado";
				$lang_string['disabled'] = "deshabilitado";
				$lang_string['using_standard'] = "<b>Usando Standard DES Encryption...</b>";
				$lang_string['using_extended'] = "<b>Usando Extended DES Encryption...</b>";
				$lang_string['using_MD5'] = "<b style=\"color: green;\">Usando MD5 Encryption...</b>";
				$lang_string['using_blowfish'] = "<b style=\"color: green;\">Using Blowfish Encryption...</b>";
				$lang_string['using_unknown'] = "<b>Usando Unknown Encryption...</b>";
				$lang_string['salt_length'] = " <i>(Salt Length = %string)</i><br />";
				$lang_string['title'] = "Crear Usuario y Contrase�a";
				$lang_string['instructions'] = "Use el formulario inferior para crear un Usuario y una Contrase�a.";
				$lang_string['username'] = "Usuario:";
				$lang_string['password'] = "Contrase�a:";
				$lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
				// Success
				$lang_string['success'] = "<h2>�Felicitaciones!</h2>Esta ahora conectado. Haga clic debajo para visitar la p�gina de configuraci�n y cambiar las opciones de su bit�cora.<p />";
				$lang_string['btn_setup'] = "[ Configuraci�n ]";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>�Ups!</h2>Informaci�n no guardada. Hubo un error mientras se guardaba su nombre de usuario y contrase�a .<br /><br />Respuesta del servidor:<br />";
				$lang_string['form_error'] = "Por favor, rellene los campos Usuario y Contrase�a";
				break;
			case 'install04':
				$lang_string['title'] = "Crear el archivo para la contrase�a";
				$lang_string['instructions'] = "He aqu� el truco:<br />
				<ol>
				<li>Abra un editor de texto. <i>(Note Pad, Word Pad, Word, BBEdit, Pico, VI, etc...)</i></li>
				<li>Cree un nuevo documento de texto.</li>
				<li>Copie y pegue el c�digo del cuadro inferior en su documento.</li>
				<li>Guarde su archivo y ll�melo <b>password.php</b> <i>(Aseg�rese de guardarlo en formato de <b>texto</b> o <b>texto plano</b>.)</i></li>
				<li>Abra una aplicaci�n FTP.</li>
				<li>Suba el archivo <b>password.php</b> dentro de la carpeta <b>config</b> de su sitio web.</li>
				<li>Borre el archivo <b>password.php</b> de su disco duro.</li>
				</ol>
				";
				$lang_string['information'] = "<i>Nota: Si desea borar su nombre de usuario y contrase�a (probablemente porque la olvid�), elimine el archivo <b>password.php</b> en la carpeta <b>config</b> de su sitio web. La pr�xima vez que visite su sitio, lo llevar� a tav�s de este proceso de instalaci�n nuevamente...</i>";
				$lang_string['code'] = "C�digo para el archivo <b>password.php</b>:";
				$lang_string['continue'] = "[ Continuar ]";
				break;
			case 'install05':
			case 'install06':
				$lang_string['title'] = "Ingreso";
				$lang_string['instructions'] = "Ingrese su nombre de usuario y contrase�a";
				$lang_string['username'] = "Nombre de Usuario:";
				$lang_string['password'] = "Contrase�a";
				$lang_string['submit_btn'] = "&nbsp;Aceptar&nbsp;";
				// Success
				$lang_string['success'] = "<h2>�Felicitaciones!</h2>Usted se ha conectado.<p />
				Haga click abajo para visitar la p�gina de <b>Configuraci�n</b> , desde donde podr� personalizar su nuevo blog.<p />
				<i>Nota: Ahora que ha completado el proceso de instalaci�n, se le recomienda borrar los archivos <b>installXX.php</b> desde su sitio web. (i.e. install00.php hasta install06.php)</i><p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Ups!</h2>No est� conectado. Verifique que ha escrito bien su Nombre de Usuario y Contrase�a e intente nuevamente.<p />";
				$lang_string['form_error'] = "Complete los campos de Nombre de Usuario y Contrase�a.";
				// Success
				$lang_string['btn_setup'] = "[ Configuraci�n ]";
				$lang_string['btn_try_again'] = "[ Intente de nuevo ]";
				break;
			case 'setup':
				$lang_string['title'] = "Configuraci�n";
				$lang_string['instructions'] = "Puede cambiar el nombre de su bit�cora y su informaci�n personal debajo.";
				$lang_string['blog_title'] = "Nombre de la Bit�cora:";
				 $lang_string['blog_header'] = "URL del Gr�fico de la Cabecera: images/blogheader.jpg (Dejar en blanco para utilizar el gr�fico por defecto del tema).";
				$lang_string['blog_author'] = "Autor:";
				$lang_string['blog_email'] = "Correo Electr�nico: (separar las direcciones de correo electr�nico por una , coma - en blanco deshabilita la opci�n de Contactanos"; // <-- Updated 0.4.7
				$lang_string['blog_avatar'] = "URL del avatar: (D�jalo en blanco para ninguno)."; // <-- New 0.4.7
				$lang_string['blog_footer'] = "Pie de p�gina:";
				$lang_string['blog_choose_language'] = "Elegir Idioma:";
				$lang_string['blog_enable_comments'] = "Permitir Comentarios de Usuarios"; // <-- New 0.3.6
				$lang_string['blog_comments_popup'] = "Abrir comentarios en Ventanas Emergentes"; // <-- New 0.3.6
				$lang_string['blog_enable_cache'] = "Permitir Cach� de Entradas (en algunos servidores mejora el rendimiento)"; // New for 0.4.6
				$lang_string['blog_enable_calendar'] = "Permitir Calendario"; // New for 0.4.6
				$lang_string['blog_enable_archives'] = "Permitir Bloque de Archivo"; // New for 0.4.8
				$lang_string['blog_enable_counter'] = "Permitir contador en barra lateral"; // New for 0.4.8
				$lang_string['blog_counter_hours'] = "N�mero de horas que han de pasar antes de volver a contar una visita (basandose en una ip espec�fica):"; // New for 0.4.8
				$lang_string['blog_enable_login'] = "Permitir el Link de Acceso (Porfavor marcar \"login.php\" primero...)"; // New for 0.4.8
				$lang_string['blog_enable_title'] = "Permitir texto plano en el bloque de la cabecera (no sleccionar si el t�tulo est� en el gr�fico de la cabecera)"; // New for 0.4.6
				$lang_string['blog_enable_permalink'] = "Permitir un link permanente en la entradas del blog"; // New for 0.4.6
				$lang_string['blog_enable_capcha'] = "Permitir Anti-Spam"; // New for 0.4.8
				$lang_string['blog_footer_counter'] = "Permitir contador a pie de p�gina"; // New for 0.4.8
				$lang_string['blog_enable_capcha_image'] = "Im�genes Anti-Spam (biblioteca GD solo) / Campo de texto Anti-Spam"; // New for 0.4.8
				$lang_string['blog_enable_stats'] = "Permitir la Opci�n de Estado en Men�"; // New for 0.4.7
				$lang_string['blog_enable_lastcomments'] = "Permitir lista de comentarios m�s recientes"; // New for 0.4.7
				$lang_string['blog_enable_lastentries'] = "Permitir lista de entradas m�s recientes"; // New for 0.4.7
				$lang_string['blog_enable_voting'] = "Permitir a los Usuarios Votar Art�culos"; // <-- New 0.3.8
				$lang_string['blog_email_notification'] = "Enviar email cuando se publique un comentario"; // <-- New 0.3.7
				$lang_string['blog_send_pings'] = "Enviar &quot;pings&quot;"; // <-- New 0.3.7
				$lang_string['blog_ping_urls'] = "URL completa (ej: http://rpc.weblogs.com/RPC2) del servicio de &quot;ping&quot;.<br />(Puedes introducir m�s de una separ�ndolas por comas.)"; // <-- New 0.3.7
				$lang_string['blog_trackback_about'] = "Trackback provee de un m�todo de notificaci�n entre blogs. Permita que otro
					blog sepa que usted lo est� enlazando enviando un trackback ping. Vea qui�n est� enlazando su blog 
					recibiendo trackback pings.<br />
				   Usted puede tanto ingresar las URLs manualmente para hacer ping, o hacerlo autom�ticamente a trav�s de Auto-Discovery."; // <-- New 0.3.8
				$lang_string['blog_trackback_enabled'] = "Activar trackback en mi blog"; // <-- New 0.3.8
				$lang_string['blog_trackback_auto_discovery'] = "Activar Auto-Discovery al crear posts que contengan URLs"; // <-- New 0.?.?
				$lang_string['blog_max_entries'] = "M�ximas Entradas a Mostrar:"; // <-- New 0.3.6
				$lang_string['blog_comment_tags'] = "Etiquetas permitidas en los Comentarios:"; // <-- New 0.3.6
				$lang_string['blog_gzip_about'] = "
					A partir de la versi�n 4.0.4, PHP puede leer y escribir archivos comprimidos gzip (.gz), lo cual ahorra espacio en disco. Por otra parte, es posible comprimir las p�ginas que se env�an a un navegador que soporte gzip, ahorrando as� ancho de banda.<br />
					<br />El soporte de Zlib no viene activado por defecto en el PHP. Si las casillas de verificaci�n est�n desactivadas significa que su PHP no soporta la extensi�n Zlib."; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_txt'] = "Activar compresi�n GZIP para archivos datos"; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_output'] = "Activar compresi�n GZIP para la salida HTTP"; // <-- New 0.3.7
				$lang_string['submit_btn'] = "&nbsp;Guardar&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>�Ups!</h2>La informaci�n no pudo ser guardada. Se encontr� un problema mientras se almacenaba su informaci�n.<br /><br />Respuesta del servidor:<br />";
				$lang_string['success'] = "<h2>�Preferencias Guardadas!</h2>La informaci�n ha sido almacenada satisfactoriamente."; // New for 0.4.8.1
				$lang_string['form_error'] = "Por favor complete los campos T�tulo y Autor.";
				$lang_string['label_entry_order'] = "Orden de Art�culos:";
				$lang_string['select_new_to_old'] = "Primero los Nuevos";
				$lang_string['select_old_to_new'] = "Primero los Antiguos";
				$lang_string['label_comment_order'] = "Orden de Comentarios:";
				$lang_string['cal_sunday'] = "Domingo"; // New for 0.4.6
				$lang_string['cal_monday'] = "Lunes"; // New for 0.4.6
				$lang_string['label_calendar_start'] = "D&iacute;a de la semana de inicio"; // New for 0.4.6
				$lang_string['title_sidebar'] = "Barra Lateral"; // New in 0.4.7
				$lang_string['title_comments'] = "Comentarios"; // New in 0.4.7
				$lang_string['title_trackback'] = "Trackbacks"; // New in 0.4.7
				$lang_string['title_compression'] = "Compresi�n"; // New in 0.4.7
				$lang_string['title_entries'] = "Entradas"; // New in 0.4.7
				$lang_string['title_general'] = "General"; // New in 0.4.7
				$lang_string['title_language'] = "Idioma"; // New in 0.4.7
				$lang_string['blog_comment_days_expiry'] = "Por cuantos d�as permitir comentarios? (0 significa sin l�mite de d�as)"; // New in 0.4.8
								
				$lang_string['blog_enable_calendar'] = "Activar calendario / Bloque de archivo"; // New for 0.4.6
				$lang_string['blog_enable_archives'] = "Activar Bloque de archivo"; // New for 0.4.8
				$lang_string['blog_enable_counter'] = "Activar Contador en el men�"; // New for 0.4.8
				$lang_string['blog_counter_hours'] = "N�mero de horas entes de contar de nuevo las visitas (basado en una direcci�n IP espec�fica):"; // New for 0.4.8
				$lang_string['blog_enable_login'] = "Enable Login Link (Please bookmark \"login.php\" first...)"; // New for 0.4.8
				$lang_string['blog_enable_title'] = "Permitir Bloque de T�tulo de Texto (Desmarca el checkbox si el t�tulo de la cabecera es una im�gen)"; // New for 0.4.6
				$lang_string['blog_enable_permalink'] = "Permitir Enlaces Permanentes en las Entradas"; // New for 0.4.6
				$lang_string['blog_enable_capcha'] = "Activar Anti-Spam"; // New for 0.4.8
				$lang_string['blog_footer_counter'] = "Activar Contador en Pi� de P�gina"; // New for 0.4.8
				$lang_string['blog_enable_capcha_image'] = "Im�genes Anti-Spam (librer�a GD solamente) / Campo de texto Anti-Spam"; // New for 0.4.8
				$lang_string['blog_enable_stats'] = "Permitir la Opci�n de Estad�sticas en el Listado"; // New for 0.4.7
				$lang_string['blog_enable_lastcomments'] = "Permitir la Opci�n de Comentarios Recientes en el Listado"; // New for 0.4.7
				$lang_string['blog_enable_lastentries'] = "Permitir la Opci�n de Entradas Recientes en el Listado"; // New for 0.4.7
				
				
				$lang_string['blog_comments_moderation'] = "Requiere que las entradas comentadas seas aprovadas por usuario logueado antes de ser p�blica
          (siempre visible para los usuarios que est�n dentro)"; // New in 0.5.0
				$lang_string['comment_moderation'] = "Opciones de Moderaci�n"; // New in 0.5.0
				break;
				
				
			  case 'comment_moderation':
				$lang_string['title'] = "Comentarios sin moderar";
				$lang_string['instructions'] = "Esta es uan lista de todos los comentarios que no est�n disponibles para los usuarios que no est�n logueados dentro del blog porque no han sido aprovados por el moderador.";
				$lang_string['header'] = "Listado de Moderaci�n";
				$lang_string['enteredby'] = "Introducida por: ";
				$lang_string['entrydate'] = "Fecha de la entrada: ";
				$lang_string['blogentrytitle'] = "T�tulo de la entrada del blog: ";
				$lang_string['enteredcontent'] = "Contenido: ";
				$lang_string['totalunmodded'] = " Elemento(s) total(es) esperando por actualizaci�n de moderaci�n.";
				$lang_string['mod_approve'] = "[Aprobar] ";
				$lang_string['mod_delete'] = "[Borrar]";
				break;
			  case 'moderation':
				$lang_string['title'] = "Preferencias de Moderaci�n";
				$lang_string['instructions'] = "Puedes modificar las listas de auto moderaci�n aqu�.";
				$lang_string['submit_btn'] = "&nbsp;Guardar los ajustes de moderaci�n&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>�Ups!</h2>La informaci�n no se guard�. Hubo un problema mientras de almacenaba la informaci�n.<br /><br />Respuesta del Servidor:<br />";
				$lang_string['success'] = "<h2>Preferencias Almacenadas!</h2>La informaci�n se guard� satisfactoriamente."; // New for 0.4.8.1
				$lang_string['banned_address_list_title'] = "<h2>Direcciones IP Prohibidas</h2>";
				$lang_string['banned_address_list'] = "Seguidamente hay una lista de direcciones ip num�ricas que tienen prohibido introducir comentarios. Cada ip est� en una l�nea separada y deben ser n�meros (no nombres de DNS). Cuando se est� logueado, las IPs pueden ser prohibidas directamente desde la visualizaci�n de comentarios.";
				$lang_string['banned_word_list_title'] = "<h2>Palabras prohibidas</h2>";
				$lang_string['banned_word_list'] = "Seguidamente hay una lista de palabras que no est�n permitidas ni en la url ni en el texto. Cada palabra o grupo de palabras debe estar en una l�nea separada. Los cBelow is a list of words that are not allowed to be in the url or the text. Each word or group of words is on a separate line. Los comentarios se intentar�n comparar exactamente con cada l�nea para as� conseguir prohibir eficientemente los comentarios no deseados.";
				

			case 'trackbacks':  // <-- New 0.3.8
				// Trackbacks
				$lang_string['title'] = "Trackbacks";
				$lang_string['header'] = "Trackback URL para esta entrada:";
				$lang_string['delete_btn'] = "Borrar";
				// Error Response
				$lang_string['error_add'] = "Se produjo un error guardando los datos del trackback.";
				$lang_string['error_delete'] = "<h2>Ups!</h2>No se elimin� el trackback. Hubo un problema mientras se estaba borrando el trackback.<br /><br />Respuesta del servidor:<br />";
        		$lang_string['success_delete'] = "<h2>�Trackback Eliminado!</h2>El link de trackback ha sido borrado."; // New for 0.4.8.1
				break;
				
			case 'options':
				$lang_string['title'] = "Opciones";
				$lang_string['instructions'] = "Use el formulario de debajo para personalizar el formato en que se presentar� la fecha y hora en la bit�cora y en los comentarios. Puedes seleccionar el formato de 12 o de 24 horas. Formato corto o largo. Las areas de <b>Previsualizaci�n</b> le muestran autom�ticamente como se ver� su formato.";
				// Long Date
				$lang_string['ldate_title'] = "Formato de Fecha Larga:";
				$lang_string['weekday'] = "D�a de la Semana";
				$lang_string['month'] = "Mes";
				$lang_string['day'] = "D�a";
				$lang_string['year'] = "A�o";
				$lang_string['none'] = "Ninguno";
				// Short Date
				$lang_string['sdate_title'] = "Formato de Fecha Corta:";
				$lang_string['s_month'] = "Mes";
				$lang_string['s_mon'] = "MMM";
				$lang_string['s_day'] = "D�a";
				$lang_string['s_year'] = "A�o";
				$lang_string['zero_day'] = "Cero inicial para el D�a";
				$lang_string['show_century'] = "Mostrar siglo";
				// Time
				$lang_string['time_title'] = "Formato de Hora:";
				$lang_string['12hour'] = "Reloj de 12 horas";
				$lang_string['24hour'] = "Reloj de 24 horas";
				$lang_string['before_noon'] = "Ma�ana";
				$lang_string['after_noon'] = "Tarde";
				// Date
				$lang_string['date_title'] = "Formato de Visualizaci�n de Fecha:";
				$lang_string['long_date'] = "Fecha Larga";
				$lang_string['short_date'] = "Fecha Corta";
				$lang_string['time'] = "Hora";
				// Menu
				$lang_string['menu_title'] = "Formato de Visualizaci�n en el Men� Fecha:";
				$lang_string['long_date'] = "Fecha Larga";
				$lang_string['short_date'] = "Fecha Corta";
				// Used in multiple places
				$lang_string['zero_day'] = "Cero inicial para el D�a";
				$lang_string['zero_month'] = "Cero inicial para el Mes";
				$lang_string['zero_hour'] = "Cero inicial para la Hora";
				$lang_string['separator'] = "Separador:";
				$lang_string['preview'] = "Previsualizaci�n:";
				$lang_string['server_offset'] = "Offset del Servidor:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Guardar&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>�Ups!</h2>La informaci�n no pudo ser guardada. Se encontr� un problema mientras se almacenaba su informaci�n.<br /><br />Respuesta del servidor:<br />";
				 $lang_string['success'] = "<h2>�Opciones  Guardadas!</h2>La informaci�n se ha almacenado satisfactoriamente."; // New for 0.4.8.1
				break;
			case 'themes':
				$lang_string['title'] = "Temas";
				$lang_string['instructions'] = "Use la lista de opciones para seleccionar un tema distinto.";
				// Themes
				$lang_string['choose_theme'] = "Temas:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Guardar&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>�Ups!</h2>La informaci�n no pudo ser guardada. Se encontr� un problema mientras se almacenaba su informaci�n.<br /><br />Respuesta del servidor:<br />";
				$lang_string['success'] = "<h2>�Tema  Seleccionado!</h2>La informaci�n se ha guardado satisfactoriamente."; // New for 0.4.8.1
				break;
				
			case 'upload_img':
				$lang_string['title'] = "Subir imagen";
				$lang_string['instructions'] = "Haga clic debajo para subir una imagen.";
				$lang_string['select_file'] = "Seleccionar archivo:";
				$lang_string['upload_btn'] = "Subir";
				// Error Response
				$lang_string['error'] = "<h2>�Ups!</h2>Fue imposible subir la imagen. Aqu� hay mas informaci�n:<br /><br />Respuesta del servidor:<br />";
				 $lang_string['success'] = "<h2>�Imagen Almacenada!</h2>La imagen se ha guardado satisfactoriamente."; // New for 0.4.8.1
				break;
				
			case 'search':
				$lang_string['title'] = "Resultados de la b�squeda";
				$lang_string['instructions'] = "Resultados de la b�squeda para la cadena <b>'%string'</b>:";
				$lang_string['not_found'] = "No se encontraron resultados";
				break;
			case 'entries':	// <-- New 0.4.4
				$lang_string['title'] = "Listado completo de art&iacute;culos";
				$lang_string['instructions'] = "A continuaci&oacute;n se muestran todos los art&iacute;culos disponibles.";
				$lang_string['no_entries'] = "No hay art&iacute;culos.";
				break;
			case 'contact': // <-- New 0.3.8
				$lang_string['title'] = "Contactanos";
				$lang_string['instructions'] = "Rellena el formulario:";
				$lang_string['form_error'] = "Por favor, completa los campos Asunto, Comentario y Anti-Spam.";
				$lang_string['name'] = "Nombre:";
				$lang_string['email'] = "Email:";
				$lang_string['subject'] = "Asunto:";
				$lang_string['comment'] = "Comentario:";
				$lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
				$lang_string['success'] = "<h2>�Listo!</h2>Su mensaje ha sido enviado.<p />";
				$lang_string['failure'] = "<h2>�Ups!</h2>Su mensaje no se ha enviado. Contra el Spam no fue incorporado muy probablemente correctamente.<p />";
				$lang_string['contact_capcha'] = "Anti-Spam: Introduzca "; // 0.4.2	
				$lang_string['contactsent'] = "Contacto enviado desde: ";  // New for 0.4.6
				$lang_string['IPAddress'] = "Direcci&oacute;n IP:";  // New for 0.4.6
				$lang_string['useragent'] = "Agente Usuario:";  // New for 0.4.6
				$lang_string['wrote'] = "<i>El %s, %s escribi&oacute;:</i><br />\n<br />\n%s"; // New for 0.4.6.2
				break;
			case 'stats':
				$lang_string['title'] = "Estad�sticas";
				$lang_string['general'] = "General";
				$lang_string['entry_info'] = "<b>%s</b> art�culos usando <b>%s</b> palabras ocupando <b>%s</b> bytes";
				$lang_string['comment_info'] = "<b>%s</b> comentarios usando <b>%s</b> palabras ocupando <b>%s</b> bytes";
				$lang_string['trackback_info'] = "<b>%s</b> trackbacks ocupando <b>%s</b> bytes";
				$lang_string['static_info'] = "<b>%s</b> p�ginas est�ticas usando <b>%s</b> palabras ocupando <b>%s</b> bytes";
				$lang_string['most_viewed_entries'] = "10 Art�culos m�s vistos";
				$lang_string['most_commented_entries'] = "10 Art�culos m�s comentados";
				$lang_string['most_trackbacked_entries'] = "10 Art�culos con m�s trackbacks";
				$lang_string['vote_info'] = "<b>%s</b> votos ocupando <b>%s</b> bytes"; // 0.4.1
				$lang_string['most_voted_entries'] = "10 Art�culos m�s votados"; //0.4.1
				$lang_string['most_rated_entries'] = "10 Art�culos mejor valorados"; //0.4.1
				break;
			case 'errorpage-nocookies':  // New for 0.4.6
				$lang_string["title"] = 'HTTP Error 403.8 - Acceso denegado a P�gina/Funci�n';
				$lang_string["errorline1"] = 'La p�gina o funci�n que intenta acceder requiere el uso de cookies.';
				$lang_string["errorline2"] = 'Habilite las cookies en su navegador o software de protecci�n e intente nuevamente.';
				$lang_string["clientid"] = 'ID Cliente: ';
				break;
			case 'errorpage':  // New for 0.4.6
				$lang_string["403.8"] = 'HTTP Error 403.8 - Acceso denegado a P�gina/Funci�n';
				$lang_string["404"] = 'HTTP Error 404 - P�gina/Funci�n inexistente';
				$lang_string["error_404"] = 'La p�gina o funci�n que intenta acceder no existe.';
				$lang_string["error_javascript"] = 'La p�gina o funci�n que intenta acceder requere javascript para funcionar correctamente.';
				$lang_string["error_emailnotsent"] = 'El mensaje que intent� enviar ha fallado.';
				$lang_string["error_emailnotsentcapcha"] = 'El mensaje que intent� enviar ha fallado pues la entrada anti-spam est� incorrecta o no ha sido ingresada.';
				$lang_string["clientid"] = 'ID Cliente: ';
				break;
			case 'emoticons':  // New for 0.4.7
				$lang_string['title'] = "Administrar Emoticones";
				$lang_string['instructions'] = "
					Marque los emoticones que desea usar. Escriba en el cuadro los Tags que desea sean remplazados por la imagen.
					Puede usar m�ltiples Tags, separ�ndolos por espacios.<br /><br />
					Por ejemplo:<br />
					:) :-) :SMILE: :HAPPY:<br /><br />
					<i>(Se recomienda fuertemente que los Tags sean de m�s de 2 caracteres, de otro modo sustituciones inesperadas pueden ocurrir.)</i>";
				$lang_string["upload_instructions"] = 'Subir Nuevo Emoticon:';
				$lang_string["upload_success"] = '�Felicitaciones! Imagen subida exitosamente!';
				$lang_string["upload_error"] = '�Error! La Imagen no ha sido subida.';
				$lang_string["upload_invalid"] = '�Error! Archivo de Imagen no v�lido. La Imagen debe tener extensi�n png, jpg, o gif.';
				$lang_string["save_success"] = '�Preferencias para emoticones guardada exitosamente!';
				$lang_string["save_error"] = '�Error! Las Preferencias para Emoticones no han sido guardadas.';
				$lang_string["save_button"] = 'Guardar Emoticones';
				break;
				
			case 'archives': // New for 0.4.8
				$lang_string['title'] = "Archivos";
				$lang_string['showall'] = "Mostrar todos";
				break;
		
			case 'manage_users':
				$lang_string['title'] = "Administrar o Editar Usuarios";
				$lang_string['instructions'] = "A�adir, Modificar o Eliminar usuarios que no son administradores  pero tienen la habilidad de crear entradas y/o moderar comentarios.";
				$lang_string['fulladminerror'] = "Debes ser un administrador completo para hacer esto!";
				$lang_string['header_user'] = "Usuario: ";
				$lang_string['header_property'] = "Propiedad";
				$lang_string['header_value'] = "Valor";
				$lang_string['prop_username'] = "Nombre de usuario:";
				$lang_string['prop_fullname'] = "Nombre que se mostrar�:";
				$lang_string['prop_password'] = "Contrase�a:";
				$lang_string['prop_email'] = "Correo electr�nico:";
				$lang_string['prop_avatar'] = "URL del avatar:";
				$lang_string['prop_state'] = "�Activo?";
				$lang_string['prop_sec_Moderate'] = "�Moderar Comentarios?";
				$lang_string['prop_sec_Delete'] = "�Borrar entradas del blog?";
				$lang_string['prop_sec_Edit'] = "�Editar cualquier entrada?";
				$lang_string['btn_SaveChanges'] = "Guardar Cambios";
				$lang_string['btn_CreateUser'] = "Crear Usuario";
				$lang_string['btn_Cancel'] = "Cancelar";  
				$lang_string['grid_header'] = "Listar Usuarios";
				$lang_string['grid_login'] = 'Login';
				$lang_string['grid_email'] = 'Correo Electr�nico';
				$lang_string['grid_avatar'] = 'Avatar';
				$lang_string['grid_state'] = '�Activo?';
				$lang_string['btn_modify'] = 'Modificar';
				$lang_string['btn_delete'] = 'Eliminar';
				$lang_string['create_user'] = 'Crear Nuevo Usuario';
				break;

			default:
				break;
		}
	}
?>
