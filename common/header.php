<!DOCTYPE html>
<html class="<?php echo get_theme_option('Style Sheet'); ?>" lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=yes" />
    <?php if ($description = option('description')): ?>
    <meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>

    <?php
    if (isset($title)) {
        $titleParts[] = strip_formatting($title);
    }
    $titleParts[] = option('site_title');
    ?>
    <title><?php echo implode(' &middot; ', $titleParts); ?></title>

    <?php echo auto_discovery_link_tags(); ?>

    <?php fire_plugin_hook('public_head',array('view'=>$this)); ?>
    <!-- Stylesheets -->
    <?php 
    queue_css_file('bootstrap-theme.min'); 
    queue_css_file('main');  
	queue_css_file('pages');
    queue_css_file('vendor/jquery-sticklr-1.4-light-color');
    echo head_css();
    ?>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.3.6/slick.css"/>
    <link href='http://fonts.googleapis.com/css?family=Trocchi' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Source+Serif+Pro' rel='stylesheet' type='text/css'>

   
    <!-- JavaScripts -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.3.6/slick.min.js"></script>


    <?php        
        queue_js_file('vendor/modernizr');    
        //queue_js_file('vendor/bigvideo/lib/bigvideo'); 
        queue_js_file('createjs/utils/Proxy'); 
        queue_js_file('createjs/utils/IndexOf');   
        queue_js_file('createjs/utils/definePropertySupported');   
        queue_js_file('createjs/events/Event');   
        queue_js_file('createjs/events/EventDispatcher');  
        queue_js_file('soundjs/Sound'); 
        queue_js_file('soundjs/WebAudioPlugin');  
        queue_js_file('soundjs/HTMLAudioPlugin');
        //queue_js_file('vendor/jquery-sticklr-1.4.min');
        //queue_js_file('main');   
        queue_js_file('player');   
        echo head_js(); 
    ?>
    
        <!-- Main and Side Navigation / Table of Contents -->
        <div>
            <nav id="main">
                <ul>
                    <li><a href="/vanallen/">Home</a></li>
                    <li><a href="/vanallen/about">About</a></li>
                  <!--  <li>Data for Researchers</li>
                    <li>Lesson-plans for Teachers</li> -->
                    <li><a href="/vanallen/contact">Contact</a></li>
					<!-- <li><a href="/vanallen/map">Station Map</a></li> -->
                </ul>
            </nav>
        </div>
                
    
</head>
 <?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>
        <header>
            <?php fire_plugin_hook('public_header', array('view'=>$this)); ?>            
        </header>

