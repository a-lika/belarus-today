<?php
    include('config.php');
    include('connect.php');
    include('function.php');

    $attraction_near = file_get_contents(PATH_TEMPLATE . 'attr_near.tpl');
    $attr_marker = array('{ATTR}');
    $attr_info = array(Attr_In_City());
    $attr_page = str_replace($attr_marker , $attr_info, $attraction_near);

    $city_slider = file_get_contents(PATH_TEMPLATE . 'slider.tpl');
    $city_slider_marker = array('{SLIDER_PHOTO}', '{GALLERY_PHOTO}');
    $city_slider_info = array(Slider_Photo_City(), Gallery_Photo_City());
    $city_slider_page = str_replace($city_slider_marker , $city_slider_info, $city_slider );
    
    $marker = array('{MENU}', '{LOGO}' , '{FOOTER}' , '{POPULAR_TRIP}', '{PANORAMA}', '{ATTR_NEAR}', '{GALLERY}');
    $marker_info = array(Menu(2), Logo(), Footer(), Popular_trip(), Panorama_City(), $attr_page, $city_slider_page);

    $page = str_replace($marker, $marker_info, City());

    echo $page;
?>