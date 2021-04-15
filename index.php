<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" />
    <title>The Librarby</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body style="background-color:#ccc">
    <header>
      <h2 style="text-align: center">The Librarby — A place to generate books, randomly!</h2>
      <img src="librarby.png" alt="Librarby" title="Depiction of The Librarby (credit: @tobyfox)" style="max-width:100%">
    </header>
    <?php
      class Book {
        public $name;
        public $author;
        public $genre;
        public $pages;
        public $rating;

        function __construct($n,$a,$g,$p,$r) {
          $this->name = $n;
          $this->author = $a;
          $this->genre = $g;
          $this->pages = $p;
          $this->rating = $r;
          $this->info();
          $this->draw();
          $this->legal();
        }

        function info() {
          echo "<h3>Book <em>$this->name</em> specifications</h3><ul>";
          echo "<li><strong>Book author: </strong>$this->author</li>";
          echo "<li><strong>Book genre: </strong>$this->genre</li>";
          echo "<li><strong>Page count: </strong>$this->pages</li>";
          echo "<li><strong>Book rating: </strong>$this->rating</li></ul>";
        }
        function draw() {
          $r = mt_rand(100,999);
          $patcol = dechex(mt_rand(150,255)) . dechex(mt_rand(150,255)) . dechex(mt_rand(150,255));
          $font = file("fonts.txt", FILE_IGNORE_NEW_LINES)[mt_rand(0,sizeof(file("fonts.txt", FILE_IGNORE_NEW_LINES))-1)];
          $afont = file("fonts.txt", FILE_IGNORE_NEW_LINES)[mt_rand(0,sizeof(file("fonts.txt", FILE_IGNORE_NEW_LINES))-1)];
          $patternval = mt_rand(0,11);
          switch ($patternval) {
            case 0:
              $pattern = '#polkadots';
              break;
            case 1:
              $pattern = '#hexagon';
              break;
            case 2:
              $pattern = '#jigsaw';
              break;
            case 3:
              $pattern = '#bubbles';
              break;
            case 4:
              $pattern = '#stripes';
              break;
            case 5:
              $pattern = '#church';
              break;
            case 6:
              $pattern = '#rain';
              break;
            case 7:
              $pattern = '#dstripes';
              break;
            case 8:
              $pattern = '#zigzag';
              break;
            case 9:
              $pattern = '#groovy';
              break;
            case 10:
              $pattern = '#bathroomfloor';
              break;
            default:
              $pattern = '';
              break;
          }
          $words = explode(" ", $this->name);
          $namel1 = "";
          $namel2 = "";
          $namel3 = "";
          $namel4 = "";
          $namel5 = "";
$font = 'Helvetica';
          switch ($font) {
            case 'Trebuchet MS':
            case 'Comic Sans MS':
	          case 'Arial':
            case 'Bookman':
              $max = 20;
              break;
		        case 'Arial Black':
            case 'Verdana':
            case 'Georgia':
              $max = 18;
              break;
            case 'Courier New':
              $max = 17;
              break;
            case 'Helvetica':
      	      $max = 19;
      	      break;
            case 'Garamond':
            case 'Avant Garde':
              $max = 21;
              break;
            default:
              $max = 25;
              break;
          }
          foreach($words as $key) {
            if(strlen($namel1)+strlen($key) < $max && $namel2 == "") $namel1 .= $key . " ";
            else if(strlen($namel2)+strlen($key) < $max && $namel3 == "") $namel2 .= $key . " ";
            else if(strlen($namel3)+strlen($key) < $max && $namel4 == "") $namel3 .= $key . " ";
	          else if(strlen($namel4)+strlen($key) < $max && $namel5 == "") $namel4 .= $key . " ";
            else $namel5 .= $key . " ";
          }
          ?>
          <svg width="200" height="260" style="background-color:#<?php echo $r; ?>">
            <pattern id="polkadots" width=50 height=50 patternUnits="userSpaceOnUse">
              <circle fill=#<?php echo $patcol; ?> fill-opacity='0.3' cx=25 cy=25 r=10 />
            </pattern>

            <pattern id="hexagon" width=27 height=48 patternUnits="userSpaceOnUse">
              <path fill=#<?php echo $patcol; ?> fill-opacity='0.3' d='M13.99 9.25l13 7.5v15l-13 7.5L1 31.75v-15l12.99-7.5zM3 17.9v12.7l10.99 6.34 11-6.35V17.9l-11-6.34L3 17.9zM0 15l12.98-7.5V0h-2v6.35L0 12.69v2.3zm0 18.5L12.98 41v8h-2v-6.85L0 35.81v-2.3zM15 0v7.5L27.99 15H28v-2.31h-.01L17 6.35V0h-2zm0 49v-8l12.99-7.5H28v2.31h-.01L17 42.15V49h-2z'/>
            </pattern>

            <pattern id="jigsaw" width=192 height=192 patternUnits="userSpaceOnUse">
              <path fill=#<?php echo $patcol; ?> fill-opacity='0.3' d='M192 15v2a11 11 0 0 0-11 11c0 1.94 1.16 4.75 2.53 6.11l2.36 2.36a6.93 6.93 0 0 1 1.22 7.56l-.43.84a8.08 8.08 0 0 1-6.66 4.13H145v35.02a6.1 6.1 0 0 0 3.03 4.87l.84.43c1.58.79 4 .4 5.24-.85l2.36-2.36a12.04 12.04 0 0 1 7.51-3.11 13 13 0 1 1 .02 26 12 12 0 0 1-7.53-3.11l-2.36-2.36a4.93 4.93 0 0 0-5.24-.85l-.84.43a6.1 6.1 0 0 0-3.03 4.87V143h35.02a8.08 8.08 0 0 1 6.66 4.13l.43.84a6.91 6.91 0 0 1-1.22 7.56l-2.36 2.36A10.06 10.06 0 0 0 181 164a11 11 0 0 0 11 11v2a13 13 0 0 1-13-13 12 12 0 0 1 3.11-7.53l2.36-2.36a4.93 4.93 0 0 0 .85-5.24l-.43-.84a6.1 6.1 0 0 0-4.87-3.03H145v35.02a8.08 8.08 0 0 1-4.13 6.66l-.84.43a6.91 6.91 0 0 1-7.56-1.22l-2.36-2.36A10.06 10.06 0 0 0 124 181a11 11 0 0 0-11 11h-2a13 13 0 0 1 13-13c2.47 0 5.79 1.37 7.53 3.11l2.36 2.36a4.94 4.94 0 0 0 5.24.85l.84-.43a6.1 6.1 0 0 0 3.03-4.87V145h-35.02a8.08 8.08 0 0 1-6.66-4.13l-.43-.84a6.91 6.91 0 0 1 1.22-7.56l2.36-2.36A10.06 10.06 0 0 0 107 124a11 11 0 0 0-22 0c0 1.94 1.16 4.75 2.53 6.11l2.36 2.36a6.93 6.93 0 0 1 1.22 7.56l-.43.84a8.08 8.08 0 0 1-6.66 4.13H49v35.02a6.1 6.1 0 0 0 3.03 4.87l.84.43c1.58.79 4 .4 5.24-.85l2.36-2.36a12.04 12.04 0 0 1 7.51-3.11A13 13 0 0 1 81 192h-2a11 11 0 0 0-11-11c-1.94 0-4.75 1.16-6.11 2.53l-2.36 2.36a6.93 6.93 0 0 1-7.56 1.22l-.84-.43a8.08 8.08 0 0 1-4.13-6.66V145H11.98a6.1 6.1 0 0 0-4.87 3.03l-.43.84c-.79 1.58-.4 4 .85 5.24l2.36 2.36a12.04 12.04 0 0 1 3.11 7.51A13 13 0 0 1 0 177v-2a11 11 0 0 0 11-11c0-1.94-1.16-4.75-2.53-6.11l-2.36-2.36a6.93 6.93 0 0 1-1.22-7.56l.43-.84a8.08 8.08 0 0 1 6.66-4.13H47v-35.02a6.1 6.1 0 0 0-3.03-4.87l-.84-.43c-1.59-.8-4-.4-5.24.85l-2.36 2.36A12 12 0 0 1 28 109a13 13 0 1 1 0-26c2.47 0 5.79 1.37 7.53 3.11l2.36 2.36a4.94 4.94 0 0 0 5.24.85l.84-.43A6.1 6.1 0 0 0 47 84.02V49H11.98a8.08 8.08 0 0 1-6.66-4.13l-.43-.84a6.91 6.91 0 0 1 1.22-7.56l2.36-2.36A10.06 10.06 0 0 0 11 28 11 11 0 0 0 0 17v-2a13 13 0 0 1 13 13c0 2.47-1.37 5.79-3.11 7.53l-2.36 2.36a4.94 4.94 0 0 0-.85 5.24l.43.84A6.1 6.1 0 0 0 11.98 47H47V11.98a8.08 8.08 0 0 1 4.13-6.66l.84-.43a6.91 6.91 0 0 1 7.56 1.22l2.36 2.36A10.06 10.06 0 0 0 68 11 11 11 0 0 0 79 0h2a13 13 0 0 1-13 13 12 12 0 0 1-7.53-3.11l-2.36-2.36a4.93 4.93 0 0 0-5.24-.85l-.84.43A6.1 6.1 0 0 0 49 11.98V47h35.02a8.08 8.08 0 0 1 6.66 4.13l.43.84a6.91 6.91 0 0 1-1.22 7.56l-2.36 2.36A10.06 10.06 0 0 0 85 68a11 11 0 0 0 22 0c0-1.94-1.16-4.75-2.53-6.11l-2.36-2.36a6.93 6.93 0 0 1-1.22-7.56l.43-.84a8.08 8.08 0 0 1 6.66-4.13H143V11.98a6.1 6.1 0 0 0-3.03-4.87l-.84-.43c-1.59-.8-4-.4-5.24.85l-2.36 2.36A12 12 0 0 1 124 13a13 13 0 0 1-13-13h2a11 11 0 0 0 11 11c1.94 0 4.75-1.16 6.11-2.53l2.36-2.36a6.93 6.93 0 0 1 7.56-1.22l.84.43a8.08 8.08 0 0 1 4.13 6.66V47h35.02a6.1 6.1 0 0 0 4.87-3.03l.43-.84c.8-1.59.4-4-.85-5.24l-2.36-2.36A12 12 0 0 1 179 28a13 13 0 0 1 13-13zM84.02 143a6.1 6.1 0 0 0 4.87-3.03l.43-.84c.8-1.59.4-4-.85-5.24l-2.36-2.36A12 12 0 0 1 83 124a13 13 0 1 1 26 0c0 2.47-1.37 5.79-3.11 7.53l-2.36 2.36a4.94 4.94 0 0 0-.85 5.24l.43.84a6.1 6.1 0 0 0 4.87 3.03H143v-35.02a8.08 8.08 0 0 1 4.13-6.66l.84-.43a6.91 6.91 0 0 1 7.56 1.22l2.36 2.36A10.06 10.06 0 0 0 164 107a11 11 0 0 0 0-22c-1.94 0-4.75 1.16-6.11 2.53l-2.36 2.36a6.93 6.93 0 0 1-7.56 1.22l-.84-.43a8.08 8.08 0 0 1-4.13-6.66V49h-35.02a6.1 6.1 0 0 0-4.87 3.03l-.43.84c-.79 1.58-.4 4 .85 5.24l2.36 2.36a12.04 12.04 0 0 1 3.11 7.51A13 13 0 1 1 83 68a12 12 0 0 1 3.11-7.53l2.36-2.36a4.93 4.93 0 0 0 .85-5.24l-.43-.84A6.1 6.1 0 0 0 84.02 49H49v35.02a8.08 8.08 0 0 1-4.13 6.66l-.84.43a6.91 6.91 0 0 1-7.56-1.22l-2.36-2.36A10.06 10.06 0 0 0 28 85a11 11 0 0 0 0 22c1.94 0 4.75-1.16 6.11-2.53l2.36-2.36a6.93 6.93 0 0 1 7.56-1.22l.84.43a8.08 8.08 0 0 1 4.13 6.66V143h35.02z'
              />
            </pattern>

            <pattern id="bubbles" width=100 height=100 patternUnits="userSpaceOnUse">
              <path fill=#<?php echo $patcol; ?> fill-opacity='0.3' d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z'
              />
            </pattern>

            <pattern id="dstripes" width=40 height=40 patternUnits="userSpaceOnUse">
              <path fill=#<?php echo $patcol; ?> fill-opacity='0.2' d='M0 40L40 0H20L0 20M40 40V20L20 40'/>
            </pattern>

            <pattern id="church" width=80 height=80 patternUnits="userSpaceOnUse">
              <path fill=#<?php echo $patcol; ?> fill-opacity='0.3' fill-rule='evenodd' d='M77.17 0H80v2.83l-.1.1A39.9 39.9 0 0 1 74.64 20a39.9 39.9 0 0 1 5.24 17.06l.11.11v2.89c-.01 6.9-1.8 13.79-5.35 19.94A39.96 39.96 0 0 1 80 79.94V80h-2.83L66.84 69.66a39.83 39.83 0 0 1-24.1 10.25l.09.09h-5.66l.1-.1c-8.7-.58-17.22-4-24.1-10.23L2.82 80H0V79.94c.01-6.9 1.8-13.8 5.35-19.94A39.96 39.96 0 0 1 0 40.06V37.17l.1-.1A39.9 39.9 0 0 1 5.36 20 39.9 39.9 0 0 1 .1 2.94L0 2.83V0h2.83l-.1.1a39.83 39.83 0 0 1 24.1 10.24L37.18 0H40c0 6.92-1.78 13.83-5.35 20A39.96 39.96 0 0 1 40 40c0-6.92 1.78-13.83 5.35-20A39.96 39.96 0 0 1 40 0h2.83l10.33 10.34A39.83 39.83 0 0 1 77.26.09L77.17 0zm.77 77.94c-.3-5.52-1.8-11-4.49-16a40.18 40.18 0 0 1-5.17 6.34l9.66 9.66zm-12.52-9.7l-6.83-6.83-5.46 5.46-1.41 1.41-9.66 9.66c8.4-.45 16.69-3.68 23.36-9.7zm-23.07 6.58l7.99-7.98a40.05 40.05 0 0 1-3.79-4.9 37.88 37.88 0 0 0-4.2 12.88zM47.68 60a37.98 37.98 0 0 0 4.07 5.42L57.17 60l-5.42-5.42A38 38 0 0 0 47.68 60zm2.66-6.84a40.06 40.06 0 0 0-3.79 4.9 37.88 37.88 0 0 1-4.2-12.88l7.99 7.98zm1.38-1.44l1.41 1.41 5.46 5.46 6.83-6.84a37.85 37.85 0 0 0-23.36-9.7l9.66 9.67zM60 60l6.87 6.87A38.1 38.1 0 0 0 72.32 60a38.11 38.11 0 0 0-5.45-6.87L60 60zm-14.65 0a39.9 39.9 0 0 0-5.24 17.06l-.11.11-.1-.1A39.9 39.9 0 0 0 34.64 60a39.9 39.9 0 0 0 5.24-17.06l.11-.11.1.1A39.9 39.9 0 0 0 45.36 60zm9.23-48.25a37.85 37.85 0 0 1 23.36-9.7l-9.66 9.67-1.41 1.41-5.46 5.46-6.83-6.84zm13.67 13.67L62.83 20l5.42-5.42A38 38 0 0 1 72.32 20a37.98 37.98 0 0 1-4.07 5.42zm5.2-3.47a40.05 40.05 0 0 1-3.79 4.89l7.99 7.98c-.61-4.45-2.01-8.82-4.2-12.87zm-6.58 4.92l1.41 1.41 9.66 9.66a37.85 37.85 0 0 1-23.36-9.7l6.83-6.83 5.46 5.46zM53.13 13.13L60 20l-6.87 6.87A38.11 38.11 0 0 1 47.68 20a38.1 38.1 0 0 1 5.45-6.87zm-1.41-1.41l-9.66-9.66c.3 5.52 1.8 11 4.49 16a40.18 40.18 0 0 1 5.17-6.34zm-9.66 26.22c.3-5.52 1.8-11 4.49-16a40.18 40.18 0 0 0 5.17 6.34l-9.66 9.66zm26.22 13.78l9.66-9.66c-.3 5.52-1.8 11-4.49 16a40.18 40.18 0 0 0-5.17-6.34zm8.98-11.81L66.84 50.34a39.83 39.83 0 0 0-24.1-10.25l10.42-10.43a39.83 39.83 0 0 0 24.1 10.25zm-7.6-26.75a40.06 40.06 0 0 1 3.79 4.9 37.88 37.88 0 0 0 4.2-12.88l-7.99 7.98zm-31.72 28.9c-8.4.45-16.69 3.68-23.36 9.7l6.83 6.83 5.46-5.46 1.41-1.41 9.66-9.66zM22.83 60l5.42 5.42c1.54-1.7 2.9-3.52 4.07-5.42a38 38 0 0 0-4.07-5.42L22.83 60zm5.45 8.28l-1.41-1.41-5.46-5.46-6.83 6.84a37.85 37.85 0 0 0 23.36 9.7l-9.66-9.67zm9.37 6.54l-7.99-7.98a40.05 40.05 0 0 0 3.79-4.9 37.88 37.88 0 0 1 4.2 12.88zM20 60l-6.87-6.87A38.11 38.11 0 0 0 7.68 60a38.11 38.11 0 0 0 5.45 6.87L20 60zm17.26-19.9L26.84 29.65a39.83 39.83 0 0 1-24.1 10.25l10.42 10.43a39.83 39.83 0 0 1 24.1-10.25zm-35.2 1.96l9.66 9.66a40.18 40.18 0 0 0-5.17 6.33c-2.7-5-4.2-10.47-4.5-16zm4.49 19.89c-2.7 5-4.2 10.47-4.5 16l9.67-9.67a40.18 40.18 0 0 1-5.17-6.33zm31.1-16.77c-.61 4.45-2.01 8.82-4.2 12.87a40.06 40.06 0 0 0-3.79-4.89l7.99-7.98zm-4.2-23.23c2.7 5 4.2 10.47 4.5 16l-9.67-9.67c1.97-1.97 3.7-4.1 5.17-6.33zm-14.86-.54l6.83 6.84a37.85 37.85 0 0 1-23.36 9.7l9.66-9.67 1.41-1.41 5.46-5.46zm-8.25 5.43l-7.99 7.98c.61-4.45 2.01-8.82 4.2-12.87a40.04 40.04 0 0 0 3.79 4.89zm1.41-1.42A37.99 37.99 0 0 1 7.68 20a38 38 0 0 1 4.07-5.42L17.17 20l-5.42 5.42zm-5.2-7.37a40.04 40.04 0 0 1 3.79-4.89L2.35 5.18c.61 4.45 2.01 8.82 4.2 12.87zm6.58-4.92l-1.41-1.41-9.66-9.66a37.85 37.85 0 0 1 23.36 9.7l-6.83 6.83-5.46-5.46zm13.74 13.74L20 20l6.87-6.87A38.1 38.1 0 0 1 32.32 20a38.1 38.1 0 0 1-5.45 6.87zm6.58-8.82a40.18 40.18 0 0 0-5.17-6.33l9.66-9.66c-.3 5.52-1.8 11-4.49 16z'
              />
            </pattern>

            <pattern id="rain" width=12 height=16 patternUnits="userSpaceOnUse">
              <path fill=#<?php echo $patcol; ?> fill-opacity='0.3' d='M4 .99C4 .445 4.444 0 5 0c.552 0 1 .45 1 .99v4.02C6 5.555 5.556 6 5 6c-.552 0-1-.45-1-.99V.99zm6 8c0-.546.444-.99 1-.99.552 0 1 .45 1 .99v4.02c0 .546-.444.99-1 .99-.552 0-1-.45-1-.99V8.99z'
              />
            </pattern>

            <pattern id="stripes" width=40 height=1 patternUnits="userSpaceOnUse">
              <path fill=#<?php echo $patcol; ?> fill-opacity='0.3' d='M0 0h20v1H0z'
              />
            </pattern>

            <pattern id="zigzag" width=40 height=12 patternUnits="userSpaceOnUse">
              <path fill=#<?php echo $patcol; ?> fill-opacity='0.3' d='M0 6.172L6.172 0h5.656L0 11.828V6.172zm40 5.656L28.172 0h5.656L40 6.172v5.656zM6.172 12l12-12h3.656l12 12h-5.656L20 3.828 11.828 12H6.172zm12 0L20 10.172 21.828 12h-3.656z'
              />
            </pattern>

            <pattern id="groovy" width=100 height=20 patternUnits="userSpaceOnUse">
              <path fill=#<?php echo $patcol; ?> fill-opacity='0.3' d='M21.184 20c.357-.13.72-.264 1.088-.402l1.768-.661C33.64 15.347 39.647 14 50 14c10.271 0 15.362 1.222 24.629 4.928.955.383 1.869.74 2.75 1.072h6.225c-2.51-.73-5.139-1.691-8.233-2.928C65.888 13.278 60.562 12 50 12c-10.626 0-16.855 1.397-26.66 5.063l-1.767.662c-2.475.923-4.66 1.674-6.724 2.275h6.335zm0-20C13.258 2.892 8.077 4 0 4V2c5.744 0 9.951-.574 14.85-2h6.334zM77.38 0C85.239 2.966 90.502 4 100 4V2c-6.842 0-11.386-.542-16.396-2h-6.225zM0 14c8.44 0 13.718-1.21 22.272-4.402l1.768-.661C33.64 5.347 39.647 4 50 4c10.271 0 15.362 1.222 24.629 4.928C84.112 12.722 89.438 14 100 14v-2c-10.271 0-15.362-1.222-24.629-4.928C65.888 3.278 60.562 2 50 2 39.374 2 33.145 3.397 23.34 7.063l-1.767.662C13.223 10.84 8.163 12 0 12v2z'
              />
            </pattern>

            <pattern id="bathroomfloor" width=84 height=48 patternUnits="userSpaceOnUse">
              <path fill=#<?php echo $patcol; ?> fill-opacity='0.2' d='M0 0h12v6H0V0zm28 8h12v6H28V8zm14-8h12v6H42V0zm14 0h12v6H56V0zm0 8h12v6H56V8zM42 8h12v6H42V8zm0 16h12v6H42v-6zm14-8h12v6H56v-6zm14 0h12v6H70v-6zm0-16h12v6H70V0zM28 32h12v6H28v-6zM14 16h12v6H14v-6zM0 24h12v6H0v-6zm0 8h12v6H0v-6zm14 0h12v6H14v-6zm14 8h12v6H28v-6zm-14 0h12v6H14v-6zm28 0h12v6H42v-6zm14-8h12v6H56v-6zm0-8h12v6H56v-6zm14 8h12v6H70v-6zm0 8h12v6H70v-6zM14 24h12v6H14v-6zm14-8h12v6H28v-6zM14 8h12v6H14V8zM0 8h12v6H0V8z'
              />
            </pattern>

            <rect width="200" height="260" style="fill:url(<?php echo $pattern; ?>);stroke-width:5;stroke:#000" />
            <text x="10" y="50" fill="white" style="font-weight:bold; font-family: <?php echo $font; ?>"><?php echo "$namel1"; ?></text>
            <text x="10" y="70" fill="white" style="font-weight:bold; font-family: <?php echo $font; ?>"><?php echo "$namel2"; ?></text>
            <text x="10" y="90" fill="white" style="font-weight:bold; font-family: <?php echo $font; ?>"><?php echo "$namel3"; ?></text>
            <text x="10" y="110" fill="white" style="font-weight:bold; font-family: <?php echo $font; ?>"><?php echo "$namel4"; ?></text>
            <text x="10" y="130" fill="white" style="font-weight:bold; font-family: <?php echo $font; ?>"><?php echo "$namel5"; ?></text>
            <text x="10" y="200" fill="white" style="font-style:italic; font-family: <?php echo $afont; ?>"><?php echo "$this->author"; ?></text>
          </svg>
       <?php
        }
        static function legal() {
          echo "<br><small>Copyright (c) 2020 Copyright Holder All Rights Reserved.</small><hr>";
        }
      }
      for($i = 0; $i < 5; $i++) {
        $wordcount = mt_rand(0,4);
        $nameinst = mt_rand(0,2);
        $descinst = mt_rand(0,1);
        $articleinst = mt_rand(0,1);
        $gname = "";
        $gwords = "";
        #1: A noun
        #2: preposition A noun
        #2: A adj noun
        #2: noun _ion
        #3: noun preposition A noun
        #3: preposition A adj noun
        #3: verb preposition A noun
        #4: verb A noun preposition A _ion
        #4: adverb adj noun _ion
        #4: preposition A noun "and" A adj noun
        #5: noun preposition A adverb adj noun
        #5: preposition [A] adverb adj noun _ion
        #5: adverb adj noun "and" A adj _ion
        if($articleinst) $article = "the";
        else $article = "a";
        $vowels = str_split("aeiouAEIOU");
        $exceptions = file("exceptions.txt", FILE_IGNORE_NEW_LINES);
        $source = file("words.txt", FILE_IGNORE_NEW_LINES);
        $adj = file("adjectives.txt", FILE_IGNORE_NEW_LINES);
        $adv = file("adverbs.txt", FILE_IGNORE_NEW_LINES);
        $nouns = file("nouns.txt", FILE_IGNORE_NEW_LINES);
        $preps = file("prepositions.txt", FILE_IGNORE_NEW_LINES);
        $verbs = file("verbs.txt", FILE_IGNORE_NEW_LINES);
        $ion = file("_ion.txt", FILE_IGNORE_NEW_LINES);
        switch ($wordcount) {
          case 0:
            $gwords .= ucfirst($article);
            $add = ucfirst($nouns[mt_rand(0,sizeof($nouns)-1)]);
            if(in_array($add[0], $vowels) && !in_array($add, $exceptions) && $article == "a") $gwords .= "n";
            $gwords .= " " . $add;
            break;
          case 1:
            switch ($nameinst) {
              case 0:
                $gwords .= ucfirst($preps[mt_rand(0,sizeof($preps)-1)]);
                $gwords .= " " . $article;
                $add = $nouns[mt_rand(0,sizeof($nouns)-1)];
                if(in_array($add[0], $vowels) && !in_array($add, $exceptions) && $article == "a") $gwords .= "n";
                $gwords .= " " . $add;
                break;
              case 1:
                $gwords .= ucfirst($article);
                $add = $adj[mt_rand(0,sizeof($adj)-1)];
                if(in_array($add[0], $vowels) && !in_array($add, $exceptions) && $article == "a") $gwords .= "n";
                $gwords .= " " . $add;
                $gwords .= " " . $nouns[mt_rand(0,sizeof($nouns)-1)];
                break;
              case 2:
                $gwords .= ucfirst($nouns[mt_rand(0,sizeof($nouns)-1)]);
                $gwords .= " " . $ion[mt_rand(0,sizeof($ion)-1)];
                break;
            }
            break;
          case 2:
            switch ($nameinst) {
              case 0:
                $gwords .= ucfirst($nouns[mt_rand(0,sizeof($nouns)-1)]);
                $gwords .= " " . $preps[mt_rand(0,sizeof($preps)-1)];
                $gwords .= " " . $article;
                $add = $nouns[mt_rand(0,sizeof($nouns)-1)];
                if(in_array($add[0], $vowels) && !in_array($add, $exceptions) && $article == "a") $gwords .= "n";
                $gwords .= " " . $add;
                break;
              case 1:
                $gwords .= ucfirst($preps[mt_rand(0,sizeof($preps)-1)]);
                $gwords .= " " . $article;
                $add = $adj[mt_rand(0,sizeof($adj)-1)];
                if(in_array($add[0], $vowels) && !in_array($add, $exceptions) && $article == "a") $gwords .= "n";
                $gwords .= " " . $add;
                $gwords .= " " . $nouns[mt_rand(0,sizeof($nouns)-1)];
                break;
              case 2:
                $gwords .= ucfirst($verbs[mt_rand(0,sizeof($verbs)-1)]);
                $gwords .= " " . $preps[mt_rand(0,sizeof($preps)-1)];
                $gwords .= " " . $article;
                $add = $nouns[mt_rand(0,sizeof($nouns)-1)];
                if(in_array($add[0], $vowels) && !in_array($add, $exceptions) && $article == "a") $gwords .= "n";
                $gwords .= " " . $add;
                break;
            }
            break;
          case 3:
            switch ($nameinst) {
              case 0:
                $gwords .= ucfirst($verbs[mt_rand(0,sizeof($verbs)-1)]);
                $gwords .= " " . $article;
                $add = $nouns[mt_rand(0,sizeof($nouns)-1)];
                if(in_array($add[0], $vowels) && !in_array($add, $exceptions) && $article == "a") $gwords .= "n";
                $gwords .= " " . $add;
                $gwords .= " " . $preps[mt_rand(0,sizeof($preps)-1)];
                $gwords .= " " . $article;
                $add = $ion[mt_rand(0,sizeof($ion)-1)];
                if(in_array($add[0], $vowels) && !in_array($add, $exceptions) && $article == "a") $gwords .= "n";
                $gwords .= " " . $add;
                break;
              case 1:
                $gwords .= ucfirst($adv[mt_rand(0,sizeof($adv)-1)]);
                $gwords .= " " . $adj[mt_rand(0,sizeof($adj)-1)];
                $gwords .= " " . $nouns[mt_rand(0,sizeof($nouns)-1)];
                $gwords .= " " . $ion[mt_rand(0,sizeof($ion)-1)];
                break;
              case 2:
                $gwords .= ucfirst($preps[mt_rand(0,sizeof($preps)-1)]);
                $gwords .= " " . $article;
                $add = $nouns[mt_rand(0,sizeof($nouns)-1)];
                if(in_array($add[0], $vowels) && !in_array($add, $exceptions) && $article == "a") $gwords .= "n";
                $gwords .= " " . $add . " and";
                $gwords .= " " . $article;
                $add = $adj[mt_rand(0,sizeof($adj)-1)];
                if(in_array($add[0], $vowels) && !in_array($add, $exceptions) && $article == "a") $gwords .= "n";
                $gwords .= " " . $add;
                $gwords .= " " . $nouns[mt_rand(0,sizeof($nouns)-1)];
                break;
            }
            break;
          case 4:
            switch ($nameinst) {
              case 0:
                $gwords .= ucfirst($nouns[mt_rand(0,sizeof($nouns)-1)]);
                $gwords .= " " . $preps[mt_rand(0,sizeof($preps)-1)];
                $gwords .= " " . $article;
                $add = $adv[mt_rand(0,sizeof($adv)-1)];
                if(in_array($add[0], $vowels) && !in_array($add, $exceptions) && $article == "a") $gwords .= "n";
                $gwords .= " " . $add;
                $gwords .= " " . $adj[mt_rand(0,sizeof($adj)-1)];
                $gwords .= " " . $nouns[mt_rand(0,sizeof($nouns)-1)];
                break;
              case 1:
                $gwords .= ucfirst($preps[mt_rand(0,sizeof($preps)-1)]);
                $gwords .= " " . $article;
                $add = $adv[mt_rand(0,sizeof($adv)-1)];
                if(in_array($add[0], $vowels) && !in_array($add, $exceptions) && $article == "a") $gwords .= "n";
                $gwords .= " " . $add;
                $gwords .= " " . $adj[mt_rand(0,sizeof($adj)-1)];
                $gwords .= " " . $nouns[mt_rand(0,sizeof($nouns)-1)];
                $gwords .= " " . $ion[mt_rand(0,sizeof($ion)-1)];
                break;
              case 2:
                $gwords .= ucfirst($adv[mt_rand(0,sizeof($adv)-1)]);
                $gwords .= " " . $adj[mt_rand(0,sizeof($adj)-1)];
                $gwords .= " " . $nouns[mt_rand(0,sizeof($nouns)-1)] . " and";
                $gwords .= " " . $article;
                $add = $adj[mt_rand(0,sizeof($adj)-1)];
                if(in_array($add[0], $vowels) && !in_array($add, $exceptions) && $article == "a") $gwords .= "n";
                $gwords .= " " . $add;
                $gwords .= " " . $ion[mt_rand(0,sizeof($ion)-1)];
                break;
            }
            break;
        }
        $ggen = file("genres.txt", FILE_IGNORE_NEW_LINES)[mt_rand(0,sizeof(file("genres.txt", FILE_IGNORE_NEW_LINES))-1)];

        $gpages = mt_rand(150,800);
        if($gpages == 720) $gpages = 99876543;

        $gname .= file("names.txt", FILE_IGNORE_NEW_LINES)[mt_rand(0,sizeof(file("names.txt", FILE_IGNORE_NEW_LINES))-1)] . " ";
        $gname .= file("surnames.txt", FILE_IGNORE_NEW_LINES)[mt_rand(0,sizeof(file("surnames.txt", FILE_IGNORE_NEW_LINES))-1)];

        $stars = mt_rand(0,5);
        $star = ['', '', '', '', ''];
        for($si = 0; $si <= sizeof($star); $si++) {
          if($si < $stars) $star[$si] = 'color: orange';
        }
        $rating = "<span class=\"fa fa-star\" style=\"$star[0]\"></span>
        <span class=\"fa fa-star\" style=\"$star[1]\"></span>
        <span class=\"fa fa-star\" style=\"$star[2]\"></span>
        <span class=\"fa fa-star\" style=\"$star[3]\"></span>
        <span class=\"fa fa-star\" style=\"$star[4]\"></span>";

        new Book($gwords,$gname,$ggen,$gpages,$rating);
      }
     ?>
  </body>
</html>
