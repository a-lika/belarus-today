<?php
function Menu($menu_id)
{
    $str = '';
	
    $marker =array('{ID}', '{NAME}', '{LINK}', '{TEXT}', '{CLASS}');

    $shablon = file_get_contents(PATH_TEMPLATE . 'menu.tpl');

    $SQL = 'SELECT `menu_id`, `menu_name`, `menu_link`, `menu_text` FROM `menu`  WHERE `visible`=1 ORDER BY `position`';
    $date = mysql_query($SQL);
    $count = mysql_affected_rows();

    for ($i = 0; $i < $count; $i++)
    {
        $inf = mysql_fetch_array($date, MYSQL_NUM);
        if(mb_strlen($inf[3])>0)
        {
            if($inf[0]==$menu_id)
            {
                $class ='class="drop bold"';
            }
            else
            {
                $class ='class="drop"';
            }

        }
        else
        {
            if($inf[0]==$menu_id)
            {
                $class = 'class="bold"';
            }
            else
            {
                $class='';
            }

        }
        $marker_info = array($inf[0] , $inf[1], $inf[2], $inf[3], $class);

        $str .=str_replace($marker, $marker_info, $shablon);

    }

    return $str;

}

function Logo()
{
$shablon= file_get_contents(PATH_TEMPLATE . 'logo.tpl');
$shablon = str_replace('{LINK_SITE}', LINK_SITE,$shablon);


    return $shablon;
}


function Footer()
{
    $shablon = file_get_contents(PATH_TEMPLATE .'footer.tpl');

    return $shablon;
}

function About_Belarus()
{
    $str ='';

    $ID = isset($_GET['id']) ? $_GET['id']:0;
    $ID =(int)$ID;


    $shablon = file_get_contents(PATH_TEMPLATE .'razdel_info.tpl');
    $marker = array('{LINK}','{NAME}','{TEXT}');

    $SQL = "SELECT  `about_sub_link`, `about_sub_name`,`about_sub_text` FROM `about_belarus_sub` WHERE `about_id`=$ID ORDER BY `position`";
    $date = mysql_query($SQL);
    $count = mysql_affected_rows();
    for($i=0; $i<$count; $i++)
    {
        $inf =mysql_fetch_array($date, MYSQL_NUM);

        $str .=str_replace($marker, $inf, $shablon);
    }

    return $str;

}


function About_Belarus_Razdel()
{
    $str ='';

    $ID = isset($_GET['id']) ? $_GET['id']:0;
    $ID =(int)$ID;


    $shablon = file_get_contents(PATH_TEMPLATE .'about_belarus.tpl');
    $marker = array('{KEYWORDS}', '{DESCRIPTION}', '{TITLE}', '{NAME}' , '{IMAGE}', '{UNDER_TEXT}');

    $SQL = "SELECT `keywords`, `description`, `title` , `about_name` , `about_img` , `about_text` FROM `about_belarus` WHERE `about_id`=$ID ORDER BY `position`";
    $date = mysql_query($SQL);
    $count = mysql_affected_rows();
    for($i=0; $i<$count; $i++)
    {
        $inf =mysql_fetch_array($date, MYSQL_NUM);

        $str .=str_replace($marker, $inf, $shablon);
    }

    return $str;

}

function About_Belarus_Menu()
{
    $str ='';

    $ID = isset($_GET['id']) ? $_GET['id']:0;
    $ID =(int)$ID;


    $shablon = file_get_contents(PATH_TEMPLATE .'menu_razdel.tpl');
    $marker = array('{LINK}','{NAME}');

    $SQL = "SELECT  `about_sub_link`, `about_sub_name` 
	FROM `about_belarus_sub` 
	WHERE `about_id`=$ID 
	ORDER BY `position`";
    $date = mysql_query($SQL);
    $count = mysql_affected_rows();
    for($i=0; $i<$count; $i++)
    {
        $inf =mysql_fetch_array($date, MYSQL_NUM);

        $str .=str_replace($marker, $inf, $shablon);

    }

    return $str;

}


// =========================  Active rest   ===========

function Active_Rest()
{
    $str ='';

    $ID = isset($_GET['id']) ? $_GET['id']:0;
    $ID =(int)$ID;


    $shablon = file_get_contents(PATH_TEMPLATE .'razdel_info.tpl');
    $marker = array('{LINK}','{NAME}','{TEXT}');

    $SQL = "SELECT  `rest_sub_link`, `rest_sub_name`,`rest_sub_text` FROM `aсtive_rest_sub` WHERE `rest_id`=$ID ORDER BY `position`";
    $date = mysql_query($SQL);
    $count = mysql_affected_rows();
    for($i=0; $i<$count; $i++)
    {
        $inf =mysql_fetch_array($date, MYSQL_NUM);

        $str .=str_replace($marker, $inf, $shablon);
    }

    return $str;
}

