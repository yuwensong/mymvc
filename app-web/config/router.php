<?php

$config['router']['Web_Index'] = array(
	'^\/*$',
	'^\/asd\/$',
	'^\/asdfghjkl\/$',
);

$config['router']['Web_Sitemap'] = array(
    '^\/sitemap\.xml$',
);



$config['router']['Web_Advice'] = array(
		'^\/advice\/$',
);

$config['router']['Resource'] = array(
	'^\/([a-z]+)\/resource\/([a-z]+)\/(.+)\.(css|js)$',
);

$config['router']['Web_Album'] = array(
    '^\/(album)\/$',
	'^\/(album)\/search\/$',
	'^\/albumnew\/$',
	'^\/albumnew\/search\/$',
);

$config['router']['Web_Singer'] = array(
    '^\/(singer)\/$',
	'^\/(singer)\/search\/$',
    '^\/singernew\/$',
	'^\/singernew\/search\/$'
);

//测试用【首页专辑推荐小后台】
$config['router']['Web_AlbumRecommend'] = array(
		'^\/albumrecommend\/$'
);

//艺人单页
$config['router']['Web_View_Singer'] = array(
    '^\/singer\/(\d+)\/$',
    '^\/singer\/(\d+)\.html$',
);

//专辑单页
$config['router']['Web_View_Album'] = array(
    '^\/album\/(\d+)\/$',
    '^\/album\/(\d+)\.html$',
);

//艺人更多专辑
$config['router']['Web_View_MoreAlbum'] = array(
    '^\/album\/more\/(\d+)\/$'
);
//艺人更多歌曲
$config['router']['Web_View_MoreMusic'] = array(
    '^\/music\/more\/(\d+)\/$'
);

//搜索
$config['router']['Web_Search_Index'] = array(
    '^\/search\/$'
);


$config['router']['Web_Search_Music'] = array(
    '^\/search\/music\/$'
);


$config['router']['Web_Search_Album'] = array(
    '^\/search\/album\/$'
);


$config['router']['Web_Search_Singer'] = array(
    '^\/search\/singer\/$'
);

$config['router']['Web_Search_Find'] = array(
		'^\/search\/find\/$'
);
$config['router']['Web_Search_MusicFind'] = array(
		'^\/search\/musicfind\/$'
);
$config['router']['Web_Search_AlbumFind'] = array(
		'^\/search\/albumfind\/$'
);
$config['router']['Web_Search_UserFind'] = array(
		'^\/search\/userfind\/$'
);

//个人中心
$config['router']['Web_My_Index'] = array(
		'^\/my\/$'
);

$config["router"]["Web_My_MusicBuy"] = array(
		'^\/my\/musicbuy\/$'	
);

$config["router"]["Web_My_AlbumListened"] = array(
		'^\/my\/albumlistened\/$'
);

$config["router"]["Web_My_AlbumFavorite"] = array(
		'^\/my\/albumfavorite\/$'
);

$config["router"]["Web_My_PlayList"] = array(
		'^\/my\/playlist\/$'
);

$config["router"]["Web_My_PlayListFavorite"] = array(
		'^\/my\/playlistfavorite\/$'
);

$config["router"]["Web_Management_AlbumOrders"] = array(
		'^\/management\/albumorders\/$'
);

$config["router"]["Web_Management_SongOrders"] = array(
		'^\/management\/songorders\/$'
);

$config["router"]["Web_Management_AlbumOrderDetail"] = array(
        '^\/management\/albumorderdetail\/$'
);

$config["router"]["Web_Management_SongOrderDetail"] = array(
        '^\/management\/songorderdetail\/$'
);


//管理
$config['router']['Web_Management_Index'] = array(
		'^\/management\/$'
);

$config['router']['Web_Management_ReleaseSinger'] = array(
		'^\/management\/releasesinger\/$'
);

$config['router']['Web_Management_ReleaseSingerTeam'] = array(
		'^\/management\/releasesingerteam\/$'
);

