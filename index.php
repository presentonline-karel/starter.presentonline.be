<?php

//require "kirby/bootstrap.php";
//echo (new Kirby)->render();



require __DIR__ . '/kirby/bootstrap.php';

$kirby = new Kirby();

$currentUser = $kirby->user();

if ( $currentUser && $currentUser->role()->name() === 'editor' ):
   $kirby = new Kirby([
       'roots' => [
           'blueprints' => __DIR__ . '/site/blueprints-editor',
       ],
   ]);

elseif ( $currentUser && $currentUser->role()->name() === 'admin' ):
   $kirby = new Kirby([
       'roots' => [
           'blueprints' => __DIR__ . '/site/blueprints',
       ],
   ]);
endif;

echo $kirby->render();