function Active_Rest_Razdel()
{
    $str ='';

    $ID = isset($_GET['id']) ? $_GET['id']:0;
    $ID =(int)$ID;


    $shablon = file_get_contents(PATH_TEMPLATE .'active_rest.tpl');
    $marker = array('{KEYWORDS}', '{DESCRIPTION}', '{TITLE}', '{NAME}' , '{IMAGE}', '{UNDER_TEXT}');

    $SQL = "SELECT `keywords`, `description`, `title` , `rest_name` , `rest_img` , `rest_text` FROM `active_rest` WHERE `rest_id`=$ID ORDER BY `position`";
    $date = mysql_query($SQL);
    $count = mysql_affected_rows();
    for($i=0; $i<$count; $i++)
    {
        $inf =mysql_fetch_array($date, MYSQL_NUM);

        $str .=str_replace($marker, $inf, $shablon);
    }

    return $str;

}

function Active_Rest_Menu()
{
    $str ='';

    $ID = isset($_GET['id']) ? $_GET['id']:0;
    $ID =(int)$ID;


    $shablon = file_get_contents(PATH_TEMPLATE .'menu_razdel.tpl');
    $marker = array('{LINK}','{NAME}');

    $SQL = "SELECT  `rest_sub_link`, `rest_sub_name` 
	FROM `aсtive_rest_sub` 
	WHERE `rest_id`=$ID 
	ORDER BY `position`";
	
    $date = mysql_query($SQL);
    $count = mysql_affected_rows();
    for($i=0; $i<$count; $i++)
    {
        $inf =mysql_fetch_array($date, MYSQL_NUM);

        $str .=str_replace($marker, $inf, $shablon);
    }

    return $str;

}

//============================ Helpful ========================


function Links()
{
    $str ='';

 //   $ID = isset($_GET['id']) ? $_GET['id']:0;
  //  $ID =(int)$ID;


    $shablon = file_get_contents(PATH_TEMPLATE .'helpful_links.tpl');
    $marker = array('{LINKS}','{KEYWORDS}');

    $SQL = "SELECT  `helpful_text`, `keywords` 
	FROM `helpful` 
	WHERE `helpful_id`=1";
    $date = mysql_query($SQL);
    $count = mysql_affected_rows();
    for($i=0; $i<$count; $i++)
    {
        $inf =mysql_fetch_array($date, MYSQL_NUM);

        $str .=str_replace($marker, $inf, $shablon);


    }

    return $str;

}

function Helpful_Menu()
{
    $str ='';

    $shablon = file_get_contents(PATH_TEMPLATE .'menu_helpful.tpl');
    $marker = array('{LINK}','{ID}', '{NAME}');

    $SQL = "SELECT  `helpful_info_link`, `helpful_info_id`, `helpful_info_name` 
	FROM `helpful_info` 
	WHERE `helpful_info_id`
	ORDER BY `position`";
	
    $date = mysql_query($SQL);
    $count = mysql_affected_rows();
    for($i=0; $i<$count; $i++)
    {
        $inf =mysql_fetch_array($date, MYSQL_NUM);

        $str .=str_replace($marker, $inf, $shablon);


    }

    return $str;

}


function Helpful()
{
    $str ='';

    $ID = isset($_GET['id']) ? $_GET['id']:0;
    $ID =(int)$ID;

    $shablon = file_get_contents(PATH_TEMPLATE .'helpful_info.tpl');
    $marker = array('{KEYWORDS}', '{DESCRIPTION}', '{TITLE}', '{NAME}' , '{TEXT}');

    $SQL = "SELECT `keywords`, `description`, `title` , `helpful_info_name` , `helpful_info_text` 
	FROM `helpful_info` 
	WHERE `helpful_info_id`=$ID 
	ORDER BY `position`";
	
    $date = mysql_query($SQL);
    $count = mysql_affected_rows();
    for($i=0; $i<$count; $i++)
    {
        $inf =mysql_fetch_array($date, MYSQL_NUM);

        $str .=str_replace($marker, $inf, $shablon);

    }

    return $str;

}







