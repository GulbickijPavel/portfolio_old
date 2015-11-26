<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {assign var="desc" value="{translation langEn="Junior full stack web developer personal portfolio"}"}
    {$desc}
    {translation langEn="Junior full stack web developer"} 
    <meta name="description" content="{translation langEn="Junior full stack web developer"},{translation langEn="personal portfolio website"}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link type="text/css" rel="stylesheet" href="/portfolio/portfolio.lt/css/bootstrap.css" media="screen">
    <link type="text/css" rel="stylesheet" href="/portfolio/portfolio.lt/css/styles.css">
    <link type="text/css" rel="stylesheet" href="/portfolio/portfolio.lt/css/magicsuggest-min.css">
    <link type="text/css" rel="stylesheet" href="/portfolio/portfolio.lt/slider/jquery.bxslider.css">
  </head>
    <body>
        <div class="cooke-notification"><p>{translation langId="75"}<a id="cooke-btn" href="#" class="btn btn-warning">{translation langId="74"}</a><br><a href="http://www.google.com/intl/{$lang}/policies/privacy/partners/" target="_blank">{translation langId="76"}</a></p></div>
        {if $showMenu == 'true'} 
            {include file='smarty/templates/main/menu.tpl'}
            {include file='smarty/templates/sections/contacts.tpl'}
        {/if}
        <div class="container">
            
            {if $showMenu == 'true'}
            <div id="floating" class="floating-contacts">
            </div>
            {/if}
            <div class="main" id="main">
                <span class="cms">{$cms}</span>
               