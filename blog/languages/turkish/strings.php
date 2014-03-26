<?php
// Turkish Language Translation(s)
  // (c) 2004 Alexander Palmo, apalmo <at> bigevilbrain <dot> com
  // (c)  Edits: 2007 Ferdi KIZIL, rhythm80 <at> hotmail <dot> com

  // Simple PHP Version: 0.5.0.1
  // Language Version:   0.5.0.1

  function sb_language( $page ) {
    global $language, $html_charset, $php_charset, $lang_string;

    // Language: Turkce
    $lang_string['language'] = 'Turkce';
    $lang_string['locale'] = array('tr_TR', 'tr');
    $lang_string['rss_locale'] = 'tr_TR'; // New 0.4.8

     // ISO Charset: ISO-8859-1
     $lang_string['html_charset'] = 'ISO-8859-0';
     $lang_string['php_charset'] = 'ISO-8859-9';
     setlocale(LC_TIME, $lang_string['locale'] ); 
		
    // Global Strings

    // Menu
    $lang_string['menu_links'] = "MENU";
    $lang_string['menu_home'] = "ANA SAYFA";
    $lang_string['menu_contact'] = "ILETISIM";
    $lang_string['menu_stats'] = "ISTATISTIK";
    $lang_string['menu_calendar'] = "TAKVIM"; // New for 0.4.8
    $lang_string['menu_archive'] = "ARSIV";
    $lang_string['menu_viewarchives'] = "ARSIVI GOSTER";
    $lang_string['menu_menu'] = "YAZAR MENU";
    $lang_string['menu_add'] = "YAZI EKLE";
    $lang_string['menu_add_static'] = "SABIT SAYFA EKLE";
    $lang_string['menu_upload'] = "RESIM YUKLE";
    $lang_string['menu_setup'] = "GENEL AYARLAR";
    $lang_string['menu_categories'] = "KATEGORILER";
    $lang_string['menu_info'] = "META ETIKETI";
    $lang_string['manage_users'] = "UYE YONETIM";
    $lang_string['manage_php_config'] = "PHP OZELLIKLERI"; // New in 0.5.0.1
    $lang_string['menu_options'] = "TARIH & SAAT";
    $lang_string['menu_themes'] = "GORUNUMLER";
    $lang_string['menu_colors'] = "RENKLER";
    $lang_string['menu_change_login'] = "Giris Degistir";
    $lang_string['menu_logout'] = "CIKIS";
    $lang_string['menu_login'] = "GIRIS";
    $lang_string['menu_most_recent'] = "YENI YORUMLAR";
    $lang_string['menu_most_recent_entries'] = "YENI YAZILAR";
    $lang_string['menu_most_recent_trackback'] = "YENI TRACKBACKS";
    $lang_string['menu_add_block'] = "BLOKLAR";
    $lang_string['menu_emoticons'] = "�FADELER"; // New for 0.4.7
    $lang_string['menu_avatar'] = "AVATAR"; // New for 0.4.7
    $lang_string['menu_moderation'] = "KELIME/IP YASAKLA"; // New for 0.4.9
    $lang_string['menu_commentmoderation'] = "ONAY BEKLEYEN YORUMLAR"; // New for 0.5.0
    $lang_string['menu_random_entry'] = "RASTGELE"; // New for 0.5.2
    $lang_string['menu_plugins'] = "PLUGINS"; // New for 0.5.2
    $lang_string['notice_moderator1'] = "Yeni ";
    $lang_string['notice_moderator2'] = " Yorum Onay Bekliyor.";
    $lang_string['notice_loggedin'] = "Hosgeldin";
    

    // Counter
    $lang_string['counter_today'] = "Bug�n:"; // New for 0.4.8
    $lang_string['counter_yesterday'] = "D�n:"; // New for 0.4.8
    $lang_string['counter_totalsidebar'] = "Toplam:"; // New for 0.4.8
    $lang_string['counter_title'] = "KONTUR"; // New for 0.4.8

    // Other
    $lang_string['home'] = 'Ana Sayfaya D�n';
    $lang_string['nav_next'] = 'Sonraki';
    $lang_string['nav_back'] = '�nceki';
    $lang_string['nav_first'] = '�lk Ba�'; // New in 0.5.0.1
    $lang_string['nav_last'] = 'En Son'; // New in 0.5.0.1
    $lang_string['search_title'] = 'ARA: ';
    $lang_string['search_go'] = 'Ara';
    $lang_string['page_generated_in'] = 'Sayfa %s Saniyede olu�turuldu';
    $lang_string['counter_total'] = 'Site G�r�nt�lenme: '; // New in 0.4.8
    $lang_string['read_more'] = 'Devam�...'; // New in 0.4.8
    $lang_String['randomentry'] = 'Rastgele Yaz�'; // New in 0.5.0.1
    $lang_string['randomquote'] = 'Rastgele Al�nt�'; // New in 0.5.0.1

    // SB Functions
    $lang_string['sb_months'] = array( 'Ocak', 'Subat', 'Mart', 'Nisan', 'May�s', 'Haziran', 'Temmuz', 'Agustos', 'Eylul', 'Ekim', 'Kas�m', 'Aral�k' );
    $lang_string['sb_default_title'] = 'Ba�l�k Yok';
    $lang_string['sb_default_author'] = 'Sahibi Yok';
    $lang_string['sb_default_footer'] = 'Son Ek Yok';

    $lang_string['sb_edit'] = 'D�zenle';
    $lang_string['sb_delete'] = 'Sil';
    $lang_string['sb_permalink'] = 'permalink';
    $lang_string['sb_trackback'] = 'trackbacks';
    $lang_string['sb_postedby'] = 'G�nderen:'; // 0.5.0
    $lang_string['sb_admin'] = 'Y�netici.'; // 0.5.0
    $lang_string['sb_relatedlink'] = 'ilgili link'; // <-- New in 0.4.6

    $lang_string['sb_add_comment_btn'] = 'Yorum Ekle';
    $lang_string['sb_read_entry_btn'] = 'Yaz�y� Oku'; // 0.5.0
    $lang_string['sb_comment_btn_number_first'] = true;
    $lang_string['sb_comment_btn'] = 'Yorum';
    $lang_string['sb_comment_view'] = 'G�sterim'; // 0.5.0
    $lang_string['sb_comments_plural_btn_number_first'] = true;
    $lang_string['sb_comments_plural_btn'] = 'Yorum';
    $lang_string['sb_comments_plural_view'] = 'G�sterim'; // 0.5.0

    // ( 1 view )
    $lang_string['sb_view_counter_pre'] = '';
    $lang_string['sb_view_counter_post'] = ' G�sterim';

    // ( 2 views )
    $lang_string['sb_view_counter_plural_pre'] = '';
    $lang_string['sb_view_counter_plural_post'] = ' G�sterim';

    $lang_string['sb_add_link_btn'] = '+ LINK EKLE';
    $lang_string['sb_rate_entry_btn'] = 'Yaz�ya Oy Vermek I�in T�klay�n';

    // Entry Text Editor
    if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
      $lang_string['label_subject'] = "Konu";
      $lang_string['label_insert'] = "�zel Kod Ekle:";
      $lang_string['btn_bold'] = " b ";
      $lang_string['btn_italic'] = " i ";
      $lang_string['btn_image'] = "img";
      $lang_string['btn_url'] = "url";
      $lang_string['btn_readmore'] = "Devam�..."; // 0.4.8
      $lang_string['view_images'] = "Y�klenmi� Resimleri G�ster";
      $lang_string['label_entry'] = "Yaz�:";
      $lang_string['btn_preview'] = "&nbsp;�nizleme&nbsp;";
      $lang_string['btn_post'] = "&nbsp;Onayla&nbsp;";
      $lang_string['chk_visiblemenu'] = "Men�'de G�r�ns�n";
      $lang_string['file_name'] = "Sabit Sayfa �smi: (Dosya'ya �sim Verirken Bo�luk Verme)";

      // Javascript Strings
      $lang_string['insert_styles'] = "Bu Format ��in Yaz� Girin:";
      $lang_string['insert_image'] = "Resim i�in Tam URL girin:";
      $lang_string['insert_url1'] = "Linkte G�z�nt�lenmesini istedi�iniz Yaz� (iste�e ba�l�):";
      $lang_string['insert_url2'] = "Ba�lant� i�in Tam URL girin:";
      $lang_string['insert_url3'] = "URL Yeni Sayfada A��ls�n (iste�e ba�l�):";
      $lang_string['form_error'] = "L�tfen Konu Yada Yaz�y� Tamamlay�n.";

      // More Javascript Strings
      $lang_string['insert_image_optional'] = 'Optional:';
      $lang_string['insert_image_width'] = 'Geni�lik (iste�e ba�l�):';
      $lang_string['insert_image_height'] = 'Y�kseklik (iste�e ba�l�):';
      $lang_string['insert_image_popup'] = 'Tam Boyut Yeni Pencerede A��ls�n (iste�e ba�l�):';
      $lang_string['insert_image_float'] = 'Float (iste�e ba�l�):';

      $lang_string['day'] = 'G�n';
      $lang_string['month'] = 'Ay';
      $lang_string['year'] = 'Y�l';
      $lang_string['hour'] = 'Saat';
      $lang_string['minute'] = 'Dakika';
      $lang_string['second'] = 'Saniye';
    }

    switch ($page) {
      case 'add':
        // Add Entry
        $lang_string['title'] = "Yaz� Ekle";
        $lang_string['instructions'] = "Blog'a haz�r m�s�n�z? Yaz�n�z�n nas�l g�r�nece�ini g�rmek i�in �nizleme'ye, kaydetmek i�in de Onayla butonunu kullanabilirsiniz.";
        $lang_string['title_ad'] = "Confirm Trackback Pings";
        $lang_string['instructions_ad'] = "These are the Auto-Discovered URIs you're about to ping. If you do not want to ping a certain URI, uncheck it below. Then press the 'OK' button to ping the checked URIs or press 'Cancel' to not ping at all.";
        $lang_string['label_tb_ping'] = "Trackback ping(s) to send (comma separated)";
        $lang_string['label_tb_autodiscovery'] = "autodiscovery";
        $lang_string['label_relatedlink'] = "�lgili Link";
        $lang_string['label_categories'] = "Kategori Listesi";

        // Preview / Edit Entry
        $lang_string['title_preview'] = "Yaz� �nizleme / D�zenle";
        $lang_string['instructions_preview'] = "��te girdinizin g�r�n���. E�er metin d�zenleyici 'tag'lar kullan�yorsan�z, onlar� kapatmay� unutmay�n.";
        $lang_string['title_update'] = "Yaz�y� G�ncelle";
$lang_string['instructions_update'] = "Girdinizi a�a��daki form yard�m�yla g�ncelleyebilirsiniz. ��iniz bitti�inde '�nizleme' ya da 'Onayla' butonunu kullanabilirsiniz.";
        $lang_string['ok_btn'] = "&nbsp;Tamam&nbsp;";
        $lang_string['cancel_btn'] = "&nbsp;�ptal&nbsp;";

        // Error Response
        $lang_string['error'] = "<h2>Hoyt...!</h2>Yaz�n�z kaydedilemedi. Girdinizi kaydetmeye �al���rken bir sorun ile kar��la�t�m.<br /><br />Server Raporu:<br />";
        $lang_string['success'] = "<h2>Yaz� Kaydedildi!</h2>Yaz�n�n Kaydedilmesi ba�ar�l�."; // 0.4.8.1
        break;

      case 'add_static':
        // Add Entry
        $lang_string['title'] = "Sabit Sayfa Ekle";
        $lang_string['instructions'] = "Sabit bir sayfa olu�turmak i�in a�a��daki formu doldurun. Normal girdilerden farkl� olarak sabit sayfalar linkler gibi sa� tarafta s�rekli g�r�n�rler. Bunlar her zaman g�r�nmesini isteyebilece�iniz 'Benimle ilgili', 'Benimle ba�lant�ya ge�in', 'Proje bilgisi' benzeri sayfalar olabilirler. '�nizleme'ye t�klayarak girdinizin nas�l g�r�nd���n� kontrol edebilir, 'Onaylar' butonu ile kaydedebilirsiniz.";

        // Preview / Edit Entry
        $lang_string['title_preview'] = "Sabit Sayfa �nizleme / D�zenle";
        $lang_string['instructions_preview'] = "��te sabit sayfan�z�n nas�l g�r�nece�i. E�er metin formatlamak i�in kulland���n�z 'tag'lar varsa onlar� kapamay� ihmal etmeyin.";
        $lang_string['title_update'] = "Update Static Page";
        $lang_string['instructions_update'] = "Girdinizi de�i�tirmek i�in a�a��daki formu kullanabilirsiniz. ��iniz bitti�inde '�nizleme' ya da 'G�nder' butonunu kullanabilirsiniz.";
        $lang_string['form_error'] = "L�tfen Konu, Yaz� ve Dosya Ad� b�l�mlerini doldurun.";

        // Error Response
        $lang_string['error'] = "<h2>Hoyt...!</h2>Girdiniz kaydedilemedi. Girdinizi kaydetmeye �al���rken bir sorun ile kar��la�t�m.<br /><br />Server Raporu:<br />";
        break;

      case 'add_block':
        // Add / Manage Blocks
        $lang_string['title'] = "Blok Ekle / Y�net";
        $lang_string['instructions'] = "Use the form below to add custom 'Blocks' which will appear in the sidebar menu.";
        $lang_string['up'] = "Yukar�";
        $lang_string['down'] = "A�a��";
        $lang_string['edit'] = "D�zenle";
        $lang_string['delete'] = "Sil";
        $lang_string['block_name'] = "Blok �smi:";
        $lang_string['block_content'] = "Blok ��eri�i:";
        $lang_string['instructions_edit'] = "You are currently editing a Block.";
        $lang_string['instructions_modify'] = "Buradan Blok yaratabilir yada y�netebilirsiniz. Yukar�, A�a�� linkleri ile yan menudeki pozisyonlar�n� d�zenleyebilir, dilerseniz silebilirsiniz. ";
        $lang_string['submit_btn_edit'] = "Blok D�zenle";
        $lang_string['submit_btn_add'] = "Blok Ekle";
        $lang_string['form_error'] = "L�tfen �lgili B�l�mleri Tamamlay�n.";
        break;

      case 'add_link':
        $lang_string['static_pages'] = "Sabit Sayfalar:";

        // Add / Manage Links
        $lang_string['title'] = "Link Ekle / Y�net";
        $lang_string['instructions'] = "Di�er sitelere linkler ekleyin. formu doldurduktan sonra 'Link Ekle' butonuna t�klayarak linkinizi kaydedebilirsiniz. Linkliern s�ras�n� de�i�tirmek i�in yukar� / a�a�� butonlar�n� kullanabilirsiniz. Bir linki de�i�tirmek i�in 'De�i�tir' butonunu kullanabilirsiniz. Bir linki silmek i�in ise 'Sil' butonunu kullanabilirsiniz";
        $lang_string['up'] = "Yukar�";
        $lang_string['down'] = "A�a��";
        $lang_string['edit'] = "D�zenle";
        $lang_string['delete'] = "Sil";
        $lang_string['link_name'] = "Link �smi:";
        $lang_string['link_url'] = "Link URL: (Optional. Ayra� olu�turmak i�in bo� b�rakabilirsiniz.)";
        $lang_string['instructions_edit'] = "�u anda bu linki de�i�tiriyorsunuz:";
        $lang_string['instructions_modify'] = "Bir linki D�zenlemek i�in �uraya t�klay�n:";
        $lang_string['submit_btn_edit'] = "Link D�zenle";
        $lang_string['submit_btn_add'] = "Link Ekle";
        $lang_string['form_error'] = "L�tfen �lgili B�l�mleri Tamamlay�n.";
        break;

      case 'categories':

        // Add / Manage Links
        $lang_string['title'] = "Kategori Ekle / Y�net";
        $lang_string['instructions'] = " Buradan Blog'daki Kategorileri d�zenleyebilirsiniz. �rnekte g�z�kt��� gibi yapman�z gereken 'Kategori Ad� (S�ra Numara)' �eklinde d�zenlemek. Dilerseniz bo�luk vererebilirsiniz.<br /><br /><b>�rnek:</b><br />Genel (1)<br />Haberler (3)<br />&nbsp;&nbsp;�lanlar (6)<br />&nbsp;&nbsp;Di�er (5)<br />&nbsp;&nbsp;&nbsp;Spor (7)<br />Teknoloji (2)<br />";
        $lang_string['error'] = "HATA";
        $lang_string['current_categories'] = "Mevcut Kategoriler";
        $lang_string['no_categories_found'] = "Kategori Bulunamad�";
        $lang_string['category_list'] = "Kategori Listesi:";
        $lang_string['validate'] = "Onayla";
        $lang_string['submit_btn'] = "&nbsp;G�nder&nbsp;";
        break;

      case 'colors':
        // Change Colors
        $lang_string['title'] = "Renkleri De�i�tir";
        $lang_string['instructions'] = "Blog'daki yaz� ve Arkaplanlar� (BG) buradan de�i�rirebilirsiniz. Bunu yapmak i�in �nce ilgili b�l�m� se�tikten sonra Color Mixer yard�m�yla kolayl�kla de�i�ik yapabilirsiniz. G�ndere basarak de�i�ikli�i onaylayabilir ,Renk D�zeni dosya ad� yazd�ktan sonra farkl� bir isimle kaydedebilir dilerseniz haz�r Renk D�zenlerinide kullanabilirsiniz";
        $lang_string['bg_color'] = "BG Sayfa";
        $lang_string['main_bg_color'] = "BG Ana Sayfa";
        $lang_string['border_color'] = "Sayfa Kenarl�k";
        $lang_string['inner_border_color'] = "�� Ay�r�c� Kenarl�k";
        $lang_string['header_bg_color'] = "BG Ba�l�k";
        $lang_string['header_txt_color'] = "Ba�l�k Text";
        $lang_string['menu_bg_color'] = "BG Menu";
        $lang_string['footer_bg_color'] = "BG Alt B�l�m";
        $lang_string['txt_color'] = "Ana Yaz�";
        $lang_string['headline_txt_color'] = "Headline Text";
        $lang_string['date_txt_color'] = "Tarih Yaz�";
        $lang_string['footer_txt_color'] = "Footer Text";
        $lang_string['link_reg_color'] = "Link Normal";
        $lang_string['link_hi_color'] = "Link �stunde";
        $lang_string['link_down_color'] = "Link T�klay�nca";

        // More Colors
        $lang_string['entry_bg'] = "Yaz� BG";
        $lang_string['entry_title_bg'] = "Yaz� Ba�l�k BG";
        $lang_string['entry_border'] = "Yaz� Kenarl�k";
        $lang_string['entry_title_text'] = "Yaz� Ba�l�k Yaz�";
        $lang_string['entry_text'] = "Yaz� Yaz�";

        $lang_string['static_bg'] = "Sabit Sayfa BG"; // 0.5.0
        $lang_string['static_title_bg'] = "Sabit Sayfa Ba�l��� BG"; // 0.5.0
        $lang_string['static_border'] = "Sabit Sayfa Kenarl�k"; // 0.5.0
        $lang_string['static_title_text'] = "Sabit Sayfa Ba�l�k Yaz�"; // 0.5.0
        $lang_string['static_text'] = "Sabit Sayfa Yaz�"; // 0.5.0

        $lang_string['comment_bg'] = "Yorum BG"; // 0.5.0
        $lang_string['comment_title_bg'] = "Yorum Ba�l�k BG"; // 0.5.0
        $lang_string['comment_border'] = "Yorum Kenarl�k"; // 0.5.0
        $lang_string['comment_title_text'] = "Yorum Ba�l�k Yaz�"; // 0.5.0
        $lang_string['comment_text'] = "Yorum Yaz�"; // 0.5.0

        $lang_string['menu_bg'] = "Menu BG";
        $lang_string['menu_title_bg'] = "Menu Ba�l�k BG";
        $lang_string['menu_border'] = "Menu Kenarl�k";
        $lang_string['menu_title_text'] = "Menu Ba�l�k Yaz�";
        $lang_string['menu_text'] = "Menu Yaz�";
        $lang_string['menu_link_reg_color'] = "Menu Link Normal";
        $lang_string['menu_link_hi_color'] = "Menu Link �st�nde";
        $lang_string['menu_link_down_color'] = "Menu Link T�klay�nca";

        // Submit
        $lang_string['color_preset'] = "Renk D�zenleri:";
        $lang_string['scheme_name'] = "Renk D�zeni ismi Yaz�n:";
        $lang_string['scheme_file'] = "Renk D�zeni dosya ad�: (no spaces or file extensions)";
        $lang_string['save_btn'] = "&nbsp;Kaydet&nbsp;";
        $lang_string['form_error'] = "Please enter a name for your custom color scheme.";
        $lang_string['submit_btn'] = "&nbsp;G�nder&nbsp;";
        $lang_string['theme_doesnt_allow_colors'] = 'The currently selected theme does not allow for custom colors.';

        // Error Response
        $lang_string['error'] = "<h2>Hoyt...!</h2>Bilgiler kaydedilemedi. Bilgilerinizi kaydetmeye �al���rken bir sorun ile kar��la�t�m.<br /><br />Server Raporu:<br />";
        $lang_string['success'] = "<h2>Colors Saved!</h2>Information has been successfully saved."; // New for 0.4.8.1
        break;

      case 'comments':
        // Comments
        $lang_string['name'] = "�sim:"; //New in 0.4.6.2
        $lang_string['email'] = "E-mail:"; //New in 0.4.6.2
        $lang_string['homepage'] = "Web:"; //New in 0.4.6.2
        $lang_string['comment'] = "Yorum:"; //New in 0.4.6.2
        $lang_string['IPAddress'] = "IP Address:";  // New for 0.4.6.2
        $lang_string['useragent'] = "User Agent:";  // New for 0.4.6.2
        $lang_string['wrote'] = "<i>On %s, %s wrote:</i><br />\n<br />\n%s"; // New for 0.4.6.2

        $lang_string['comment_capcha'] = "Anti-Spam: Enter "; // 0.4.2
        $lang_string['title'] = "Yorumlar";
        $lang_string['header'] = "Yorum Ekle";
        $lang_string['instructions'] = "Yorum eklemek i�in formu doldurman�z gerekli.  <b style=\"color: red;\">(L�TFEN BAYRAKLARI VE RES�MLER� KULLANMAYIN)</b> ";
        $lang_string['comment_name'] = "�sim:";
        $lang_string['comment_email'] = "Email:";
        $lang_string['comment_url'] = "URL:";
        $lang_string['commentposted'] = "New comment posted at: ";  // New for 0.4.6.2
        $lang_string['comment_remember'] = "Beni Hat�rla:";
        $lang_string['comment_text'] = "Yorum:";
        $lang_string['post_btn'] = "&nbsp;Yorumu G�nder&nbsp;";
        $lang_string['delete_btn'] = "Sil";
        $lang_string['ban_btn'] = "IP YASAKLA"; // New for 0.4.8
        $lang_string['expired_comment1'] = "�zg�n�m. Yeni Yorum G�nderemezsin. G�nl�k Yorum Limiti "; // New for 0.4.8
        $lang_string['expired_comment2'] = " tanedir."; // New for 0.4.8

        $lang_string['blacklisted'] = "�ZG�N�M, IP Numaras� Banl�. Yorum g�nderemezsin."; // New for 0.4.8
        $lang_string['bannedword'] = " <h2>�ZG�N�M!</h2>�sim,Email,Url yada Yorumunuzda y�netici taraf�nda yasaklanm�� kelime bulundu�u i�in <b>Yorumunuz G�nderilmedi.</b>"; // New for 0.4.8
        $lang_string['nocomments'] = "Comments are not available for this entry."; // New for 0.4.9
        $lang_string['email_moderator'] = "Comments are currently moderated. This comment needs approval before it will be seen by the public."; // New for 0.5.0
        $lang_string['user_notice_mod'] = "Yorumunuz Onaylan�ncaya kadar g�r�nmeyecektir."; // new for 0.5.0

        $lang_string['return_to_comments'] = 'Yorumlara Geri D�n';

        // Error Response
        $lang_string['error_add'] = "<h2>Hoyt...!</h2>Yorumunuz kaydedilemedi. Yorumunuzu kaydetmeye �al���rken bir sorun ile kar��la�t�m.<br /><br />Server Raporu:<br />";
        $lang_string['error_delete'] = "<h2>Hoyt...!</h2>Yorumunuz silinemedi. Yorumunuzu simeye �al���rken bir sorun ile kar��la�t�m.<br /><br />Server Raporu:<br />";
        $lang_string['error_ban'] = "<h2>Hoyt...!</h2>IP not added to banned ip listing.<br /><br />Server Raporu:<br />";
        $lang_string['success_add'] = "<h2>Yorum Eklendi</h2>Yorumunuz Ba�ar�yla Kaydedildi."; // New for 0.4.8.1
        $lang_string['success_delete'] = "<h2>Comment Deleted!</h2>The comment has been deleted."; // New for 0.4.8.1
        $lang_string['success_ban1'] = "<h2>IP YASAKLANDI ! ";
        $lang_string['success_ban2'] = "</h2>Bu IP Numaras�n� listeden ��karmak i�in Kelime/IP Yasakla b�l�m�n� a�abilirsiniz."; // New for 0.4.8.1
        $lang_string['form_error'] = "�sim,Yorum ve Anti-Spam b�l�mlerini doldurun.";
        $lang_string['error_noip'] = "No IP Provided for Blacklist Request.";

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
        $lang_string['title'] = "Yaz� Sil";
        $lang_string['instructions'] = "A�a��da G�r�nen Yaz� Silinsin mi?. Silmek i�in Evet �ptal etmek i�in Hay�r � t�klay�n";
        $lang_string['ok_btn'] = "&nbsp;Evet&nbsp;";
        $lang_string['cancel_btn'] = "&nbsp;Hay�r&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Hoyt...!</h2>Yaz� silinemedi.<br /><br />Server Raporu:<br />";
        $lang_string['success'] = "<h2>Yaz� Silindi!</h2>Yaz� Ba�ar� �le Silindi."; // New for 0.4.8.1
        break;

      case 'delete_static':
        $lang_string['title'] = "Sabit Sayfa Silme";
        $lang_string['instructions'] = "A�a��da G�r�nen Sabit Sayfa Silinsin mi?. Silmek i�in Evet �ptal etmek i�in Hay�r � t�klay�n.";
        $lang_string['ok_btn'] = "&nbsp;Evet&nbsp;";
        $lang_string['cancel_btn'] = "&nbsp;Hay�r&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Hoyt...!</h2>Sabit Sayfa silinemedi.<br /><br />Server Raporu:<br />";
        $lang_string['success'] = "<h2>Sabit Sayfa Silindi!</h2>Sabit Sayfa Ba�ar� �le Silindi."; // New for 0.4.8.1
        break;

      case 'image_list':
        $lang_string['title'] = "Resim Listesi";
	$lang_string['instructions'] = "Resimleri g�r�nt�lemek i�in linklere t�klay�n.<br /><br />Girdinize bir resim eklemek i�in:<br />1) Linke Control ile birlikte t�klay�n ve 'Copy Link to Clipboard'� se�in.<br />2) Girdi ekleme sayfas�na geri d�n�n.<br />3) 'img' butonuna t�klay�n ve kopyalad���n�z adresi buraya yap��t�r�n.";
 break;

      case 'info':
        $lang_string['title'] = "Meta-Data Bilgisi";
        $lang_string['instructions'] = "A�a��daki bilgi arama motorlar�n�n sayfalar�n�za daha kolay ula�abilmesi i�in &quot;meta-data&quot; olarak kullan�lacak. Ayr�ca ayn� bilgi RSS beslemelerinde de kullan�labilir.";
        $lang_string['info_keywords'] = "Anahtar Kelimeler: (Anahtar kelimeleri birbirinden virg�l ile ay�rabilirsiniz.)";
        $lang_string['info_description'] = "A��klama: (Siteniz ile ilgili �ze bir a��klama giriniz.)";
        $lang_string['info_copyright'] = "Haklar: (Kopyalama haklar� ile ilgili bilgileri giriniz, bo� b�rakabilirsiniz.)";
        $lang_string['tracking_code'] = "External Tracking Code: (HTML code that needs to be run on the main page (in the header tags for safety) only for every user that comes to the page i.e. Google Analytics)";
        $lang_string['submit_btn'] = "&nbsp;G�nder&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Hoyt...!</h2>Information not saved. I ran into a problem while saving your information.<br /><br />Server Raporu:<br />";
        $lang_string['success'] = "<h2>Meta-Data Saved!</h2>Information has been successfully saved."; // New for 0.4.8.1
        $lang_string['form_error'] = "Please complete the Title and Author fields.";
        break;

      case 'index':
        // Index
        break;

      case 'static':
        // Index
        break;

      case 'rating':
        $lang_string['error'] = "<h2>Hoyt...!</h2>Information not saved. I ran into a problem while saving your information.<br /><br />Server Raporu:<br />";
        $lang_string['success'] = "<h2>Vote Saved!</h2>Your rating has been successfully saved."; // New for 0.4.8.1
        break;

      case 'login':
        $lang_string['upgrade'] = "<h2>Upgrade</h2>"; // New 0.3.8
        $lang_string['upgrade_count'] = "%n comment files need to be upgraded:"; // New 0.3.8
        $lang_string['upgrade_url'] = "Upgrade Comments"; // New 0.3.8
        $lang_string['title'] = "GIRIS";
        $lang_string['instructions'] = "Kullan�c� Ad� ve �ifrenizi Girip Giri� Butonuna Bas�n";
        $lang_string['username'] = "Kullan�c� Ad�:";
        $lang_string['password'] = "�ifre";
        $lang_string['submit_btn'] = "&nbsp;Giri�&nbsp;";
        // Success
        $lang_string['success'] = "<h2>Ba�ar�l�!</h2>Giri� Yapt�n. Mutlu Bloglar!<p />";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>Hoyt...!</h2>Giris Yap�lmad�. L�tfen Kullan�c� Ad� ve �ifreniz Girerek Tekrar Deneyin.<p />";
        $lang_string['inactive_account'] = "<h2>Hoyt...!</h2>Giris Yap�lmad�. �yeli�in Aktif De�il Y�netici ile irtibata ge�in.<p />";
        $lang_string['form_error'] = "L�tfen Kullan�c� Ad� Ve �ifre B�l�mlerini Doldurdu�unuzdan Emin olun.";
        break;

      case 'logout':
        $lang_string['title'] = "CIKIS";
        $lang_string['error'] = "<h2>Ho��akal!</h2>You are now logged out. (You weren't logged in anyway!)<p />";
        $lang_string['error_no_cookie'] = "<h2>Ho��akal!</h2>You are now logged out. (No cookie was found. You weren't logged in anyway!)<p />"; // New 0.5.0
        $lang_string['success'] = "<h2>Ho��akal!</h2>C�k�� Tamamland�.<p />(5 Saniye ��inde Ana Sayfaya Y�nlendileceksin.)<p />";
        break;

      case 'forms':
        $lang_string['title'] = "";
        $lang_string['instructions'] = "";
        // Error Response
        $lang_string['error'] = "<h2>Hoyt...!</h2>Bilgiler kaydedilemedi. Bilgilerinizi kaydetmeye �al���rken bir sorun ile kar��la�t�m.<br /><br />Server Raporu:<br />";
        break;

      case 'set_login':
        $lang_string['title'] = "Change Username &amp; Password";
        $lang_string['instructions'] = "A�a��daki forma kullanmak istedi�iniz kullan�c� ad� ve parolas�n� girin.";
        $lang_string['username'] = "Kullan�c� Ad�:";
        $lang_string['password'] = "�ifre:";
        $lang_string['submit_btn'] = "&nbsp;G�nder&nbsp;";
        // Success
        $lang_string['success'] = "<h2>Ba�ar�l�!</h2>YYeni kullan�c� ad�n�z ve parolan�z kaydedildi. Mutlu bloglar!<p />";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>Hoyt...!</h2>Bilgiler kaydedilemedi. Bilgilerinizi kaydetmeye �al���rken bir sorun ile kar��la�t�m.<br /><br />Server Raporu:<br />";
        $lang_string['form_error'] = "L�tfen kullan�c� ad� ve parola alanlar�n� doldurun.";
        $lang_string['explanation'] = "In recent versions, our password structure has changed.  There is no longer a way to update passwords
          and/or logins from inside the blog code.  In order to change your password, delete /config/password.php and make sure install*.php
          exists on the local server.  Once that is done, refresh this page (or logout).  You will be presented with the same script
          to generate your password as you did when originally creating the blog site.";  // New for 0.4.6
        break;

      case 'install00':
        $lang_string['title'] = "Ho�geldiniz";
        $lang_string['instructions'] = "Simple PHP Blog'u se�ti�iniz i�in telekk�rler!";
        $lang_string['blog_choose_language'] = "Disan Secin";
        $lang_string['submit_btn'] = "&nbsp;Tamam&nbsp;";
        break;

      case 'install01':
        $lang_string['title'] = "Ho�geldiniz";
        $lang_string['instructions'] = "
        Simple PHP Blog'u se�ti�iniz i�in te�ekk�rler!<br /><br />Simple PHP Blog, hafif bir blog sistemidir. PHP 4.1 ya da �st�, ve sunucunun blog'a ait b�l�m�ne yazma hakk� �al��mas� i�in yeterlidir. T�m bilgi d�z metin dosyalar�nda saklan�r, dolay�s�yla veritaban� gerektirmez.<br /><br />
        Ba�lamak i�ib simple PHP Blog bilgilerinizin saklanmas� i�in kullan�lacak ('config', 'content', ve 'images') dizinlerini yaratmak zorunda.<br /><br />
        <b>Kuruluma ba�lamak i�in a�a��daki linke t�klay�n�z:</b>";
        $lang_string['begin'] = "[ Kuruluma Ba�la ]";
        break;

      case 'install02':
      $lang_string['title'] = "Ayarlar";
      $lang_string['instructions'] = "'config', 'content', ve 'images' dizinleri yarat�l�yor:";
      $lang_string['folder_exists'] = "TAMAM! Zaten dizinler mevcut. Herhangi bir de�i�iklik yap�lmad�...";
      $lang_string['folder_failed'] = "Hoyt! Dizin yarat�lamad�";
      $lang_string['folder_success'] = "Tamamd�r! Dizin yarat�ld�...";
// Help
$lang_string['help'] = "
<h2>Hoyt!</h2>
Dizin ya da dizinler yarat�lam�yor! Sebepler �unlar olabilir:<br>
<i>1) <b>�zinler</b>, <b>Okuma / Yazma</b>ya izin vermiyor.</i><br>
<i>2) T�m dosya ve dizinlerin kullan�c� ID'leri uygun olmal�.</i><p />