//================================ City ================
function City()
{
    $str = '';
	
	$ID = isset($_GET['id']) ? $_GET['id']:0;
   $ID =(int)$ID;
	
	
    $marker =array('{ID}', '{TITLE}', '{NAME}', '{IMAGE}', '{TEXT}', '{DESCRIPTION}','{CITY_COORD_LAT}','{CITY_COORD_LNG}');

    $shablon = file_get_contents(PATH_TEMPLATE . 'city.tpl');

    $SQL = "SELECT `city_id`,`title`, `city_name` , `city_img` , `city_text`, `city_description`, `city_coord_lat` ,  `city_coord_lng` 
	FROM `city` 
	WHERE `city_id`=$ID  
	ORDER BY `position`";
//	
    $date = mysql_query($SQL);
    $count = mysql_affected_rows();

    for ($i = 0; $i < $count; $i++)
    {
        $inf = mysql_fetch_array($date, MYSQL_NUM);

        $str .=str_replace($marker, $inf, $shablon);

    }

    return $str;

}


//============================= City Panorama ============

function Panorama_City()
{
    $str ='';

    $ID = isset($_GET['id']) ? $_GET['id']:0;
	$ID =(int)$ID;


    $shablon = file_get_contents(PATH_TEMPLATE .'panorama.tpl');
    $marker = array('{PANORAMA_NAME}', '{PANORAMA_LINK}', '{PANORAMA_COORDS}');

    $SQL = "SELECT  `panorama_name`, `panorama_link` , `panorama_coords` FROM `city` WHERE `city_id`=$ID ORDER BY `position`";
    $date = mysql_query($SQL);
    $count = mysql_affected_rows();
    for($i=0; $i<$count; $i++)
    {
        $inf =mysql_fetch_array($date, MYSQL_NUM);

        $str .=str_replace($marker, $inf, $shablon);

    }

    return $str;

}



//================================ City Gallery ====================

function Slider_Photo_City()
{
    $str = '';
	
	$ID = isset($_GET['id']) ? $_GET['id']:0;
	$ID =(int)$ID;
	
    $marker =array('{PHOTO}') ;

    $shablon = file_get_contents(PATH_TEMPLATE . 'slider_photo.tpl');

    $SQL = "SELECT `photo` FROM `city_photo` WHERE `city_id`=$ID ORDER BY `photo_id` ASC";
    $date = mysql_query($SQL);
    $count = mysql_affected_rows();

    for ($i = 0; $i < $count; $i++)
    {
        $inf = mysql_fetch_array($date, MYSQL_NUM);

        $str .=str_replace($marker, $inf, $shablon);

    }

    return $str;

}


function Gallery_Photo_City()
{
    $str = '';
	
	$ID = isset($_GET['id']) ? $_GET['id']:0;
	$ID =(int)$ID;
	
    $marker =array('{PHOTO_ID}' , '{PHOTO}') ;

    $shablon = file_get_contents(PATH_TEMPLATE . 'gallery_photo.tpl');

    $SQL = "SELECT `photo_id`, `photo` 
	FROM `city_photo` 
	WHERE `city_id`=$ID 
	ORDER BY `photo_id` ASC";
	
    $date = mysql_query($SQL);
    $count = mysql_affected_rows();

    for ($i = 0; $i < $count; $i++)
    {
        $inf = mysql_fetch_array($date, MYSQL_NUM);
      
        $str .=str_replace($marker, $inf, $shablon);

    }

    return $str;

}




//============================== Photo Object ===========


function Slider_Photo_Object()
{
    $str = '';
	
	$ID = isset($_GET['id']) ? $_GET['id']:0;
	$ID =(int)$ID;
	
    $marker =array('{PHOTO}') ;

    $shablon = file_get_contents(PATH_TEMPLATE . 'slider_photo.tpl');

    $SQL = "SELECT `photo` FROM `attr_photo` 
	WHERE `attr_id`=$ID 
	ORDER BY `photo_id` ASC";
	
    $date = mysql_query($SQL);
    $count = mysql_affected_rows();

    for ($i = 0; $i < $count; $i++)
    {
        $inf = mysql_fetch_array($date, MYSQL_NUM);

        $str .=str_replace($marker, $inf, $shablon);

    }

    return $str;

}


function Gallery_Photo_Object()
{
    $str = '';
	
	$ID = isset($_GET['id']) ? $_GET['id']:0;
	$ID =(int)$ID;
	
    $marker =array('{PHOTO_ID}' , '{PHOTO}') ;

    $shablon = file_get_contents(PATH_TEMPLATE . 'gallery_photo.tpl');

    $SQL = "SELECT `photo_id`, `photo` 
	FROM `attr_photo` 
	WHERE `attr_id`=$ID 
	ORDER BY `photo_id` ASC";
	
    $date = mysql_query($SQL);
    $count = mysql_affected_rows();

    for ($i = 0; $i < $count; $i++)
    {
        $inf = mysql_fetch_array($date, MYSQL_NUM);
      
        $str .=str_replace($marker, $inf, $shablon);

    }

    return $str;

}