$config['router']['Web_Management_SingerCheckStatus'] = array(
		'^\/management\/singercheckstatus\/$'
);

$config['router']['Web_Management_AlbumCheckStatus'] = array(
		'^\/management\/albumcheckstatus\/$'
);

$config['router']['Web_Management_ReleaseAlbum'] = array(
		'^\/management\/releasealbum\/$'
);

$config['router']['Web_Management_AddSongs'] = array(
		'^\/management\/addsongs\/$'
);

$config['router']['Web_Management_ListenedCounts'] = array(
		'^\/management\/listenedcounts\/$'
);

$config['router']['Web_Management_ReleaseRegion'] = array(
		'^\/management\/releaseregion\/$'
);
$config['router']['Web_Management_LrcMaker'] = array(
		'^\/management\/lrcmaker\/$'
);

$config['router']['Web_Ajax_GetMusic'] = array(
    '^\/ajax\/getinfo\/$'
);
$config['router']['Web_Ajax_CheckCode'] = array(
    '^\/ajax\/checkcode\/$'
);
$config['router']['Web_Ajax_My_AddComment'] = array(
		'^\/ajax\/addcomment\/$'
);
$config['router']['Web_Ajax_My_GetNotificationCounts'] = array(
		'^\/ajax\/getnotificationcounts\/$'
);
//排行榜
$config['router']['Web_Top_TopMusic'] = array(
		'^\/topmusic\/$',
		'^\/(topmusicsales)\/$'
);

$config['router']['Web_Top_TopSinger'] = array(
		'^\/topsinger\/$',
		'^\/(topsingersales)\/$'
);

$config['router']['Web_Top_TopAlbum'] = array(
		'^\/topalbum\/$',
		'^\/(topalbumsales)\/$'
);


$config['router']['Web_Ajax_My_PlayList'] = array(
    '^\/ajax\/playlist\/$'
);
$config['router']['Web_Ajax_My_User'] = array(
    '^\/ajax\/user\/$'
);
$config['router']['Web_Ajax_My_Album'] = array(
    '^\/ajax\/album\/$'
);
$config['router']['Web_Ajax_My_CheckSinger'] = array(
	'^\/ajax\/checksinger\/$'
);

$config['router']['Web_Ajax_My_AddSinger'] = array(
    '^\/ajax\/addsinger\/$'
);


$config['router']['Web_Ajax_My_AddAlbum'] = array(
    '^\/ajax\/addalbum\/$'
);


$config['router']['Web_Player'] = array(
    '^\/player\/$'
);

$config['router']['Web_Ajax_My_PublishSinger'] = array(
    '^\/ajax\/publishuser\/$'
);
//各种使用协议
$config['router']['Web_UserAgreement_RecoAgreement'] = array(
		'^\/recoagreement\/$'
);

$config['router']['Web_UserAgreement_CompanyAgreement'] = array(
		'^\/companyagreement\/$'
);
$config['router']['Web_UserAgreement_Guide'] = array(
		'^\/guide\/$'
);
$config['router']['Web_UserAgreement_Help'] = array(
		'^\/help\/$'
);
$config['router']['Web_UserAgreement_SingerAgreement'] = array(
		'^\/singeragreement\/$'
);
$config['router']['Web_My_Download'] = array(
        '^\/download\/$'
);

$config['router']['Web_My_Share_Auth'] = array(
    '^\/share\/returnurl\/([a-z0-9]+)\/$'
);

$config['router']['Web_Ajax_My_Share'] = array(
        '^\/ajax\/share\/$'
);

$config['router']['Web_Ajax_Search'] = array(
    '^\/ajax\/search\/$'
);

$config['router']['Web_Ajax_My_Demo'] = array(
     '^\/ajax\/demo\/$'
);


