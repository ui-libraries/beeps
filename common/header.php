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
    queue_css_file('not.the.skin');
    queue_css_file('circle.skin/circle.player');
    queue_css_file('main');  
	queue_css_file('pages');
    queue_css_file('vendor/jquery-sticklr-1.4-light-color');
    
    echo head_css();
    ?>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.3.6/slick.css"/>
    <link href='http://fonts.googleapis.com/css?family=Trocchi' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Source+Serif+Pro' rel='stylesheet' type='text/css'>

   
    <!-- JavaScripts -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>  
    



    

    <?php        
        queue_js_file('vendor/modernizr');    
        //queue_js_file('vendor/bigvideo/lib/bigvideo'); 
        
        echo head_js(); 
    ?>
    
        <!-- Main and Side Navigation / Table of Contents -->
        <div>
            <nav id="main">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/data">Data & Resources</a></li>
                   <!-- <li>Lesson-plans for Teachers</li> -->
                    <li><a href="/contact">Contact</a></li>
					<!-- <li><a href="/map">Station Map</a></li> -->
                </ul>
            </nav>
        </div>
                
    
</head>
 <?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>
        <header>
            <?php fire_plugin_hook('public_header', array('view'=>$this)); ?>            
        </header>