function Panorama_Oblect()
{
    $str ='';

    $ID = isset($_GET['id']) ? $_GET['id']:0;
	$ID =(int)$ID;


    $shablon = file_get_contents(PATH_TEMPLATE .'panorama.tpl');
    $marker = array('{PANORAMA_NAME}', '{PANORAMA_LINK}', '{PANORAMA_COORDS}');

    $SQL = "SELECT  `panorama_name`, `panorama_link` , `panorama_coords` FROM `attraction` WHERE `attr_id`=$ID ORDER BY `position`";
    $date = mysql_query($SQL);
    $count = mysql_affected_rows();
    for($i=0; $i<$count; $i++)
    {
        $inf =mysql_fetch_array($date, MYSQL_NUM);

        $str .=str_replace($marker, $inf, $shablon);


    }

    return $str;

}



//============================= Rout Card ====================

function Rout_Card_Popular()
{
    $str = '';
	
    $marker =array('{ID}','{NAME}', '{TIME}', '{IMAGE}' , '{LINK}',  '{LENGTH}', '{PATH}', '{TRANSPORT_ICON}') ;

    $shablon = file_get_contents(PATH_TEMPLATE . 'rout_card.tpl');

    $SQL = "SELECT  `rout_id`,`rout_name`, `rout_time`, `rout_img_small`, `rout_link`, `rout_length`, `rout_path`, `transport_img` 
	FROM `rout`, `transport` 
	WHERE `rout`.`transport_id`=`transport`.`transport_id` 
	ORDER BY `rout_rating` DESC 
	LIMIT 4";
	
    $date = mysql_query($SQL);
    $count = mysql_affected_rows();

    for ($i = 0; $i < $count; $i++)
    {
        $inf = mysql_fetch_array($date, MYSQL_NUM);
      
        $str .=str_replace($marker, $inf, $shablon);

    }

    return $str;

}


function Popular_trip()
{
 
$marker = array('{ROUT_CARD}');
$marker_info = array(Rout_Card_Popular());

$popular_trip= file_get_contents(PATH_TEMPLATE . 'popular_trip.tpl');

$page = str_replace($marker, $marker_info, $popular_trip);
    return $page;
}


// ============================	 Other Routs =============

function Rout_Card_Other()
{
    $str = '';
    $ID = isset($_GET['id']) ? $_GET['id']:0;
    $ID =(int)$ID;
    $SQL = "SELECT `transport_id` FROM `rout` WHERE `rout_id`=$ID";

    $d = mysql_query($SQL);
    $count_t = mysql_affected_rows();
    if($count_t==1)
    {
        $trans = mysql_fetch_array($d);
        $ID_Transport=$trans[0];
    }
    else
    {
        $ID_Transport=0;

    }
	
    $marker =array('{ID}', '{NAME}', '{TIME}', '{IMAGE}' , '{LINK}', '{LENGTH}', '{PATH}', '{TRANSPORT_ICON}') ;

    $shablon = file_get_contents(PATH_TEMPLATE . 'rout_card.tpl');

    $SQL = "SELECT `rout_id`,`rout_name`, `rout_time`, `rout_img_small`, `rout_link`, `rout_length`, `rout_path`, `transport_img` 
	FROM `rout`, `transport` 
	WHERE `rout`.`transport_id`=`transport`.`transport_id`
	AND `transport`.`transport_id`=$ID_Transport
	AND `rout_id`<>$ID
	ORDER BY `rout_rating` DESC
	LIMIT 0,4";
	
    $date = mysql_query($SQL);
    $count = mysql_affected_rows();

    for ($i = 0; $i < $count; $i++)
    {
        $inf = mysql_fetch_array($date, MYSQL_NUM);
      
        $str .=str_replace($marker, $inf, $shablon);

    }

    return $str;

}


