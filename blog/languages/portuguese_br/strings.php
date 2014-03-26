<?php
  // English Language File
  // (c) 2004 Alexander Palmo, apalmo <at> bigevilbrain <dot> com
  // Edits: 2007 Bill Bateman, Alexander Palmo

  // Simple PHP Version: 0.5.0.1
  // Language Version:   0.5.0.1

  function sb_language( $page ) {
    global $language, $html_charset, $php_charset, $lang_string;

    // Language: English
    $lang_string['language'] = 'english';
    $lang_string['locale'] = array('pt_BR', 'br');
    $lang_string['rss_locale'] = 'pt-BR'; // New 0.4.8

    // ISO Charset: ISO-8859-1
    $lang_string['html_charset'] = 'ISO-8859-1';
    $lang_string['php_charset'] = 'ISO-8859-1';
    setlocale( LC_TIME, $lang_string['locale'] );

    // Global Strings

    // Menu
    $lang_string['menu_links'] = "Links";
    $lang_string['menu_home'] = "In�cio";
    $lang_string['menu_contact'] = "Contato";
    $lang_string['menu_stats'] = "Estatisticas";
    $lang_string['menu_calendar'] = "Calend�rio"; // New for 0.4.8
    $lang_string['menu_archive'] = "Arquivo";
    $lang_string['menu_viewarchives'] = "Ver Arquivos";
    $lang_string['menu_menu'] = "Menu";
    $lang_string['menu_add'] = "Criar Post";
    $lang_string['menu_add_static'] = "Criar P�gina Fixa";
    $lang_string['menu_upload'] = "Carregar Imagem";
    $lang_string['menu_setup'] = "Prefer�ncias";
    $lang_string['menu_categories'] = "Categorias";
    $lang_string['menu_info'] = "Meta Tags";
    $lang_string['manage_users'] = "Gerenciados de Usu�rios";
    $lang_string['manage_php_config'] = "Ver Config. do PHP"; // New in 0.5.0.1
    $lang_string['menu_options'] = "Data &amp; Hora";
    $lang_string['menu_themes'] = "Temas";
    $lang_string['menu_colors'] = "Cores";
    $lang_string['menu_change_login'] = "Mudar Login";
    $lang_string['menu_logout'] = "Sair";
    $lang_string['menu_login'] = "Entrar";
    $lang_string['menu_most_recent'] = "Coment�rios Recentes";
    $lang_string['menu_most_recent_entries'] = "Posts Recentes";
    $lang_string['menu_most_recent_trackback'] = "Trackbacks Recentes";
    $lang_string['menu_add_block'] = "Bloqueios";
    $lang_string['menu_emoticons'] = "Emoticons"; // New for 0.4.7
    $lang_string['menu_avatar'] = "Avatar"; // New for 0.4.7
    $lang_string['menu_moderation'] = "Modera��o IP/Palavras"; // New for 0.4.9
    $lang_string['menu_commentmoderation'] = "Coment�rios n�o moderados"; // New for 0.5.0
    $lang_string['menu_random_entry'] = "Posts Aleat�rios"; // New for 0.5.2
    $lang_string['menu_plugins'] = "Plugins"; // New for 0.5.2
    $lang_string['notice_moderator1'] = "Voc� tem ";
    $lang_string['notice_moderator2'] = " coment�rios que precisam ser aprovados.";
    $lang_string['notice_loggedin'] = "Atualmente voc� est� logado.";
    

    // Counter
    $lang_string['counter_today'] = "Hoje:"; // New for 0.4.8
    $lang_string['counter_yesterday'] = "Ontem:"; // New for 0.4.8
    $lang_string['counter_totalsidebar'] = "Total:"; // New for 0.4.8
    $lang_string['counter_title'] = "Contador Acumulado"; // New for 0.4.8

    // Other
    $lang_string['home'] = 'Voltar para o In�cio';
    $lang_string['nav_next'] = 'Pr�ximo';
    $lang_string['nav_back'] = 'Anterior';
    $lang_string['nav_first'] = 'Primeiro'; // New in 0.5.0.1
    $lang_string['nav_last'] = '�ltimo'; // New in 0.5.0.1
    $lang_string['search_title'] = 'Procurar';
    $lang_string['search_go'] = 'Ir';
    $lang_string['page_generated_in'] = 'P�gina gerada em %s segundos';
    $lang_string['counter_total'] = 'Visitas a Sites: '; // New in 0.4.8
    $lang_string['read_more'] = 'Leia Mais...'; // New in 0.4.8
    $lang_String['randomentry'] = 'Posts Aleat�rios'; // New in 0.5.0.1
    $lang_string['randomquote'] = 'Coment�rios Aleat�rios'; // New in 0.5.0.1

    // SB Functions
    $lang_string['sb_months'] = array( 'Janeiro', 'Fevereiro', 'Mar�o', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro' );
    $lang_string['sb_default_title'] = 'Sem t�tulo';
    $lang_string['sb_default_author'] = 'Sem autor';
    $lang_string['sb_default_footer'] = 'Sem rodap�';

    $lang_string['sb_edit'] = 'alterar';
    $lang_string['sb_delete'] = 'excluir';
    $lang_string['sb_permalink'] = 'permalink';
    $lang_string['sb_trackback'] = 'trackbacks';
    $lang_string['sb_postedby'] = 'Publicado por'; // 0.5.0
    $lang_string['sb_admin'] = 'Administrador'; // 0.5.0
    $lang_string['sb_relatedlink'] = 'link relacionado'; // <-- New in 0.4.6

    $lang_string['sb_add_comment_btn'] = 'incluir coment�rio';
    $lang_string['sb_read_entry_btn'] = 'ver post'; // 0.5.0
    $lang_string['sb_comment_btn_number_first'] = true;
    $lang_string['sb_comment_btn'] = 'coment�rio';
    $lang_string['sb_comment_view'] = 'visita'; // 0.5.0
    $lang_string['sb_comments_plural_btn_number_first'] = true;
    $lang_string['sb_comments_plural_btn'] = 'coment�rios';
    $lang_string['sb_comments_plural_view'] = 'visitas'; // 0.5.0

    // ( 1 view )
    $lang_string['sb_view_counter_pre'] = '';
    $lang_string['sb_view_counter_post'] = ' visita';

    // ( 2 views )
    $lang_string['sb_view_counter_plural_pre'] = '';
    $lang_string['sb_view_counter_plural_post'] = ' visitas';

    $lang_string['sb_add_link_btn'] = '+ link';
    $lang_string['sb_rate_entry_btn'] = 'Clique para avaliar este Post';

    // Entry Text Editor
    if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
      $lang_string['label_subject'] = "Assunto:";
      $lang_string['label_insert'] = "Inclus�o Especial:";
      $lang_string['btn_bold'] = " b ";
      $lang_string['btn_italic'] = " i ";
      $lang_string['btn_image'] = "img";
      $lang_string['btn_url'] = "url";
      $lang_string['btn_readmore'] = "leia mais"; // 0.4.8
      $lang_string['view_images'] = "Ver Imagens Carregadas";
      $lang_string['label_entry'] = "Post:";
      $lang_string['btn_preview'] = "&nbsp;Pr�-Visualizar&nbsp;";
      $lang_string['btn_post'] = "&nbsp;Enviar&nbsp;";
      $lang_string['chk_visiblemenu'] = "Vis�vel (Mostrar no menu)";
      $lang_string['file_name'] = "Nome do Arquivo: (sem espa�os nem extens�es)";

      // Javascript Strings
      $lang_string['insert_styles'] = "Informe o texto a ser formatado:";
      $lang_string['insert_image'] = "Informe a URL para a imagem:";
      $lang_string['insert_url1'] = "Informe o texto que ser� exibido no link (Opcional):";
      $lang_string['insert_url2'] = "Informe a URL completa do link:";
      $lang_string['insert_url3'] = "Abrir URL em uma nova janela (Opcional):";
      $lang_string['form_error'] = "Favor informar os campos Assunto e Post.";

      // More Javascript Strings
      $lang_string['insert_image_optional'] = 'Opcional:';
      $lang_string['insert_image_width'] = 'Largura (Opcional):';
      $lang_string['insert_image_height'] = 'Altura (Opcional):';
      $lang_string['insert_image_popup'] = 'Ver o pop-up em tamanho completo (Opcional):';
      $lang_string['insert_image_float'] = 'Suspenso (Opcional):';

      $lang_string['day'] = 'Dia';
      $lang_string['month'] = 'M�s';
      $lang_string['year'] = 'Ano';
      $lang_string['hour'] = 'Hora';
      $lang_string['minute'] = 'Minuto';
      $lang_string['second'] = 'Segundo';
    }

    switch ($page) {
      case 'add':
        // Add Entry
        $lang_string['title'] = "Incluir Post";
        $lang_string['instructions'] = "Preencha o formul�rio abaixo e clique em 'Pr�-Visualizar' para ver como ficar�, ou clique em 'Enviar' para salvar seu Post.";
        $lang_string['title_ad'] = "Confirme o Trackback Pings";
        $lang_string['instructions_ad'] = "Estas s�o as URIs Auto-detectadas que voc� est� para pingar. Se voc� n�o quer pingar uma determinada URI, desmarque-a abaixo. Ent�o pressione o bot�o 'Ok' para pingar as URIs marcadas ou pressione 'Cancelar' para n�o pingar nada.";
        $lang_string['label_tb_ping'] = "Trackback ping(s) a serem enviados (separado por v�rgula)";
        $lang_string['label_tb_autodiscovery'] = "auto-detectar";
        $lang_string['label_relatedlink'] = "Links Relacionados";
        $lang_string['label_categories'] = "Lista de Categorias";

        // Preview / Edit Entry
        $lang_string['title_preview'] = "Pr�-Visualizar / Alterar Post";
        $lang_string['instructions_preview'] = "Aqui mostra como seu post ficar�. Se estiver usando 'text styles' ou incluindo imagens, lembre-se de 'fechar' todas as suas 'tags'.";
        $lang_string['title_update'] = "Alterar Post";
        $lang_string['instructions_update'] = "Voc� pode mudar seu post usando o formul�rio abaixo. Clique em 'Pr�-Visualizar' ou 'Enviar' quando tiver terminado.";
        $lang_string['ok_btn'] = "&nbsp;OK&nbsp;";
        $lang_string['cancel_btn'] = "&nbsp;Cancelar&nbsp;";

        // Error Response
        $lang_string['error'] = "<h2>Ops!</h2>O post n�o foi salvo. Ocorreu um erro enquanto as informa��es eram salvas.<br /><br />Resposta do Servidor:<br />";
        $lang_string['success'] = "<h2>Post Salvo!</h2>Seu post foi salvo com sucesso."; // 0.4.8.1
        break;

      case 'add_static':
        // Add Entry
        $lang_string['title'] = "Incluir P�gina Fixa";
        $lang_string['instructions'] = "Preencha o formul�rio abaixo para criar uma P�gina Fixa. Ao contr�rio dos Posts normais, as P�ginas Fixas aparecem no menu de links. S�o p�ginas que voc� quer sempre deixar vis�veis, como: Sobre, Contato, Agenda, etc. Clique 'Pr�-Visualizar' para ver como ficar�, ou clique em 'Enviar' para salvar sua p�gina.";

        // Preview / Edit Entry
        $lang_string['title_preview'] = "Pr�-Visualizar / Alterar P�gina Fixa";
        $lang_string['instructions_preview'] = "Aqui mostra como sua P�gina Fixa ficar�. Se estiver usando 'text styles' ou incluindo imagens, lembre-se de 'fechar' todas as suas 'tags'.";
        $lang_string['title_update'] = "Alterar P�gina Fixa";
        $lang_string['instructions_update'] = "Voc� pode mudar sua p�gina usando o formul�rio abaixo. Clique em 'Pr�-Visualizar' ou 'Enviar' quando tiver terminado.";
        $lang_string['form_error'] = "Favor preencher os campos Assunto, Conte�do e Nome do Arquivo.";

        // Error Response
        $lang_string['error'] = "<h2>Ops!</h2>A p�gina n�o foi salva. Ocorreu um erro enquanto as informa��es eram salvas.<br /><br />Resposta do Servidor:<br />";
        break;

      case 'add_block':
        // Add / Manage Blocks
        $lang_string['title'] = "Incluir / Gerenciar Blocos";
        $lang_string['instructions'] = "Use o formul�rio abaixo para incluir um Bloco customizado que aparecer� no menu lateral.";
        $lang_string['up'] = "sobe";
        $lang_string['down'] = "desce";
        $lang_string['edit'] = "alterar";
        $lang_string['delete'] = "excluir";
        $lang_string['block_name'] = "Nome do Bloco:";
        $lang_string['block_content'] = "Conte�do do Bloco:";
        $lang_string['instructions_edit'] = "Voc� est� alterando um bloco.";
        $lang_string['instructions_modify'] = "Use o formul�rio abaixo para incluir ou alterar um Bloco customizado que aparecer� no menu lateral.";
        $lang_string['submit_btn_edit'] = "Alterar Bloco";
        $lang_string['submit_btn_add'] = "Incluir Bloco";
        $lang_string['form_error'] = "Favor preencher o campo Nome do Bloco.";
        break;

      case 'add_link':
        $lang_string['static_pages'] = "P�ginas Fixas:";

        // Add / Manage Links
        $lang_string['title'] = "Incluir / Gerenciar Links";
        $lang_string['instructions'] = "Inclui links customizados para outros sites. Preencha o formul�rio abaixo e clique em 'Incluir Link' para criar um link. Clique nos bot�es 'sobe' ou 'desce' para mudar a ordem dos links. Clique no bot�o 'alterar' para modificar um link. Clique no bot�o 'excluir' para remover um link";
        $lang_string['up'] = "sobe";
        $lang_string['down'] = "desce";
        $lang_string['edit'] = "alterar";
        $lang_string['delete'] = "excluir";
        $lang_string['link_name'] = "Nome do Link:";
        $lang_string['link_url'] = "URL do Link: (Opcional. Deixe em branco para criar um separador.)";
        $lang_string['instructions_edit'] = "Voc� est� alterando um link:";
        $lang_string['instructions_modify'] = "Clique abaixo para modificar um link:";
        $lang_string['submit_btn_edit'] = "Alterar Link";
        $lang_string['submit_btn_add'] = "Incluir Link";
        $lang_string['form_error'] = "Favor preencher o campo Nome do Link.";
        break;

      case 'categories':

        // Add / Manage Links
        $lang_string['title'] = "Incluir / Gerenciar Categorias";
        $lang_string['instructions'] = "Use o formul�rio abaixo para incluir e alterar suas categorias. Cada item de categoria pode estar neste formato 'nome da categora (n�mero do id)'. Indente os itens com spaces para criar hierarquias.<br /><br /><b>Exemplo:</b><br />Geral (1)<br />Not�cias (3)<br />&nbsp;&nbsp;An�ncios (6)<br />&nbsp;&nbsp;Eventos (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;Misto (7)<br />Tecnologias (2)<br />";
        $lang_string['error'] = "Erro";
        $lang_string['current_categories'] = "Categorias atuais";
        $lang_string['no_categories_found'] = "Nenhuma Categoria Encontrada";
        $lang_string['category_list'] = "Lista de Categoria:";
        $lang_string['validate'] = "Validar";
        $lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
        break;

      case 'colors':
        // Change Colors
        $lang_string['title'] = "Mudar Cores";
        $lang_string['instructions'] = "Voc� pode mudar as cores de texto e fundo do seu blog. Primeiro selecione o campo, ent�o use o selecionador de cores. O campo Valor mudar� automaticamente.";
        $lang_string['bg_color'] = "Fundo P�gina";
        $lang_string['main_bg_color'] = "Fundo P�gina Principal";
        $lang_string['border_color'] = "Borda da P�gina";
        $lang_string['inner_border_color'] = "Mouse sobre a borda";
        $lang_string['header_bg_color'] = "Fundo do Cabe�alho";
        $lang_string['header_txt_color'] = "Texto do Cabe�alho";
        $lang_string['menu_bg_color'] = "Fundo do Menu";
        $lang_string['footer_bg_color'] = "Fundo do Rodap�";
        $lang_string['txt_color'] = "Texto Principal";
        $lang_string['headline_txt_color'] = "Linha de cabe�alho";
        $lang_string['date_txt_color'] = "Texto da Data";
        $lang_string['footer_txt_color'] = "Texto do Rodap�";
        $lang_string['link_reg_color'] = "Link Padr�o";
        $lang_string['link_hi_color'] = "Mouse sobre o Link";
        $lang_string['link_down_color'] = "Link Ativo";

        // More Colors
        $lang_string['entry_bg'] = "Fundo do Post";
        $lang_string['entry_title_bg'] = "Fundo do T�tulo do Post";
        $lang_string['entry_border'] = "Borda do Post";
        $lang_string['entry_title_text'] = "Texto do T�tulo do Post";
        $lang_string['entry_text'] = "Texto do Post";

        $lang_string['static_bg'] = "Fundo da P�g Fixa"; // 0.5.0
        $lang_string['static_title_bg'] = "Fundo do T�tulo da P�g Fixa"; // 0.5.0
        $lang_string['static_border'] = "Borda da P�g Fixa"; // 0.5.0
        $lang_string['static_title_text'] = "Texto do T�tulo da P�g Fixa"; // 0.5.0
        $lang_string['static_text'] = "Texto da P�g Fixa"; // 0.5.0

        $lang_string['comment_bg'] = "Fundo do Coment"; // 0.5.0
        $lang_string['comment_title_bg'] = "Fundo do T�tulo do Coment"; // 0.5.0
        $lang_string['comment_border'] = "Borda do Coment"; // 0.5.0
        $lang_string['comment_title_text'] = "Texto do T�tulo do Coment"; // 0.5.0
        $lang_string['comment_text'] = "Texto do Coment"; // 0.5.0

        $lang_string['menu_bg'] = "Fundo do Menu";
        $lang_string['menu_title_bg'] = "Fundo do T�tulo do Menu";
        $lang_string['menu_border'] = "Borda do Menu";
        $lang_string['menu_title_text'] = "Texto do T�tulo do Menu";
        $lang_string['menu_text'] = "Texto do Menu";
        $lang_string['menu_link_reg_color'] = "Link do Menu Padr�o";
        $lang_string['menu_link_hi_color'] = "Mouse sobre o Link do Menu";
        $lang_string['menu_link_down_color'] = "Link do Menu Ativo";

        // Submit
        $lang_string['color_preset'] = "Esquema de Cor:";
        $lang_string['scheme_name'] = "Digite um nome para o esquema de cor customizado:";
        $lang_string['scheme_file'] = "Digite um nome de arquivo do esquema: (sem espa�o ou extens�o de arquivo)";
        $lang_string['save_btn'] = "&nbsp;Salvar&nbsp;";
        $lang_string['form_error'] = "Favor digitar um nome para o esquema de cor customizado.";
        $lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
        $lang_string['theme_doesnt_allow_colors'] = 'O tema selecionado n�o permite o uso de cores customizadas.';

        // Error Response
        $lang_string['error'] = "<h2>Ops!</h2>Informa��es n�o salvas. Ocorreu um problema enquanto seus dados eram salvos.<br /><br />Resposta do Servidor:<br />";
        $lang_string['success'] = "<h2>Cores Salvas!</h2>As informa��es foram salvas com sucesso."; // New for 0.4.8.1
        break;

      case 'comments':
        // comments
        $lang_string['name'] = "Nome:"; //New in 0.4.6.2
        $lang_string['email'] = "Email:"; //New in 0.4.6.2
        $lang_string['homepage'] = "Homepage:"; //New in 0.4.6.2
        $lang_string['comment'] = "Coment�rio:"; //New in 0.4.6.2
        $lang_string['IPAddress'] = "Endere�o IP:";  // New for 0.4.6.2
        $lang_string['useragent'] = "User Agent:";  // New for 0.4.6.2
        $lang_string['wrote'] = "<i>%s, %s escreveu:</i><br />\n<br />\n%s"; // New for 0.4.6.2

        $lang_string['comment_capcha'] = "Anti-Spam: Digite "; // 0.4.2
        $lang_string['title'] = "Coment�rios";
        $lang_string['header'] = "Incluir Coment�rio";
        $lang_string['instructions'] = "Preencha o formul�rio abaixo para incluir seus pr�prios coment�rios.";
        $lang_string['comment_name'] = "Seu nome:";
        $lang_string['comment_email'] = "Email:";
        $lang_string['comment_url'] = "URL:";
        $lang_string['commentposted'] = "Novo coment�rio feito �s: ";  // New for 0.4.6.2
        $lang_string['comment_remember'] = "Lembre-me:";
        $lang_string['comment_text'] = "Coment�rio:";
        $lang_string['post_btn'] = "&nbsp;Enviar&nbsp;";
        $lang_string['delete_btn'] = "excluir";
        $lang_string['ban_btn'] = "banir ip"; // New for 0.4.8
        $lang_string['expired_comment1'] = "Desculpe. Novos coment�rios n�o s�o permitidos depois de "; // New for 0.4.8
        $lang_string['expired_comment2'] = " dias."; // New for 0.4.8

        $lang_string['blacklisted'] = "Desculpe, seu endere�o de IP foi banido. Coment�rios n�o permitidos."; // New for 0.4.8
        $lang_string['bannedword'] = "Seu coment�rio, url, nome oo email cont�m palavra(s) que foram banidas pelo administrador. Seu coment�rio N�O foi enviado."; // New for 0.4.8
        $lang_string['nocomments'] = "Comentarios n�o est�o dispon�veis para este post."; // New for 0.4.9
        $lang_string['email_moderator'] = "Coment�rios s�o moderados neste blog. Este coment�rio precisa de aprova��o para se tornar p�blico."; // New for 0.5.0
        $lang_string['user_notice_mod'] = "Modera��o est� ativa para este blog. Seu coment�rio precisa ser aprovado pelo adminitrador antes de se tornar vis�vel."; // new for 0.5.0

        $lang_string['return_to_comments'] = 'Voltar aos coment�rios';

        // Error Response
        $lang_string['error_add'] = "<h2>Ops!</h2>O coment�rio n�o foi salvo. Ocorreu um problema enquanto seu coment�rio era salvo.<br /><br />Resposta do Servidor:<br />";
        $lang_string['error_delete'] = "<h2>Ops!</h2>O coment�rio n�o foi exclu�do. Ocorreu um problema enquanto excluia seu coment�rio.<br /><br />Resposta do Servidor:<br />";
        $lang_string['error_ban'] = "<h2>Ops!</h2>IP n�o inclu�do na lista de IPs banidos.<br /><br />Resposta do Servidor:<br />";
        $lang_string['success_add'] = "<h2>Coment�rio Inclu�do!</h2>Seu coment�rio foi salvo com sucesso."; // New for 0.4.8.1
        $lang_string['success_delete'] = "<h2>Coment�rio Exclu�do!</h2>Seu coment�rio foi exclu�do."; // New for 0.4.8.1
        $lang_string['success_ban1'] = "<h2>IP Banido!";
        $lang_string['success_ban2'] = "</h2>Para remover esta restri��o no futuro, use a op��o Modera��o no menu Prefer�ncias."; // New for 0.4.8.1
        $lang_string['form_error'] = "Favor preencher o campo Nome, Coment�rio e Anti-Spam.";
        $lang_string['error_noip'] = "Nenhum IP foi informado para a fun��o Blacklist.";

        $lang_string[ 'error_comments_disabled' ] = '<h2>Erro!</h2>Opa! Coment�rios est�o desabilitados para este blog. Voc� � um spambot?'; // New 0.5.0
        $lang_string[ 'error_no_match' ] = "<h2>Erro!</h2>Seu endere�o IP n�o confere com o endere�o IP capturado. Voc� � um spambot?"; // New 0.5.0
        $lang_string[ 'error_fields_missing' ] = '<h2>Erro!</h2>Est�o faltando os seguintes campos: '; // New 0.5.0
        $lang_string[ 'error_spambot' ] = '<h2>Erro!</h2>Os dados de Capcha est�o faltando. Voc� � um spambot?'; // New 0.5.0
        $lang_string[ 'error_capcha' ] = '<h2>Erro!</h2>Dados de capcha n�o conferem.'; // New 0.5.0
        $lang_string[ 'error_bad_data' ] = '<h2>Erro!</h2>Dados de envio inv�lidos. Voc� � um hacker?'; // New 0.5.0
        $lang_string[ 'error_entry_missing' ] = '<h2>Erro!</h2>Voc� est� tentando comentar um post que n�o existe.'; // New 0.5.0
        $lang_string[ 'error_empty_text' ] = '<h2>Erro!</h2>Voc� n�o digitou nenhum coment�rio ou seu nome.'; // New 0.5.0
        break;

      case 'delete':
        $lang_string['title'] = "Excluir Post";
        $lang_string['instructions'] = "Este � o post que voc� quer excluir? Certifique-se de que voc� realmente quer fazer isso, essa a��o n�o tem volta...";
        $lang_string['ok_btn'] = "&nbsp;Ok&nbsp;";
        $lang_string['cancel_btn'] = "&nbsp;Cancelar&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Ops!</h2>N�o foi poss�vel excluir o post.<br /><br />Resposta do Servidor:<br />";
        $lang_string['success'] = "<h2>Post Exclu�do!</h2>O post foi exclu�do."; // New for 0.4.8.1
        break;

      case 'delete_static':
        $lang_string['title'] = "Excluir P�gina Fixa";
        $lang_string['instructions'] = "Esta � a p�gina fixa que voc� quer excluir? Certifique-se de que voc� realmente quer fazer isso, essa a��o n�o tem volta...";
        $lang_string['ok_btn'] = "&nbsp;Ok&nbsp;";
        $lang_string['cancel_btn'] = "&nbsp;Cancelar&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Ops!</h2>N�o foi poss�vel excluir a p�gina fixa.<br /><br />Resposta do Servidor:<br />";
        $lang_string['success'] = "<h2>P�gina Fixa Exclu�da!</h2>A p�gina fixa foi exclu�da."; // New for 0.4.8.1
        break;

      case 'image_list':
        $lang_string['title'] = "Lista de Imagens";
        $lang_string['instructions'] = "Clique nos links abaixo para ver as imagens.<br /><br />Para inserir uma imagem no seu post:<br />1) Clique com o bot�o direito do mouse sobre um link e escolha 'Copiar Link' ou 'Copiar Atalho'.<br />2) Volte para a p�gina de inclus�o ou altera��o de post.<br />3) Clique no bot�o 'img' e cole a URL dentro da janela.";
        break;

      case 'info':
        $lang_string['title'] = "Informa��es Meta-Data";
        $lang_string['instructions'] = "As informa��es abaixo s�o usadas para qualificar um conte�do, o que ajuda as ferramentas de pesquisa a acharem e identificarem corretamente seu site. Essas informa��es tamb�m podem ser usadas em sistemas RSS.";
        $lang_string['info_keywords'] = "Palavras-chave: (Lista das palavras-chaves separadas por virgulas.)";
        $lang_string['info_description'] = "Descri��o: (Um texto livre abstrato que descreve o seu site.)";
        $lang_string['info_copyright'] = "Direitos: (Direito-de-uso, ou o link para um documento contendo o mesmo.)";
        $lang_string['tracking_code'] = "C�digo de Tracking Externo: (C�digo HTML necess�rio na p�gina principal (nas tags de cabe�alho por motivo de seguran�a) somente para os usu�rios que entram na p�gina, ex: Google Analytics)";
        $lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Ops!</h2>As informa��es n�o foram salvas. Ocorreu um problema enquanto seus dados eram salvos.<br /><br />Resposta do Servidor:<br />";
        $lang_string['success'] = "<h2>Meta-Data salva!</h2>As informa��es foram salvas com sucesso."; // New for 0.4.8.1
        $lang_string['form_error'] = "Favor preencher os campo T�tulo e Autor.";
        break;

      case 'index':
        // Index
        break;

      case 'static':
        // Index
        break;

      case 'rating':
        $lang_string['error'] = "<h2>Ops!</h2>As informa��es n�o foram salvas. Ocorreu um problema enquanto seus dados eram salvos.<br /><br />Resposta do Servidor:<br />";
        $lang_string['success'] = "<h2>Voto Salvo!</h2>Sua avalia��o foi salva com sucesso."; // New for 0.4.8.1
        break;

      case 'login':
        $lang_string['upgrade'] = "<h2>Atualiza��o</h2>"; // New 0.3.8
        $lang_string['upgrade_count'] = "%n arquivos de coment�rios precisam de atualizados:"; // New 0.3.8
        $lang_string['upgrade_url'] = "Atualizar Coment�rios"; // New 0.3.8
        $lang_string['title'] = "Entrar";
        $lang_string['instructions'] = "Preencha o Nome de Usu�rio e a Senha abaixo";
        $lang_string['username'] = "Nome de Usu�rio:";
        $lang_string['password'] = "Senha";
        $lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
        // Success
        $lang_string['success'] = "<h2>Sucesso!</h2>Voc� est� logado. Boa navega��o!<p />";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>Ops!</h2>Voc� n�o entrou. Verifique se voc� digitou o Nome de Usu�rio e Senha corretamente e tente novamente.<p />";
        $lang_string['inactive_account'] = "<h2>Ops!</h2>Voc� n�o entrou. Por algum motivo sua conta foi desabilitada pelo administrador.<p />";
        $lang_string['form_error'] = "Preencha os campos Nome de Usu�rio e Senha.";
        break;

      case 'logout':
        $lang_string['title'] = "Sair";
        $lang_string['error'] = "<h2>At� mais!</h2>Voc� n�o est� logado. (J� n�o estava antes da mesma forma!)<p />";
        $lang_string['error_no_cookie'] = "<h2>At� mais!</h2>Voc� n�o est� logado. (Nenhum cookie foi encontrado. J� n�o estava antes da mesma forma!)<p />"; // New 0.5.0
        $lang_string['success'] = "<h2>At� mais!</h2>Voc� saiu do blog.<p />(Redirecionando para o In�cio em 5 segundos.)<p />";
        break;

      case 'forms':
        $lang_string['title'] = "";
        $lang_string['instructions'] = "";
        // Error Response
        $lang_string['error'] = "<h2>Ops!</h2>As informa��es n�o foram salvas. Ocorreu um problema enquanto seus dados eram salvos your entry.<br /><br />Resposta do Servidor:<br />";
        break;

      case 'set_login':
        $lang_string['title'] = "Alterar Nome de Usu�rio &amp; Senha";
        $lang_string['instructions'] = "Use o formul�rio abaixo para alterar seu Nome de Usu�rio e/ou Senha. Digite o Nome de Usu�rio e Senha que voc� quer usar.";
        $lang_string['username'] = "Nome de Usu�rio:";
        $lang_string['password'] = "Senha:";
        $lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
        // Success
        $lang_string['success'] = "<h2>Sucesso!</h2>Seu Nome de Usu�rio e/ou Senha est�o ativos. Boa navega��o!<p />";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>Ops!</h2>As informa��es n�o foram salvas. Ocorreu um problema enquanto seus dados eram salvos your Username and/or Password.<br /><br />Resposta do Servidor:<br />";
        $lang_string['form_error'] = "Favor preencher os campos Nome de Usu�rio  e Senha.";
        $lang_string['explanation'] = "Em vers�es recentes, sua estrutura de senha foi alterada.  N�o existe mais forma de atualizar senhas
          e/ou logins dentro do c�digo do blog.  Para alterar sua senha, exclua o arquivo /config/password.php e certifique-se que os arquivos
          install*.php existem no seu servidor.  Uma vez feito isso, atualize esta p�gina (ou saia).  Aparecer� para voc� o mesmo script
          que gera sua senha, da mesma forma que aconteceu quando o blog foi criado.";  // New for 0.4.6
        break;

      case 'install00':
        $lang_string['title'] = "Bem-vindo";
        $lang_string['instructions'] = "Obrigado por escolher o Simple PHP Blog!";
        $lang_string['blog_choose_language'] = "Escolha a lingua:";
        $lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
        break;

      case 'install01':
        $lang_string['title'] = "Bem-vindo";
        $lang_string['instructions'] = "
        Obrigado por escolher o Simple PHP Blog!<br /><br />Simple PHP Blog � um sistema de blog r�pido e leve. Ele requer o PHP 4.1 ou posterior, e permiss�es de escrita no seu servidor. Todas as informa��es s�o salvas em arquivos simples, dessa forma, nenhum banco de dados se faz necess�rio.<br /><br />
        Para come�ar, o Simple PHP Blog precisa criar tr�s pastas (<b>config</b>, <b>content</b>, e <b>images</b>) as quais guardar�o suas informa��es. Depois disso, voc� criar� sua senha e j� poder� ent�o usar o sistema.<br /><br />
        <b>Clique abaixo para iniciar a instala��o:</b>";
        $lang_string['begin'] = "[ Iniciar Instala��o ]";
        break;

      case 'install02':
        $lang_string['title'] = "Instala��o";
        $lang_string['instructions'] = "Tentando criar as pastas <b>config</b>, <b>content</b>, e <b>images</b>:";
        $lang_string['folder_exists'] = "Ok! As pastas j� existem. Nenhuma altera��o foi feita...";
        $lang_string['folder_failed'] = "Ops! N�o foi poss�vel criar as pastas...";
        $lang_string['folder_success'] = "Sucesso! Pastas criadas...";
        // Help
        $lang_string['help'] = "
        <h2>Ops!</h2>
        N�o foi poss�vel criar uma ou mais pastas!<br /><br />Isto pode ter ocorrido pelos seguintes motivos:<br />
        <ol>
        <li><b>Permiss�es</b> n�o deixam tem o acesso de leitura e/ou grava��o.</li>
        <li>Os <b>UID</b>'s (ID's dos usu�rios) de todos os arquivos e pastas n�o conferem.</li>
        </ol>
        Siga as instru��es de reparo abaixo e clique em <b>Tentar Novamente</b>:<br />
        <ol>
        <li>Crie manualmente as segunties pastas: <b>config</b>, <b>content</b>, e <b>images</b>.</li>
        <li>Habilite as <b>Permiss�es de Escrita</b> nas pastas: No seu programa de FTP, Dono, Usu�rio, e Todos deve haver os acessos de <b>Leitura</b> e <b>Escrita</b>. <i>(Talvez voc� tenha que entrar em contato com seu provedor para alterar isso...)</i></li>
        <li>Certifique-se de que os UID's de todos seus arquivos e pastas s�o iguais. <i>(Talvez voc� tenha que entrar em contato com seu provedor para alterar isso...)</i></li>
        </ol>";
        $lang_string['try_again'] = "[ Tentar Novamente ]";
        // Success
        $lang_string['success'] = "<h2>Sucesso!</h2>Pastas criadas com sucesso!<p /><b>Clique abaixo para continuar:</b>";
        $lang_string['continue'] = "[ Continuar ]";
        break;

      case 'install03':
        $lang_string['supported'] = "<b>Seu web-server suporta os seguintes esquemas de encripta��o:</b>";
        $lang_string['standard'] = "Encripta��o DES Padr�o: ";
        $lang_string['extended'] = "Encripta��o DES Extendida: ";
        $lang_string['MD5'] = "Encripta��o MD5: ";
        $lang_string['blowfish'] = "Encripta��o Blowfish: ";
        $lang_string['enabled'] = "habilitado";
        $lang_string['disabled'] = "desabilitado";
        $lang_string['using_standard'] = "<b>Usando Encripta��o DES Padr�o...</b>";
        $lang_string['using_extended'] = "<b>Usando Encripta��o DES Extendida...</b>";
        $lang_string['using_MD5'] = "<b style=\"color: green;\">Usando Encripta��o MD5...</b>";
        $lang_string['using_blowfish'] = "<b style=\"color: green;\">Usando Encripta��o Blowfish...</b>";
        $lang_string['using_unknown'] = "<b>Usando Encripta��o Desconhecida...</b>";
        $lang_string['salt_length'] = " <i>(Tamanho do salto = %string)</i><br />";
        $lang_string['title'] = "Criar Nome de Usu�rio &amp; Senha";
        $lang_string['instructions'] = "Use o formul�rio abaixo para criar o Nome de Usu�rio e a Senha.";
        $lang_string['username'] = "Nome de Usu�rio:";
        $lang_string['password'] = "Senha:";
        $lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
        // Success
        $lang_string['success'] = "<h2>Parab�ns!</h2>Voc� est� logado. Clique abaixo para entrar na p�gina de configura��o, onde voc� dar� um nome para o seu Blog. Boa Navega��o!<p />";
        $lang_string['btn_setup'] = "[ Configurar ]";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>Ops!</h2>As informa��es n�o foram salvas. Ocorreu um problema enquanto seus dados eram salvos your Username and/or Password.<br /><br />Resposta do Servidor:<br />";
        $lang_string['form_error'] = "Favor preencher os campos Nome de Usu�rio e Senha.";
        break;

      case 'install04':
        $lang_string['title'] = "Criar arquivo de senha";
        $lang_string['instructions'] = "Essa � a parte manual:<br />
        <ol>
        <li>Abra um editor de texto. <i>(Bloco de Notas, Word Pad, Word, BBEdit, Pico, VI, etc...)</i></li>
        <li>Cria um novo arquivo de texto.</li>
        <li>Copia e cole o c�digo da caixa abaixo no seu arquivo.</li>
        <li>Salve seu arquivo com o nome de <b>password.php</b> <i>(Certifique-se de salv�-lo no modo <b>texto</b>.)</i></li>
        <li>Abra seu aplicativo FTP.</li>
        <li>Envie seu novo arquivo <b>password.php</b> na pasta <b>config</b> do seu web site.</li>
        <li>Exclua o arquivo <b>password.php</b> do seu disco r�gido.</li>
        </ol>
        ";
        $lang_string['information'] = "<i>Nota: Se voc� precisar zerar seu usu�rio e senha (provavelmente por esquec�-los), exclua o arquivo <b>password.php</b> da pasta <b>config</b> no seu website. Na pr�xima vez que entrar no seu site, voc� ser� conduzido pelo processo de cria��o de senha novamente...</i>";
        $lang_string['code'] = "C�digo para o arquivo <b>password.php</b>:";
        $lang_string['continue'] = "[ Continuar ]";
        break;

      case 'install05':
      case 'install06':
        $lang_string['title'] = "Login";
        $lang_string['instructions'] = "Favor digitar seu Nome de Usu�rio e Senha abaixo";
        $lang_string['username'] = "Nome de usu�rio:";
        $lang_string['password'] = "Senha:";
        $lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
        // Success
        $lang_string['success'] = "<h2>Parab�ns!</h2>Voc� est� logado.<p />
        Clique abaixo para visitar a p�gina de <b>Configura��es</b>, onde voc� poder� personalizar seu novo Blog.<p />
        <i>Nota: Agora que voc� completou o processo de instala��o, � recomend�vel que voc� exclua os arquivos <b>installXX.php</b> do seu web site. (ex. install00.php at� install06.php)</i><p />";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>Ops!</h2>Voc� n�o est� logado. Por favor, verifique se voc� digitou corretamente o Nome de Usu�rio e Senha e tente novamente.<p />";
        $lang_string['form_error'] = "Favor preencher os campos Nome de Usu�rio e Senha.";
        // Success
        $lang_string['btn_setup'] = "[ Configura��es ]";
        $lang_string['btn_try_again'] = "[ Tentar novamente ]";
        break;

      case 'setup':
        $lang_string['title'] = "Preferencias";
        $lang_string['instructions'] = "Voc� pode mudar o nome do seu blog, e suas informa��es pessoais abaixo.";
        $lang_string['blog_title'] = "Nome do Blog:";
        $lang_string['blog_header'] = "URL da Imagem do Cabe�alho: images/blogheader.jpg (Deixe em branco para usar o padr�o).";
        $lang_string['blog_author'] = "Autor:";
        $lang_string['blog_email'] = "Email: (Para mais de um email separe por v�rgula - em branco desabilita a op��o Contato)"; // Updated 0.4.7
        $lang_string['blog_avatar'] = "URL do Avatar: images/avatar.jpg (Deixe em branco para nenhum)."; // <-- New 0.4.7
        $lang_string['blog_footer'] = "Rodap�:";
        $lang_string['blog_choose_language'] = "Escolha uma lingua:";
        $lang_string['blog_enable_comments'] = "Habilitar Coment�rios";
        $lang_string['blog_comments_popup'] = "Abrir Coment�rios em Popup";
        $lang_string['blog_enable_start_category'] = "Usar categoria espec�fica para a primeira p�gina dos posts: "; // Now for 0.5.1
        $lang_string['blog_search_top'] = "Mostrar Pesquisa nos Posts (ao inv�s da barra lateral)"; // New for 0.5.0
        $lang_string['blog_enable_static_block'] = "Mostrar um bloco definido como o primeiro Post do Blog: "; // New for 0.5.0
        $lang_string['static_block_border'] = 'Mostrar bordas'; // New for 0.5.0
        $lang_string['static_block_noborder'] = 'Sem bordas'; // New for 0.5.0
        $lang_string['blog_enable_voting'] = "Permitir que os usu�rios avaliem os Posts";
        $lang_string['blog_enable_cache'] = "Habilitar Cache nos Posts (pode melhorar a velocidade em alguns servidores)"; // New for 0.4.6
        $lang_string['blog_enable_calendar'] = "Habilitar Calend�rio"; // New for 0.4.6
        $lang_string['blog_enable_archives'] = "Habilitar Bloqueador de Arquivos"; // New for 0.4.8
        $lang_string['blog_enable_counter'] = "Habilitar Contador na Barra Lateral"; // New for 0.4.8
        $lang_string['blog_counter_hours'] = "N�mero de horas de atraso antes das contagens iniciarem novamente (baseado em um ip espec�fico):"; // New for 0.4.8
        $lang_string['blog_enable_login'] = "Habilitar o Link de Login (Favor adicionar \"login.php\" aos favoritos primeiro...)"; // New for 0.4.8
        $lang_string['blog_enable_title'] = "Habilitar o t�tulo em texto do cabe�alho (Remova caso o t�tulo j� estaja escrito no gr�fico do cabe�alho)"; // New for 0.4.6
        $lang_string['blog_enable_permalink'] = "Habilitar Permalink nos Posts"; // New for 0.4.6
        $lang_string['blog_enable_capcha'] = "Habilitar Anti-Spam"; // New for 0.4.8
        $lang_string['blog_footer_counter'] = "Habilitar Contador no Rodap�"; // New for 0.4.8
        $lang_string['blog_enable_capcha_image'] = "Imagens Anti-Spam (Somente bibliotecas GD) / Campo Texto Anti-Spam"; // New for 0.4.8
        $lang_string['blog_enable_stats'] = "Habilitar a Op��o Estat�sticas ao Menu"; // New for 0.4.7
        $lang_string['blog_enable_lastcomments'] = "Habilitar Listagem Dos Coment�rios Mais Recentes"; // New for 0.4.7
        $lang_string['blog_enable_lastentries'] = "Habilitar Listagem Dos Posts Mais Recentes"; // New for 0.4.7
        $lang_string['blog_email_notification'] = "Enviar notifica��o via email quando algum coment�rio for feito";
        $lang_string['blog_send_pings'] = "Enviar weblog &quot;pings&quot;";
        $lang_string['blog_ping_urls'] = "URL Completa (ex. http://rpc.weblogs.com/RPC2) do servi�o a ser feito o &quot;ping&quot;.<br />(Voc� pode insrir mais de um endere�o separados por virgulas.)";
        $lang_string['blog_trackback_about'] = "Trackback prov�m um m�todo de notifica��o entre blogs. Permita outro
          blog saber que voc� est� mantendo um link deles enviando a eles um ping trackback. Veja quem mant�m um link
          do seu blog recebendo pings trackback deles.<br />
           Ou voc� pode inserir as URIs para ping manualmente, ou tentar fazer isso automaticamente atrav�s do
           m�todo de reconhecimento autom�tico.";
        $lang_string['blog_trackback_enabled'] = "Habilitar trackbacks no meu blog";
        $lang_string['blog_trackback_auto_discovery'] = "Habilitar m�todo de reconhecimento autom�tico quando criar um Post contendo URLs";
        $lang_string['blog_max_entries'] = "M�ximo de Posts a serem exibidos:";
        $lang_string['blog_comment_tags'] = "???Tags to Allow in Comments:";
        $lang_string['blog_gzip_about'] = "
          Desde o PHP 4.0.4, o PHP tem o recurso de ler e escrever arquivos compactados gzip (.gz),
          para economizar espa�o em disco. Tamb�m poss�vel compactar a sa�da de HTTP para os browsers
          que suportem compacta��o gzip, salvando ent�o tr�fego de banda.<br />
          <br />
          Suporte ao Zlib no PHP n�o � habilitado por padr�o. Se as op��es estiverem desabilitadas,
          ent�o sua instala��o de PHP n�o suporta extens�o Zlib.";
        $lang_string['blog_enable_gzip_txt'] = "Habilitar Compacta��o GZIP Para os Arquivos de Base de Dados";
        $lang_string['blog_enable_gzip_output'] = "Habilitar Compacta��o GZIP para a Sa�da HTTP";
        $lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Ops!</h2>As informa��es n�o foram salvas. Ocorreu um problema enquanto seus dados eram salvos.<br /><br />Resposta do Servidor:<br />";
        $lang_string['success'] = "<h2>Preferencias Salvas!</h2>As Informa��es foram salvas com sucesso."; // New for 0.4.8.1
        $lang_string['form_error'] = "Favor preencher os Campos T�tulo e Autor.";
        $lang_string['label_entry_order'] = "Ordem dos Posts:";
        $lang_string['select_new_to_old'] = "Listar os Mais Novos Antes";
        $lang_string['select_old_to_new'] = "Listar os Mais Antigos Antes";
        $lang_string['label_comment_order'] = "Ordem do Coment�rio:";
        $lang_string['cal_sunday'] = "Domingo";
        $lang_string['cal_monday'] = "Segunda-feira";
        $lang_string['label_calendar_start'] = "Dia de In�cio da Semana no Calend�rio";
        $lang_string['title_sidebar'] = "Barra Lateral"; // New in 0.4.7
        $lang_string['title_comments'] = "Coment�rios"; // New in 0.4.7
        $lang_string['title_trackback'] = "Trackbacks"; // New in 0.4.7
        $lang_string['title_compression'] = "Compacta��o"; // New in 0.4.7
        $lang_string['title_entries'] = "Posts"; // New in 0.4.7
        $lang_string['title_general'] = "Geral"; // New in 0.4.7
        $lang_string['title_language'] = "L�ngua"; // New in 0.4.7
        $lang_string['blog_comment_days_expiry'] = "Coment�rios Permitidos por Quantos Dias? (0 para n�o expirar)"; // New in 0.4.8
        $lang_string['blog_comments_moderation'] = "Coment�rios nos Posts precisam ser aprovados por um usu�rio logado antes de se
          tornar p�blico (sempre vis�vel para um usu�rio logado)"; // New in 0.5.0
        $lang_string['comment_moderation'] = "Op��es de Modera��o"; // New in 0.5.0
        break;
      case 'comment_moderation':
        $lang_string['title'] = "Coment�rios n�o moderados";
        $lang_string['instructions'] = "Esta � uma lista de todos os coment�rios n�o dispon�veis para usu�rios que n�o est�o
          logados por n�o teram sido aprovados pelo moderados.";
        $lang_string['header'] = "Listagem de Modera��o";
        $lang_string['enteredby'] = "Inserido Por: ";
        $lang_string['entrydate'] = "Data do Post: ";
        $lang_string['blogentrytitle'] = "T�tulo do Post: ";
        $lang_string['enteredcontent'] = "Conte�do: ";
        $lang_string['totalunmodded'] = " item(s) esperando por atua��o do moderados.";
        $lang_string['mod_approve'] = "[ Aprovar ] ";
        $lang_string['mod_delete'] = "[ Excluir ]";
        break;
      case 'moderation':
        $lang_string['title'] = "Prefer�ncias de Modera��o";
        $lang_string['instructions'] = "Voc� pode alterar as listas de auto-modera��o aqui.";
        $lang_string['submit_btn'] = "&nbsp;Salvar Configura��es de Modera��o&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Ops!</h2>As informa��es n�o foram salvas. Ocorreu um problema enquanto seus dados eram salvos.<br /><br />Resposta do Servidor:<br />";
        $lang_string['success'] = "<h2>Preferencias Salvas!</h2>As informa��es foram salvas com sucesso."; // New for 0.4.8.1
        $lang_string['banned_address_list_title'] = "<h2>Endere�os de IP Banidos</h2>";
        $lang_string['banned_address_list'] = "Abaixo segue a lista de endere�os IPs que foram banidos de incluir coment�rios. Cada ip est� em linhas separadas e precisam ser n�meros (sem nomes DNS). Quando logado, IPs podem ser banidos diretamente na visualiza��o dos coment�rios.";
        $lang_string['banned_word_list_title'] = "<h2>Plavras Banidas</h2>";
        $lang_string['banned_word_list'] = "Abaixo segue a lista de palavras que n�o s�o permitidas no texto ou na url. Cada palavra ou grupo de palavras deve estar em linhas separadas. ???The comments will attempt to match each line exactly in order to enact the ban.";
        break;
      case 'trackbacks':
        // Trackbacks
        $lang_string['title'] = "Trackbacks";
        $lang_string['header'] = "URL de Trackback para este post:";
        $lang_string['delete_btn'] = "excluir";
        // Error Response
        $lang_string['error_add'] = "Erro salvando os dados de trackback.";
        $lang_string['error_delete'] = "<h2>Ops!</h2>O trackback n�o foi exclu�do. Ocorreu um problema enquanto excluia o trackback.<br /><br />Resposta do Servidor:<br />";
        $lang_string['success_delete'] = "<h2>Trackback Exclu�do!</h2>O link de trackback foi exclu�do."; // New for 0.4.8.1
        break;

      case 'options':
        $lang_string['title'] = "Op��es";
        $lang_string['instructions'] = "Use o formul�rio abaixo para customizar a disposi��o de data e hora para os coment�rios do blog e dos posts. Voc� pode selecionar a op��o de 12 ou 24 horas. Formato de data curta ou longa. E as �reas de <b>Pr�-Visualiza��o</b> s�o atualizadas automaticamente para mostrar para voc� como esta formata��o ficar�.";
        // Long Date
        $lang_string['ldate_title'] = "Formato de Data Longa:";
        $lang_string['weekday'] = "Dia da Semana";
        $lang_string['month'] = "M�s";
        $lang_string['day'] = "Dia";
        $lang_string['year'] = "Ano";
        $lang_string['none'] = "Nenhum";
        // Short Date
        $lang_string['sdate_title'] = "Formato de Data Curta:";
        $lang_string['s_month'] = "M�s";
        $lang_string['s_mon'] = "MMM";
        $lang_string['s_day'] = "Day";
        $lang_string['s_year'] = "Year";
        $lang_string['zero_day'] = "Come�ar dia com zero";
        $lang_string['show_century'] = "Ano com quatro d�gitos";
        // Time
        $lang_string['time_title'] = "Formato de Hora:";
        $lang_string['12hour'] = "12-horas";
        $lang_string['24hour'] = "24-horas";
        $lang_string['before_noon'] = "Antes do meio-dia";
        $lang_string['after_noon'] = "Depois do meio-dia";
        // Date
        $lang_string['date_title'] = "Formato da Data:";
        $lang_string['long_date'] = "Data Longa";
        $lang_string['short_date'] = "Data Curta";
        $lang_string['time'] = "Hora";
        // Menu
        $lang_string['menu_title'] = "Formato da Data do Menu:";
        $lang_string['long_date'] = "Data Longa";
        $lang_string['short_date'] = "Data Curta";
        // Used in multiple places
        $lang_string['zero_day'] = "Come�ar dia com zero";
        $lang_string['zero_month'] = "Come�ar m�s com zero";
        $lang_string['zero_hour'] = "Come�ar hora com zero";
        $lang_string['separator'] = "Separador:";
        $lang_string['preview'] = "Pr�-visualiza��o:";
        $lang_string['server_offset'] = "Diferen�a no Servidor:";
        // Buttons
        $lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Ops!</h2>As informa��es n�o foram salvas. Ocorreu um problema enquanto seus dados eram salvos.<br /><br />Resposta do Servidor:<br />";
        $lang_string['success'] = "<h2>Op��es Salvas!</h2>As informa��es foram salvas com sucesso."; // New for 0.4.8.1
        break;

      case 'themes':
        $lang_string['title'] = "Temas";
        $lang_string['instructions'] = "Use a caixa de op��es para selecionar um tema diferente.";
        // Themes
        $lang_string['choose_theme'] = "Temas:";
        // Buttons
        $lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Ops!</h2>As informa��es n�o foram salvas. Ocorreu um problema enquanto seus dados eram salvos.<br /><br />Resposta do Servidor:<br />";
        $lang_string['success'] = "<h2>Tema selecionado!</h2>As informa��es foram salvas com sucesso."; // New for 0.4.8.1
        break;

      case 'upload_img':
        $lang_string['title'] = "Carregar Imagem";
        $lang_string['instructions'] = "Clique no bot�o abaixo para selecionar um arquivo para carregar.";
        $lang_string['select_file'] = "Selecione o arquivo:";
        $lang_string['upload_btn'] = "Carregar";
        // Error Response
        $lang_string['error'] = "<h2>Ops!</h2>N�o foi poss�vel carregar a imagem. Mais informa��es:<br /><br />Resposta do Servidor:<br />";
        $lang_string['success'] = "<h2>Imagem Carregada!</h2>A imagem foi salva com sucesso."; // New for 0.4.8.1
        break;

      case 'search':
        $lang_string['title'] = "Resultado(s) da pesquisa";
        $lang_string['instructions'] = "Resultador da pesquisa por <b>%string</b>:";
        $lang_string['not_found'] = "Nenhum resultado encontrado";
        break;

      case 'contact':
        $lang_string['contact_capcha'] = "Anti-Spam: Digite "; // 0.4.2
        $lang_string['title'] = "Contato";
        $lang_string['instructions'] = "Preencha o formul�rio:";
        $lang_string['form_error'] = "Favor preencher os campos Assunto e Coment�rio.";
        $lang_string['name'] = "Nome:";
        $lang_string['email'] = "Email:";
        $lang_string['subject'] = "Assunto:";
        $lang_string['comment'] = "Coment�rio:";
        $lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
        $lang_string['success'] = "<h2>Sucesso!</h2>Sua mensagem foi enviada corretamente.<p />";
        $lang_string['failure'] = "<h2>Erro!</h2>Sua mensagem n�o foi enviada. Prov�velmente o Anti Spam n�o foi digitado corretamente.<p />";
        $lang_string['contactsent'] = "Contato enviado por: ";  // New for 0.4.6
        $lang_string['IPAddress'] = "Endere�o IP:";  // New for 0.4.6
        $lang_string['useragent'] = "User Agent:";  // New for 0.4.6
        $lang_string['wrote'] = "<i>%s, %s escreveu:</i><br />\n<br />\n%s"; // New for 0.4.6.2
        break;

      case 'stats':
        $lang_string["title"] = "Estat�sticas";
        $lang_string["general"] = "Gerais";
        $lang_string["entry_info"] = "<b>%s</b> posts usando <b>%s</b> palavras armazenados em <b>%s</b> bytes";
        $lang_string["comment_info"] = "<b>%s</b> coment�rios usando <b>%s</b> palavras armazenados em <b>%s</b> bytes";
        $lang_string["trackback_info"] = "<b>%s</b> trackbacks armazenados em <b>%s</b> bytes";
        $lang_string["static_info"] = "<b>%s</b> p�ginas fixas usando <b>%s</b> palavras armazenadas em <b>%s</b> bytes";
        $lang_string["most_viewed_entries"] = "10 posts mais visualizados";
        $lang_string["most_commented_entries"] = "10 posts mais comentados";
        $lang_string["most_trackbacked_entries"] = "10 posts com mais vinculos externos de trackbacks";
        $lang_string['vote_info'] = "<b>%s</b> votos armazenados em <b>%s</b> bytes"; // 0.4.1
        $lang_string["most_voted_entries"] = "10 posts mais votados"; // 0.4.1
        $lang_string["most_rated_entries"] = "10 posts mais avaliados"; // 0.4.1
        break;

      case 'errorpage-nocookies':  // New for 0.4.6
        $lang_string["title"] = 'Erro de HTTP 403.8 - Acesso Negado � P�gina/Fun��o';
        $lang_string["errorline1"] = 'A p�gina ou fun��o que voc� est� tentando processar requer o uso de cookies.';
        $lang_string["errorline2"] = 'Restaure a funcionalidade de cookies do seu browser ou software de prote��o e repita o procedimento.';
        $lang_string["clientid"] = 'ID do Cliente: ';
        break;

      case 'errorpage':  // New for 0.4.6
        $lang_string["403.8"] = 'HTTP Error 403.8 - Acesso Negado � P�gina/Fun��o';
        $lang_string["404"] = 'HTTP Error 404 - Page/Fun��o N�o Existe';
        $lang_string["error_404"] = 'A p�gina ou fun��o que voc� est� chamando n�o existe.';
        $lang_string["error_javascript"] = 'A p�gina ou fun��o que voc� enviou requer javascript para funcionar corretamente.';
        $lang_string["error_emailnotsent"] = 'A mensagem que voc� tentou enviar falhou.';
        $lang_string["error_emailnotsentcapcha"] = 'A mensagem que voc� tentou enviar falhou porque os dados de anti-spam est�o incorretos ou faltando.';
        $lang_string["clientid"] = 'ID do Cliente: ';
        break;

      case 'emoticons':  // New for 0.4.7
        $lang_string['title'] = "Gerenciar Emoticons";
        $lang_string['instructions'] = "
          Veja os emoticons que voc� quer usar. Escreva no campo as Tags que voc�
          quer que seja subtitu�do pela imagem. Multiplas tags podem ser usadas,
          somente separe-as por espa�os.<br /><br />

          Por exemplo:<br />
          :) :-) :SMILE: :HAPPY:<br /><br />

          <i>(� altamente recomendado que voc� crie Tags maiores que 2 caracteres,
          ou ent�o substitui��es inesperadas podem acontecer.)</i>";
        $lang_string["upload_instructions"] = 'Carregar novo emoticon:';
        $lang_string["upload_success"] = 'Sucesso! Imagem carregada com sucesso!';
        $lang_string["upload_error"] = 'Erro! Imagem n�o foi carregada.';
        $lang_string["upload_invalid"] = 'Erro! Arquivo de imagem inv�lido. A imagem precisa ser png, jpg, ou gif.';
        $lang_string["save_success"] = 'Prefer�ncias sobre Emoticons salvas com sucesso!';
        $lang_string["save_error"] = 'Erro! Prefer�ncia sobre Emoticons n�o foram salvas.';
        $lang_string["save_button"] = 'Salvar Emoticons';
        break;

      case 'archives': // New for 0.4.8
        $lang_string['title'] = "Arquivos";
        $lang_string['showall'] = "Mostrar Tudo";
        break;

      case 'manage_users':
        $lang_string['title'] = "Gerencias Usu�rios Alter�veis";
        $lang_string['instructions'] = "Incluir, Alterar, ou Excluir usu�rios que n�o s�o administradores mas tem permiss�o para criar posts e/ou moderar coment�rios.";
        $lang_string['fulladminerror'] = "Voc� precisa ser o administrador geral para fazer isso!";
        $lang_string['header_user'] = "Usu�rio: ";
        $lang_string['header_property'] = "Propriedade";
        $lang_string['header_value'] = "Valor";
        $lang_string['prop_username'] = "Usu�rio:";
        $lang_string['prop_fullname'] = "Nome P�blico:";
        $lang_string['prop_password'] = "Senha:";
        $lang_string['prop_email'] = "Email:";
        $lang_string['prop_avatar'] = "URL do Avatar:";
        $lang_string['prop_state'] = "Ativo?";
        $lang_string['prop_sec_Moderate'] = "Modera Coment�rios?";
        $lang_string['prop_sec_Delete'] = "Exclui Posts do Blog?";
        $lang_string['prop_sec_Edit'] = "Altera Qualquer Post?";
        $lang_string['btn_SaveChanges'] = "Salvar Mudan�as";
        $lang_string['btn_CreateUser'] = "Criar Usu�rio";
        $lang_string['btn_Cancel'] = "Cancelar";  
        $lang_string['grid_header'] = "Lista de Usu�rios";
        $lang_string['grid_login'] = 'Login';
        $lang_string['grid_email'] = 'Email';
        $lang_string['grid_avatar'] = 'Avatar';
        $lang_string['grid_state'] = 'Ativo?';
        $lang_string['btn_modify'] = 'Alterar';
        $lang_string['btn_delete'] = 'Excluir';
        $lang_string['create_user'] = 'Criar Novo Usu�rio';
        break;

      default:
        break;
    }
  }
?>

 	  	 
