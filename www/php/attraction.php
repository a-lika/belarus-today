<?php
    include('config.php');
    include('connect.php');
    include('function.php');

    $slider = file_get_contents(PATH_TEMPLATE . 'slider.tpl');
    $slider_marker = array('{SLIDER_PHOTO}', '{GALLERY_PHOTO}');
    $slider_info = array(Slider_Photo_Object(), Gallery_Photo_Object());
    $slider_page = str_replace($slider_marker , $slider_info, $slider);

    $marker = array('{MENU}', '{LOGO}' , '{FOOTER}' , '{POPULAR_TRIP}', '{ATTR_NEAR}', '{GALLERY}', '{PANORAMA}');
    $marker_info = array(Menu(2), Logo(), Footer(), Popular_trip(), Attr_Near(), $slider_page, Panorama_Oblect())
    $page = str_replace($marker, $marker_info, Attraction());
    
    echo $page;
?>