function Similar_Article()
{
	$str = '';
    $ID = isset($_GET['id']) ? $_GET['id']:0;
    $ID =(int)$ID;
    $SQL = "SELECT `article_cat_id` FROM `article` WHERE `article_id`=$ID";
	$d = mysql_query($SQL);
    $count_c = mysql_affected_rows();
    if($count_c==1)
    {
        $cat = mysql_fetch_array($d);
        $ID_Category=$cat[0];
    }
    else
    {
        $ID_Category=0;

    }

$marker =array('{ID}','{LINK}', '{IMAGE}' , '{DATE}', '{CATEGORY}', '{NAME}', '{DESCRIPTION}');

    $shablon = file_get_contents(PATH_TEMPLATE . 'article_card.tpl');

    $SQL = "SELECT `article_id`,`article_link`,`article_img`, `article_date`, `article_cat_name`, `article_name`, `article_description` 
	FROM `article`, `article_category` 
	WHERE `article`.`article_cat_id`=`article_category`.`article_cat_id`
	AND `article_category`.`article_cat_id`=$ID_Category
	AND `article_id`<>$ID
	ORDER BY `date` DESC
	LIMIT 0,2";

	$date = mysql_query($SQL);
    $count = mysql_affected_rows();

    for ($i = 0; $i < $count; $i++)
    {
        $inf = mysql_fetch_array($date, MYSQL_NUM);
      
        $str .=str_replace($marker, $inf, $shablon);

    }

    return $str;
	
}


function Other_trip()
{
	
	$str = '';
 
$marker = array('{ROUT_CARD}');
$marker_info = array(Rout_Card_Other());

$other_trip= file_get_contents(PATH_TEMPLATE . 'other_trip.tpl');


$page = str_replace($marker, $marker_info, $other_trip);
    return $page;
}



//============================= Rout =========================

function Rout()
{
    $str = '';
	
	$ID = isset($_GET['id']) ? $_GET['id']:0;
	$ID =(int)$ID;
	
    $marker =array('{NAME}', '{IMAGE}' , '{TEXT}',  '{DESCRIPTION}') ;

    $shablon = file_get_contents(PATH_TEMPLATE . 'rout.tpl');

    $SQL = "SELECT `rout_name`, `rout_img`, `rout_text`, `rout_description` 
	FROM `rout` 
	WHERE `rout_id`=$ID";
	
    $date = mysql_query($SQL);
    $count = mysql_affected_rows();

    for ($i = 0; $i < $count; $i++)
    {
        $inf = mysql_fetch_array($date, MYSQL_NUM);
      
        $str .=str_replace($marker, $inf, $shablon);

    }
    $str = str_replace('{ID}',$ID, $str);

    return $str;

}


//==================== All Routs ===========================

function Rout_Select()
{
    $str = '';
	
    $marker =array('{ID}','{NAME}', '{TIME}', '{IMAGE}' , '{LINK}',  '{LENGTH}', '{PATH}', '{TRANSPORT_ICON}') ;

    $shablon = file_get_contents(PATH_TEMPLATE . 'rout_card.tpl');

    $SQL = "SELECT `rout_id`,`rout_name`, `rout_time`, `rout_img_small`, `rout_link`, `rout_length`, `rout_path`, `transport_img` 
	FROM `rout`, `transport` 
	WHERE `rout`.`transport_id`=`transport`.`transport_id` 
	ORDER BY `rout_rating` DESC";
	
    $date = mysql_query($SQL);
    $count = mysql_affected_rows();

    for ($i = 0; $i < $count; $i++)
    {
        $inf = mysql_fetch_array($date, MYSQL_NUM);
      
        $str .=str_replace($marker, $inf, $shablon);

    }

    return $str;

}


function All_Rout()
{
 
$marker = array('{ROUT_CARD}');
$marker_info = array(Rout_Select());

$all_rout= file_get_contents(PATH_TEMPLATE . 'all_rout.tpl');

$page = str_replace($marker, $marker_info, $all_rout);

    return $page;
	
}


//============================= Articles ====================

function Articles_Category()
{
	$ID = isset($_GET['id']) ? $_GET['id'] : 0;
	$ID = (int)$ID;

	$sort = isset($_GET['sort']) ? $_GET['sort'] : 4;
    $sort = (int)$sort;
    $sort = ($sort>4 && $sort<1) ? 4: $sort;

    $str = '';
	
	$marker =array('{ID}', '{CLASS_1}', '{CLASS_2}', '{CLASS_3}', '{CLASS_4}');

    $shablon = file_get_contents(PATH_TEMPLATE . 'article_select.tpl');

    $SQL = "SELECT `article_cat_id`
	FROM `article_category` 
	WHERE `article_cat_id`";
	
	switch($sort)	
	{
	case 1: (($class1 ='class="bold"')&&($class2='class=""')&&($class3='class=""')&&($class4='class=""'));
	break;
	case 2: (($class1 ='class=""')&&($class2='class="bold"')&&($class3='class=""')&&($class4='class=""'));
	break;
	case 3: (($class1 ='class=""')&&($class2='class=""')&&($class3='class="bold"')&&($class4='class=""'));
	break;
	case 4: (($class1 ='class=""')&&($class2='class=""')&&($class3='class=""')&&($class4='class="bold"'));
	break;
	};
	
    $date = mysql_query($SQL);
    $count = mysql_affected_rows();

        $inf = mysql_fetch_array($date, MYSQL_NUM);
        $marker_info = array($inf[0],$class1, $class2, $class3, $class4);
        $str .=str_replace($marker, $marker_info, $shablon);

    return $str;

}


