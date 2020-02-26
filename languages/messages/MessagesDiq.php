<?php
/** Zazaki (Zazaki)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 */

$namespaceNames = [
	NS_MEDIA            => 'Medya',
	NS_SPECIAL          => 'Bağse',
	NS_TALK             => 'Vaten',
	NS_USER             => 'Karber',
	NS_USER_TALK        => 'Karber_vaten',
	NS_PROJECT_TALK     => '$1_vaten',
	NS_FILE             => 'Dosya',
	NS_FILE_TALK        => 'Dosya_vaten',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'MediaWiki_vaten',
	NS_TEMPLATE         => 'Şablon',
	NS_TEMPLATE_TALK    => 'Şablon_vaten',
	NS_HELP             => 'Desteg',
	NS_HELP_TALK        => 'Desteg_vaten',
	NS_CATEGORY         => 'Kategori',
	NS_CATEGORY_TALK    => 'Kategori_vaten',
];

$namespaceAliases = [
	'Xısusi'               => NS_SPECIAL,
	'Werênayış'            => NS_TALK,
	'Mesac'                => NS_TALK,
	'Karber_werênayış'     => NS_USER_TALK,
	'Karber_mesac'         => NS_USER_TALK,
	'$1_werênayış'         => NS_PROJECT_TALK,
	'$1_mesac'             => NS_PROJECT_TALK,
	'Dosya_werênayış'      => NS_FILE_TALK,
	'Dosya_mesac'          => NS_FILE_TALK,
	'MediaWiki_werênayış'  => NS_MEDIAWIKI_TALK,
	'MediaWiki_mesac'      => NS_MEDIAWIKI_TALK,
	'Şablon_werênayış'     => NS_TEMPLATE_TALK,
	'Şablon_mesac'         => NS_TEMPLATE_TALK,
	'Desteg'               => NS_HELP,
	'Desteg_werênayış'     => NS_HELP_TALK,
	'Peşti'                => NS_HELP,
	'Peşti_mesac'          => NS_HELP_TALK,
	'Peşti_werênayış'      => NS_HELP_TALK,
	'Kategori'             => NS_CATEGORY,
	'Kategori_werênayış'   => NS_CATEGORY_TALK,
	'Kategoriye'           => NS_CATEGORY,
	'Kategoriye_mesac'     => NS_CATEGORY_TALK,
	'Kategoriye_werênayış' => NS_CATEGORY_TALK,
];

