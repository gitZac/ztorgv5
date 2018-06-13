<?php
/**
 * Template Name: Game Load
 *
 * Contains the jumbotron template loop.
 *
 * @package customtheme
 * @subpackage 
 * @since customtheme 1.0
 */

?><?php get_header(); ?>
    <div class="container">
        <div id="jumbotron-override" class="jumbotron">
          <h1>Veloci<span class="highlight">Racer</span></h1>
          <hr class="rule">
          <p class="long-copy"></p>
        </div>     
      </div>

    <div class="container">
        <canvas id="gameCanvas" width = "800" height="600">   
        </canvas>

    </div>

<?php get_footer(); ?>