function Articles_Select()
{
	$ID = isset($_GET['id']) ? $_GET['id'] : 0;
	$ID = (int)$ID;

	$sort = isset($_GET['sort']) ? $_GET['sort'] : 4;
    $sort = (int)$sort;
    $sort = ($sort>4 && $sort<1) ? 4: $sort;

    $str = '';
	
    $marker =array('{ID}','{LINK}', '{IMAGE}' , '{DATE}', '{CATEGORY}', '{NAME}', '{DESCRIPTION}');

    $shablon = file_get_contents(PATH_TEMPLATE . 'article_card.tpl');

    $SQL = "SELECT `article_id`,`article_link`,`article_img`, `article_date`, `article_cat_name`, `article_name`, `article_description` 
	FROM `article`, `article_category` 
	WHERE `article`.`article_cat_id`=`article_category`.`article_cat_id`";
	
	switch($sort)	
	{
	case 1: $SQL .=" AND `article`.`article_cat_id`=1";
	break;
	case 2: $SQL .=" AND `article`.`article_cat_id`=2";
	break;
	case 3: $SQL .=" AND `article`.`article_cat_id`=3";
	break;
	case 4: $SQL .="";
	break;
	};
	
	$SQL .=" ORDER BY `date` DESC";

	
    $date = mysql_query($SQL);
    $count = mysql_affected_rows();

    for ($i = 0; $i < $count; $i++)
    {
        $inf = mysql_fetch_array($date, MYSQL_NUM);
        $str .=str_replace($marker, $inf , $shablon);

    }

    return $str;
}

function Article()
{
    $str = '';
	
	$ID = isset($_GET['id']) ? $_GET['id']:0;
	$ID =(int)$ID;
	
    $marker =array('{DESCRIPTION}', '{KEYWORDS}', '{TITLE}', '{IMAGE}' , '{NAME}', '{DATE}', '{CATEGORY}', '{TEXT}', '{PANORAMA}');

    $shablon = file_get_contents(PATH_TEMPLATE . 'article.tpl');

    $SQL = "SELECT `description`, `keywords`, `title`, `article_img`, `article_name`, `article_date`,  `article_cat_name`, `article_text`, `panorama_link` 
	FROM `article`, `article_category` 
	WHERE `article`.`article_cat_id`=`article_category`.`article_cat_id` 
	AND `article_id`=$ID
	ORDER BY `date` DESC";
	
    $date = mysql_query($SQL);
    $count = mysql_affected_rows();

    for ($i = 0; $i < $count; $i++)
    {
        $inf = mysql_fetch_array($date, MYSQL_NUM);
      
        $str .=str_replace($marker, $inf, $shablon);

    }

    return $str;

}


function Attr_Type()
{
    $str = '';
	$sort = isset($_GET['sort']) ? $_GET['sort'] : 2;
    $sort = (int)$sort;
    $sort = ($sort>2 && $sort<1) ? 2 : $sort;
	
	
	$ID = isset($_GET['id']) ? $_GET['id']:0;
	$ID =(int)$ID;
	
    $marker =array('{ID}','{TYPE_NAME}', '{IMAGE}', '{CLASS_1}', '{CLASS_2}') ;

    $shablon = file_get_contents(PATH_TEMPLATE . 'attr_type.tpl');

    $SQL = "SELECT `type_id`,`type_name`, `type_img`
	FROM `type` 
	WHERE `type_id`=$ID";
	
	switch($sort)	
	{
	case 1: (($class1 ='class="bold"')&&($class2='class=""'));
	break;
	case 2: (($class1 ='class=""')&&($class2='class="bold"'));
	break;
	
	};

	
    $date = mysql_query($SQL);
    $count = mysql_affected_rows();

    for ($i = 0; $i < $count; $i++)
    {
        $inf = mysql_fetch_array($date, MYSQL_NUM);
        $marker_info = array($inf[0] , $inf[1], $inf[2], $class1, $class2);

        $str .=str_replace($marker, $marker_info, $shablon);
	 

    }

    return $str;

}