$specialPageAliases = [
	'Activeusers'               => [ 'KarberêAktifi' ],
	'Allmessages'               => [ 'MesaciPêro' ],
	'AllMyUploads'              => [ 'BarkerdışêMıPêro', 'DosyeyêMıPêro' ],
	'Allpages'                  => [ 'PeliPêro' ],
	'Ancientpages'              => [ 'PelêKehani' ],
	'Badtitle'                  => [ 'SernameyoXırabın' ],
	'Blankpage'                 => [ 'PelaVenge' ],
	'Block'                     => [ 'KılitKe', 'IPyKılitKe', 'KarberiKılitKe' ],
	'Booksources'               => [ 'ÇımeyêKıtabi' ],
	'BrokenRedirects'           => [ 'SerberdışêXırabıni' ],
	'Categories'                => [ 'Kategoriy' ],
	'ChangeEmail'               => [ 'EposteBıvurne' ],
	'ChangePassword'            => [ 'ParolaBıvurne', 'ParolaEyarKe' ],
	'ComparePages'              => [ 'PerranTêverşane' ],
	'Confirmemail'              => [ 'EposteQebulKe' ],
	'Contributions'             => [ 'İştıraki' ],
	'CreateAccount'             => [ 'HesabVıraze' ],
	'Deadendpages'              => [ 'PelêBêgırey' ],
	'DeletedContributions'      => [ 'İştırakêEsteriyay' ],
	'Diff'                      => [ 'Ferq' ],
	'DoubleRedirects'           => [ 'SerberdışoDılet' ],
	'EditWatchlist'             => [ 'ListaSeyrkerdışiBıvurne' ],
	'Emailuser'                 => [ 'EposteBırışe' ],
	'ExpandTemplates'           => [ 'ŞablonanHeraKe' ],
	'Export'                    => [ 'BereTeber' ],
	'Fewestrevisions'           => [ 'TewrŞenıkÇımraviyarnayışi' ],
	'FileDuplicateSearch'       => [ 'CıgeyrayışêDosyayaKopyakerdiye', 'CıgeyrayışêDosyayaDılete' ],
	'Filepath'                  => [ 'RayaDosya', 'CayêDosya' ],
	'Import'                    => [ 'BiyaZerre' ],
	'Invalidateemail'           => [ 'EposteyBıtexelne' ],
	'JavaScriptTest'            => [ 'TestêJavaScripti' ],
	'BlockList'                 => [ 'ListaKılitkerdışi', 'ListaKılitkerdışan', 'ListaKılitkerdışêIPyan' ],
	'LinkSearch'                => [ 'CıgeyrayışêGırey' ],
	'Listadmins'                => [ 'İdarekaranListeKe' ],
	'Listbots'                  => [ 'BotanListeKe' ],
	'Listfiles'                 => [ 'DosyeyanListeKe', 'ListaDosya', 'ListaResıman' ],
	'Listgrouprights'           => [ 'HeqanêGrubanListeKe', 'HeqêGrubaKarberan' ],
	'Listredirects'             => [ 'ListaSerberdışan' ],
	'ListDuplicatedFiles'       => [ 'KopyayaListanêDosyeyan' ],
	'Listusers'                 => [ 'ListaKarberan', 'KarberanListeKe' ],
	'Lockdb'                    => [ 'DBKilitk' ],
	'Log'                       => [ 'Qeyd', 'Qeydi' ],
	'Lonelypages'               => [ 'PelêBêwayıri' ],
	'Longpages'                 => [ 'PelêDergi' ],
	'MergeHistory'              => [ 'VerênanPêtewrKe' ],
	'MIMEsearch'                => [ 'MIMECıgeyrayış' ],
	'Mostcategories'            => [ 'TewrvêşiKategoriy' ],
	'Mostimages'                => [ 'DosyeyêKeCırêvêşiGıredayiyê' ],
	'Mostinterwikis'            => [ 'TewrvêşiTeberwikiy' ],
	'Mostlinked'                => [ 'PelêKeCırêvêşiGıredayiyê' ],
	'Mostlinkedcategories'      => [ 'KategoriyêKeCırêvêşiGıredayiyê' ],
	'Mostlinkedtemplates'       => [ 'ŞablonêKeCırêvêşiGıredayiyê' ],
	'Mostrevisions'             => [ 'TewrvêşiÇımraviyarnayışi' ],
	'Movepage'                  => [ 'PeleBere' ],
	'Mycontributions'           => [ 'İştırakêMı' ],
	'MyLanguage'                => [ 'ZıwanêMı' ],
	'Mypage'                    => [ 'PelaMı' ],
	'Mytalk'                    => [ 'WerênayışêMı' ],
	'Myuploads'                 => [ 'BarkerdışêMı' ],
	'Newimages'                 => [ 'DosyeyêNewey', 'ResımêNewey' ],
	'Newpages'                  => [ 'PelêNewey' ],
	'PageLanguage'              => [ 'Zıwanê_Pele' ],
	'PasswordReset'             => [ 'ParolaPeysereştış' ],
	'PermanentLink'             => [ 'GıreyoDaimi' ],
	'Preferences'               => [ 'Tercihi' ],
	'Prefixindex'               => [ 'VerbendZerrek' ],
	'Protectedpages'            => [ 'PelêKeŞevekiyayiyé' ],
	'Protectedtitles'           => [ 'SernameyêKeŞevekiyayiyê' ],
	'Randompage'                => [ 'Raştameye', 'PelaRaştameyiye' ],
	'RandomInCategory'          => [ 'KategoriyaRaştameyiye' ],
	'Randomredirect'            => [ 'SerberdışoRaştameye' ],
	'Randomrootpage'            => [ 'RaştamayePerraréçi' ],
	'Recentchanges'             => [ 'VurnayışêPeyêni' ],
	'Recentchangeslinked'       => [ 'GıreyêVurnayışêPeyênan' ],
	'Redirect'                  => [ 'Serberdış' ],
	'ResetTokens'               => [ 'SimgeyanPeyserberze' ],
	'Revisiondelete'            => [ 'ÇımraviyarnayışiBestere' ],
	'RunJobs'                   => [ 'KariBıgurene' ],
	'Search'                    => [ 'Cıgeyre' ],
	'Shortpages'                => [ 'PelêKılmi' ],
	'Specialpages'              => [ 'PelêXısusiy' ],
	'Statistics'                => [ 'İstatistiki' ],
	'Tags'                      => [ 'Etiketi' ],
	'TrackingCategories'        => [ 'KategoriyêKeTeqibBenê' ],
	'Unblock'                   => [ 'BloqiWedarne' ],
	'Uncategorizedcategories'   => [ 'KategoriyayékeKategoriyanébiyé' ],
	'Uncategorizedimages'       => [ 'DosyeyékeKategoriyanébiyé' ],
	'Uncategorizedpages'        => [ 'PerreyékeKategoriyanébiyé' ],
	'Uncategorizedtemplates'    => [ 'ŞablonékeKategoriyanébiyé' ],
	'Undelete'                  => [ 'Peyserbiya' ],
	'Unlockdb'                  => [ 'DBKılitiAk' ],
	'Unusedcategories'          => [ 'KategoriyayékeNékariyayé' ],
	'Unusedimages'              => [ 'DosyeyékeNékariyayé' ],
	'Unusedtemplates'           => [ 'ŞablonékeNékariyayé' ],
	'Unwatchedpages'            => [ 'PeleyékeNéweyneyéné' ],
	'Upload'                    => [ 'Barkerdış' ],
	'UploadStash'               => [ 'BarkerdışéNımıtey' ],
	'Userlogin'                 => [ 'KarberCıkewtış' ],
	'Userlogout'                => [ 'KarberVıcyayış' ],
	'Userrights'                => [ 'HeqéKarberan', 'SysopKerdış', 'BotKerdış' ],
	'Version'                   => [ 'Versiyon' ],
	'Wantedcategories'          => [ 'KategoriyayékeWazéné' ],
	'Wantedfiles'               => [ 'DosyeyékeWazéné' ],
	'Wantedpages'               => [ 'PerrékeWazéné' ],
	'Wantedtemplates'           => [ 'ŞablonékeWazéné' ],
	'Watchlist'                 => [ 'ListeySeyran' ],
	'Whatlinkshere'             => [ 'GreyNaySeraşıno' ],
	'Withoutinterwiki'          => [ 'Béİnterwiki' ],
];