A�a��daki ad�mlar� uygulayarak yeniden deneyin:<p />
1) Dizinleri elle yarat�n: <b>config</b>, <b>content</b>, ve <b>images</b>.<p />
2) Dizinlere <b>Yazma Hakk�</b> verin. E�er FTP istemcisi ile ba�l� iseniz, Owner, User, ve World'�n dizinler �zerinde <b>okuma</b> ve <b>yazma</b> haklar� olmal�d�r. <i>(Bunlar� de��tirmke i�in sistem y�neticisi ile ba�lant�ya ge�meniz de gerekebilir...)</i><p />
3) T�m dosya ve dizinlerin kullan�c�s�n�n ayn� oldu�una emin olun. <i>(bunun i�in de sistem y�neticisi ile temasa ge�meniz gerekebilir...)</i>";
$lang_string['try_again'] = "[ Yeniden Dene ]";
// Success
$lang_string['success'] = "<h2>Harika!</h2>Dizinler ba�ar�yla yarat�ld� :)<p /><b>Devam etmek i�in t�klay�n:</b>";
$lang_string['continue'] = "[ Devam Et ]";
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
$lang_string['title'] = "Kullan�c� ad� &amp; Parola";
$lang_string['instructions'] = "Bir kullan�c� ad� ve parolas� yaratmak i�in a�a��daki formu kullan�n.";
$lang_string['username'] = "Kullan�c� ad�:";
$lang_string['password'] = "Parola:";
$lang_string['submit_btn'] = "&nbsp;Tamam&nbsp;";
// Success
$lang_string['success'] = "<h2>Tebrikler!</h2>Log-in oldunuz. Ayarlar sayfas�na girmek ve blog'unuz ile ilgili ilk ayarlamalar� yapmak i�in a�a��daki linke t�klay�n!<p />";
$lang_string['btn_setup'] = "[ Ayarlar ]";
       
