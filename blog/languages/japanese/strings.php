<?php
	// Japanese Language Translations
	// (c) 2004 Sanshiro Akiyama (0.3.7)
	// (c) 2007 Takeshi Hamasaki (0.5.1)
	
	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;
			
		// Language: Japanese
		$lang_string['language'] = 'japanese';
		
		$lang_string['locale'] = array('ja_JP', 'japanese', 'jpn');
		$lang_string['rss_locale'] = 'ja-JP'; // New 0.4.8
		
		// ISO Charset: EUC-JP
		$lang_string['html_charset'] = 'EUC-JP';
		$lang_string['php_charset'] = 'EUC-JP';
		
        setlocale(LC_CTYPE, 'Japanese_Japan.20932' );
		setlocale(LC_TIME, $lang_string['locale'] ); // <-- New 0.3.7
		
		// Some Global Strings
		
		// Menu
		$lang_string['menu_links'] = "����ƥ��";
		$lang_string['menu_home'] = "�ۡ���";
		$lang_string['menu_contact'] = "�᡼��"; // <-- New 0.3.8
		$lang_string['menu_stats'] = "���ץǡ���"; // <-- New 0.3.7r
		$lang_string['menu_calendar'] = "��������"; // New for 0.4.8
		$lang_string['menu_random_entry'] = "������";
		$lang_string['menu_archive'] = "����������";
		$lang_string['menu_viewarchives'] = "���ε����򸫤�"; // New in 0.4.7
		$lang_string['menu_menu'] = "��˥塼";
		$lang_string['menu_add'] = "��������ȥ꡼";
		$lang_string['menu_add_static'] = "��Ū�ڡ����κ���";
		$lang_string['menu_upload'] = "�����Υ��åץ���";
		$lang_string['menu_setup'] = "����";
		$lang_string['menu_categories'] = "���ƥ��꡼"; // 0.3.7q
		$lang_string['menu_info'] = "����ե��᡼�����"; // <-- New 0.3.7
		$lang_string['manage_users'] = "�桼������";
		$lang_string['manage_php_config'] = "PHP ������򸫤�"; // New in 0.5.0.1 
		$lang_string['menu_options'] = "���ץ��������";
		$lang_string['menu_themes'] = "�ơ���";
		$lang_string['menu_colors'] = "�ۿ�";
		$lang_string['menu_change_login'] = "�����󥭡��ѹ�";
		$lang_string['menu_logout'] = "��������";
		$lang_string['menu_login'] = "������";
		$lang_string['menu_most_recent'] = "�ǿ��Υ�����";
		$lang_string['menu_most_recent_entries'] = "�ǿ��Υ���ȥ꡼";
		$lang_string['menu_most_recent_trackback'] = "�ǿ��Υȥ�å��Хå�"; 
		$lang_string['menu_add_block'] = "��������֥�å�";
		$lang_string['menu_emoticons'] = "ɽ�𥢥�����"; // New for 0.4.7
		$lang_string['menu_avatar'] = "���Х���"; // New for 0.4.7
		$lang_string['menu_moderation'] = "ñ��/IP �ˤ���ǥ졼�����"; // New for 0.4.9
		$lang_string['menu_commentmoderation'] = "��ǧ�Ԥ��Υ�����"; // New for 0.5.0
		$lang_string['menu_random_entry'] = "������ ����ȥ꡼"; // New for 0.5.2
		$lang_string['menu_plugins'] = "�ץ饰����"; // New for 0.5.2
		$lang_string['notice_moderator1'] = "���ʤ���";
		$lang_string['notice_moderator2'] = " ��ǧ��ɬ�פʥ����Ȥ�����ޤ���";
		$lang_string['notice_loggedin'] = "��������Ǥ���";

			
		// Counter
		$lang_string['counter_today'] = "����:"; // New for 0.4.8
		$lang_string['counter_yesterday'] = "����:"; // New for 0.4.8
		$lang_string['counter_totalsidebar'] = "���:"; // New for 0.4.8
		$lang_string['counter_title'] = "�����󥿤ι��"; // New for 0.4.8
			
		// Other
		$lang_string['home'] = '�ۡ�������';
		$lang_string['nav_next'] = '�ʤ�'; // <-- New 0.3.7
		$lang_string['nav_back'] = '���'; // <-- New 0.3.7
		$lang_string['nav_first'] = '�ǽ��'; // New in 0.5.0.1
		$lang_string['nav_last'] = '�Ǹ��'; // New in 0.5.0.1
		$lang_string['search_title'] = '�������⸡��'; // <-- New 0.3.7
		$lang_string['search_go'] = '����'; // <-- New 0.3.7
		$lang_string['page_generated_in'] = '�ڡ������� %s ��'; // <-- New 0.3.7
		$lang_string['counter_total'] = 'Site Views: '; // New in 0.4.8
		$lang_string['read_more'] = '��ä��ɤ�...'; // New in 0.4.8
		$lang_String['randomentry'] = '������ ����ȥ꡼'; // New in 0.5.0.1
		$lang_string['randomquote'] = '������ ����'; // New in 0.5.0.1
			
		// SB Functions
		$lang_string['sb_months'] = array( '1��', '2��', '3��', '4��', '5��', '6��', '7��', '8��', '9��', '10��', '11��', '12��' );
		$lang_string['sb_default_title'] = '�����ȥ�ʤ�';
		$lang_string['sb_default_author'] = '��Ƽ�̾�ʤ�';
		$lang_string['sb_default_footer'] = '�եå��ʤ�';
			
		$lang_string['sb_edit'] = '�Խ�';
		$lang_string['sb_delete'] = '���';
		$lang_string['sb_permalink'] = '���Υ���ȥ꡼��URL'; // <-- New 0.3.8
		$lang_string['sb_trackback'] = '�ȥ�å��Хå�'; // <-- New 0.3.8
		$lang_string['sb_postedby'] = '��Ƽ�'; // 0.5.0
		$lang_string['sb_admin'] = '������'; // 0.5.0
		$lang_string['sb_relatedlink'] = '��Ϣ������'; // <-- New in 0.4.6
			
		$lang_string['sb_add_comment_btn'] = '�����Ȥ��';
		$lang_string['sb_read_entry_btn'] = '����ȥ꡼���ɤ�'; // 0.5.0
		$lang_string['sb_comment_btn_number_first'] = true;
		$lang_string['sb_comment_btn'] = '������';
		$lang_string['sb_comment_view'] = 'ɽ��'; // 0.5.0
		$lang_string['sb_comments_plural_btn_number_first'] = true;
		$lang_string['sb_comments_plural_btn'] = '������';
		$lang_string['sb_comments_plural_view'] = 'ɽ��'; // 0.5.0
			
		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '';
		$lang_string['sb_view_counter_post'] = ' ��ɽ��';
		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = '';
		$lang_string['sb_view_counter_plural_post'] = ' ��ɽ��';
			
		$lang_string['sb_add_link_btn'] = '��󥯤����ꡦ�ɲ�';
		$lang_string['sb_rate_entry_btn'] = '����ȥ꡼�����';
			
		// Entry Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
			$lang_string['label_subject'] = "�����ȥ�";
			$lang_string['label_insert'] = "����������";
			$lang_string['btn_bold'] = "�ܡ����";
			$lang_string['btn_italic'] = "������å�";
			$lang_string['btn_image'] = "���᡼��";
			$lang_string['btn_url'] = "���";
			$lang_string['btn_readmore'] = "read more"; // 0.4.8
			$lang_string['view_images'] = "���åץ��ɲ����λ���";
			$lang_string['label_entry'] = "����";
			$lang_string['btn_preview'] = "&nbsp;�ץ�ӥ塼&nbsp;";
			$lang_string['btn_post'] = "&nbsp;���&nbsp;";
			$lang_string['chk_visiblemenu'] = "��˥塼�����ɽ�� ";
			$lang_string['file_name'] = "���Υ���ȥ꡼�Υե�����̾ (���ڡ����ȳ�ĥ�Ҥ��Բ�)"; 
			// <-- New 0.3.8
			// Javascript Strings
			$lang_string['insert_styles'] = "�ƥ����Ȥ����Ϥ��Ƥ���������";
			$lang_string['insert_image'] = "������URL������";
			$lang_string['insert_url1'] = "��󥯥ƥ�����(���ץ����)";
			$lang_string['insert_url2'] = "�����URL";
			$lang_string['insert_url3'] = "������������ɥ��ǳ��� (���ץ����)"; 
			// <-- New 0.3.6
			$lang_string['form_error'] = "�����ȥ�����Ƥ������Ʋ�������";	
			// More Javascript Strings <-- New 0.3.6
			$lang_string['insert_image_optional'] = '���ץ����:';
			$lang_string['insert_image_width'] = '�������� (���ץ����):';
			$lang_string['insert_image_height'] = '�ĥ����� (���ץ����):';
			$lang_string['insert_image_popup'] = '�ݥåץ��åץ�����ɥ�����(���ץ����):';
			$lang_string['insert_image_float'] = '�����β����߰���(���ץ����):';
				
			$lang_string['day'] = '��';
			$lang_string['month'] = '��';
			$lang_string['year'] = 'ǯ';
			$lang_string['hour'] = '��';
			$lang_string['minute'] = 'ʬ';
			$lang_string['second'] = '��';
		}
		
		switch ($page) {
			case 'add':
				// Add Entry
				$lang_string['title'] = "��������ȥ꡼";
				$lang_string['instructions'] = "����������ȥ꡼��������ޤ���<br />����ȥ꡼�γ�ǧ�ϡ֥ץ�ӥ塼�ץܥ���򥯥�å����Ƥ���������<br />������������ȥ꡼����Ƥϡ���ơץܥ���򥯥�å����Ʋ�������";
				$lang_string['title_ad'] = "�ȥ�å��Хå��γ�ǧ"; // <-- New 0.3.8
				$lang_string['instructions_ad'] = "��ưŪ�˸��Ф��줿URL�Ǥ����ȥ�å��Хå�����Ĥ�����ϡ�OK�ץܥ���򲡤��Ƥ���������"; // <-- New 0.3.8
				$lang_string['label_tb_ping'] = "�ȥ�å��Хå����� (����ޤǶ��ڤä�ʣ�������ǽ)"; // <-- New 0.3.8
				$lang_string['label_tb_autodiscovery'] = "autodiscovery"; // <-- New 0.3.8
				$lang_string['label_relatedlink'] = "Related Link"; // New for 0.4.6
							$lang_string['label_categories'] = "Category List";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "�ץ�ӥ塼 / �Խ�";
				$lang_string['instructions_preview'] = "����ȥ꡼���Խ���Ԥ��ޤ����ʥ�����ɬ���Ĥ��Ʋ�������'.";
				$lang_string['title_update'] = "����ȥ꡼������";
				$lang_string['instructions_update'] = "����ȥ꡼����ơ���ǧ��Ԥ���������ޤ���";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;"; // <-- New 0.3.8
    			$lang_string['cancel_btn'] = "&nbsp;Cancel&nbsp;"; // <-- New 0.3.8
	
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>����ȥ꡼����¸�˼��Ԥ��ޤ�����<br /><br />�����Ф���α�����:<br />";
				$lang_string['success'] = "<h2>����ȥ꡼����¸���ޤ���</h2>����ȥ꡼����¸���������ޤ�����";
			break;

			case 'add_static':
			// Add Entry
				$lang_string['title'] = "��Ū�ڡ����κ���";
				$lang_string['instructions'] = "�ڡ�����¦�Υ���ƥ�ĥ��ꥢ�˥�󥯤������Ū�ڡ�����������ޤ���";
				// Preview / Edit Entry
					$lang_string['title_preview'] = "��ǧ / �Խ�";
				$lang_string['instructions_preview'] = "�����˥ץ�ӥ塼��ɽ������ޤ��ʥ�����ɬ���Ĥ��Ʋ�������";
				$lang_string['title_update'] = "��Ū�ڡ����Υ��åץǡ���";
				$lang_string['instructions_update'] = "��Ū�ڡ�������ơ��ץ�ӥ塼���Ԥ��ޤ���";
				$lang_string['form_error'] = "�����ȥ롢���ơ��ե�����͡���������Ʋ�����";	
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>En����ȥ꡼����Ͽ�Ǥ��ޤ���<br /><br />�����Ф���α�����:<br />";
			break;

			case 'add_block':
			// Add / Manage Blocks
				$lang_string['title'] = "�֥�å����Խ����ɲ�";
				$lang_string['instructions'] = "��������֥�å����ɲä��Խ���Ԥ��ޤ���<br />��������֥�å��Ȥϥڡ��������Υ�˥塼���Ǥ�դ����䤻��֥�å��Ǥ���";
				$lang_string['up'] = "���";
				$lang_string['down'] = "������";
				$lang_string['edit'] = "�Խ�";
				$lang_string['delete'] = "���";
				$lang_string['block_name'] = "�֥�å������ȥ�";
				$lang_string['block_content'] = "�֥�å�������";
				$lang_string['instructions_edit'] = "�֥�å��Խ���";
				$lang_string['instructions_modify'] = "����å����ƥ֥�å����ѹ����Ʋ�����";
				$lang_string['submit_btn_edit'] = "�Խ�";
				$lang_string['submit_btn_add'] = "�ɲ�";
				$lang_string['form_error'] = "�����ȥ�������Ʋ�������";
			break;

			case 'add_link':
				$lang_string['static_pages'] = "Static Pages:";
				// Add / Manage Links
				$lang_string['title'] = "��󥯤��ɲá��Խ�";
				$lang_string['instructions'] = "¾�Υ����ȤؤΥ�󥯤��ɲä��ޤ���<br />�ɲäϥ��ɥ쥹�������֥�󥯤�ä���פ򥯥�å����Ƥ�����������󥯤ν�����ѹ�����ˤϡ־�ءסֲ��ءפ򥯥�å����Ƥ�����������󥯤�������ˤ��Խ��򥯥�å����Ƥ�����������󥯤����Ϻ���򥯥�å����Ƥ���������";
				$lang_string['up'] = "���";
				$lang_string['down'] = "����";
				$lang_string['edit'] = "����";
				$lang_string['delete'] = "���";
				$lang_string['link_name'] = "̾��:";
				$lang_string['link_url'] = "�����URL: (����ǥ��ѥ졼�����ˤʤ�ޤ���)";
				$lang_string['instructions_edit'] = "��󥯤��Խ���:";
				$lang_string['instructions_modify'] = "��󥯤�������ˤϲ��˥���å����Ƥ���������:";
				$lang_string['submit_btn_edit'] = "��󥯤��Խ�";
				$lang_string['submit_btn_add'] = "��󥯤�ä���";
				$lang_string['form_error'] = "̾���������Ʋ�������";
			break;

			case 'categories':
				// Add / Manage Links
				$lang_string['title'] = "���ƥ��꡼���ɲä��Խ�";
				
				$lang_string['instructions'] = "�ʲ��Υե��������Ѥ��ƥ��ƥ��꡼���ɲä��Խ���Ԥ��ޤ���<br /> ���줾��Υ��ƥ�����ܤˤ�'���ƥ���̾(ID�ֹ�)'���դ��Ʋ������� <br />���ڡ�����������Ϥ��Τޤ�ȿ�Ǥ��ޤ���<br /><br /><b>��:</b><br />����(1)<br />�˥塼��(3)<br />&nbsp;&nbsp;���� (6)<br />&nbsp;&nbsp;���٥�� (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;���� (7)<br />�ƥ��Υ��� (2)<br />";
				$lang_string['error'] = "���顼";
				$lang_string['current_categories'] = "�����ȥ��ƥ��꡼";
				$lang_string['no_categories_found'] = "���ƥ��꡼������ޤ���";
				$lang_string['category_list'] = "���ƥ��꡼�ꥹ��";
				$lang_string['validate'] = "���ƥ��꡼��ͭ���ˤ���";
				$lang_string['submit_btn'] = "&nbsp;����&nbsp;";
			break;

			case 'colors':
			// Change Colors
				$lang_string['title'] = "�ۿ��ѹ�";
				$lang_string['instructions'] = "�ڡ������ۿ����ѹ����ޤ���<br />�ƹ��ܤ����򤷤ƥ��顼�ԥå����⤷���Ͽ��ͤǿ�����ꤷ�Ƥ���������";
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

				$lang_string['comment_bg'] = "�����Ȥ��ط�"; // 0.5.0
				$lang_string['comment_title_bg'] = "�����ȥ����ȥ���ط�"; // 0.5.0
				$lang_string['comment_border'] = "�����Ȥζ���"; // 0.5.0
				$lang_string['comment_title_text'] = "�����ȥ����ȥ��ʸ��"; // 0.5.0
				$lang_string['comment_text'] = "�����Ȥ�ʸ��"; // 0.5.0

				$lang_string['menu_bg'] = "Menu BG";
				$lang_string['menu_title_bg'] = "Menu Title BG";
				$lang_string['menu_border'] = "Menu Border";
				$lang_string['menu_title_text'] = "Menu Title Text";
				$lang_string['menu_text'] = "Menu Text";
				$lang_string['menu_link_reg_color'] = "Menu Link Default";
				$lang_string['menu_link_hi_color'] = "Menu Link Hover";
				$lang_string['menu_link_down_color'] = "Menu Link Active";
				// Submit
				$lang_string['color_preset'] = "Color Schemes:"; // 0.3.7q
				$lang_string['scheme_name'] = "Enter a custom color scheme name:"; // 0.3.7q
				$lang_string['scheme_file'] = "Enter scheme file name: (no spaces or file extensions)"; // 0.3.7q
				$lang_string['save_btn'] = "&nbsp;Save&nbsp;"; // 0.3.7q
				$lang_string['form_error'] = "Please enter a name for your custom color scheme."; // 0.3.7q
				$lang_string['submit_btn'] = "&nbsp;����&nbsp;";
				$lang_string['theme_doesnt_allow_colors'] = 'The currently selected theme does not allow for custom colors.';
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your entry.<br /><br />�����Ф���α�����:<br />";
				$lang_string['success'] = "<h2>������¸���ޤ���!</h2>�������¸���������ޤ���"; // New for 0.4.8.1
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
				$lang_string['comment_capcha'] = "Anti-Spam: Enter "; // 0.4.2
				$lang_string['title'] = "������";
				$lang_string['header'] = "�����Ȥ��";
				$lang_string['instructions'] = "ɬ�׻���ȥ����Ȥ����Ϥ��Ʋ�������";
				$lang_string['comment_name'] = "̾��:";
				$lang_string['comment_email'] = "Email:"; // 0.3.8
				$lang_string['comment_url'] = "URL:"; // 0.3.8
				$lang_string['commentposted'] = "New comment posted at: ";  // New for 0.4.6.2
				$lang_string['comment_remember'] = "�������Ͽ����:"; // 0.3.8
				$lang_string['comment_text'] = "������:";
				$lang_string['post_btn'] = "&nbsp;�����Ȥ����&nbsp;";
				$lang_string['delete_btn'] = "���";
				$lang_string['ban_btn'] = "���Υ桼����IP���ɥ쥹�ˤ���Υ����Ȥ�ػ�";
				$lang_string['expired_comment1'] = "We are sorry. New comments are not allowed after "; // New for 0.4.8
				$lang_string['expired_comment2'] = " days."; // New for 0.4.8
				
				$lang_string['blacklisted'] = "Sorry, your IP address has been banned. Comments not allowed."; // New for 0.4.8
				$lang_string['bannedword'] = "Your comment, url, name or email contained word(s) that have been banned by the administrator. Your comment has NOT been posted."; // New for 0.4.8
				$lang_string['nocomments'] = "Comments are not available for this entry.
         "; // New for 0.4.9
				$lang_string['email_moderator'] = "Comments are currently moderated. This comment needs approval before it will be seen by the public."; // New for 0.5.0
				$lang_string['user_notice_mod'] = "Moderation is turned on for this blog. Your comment will require the administrators approval before it will be visible."; // new for 0.5.0

				$lang_string['return_to_comments'] = 'Return to Comments';

				// Error Response
				$lang_string['error_add'] = "<h2>Whoops!</h2>�����Ȥ���ƤǤ��ޤ���Ǥ�����<br /><br />�����Ф���α�����:<br />";
				$lang_string['error_delete'] = "<h2>Whoops!</h2>�����Ȥ���ƤǤ��ޤ���Ǥ�����<br /><br /> I ran into a problem while deleting your comment.<br /><br />�����Ф���α�����:<br />";
				$lang_string['error_ban'] = "<h2>Whoops!</h2>IP not added to banned ip listing.<br /><br />Server Reported:<br />";
				$lang_string['success_add'] = "<h2>Comment Added!</h2>Your comment has been successfully saved."; // New for 0.4.8.1
				$lang_string['success_delete'] = "<h2>Comment Deleted!</h2>The comment has been deleted."; // New for 0.4.8.1
				$lang_string['success_ban1'] = "<h2>IP Banned!";
				$lang_string['success_ban2'] = "</h2>To remove this ban in the future, use the Moderation option in the preferences menu."; // New for 0.4.8.1
				$lang_string['form_error'] = "Please complete the Name and Comment fields."; // <-- Need Translation
				$lang_string['error_noip'] = "IP ���ɥ쥹�ʤ��ǥ֥�å��ꥹ���׵�򤷤ޤ���"; // <-- Need Translation

				$lang_string[ 'error_comments_disabled' ] = '<h2>Error!</h2>Hey! Comments are disabled on this blog. Are you a spambot?'; // New 0.5.0
				$lang_string[ 'error_no_match' ] = "<h2>Error!</h2>Your IP address doesn\'t match posted IP address. Are you a spambot?"; // New 0.5.0
				$lang_string[ 'error_fields_missing' ] = '<h2>Error!</h2>Missing the following fields: '; // New 0.5.0
				$lang_string[ 'error_spambot' ] = '<h2>Error!</h2>Capcha data is missing. Are you a spambot?'; // New 0.5.0
				$lang_string[ 'error_capcha' ] = '<h2>Error!</h2>The capcha you entered is incorrect.'; // New 0.5.0
				$lang_string[ 'error_bad_data' ] = '<h2>Error!</h2>Post data is not valid. Are you a hacker?'; // New 0.5.0
				$lang_string[ 'error_entry_missing' ] = '<h2>Error!</h2>You are trying to comment on an entry that doesn\'t exist'; // New 0.5.0
				$lang_string[ 'error_empty_text' ] = '<h2>Error!</h2>You didn\'t enter any comments or your name.'; // New 0.5.0
			break;

			case 'delete':
				$lang_string['title'] = "����ȥ꡼�κ��";
				$lang_string['instructions'] = "����ȥ꡼�κ����Ԥ��ޤ���<br />���ٺ����������ȥ꡼�ϸ����᤹���Ͻ���ޤ���";
				$lang_string['ok_btn'] = "&nbsp;���&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;����󥻥�&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>����Ǥ��ޤ���Ǥ�����<br /><br />�����Ф���α�����:<br />";
				$lang_string['success'] = "<h2>����ȥ꡼�������ޤ���!</h2>����ȥ꡼�Ϻ������ޤ�����"; // New for 0.4.8.1
			break;

			case 'delete_static':
				$lang_string['title'] = "��Ū�ڡ����κ��";
				$lang_string['instructions'] = "��Ū�ڡ����κ����Ԥ��ޤ������ٺ�������ڡ����򸵤��᤹���ϤǤ��ޤ���";
				$lang_string['ok_btn'] = "&nbsp;�������&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;����󥻥�&nbsp;";
							// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>����˼��Ԥ��ޤ���<br /><br />�����Ф���α�����:<br />";
				$lang_string['success'] = "<h2>��Ū�ڡ����������ޤ���!</h2>��Ū�ڡ����Ϻ������ޤ�����"; // New for 0.4.8.1
			break;

			case 'image_list':
				$lang_string['title'] = "Image List";
				$lang_string['instructions'] = "�ե�����̾�򥯥�å��ǲ����򻲾Ȥ��ޤ���<br /><br />����ȥ꡼�˲�����ä�����ˡ:<br />1) ��󥯤򥳥�ȥ��륯��å����ơ�<br />�֥���åץܡ��ɤؤΥ��ԡ�����󥯡פ�����Ǥ���������.<br />2) ��������ȥ꡼����ꡢ�Խ����Ƥ���������<br />3) ��img�ץܥ���򥯥�å����ơ�������ɥ���URL����ꤷ�Ƥ���������";
			break;

			case 'info': // New 0.3.7
				$lang_string['title'] = "�᥿����";
				$lang_string['instructions'] = "���������󥸥��RSS�ۿ��˻��Ѥ�����������ꤷ�ޤ���";
				$lang_string['info_keywords'] = "�������(����ޤ�ʣ�������ǽ����:
���󥷥󥷥󥷥�ץ�,PHP,�֥�)";
				$lang_string['info_description'] = "����(�����ȤξҲ�������Ʋ�������)";
				$lang_string['info_copyright'] = "���ɽ��(���ɽ���Υƥ����Ȥ����ɽ���ڡ����Υ��ɥ쥹�ʤ�)";
				$lang_string['tracking_code'] = "External Tracking Code: (HTML code that needs to be run on the main page (in the header tags for safety) only for every user that comes to the page i.e. Google Analytics)";
				$lang_string['submit_btn'] = "&nbsp;��Ͽ&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your information.<br /><br />�����Ф���α�����:<br />";
				$lang_string['success'] = "<h2>�᥿�������¸���ޤ���!</h2>�������¸���������ޤ�����"; // New for 0.4.8.1
				$lang_string['form_error'] = "�����ȥ롢���ԤΥե�����ɤ������Ƥ���������";
			break;

			case 'index':
				// Index
				break;
			case 'static':
				// Index
				break;
			case 'rating': // New 0.3.8
				$lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your information.<br /><br />�����Ф���α�����:<br />";
				$lang_string['success'] = "<h2>ɾ������¸���ޤ���!</h2>���ʤ����Ԥä�ɾ������¸����ޤ�����"; // New for 0.4.8.1
				break;

			case 'login':
				$lang_string['upgrade'] = "<h2>Upgrade</h2>"; // New 0.3.8
				$lang_string['upgrade_count'] = "%n comment files need to be upgraded:"; // New 0.3.8
				$lang_string['upgrade_url'] = "Upgrade Comments"; // New 0.3.8
				$lang_string['title'] = "������";
				$lang_string['instructions'] = "�桼��̾�ȥѥ���ɤ������Ʋ�������";
				$lang_string['username'] = "�桼��̾:";
				$lang_string['password'] = "�ѥ����";
				$lang_string['submit_btn'] = "&nbsp;������&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Success!</h2>�����󤷤ޤ���������ǤϤ��ڤ��߲�����!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>������Ǥ��ޤ���Ǥ������������桼��̾�ȥѥ���ɤ�Ƶ������Ʋ�������<p />";
				$lang_string['inactive_account'] = "<h2>Whoops!</h2>������Ǥ��ޤ���Ǥ����� ���ʤ��Υ�������Ȥϡ��ʤ�餫����ͳ�ǡ������Ԥˤ�ä�̵��������Ƥ��ޤ���<p />";
				$lang_string['form_error'] = "�桼��̾�ȥѥ���ɤ������Ʋ�������";
			break;

			case 'logout':
				$lang_string['title'] = "��������";
				$lang_string['error'] = "<h2>Goodbye!</h2>�������Ȥ��ޤ�����(�ɤä��ߤ������󤷤Ƥʤ��ä����ɡ�)<p />";
				$lang_string['error_no_cookie'] = "<h2>Goodbye!</h2>�������Ȥ��ޤ�����(���å��������Ĥ���ޤ���Ǥ����������󤷤Ƥʤ��ä���Ǥ��礦��)<p />"; // New 0.5.0
				$lang_string['success'] = "<h2>Goodbye!</h2>�������Ȥ��ޤ�����<p /> (5�ø�˥ۡ���ڡ����ذ�ư���ޤ���)<p />";
			break;
		
			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>��¸�˼��Ԥ��ޤ�����<br /><br />�����Ф���α�����:<br />";
			break;
		
			case 'set_login':
				$lang_string['title'] = "�桼����̾�ȥѥ���ɤ��ѹ�";
				$lang_string['instructions'] = "���ʤ��Υ桼����̾�ޤ��ϥѥ���ɤ��ѹ����ޤ���<br />�������桼����̾����ӥѥ���ɤ����Ϥ��Ƥ���������";
				$lang_string['username'] = "�桼����̾:";
				$lang_string['password'] = "�ѥ����:";
				$lang_string['submit_btn'] = "&nbsp;����&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Success!</h2>�������桼����̾�ȥѥ���ɤ�ͭ���ˤʤ�ޤ�����<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>�������桼����̾�ȥѥ���ɤ���Ͽ�˼��Ԥ��ޤ�����<br /><br />�����Ф���α�����:<br />";
				$lang_string['form_error'] = "�桼����̾�ȥѥ���ɤ������Ʋ�������";
				$lang_string['explanation'] = "In recent versions, our password structure has changed.  There is no longer a way to update passwords
					and/or logins from inside the blog code.  In order to change your password, delete /config/password.php and make sure install*.php
					exists on the local server.  Once that is done, refresh this page (or logout).  You will be presented with the same script
					to generate your password as you did when originally creating the blog site.";  // New for 0.4.6
				break;

			case 'install00':
				$lang_string['title'] = "Welcome";
				$lang_string['instructions'] = "Thank you for choosing Simple PHP Blog!";
				$lang_string['blog_choose_language'] = "Choose Language:";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
			break;

			case 'install01':
				$lang_string['title'] = "Simple PHP Blog�ؤ褦������";
				$lang_string['instructions'] = "Thank you for choosing Simple PHP Blog!<br /><br />Simple PHP Blog ��PHP 4.1�ʹߤ�ư���֥������ƥ�Ǥ���<br />���ե������ƥ����ȥե�����ˤ���������Τǥǡ����١�����ɬ�פȤ��ޤ���<br />�ǡ������Ǽ���룳�ĤΥե����('config', 'content', and 'images')��ư�������ޤ���<br /><b>���Υ�å������򥯥�å����Ƽ��˿ʤ�Ǥ�������:</b>";
				$lang_string['begin'] = "[ ���åȥ��åפ�³���� ]";
            break;

			case 'install02':
				$lang_string['title'] = "���åȥ��å�";
				$lang_string['instructions'] = "�ǡ�����Ǽ�ե������������ޤ���";
				$lang_string['folder_exists'] = "�ե�����ϴ��˺����ѤߤǤ���";
				$lang_string['folder_failed'] = "�ե���������˼��Ԥ��ޤ���";
				$lang_string['folder_success'] = "�ե����������λ���ޤ���";
				// Help
				$lang_string['help'] = "
				<h2>Whoops!</h2>
				Could not create one or more folders! This is most likely due to:<br>
				<i>1) <b>Write Permissions</b> aren't set to allow <b>Read/Write</b> access.</i><br>
				<i>2) The <b>UID</b>'s (user ID's) of all files and folder must match.</i><p />
				
				Follow the trouble-shooting instructions below and please try again:<p />				
				1) Manually create the following folders: <b>config</b>, <b>content</b>, and <b>images</b>.<p />
				2) Enabled <b>Write Permissions</b> on the folders. In your FTP program, Owner, User, and World should have <b>Read</b> and <b>Write</b> access. <i>(You may need to contact your service provider to change these...)</i><p />
				3) Make sure the UID's of all your files and folders are the same. <i>(You may need to contact your service provider to change these...)</i>";
				$lang_string['try_again'] = "[ Try Again ]";
				// Success
				$lang_string['success'] = "<h2>����!</h2>�ե������������λ���ޤ�����<p /><b>���åȥ��åפ�³����򥯥�å����Ʋ�����:</b>";
				$lang_string['continue'] = "[ ���åȥ��åפ�³���� ]";
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
				$lang_string['title'] = "�桼����̾�ȥѥ���ɤ�����";
				$lang_string['instructions'] = "�桼����̾�ȥѥ���ɤ������Ʋ�������";
				$lang_string['username'] = "�桼����̾:";
				$lang_string['password'] = "�ѥ����:";
				$lang_string['submit_btn'] = "&nbsp;��Ͽ&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Congratulations!</h2>���󥹥ȡ���ϴ�λ���ޤ���������ǤϤ��ڤ��ߤ���������<p />";
				$lang_string['btn_setup'] = "[ ����˿ʤ� ]";
					// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your Username and/or Password.<br /><br />�����Ф���α�����:<br />";
