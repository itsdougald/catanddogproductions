<?php
  // Bulgarian Language File
  // (c) 2004 Alexander Palmo, apalmo <at> bigevilbrain <dot> com 
  // Edits: 26.09.2007 Peicho Dimitrov info <at> alein <dot> org
  // ��� ���� ���������� ������, ��������� �� �� ;)
  // ������� � �� 98%

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
    $lang_string['menu_links'] = "������";
    $lang_string['menu_home'] = "������";
    $lang_string['menu_contact'] = "������� ������";
    $lang_string['menu_stats'] = "����������";
    $lang_string['menu_calendar'] = "��������"; // New for 0.4.8
    $lang_string['menu_archive'] = "�����";
    $lang_string['menu_viewarchives'] = "��� �����";
    $lang_string['menu_menu'] = "����";
    $lang_string['menu_add'] = "������ ������";
    $lang_string['menu_add_static'] = "������ ��������";
    $lang_string['menu_upload'] = "������ �����������";
    $lang_string['menu_setup'] = "���������";
    $lang_string['menu_categories'] = "���������";
    $lang_string['menu_info'] = "���� ������";
    $lang_string['manage_users'] = "�������� �� �����������";
    $lang_string['manage_php_config'] = "PHP ������������"; // New in 0.5.0.1
    $lang_string['menu_options'] = "���� &amp; ���";
    $lang_string['menu_themes'] = "����";
    $lang_string['menu_colors'] = "�������";
    $lang_string['menu_change_login'] = "����� �� �����";
    $lang_string['menu_logout'] = "�����";
    $lang_string['menu_login'] = "����";
    $lang_string['menu_most_recent'] = "�������� ���������";
    $lang_string['menu_most_recent_entries'] = "�������� ������";
    $lang_string['menu_most_recent_trackback'] = "�������� ���������";
    $lang_string['menu_add_block'] = "�������";
    $lang_string['menu_emoticons'] = "���������"; // New for 0.4.7
    $lang_string['menu_avatar'] = "������"; // New for 0.4.7
    $lang_string['menu_moderation'] = "IP ���������"; // New for 0.4.9
    $lang_string['menu_commentmoderation'] = "������ ���������"; // New for 0.5.0
	$lang_string['menu_random_entry'] = "���������� ������"; // New for 0.5.2
	$lang_string['menu_plugins'] = "�������"; // New for 0.5.2
    $lang_string['notice_moderator1'] = "��� ����� ";
    $lang_string['notice_moderator2'] = " ��������(�) ������ ���������.";
    $lang_string['notice_loggedin'] = "� ������� ��� ������.";
    

    // Counter
    $lang_string['counter_today'] = "����:"; // New for 0.4.8
    $lang_string['counter_yesterday'] = "�����:"; // New for 0.4.8
    $lang_string['counter_totalsidebar'] = "������:"; // New for 0.4.8
    $lang_string['counter_title'] = "���������"; // New for 0.4.8

    // Other
    $lang_string['home'] = '��� ��������';
    $lang_string['nav_next'] = '�������� ��������';
    $lang_string['nav_back'] = '�������� ��������';
    $lang_string['nav_first'] = '�����'; // New in 0.5.0.1
    $lang_string['nav_last'] = '��������'; // New in 0.5.0.1
    $lang_string['search_title'] = '�������';
    $lang_string['search_go'] = '�����';
    $lang_string['page_generated_in'] = '���������� ������ �� %s �������';
    $lang_string['counter_total'] = '���������: '; // New in 0.4.8
    $lang_string['read_more'] = '������ �� ������...'; // New in 0.4.8
    $lang_String['randomentry'] = '���������� ������'; // New in 0.5.0.1
    $lang_string['randomquote'] = '���������� ������'; // New in 0.5.0.1

    // SB Functions
    $lang_string['sb_months'] = array( '������', '��������', '����', '�����', '���', '���', '���', '������', '���������', '�������', '�������', '��������' );
    $lang_string['sb_default_title'] = '��� ���';
    $lang_string['sb_default_author'] = '��� �����';
    $lang_string['sb_default_footer'] = '��� ��������';

    $lang_string['sb_edit'] = '����������';
    $lang_string['sb_delete'] = '������';
    $lang_string['sb_permalink'] = '����';
    $lang_string['sb_trackback'] = '���������';
    $lang_string['sb_postedby'] = '����������� ��'; // 0.5.0
    $lang_string['sb_admin'] = '�������������'; // 0.5.0
    $lang_string['sb_relatedlink'] = '������� ����'; // <-- New in 0.4.6

    $lang_string['sb_add_comment_btn'] = '������ ��������';
    $lang_string['sb_read_entry_btn'] = '��� ������'; // 0.5.0
    $lang_string['sb_comment_btn_number_first'] = true;
    $lang_string['sb_comment_btn'] = '��������';
    $lang_string['sb_comment_view'] = '���'; // 0.5.0
    $lang_string['sb_comments_plural_btn_number_first'] = true;
    $lang_string['sb_comments_plural_btn'] = '���������';
    $lang_string['sb_comments_plural_view'] = '����������'; // 0.5.0

    // ( 1 view )
    $lang_string['sb_view_counter_pre'] = '';
    $lang_string['sb_view_counter_post'] = ' �������';

    // ( 2 views )
    $lang_string['sb_view_counter_plural_pre'] = '';
    $lang_string['sb_view_counter_plural_post'] = ' ��������';

    $lang_string['sb_add_link_btn'] = '������ ������';
    $lang_string['sb_rate_entry_btn'] = '������ �� ������';

    // Entry Text Editor
    if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
      $lang_string['label_subject'] = "�������:";
      $lang_string['label_insert'] = "��������� �����������:";
      $lang_string['btn_bold'] = " b ";
      $lang_string['btn_italic'] = " i ";
      $lang_string['btn_image'] = "img";
      $lang_string['btn_url'] = "url";
      $lang_string['btn_readmore'] = "������..."; // 0.4.8
      $lang_string['view_images'] = "��������� ����������� �����������";
      $lang_string['label_entry'] = "�����:";
      $lang_string['btn_preview'] = "&nbsp;���������&nbsp;";
      $lang_string['btn_post'] = "&nbsp;�������&nbsp;";
      $lang_string['chk_visiblemenu'] = "������ (������ � ������)";
      $lang_string['file_name'] = "��� �� ��������� ���� (��� ��������� ��� ������� ����������)";

      // Javascript Strings
      $lang_string['insert_styles'] = "������ ���� �� ������:";
      $lang_string['insert_image'] = "������ ����� URL �� �������������:";
      $lang_string['insert_url1'] = "������ ������, ����� �� �� ������� ��� �������� (��������������):";
      $lang_string['insert_url2'] = "������ ����� URL �� ��������:";
      $lang_string['insert_url3'] = "O����� URL � ��� �������� (��������������):";
      $lang_string['form_error'] = "����, ������� �������� �� ���� � ����������.";

      // More Javascript Strings
      $lang_string['insert_image_optional'] = '��������������:';
      $lang_string['insert_image_width'] = '������ (��������������):';
      $lang_string['insert_image_height'] = '�������� (��������������):';
      $lang_string['insert_image_popup'] = '��� � ����� ������ � ��� �������� ��� �������� (��������������):';
      $lang_string['insert_image_float'] = '�������� (��������������):';

      $lang_string['day'] = '���';
      $lang_string['month'] = '�����';
      $lang_string['year'] = '�����';
      $lang_string['hour'] = '���';
      $lang_string['minute'] = '������';
      $lang_string['second'] = '�������';
    }

    switch ($page) {
      case 'add':
        // Add Entry
        $lang_string['title'] = "�������� �� ������";
        $lang_string['instructions'] = "������� �������, ���� ���������� ������ <strong>'�������'</strong> �� ������������� ������� �� �������� ��� <strong>'�������'</strong> �� ����������� �������� �� �����.";
        $lang_string['title_ad'] = "�������� �������� �� ���������";
        $lang_string['instructions_ad'] = "These are the Auto-Discovered URIs you're about to ping. If you do not want to ping a certain URI, uncheck it below. Then press the 'OK' button to ping the checked URIs or press 'Cancel' to not ping at all.";
        $lang_string['label_tb_ping'] = "Trackback ping(s) to send (comma separated)";
        $lang_string['label_tb_autodiscovery'] = "����������� ���������";
        $lang_string['label_relatedlink'] = "������� ����";
        $lang_string['label_categories'] = "������ �� �����������";

        // Preview / Edit Entry
        $lang_string['title_preview'] = "������� / ����������� �� ��������";
        $lang_string['instructions_preview'] = "���� �� �������� ��������. <strong>������ ��������,</strong>: �� ��� ��������� ��������� �� ������, �������� �� ������������ ��� �� ��� ����, ������ �� �� ������, �� ������ ������ �� ���������.";
        $lang_string['title_update'] = "���������� �� ��������";
        $lang_string['instructions_update'] = "����� �� �������� ��������, ����������� �������� �����. ������ ��������, ��������� �������� <strong>'�������'</strong> � '<strong>�������'</strong>.";
        $lang_string['ok_btn'] = "&nbsp;OK&nbsp;";
        $lang_string['cancel_btn'] = "&nbsp;������&nbsp;";

        // Error Response
        $lang_string['error'] = "<h2>���!</h2>�������� �� � ��������! ��� ����� �� ��������� � ���������� ������.<br /><br />������� �� �������:<br />";
        $lang_string['success'] = "<h2>�������� � ��������!</h2>���������� ������ � ������� ��������."; // 0.4.8.1
        break;

      case 'add_static':
        // Add Entry
        $lang_string['title'] = "������ �������� ��������";
        $lang_string['instructions'] = "������� �������� ����� �� ��������� �� �������� ��������. �� ������� �� ����������, ���������� �������� �� �������� � ������ �� ������� ������. �� ��� � ������ �� �� �������� ����������, ����� ������ �� ���� ������ ��������: ��������, �������� �� ����� �������� �������, ������ �� ������ � �.�. ��������� ������ '�������' �� ������������� ������� �� ���������� � '�������' �� ��������� �� ����������.";

        // Preview / Edit Entry
        $lang_string['title_preview'] = "������� / ����������� �� �������� ��������";
        $lang_string['instructions_preview'] = "���� �������� ���������� ��������. ��� ��������� ���� ��� �����������, �� �������� �� �������� ������ '������'.";
        $lang_string['title_update'] = "������ ���������� ��������";
        $lang_string['instructions_update'] = "����� �� �������� ����������, ����������� ������� ��-����. ������ �������� �������������, ��������� �������� '�������' � '�������'.";
        $lang_string['form_error'] = "����, ������� �������� �������, �����, � ��� �� ����.";

        // Error Response
        $lang_string['error'] = "<h2>���!</h2>���������� �� � ��������.<br /><br />������� �� �������: <br />";
        break;

      case 'add_block':
        // Add / Manage Blocks
        $lang_string['title'] = "������ / ������ ����";
        $lang_string['instructions'] = "������ �������� �������";
        $lang_string['up'] = "������";
        $lang_string['down'] = "������";
        $lang_string['edit'] = "��������";
        $lang_string['delete'] = "������";
        $lang_string['block_name'] = "��� �� �����:";
        $lang_string['block_content'] = "���������� �� �����:";
        $lang_string['instructions_edit'] = "� ������� ����������� ����.";
        $lang_string['instructions_modify'] = "�������� ��-���� �� ������� � �����.";
        $lang_string['submit_btn_edit'] = "���������� �����";
        $lang_string['submit_btn_add'] = "������ ����";
        $lang_string['form_error'] = "�������� ������ ���.";
        break;

      case 'add_link':
        $lang_string['static_pages'] = "�������� ��������:";

        // Add / Manage Links
        $lang_string['title'] = "�������� / ������� �� ������";
        $lang_string['instructions'] = "��� ����� �� ������� ������ ��� ����� �������. ������� ������� � ������ ������ <strong>'�������'</strong>. ������� '������' ��� '������' �� ������� �� ����������� �� ��������. ��������� '�������' �� ����������� �� �������� � '������' - �� ���������.";
        $lang_string['up'] = "������";
        $lang_string['down'] = "������";
        $lang_string['edit'] = "��������";
        $lang_string['delete'] = "������";
        $lang_string['link_name'] = "���:";
        $lang_string['link_url'] = "URL:";
        $lang_string['instructions_edit'] = "��� ����������� ��������:";
        $lang_string['instructions_modify'] = "������� ������� ������:";
        $lang_string['submit_btn_edit'] = "�������";
        $lang_string['submit_btn_add'] = "������ ����";
        $lang_string['form_error'] = "������� �������� �� ��� � ����� �� ��������.";
        break;

      case 'categories':

        // Add / Manage Links
        $lang_string['title'] = "�������� / �������� �� ���������";
        $lang_string['instructions'] = "����������� �������� ����� �� �� �������� � ����������� �����������. ����� ��������� ������ �� ���� � ���� ������ '��� �� ����������� (id �����)'. ���������� � ��������� �� �� ��������� ��������.<br /><br /><b>������:</b><br />���� (1)<br />������ (3)<br />&nbsp;&nbsp;��������� (6)<br />&nbsp;&nbsp;������� (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;����� (7)<br />������� (2)<br />";
        $lang_string['error'] = "������";
        $lang_string['current_categories'] = "�������� ���������";
        $lang_string['no_categories_found'] = "���� ������� ���������";
        $lang_string['category_list'] = "������ �� �����������:";
        $lang_string['validate'] = "�������������";
        $lang_string['submit_btn'] = "&nbsp;�������&nbsp;";
        break;

      case 'colors':
        // Change Colors
        $lang_string['title'] = "����� �� ���������";
        $lang_string['instructions'] = "����� �� ��������� ���������, ���������� �� ����������. ����������� ��������� �� ����� �� ���������� ����, ����� �������� ����������������� ����������� �� ����� � ����������� ����..";
		// ��-����� �� �� �����������.
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
        $lang_string['color_preset'] = "������� �����:";
        $lang_string['scheme_name'] = "�������� ��� �� �������� ������� �����:";
        $lang_string['scheme_file'] = "�������� ��� �� ����� �� ��������� ����� (��� ��������� � ������� ����������)";
        $lang_string['save_btn'] = "&nbsp;������&nbsp;";
        $lang_string['form_error'] = "�������� ��� �� ��������� ������� �����.";
        $lang_string['submit_btn'] = "&nbsp;�������&nbsp;";
        $lang_string['theme_doesnt_allow_colors'] = '��������� ���� �� ��������� ������� �� ���������.';

        // Error Response
        $lang_string['error'] = "<h2>���!</h2>������������ �� � ��������! ��� ����� �� ��������� � ���������� ������.<br /><br />������� �� �������:<br />";
        $lang_string['success'] = "<h2>��������� �� ��������!</h2>����������� � ������� ��������."; // New for 0.4.8.1
        break;

      case 'comments':
        // Comments
        $lang_string['name'] = "���:"; //New in 0.4.6.2
        $lang_string['email'] = "Email:"; //New in 0.4.6.2
        $lang_string['homepage'] = "����� ��������:"; //New in 0.4.6.2
        $lang_string['comment'] = "��������:"; //New in 0.4.6.2
        $lang_string['IPAddress'] = "IP �����:";  // New for 0.4.6.2
        $lang_string['useragent'] = "�������:";  // New for 0.4.6.2
        $lang_string['wrote'] = "<i>� %s, %s ������:</i><br />\n<br />\n%s"; // New for 0.4.6.2

        $lang_string['comment_capcha'] = "�������� Anti-Spam ����: "; // 0.4.2
        $lang_string['title'] = "���������";
        $lang_string['header'] = "�������� �� ��������";
        $lang_string['instructions'] = "������� ������� ��-����.";
        $lang_string['comment_name'] = "������ ���/�������:";
        $lang_string['comment_email'] = "Email:";
        $lang_string['comment_url'] = "����:";
        $lang_string['commentposted'] = "���������� � �������� ��: ";  // New for 0.4.6.2
        $lang_string['comment_remember'] = "����� ��:";
        $lang_string['comment_text'] = "��������:";
        $lang_string['post_btn'] = "&nbsp;�������&nbsp;";
        $lang_string['delete_btn'] = "������";
        $lang_string['ban_btn'] = "��� �� IP-��"; // New for 0.4.8
        $lang_string['expired_comment1'] = "��������� �� ��������� ���� �� ������ �� ��-����� �� "; // New for 0.4.8
        $lang_string['expired_comment2'] = " ���."; // New for 0.4.8

        $lang_string['blacklisted'] = "���� IP � ������. ����������� �� ���� �� ���������."; // New for 0.4.8
        $lang_string['bannedword'] = "������ ��������, url, ��� ��� e-mail �������� ��������� �� ����������� �� ����� ����(�). ������ �������� ���� �� ���� ����������."; // New for 0.4.8
        $lang_string['nocomments'] = "����������� �� �� ��������� �� ���� ������."; // New for 0.4.9
        $lang_string['email_moderator'] = "���������� � ������� ������� �� ���������. ��� ���� ���� �� �� ���� ����� � ����������."; // New for 0.5.0
        $lang_string['user_notice_mod'] = "������ ��������� �������� �� ��������� �� ����������� �� ���� ���-����. ������ �������� �� ���� ����� ������� ���� ����������� ��."; // new for 0.5.0

        $lang_string['return_to_comments'] = '����� ��� �����������';

        // Error Response
        $lang_string['error_add'] = "<h2>���!</h2>���������� �� � �������. ��� ����� �� ��������� � ��������� �������.<br /><br />������� �� �������:<br />";
        $lang_string['error_delete'] = "<h2>���!</h2>���������� �� � ������. ��� ����� �� ��������� � ���������� ������.<br /><br />������� �� �������:<br />";
        $lang_string['error_ban'] = "<h2>���!</h2>IP-�� �� � �������� � ��� �������.<br /><br />������� �� �������:<br />";
        $lang_string['success_add'] = "<h2>���������� � �������!</h2>������ �������� ���� ������� �������."; // New for 0.4.8.1
        $lang_string['success_delete'] = "<h2>���������� � ������!</h2>���������� ���� ������."; // New for 0.4.8.1
        $lang_string['success_ban1'] = "<h2>IP-�� � ���������!";
        $lang_string['success_ban2'] = "</h2>���� ���������� ���� ip ������� � ������, ����������� ����������� ���� � ������."; // New for 0.4.8.1
        $lang_string['form_error'] = "����, ��������� �������� �� �������� � ����� �� ���������, ����� � Anti-Spam ����.";
        $lang_string['error_noip'] = "No IP Provided for Blacklist Request.";

        $lang_string[ 'error_comments_disabled' ] = '<h2>������!</h2>��! ����������� �� ��������� � ���� ��������. �� ����-��� �� ��?'; // New 0.5.0
        $lang_string[ 'error_no_match' ] = "<h2>������!</h2>������ IP ����� �� ������� � ������������� IP �����. �� ����-��� �� ��?"; // New 0.5.0
        $lang_string[ 'error_fields_missing' ] = '<h2>������!</h2>������� �������� ������: '; // New 0.5.0
        $lang_string[ 'error_spambot' ] = '<h2>������!</h2>�� ��� ������ ����-���� ����.'; // New 0.5.0
        $lang_string[ 'error_capcha' ] = '<h2>������!</h2>���������� ����-���� ��� � ����������.'; // New 0.5.0
        $lang_string[ 'error_bad_data' ] = '<h2>������!</h2>������������� ���������� � ���������. Hacking attempt?'; // New 0.5.0
        $lang_string[ 'error_entry_missing' ] = '<h2>������!</h2>��� �� �������� �� ��������� �������� ��� ������ ����� �� ����������.'; // New 0.5.0
        $lang_string[ 'error_empty_text' ] = '<h2>������!</h2>�� ��� ������ �������� ��� ������ ���.'; // New 0.5.0
        break;

      case 'delete':
        $lang_string['title'] = "��������� �� �����";
        $lang_string['instructions'] = "����� �� �������� ������ ��� ������ �� �������, �� ������ �� �������� ����� ����, ������ ���� ����������� ��, �� � �������� �� ���� �����������...";
        $lang_string['ok_btn'] = "&nbsp;������&nbsp;";
        $lang_string['cancel_btn'] = "&nbsp;������&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>���!</h2>��������� ��������� �� �������.<br /><br />������� �� �������:<br />";
        $lang_string['success'] = "<h2>������� � ������!</h2>������� ���� ������� ������."; // New for 0.4.8.1
        break;

      case 'delete_static':
        $lang_string['title'] = "��������� �� �������� ��������";
        $lang_string['instructions'] = "����� �� �������� ���� �������� ��� ������ �� �������, �� ������ �� �������� ����� ���, ������ ���� ���������� �� �������������.";
        $lang_string['ok_btn'] = "&nbsp;���������&nbsp;";
        $lang_string['cancel_btn'] = "&nbsp;������&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>���!</h2>���������� �� � �������.<br /><br />������� �� �������:<br />";
        $lang_string['success'] = "<h2>���������� �������� � �������!</h2>��������� �������� � ������� �������."; // New for 0.4.8.1
        break;

      case 'image_list':
        $lang_string['title'] = "������� �� �����������";
        $lang_string['instructions'] = "�������� ����������� ������ �� ����������� �� �������������.<br /><br />�� ��������� �� ����������� � ������:<br />1) �������� � ����� ����� �� ������� ����� �������� � �������� ����� �� ������ <em>�������� �� ������</em>.<br />2) ������� �� � ��������� �� �������� / �������.<br />3) �������� ����� <strong>'img'</strong> � �������� � ��������� �� ����� �������� �� ������ �� �����.";
        break;

      case 'info':
        $lang_string['title'] = "Meta-Data ����������";
        $lang_string['instructions'] = "���� ���������� &quot;meta-data&quot;, �� ������� �� ���������� ����� �� ������������� � ������� �����. ������������ ���� �� ���� ���������� � �� RSS feeds.";
        $lang_string['info_keywords'] = "������� ���� (������ �� ��������� ����, ��������� ��� ���������)";
        $lang_string['info_description'] = "�������� (�������� ����� � �������� �� �����)";
        $lang_string['info_copyright'] = "����� (�������� ����� ��� ���� ��� �����������, ��������� ���� ����������)";
        $lang_string['tracking_code'] = "������ ����������� ���: (HTML ��� �������� �� ����� �������� �� ���� ������� � ��������� ��������(� <head>) �������� �� Google ���-�������������)";
        $lang_string['submit_btn'] = "&nbsp;�������&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>���!</h2>������������ �� � ��������. ��� ����� �� ��������� � ��������� � �������.<br /><br />������� �� �������:<br />";
        $lang_string['success'] = "<h2>Meta-Data ���������� � ��������!</h2>������������ ���� ������� ��������."; // New for 0.4.8.1
        $lang_string['form_error'] = "����, ��������� �������� �������� � �����.";
        break;

      case 'index':
        // Index
        break;

      case 'static':
        // Index
        break;

      case 'rating':
        $lang_string['error'] = "<h2>���!</h2>������������ �� � ��������. ��� ����� �� ��������� � ��������� � �������.<br /><br />������� �� �������:<br />";
        $lang_string['success'] = "<h2>����������� �������!</h2>������ ������� ���� ������� �������."; // New for 0.4.8.1
        break;

      case 'login':
        $lang_string['upgrade'] = "<h2>�������</h2>"; // New 0.3.8
        $lang_string['upgrade_count'] = "%n ��������� ���� ����� �� �������:"; // New 0.3.8
        $lang_string['upgrade_url'] = "������� �� �����������"; // New 0.3.8
        $lang_string['title'] = "����";
        $lang_string['instructions'] = "����, �������� ������ ����������� ��� � ������";
        $lang_string['username'] = "Username:";
        $lang_string['password'] = "Password";
        $lang_string['submit_btn'] = "&nbsp;�������&nbsp;";
        // Success
        $lang_string['success'] = "<h2>��������� ���� �������!</h2>���� ��� ������ � ���������. ������� ����������!<p />";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>���!</h2>��������� �������. ��������� �������� �� �� �������� ����� �� ����������� � ��������.<br />";
        $lang_string['inactive_account'] = "<h2>���!</h2>��������� ������� � ���������. ������ ������ � ����������� �� ����������� �� ����� ������ ������� �������.<p />";
        $lang_string['form_error'] = "����, ��������� �������� �� ��� �� ���������� � ������.";
        break;

      case 'logout':
        $lang_string['title'] = "�����";
        $lang_string['error'] = "<h2>�� �����!</h2>��� ��������� �� ���������.<p />";
        $lang_string['error_no_cookie'] = "<h2>�� �����!</h2>��� ��������� �� ���������. (�� �� �������� cookies.)<p />"; // New 0.5.0
        $lang_string['success'] = "<h2>�� �����!</h2>��� ��������� �� ���������.<p />(������������ ��� �������� ���� 5 �������.)<p />";
        break;

      case 'forms':
        $lang_string['title'] = "";
        $lang_string['instructions'] = "";
        // Error Response
        $lang_string['error'] = "<h2>���!</h2>������������ �� � ��������. ��� ����� �� ��������� � ���������� ������.<br /><br />������� �� �������:<br />";
        break;

      case 'set_login':
        $lang_string['title'] = "����� ���������� &amp; ������";
        $lang_string['instructions'] = "��������� ������� �� ����� �� ���������� �/��� ������. �������� ������ ���������� � ������.";
        $lang_string['username'] = "����������:";
        $lang_string['password'] = "������:";
        $lang_string['submit_btn'] = "&nbsp;�������&nbsp;";
        // Success
        $lang_string['success'] = "<h2>������� �������!</h2>������������ �/��� �������� �� �������.<p />";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>���!</h2>������������ �� � ��������. ��� ����� �� ��������� � ��������� �������.<br /><br />������� �� �������:<br />";
        $lang_string['form_error'] = "����, ��������� �������� ���������� � ������.";
        $lang_string['explanation'] = "� ���������� ������ ������� �� ��������� �� �������� � ������. ���� ���� ���������� �� ����� �� ������ �/��� ���������� ���� ����������. �� �� ��������� �������� �/��� �����������, �������� /config/password.php � �� �������, �� install*.php ���������� �� �������. ������ ��� ������, ��������� ���� �������� (��� ������� �� ���������). �� ������ �������� �� ���������� ���� ������	�� ����� ������, ����� �� �������� ��� ����������� �� ����������.";  // New for 0.4.6
        break;

      case 'install00':
        $lang_string['title'] = "����� �����";
        $lang_string['instructions'] = "������������� �� �������� Simple PHP Blog!";
        $lang_string['blog_choose_language'] = "�������� ����:";
        $lang_string['submit_btn'] = "&nbsp;�������&nbsp;";
        break;

      case 'install01':
        $lang_string['title'] = "����� �����";
        $lang_string['instructions'] = "������������� �� �������� Simple PHP Blog!<br /><br />Simple PHP Blog � ���� �������. �� ������� �� ����� PHP 4.1 ��� ��-������ ������, � ����� �� ������ �� ��������� �� ������ ������� ������. �������� ���������� �� ������� � ����������� �������� �������, ���� ��so �� �� ������� ��������� �� ���� �����.<br /><br />
        ������� ������ � ��������, Simple PHP Blog ������� �� ��������� 3 ����� � ��������� ���������� �� ���������� �� (<b>config</b>, <b>content</b>, � <b>images</b>) ������ �������� �� �� ������� ������ ����������. ���� ����, ��� �� ��������� ������ ���������� � ������ � ����� �� ������ �� ������ ������ �� ����� ��.<br /><br />
        <b>��������� ��� �� �� ��������� ������������:</b>";
        $lang_string['begin'] = "[ ������ ������������ ]";
        break;

      case 'install02':
        $lang_string['title'] = "����������";
        $lang_string['instructions'] = "���� �� ��������� �� ������� <b>config</b>, <b>content</b>, � <b>images</b>:";
        $lang_string['folder_exists'] = "�����! ������� �����������. �� �� ���������� �������...";
        $lang_string['folder_failed'] = "���! ������� �� ����� �� ����� ���������...";
        $lang_string['folder_success'] = "�������! ������� �� ���������...";
        // Help
        $lang_string['help'] = "
        <h2>���!</h2>
        ������������ �� ��������� �� �������� ��� �� ����� �� �������!<br /><br />���� ���-����� �� ������ ������:<br />
        <ol>
        <li><b>������� �� ������</b> �� �� ���������<b> ������/������</b> �������.</li>
        <li><b>UID</b>-���� (��������������� ID-��) ������ �� �� ������� �� ������ ������� � �����.</li>
        </ol>
        ��������� ���� ���������� ��-���� � �������� �� <b>������ ������</b>:<br />
        <ol>
        <li>����� �������� �������� �����: <b>config</b>, <b>content</b>, � <b>images</b>.</li>
        <li>��������� <b>������� �� ������</b> �� ���� �����: ��� ������ FTP ��������, Owner, User, � World ������ �� ���� <b>Read</b> � <b>Write</b> ������. <i>(������ �� �� �������� � ������ service provider �� �� �� �������... ��� ������ ����� �� ����.)</i></li>
        <li>������� �� �� ������ UID-�� �� ������ ������� � ����� �� ���� � ����. <i>(������ �� �� �������� � ������ service provider �� �� �� �������... ��� ������ ����� �� ����.)</i></li>
        </ol>";
        $lang_string['try_again'] = "[ ������ ������ ]";
        // Success
        $lang_string['success'] = "<h2>�������!</h2>������� �� ��������� �������!<p /><b>��������� ���� �� �� ����������:</b>";
        $lang_string['continue'] = "[ �������� ]";
        break;

      case 'install03':
        $lang_string['supported'] = "<b>������ ���-������ �������� �������� ����� �� ����������:</b>";
        $lang_string['standard'] = "Standard DES Encryption: ";
        $lang_string['extended'] = "Extended DES Encryption: ";
        $lang_string['MD5'] = "MD5 Encryption: ";
        $lang_string['blowfish'] = "Blowfish Encryption: ";
        $lang_string['enabled'] = "�������";
        $lang_string['disabled'] = "���������";
        $lang_string['using_standard'] = "<b>���������� �� Standard DES Encryption...</b>";
        $lang_string['using_extended'] = "<b>���������� �� Extended DES Encryption...</b>";
        $lang_string['using_MD5'] = "<b style=\"color: green;\">���������� �� MD5 Encryption...</b>";
        $lang_string['using_blowfish'] = "<b style=\"color: green;\">���������� �� Blowfish Encryption...</b>";
        $lang_string['using_unknown'] = "<b>���������� �� ��������� �����...</b>";
        $lang_string['salt_length'] = " <i>(Salt Length = %string)</i><br />";
        $lang_string['title'] = "��������� �� ���������� &amp; ������";
        $lang_string['instructions'] = "����������� ������� ��-���� �� �� ��������� ���������� � ������.";
        $lang_string['username'] = "����������:";
        $lang_string['password'] = "������:";
        $lang_string['submit_btn'] = "&nbsp;�������&nbsp;";
        // Success
        $lang_string['success'] = "<h2>������������!</h2>��� ������� ������������ ������ ����������. �������� �� ����� ���� �� �� ���������� � ��������� ����������� �� ������ ����. ������� ����������!<p />";
        $lang_string['btn_setup'] = "[ ��������� ]";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>���!</h2>������������ �� � �������� �������. �������� �� ������ � ����������� �� ������ ���������� �/��� ������.<br /><br />������� �� �������:<br />";
        $lang_string['form_error'] = "����, ��������� �������� ���������� � ������.";
        break;

      case 'install04':
        $lang_string['title'] = "��������� �� ����� � ��������";
        $lang_string['instructions'] = "���� � ����� ����:<br />
        <ol>
        <li>�������� ������� ��������. <i>(Notepad, Wordpad, Word, BBEdit, Pico, VI, ��...)</i></li>
        <li>�������� ��� ������� ��������.</li>
        <li>��������� � �������� (Copy/paste) ���� ����� � ������� � ����� ��-���� � ��������� ����.</li>
        <li>�������� ����� ���� <b>password.php</b> <i>(������ ������� �� ��������� ����� � <b>text</b> ��� <b>plain text</b> ������ � �� ������������ �� ����� � 100% .php)</i></li>
        <li>�������� ������ FTP ��������.</li>
        <li>������ ������ ��� <b>password.php</b> ���� � ������� <b>config</b> �� ������ ���-����.</li>
        <li>�������� <b>password.php</b> �� ������ ��������.</li>
        </ol>
        ";
        $lang_string['information'] = "<i>���������: ��� ������ �� ������� ��������/����������� �� (��� ��� �� ��������� ��������), �������� <b>password.php</b> ����� �� <b>config</b> ������� �� ������ ���-����. ������� ���� ���� �������� ���������� ��, ����� �� �� ������� �� ��������� ���� ������ ��������� ����� �� ����...</i>";
        $lang_string['code'] = "��� �� <b>password.php</b> �����:";
        $lang_string['continue'] = "[ �������� ]";
        break;

      case 'install05':
      case 'install06':
        $lang_string['title'] = "����";
        $lang_string['instructions'] = "����, �������� ������ ����������/������ ��-����";
        $lang_string['username'] = "����������:";
        $lang_string['password'] = "������";
        $lang_string['submit_btn'] = "&nbsp;�������&nbsp;";
        // Success
        $lang_string['success'] = "<h2>������������!</h2>��� �������� � ���������.<p />
        �������� �� <b>���������</b> �� �� ��������������� ����� �� ����.<p />
        <i>���������: ����, ���� ���� ���������� ������� ������������, ������������ �� �� �������� ������ <b>installXX.php</b> ������� �� ������ ���-����. (����� �� install00.php �� install06.php)</i><p />";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>���!</h2>��������� � ��������� �� ���� �������. ����, ��������� ���������� �� ��� ���������� � ������, ���� ���� �������� ������.<p />";
        $lang_string['form_error'] = "����, ��������� �������� ���������� � ������.";
        // Success
        $lang_string['btn_setup'] = "[ ��������� ]";
        $lang_string['btn_try_again'] = "[ ������ ������ ]";
        break;

      case 'setup':
        $lang_string['title'] = "���������";
        $lang_string['instructions'] = "����� ����� �� �������� ����� �� ����� � ������� ����������.";
        $lang_string['blog_title'] = "��� �� �����:";
        $lang_string['blog_header'] = "����������� �� ������ - URL: images/blogheader.jpg (�������� ������ �� ����� �� ������������ �� ����� ����).";
        $lang_string['blog_author'] = "�����:";
        $lang_string['blog_email'] = "�����: (��������� ����� �������� � ������� - ��� � ������ ������� �� �������� � ������)"; // Updated 0.4.7
        $lang_string['blog_avatar'] = "����� URL: images/avatar.jpg (�������� ������ ��� ������ �� ������ ���� �������)."; // <-- New 0.4.7
        $lang_string['blog_footer'] = "��������:";
        $lang_string['blog_choose_language'] = "�������� ����:";
        $lang_string['blog_enable_comments'] = "��������� �����������";
        $lang_string['blog_comments_popup'] = "������� ��������� � ��� ��������";
		$lang_string['blog_enable_start_category'] = "��������� ���������� ��������� �� ������� �������� �� ������: "; // Now for 0.5.1
        $lang_string['blog_search_top'] = "������ ���������� (������ ���� � �����)"; // New for 0.5.0
        $lang_string['blog_enable_static_block'] = "������ ��������� ���� ��� ������� ������� � ����-�: "; // New for 0.5.0
        $lang_string['static_block_border'] = '�������� �������'; // New for 0.5.0
        $lang_string['static_block_noborder'] = '��� ������'; // New for 0.5.0
        $lang_string['blog_enable_voting'] = "������� ������";
        $lang_string['blog_enable_cache'] = "������� ��� �� �������� (���� �� ������� ��������� ��� ����� �������)"; // New for 0.4.6
        $lang_string['blog_enable_calendar'] = "������� ���� ��������"; // New for 0.4.6
        $lang_string['blog_enable_archives'] = "������� ���� �����"; // New for 0.4.8
        $lang_string['blog_enable_counter'] = "������� ���� ���������"; // New for 0.4.8
        $lang_string['blog_counter_hours'] = "���� ����� ���� ������� �� ������ ����������� �� ���� (�� ��������� ip �����):"; // New for 0.4.8
        $lang_string['blog_enable_login'] = "������� ���� ���� (��� ��, ������ ����� ������� �� ����������, � �� ����� �� ������ ���� http://yoursite.com/login.php)"; // New for 0.4.8
        $lang_string['blog_enable_title'] = "������� ����� �� ����� ���� ����� (�� ��������, ��� ����� �� ������� � ������)"; // New for 0.4.6
        $lang_string['blog_enable_permalink'] = "������� ���� �� �������� �� �� ����� ��� ���"; // New for 0.4.6
        $lang_string['blog_enable_capcha'] = "������� Anti-Spam ������"; // New for 0.4.8
        $lang_string['blog_footer_counter'] = "������� ��������� (����) � ���������"; // New for 0.4.8
        $lang_string['blog_enable_capcha_image'] = "Anti-Spam ����������� (GD library only) / Anti-Spam �����"; // New for 0.4.8
        $lang_string['blog_enable_stats'] = "������� ���� ����������"; // New for 0.4.7
        $lang_string['blog_enable_lastcomments'] = "������� ���� �������� ���������"; // New for 0.4.7
        $lang_string['blog_enable_lastentries'] = "������� ���� �������� ������"; // New for 0.4.7
        $lang_string['blog_email_notification'] = "��������� �� ����� ��� ����������� �� ��������";
        $lang_string['blog_send_pings'] = "��������� �� ���� &quot;pings&quot;";
        $lang_string['blog_ping_urls'] = "������ ����� URL (�������� http://rpc.weblogs.com/RPC2) �� ��������� ������ &quot;ping&quot;.<br />(����� �� ������� � ������ ������, ��������� �� ���������.)";
        $lang_string['blog_trackback_about'] = "�������������� �� ��������� � ����� �� ����������� ����� �������. ��������� �� ����� �������	�� ��������, �� � ����� �� ��� ���� ��� ���, ���� ����������� �� ����������� ����. ����� � �� ����� ��� � ��� ���� ��� ���� ���� ���� ������������ �� ����������� ����.<br />����� ��� �� ������� ����� ��������� URIs ��� �� ������� ���� �� ����������� ���������.";
        $lang_string['blog_trackback_enabled'] = "������� ���������";
        $lang_string['blog_trackback_auto_discovery'] = "������� ����������� ��������� ��� ��������� �� ���������, ��������� URLs";
        $lang_string['blog_max_entries'] = "�������� ��������� ������:";
        $lang_string['blog_comment_tags'] = "��������� ������ � �����������:";
        $lang_string['blog_gzip_about'] = "
          �� ������ PHP 4.0.4, PHP ���� ���������� �� ������ � ������ �� gzip (.gz) ������������ �������,
					����������� ����� �� �����. ���� ���� �� ���������� ����������, ����� �� �������� ��� ��������,
					���������� gzip ���������, ����������� ������.<br />
					<br />
					Zlib �� �� �������� �� PHP �� ������������. ��� ������� ������� �� ����������� �� �����������,
					����� ������ ���������� �� PHP �� �������� Zlib ����������.";
        $lang_string['blog_enable_gzip_txt'] = "������� GZIP ��������� �� ���� ����� ���������";
        $lang_string['blog_enable_gzip_output'] = "������� GZIP ��������� �� HTTP ���������";
        $lang_string['submit_btn'] = "&nbsp;������&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>���!</h2>������������ �� ���� �� �� ������. ��� ����� �� ��������� � ���������� ������.<br /><br />������� �� �������:<br />";
        $lang_string['success'] = "<h2>����������� �� ��������!</h2>������������ ���� ������� ��������."; // New for 0.4.8.1
        $lang_string['form_error'] = "����, ��������� �������� ��� � �����.";
        $lang_string['label_entry_order'] = "��� �� ��������� �� ��������:";
        $lang_string['select_new_to_old'] = "������� �� ���-������";
        $lang_string['select_old_to_new'] = "������� �� ���-�������";
        $lang_string['label_comment_order'] = "��� �� ��������� �� �����������:";
        $lang_string['cal_sunday'] = "������";
        $lang_string['cal_monday'] = "����������";
        $lang_string['label_calendar_start'] = "������ �� ��������� � ���������";
		$lang_string['title_sidebar'] = "������������"; // New in 0.4.7
		$lang_string['title_comments'] = "���������"; // New in 0.4.7
		$lang_string['title_trackback'] = "���������"; // New in 0.4.7
		$lang_string['title_compression'] = "���������"; // New in 0.4.7
		$lang_string['title_entries'] = "������"; // New in 0.4.7
		$lang_string['title_general'] = "������"; // New in 0.4.7
		$lang_string['title_language'] = "����"; // New in 0.4.7
        $lang_string['blog_comment_days_expiry'] = "����� ���� ���� ����������� �� ������ ����� �� �� ����� ��������� �� ���? (0 �������� ���������)"; // New in 0.4.8
        $lang_string['blog_comments_moderation'] = "��������� �� ����������� ����� �� ����� �������� �������� (������ ������ �� ������ � ��������� �����������)"; // New in 0.5.0
        $lang_string['comment_moderation'] = "��������� �� ����������"; // New in 0.5.0
        break;
      case 'comment_moderation':
        $lang_string['title'] = "������ ���������";
        $lang_string['instructions'] = "���� � ������ � ������ ��������� ����� �� �� ������ � ��������� ������ �� ������ �� ����� �������� �� ���������� �� ���-�����.";
        $lang_string['header'] = "������ �� ����������";
        $lang_string['enteredby'] = "�������� ��: ";
        $lang_string['entrydate'] = "�������� ��: ";
        $lang_string['blogentrytitle'] = "��������: ";
        $lang_string['enteredcontent'] = "����������: ";
        $lang_string['totalunmodded'] = " ��������� �������� ��������/���������.";
        $lang_string['mod_approve'] = "[������] ";
        $lang_string['mod_delete'] = "[������]";
        break;
      case 'moderation':
        $lang_string['title'] = "��������� �� ������������";
        $lang_string['instructions'] = "������ �� ������������� ����������� ��������.";
        $lang_string['submit_btn'] = "&nbsp;������ �����������&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>���!</h2>������������ �� ���� ��������.<br /><br />������� �� �������:<br />";
        $lang_string['success'] = "<h2>����������� �� ��������!</h2>������������ � �������� �������."; // New for 0.4.8.1
        $lang_string['banned_address_list_title'] = "<h2>��������� IP ������</h2>";
        $lang_string['banned_address_list'] = "��-���� � ������� � ip ��������, ����� ����� ����� �� ������� ���������. ����� ip ������ �� ���� �� ������� ��� � ������ �� ���� �������� ���� ip ����, � �� ���� hostname(��� DNS �����). ���� ���� ������� � ���������, IP-�� ���� �� ���� ��������� ������� ��� ������������� �� ����� ��������.";
        $lang_string['banned_word_list_title'] = "<h2>��������� ����</h2>";
        $lang_string['banned_word_list'] = "��-���� � ������� �� ����������� ����, ����� �� �� ��������� �� ��������� � �����������. ����� ���� ������ �� ���� �� ������� ������������� ���.";
        break;
      case 'trackbacks':
        // Trackbacks
        $lang_string['title'] = "���������";
        $lang_string['header'] = "����� �� ���������:";
        $lang_string['delete_btn'] = "������";
        // Error Response
        $lang_string['error_add'] = "������ ��� ����������� �� ������� �� �����������.";
        $lang_string['error_delete'] = "<h2>���!</h2>����������� �� ���� �������. �������� ������� ��� �����������.<br /><br />������� �� �������:<br />";
        $lang_string['success_delete'] = "<h2>����������� � �������!</h2>����������� ���� ������� �������."; // New for 0.4.8.1
        break;

      case 'options':
        $lang_string['title'] = "���������";
        $lang_string['instructions'] = "��������� �� ����������� �� ��������� �� ���� � ���. �������� <strong>������������� �������</strong> ����������� �� ��������� ��� ������� �� ����� � �� � ���������.";
        // Long Date
        $lang_string['ldate_title'] = "����� ������ �� ����:";
        $lang_string['weekday'] = "��� �� ���������";
        $lang_string['month'] = "�����";
        $lang_string['day'] = "���";
        $lang_string['year'] = "������";
        $lang_string['none'] = "������";
        // Short Date
        $lang_string['sdate_title'] = "������ ������ �� ����:";
        $lang_string['s_month'] = "�����";
        $lang_string['s_mon'] = "MMM";
        $lang_string['s_day'] = "���";
        $lang_string['s_year'] = "������";
        $lang_string['zero_day'] = "01 ������ 1";
        $lang_string['show_century'] = "�������� �����������";
        // Time
        $lang_string['time_title'] = "������ �� ���:";
        $lang_string['12hour'] = "12-����� ������";
        $lang_string['24hour'] = "24-����� ������";
        $lang_string['before_noon'] = "�� ����";
        $lang_string['after_noon'] = "���� ����";
        // Date
        $lang_string['date_title'] = "������ �� ���������:";
        $lang_string['long_date'] = "����� ����";
        $lang_string['short_date'] = "������ ����";
        $lang_string['time'] = "���";
        // Menu
        $lang_string['menu_title'] = "���� ������ �� ��������� �� ����:";
        $lang_string['long_date'] = "����� ����";
        $lang_string['short_date'] = "������ ����";
        // Used in multiple places
        $lang_string['zero_day'] = "01 ������ 1 �� ���";
        $lang_string['zero_month'] = "01 ������ 1 �� �����";
        $lang_string['zero_hour'] = "01 ������ 1 �� ���";
        $lang_string['separator'] = "����������:";
        $lang_string['preview'] = "������������� �������:";
        $lang_string['server_offset'] = "������� �� �������:";
        // Buttons
        $lang_string['submit_btn'] = "&nbsp;������&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>���!</h2>����������� �� �� ��������. ���������� ������ ��� ����� �� ���������.<br /><br />������� �� �������:<br />";
        $lang_string['success'] = "<h2>����������� �� ��������!</h2> ������������ ���� �������� �������."; // New for 0.4.8.1
        break;

      case 'themes':
        $lang_string['title'] = "����";
        $lang_string['instructions'] = "��������� �������� ����, �� �� �� ������� ������������ ����.";
        // Themes
        $lang_string['choose_theme'] = "����:";
        // Buttons
        $lang_string['submit_btn'] = "&nbsp;�������&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>���!</h2>������������ �� � ��������. ��������� � ������� ��� ����� �� ���������.<br /><br />������� �� �������:<br />";
        $lang_string['success'] = "<h2>����������� �� ��������!</h2> ������������ ���� �������� �������."; // New for 0.4.8.1
        break;

      case 'upload_img':
        $lang_string['title'] = "���������� �� �����������";
        $lang_string['instructions'] = "������ ����� '�������' �� �� ������� ����������� �� �������� ����.";
        $lang_string['select_file'] = "������ ����:";
        $lang_string['upload_btn'] = "������";
        // Error Response
        $lang_string['error'] = "<h2>���!</h2>��� ����� �� ���������� �� ������������� � ���������� ������. �������� ����������:<br /><br />������� �� �������:<br />";
        $lang_string['success'] = "<h2>������������� � ������!</h2> ������������ ���� �������� �������."; // New for 0.4.8.1
        break;

      case 'search':
        $lang_string['title'] = "��������� �� ���������";
        $lang_string['instructions'] = "��������� �� ��������� �� <b>%string</b>:";
        $lang_string['not_found'] = "���� �������� ���������";
        break;

      case 'contact':
        $lang_string['contact_capcha'] = "�������� Anti-Spam ���� "; // 0.4.2
        $lang_string['title'] = "�� ��������";
        $lang_string['instructions'] = "����, �������� �������:";
        $lang_string['form_error'] = "����, ��������� �������� ������� � �����.";
        $lang_string['name'] = "���:";
        $lang_string['email'] = "�����:";
        $lang_string['subject'] = "�������:";
        $lang_string['comment'] = "�����:";
        $lang_string['submit_btn'] = "&nbsp;�������&nbsp;";
        $lang_string['success'] = "<h2>���������!</h2>����������� ���� ��������� �������.<p />";
        $lang_string['failure'] = "<h2>������!</h2>����������� �� ���� ���������. ���-�������� ����� �� Anti Spam �� � ��� ������� ��������.<p />";
        $lang_string['contactsent'] = "����������� ����� � ��������� ��: ";  // New for 0.4.6
        $lang_string['IPAddress'] = "IP �����:";  // New for 0.4.6
        $lang_string['useragent'] = "User Agent:";  // New for 0.4.6
        $lang_string['wrote'] = "<i>� %s, %s ������:</i><br />\n<br />\n%s"; // New for 0.4.6.2
        break;

      case 'stats':
        $lang_string["title"] = "����������";
        $lang_string["general"] = "����";
        $lang_string["entry_info"] = "<b>%s</b> ������, ���������� �� <b>%s</b> ���� ��� <b>%s</b> �����";
        $lang_string["comment_info"] = "<b>%s</b> ���������, ���������� �� <b>%s</b> ���� ��� <b>%s</b> �����";
        $lang_string["trackback_info"] = "<b>%s</b> ��������� ��� <b>%s</b> �����";
        $lang_string["static_info"] = "<b>%s</b> �������� ��������, ���������� �� <b>%s</b> ���� ��� <b>%s</b> �����";
        $lang_string["most_viewed_entries"] = "10-�� ���-����������� ������";
        $lang_string["most_commented_entries"] = "10-�� ���-����������� ������";
        $lang_string["most_trackbacked_entries"] = "10-�� ���-���������� ������";
        $lang_string['vote_info'] = "<b>%s</b> ����� ��� <b>%s</b> �����"; // 0.4.1
        $lang_string["most_voted_entries"] = "10-�� ���-����� ��������� ������"; // 0.4.1
        $lang_string["most_rated_entries"] = "10-�� ���-������ ������� ������"; // 0.4.1
        break;

      case 'errorpage-nocookies':  // New for 0.4.6
        $lang_string["title"] = 'HTTP Error 403.8 - ���������� / ��������� � ����������';
        $lang_string["errorline1"] = '���������� ��� ���������, ����� ����� �� �������, �� ������� �� cookies.';
        $lang_string["errorline2"] = '������� � �������� �� ��� � ���� ��������� ������� ������� ����������� �� cookies � ������ ������.';
        $lang_string["clientid"] = '��������� ID: ';
        break;

      case 'errorpage':  // New for 0.4.6
        $lang_string["403.8"] = 'HTTP Error 403.8 - ���������� / ��������� � ����������.';
        $lang_string["404"] = 'HTTP Error 404 - ���������� / ��������� �� ����������.';
        $lang_string["error_404"] = '���������� ��� ���������, ����� �� ������� �� �������, �� ����������.';
        $lang_string["error_javascript"] = '���������� ��� ���������, ����� �� ������� �� �������, ������� javascript �� �� ������.';
        $lang_string["error_emailnotsent"] = '��������� ��������� �� �����������.';
        $lang_string["error_emailnotsentcapcha"] = '��������� ��������� �� �����������, ������ ������ ��� ������� ��������� ���� �� Anti Spam ���.';
        $lang_string["clientid"] = '��������� ID: ';
        break;

      case 'emoticons':  // New for 0.4.7
        $lang_string['title'] = "����� ���������";
        $lang_string['instructions'] = "
          �������� �����������, ����� ����� �� ���������. ����� ��� ������ ��������, ����� �����
					�� ��������� ����������. ����� �� �� �������� ��������� ������, �� ������ �� ��
					�������� � ������ �����.<br /><br />
					��������:<br />
					:) :-) :SMILE: :HAPPY:<br /><br />
					<i>(� ���� ������ � ������������ �� ��������� ������ � ������ �� 2 �����,
					����� ���� �� �� ������ ���������� ����������.)</i>";
        $lang_string["upload_instructions"] = '���� ���� ���������:';
        $lang_string["upload_success"] = '�������! ������������� �� ������ �������!';
        $lang_string["upload_error"] = '������! ������������� �� �� ������.';
        $lang_string["upload_invalid"] = '������! ��������� ���� �� �����������. ������������� ������ �� �� � ���������� png, jpg, ��� gif.';
        $lang_string["save_success"] = '�������������� ��������� �� ������� ��������!';
        $lang_string["save_error"] = '������! �������������� ��������� �� �� ��������.';
        $lang_string["save_button"] = '�������';
        break;

      case 'archives': // New for 0.4.8
        $lang_string['title'] = "������";
        $lang_string['showall'] = "������ ������";
        break;

      case 'manage_users':
        $lang_string['title'] = "���������� � �������� �� �����������";
        $lang_string['instructions'] = "��������, �������� ��� ��������� �� ���������� ����� �� �� �������������� �� ���� ����� �� ������ �� ���������� � ���������� �� �����������.";
        $lang_string['fulladminerror'] = "��� ������ �� ��� ������������� �� �� �������� ����!";
        $lang_string['header_user'] = "����������: ";
        $lang_string['header_property'] = "��������";
        $lang_string['header_value'] = "��������";
        $lang_string['prop_username'] = "����������:";
        $lang_string['prop_fullname'] = "���:";
        $lang_string['prop_password'] = "������:";
        $lang_string['prop_email'] = "�����:";
        $lang_string['prop_avatar'] = "������ URL:";
        $lang_string['prop_state'] = "�������?";
        $lang_string['prop_sec_Moderate'] = "��������� �� �����������?";
        $lang_string['prop_sec_Delete'] = "������ �� ������?";
        $lang_string['prop_sec_Edit'] = "�������� �� ������?";
        $lang_string['btn_SaveChanges'] = "������ ���������";
        $lang_string['btn_CreateUser'] = "��������� �� ����������";
        $lang_string['btn_Cancel'] = "������";  
        $lang_string['grid_header'] = "������ � �����������";
        $lang_string['grid_login'] = '����';
        $lang_string['grid_email'] = '�����';
        $lang_string['grid_avatar'] = '������';
        $lang_string['grid_state'] = '�������?';
        $lang_string['btn_modify'] = '��������';
        $lang_string['btn_delete'] = '������';
        $lang_string['create_user'] = '��������� �� ��� ����������';
        break;

      default:
        break;
    }
  }
?>