$magicWords = [
	'redirect'                  => [ '0', '#HETENAYIŞ', '#REDIRECT' ],
	'notoc'                     => [ '0', '__ESTENÇINO__', '__NOTOC__' ],
	'nogallery'                 => [ '0', '__GALERİÇINO__', '__NOGALLERY__' ],
	'forcetoc'                  => [ '0', '__ESTENZARURET__', '__FORCETOC__' ],
	'toc'                       => [ '0', '__ESTEN__', '__TOC__' ],
	'noeditsection'             => [ '0', '__TİMARKERDIŞÇINO__', '__NOEDITSECTION__' ],
	'currentmonth'              => [ '1', 'AŞMİYANEWKİ', 'MEWCUDAŞMİ2', 'CURRENTMONTH', 'CURRENTMONTH2' ],
	'currentmonth1'             => [ '1', 'AŞMİYANEWKİ1', 'CURRENTMONTH1' ],
	'currentmonthname'          => [ '1', 'NAMEYAŞMDANEWKİ', 'CURRENTMONTHNAME' ],
	'currentmonthnamegen'       => [ '1', 'AŞMACIYANEWKİ', 'CURRENTMONTHNAMEGEN' ],
	'currentmonthabbrev'        => [ '1', 'AŞMİYANEWKİKILMKERDIŞ', 'CURRENTMONTHABBREV' ],
	'currentday'                => [ '1', 'ROCENEWKİ', 'CURRENTDAY' ],
	'currentday2'               => [ '1', 'ROCENEWKİ2', 'CURRENTDAY2' ],
	'currentdayname'            => [ '1', 'NAMEYÉROCENEWKİ', 'CURRENTDAYNAME' ],
	'currentyear'               => [ '1', 'SERRENEWKİ', 'CURRENTYEAR' ],
	'currenttime'               => [ '1', 'DEMENEWKİ', 'CURRENTTIME' ],
	'currenthour'               => [ '1', 'SEHATNEWKİ', 'CURRENTHOUR' ],
	'localmonth'                => [ '1', 'WAREYAŞMİ', 'WAREYAŞMİ2', 'LOCALMONTH', 'LOCALMONTH2' ],
	'localmonth1'               => [ '1', 'WAREYAŞMİ1', 'LOCALMONTH1' ],
	'localmonthname'            => [ '1', 'NAMEYÉWAREYAŞMİ', 'LOCALMONTHNAME' ],
	'localmonthnamegen'         => [ '1', 'NAMEYWAREDÉAŞMİDACI', 'LOCALMONTHNAMEGEN' ],
	'localmonthabbrev'          => [ '1', 'WAREYAŞMİKILMKERDIŞ', 'LOCALMONTHABBREV' ],
	'localday'                  => [ '1', 'WAREYROCE', 'LOCALDAY' ],
	'localday2'                 => [ '1', 'WAREYROCE2', 'LOCALDAY2' ],
	'localdayname'              => [ '1', 'NAMEYÉWAREYROCE', 'LOCALDAYNAME' ],
	'localyear'                 => [ '1', 'WAREYSERRE', 'LOCALYEAR' ],
	'localtime'                 => [ '1', 'WAREYDEME', 'LOCALTIME' ],
	'localhour'                 => [ '1', 'WAREYSEHAT', 'LOCALHOUR' ],
	'numberofpages'             => [ '1', 'AMARİYAPELAN', 'NUMBEROFPAGES' ],
	'numberofarticles'          => [ '1', 'AMARİYAWESİQAN', 'NUMBEROFARTICLES' ],
	'numberoffiles'             => [ '1', 'AMARİYADOSYAYAN', 'NUMBEROFFILES' ],
	'numberofusers'             => [ '1', 'AMARİYAKARBERAN', 'NUMBEROFUSERS' ],
	'numberofactiveusers'       => [ '1', 'AMARİYAAKTİVKARBERAN', 'NUMBEROFACTIVEUSERS' ],
	'numberofedits'             => [ '1', 'AMARİYAVURNAYIŞAN', 'NUMBEROFEDITS' ],
	'pagename'                  => [ '1', 'NAMEYPELA', 'PAGENAME' ],
	'pagenamee'                 => [ '1', 'NAMEYPELAA', 'PAGENAMEE' ],
	'namespace'                 => [ '1', 'CANAME', 'NAMESPACE' ],
	'namespacee'                => [ '1', 'CANAMEE', 'NAMESPACEE' ],
	'namespacenumber'           => [ '1', 'AMARİYACANAME', 'NAMESPACENUMBER' ],
	'talkspace'                 => [ '1', 'CAYÉVATENAYIŞİ', 'TALKSPACE' ],
	'talkspacee'                => [ '1', 'CAYÉVATENAYIŞAN', 'TALKSPACEE' ],
	'subjectspace'              => [ '1', 'CAYÉMESEL', 'CAYÉWESİQE', 'SUBJECTSPACE', 'ARTICLESPACE' ],
	'subjectspacee'             => [ '1', 'CAYÉMESELAN', 'CAYÉWESİQAN', 'SUBJECTSPACEE', 'ARTICLESPACEE' ],
	'fullpagename'              => [ '1', 'NAMEYPERERPÉRO', 'FULLPAGENAME' ],
	'fullpagenamee'             => [ '1', 'NAMEYPERERPÉRON', 'FULLPAGENAMEE' ],
	'subpagename'               => [ '1', 'NAMEYBINPERER', 'SUBPAGENAME' ],
	'subpagenamee'              => [ '1', 'NAMEYBINPERERAN', 'SUBPAGENAMEE' ],
	'rootpagename'              => [ '1', 'NAMEYRÉÇERDAPERER', 'ROOTPAGENAME' ],
	'rootpagenamee'             => [ '1', 'NAMEYRÉÇERDAPERAN', 'ROOTPAGENAMEE' ],
	'basepagename'              => [ '1', 'NAMEYESASPERER', 'BASEPAGENAME' ],
	'basepagenamee'             => [ '1', 'NAMEYESASPERAN', 'BASEPAGENAMEE' ],
	'talkpagename'              => [ '1', 'NAMEYPERAVATENAYIŞİ', 'TALKPAGENAME' ],
	'talkpagenamee'             => [ '1', 'NAMEYPERAVATENAYIŞAN', 'TALKPAGENAMEE' ],
	'subjectpagename'           => [ '1', 'NAMEYPERDAMESEL', 'NAMEYPERDAWESİQE', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ],
	'subjectpagenamee'          => [ '1', 'NAMEYPERDAMESELER', 'NAMEYPERDAWESİQER', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ],
	'msg'                       => [ '0', 'MSC', 'MSG:' ],
	'subst'                     => [ '0', 'KOPYAKE', 'ATEBERDE', 'SUBST:' ],
	'safesubst'                 => [ '0', 'EMELEYATEBERDE', 'SAFESUBST:' ],
	'msgnw'                     => [ '0', 'MSCNW:', 'MSGNW:' ],
	'img_thumbnail'             => [ '1', 'resmoqıckek', 'qıckek', 'thumb', 'thumbnail' ],
	'img_manualthumb'           => [ '1', 'resmoqıckek=$1', 'qıckek=$1', 'thumbnail=$1', 'thumb=$1' ],
	'img_right'                 => [ '1', 'raşt', 'right' ],
	'img_left'                  => [ '1', 'çep', 'left' ],
	'img_none'                  => [ '1', 'çıniyo', 'none' ],
	'img_width'                 => [ '1', '$1pik', '$1piksel', '$1px' ],
	'img_center'                => [ '1', 'werte', 'miyan', 'center', 'centre' ],
	'img_framed'                => [ '1', 'çerçeweyın', 'çerçewekerden', 'çerçewe', 'frame', 'framed', 'enframed' ],
	'img_frameless'             => [ '1', 'béçerçewe', 'frameless' ],
	'img_lang'                  => [ '1', 'zuwan=1$', 'lang=$1' ],
	'img_page'                  => [ '1', 'pera=$1', 'pera_$1', 'page=$1', 'page $1' ],
	'img_upright'               => [ '1', 'disleg', 'disleg=$1', 'disleg_$1', 'upright', 'upright=$1', 'upright $1' ],
	'img_border'                => [ '1', 'sinor', 'border' ],
	'img_baseline'              => [ '1', 'Sinoréerdi', 'baseline' ],
	'img_sub'                   => [ '1', 'anvar', 'sub' ],
	'img_super'                 => [ '1', 'cor', 'corén', 'super', 'sup' ],
	'img_top'                   => [ '1', 'gedug', 'top' ],
	'img_text_top'              => [ '1', 'gedug-metin', 'text-top' ],
	'img_middle'                => [ '1', 'merkez', 'middle' ],
	'img_bottom'                => [ '1', 'erd', 'bottom' ],
	'img_text_bottom'           => [ '1', 'erd-metin', 'text-bottom' ],
	'img_link'                  => [ '1', 'gre=$1', 'link=$1' ],
	'img_alt'                   => [ '1', 'klik=$1', 'alt=$1' ],
	'img_class'                 => [ '1', 'sınıf=$1', 'class=$1' ],
	'int'                       => [ '0', 'İNT:', 'INT:' ],
	'sitename'                  => [ '1', 'NAMEYSİTA', 'SITENAME' ],
	'ns'                        => [ '0', 'CN', 'NS:' ],
	'nse'                       => [ '0', 'CNV', 'NSE:' ],
	'localurl'                  => [ '0', 'LOKALGRE', 'LOCALURL:' ],
	'localurle'                 => [ '0', 'LOKALGREV', 'LOCALURLE:' ],
	'articlepath'               => [ '0', 'SOPAPERAN', 'ARTICLEPATH' ],
	'pageid'                    => [ '0', 'NIMREYPERER', 'PAGEID' ],
	'server'                    => [ '0', 'ARDEN', 'SERVER' ],
	'servername'                => [ '0', 'NAMEYARDEN', 'SERVERNAME' ],
	'scriptpath'                => [ '0', 'RAYASCRIPTİ', 'SCRIPTPATH' ],
	'stylepath'                 => [ '0', 'TERZÉTEWRİ', 'STYLEPATH' ],
	'grammar'                   => [ '0', 'GRAMER:', 'GRAMMAR:' ],
	'gender'                    => [ '0', 'CİNSİYET:', 'GENDER:' ],
	'notitleconvert'            => [ '0', '__SERNAMEVURNAYIŞÇINO__', '__SVÇ__', '__NOTITLECONVERT__', '__NOTC__' ],
	'nocontentconvert'          => [ '0', '__ZERREVURNAYIŞÇINO__', '__ZVÇ__', '__NOCONTENTCONVERT__', '__NOCC__' ],
	'currentweek'               => [ '1', 'MEVCUDHEFTE', 'CURRENTWEEK' ],
	'currentdow'                => [ '1', 'MEVCUDWAREYHEFTİ', 'CURRENTDOW' ],
	'localweek'                 => [ '1', 'WAREYHEFTİ', 'LOCALWEEK' ],
	'localdow'                  => [ '1', 'WAREYROCAHEFTİ', 'LOCALDOW' ],
	'revisionid'                => [ '1', 'NIMREYREVİZYONİ', 'REVISIONID' ],
	'revisionday'               => [ '1', 'ROCAREVİZYONİ', 'REVISIONDAY' ],
	'revisionday2'              => [ '1', 'ROCAREVİZYON2', 'REVISIONDAY2' ],
	'revisionmonth'             => [ '1', 'AŞMAREVİZYONİ', 'REVISIONMONTH' ],
	'revisionmonth1'            => [ '1', 'AŞMAREVİZYONİ1', 'REVISIONMONTH1' ],
	'revisionyear'              => [ '1', 'SERRAREVİZYONİ', 'REVISIONYEAR' ],
	'revisiontimestamp'         => [ '1', 'MALUMATAREVİZYONDADEMİ', 'REVISIONTIMESTAMP' ],
	'revisionuser'              => [ '1', 'REVİZYONAKARBERİ', 'REVISIONUSER' ],
	'revisionsize'              => [ '1', 'EBATAREVİZYONİ', 'REVISIONSIZE' ],
	'plural'                    => [ '0', 'ZAFEN:', 'PLURAL:' ],
	'fullurl'                   => [ '0', 'GREHEME:', 'FULLURL:' ],
	'fullurle'                  => [ '0', 'GREYHEME:', 'FULLURLE:' ],
	'canonicalurl'              => [ '0', 'GREYÉKANONİK:', 'CANONICALURL:' ],
	'canonicalurle'             => [ '0', 'GREYOKANONİK:', 'CANONICALURLE:' ],
	'lcfirst'                   => [ '0', 'KHİLK:', 'LCFIRST:' ],
	'ucfirst'                   => [ '0', 'BHİLK:', 'UCFIRST:' ],
	'lc'                        => [ '0', 'KH:', 'LC:' ],
	'uc'                        => [ '0', 'BH:', 'UC:' ],
	'raw'                       => [ '0', 'TEZE:', 'RAW:' ],
	'displaytitle'              => [ '1', 'SERNAMİBASNI', 'DISPLAYTITLE' ],
	'newsectionlink'            => [ '1', '__GREYÉSERNAMEDÉNEWİ__', '__NEWSECTIONLINK__' ],
	'nonewsectionlink'          => [ '1', '__GREYÉSERNAMEDÉNEWİÇINO__', '__NONEWSECTIONLINK__' ],
	'currentversion'            => [ '1', 'VERSİYONVNEWKİ', 'CURRENTVERSION' ],
	'currenttimestamp'          => [ '1', 'WAREYSEHATÉNEWKİ', 'CURRENTTIMESTAMP' ],
	'localtimestamp'            => [ '1', 'MALUMATÉWAREYSEHAT', 'LOCALTIMESTAMP' ],
	'directionmark'             => [ '1', 'HETANIŞANKERDIŞ', 'HETNIŞAN', 'DIRECTIONMARK', 'DIRMARK' ],
	'language'                  => [ '0', '#ZIWAN:', '#LANGUAGE:' ],
	'contentlanguage'           => [ '1', 'ZUWANÉKESTÉ', 'ZUWESTEN', 'CONTENTLANGUAGE', 'CONTENTLANG' ],
	'pagesinnamespace'          => [ '1', 'PERÉKCADÉNAMİDEYÉ', 'PELECN', 'PAGESINNAMESPACE:', 'PAGESINNS:' ],
	'numberofadmins'            => [ '1', 'AMARİYAADMİNAN', 'NUMBEROFADMINS' ],
	'formatnum'                 => [ '0', 'BABETNAYIŞ', 'FORMATNUM' ],
	'padleft'                   => [ '0', 'ÇEPİPIRK', 'PADLEFT' ],
	'padright'                  => [ '0', 'RAŞTİPIRK', 'PADRIGHT' ],
	'special'                   => [ '0', 'bağse', 'special' ],
	'speciale'                  => [ '0', 'bağsiye', 'speciale' ],
	'defaultsort'               => [ '1', 'RATNAYIŞOHESBNAYIŞ', 'SIRMEYRATNAYIŞOHESBNAYIŞ', 'KATEGORİYARATNAYIŞOHESBNAYIŞ', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ],
	'filepath'                  => [ '0', 'RAYADOSYA:', 'FILEPATH:' ],
	'tag'                       => [ '0', 'etiket', 'tag' ],
	'hiddencat'                 => [ '1', '__KATEGORİYANIMITİ__', '__HIDDENCAT__' ],
	'pagesincategory'           => [ '1', 'PERÉKKATEGORİDEYÉ', 'PERKATMİYAN', 'PAGESINCATEGORY', 'PAGESINCAT' ],
	'pagesize'                  => [ '1', 'EBATAPERER', 'PAGESIZE' ],
	'index'                     => [ '1', '__SERSIQ__', '__INDEX__' ],
	'noindex'                   => [ '1', '__SERSIQÇINYO__', '__NOINDEX__' ],
	'numberingroup'             => [ '1', 'AMARİYAGRUBER', 'AMARGRUB', 'NUMBERINGROUP', 'NUMINGROUP' ],
	'staticredirect'            => [ '1', '__STATİKHETENAYIŞ__', '__STATICHETENAYIŞ__', '__STATICREDIRECT__' ],
	'protectionlevel'           => [ '1', 'SEWİYEYASTARAN', 'PROTECTIONLEVEL' ],
	'formatdate'                => [ '0', 'deméformati', 'formatdate', 'dateformat' ],
	'url_path'                  => [ '0', 'RAY', 'PATH' ],
	'url_wiki'                  => [ '0', 'WİKİ', 'WIKI' ],
	'url_query'                 => [ '0', 'PERSİYE', 'QUERY' ],
	'defaultsort_noerror'       => [ '0', 'Ğırabinçıniya', 'noerror' ],
	'defaultsort_noreplace'     => [ '0', 'cewabçıniyo', 'noreplace' ],
	'pagesincategory_all'       => [ '0', 'péro', 'all' ],
	'pagesincategory_pages'     => [ '0', 'peri', 'pages' ],
	'pagesincategory_subcats'   => [ '0', 'bınkatategori', 'subcats' ],
	'pagesincategory_files'     => [ '0', 'dosyey', 'files' ],
];