$lang_string['form_error'] = "�桼����̾�ȥѥ���ɤ������Ƥ���������";
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
				$lang_string['title'] = "����";
				$lang_string['instructions'] = "blog������ȴ����Ծ�������ꤷ�ޤ���";
				$lang_string['blog_title'] = "�֥������ȥ�";
				$lang_string['blog_header'] = "�إå������� URL: images/blogheader.jpg (�ơ��ޤ��ȤΥǥե���Ȳ�����Ȥ����϶��Τޤޤˤ��Ƥ���������)";
				$lang_string['blog_author'] = "������̾";
				$lang_string['blog_email'] = "Email:"; // <-- New 0.3.7
				$lang_string['blog_avatar'] = "���Х��� URL: (�Ȥ�ʤ����϶��Τޤޤˤ��Ƥ���������)"; // <-- New 0.4.7
                $lang_string['blog_footer'] = "�եå�:";
				$lang_string['blog_choose_language'] = "��������";
				$lang_string['blog_enable_comments'] = "�����ȵ�ǽ��Ȥ�"; 
				// <-- New 0.3.6
				$lang_string['blog_comments_popup'] = "�����Ȥ�ݥåץ��åץ�����ɥ���ɽ��"; // <-- New 0.3.6
				$lang_string['blog_enable_start_category'] = "Use specific category for first page of entries: "; // Now for 0.5.1
				$lang_string['blog_search_top'] = "Show Search In Entries (instead of in sidebar)"; // New for 0.5.0
                $lang_string['blog_enable_static_block'] = "Show a defined block as the first entry of blog entries: "; // New for 0.5.0
				$lang_string['static_block_border'] = 'Show Border'; // New for 0.5.0
				$lang_string['static_block_noborder'] = 'No Border'; // New for 0.5.0
				$lang_string['blog_enable_voting'] = "����ȥ꡼ɾ����ǽ��Ȥ�"; 
				// <-- New 0.3.8
				$lang_string['blog_enable_cache'] = "Enable Blog Entry Cache (may provide speed increase on some servers)"; // New for 0.4.6
				$lang_string['blog_enable_calendar'] = "Enable Calendar"; // New for 0.4.6
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
				$lang_string['blog_email_notification'] = "�����������Ȥ�������᡼����Τ餻��"; // <-- New 0.3.7
				$lang_string['blog_send_pings'] = "�����С���Ping����������"; // <-- New 0.3.7
				$lang_string['blog_ping_urls'] = "���Τ�URL�������Ʋ������� (�㡧http://rpc.weblogs.com/RPC2)<br />(����ޤǶ��ڤ���ˤ��ʣ���Υ����С�����ꤹ�뤳�Ȥ�����ޤ���)"; // <-- New 0.3.7
				$lang_string['blog_trackback_about'] = "�ȥ�å��Хå���������ǽ�������Ԥ��ޤ���<br /> ��ư�ǥȥ�å��Хå����ɲä��뤫��ư���е�ǽ����Ѥ��뤫����Ǥ��ޤ���"; // <-- New 0.3.8
				$lang_string['blog_trackback_enabled'] = "�ȥ�å��Хå���ǽ����Ѥ���";
				// <-- New 0.3.8
				$lang_string['blog_trackback_auto_discovery'] = "�ȥ�å��Хå��μ�ư��������ǽ����Ѥ��롣"; // <-- New 0.?.?
				$lang_string['blog_max_entries'] = "���ڡ�����κ���ɽ������ȥ��"; 
				// <-- New 0.3.6
				$lang_string['blog_comment_tags'] = "��������ǻ��Ѳ�ǽ�ʥ���"; 
				// <-- New 0.3.6
				$lang_string['blog_gzip_about'] = "SPHP 4.0.4�ʹߤ�����Ѳ�ǽ��gzip(.gz)���̵�ǽ�������Ԥ��ޤ���<br />�ե�����򰵽̤�����ˤ��ǥ��������ڡ���������ȥ����С��ؤ���٤��ޤ�������Ǥ��ޤ���<br />�������Ǥϥ��դˤʤäƤ���ޤ��Τ�ɬ�פ˱�����ͭ���ˤ��Ʋ�������"; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_txt'] = "���ե������gzip�ǰ��̤���"; 
				// <-- New 0.3.7
				$lang_string['blog_enable_gzip_output'] = "HTTP�����Ѥ�gzip���̤���Ѥ��ޤ�"; // <-- New 0.3.7
				$lang_string['submit_btn'] = "&nbsp;����&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>�������¸�˼��Ԥ��ޤ���<br /><br />�����Ф���α�����:<br />";
				$lang_string['success'] = "<h2>�������¸���ޤ���!</h2>�������¸���������ޤ�����"; // New for 0.4.8.1
				$lang_string['form_error'] = "Please complete the Title and Author fields.";
				$lang_string['label_entry_order'] = "����ȥ꡼��ɽ��";
				$lang_string['select_new_to_old'] = "���������ɽ��";
				$lang_string['select_old_to_new'] = "�Ť����ɽ��";
				$lang_string['label_comment_order'] = "�����Ȥ�ɽ��";
				$lang_string['cal_sunday'] = "������"; // New for 0.4.6
				$lang_string['cal_monday'] = "������"; // New for 0.4.6
				$lang_string['label_calendar_start'] = "���������ν����Ϥޤ�����"; // New for 0.4.6
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
				$lang_string['title_sidebar'] = "�����ɥС�"; // New in 0.4.7
				$lang_string['title_comments'] = "������"; // New in 0.4.7
				$lang_string['title_trackback'] = "�ȥ�å��Хå�"; // New in 0.4.7
				$lang_string['title_compression'] = "����"; // New in 0.4.7
				$lang_string['title_entries'] = "����ȥ꡼"; // New in 0.4.7
				$lang_string['title_general'] = "����"; // New in 0.4.7
				$lang_string['title_language'] = "����"; // New in 0.4.7
				$lang_string['blog_comment_days_expiry'] = "����ȥ꡼����Ƥ���Ƥ��鲿���δ֥����ȤǤ���褦�ˤ��ޤ���? (0 �ϴ��¤ʤ�)"; // New in 0.4.8
				$lang_string['blog_comments_moderation'] = "Require comment entries to be approved by logged in user before public
          (always visible to logged in user)"; // New in 0.5.0
				$lang_string['comment_moderation'] = "�����Ⱦ�ǧ���ץ����"; // New in 0.5.0

			break;

			case 'trackbacks':  // <-- New 0.3.8
				// Trackbacks
				$lang_string['title'] = "�ȥ�å��Хå�";
				$lang_string['header'] = "���Υ���ȥ꡼�Υȥ�å��Хå�URL";
				$lang_string['delete_btn'] = "���";
				// Error Response
				$lang_string['error_add'] = "Error storing trackback data.";
			break;

			case 'options':
				$lang_string['title'] = "���ץ��������";
							$lang_string['instructions'] = "�����Ȥȥ���ȥ꡼������ɽ���Ȼ���ɽ���򥫥����ޥ������뤿�������Ǥ���<br />���դ�û�����դ�Ĺ�����ա�����ɽ����12���������뤤��24�������λ���ɽ�������򤹤뤳�Ȥ��Ǥ��ޤ���<br />�ץ�ӥ塼�ǳ�ǧ��������Ǥ��ޤ���";
				// Long Date
				$lang_string['ldate_title'] = "Ĺ�����շ���";
				$lang_string['weekday'] = "����";
				$lang_string['month'] = "��";
				$lang_string['day'] = "��";
				$lang_string['year'] = "ǯ";
				$lang_string['none'] = "̵��";
				// Short Date
				$lang_string['sdate_title'] = "û������:";
				$lang_string['s_month'] = "��";
				$lang_string['s_mon'] = "MMM";
				$lang_string['s_day'] = "��";
				$lang_string['s_year'] = "ǯ";
				$lang_string['zero_day'] = "���դ˥�����դ�����㡧01��";
				$lang_string['show_century'] = "�����ά���ˤ�ɽ��";
				// Time
				$lang_string['time_title'] = "����ɽ��";
				$lang_string['12hour'] = "12������";
				$lang_string['24hour'] = "24������";
				$lang_string['before_noon'] = "����";
				$lang_string['after_noon'] = "���";
				// Date
				$lang_string['date_title'] = "���դ�ɽ������:";
				$lang_string['long_date'] = "Ĺ������";
				$lang_string['short_date'] = "û������";
				$lang_string['time'] = "����";
				// Menu
				$lang_string['menu_title'] = "��˥塼������ɽ������:";
				$lang_string['long_date'] = "Ĺ������";
				$lang_string['short_date'] = "û������";
				// Used in multiple places
				$lang_string['zero_day'] = "������դ�����㡧01��";
				$lang_string['zero_month'] = "������դ�����㡧01��";
				$lang_string['zero_hour'] = "����˥�����դ�����㡧01��";
				$lang_string['separator'] = "���ѥ졼����";
				$lang_string['preview'] = "�ץ�ӥ塼";
				$lang_string['server_offset'] = "�����С����ե��å�";
				
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;����&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your information.<br /><br />�����Ф���α�����:<br />";
				$lang_string['success'] = "<h2>���ץ�������¸���ޤ���!</h2>�������¸���������ޤ�����";
			break;

			case 'themes':
				$lang_string['title'] = "���Ѥ��ѹ�";
				$lang_string['instructions'] = "�ץ�������˥塼������Ѥ���ơ��ޤ����򤷤Ƥ���������";
				// Themes
				$lang_string['choose_theme'] = "themes";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;����&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your information.<br /><br />�����Ф���α�����:<br />";
				$lang_string['success'] = "<h2>�ơ��ޤ����򤷤ޤ���!</h2>�������¸���������ޤ�����"; // New for 0.4.8.1
			break;

			case 'upload_img':
				$lang_string['title'] = "�����Υ��åץ���";
				$lang_string['instructions'] = "�����ե�����Υ��åץ��ɤ�Ԥ��ޤ���";
				$lang_string['select_file'] = "�ե����������";
				$lang_string['upload_btn'] = "���åץ���";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>�����򥢥åץ��ɤǤ��ޤ���Ǥ����� Here's some more information:<br /><br />�����Ф���α�����:<br />";
				$lang_string['success'] = "<h2>�����򥢥åץ��ɤ��ޤ���!</h2>�����Υ��åץ��ɤ��������ޤ�����"; // New for 0.4.8.1
			break;

			case 'search': // <-- New 0.3.7
				$lang_string['title'] = "õ�����";
				$lang_string['instructions'] = "����������ɡ�<b>%string</b>:";
				$lang_string['not_found'] = "���Ĥ���ޤ���Ǥ�����<br />�㤦������ɤǺƸ������Ʋ�������";
			break;

			case 'contact': // <-- New 0.3.8
				$lang_string['title'] = "���󥿥���";
				$lang_string['instructions'] = "�����ͤؤΥ�å�������Ϣ��Ϥ�����ؤ��ꤤ���ޤ���";
				$lang_string['form_error'] = "�����ȥ�ȥ�å������������Ʋ�������";
				$lang_string['name'] = "��̾���������Ʋ�������";
				$lang_string['email'] = "Email���ɥ쥹�������Ʋ�������";
				$lang_string['subject'] = "�����ȥ�������Ʋ�������";
				$lang_string['comment'] = "��å������򤪴ꤤ���ޤ���";
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
				$lang_string['title'] = "����";
				$lang_string['general'] = "����";
				$lang_string['entry_info'] = "<b>%s</b> ����ȥ꡼�������� <b>%s</b> words stored in <b>%s</b> bytes";
				$lang_string['comment_info'] = "<b>%s</b> �����Ȼ����� <b>%s</b> words stored in <b>%s</b> bytes";
				$lang_string['trackback_info'] = "<b>%s</b> ��¸�ȥ�å��Хå� <b>%s</b> bytes";
				$lang_string['static_info'] = "<b>%s</b> ��Ū�ڡ��� <b>%s</b> words stored in <b>%s</b> bytes";
				$lang_string['most_viewed_entries'] = "10 ����ȥ꡼���ȿ�";
				$lang_string['most_commented_entries'] = "10 ����ȥ꡼ɾ��";
				$lang_string['most_trackbacked_entries'] = "10 �ȥ�å��Хå���";
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
				$lang_string["save_button"] = 'ɽ�𥢥��������¸';
			break;

			case 'archives': // New for 0.4.8
				$lang_string['title'] = "����������";
				$lang_string['showall'] = "���٤�ɽ��";
			break;

			case 'manage_users':  // 
				$lang_string['title'] = "�桼���δ������ѹ�";
				$lang_string['instructions'] = "Add, Modify, or Delete users that are not administrators but have the ability to create blog entries and/or moderate the comments.";
				$lang_string['fulladminerror'] = "You must be a full administrator to do this!";
				$lang_string['header_user'] = "�桼��: ";
				$lang_string['header_property'] = "����";
				$lang_string['header_value'] = "��";
				$lang_string['prop_username'] = "�桼��̾:";
				$lang_string['prop_fullname'] = "ɽ������̾��:";
				$lang_string['prop_password'] = "�ѥ����:";
				$lang_string['prop_email'] = "Email:";
				$lang_string['prop_avatar'] = "���Х��� URL:";
				$lang_string['prop_state'] = "Active?";
				$lang_string['prop_sec_Moderate'] = "Moderate Comments?";
				$lang_string['prop_sec_Delete'] = "Blog �Υ���ȥ꡼������ǽ?";
				$lang_string['prop_sec_Edit'] = "���٤ƤΥ���ȥ꡼���Խ���ǽ?";
				$lang_string['btn_SaveChanges'] = "�ѹ�����¸";
				$lang_string['btn_CreateUser'] = "�桼������";
				$lang_string['btn_Cancel'] = "����󥻥�";
				$lang_string['grid_header'] = "�桼������";
				$lang_string['grid_login'] = '������̾';
				$lang_string['grid_email'] = 'Email';
				$lang_string['grid_avatar'] = '���Х���';
				$lang_string['grid_state'] = 'Active?';
				$lang_string['btn_modify'] = '�ѹ�';
				$lang_string['btn_delete'] = '���';
				$lang_string['create_user'] = "�桼������";
			break;

			default:
			break;
		}

	}
		
?>
