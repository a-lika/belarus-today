<?php
    include('config.php');
    include('connect.php');
    include('function.php');

    $city_slider = file_get_contents(PATH_TEMPLATE . 'city_slider.tpl');
    $city_slider_marker = array('{SLIDER_PHOTO}', '{GALLERY_PHOTO}');
    $city_slider_info = array(Slider_Photo(), Gallery_Photo());
    $city_slider_page = str_replace($city_slider_marker , $city_slider_info, $city_slider );

    echo $city_slider_page;

?>