$config['router']['Web_Ajax_Report'] = array(
		'^\/ajax\/report\/$'
);
$config['router']['Web_UserAgreement_Partner'] = array(
        '^\/partner\/$'
);
$config['router']['Web_AboutUs'] = array(
		'^\/aboutus\/$'	
);
$config['router']['Web_ContactUs'] = array(
		'^\/contactus\/$'
);
$config['router']['Web_Ajax_Mp3Ok'] = array(
		'^\/ajax\/mp3ok\/$'	
);
$config['router']['Web_My_MyFollow'] = array(
		'^\/my\/myfollow\/$'
);
$config['router']['Web_Management_NewPreRelease'] = array(
		'^\/management\/newprerelease\/$'
);
$config["router"]["Web_Management_PublishSongsDemo"] = array(
		'^\/management\/publishsongsdemo\/$'
);
$config['router']['Web_Ajax_My_Bill'] = array(
        '^\/ajax\/bill\/$'   
);

$config['router']['Web_Ajax_My_Manage'] = array(
        '^\/ajax\/manage\/$'   
);


$config['router']['Web_Management_DigitalBill'] = array(
		'^\/management\/digitalbill\/$'
);
$config['router']['Web_Management_Receive'] = array(
		'^\/management\/receive\/$'
);
$config["router"]["Web_View_SingerDemo"] = array(
		'^\/singerdemo\/$'
);
$config['router']['Web_Demo'] = array(
		'^\/(demo)\/$',
		'^\/(demo)\/search\/$',
		'^\/demonew\/$',
		'^\/demonew\/search\/$'
);
$config['router']['Web_Management_RaiseInfo'] = array(
        '^\/management\/raiseinfo\/$'
);


$config["router"]["Web_View_RecentBuy"] = array(
		'^\/recentbuy\/$'
);

$config['router']['Web_Management_UploadDemo'] = array(
		'^\/management\/uploaddemo\/$'
);
$config['router']['Web_Management_RaiseStatus'] = array(
		'^\/management\/raisestatus\/$'
);
$config['router']['Web_View_MoreRaise'] = array(
		'^\/singer\/raise\-(\d+)\.html$'
);
$config['router']['Web_View_Raise'] = array(
		'^\/raise\/(\d+)\.html$'
);
$config['router']['Web_Ajax_My_Raise'] = array(
        '^\/ajax\/raise\/$'
);
$config['router']['Web_Ajax_My_Music'] = array(
        '^\/ajax\/music\/$'
);
$config['router']['Web_Ajax_My_UserRaise'] = array(
        '^\/ajax\/userraise\/$'
);


$config['router']['Web_View_SupportUser'] = array(
		'^\/supportuser\/$'
);
$config['router']['Web_Management_Singers'] = array(
		'^\/management\/singers\/$'
);
$config['router']['Web_Management_Albums'] = array(
		'^\/management\/albums\/$'
);
$config['router']['Web_Management_RaiseList'] = array(
		'^\/management\/raiselist\/$'
);
$config['router']['Web_Management_Demos'] = array(
		'^\/management\/demos\/$'
);
$config['router']['Web_Ajax_My_RaiseFavorite'] = array(
		'^\/ajax\/raisefavorite\/$'
);
$config['router']['Web_My_RaiseFavorite'] = array(
		'^\/my\/raisefavorite\/$'
);
$config['router']['Web_My_RaiseJoin'] = array(
		'^\/my\/raisejoin\/$'
);
$config['router']['Web_Preraise_PreRaise'] = array(
		'^\/raiselist'
);
$config['router']['Web_Preraise_Index'] = array(
		'^\/preraise\/$'
);

$config["router"]["Web_View_Song"] = array(
		'^\/music\/(\d+)\.html$'
);
$config["router"]["Web_View_Demo"] = array(
		'^\/demomusic\/(\d+)\.html$'
);
$config['router']['Web_View_NotiUrl'] = array(
		'^\/notiurl\/$'	
);
$config['router']['Web_My_RaiseFavorite'] = array(
		'^\/my\/raisefavorite\/$'
);