// Wrong Password
$lang_string['wrong_password'] = "<h2>Whoops!</h2>Bilgiler kaydedilemedi. Bilgilerinizi kaydetmeye �al���rken bir sorun ile kar��la�t�m.<br /><br />Server ��yle demi�:<br />";
$lang_string['form_error'] = "L�tfen kullan�c� ad� ve parola alanlar�n� doldurun.";
break;

      case 'install04':
        $lang_string['title'] = "Password dosyas� Olu�turma";
        $lang_string['instructions'] = "�imdi K���k Bir 3 Ka��t Yapaca��z:<br />
        <ol>
        <li>Herhangi bit Text Editor a��n. <i>(Note Pad, Word Pad, Word, BBEdit, Pico, VI, etc...)</i></li>
        <li>Yeni bir belge olu�turun.</li>
        <li>A�a��daki Kodu kopyalay�p a�t���n�z belgeye yap��t�r�n. </li>
        <li>belgeyi <b>password.php</b> olarak kaydedin <i>(Be sure to save it in <b>text</b> or <b>plain text</b> format.)</i></li>
        <li>Kulland���n�z FTP program�n�z� a��n.</li>
        <li>Yeni olu�turdu�unuz <b>password.php</b> dosyas�n� <b>config</b> Klas�r�n�n i�ine y�kleyin.</li>
        <li>Harddisk'inizde <b>password.php</b> dosyas�n� silin</li>
        </ol>
        ";
        $lang_string['information'] = "<i>Note: If you want to reset your username and password (probably because you forgot it), delete the <b>password.php</b> file in the <b>config</b> folder on your web site. The next time you visit your site, it will walk you through this installation process again...</i>";
        $lang_string['code'] = "<b>password.php</b> de kullanaca��n�z Kod:";
        $lang_string['continue'] = "[ Devam ]";
        break;

      case 'install05':
      case 'install06':
        $lang_string['title'] = "GIRIS";
        $lang_string['instructions'] = "Kullan�c� Ad� ve �ifrenizi Girip Giri� Butonuna Bas�n";
        $lang_string['username'] = "Kullan�c� Ad�:";
        $lang_string['password'] = "�ifre";
        $lang_string['submit_btn'] = "&nbsp;Tamam&nbsp;";
        // Success
        $lang_string['success'] = "<h2>Tebrikler!</h2>�u anda Giri� Yapt�n.<p />
        Click below to visit the <b>Ayarlar</b> linkini t�klayarak yeni Blog Sayfan�z� Ki�iselle�tirebilirsiniz.<p />
        <i>Note: Now that you've completed the installation process, it is recommended that you delete the <b>installXX.php</b> files from your web site. (i.e. install00.php through install06.php)</i><p />";
        // Wrong Password
        $lang_string['wrong_password'] = "<h2>Hoyt...!</h2>Giri� Yap�lmad�. L�tfen Kullan�c� Ad� Ve �ifrenizin do�ru oldu�undan emin olun ve tekrar deneyin.<p />";
        $lang_string['form_error'] = "Please complete the Username and Password fields.";
        // Success
        $lang_string['btn_setup'] = "[ Ayarlar ]";
        $lang_string['btn_try_again'] = "[ Tekrar Dene ]";
        break;

      case 'setup':
        $lang_string['title'] = "Ayarlar";
        $lang_string['instructions'] = "A�a��daki form sayesinde blog'unuzun ad�n� ve ki�isel bilgilerinizi de�i�tirebilirsiniz:";
        $lang_string['blog_title'] = "Blog Ad�:";
        $lang_string['blog_header'] = "Ba�l�k Graphic URL: images/blogheader.jpg (Bo� b�rak�rsan�z ge�erli tema grafi�i kullan�l�r).";
        $lang_string['blog_author'] = "Sahibi:";
        $lang_string['blog_email'] = "Email: (�rtibat b�l�m�n�n d�zg�n �al��mas� i�in gecerli bir e-mail adresi girin)"; // Updated 0.4.7
        $lang_string['blog_avatar'] = "Avatar URL: images/avatar.jpg (Bo� B�rakabilirsiniz)."; // <-- New 0.4.7
        $lang_string['blog_footer'] = "Son ek:";
        $lang_string['blog_choose_language'] = "Lisan Secin:";
        $lang_string['blog_enable_comments'] = "Kullan�c�lar Yorum Girebilir"; // <-- New 0.3.6
        $lang_string['blog_comments_popup'] = "Yorumlar� Pop-up pencerede a�"; // <-- New 0.3.6
        $lang_string['blog_enable_start_category'] = "Hangi Kategorideki Yaz�lar�n A��l�� Sayfada g�r�nt�lenmesini istiyorsunuz: "; // Now for 0.5.1
        $lang_string['blog_search_top'] = "Aramay� Yaz�lar�n �st�nde G�ster "; // New for 0.5.0
        $lang_string['blog_enable_static_block'] = "Yaz�lar�n �st K�sm�sm�nda Blok Kullan: "; // New for 0.5.0
        $lang_string['static_block_border'] = 'Kenarl�k Kullan'; // New for 0.5.0
        $lang_string['static_block_noborder'] = 'Kenarl�k Kullanma'; // New for 0.5.0
        $lang_string['blog_enable_voting'] = "Yaz�larda Oylama Yap�ls�n";
        $lang_string['blog_enable_cache'] = "Enable Blog Entry Cache (may provide speed increase on some servers)"; // New for 0.4.6
        $lang_string['blog_enable_calendar'] = "Takvimi G�ster"; // New for 0.4.6
        $lang_string['blog_enable_archives'] = "Ar�iv Blok'unu G�ster"; // New for 0.4.8
        $lang_string['blog_enable_counter'] = "Site Kont�r'� Yan Menude G�ster"; // New for 0.4.8
        $lang_string['blog_counter_hours'] = "Number of hours to delay before hits are counted again (based on specific ip address):"; // New for 0.4.8
        $lang_string['blog_enable_login'] = "Giri� Ba�lant�s� G�r�ns�n (L�tfen �nce  \"login.php\" S�k Kullan�lanlara Ekleyin...)"; // New for 0.4.8
        $lang_string['blog_enable_title'] = "Enable Plain Text Title Block (Clear checkbox if the title is in the header graphic)"; // New for 0.4.6
        $lang_string['blog_enable_permalink'] = "Blog Yaz�lar�nda Permalink Kullan�ls�n"; // New for 0.4.6
        $lang_string['blog_enable_capcha'] = "Anti-Spam Kullan�ls�n"; // New for 0.4.8
        $lang_string['blog_footer_counter'] = "Site Kont�r'� Alt B�l�mde G�ster"; // New for 0.4.8
        $lang_string['blog_enable_capcha_image'] = "Anti-Spam Resmi (Resim ve Yaz� yada Sadece Anti-Spam Yaz�s�)"; // New for 0.4.8
        $lang_string['blog_enable_stats'] = "�statistik Sayfas� G�r�ns�n "; // New for 0.4.7
        $lang_string['blog_enable_lastcomments'] = " En Yeni Yorumlar Listelensin"; // New for 0.4.7
        $lang_string['blog_enable_lastentries'] = "En Yeni Yaz�lar Listelensin"; // New for 0.4.7
        $lang_string['blog_email_notification'] = "Yeni yorum girildi�inde e-posta g�nder"; // <-- New 0.3.7
        $lang_string['blog_send_pings'] = "Weblog &quot;pings&quot; g�nder"; // <-- New 0.3.7
        $lang_string['blog_ping_urls'] = "Pinglenecek servisin tam URL'ini girin (�rne�in http://rpc.weblogs.com/RPC2 gibi).<br />Virg�ller ile ay�rarak birden fazla servis girebilirsiniz."; // <-- New 0.3.7
        $lang_string['blog_trackback_about'] = "Trackback provides a method of notification between blogs. Let another
        blog know that you are linking to them by sending them a trackback ping. See who is linking to
        your blog by receiving trackback pings.<br />
        You can either enter the URIs to ping manually, or try to do it automatically through
        Auto-Discovery.";
        $lang_string['blog_trackback_enabled'] = "Blog'da Trackback Kullan";
        $lang_string['blog_trackback_auto_discovery'] = "Auto-Discovery Kullan (when submitting a post containing URLs)";
        $lang_string['blog_max_entries'] = "G�sterilecek En Fazla Yaz� say�s�:"; // <-- New 0.3.6
        $lang_string['blog_comment_tags'] = "Yorumlarda 'tag' kullan�m� m�mk�n:"; // <-- New 0.3.6
        $lang_string['blog_gzip_about'] = "
         PHP 4.0.4'ten beri, PHP disk alan�ndan kazanmak i�in (.gz) s�k��t�r�lm�� dosyalar� okuyup yazabiliyor.
         Ayr�ca taray�c�ya g�nderilen dosyalar� bant geni�li�ini iyi kullanmak i�in transparan olarak s�k��t�rabiliyor. 
          <br />