//========================= Attraction ==============
function Attraction()
{
    $str = '';
	
	$ID = isset($_GET['id']) ? $_GET['id']:0;
	$ID =(int)$ID;
	

	$marker =array('{ID}', '{DESCRIPTION}', '{KEYWORDS}', '{TITLE}', '{ATTR_NAME}', '{TEXT}', '{ATTR_DESCRIPTION}', '{IMAGE}', '{ATTR_COORD_LAT}', '{ATTR_COORD_LNG}', '{PANORAMA}', '{TYPE_NAME}', '{TYPE_ID}');
	
    $shablon = file_get_contents(PATH_TEMPLATE . 'attraction.tpl');

	$SQL = "SELECT `attr_id`,`description`, `keywords`, `title`, `attr_name`, `attr_text`,`attr_description`, `attr_img`, `attr_coord_lat`, `attr_coord_lng` , `panorama_link`,`type_name`, `attraction`.`type_id`
	FROM `attraction`, `type`
	WHERE `attr_id`=$ID
	AND `attraction`.`type_id`=`type`.`type_id`
	ORDER BY `attr_rating` DESC";
	

    $date = mysql_query($SQL);
    $count = mysql_affected_rows();

    for ($i = 0; $i < $count; $i++)
    {
        $inf = mysql_fetch_array($date, MYSQL_NUM);
      
          $str .=str_replace($marker, $inf, $shablon);

    }

    return $str;

}



//=========================== Attraction on types
function Attr()
{
	$ID = isset($_GET['id']) ? $_GET['id'] : 0;
	$ID = (int)$ID;

   $sort = isset($_GET['sort']) ? $_GET['sort'] : 2;
    $sort = (int)$sort;
    $sort = ($sort>2 && $sort<1) ? 2: $sort;
	
    $str = '';
    $marker =array('{ID}','{NAME}','{IMAGE}', '{TYPE_ATTR_ID}', '{TYPE_ID}');

    $shablon = file_get_contents(PATH_TEMPLATE . 'attraction_card.tpl');

    $SQL = "SELECT `attr_id`, `attr_name` , `attr_img_small` , `attraction`.`type_id` , `type`.`type_id`
	FROM `attraction` ,`type`
	WHERE `attraction`.`visible`=1 AND `attraction`.`type_id`=$ID 
	AND `attraction`.`type_id`=`type`.`type_id`";
	
	
	switch($sort)	
	{
	case 1: $SQL .=" ORDER BY `attr_name` ASC";
	break;
	case 2: $SQL .=" ORDER BY `attr_rating` DESC";
	break;
	};

	
	
	
    $date = mysql_query($SQL);
    $count = mysql_affected_rows();

    for ($i = 0; $i < $count; $i++)
    {
        $inf = mysql_fetch_array($date, MYSQL_NUM);
      
        $str .=str_replace($marker,  $inf, $shablon);

    }

    return $str;

}



//================================ Attraction near

function Attr_Near()
{

	$ID = isset($_GET['id']) ? $_GET['id'] : 0;
	$ID = (int)$ID;

    $str = '';
    $marker =array('{ID}','{NAME}','{IMAGE}') ;

    $shablon = file_get_contents(PATH_TEMPLATE . 'attraction_card.tpl');

    $SQL = "SELECT `attr_id`, `attr_name` , `attr_img_small`  
	FROM `attraction`  
	WHERE `attr_id` IN
	(Select `similar_attr_2_id` FROM `similar_attr` WHERE `similar_attr_1_id`=$ID)
	ORDER BY `attr_rating` DESC";
	
    $date = mysql_query($SQL);
    $count = mysql_affected_rows();


    for ($i = 0; $i < $count; $i++)
    {
        $inf = mysql_fetch_array($date, MYSQL_NUM);
      
        $str .=str_replace($marker, $inf, $shablon);

    }



    return $str;

}



//================================ Attraction in the city

function Attr_In_City()
{

	$ID = isset($_GET['id']) ? $_GET['id'] : 0;
	$ID = (int)$ID;

    $str = '';
    $marker =array('{ID}','{NAME}','{IMAGE}') ;

    $shablon = file_get_contents(PATH_TEMPLATE . 'attraction_card.tpl');

    $SQL = "SELECT `attraction`.`attr_id`, `attr_name` , `attr_img_small`  
	FROM `attraction`,`city`,`city_attr`
	WHERE `city`.`city_id`=`city_attr`.`city_id`
        AND `attraction`.`attr_id`=`city_attr`.`attr_id`
        AND `city_attr`.`city_id`=$ID
	ORDER BY `attr_rating` DESC";
	
    $date = mysql_query($SQL);
    $count = mysql_affected_rows();

    for ($i = 0; $i < $count; $i++)
    {
        $inf = mysql_fetch_array($date, MYSQL_NUM);
      
        $str .=str_replace($marker, $inf, $shablon);

    }

    return $str;

}









