<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Hacking Team';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $title ?>
    </title>
    <?= $this->Html->meta('favicon.png','/img/favicon.png',['type'=>'icon']) ?>

    <?= $this->fetch('meta') ?>
    
    <!-- Third Party dependencies -->
    <?= $this->Html->css('../bower_components/materialize/dist/css/materialize.min') ?>
    <!-- Custom Css goes here -->
    <?= $this->Html->css('main') ?>
    <?= $this->Html->css('ionicons-2.0.1/css/ionicons.min') ?>
    <?= $this->Html->css('animatism') ?>
    <?= $this->Html->css('../bower_components/hover/css/hover-min') ?>
    <?= $this->Html->css('../bower_components/imagehover.css/css/imagehover.min') ?>
    

    <style>
       .login-input:focus + label {
         color:  #292929 !important;
       }

       .login-input.ng-valid{
        border-bottom: 1px solid green !important;
        box-shadow: 0 1px 0 0 green !important;
       }

       .login-input.ng-invalid{
        border-bottom: 1px solid red !important;
        box-shadow: 0 1px 0 0 red !important;
       }

       .login-input.ng-pristine{
        border-bottom: 1px solid grey !important;
        box-shadow: 0 1px 0 0 grey !important;
       }
    </style>

    <?= $this->fetch('css') ?>
    


    <?= $this->Html->script('../bower_components/jquery/dist/jquery.min') ?>

    <?= $this->Html->script('../bower_components/angular/angular.min') ?>
    <?= $this->Html->script('../bower_components/materialize/dist/js/materialize.min') ?>

    <?= $this->Html->script('../bower_components/angular/angular-materialize.min') ?>
    <?= $this->Html->script('../bower_components/angular/angular-ui-router.min') ?>


    <?= $this->fetch('script') ?>
    <base href="/">

</head>
<body ng-app="hacking-team" class="mg_prim_background">
     
    <div ng-hide="$root.preloader" ui-view></div>
    
    <!-- loader -->

    <div class="row center mg-margin-0" ng-show="$root.preloader" style="width: 100%; position:fixed;">
          <div class="col s12" style="margin-top:15%;">
                  <?= $this->Html->image('assets/logo.png') ?> <br>
                  <div class="progress mg_sec_background_1">
                      <div class="indeterminate mg_sec_background_2"></div>
                  </div>
                  <h6 class="mg_sec_color_1 mg-padding-left-50" style="font-weight: 600;">Chargement en cours</h6>
          </div>
     </div>


            
    <!-- Angular App -->
    <?= $this->Html->script('Red/app') ?>
    <?= $this->Html->script('Red/controllers') ?>
    <?= $this->Html->script('Red/services') ?>
</body>
</html>