�ntan�ml� olarak Zlib deste�i PHP i�inde etkin olmuyor. E�er kutucuklar se�ilmemi� ise
PHP kurulumunuz Zlib desteklemiyor demektir."; // <-- New 0.3.7
$lang_string['blog_enable_gzip_txt'] = "Veri dosyalar� i�in GZIP s�k��t�rmas�n� etkin k�l"; // <-- New 0.3.7
$lang_string['blog_enable_gzip_output'] = "HTTP ��kt�s� i�in GZIP s�k��t�rmas�n� etkin k�l"; // <-- New 0.3.7
$lang_string['submit_btn'] = "&nbsp;Tamam&nbsp;";
        
// Error Response
        $lang_string['error'] = "<h2>Hoyt...!</h2>Bilgiler kaydedilemedi. Bilgilerinizi kaydetmeye �al���rken bir sorun ile kar��la�t�m.<br /><br />Server Raporu:<br />";
        $lang_string['success'] = "<h2>Preferences Saved!</h2>Information has been successfully saved."; // New for 0.4.8.1
$lang_string['form_error'] = "L�tfen Sahibi ve Blog ad� alanlar�n� doldurun.";
$lang_string['label_entry_order'] = "Yaz� G�sterimi:";
$lang_string['select_new_to_old'] = "En yeni en �nce";
$lang_string['select_old_to_new'] = "En eski en �nce";
$lang_string['label_comment_order'] = "Yorum G�sterimi:";
$lang_string['cal_sunday'] = "Pazar"; // New for 0.4.6
$lang_string['cal_monday'] = "Pazartesi"; // New for 0.4.6
        $lang_string['label_calendar_start'] = "Takvimde Haftan�n Ba�lang�� G�n�:";
        $lang_string['title_sidebar'] = "Yan Menu"; // New in 0.4.7
        $lang_string['title_comments'] = "Yorumlar"; // New in 0.4.7
        $lang_string['title_trackback'] = "Trackbacks"; // New in 0.4.7
        $lang_string['title_compression'] = "S�k��t�rma"; // New in 0.4.7
        $lang_string['title_entries'] = "Yaz�lar"; // New in 0.4.7
        $lang_string['title_general'] = "Genel"; // New in 0.4.7
        $lang_string['title_language'] = "Lisan"; // New in 0.4.7
        $lang_string['blog_comment_days_expiry'] = "Comments Allowed For How Many Days? (0 means no expiry)"; // New in 0.4.8
        $lang_string['blog_comments_moderation'] = "Require comment entries to be approved by logged in user before public
          (always visible to logged in user)"; // New in 0.5.0
        $lang_string['comment_moderation'] = "Moderation Options"; // New in 0.5.0
        break;
      case 'comment_moderation':
        $lang_string['title'] = "Onay Bekleyen Yorumlar";
        $lang_string['instructions'] = "Buradan Kullan�c�lar�n girdi�i yorumlar� y�netebilirsiniz. Blo�unuzda yay�nlanmas�n� istedi�iniz yorumu Onaylayabilirsiniz. yap�lan yorumun uygunsuz oldu�unu d���n�rseniz yorumu silebilirsiniz.";
        $lang_string['header'] = "Moderation Listing";
        $lang_string['enteredby'] = "Yazan: ";
        $lang_string['entrydate'] = "Yaz� Tarihi: ";
        $lang_string['blogentrytitle'] = "Blog Yaz� Ba�l���: ";
        $lang_string['enteredcontent'] = "Yorum: ";
        $lang_string['totalunmodded'] = " bir tane yorum onay bekliyor.";
        $lang_string['mod_approve'] = "[Onayla] ";
        $lang_string['mod_delete'] = "[Sil]";
        break;
      case 'moderation':
        $lang_string['title'] = "Yasaklama Ayarlar�";
        $lang_string['instructions'] = "Yasaklama ayarlar�n� a�a��dan d�zenleyebilirsiniz.";
        $lang_string['submit_btn'] = "&nbsp;Ayarlar� Kaydet&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Hoyt...!</h2>Information not saved. I ran into a problem while saving your information.<br /><br />Server Raporu:<br />";
        $lang_string['success'] = "<h2>Preferences Saved!</h2>Information has been successfully saved."; // New for 0.4.8.1
        $lang_string['banned_address_list_title'] = "<h2>Yasakl� IP Numaralar�</h2>";
        $lang_string['banned_address_list'] = "A�a��daki listeye yasaklamak istedi�iniz IP numaras�n� girebirsiniz. dilerseniz daha �nce yasaklad���n�z IP numaras�n� silebilirsiniz.";
        $lang_string['banned_word_list_title'] = "<h2>Yasakl� Kelimeler</h2>";
        $lang_string['banned_word_list'] = "Buradan yorumlarda kullan�lmas�n� istemedi�iniz kelimeleri d�zenleyebilirsiniz (!'^+%&/())=)";
        break;
      case 'trackbacks':
        // Trackbacks
        $lang_string['title'] = "Trackback";
        $lang_string['header'] = "Bu Yaz� ��in Trackback URL'si:";
        $lang_string['delete_btn'] = "Sil";
        // Error Response
        $lang_string['error_add'] = "Error storing trackback data.";
        $lang_string['error_delete'] = "<h2>Hoyt...!</h2>Trackback not deleted. I ran into a problem while deleting the trackback.<br /><br />Server Raporu:<br />";
        $lang_string['success_delete'] = "<h2>Trackback Deleted!</h2>The trackback link has been deleted."; // New for 0.4.8.1
        break;

      case 'options':
        $lang_string['title'] = "Tarih & Saat Ayarlar�";
        $lang_string['instructions'] = "A�a��daki formu kullanarak blog girdilerinizdeki tarih ve saat bilgilerinin g�sterim format�n� de�i�tirebilirsiniz. 12 ya da 24 saat g�r�n�mlerinden birisini se�ebilirsiniz. <b>�nizleme</b> ile ayarlar�n�z�n nas�l g�r�nd���n� g�rme �ans�n�z da var.";
        // Long Date
        $lang_string['ldate_title'] = "Uzun Tarih Format�:";
        $lang_string['weekday'] = "G�n� �smi";
        $lang_string['month'] = "Ay";
        $lang_string['day'] = "G�n";
        $lang_string['year'] = "Y�l";
        $lang_string['none'] = "Hi�biri";
        // Short Date
        $lang_string['sdate_title'] = "K�sa Tarih Format�:";
        $lang_string['s_month'] = "Ay";
        $lang_string['s_mon'] = "G�n Ad�";
        $lang_string['s_day'] = "G�n";
        $lang_string['s_year'] = "Y�l";
        $lang_string['zero_day'] = "G�n �n�nde 0 eki";
        $lang_string['show_century'] = "Y�zY�l� G�ster";
        // Time
        $lang_string['time_title'] = "Saat Format�:";
        $lang_string['12hour'] = "12-Saat Sistemi";
        $lang_string['24hour'] = "24-Saat Sistemi";
        $lang_string['before_noon'] = "��leden �nce";
        $lang_string['after_noon'] = "��leden Sonra";
        // Date
        $lang_string['date_title'] = "Tarih G�sterme Format�:";
        $lang_string['long_date'] = "Uzun Tarih";
        $lang_string['short_date'] = "K�sa Tarih";
        $lang_string['time'] = "Saat";
        // Menu
        $lang_string['menu_title'] = "Men� Tarihi G�sterim Format�:";
        $lang_string['long_date'] = "Uzun Tarih";
        $lang_string['short_date'] = "K�sa Tarih";
        // Used in multiple places
        $lang_string['zero_day'] = "G�n �n�nde 0 eki";
        $lang_string['zero_month'] = "Ay �n�nde 0 eki";
        $lang_string['zero_hour'] = "Saat �n�nde 0 eki";
        $lang_string['separator'] = "Ay�r�c�:";
        $lang_string['preview'] = "�nizleme:";
        $lang_string['server_offset'] = "Sunucu Offset:";
        // Buttons
        $lang_string['submit_btn'] = "&nbsp;Tamam&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Hoyt...!</h2>Bilgiler kaydedilemedi. Bilgilerinizi kaydetmeye �al���rken bir sorun ile kar��la�t�m.<br /><br />Server Raporu:<br />";
        $lang_string['success'] = "<h2>Options Saved!</h2>Information has been successfully saved."; // New for 0.4.8.1
        break;

      case 'themes':
        $lang_string['title'] = "G�r�n�mler";
        $lang_string['instructions'] = "A�a��dan Diledi�iniz g�r�n�m� se�ebilirisiniz.";
        // Themes
        $lang_string['choose_theme'] = "G�r�n�mler:";
        // Buttons
        $lang_string['submit_btn'] = "&nbsp;Tamam&nbsp;";
        // Error Response
        $lang_string['error'] = "<h2>Hoyt...!</h2>Bilgiler kaydedilemedi. Bilgilerinizi kaydetmeye �al���rken bir sorun ile kar��la�t�m.<br /><br />Server Raporu:<br />";
        $lang_string['success'] = "<h2>G�r�n�m Se�ildi!</h2>Bilgileriniz ba�ar� ile kaydedildi."; // New for 0.4.8.1
        break;

      case 'upload_img':
        $lang_string['title'] = "Resim Y�kleme";
        $lang_string['instructions'] = "Y�klemek istedi�iniz dosyalar� se�tikten sonra y�kle butonuna bas�n .";
        $lang_string['select_file'] = "Resim Se�in:";
        $lang_string['upload_btn'] = "Y�kle";
        // Error Response
        $lang_string['error'] = "<h2>Hoyt...!</h2>Resim y�klenemedi!<br /><br />Server Raporu:<br />";
        $lang_string['success'] = "<h2>Resmim Y�klendi!</h2>Resmim ba�ar� ile Y�klendi."; // New for 0.4.8.1
        break;

      case 'search':
        $lang_string['title'] = "Arama Sonu�lar�";
        $lang_string['instructions'] = " <b>%string</b> i�in Arama Sonu�lar�:";
        $lang_string['not_found'] = "Sonu� Bulunamad�";
        break;

      case 'contact':
        $lang_string['contact_capcha'] = "Anti-Spam: Enter "; // 0.4.2
        $lang_string['title'] = "�letisim Formu";
        $lang_string['instructions'] = "Formu doldurun:";
        $lang_string['form_error'] = "L�tfen ilgili b�l�mleri doldurunuz.";
        $lang_string['name'] = "Isim:";
        $lang_string['email'] = "Email:";
        $lang_string['subject'] = "Konu:";
        $lang_string['comment'] = "Yorum & Mesaj:";
        $lang_string['submit_btn'] = "&nbsp;G�nder&nbsp;";
        $lang_string['success'] = "<h2>Ba�ar�l�!</h2>Mesaj�n�z Ba�ar� ile g�nderildi.<p />";
        $lang_string['failure'] = "<h2>Error!</h2>Your message has not been sent. Most likely the Anti Spam was not entered properly.<p />";
        $lang_string['contactsent'] = "Contact sent through: ";  // New for 0.4.6
        $lang_string['IPAddress'] = "IP Address:";  // New for 0.4.6
        $lang_string['useragent'] = "User Agent:";  // New for 0.4.6
        $lang_string['wrote'] = "<i>On %s, %s wrote:</i><br />\n<br />\n%s"; // New for 0.4.6.2
        break;

      case 'stats':
        $lang_string["title"] = "�statistik";
        $lang_string["general"] = "Genel";
        $lang_string["entry_info"] = "<b>%s</b> yaz� yaz�ld� <b>%s</b> karakter kaydedildi. - Boyut: <b>%s</b> Byte";
        $lang_string["comment_info"] = "<b>%s</b> yorum yap�ld� <b>%s</b> karakter kaydedildi - Boyut: <b>%s</b> Byte";
        $lang_string["trackback_info"] = "<b>%s</b> Trackback Kullan�ld�. - Boyut: <b>%s</b> Byte ";
        $lang_string["static_info"] = "<b>%s</b> Sabit Sayfa yaz�ld� <b>%s</b> karakter kaydedildi. - Boyut: <b>%s</b> Byte";
        $lang_string["most_viewed_entries"] = "En �ok Okunan 10 Yaz�";
        $lang_string["most_commented_entries"] = "En �ok Yorumlanan 10 Yaz�";
        $lang_string["most_trackbacked_entries"] = "En �ok Trackback 10 Yaz� ";
        $lang_string['vote_info'] = "<b>%s</b> Oy Kullan�ld�. - Boyut: <b>%s</b> Byte"; // 0.4.1
        $lang_string["most_voted_entries"] = "En �ok Oylanan 10 Yaz�"; // 0.4.1
        $lang_string["most_rated_entries"] = "En �ok Oy Alan 10 Yaz�"; // 0.4.1
        break;

      case 'errorpage-nocookies':  // New for 0.4.6
        $lang_string["title"] = 'HTTP HATA 403.8 - Sayfa/G�rev Yetki Hatas�';
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
        $lang_string['title'] = "Y�netici �fadeleri";
        $lang_string['instructions'] = "
          Check the emoticons you want to use. Write in the box the Tags you want
          to be replaced by the image. Multiple tags may be used, just separated them
          by spaces.<br /><br />

          For instance:<br />
          :) :-) :SMILE: :HAPPY:<br /><br />

          <i>(It is highly recommended that you make the Tags longer than 2 characters,
          otherwise unexpected substitutions may occur.)</i>";
        $lang_string["upload_instructions"] = 'Yeni �fade Y�kle:';
        $lang_string["upload_success"] = 'Ba�ar�l�! Resim Y�kleme Ba�ar�l�!';
        $lang_string["upload_error"] = 'Hata! Resim Y�kleme Ba�ar�s�z.';
        $lang_string["upload_invalid"] = 'Error! Ge�ersiz Dosya. Resim png, jpg, yada gif olmal�.';
        $lang_string["save_success"] = '�fade Ayarlar� ba�ar� ile kaydedildi!';
        $lang_string["save_error"] = 'Hata! Emoticon Ayarlar� kaydedilmedi.';
        $lang_string["save_button"] = '�fade Kaydet';
        break;

      case 'archives': // New for 0.4.8
        $lang_string['title'] = "Ar�iv";
        $lang_string['showall'] = "T�m�n� G�ster";
        break;

      case 'manage_users':
        $lang_string['title'] = "�yeleri Y�net / D�zenle";
        $lang_string['instructions'] = "Bu b�l�m yeni �ye ekleyebilir ve silebilirsiniz. D�zenle linkini t�klay�p d�zenleyebilir,ilgili b�l�mleri i�aretleyip/kald�r�p yetkileri ayarlayabilirsiniz.";
        $lang_string['fulladminerror'] = "You must be a full administrator to do this!";
        $lang_string['header_user'] = "�ye: ";
        $lang_string['header_property'] = "�zellik";
        $lang_string['header_value'] = "Kar��l�k";
        $lang_string['prop_username'] = "�ye Ad�:";
        $lang_string['prop_fullname'] = "G�r�nen �sim:";
        $lang_string['prop_password'] = "�ifre:";
        $lang_string['prop_email'] = "Email:";
        $lang_string['prop_avatar'] = "Avatar URL:";
        $lang_string['prop_state'] = "Aktif?";
        $lang_string['prop_sec_Moderate'] = "Yorumlar� Y�netebilir ";
        $lang_string['prop_sec_Delete'] = "Herhangi bir Yaz� Silebilir";
        $lang_string['prop_sec_Edit'] = "Yaz�lar� D�zenleyebilir";
        $lang_string['btn_SaveChanges'] = "De�i�ikleri Kaydet";
        $lang_string['btn_CreateUser'] = "�ye Yarat";
        $lang_string['btn_Cancel'] = "�ptal";  
        $lang_string['grid_header'] = "�ye Listesi";
        $lang_string['grid_login'] = 'Giri�';
        $lang_string['grid_email'] = 'Email';
        $lang_string['grid_avatar'] = 'Avatar';
        $lang_string['grid_state'] = 'Aktif?';
        $lang_string['btn_modify'] = 'D�zenle';
        $lang_string['btn_delete'] = 'Sil';
        $lang_string['create_user'] = 'Yeni �ye Yarat';
        break;

      default:
        break;
    }
  }
?>