//============================== Rout search ==========
function Transport_Li()
{

    $str = '';
    $marker =array('{SELECT_LI}') ;

    $shablon = file_get_contents(PATH_TEMPLATE . 'rout_li_select.tpl');

    $SQL = "SELECT `transport_name`  
	FROM `transport`
	WHERE `transport_id`
	ORDER BY `transport_id` ASC";
	
    $date = mysql_query($SQL);
    $count = mysql_affected_rows();

    for ($i = 0; $i < $count; $i++)
    {
        $inf = mysql_fetch_array($date, MYSQL_NUM);
      
        $str .=str_replace($marker, $inf, $shablon);

    }

    return $str;

}


function Start_City_Li()
{

    $str = '';
    $marker =array('{SELECT_LI}') ;

    $shablon = file_get_contents(PATH_TEMPLATE . 'rout_li_select.tpl');

    $SQL = "SELECT `start_city`  
	FROM `rout_start`
	WHERE `rout_start_id`
	ORDER BY `rout_start_id` ASC";
	
    $date = mysql_query($SQL);
    $count = mysql_affected_rows();

    for ($i = 0; $i < $count; $i++)
    {
        $inf = mysql_fetch_array($date, MYSQL_NUM);
      
        $str .=str_replace($marker, $inf, $shablon);

    }

    return $str;

}

function Time_Li()
{

    $str = '';
    $marker =array('{SELECT_LI}') ;

    $shablon = file_get_contents(PATH_TEMPLATE . 'rout_li_select.tpl');

    $SQL = "SELECT `time`  
	FROM `rout_time`
	WHERE `rout_time_id`
	ORDER BY `rout_time_id` ASC";
	
    $date = mysql_query($SQL);
    $count = mysql_affected_rows();

    for ($i = 0; $i < $count; $i++)
    {
        $inf = mysql_fetch_array($date, MYSQL_NUM);
      
        $str .=str_replace($marker, $inf, $shablon);

    }

    return $str;

}



// =============================== Marker rout ===============

function Marker()
{
    $str = '';
	
	$ID = isset($_GET['id']) ? $_GET['id']:0;
   $ID =(int)$ID;
	
    $marker =array('{MARKER_TYPE}','{MARKER_NAME}', '{MARKER_TIME}', '{MARKER_DIST}', '{MARKER_ROAD}', '{IMAGE}');
	$marker2 =array('{MARKER_TYPE}', '{MARKER_NAME}', '{MARKER_TIME}', '{MARKER_DIST}', '{MARKER_ROAD}', '{IMAGE}');
	
	
    $shablon = file_get_contents(PATH_TEMPLATE . 'rout_marker.tpl');
	$shablon2 = file_get_contents(PATH_TEMPLATE . 'rout.tpl');
	
    $SQL = "SELECT `marker`.`marker_type`,`marker_name`, `marker_time`, `marker_dist`, `marker_road`, `marker_img` FROM `marker_rout`, `marker`
	WHERE  `marker`.`marker_type`=`marker_rout`.`marker_type` 
	AND `marker_rout`.`rout_id`=$ID
	ORDER BY `marker_type` ASC";
	
    $date = mysql_query($SQL);
    $count = mysql_affected_rows();

    for ($i = 0; $i < $count; $i++)
    {

        $inf = mysql_fetch_array($date, MYSQL_NUM);
		
		if($inf[0]!=100)
		{
        $str .=str_replace($marker, $inf, $shablon);

		}
}
    return $str;
}


function Marker_Finish()
{
    $str = '';
	
	$ID = isset($_GET['id']) ? $_GET['id']:0;
   $ID =(int)$ID;
	
    $marker =array('{MARKER_TYPE}','{MARKER_NAME}', '{IMG}');
	
	$shablon = file_get_contents(PATH_TEMPLATE . 'rout_marker_finish.tpl');
	
    $SQL = "SELECT `marker`.`marker_type`, `marker_name`, `marker_img` FROM `marker_rout`, `marker`
	WHERE  `marker`.`marker_type`=`marker_rout`.`marker_type` 
	AND `marker_rout`.`rout_id`=$ID";
	
	
    $date = mysql_query($SQL);
    $count = mysql_affected_rows();

    for ($i = 0; $i < $count; $i++)
    {
        $inf = mysql_fetch_array($date, MYSQL_NUM);
	
	if($inf[0]==100)
		{
		
        $str .=str_replace($marker, $inf, $shablon);
	}
	
}
    return $str;

}


?>