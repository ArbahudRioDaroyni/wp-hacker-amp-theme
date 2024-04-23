<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "header" tag.
 *
 * @link https://github.com/ArbahudRioDaroyni/
 * @package Jejak Hacker
 * @subpackage Jejak Hacker
 * @since 1.0.1
 */
  
?>
<!doctype html>
<html ⚡ lang="ID">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta content="text/html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Hack, Cheat, Slot, Aplikasi, APK, MOD">
	  <meta name='author' content='<?php bloginfo( 'name' ); ?>' />
    <!-- google-site-verification -->
    <meta name="google-site-verification" content="1GS5b8XueaIk5rOTEhD8hwGXIfoZfAtK2KTCJlkJNDY">

    <!-- start wp_head -->
    <?php wp_head(); ?>
    <!-- end wp_head -->

    <!-- script amp project main -->
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <!-- amp-ads -->
    <script async custom-element="amp-auto-ads" src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js"></script>
    <script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>
    <!-- <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3780041077137992"
    crossorigin="anonymous"></script> -->
    <!-- amp-image-lightbox -->
	  <script async custom-element="amp-image-lightbox" src="https://cdn.ampproject.org/v0/amp-image-lightbox-0.1.js"></script>
    <!-- amp-form -->
    <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
    <!-- amp-mustache -->
	  <script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>
    <!-- if file post-type amp-script -->
    <?= (is_singular('file')) ? '<script async custom-element="amp-script" src="https://cdn.ampproject.org/v0/amp-script-0.1.js"></script>' : '' ?>
    <!-- amp-bind -->
    <script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>

    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <style amp-custom>
      @font-face {
  font-family: "Hacked-KerX";
  src: url("../wp-content/themes/wp-hacker-amp-theme/assets/font/Hacked-KerX.ttf") format("truetype");
  font-display: swap;
  font-weight: 400;
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD; }

.dropdown:hover .dropdown-menu {
  display: block; }

a.download-area-history:last-child {
  padding-right: 0; }

a.download-area-history {
  padding: 0 1em 0 1em; }

a.download-area-history:first-child {
  padding-left: 0; }

.not-found {
  height: 85%; }

.navigation-pageination {
  display: flex;
  justify-content: center; }

.is-category {
  margin-bottom: 2em; }

li::marker {
  color: #dd0000; }

.comment {
  margin-bottom: 2em;
  word-wrap: break-word; }

.header-comment {
  display: flex;
  align-items: center;
  margin: 1em 0 1em 0; }

.header-comment > div {
  margin-right: 1em; }

.header-comment > div > img {
  width: 35px;
  height: auto; }

.text::after {
  content: "_";
  animation: blinker 1s linear infinite; }

@keyframes blinker {
  50% {
    opacity: 0; } }

button,
input,
select,
textarea {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit; }

a {
  color: #00ff00;
  text-decoration: none; }

a:focus,
a:hover {
  filter: brightness(75%);
  text-decoration: underline; }

img {
  vertical-align: middle; }

.carousel-inner > .item > a > img,
.carousel-inner > .item > img,
.img-responsive,
.thumbnail a > img,
.thumbnail > img {
  display: block;
  max-width: 100%;
  height: auto; }

hr {
  margin-top: 20px;
  margin-bottom: 20px;
  border: 0;
  border-top: 1px solid #3c3c3c; }

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  margin: -1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0; }

[role="button"] {
  cursor: pointer; }

p {
  margin: 0 0 2rem; }

.small,
small {
  font-size: 85%; }

.text-center {
  text-align: center; }

ol,
ul {
  margin-top: 0;
  margin-bottom: 10px; }

ol ol,
ol ul,
ul ol,
ul ul {
  margin-bottom: 0; }

.list-unstyled {
  padding-left: 0;
  list-style: none; }

.list-inline {
  padding-left: 0;
  list-style: none;
  margin-left: -5px; }

.list-inline > li {
  display: inline-block;
  padding-left: 5px;
  padding-right: 5px; }

blockquote {
  padding: 10px 20px;
  margin: 0 0 20px;
  font-size: 17.5px;
  border-left: 5px solid #030; }

blockquote ol:last-child,
blockquote p:last-child,
blockquote ul:last-child {
  margin-bottom: 0; }

blockquote .small,
blockquote footer,
blockquote small {
  display: block;
  font-size: 80%;
  line-height: 1.428571429;
  color: #030; }

blockquote .small:before,
blockquote footer:before,
blockquote small:before {
  content: "\2014 \00A0"; }

.blockquote-reverse,
blockquote.pull-right {
  padding-right: 15px;
  padding-left: 0;
  border-right: 5px solid #030;
  border-left: 0;
  text-align: right; }

.blockquote-reverse .small:before,
.blockquote-reverse footer:before,
.blockquote-reverse small:before,
blockquote.pull-right .small:before,
blockquote.pull-right footer:before,
blockquote.pull-right small:before {
  content: ""; }

.blockquote-reverse .small:after,
.blockquote-reverse footer:after,
.blockquote-reverse small:after,
blockquote.pull-right .small:after,
blockquote.pull-right footer:after,
blockquote.pull-right small:after {
  content: "\00A0 \2014"; }

address {
  margin-bottom: 20px;
  font-style: normal;
  line-height: 1.428571429; }

code,
kbd,
pre,
samp {
  font-family: Monospace; }

code {
  padding: 2px 4px;
  font-size: 90%;
  color: #c7254e;
  background-color: #f9f2f4;
  border-radius: 0; }

kbd {
  padding: 2px 4px;
  font-size: 90%;
  color: #fff;
  background-color: #333;
  border-radius: 0;
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.25); }

kbd kbd {
  padding: 0;
  font-size: 100%;
  font-weight: 700;
  box-shadow: none; }

pre {
  display: block;
  padding: 9.5px;
  margin: 0 0 10px;
  font-size: 13px;
  line-height: 1.428571429;
  word-break: break-all;
  word-wrap: break-word;
  color: #0c0;
  background-color: #f5f5f5;
  border: 1px solid #ccc;
  border-radius: 0; }

pre code {
  padding: 0;
  font-size: inherit;
  color: inherit;
  white-space: pre-wrap;
  background-color: transparent;
  border-radius: 0; }

.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll; }

.container {
  margin-right: auto;
  margin-left: auto;
  padding-left: 15px;
  padding-right: 15px; }

@media (min-width: 768px) {
  .container {
    width: 750px; } }

@media (min-width: 992px) {
  .container {
    width: 970px; } }

@media (min-width: 1200px) {
  .container {
    width: 1170px; } }

.container-fluid {
  margin-right: auto;
  margin-left: auto;
  padding-left: 15px;
  padding-right: 15px; }

.row {
  margin-left: -15px;
  margin-right: -15px; }

.col-lg-1,
.col-lg-10,
.col-lg-11,
.col-lg-12,
.col-lg-2,
.col-lg-3,
.col-lg-4,
.col-lg-5,
.col-lg-6,
.col-lg-7,
.col-lg-8,
.col-lg-9,
.col-md-1,
.col-md-10,
.col-md-11,
.col-md-12,
.col-md-2,
.col-md-3,
.col-md-4,
.col-md-5,
.col-md-6,
.col-md-7,
.col-md-8,
.col-md-9,
.col-sm-1,
.col-sm-10,
.col-sm-11,
.col-sm-12,
.col-sm-2,
.col-sm-3,
.col-sm-4,
.col-sm-5,
.col-sm-6,
.col-sm-7,
.col-sm-8,
.col-sm-9,
.col-xs-1,
.col-xs-10,
.col-xs-11,
.col-xs-12,
.col-xs-2,
.col-xs-3,
.col-xs-4,
.col-xs-5,
.col-xs-6,
.col-xs-7,
.col-xs-8,
.col-xs-9 {
  position: relative;
  min-height: 1px;
  padding-left: 15px;
  padding-right: 15px; }

.col-xs-1,
.col-xs-10,
.col-xs-11,
.col-xs-12,
.col-xs-2,
.col-xs-3,
.col-xs-4,
.col-xs-5,
.col-xs-6,
.col-xs-7,
.col-xs-8,
.col-xs-9 {
  float: left; }

.col-xs-12 {
  width: 100%; }

.col-xs-11 {
  width: 91.66666666666666%; }

.col-xs-10 {
  width: 83.33333333333334%; }

.col-xs-9 {
  width: 75%; }

.col-xs-8 {
  width: 66.66666666666666%; }

.col-xs-7 {
  width: 58.333333333333336%; }

.col-xs-6 {
  width: 50%; }

.col-xs-5 {
  width: 41.66666666666667%; }

.col-xs-4 {
  width: 33.33333333333333%; }

.col-xs-3 {
  width: 25%; }

.col-xs-2 {
  width: 16.666666666666664%; }

.col-xs-1 {
  width: 8.333333333333332%; }

@media (min-width: 768px) {
  .col-sm-1,
  .col-sm-10,
  .col-sm-11,
  .col-sm-12,
  .col-sm-2,
  .col-sm-3,
  .col-sm-4,
  .col-sm-5,
  .col-sm-6,
  .col-sm-7,
  .col-sm-8,
  .col-sm-9 {
    float: left; }
  .col-sm-12 {
    width: 100%; }
  .col-sm-11 {
    width: 91.66666666666666%; }
  .col-sm-10 {
    width: 83.33333333333334%; }
  .col-sm-9 {
    width: 75%; }
  .col-sm-8 {
    width: 66.66666666666666%; }
  .col-sm-7 {
    width: 58.333333333333336%; }
  .col-sm-6 {
    width: 50%; }
  .col-sm-5 {
    width: 41.66666666666667%; }
  .col-sm-4 {
    width: 33.33333333333333%; }
  .col-sm-3 {
    width: 25%; }
  .col-sm-2 {
    width: 16.666666666666664%; }
  .col-sm-1 {
    width: 8.333333333333332%; } }

@media (min-width: 992px) {
  .col-md-1,
  .col-md-10,
  .col-md-11,
  .col-md-12,
  .col-md-2,
  .col-md-3,
  .col-md-4,
  .col-md-5,
  .col-md-6,
  .col-md-7,
  .col-md-8,
  .col-md-9 {
    float: left; }
  .col-md-12 {
    width: 100%; }
  .col-md-11 {
    width: 91.66666666666666%; }
  .col-md-10 {
    width: 83.33333333333334%; }
  .col-md-9 {
    width: 75%; }
  .col-md-8 {
    width: 66.66666666666666%; }
  .col-md-7 {
    width: 58.333333333333336%; }
  .col-md-6 {
    width: 50%; }
  .col-md-5 {
    width: 41.66666666666667%; }
  .col-md-4 {
    width: 33.33333333333333%; }
  .col-md-3 {
    width: 25%; }
  .col-md-2 {
    width: 16.666666666666664%; }
  .col-md-1 {
    width: 8.333333333333332%; } }

@media (min-width: 1200px) {
  .col-lg-1,
  .col-lg-10,
  .col-lg-11,
  .col-lg-12,
  .col-lg-2,
  .col-lg-3,
  .col-lg-4,
  .col-lg-5,
  .col-lg-6,
  .col-lg-7,
  .col-lg-8,
  .col-lg-9 {
    float: left; }
  .col-lg-12 {
    width: 100%; }
  .col-lg-11 {
    width: 91.66666666666666%; }
  .col-lg-10 {
    width: 83.33333333333334%; }
  .col-lg-9 {
    width: 75%; }
  .col-lg-8 {
    width: 66.66666666666666%; }
  .col-lg-7 {
    width: 58.333333333333336%; }
  .col-lg-6 {
    width: 50%; }
  .col-lg-5 {
    width: 41.66666666666667%; }
  .col-lg-4 {
    width: 33.33333333333333%; }
  .col-lg-3 {
    width: 25%; }
  .col-lg-2 {
    width: 16.666666666666664%; }
  .col-lg-1 {
    width: 8.333333333333332%; } }

table {
  background-color: transparent; }

th {
  text-align: left; }

.table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 20px; }

.table > tbody > tr > td,
.table > tbody > tr > th,
.table > tfoot > tr > td,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > thead > tr > th {
  padding: 8px;
  line-height: 1.428571429;
  vertical-align: top;
  border-top: 1px solid #444; }

.table > thead > tr > th {
  vertical-align: bottom;
  border-bottom: 2px solid #444; }

.table > caption + thead > tr:first-child > td,
.table > caption + thead > tr:first-child > th,
.table > colgroup + thead > tr:first-child > td,
.table > colgroup + thead > tr:first-child > th,
.table > thead:first-child > tr:first-child > td,
.table > thead:first-child > tr:first-child > th {
  border-top: 0; }

.table-bordered {
  border: 1px solid #444; }

.table-bordered > tbody > tr > td,
.table-bordered > tbody > tr > th,
.table-bordered > tfoot > tr > td,
.table-bordered > tfoot > tr > th,
.table-bordered > thead > tr > td,
.table-bordered > thead > tr > th {
  border: 1px solid #444; }

.table-bordered > thead > tr > td,
.table-bordered > thead > tr > th {
  border-bottom-width: 2px; }

.table-striped > tbody > tr:nth-of-type(odd) {
  background-color: #080808; }

.table-hover > tbody > tr:hover {
  background-color: #030; }

.table-responsive {
  overflow-x: auto;
  min-height: 0.01%; }

@media screen and (max-width: 767px) {
  .table-responsive {
    width: 100%;
    margin-bottom: 15px;
    overflow-y: hidden;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    border: 1px solid #444; }
  .table-responsive > .table {
    margin-bottom: 0; }
  .table-responsive > .table > tbody > tr > td,
  .table-responsive > .table > tbody > tr > th,
  .table-responsive > .table > tfoot > tr > td,
  .table-responsive > .table > tfoot > tr > th,
  .table-responsive > .table > thead > tr > td,
  .table-responsive > .table > thead > tr > th {
    white-space: nowrap; }
  .table-responsive > .table-bordered {
    border: 0; }
  .table-responsive > .table-bordered > tbody > tr > td:first-child,
  .table-responsive > .table-bordered > tbody > tr > th:first-child,
  .table-responsive > .table-bordered > tfoot > tr > td:first-child,
  .table-responsive > .table-bordered > tfoot > tr > th:first-child,
  .table-responsive > .table-bordered > thead > tr > td:first-child,
  .table-responsive > .table-bordered > thead > tr > th:first-child {
    border-left: 0; }
  .table-responsive > .table-bordered > tbody > tr > td:last-child,
  .table-responsive > .table-bordered > tbody > tr > th:last-child,
  .table-responsive > .table-bordered > tfoot > tr > td:last-child,
  .table-responsive > .table-bordered > tfoot > tr > th:last-child,
  .table-responsive > .table-bordered > thead > tr > td:last-child,
  .table-responsive > .table-bordered > thead > tr > th:last-child {
    border-right: 0; }
  .table-responsive > .table-bordered > tbody > tr:last-child > td,
  .table-responsive > .table-bordered > tbody > tr:last-child > th,
  .table-responsive > .table-bordered > tfoot > tr:last-child > td,
  .table-responsive > .table-bordered > tfoot > tr:last-child > th {
    border-bottom: 0; } }

label {
  display: inline-block;
  max-width: 100%;
  margin-bottom: 5px;
  font-weight: 700; }

input[type="checkbox"],
input[type="radio"] {
  margin: 4px 0 0;
  line-height: normal; }

.form-control {
  display: block;
  width: 100%;
  height: 34px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.428571429;
  color: #090;
  background-color: #000;
  background-image: none;
  border-radius: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border-color ease-in-out 0.15s,
 box-shadow ease-in-out 0.15s;
  -o-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
  transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s; }

.form-control:focus {
  border-color: #0f0;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(0, 255, 0, 0.6);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(0, 255, 0, 0.6); }

.form-control::-moz-placeholder {
  color: #060;
  opacity: 1; }

.form-control:-ms-input-placeholder {
  color: #060; }

.form-control::-webkit-input-placeholder {
  color: #060; }

textarea.form-control {
  height: auto; }

.form-group {
  margin-bottom: 15px; }

.open > .dropdown-toggle.btn-primary {
  color: #222;
  background-color: #0c0;
  border-color: #000; }

.open > .dropdown-toggle.btn-primary {
  background-image: none; }

fieldset[disabled] .btn-primary,
fieldset[disabled] .btn-primary.active,
fieldset[disabled] .btn-primary.focus,
fieldset[disabled] .btn-primary:active,
fieldset[disabled] .btn-primary:focus,
fieldset[disabled] .btn-primary:hover {
  background-color: #0f0;
  border-color: #111; }

input[type="button"].btn-block,
input[type="reset"].btn-block,
input[type="submit"].btn-block {
  width: 100%; }

.fade {
  opacity: 0;
  -webkit-transition: opacity 0.15s linear;
  -o-transition: opacity 0.15s linear;
  transition: opacity 0.15s linear; }

.fade.in {
  opacity: 1; }

.collapse {
  display: none; }

.collapse.in {
  display: block; }

tbody.collapse.in {
  display: table-row-group; }

.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  -webkit-transition-property: height, visibility;
  transition-property: height, visibility;
  -webkit-transition-duration: 0.35s;
  transition-duration: 0.35s;
  -webkit-transition-timing-function: ease;
  transition-timing-function: ease; }

.caret {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 2px;
  vertical-align: middle;
  border-top: 4px dashed;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent; }

.dropdown,
.dropup {
  position: relative; }

.dropdown-toggle:focus {
  outline: 0; }

.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 160px;
  padding: 5px 0;
  margin: 2px 0 0;
  list-style: none;
  font-size: 14px;
  text-align: left;
  background-color: #3c3c3c;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 0;
  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  background-clip: padding-box; }

.dropdown-menu.pull-right {
  right: 0;
  left: auto; }

.dropdown-menu .divider {
  height: 1px;
  margin: 9px 0;
  overflow: hidden;
  background-color: #333; }

.dropdown-menu > li > a {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: 400;
  line-height: 1.428571429;
  color: #0c0;
  white-space: nowrap; }

.dropdown-menu > li > a:focus,
.dropdown-menu > li > a:hover {
  text-decoration: none;
  color: #222;
  background-color: #0f0; }

.dropdown-menu > .active > a,
.dropdown-menu > .active > a:focus,
.dropdown-menu > .active > a:hover {
  color: #222;
  text-decoration: none;
  outline: 0;
  background-color: #0f0; }

.dropdown-menu > .disabled > a,
.dropdown-menu > .disabled > a:focus,
.dropdown-menu > .disabled > a:hover {
  color: #030; }

.dropdown-menu > .disabled > a:focus,
.dropdown-menu > .disabled > a:hover {
  text-decoration: none;
  background-color: transparent;
  background-image: none;
  cursor: not-allowed; }

.open > .dropdown-menu {
  display: block; }

.open > a {
  outline: 0; }

.dropdown-menu-right {
  left: auto;
  right: 0; }

.dropdown-menu-left {
  left: 0;
  right: auto; }

.dropdown-header {
  display: block;
  padding: 3px 20px;
  font-size: 12px;
  line-height: 1.428571429;
  color: #a2a2a2;
  white-space: nowrap; }

.dropdown-backdrop {
  position: fixed;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  z-index: 990; }

.pull-right > .dropdown-menu {
  right: 0;
  left: auto; }

.dropup .caret,
.navbar-fixed-bottom .dropdown .caret {
  border-top: 0;
  border-bottom: 4px solid;
  content: ""; }

.dropup .dropdown-menu,
.navbar-fixed-bottom .dropdown .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-bottom: 2px; }

@media (min-width: 768px) {
  .navbar-right .dropdown-menu {
    left: auto;
    right: 0; }
  .navbar-right .dropdown-menu-left {
    left: 0;
    right: auto; } }

.nav {
  margin-bottom: 0;
  padding-left: 0;
  list-style: none; }

.nav > li {
  position: relative;
  display: block; }

.nav > li > a {
  position: relative;
  display: block;
  padding: 10px 15px; }

.nav > li > a:focus,
.nav > li > a:hover {
  text-decoration: none;
  background-color: #030; }

.nav > li.disabled > a {
  color: #030; }

.nav > li.disabled > a:focus,
.nav > li.disabled > a:hover {
  color: #030;
  text-decoration: none;
  background-color: transparent;
  cursor: not-allowed; }

.nav .open > a,
.nav .open > a:focus,
.nav .open > a:hover {
  background-color: #030;
  border-color: #0f0; }

.nav .nav-divider {
  height: 1px;
  margin: 9px 0;
  overflow: hidden;
  background-color: #e5e5e5; }

.nav > li > a > img {
  max-width: none; }

.nav-tabs {
  border-bottom: 1px solid #444; }

.nav-tabs > li {
  float: left;
  margin-bottom: -1px; }

.nav-tabs > li > a {
  margin-right: 2px;
  line-height: 1.428571429;
  border: 1px solid transparent;
  border-radius: 0 0 0 0; }

.nav-tabs > li > a:hover {
  border-color: #444 #444 #444; }

.nav-tabs > li.active > a,
.nav-tabs > li.active > a:focus,
.nav-tabs > li.active > a:hover {
  color: #090;
  background-color: #333;
  border: 1px solid #222;
  border-bottom-color: transparent;
  cursor: default; }

.nav-tabs.nav-justified {
  width: 100%;
  border-bottom: 0; }

.nav-tabs.nav-justified > li {
  float: none; }

.nav-tabs.nav-justified > li > a {
  text-align: center;
  margin-bottom: 5px; }

.nav-tabs.nav-justified > .dropdown .dropdown-menu {
  top: auto;
  left: auto; }

@media (min-width: 768px) {
  .nav-tabs.nav-justified > li {
    display: table-cell;
    width: 1%; }
  .nav-tabs.nav-justified > li > a {
    margin-bottom: 0; } }

.nav-tabs.nav-justified > li > a {
  margin-right: 0;
  border-radius: 0; }

.nav-tabs.nav-justified > .active > a,
.nav-tabs.nav-justified > .active > a:focus,
.nav-tabs.nav-justified > .active > a:hover {
  border: 1px solid #ddd; }

@media (min-width: 768px) {
  .nav-tabs.nav-justified > li > a {
    border-bottom: 1px solid #ddd;
    border-radius: 0 0 0 0; }
  .nav-tabs.nav-justified > .active > a,
  .nav-tabs.nav-justified > .active > a:focus,
  .nav-tabs.nav-justified > .active > a:hover {
    border-bottom-color: #222; } }

.nav-pills > li {
  float: left; }

.nav-pills > li > a {
  border-radius: 0; }

.nav-pills > li + li {
  margin-left: 2px; }

.nav-pills > li.active > a,
.nav-pills > li.active > a:focus,
.nav-pills > li.active > a:hover {
  color: #fff;
  background-color: #0f0; }

.nav-stacked > li {
  float: none; }

.nav-stacked > li + li {
  margin-top: 2px;
  margin-left: 0; }

.nav-justified {
  width: 100%; }

.nav-justified > li {
  float: none; }

.nav-justified > li > a {
  text-align: center;
  margin-bottom: 5px; }

.nav-justified > .dropdown .dropdown-menu {
  top: auto;
  left: auto; }

@media (min-width: 768px) {
  .nav-justified > li {
    display: table-cell;
    width: 1%; }
  .nav-justified > li > a {
    margin-bottom: 0; } }

.nav-tabs-justified {
  border-bottom: 0; }

.nav-tabs-justified > li > a {
  margin-right: 0;
  border-radius: 0; }

.nav-tabs-justified > .active > a,
.nav-tabs-justified > .active > a:focus,
.nav-tabs-justified > .active > a:hover {
  border: 1px solid #ddd; }

@media (min-width: 768px) {
  .nav-tabs-justified > li > a {
    border-bottom: 1px solid #ddd;
    border-radius: 0 0 0 0; }
  .nav-tabs-justified > .active > a,
  .nav-tabs-justified > .active > a:focus,
  .nav-tabs-justified > .active > a:hover {
    border-bottom-color: #222; } }

.tab-content > .tab-pane {
  display: none; }

.tab-content > .active {
  display: block; }

.nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-right-radius: 0;
  border-top-left-radius: 0; }

.navbar {
  position: relative;
  min-height: 50px;
  margin-bottom: 20px;
  border: 1px solid transparent; }

@media (min-width: 768px) {
  .navbar {
    border-radius: 0; } }

@media (min-width: 768px) {
  .navbar-header {
    float: left; } }

.navbar-collapse {
  overflow-x: visible;
  padding-right: 15px;
  padding-left: 15px;
  border-top: 1px solid transparent;
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);
  -webkit-overflow-scrolling: touch; }

.navbar-collapse.in {
  overflow-y: auto; }

@media (min-width: 768px) {
  .navbar-collapse {
    width: auto;
    border-top: 0;
    box-shadow: none; }
  .navbar-collapse.collapse {
    display: block;
    height: auto;
    padding-bottom: 0;
    overflow: visible; }
  .navbar-collapse.in {
    overflow-y: visible; }
  .navbar-fixed-bottom .navbar-collapse,
  .navbar-fixed-top .navbar-collapse,
  .navbar-static-top .navbar-collapse {
    padding-left: 0;
    padding-right: 0; } }

.navbar-fixed-bottom .navbar-collapse,
.navbar-fixed-top .navbar-collapse {
  max-height: 340px; }

@media (max-device-width: 480px) and (orientation: landscape) {
  .navbar-fixed-bottom .navbar-collapse,
  .navbar-fixed-top .navbar-collapse {
    max-height: 200px; } }

.container-fluid > .navbar-collapse,
.container-fluid > .navbar-header,
.container > .navbar-collapse,
.container > .navbar-header {
  margin-right: -15px;
  margin-left: -15px; }

@media (min-width: 768px) {
  .container-fluid > .navbar-collapse,
  .container-fluid > .navbar-header,
  .container > .navbar-collapse,
  .container > .navbar-header {
    margin-right: 0;
    margin-left: 0; } }

.navbar-static-top {
  z-index: 1000;
  border-width: 0 0 1px; }

@media (min-width: 768px) {
  .navbar-static-top {
    border-radius: 0; } }

.navbar-fixed-bottom,
.navbar-fixed-top {
  position: fixed;
  right: 0;
  left: 0;
  z-index: 1030; }

@media (min-width: 768px) {
  .navbar-fixed-bottom,
  .navbar-fixed-top {
    border-radius: 0; } }

.navbar-fixed-top {
  top: 0;
  border-width: 0 0 1px; }

.navbar-fixed-bottom {
  bottom: 0;
  margin-bottom: 0;
  border-width: 1px 0 0; }

.navbar-brand {
  float: left;
  padding: 15px 15px;
  font-size: 18px;
  line-height: 20px;
  height: 50px; }

.navbar-brand:focus,
.navbar-brand:hover {
  text-decoration: none; }

.navbar-brand > img {
  display: block; }

@media (min-width: 768px) {
  .navbar > .container .navbar-brand,
  .navbar > .container-fluid .navbar-brand {
    margin-left: -15px; } }

.navbar-toggle {
  position: relative;
  float: right;
  margin-right: 15px;
  padding: 9px 10px;
  margin-top: 8px;
  margin-bottom: 8px;
  background-color: transparent;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 0; }

.navbar-toggle:focus {
  outline: 0; }

.navbar-toggle .icon-bar {
  display: block;
  width: 22px;
  height: 2px;
  border-radius: 1px; }

.navbar-toggle .icon-bar + .icon-bar {
  margin-top: 4px; }

@media (min-width: 768px) {
  .navbar-toggle {
    display: none; } }

.navbar-nav {
  margin: 7.5px -15px; }

.navbar-nav > li > a {
  padding-top: 10px;
  padding-bottom: 10px;
  line-height: 20px; }

@media (max-width: 767px) {
  .navbar-nav .open .dropdown-menu {
    position: static;
    float: none;
    width: auto;
    margin-top: 0;
    background-color: transparent;
    border: 0;
    box-shadow: none; }
  .navbar-nav .open .dropdown-menu .dropdown-header,
  .navbar-nav .open .dropdown-menu > li > a {
    padding: 5px 15px 5px 25px; }
  .navbar-nav .open .dropdown-menu > li > a {
    line-height: 20px; }
  .navbar-nav .open .dropdown-menu > li > a:focus,
  .navbar-nav .open .dropdown-menu > li > a:hover {
    background-image: none; } }

@media (min-width: 768px) {
  .navbar-nav {
    float: left;
    margin: 0; }
  .navbar-nav > li {
    float: left; }
  .navbar-nav > li > a {
    padding-top: 15px;
    padding-bottom: 15px; } }

.navbar-form {
  margin-left: -15px;
  margin-right: -15px;
  padding: 10px 15px;
  border-top: 1px solid transparent;
  border-bottom: 1px solid transparent;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1);
  margin-top: 8px;
  margin-bottom: 8px; }

@media (min-width: 768px) {
  .navbar-form .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle; }
  .navbar-form .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle; }
  .navbar-form .form-control-static {
    display: inline-block; }
  .navbar-form .input-group {
    display: inline-table;
    vertical-align: middle; }
  .navbar-form .input-group .form-control,
  .navbar-form .input-group .input-group-addon,
  .navbar-form .input-group .input-group-btn {
    width: auto; }
  .navbar-form .input-group > .form-control {
    width: 100%; }
  .navbar-form .control-label {
    margin-bottom: 0;
    vertical-align: middle; }
  .navbar-form .checkbox,
  .navbar-form .radio {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    vertical-align: middle; }
  .navbar-form .checkbox label,
  .navbar-form .radio label {
    padding-left: 0; }
  .navbar-form .checkbox input[type="checkbox"],
  .navbar-form .radio input[type="radio"] {
    position: relative;
    margin-left: 0; }
  .navbar-form .has-feedback .form-control-feedback {
    top: 0; } }

@media (max-width: 767px) {
  .navbar-form .form-group {
    margin-bottom: 5px; }
  .navbar-form .form-group:last-child {
    margin-bottom: 0; } }

@media (min-width: 768px) {
  .navbar-form {
    width: auto;
    border: 0;
    margin-left: 0;
    margin-right: 0;
    padding-top: 0;
    padding-bottom: 0;
    -webkit-box-shadow: none;
    box-shadow: none; } }

.navbar-nav > li > .dropdown-menu {
  margin-top: 0;
  border-top-right-radius: 0;
  border-top-left-radius: 0; }

.navbar-fixed-bottom .navbar-nav > li > .dropdown-menu {
  margin-bottom: 0;
  border-top-right-radius: 0;
  border-top-left-radius: 0;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0; }

.navbar-btn {
  margin-top: 8px;
  margin-bottom: 8px; }

.navbar-btn.btn-sm {
  margin-top: 10px;
  margin-bottom: 10px; }

.navbar-btn.btn-xs {
  margin-top: 14px;
  margin-bottom: 14px; }

.navbar-text {
  margin-top: 15px;
  margin-bottom: 15px; }

@media (min-width: 768px) {
  .navbar-text {
    float: left;
    margin-left: 15px;
    margin-right: 15px; } }

@media (min-width: 768px) {
  .navbar-left {
    float: left; }
  .navbar-right {
    float: right;
    margin-right: -15px; }
  .navbar-right ~ .navbar-right {
    margin-right: 0; } }

.navbar-default {
  background-color: #080808;
  border-color: #000; }

.navbar-default .navbar-brand {
  color: #0f0; }

.navbar-default .navbar-brand:focus,
.navbar-default .navbar-brand:hover {
  color: #0c0;
  background-color: transparent; }

.navbar-default .navbar-text {
  color: #0f0; }

.navbar-default .navbar-nav > li > a {
  color: #0f0; }

.navbar-default .navbar-nav > li > a:focus,
.navbar-default .navbar-nav > li > a:hover {
  color: #090;
  background-color: #222; }

.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:focus,
.navbar-default .navbar-nav > .active > a:hover {
  color: #999;
  background-color: #000; }

.navbar-default .navbar-nav > .disabled > a,
.navbar-default .navbar-nav > .disabled > a:focus,
.navbar-default .navbar-nav > .disabled > a:hover {
  color: #ccc;
  background-color: transparent; }

.navbar-default .navbar-toggle {
  border-color: #ddd; }

.navbar-default .navbar-toggle:focus,
.navbar-default .navbar-toggle:hover {
  background-color: #ddd; }

.navbar-default .navbar-toggle .icon-bar {
  background-color: #888; }

.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
  border-color: #000; }

.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:focus,
.navbar-default .navbar-nav > .open > a:hover {
  background-color: #000;
  color: #999; }

@media (max-width: 767px) {
  .navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: #0f0; }
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus,
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover {
    color: #090;
    background-color: #222; }
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover {
    color: #999;
    background-color: #000; }
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:focus,
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:hover {
    color: #ccc;
    background-color: transparent; } }

.navbar-default .navbar-link {
  color: #0f0; }

.navbar-default .navbar-link:hover {
  color: #090; }

.navbar-default .btn-link {
  color: #0f0; }

.navbar-default .btn-link:focus,
.navbar-default .btn-link:hover {
  color: #090; }

.navbar-default .btn-link[disabled]:focus,
.navbar-default .btn-link[disabled]:hover,
fieldset[disabled] .navbar-default .btn-link:focus,
fieldset[disabled] .navbar-default .btn-link:hover {
  color: #ccc; }

.navbar-inverse {
  background-color: #222;
  border-color: #080808; }

.navbar-inverse .navbar-brand {
  color: #007f00; }

.navbar-inverse .navbar-brand:focus,
.navbar-inverse .navbar-brand:hover {
  color: #fff;
  background-color: transparent; }

.navbar-inverse .navbar-text {
  color: #007f00; }

.navbar-inverse .navbar-nav > li > a {
  color: #007f00; }

.navbar-inverse .navbar-nav > li > a:focus,
.navbar-inverse .navbar-nav > li > a:hover {
  color: #fff;
  background-color: transparent; }

.navbar-inverse .navbar-nav > .active > a,
.navbar-inverse .navbar-nav > .active > a:focus,
.navbar-inverse .navbar-nav > .active > a:hover {
  color: #fff;
  background-color: #080808; }

.navbar-inverse .navbar-nav > .disabled > a,
.navbar-inverse .navbar-nav > .disabled > a:focus,
.navbar-inverse .navbar-nav > .disabled > a:hover {
  color: #444;
  background-color: transparent; }

.navbar-inverse .navbar-toggle {
  border-color: #333; }

.navbar-inverse .navbar-toggle:focus,
.navbar-inverse .navbar-toggle:hover {
  background-color: #333; }

.navbar-inverse .navbar-toggle .icon-bar {
  background-color: #fff; }

.navbar-inverse .navbar-collapse,
.navbar-inverse .navbar-form {
  border-color: #101010; }

.navbar-inverse .navbar-nav > .open > a,
.navbar-inverse .navbar-nav > .open > a:focus,
.navbar-inverse .navbar-nav > .open > a:hover {
  background-color: #080808;
  color: #fff; }

@media (max-width: 767px) {
  .navbar-inverse .navbar-nav .open .dropdown-menu > .dropdown-header {
    border-color: #080808; }
  .navbar-inverse .navbar-nav .open .dropdown-menu .divider {
    background-color: #080808; }
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a {
    color: #007f00; }
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:focus,
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:hover {
    color: #fff;
    background-color: transparent; }
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:focus,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:hover {
    color: #fff;
    background-color: #080808; }
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:focus,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:hover {
    color: #444;
    background-color: transparent; } }

.navbar-inverse .navbar-link {
  color: #007f00; }

.navbar-inverse .navbar-link:hover {
  color: #fff; }

.navbar-inverse .btn-link {
  color: #007f00; }

.navbar-inverse .btn-link:focus,
.navbar-inverse .btn-link:hover {
  color: #fff; }

.navbar-inverse .btn-link[disabled]:focus,
.navbar-inverse .btn-link[disabled]:hover,
fieldset[disabled] .navbar-inverse .btn-link:focus,
fieldset[disabled] .navbar-inverse .btn-link:hover {
  color: #444; }

.breadcrumb {
  padding: 8px 15px;
  margin-bottom: 20px;
  list-style: none;
  background-color: #3c3c3c;
  border-radius: 0; }

.breadcrumb > ul {
  margin: 0; }

.breadcrumb > li {
  display: inline-block; }

.breadcrumb > li + li:before {
  content: "/\00a0";
  padding: 0 5px;
  color: #0f0; }

.breadcrumb > .active {
  color: #090; }

.pagination {
  display: inline-block;
  padding-left: 0;
  margin: 20px 0;
  border-radius: 0; }

.pagination > li {
  display: inline; }

.pagination > li > a,
.pagination > li > span {
  position: relative;
  float: left;
  padding: 6px 12px;
  line-height: 1.428571429;
  text-decoration: none;
  color: #0f0;
  background-color: #222;
  border: 1px solid #444;
  margin-left: -1px; }

.pagination > li:first-child > a,
.pagination > li:first-child > span {
  margin-left: 0;
  border-bottom-left-radius: 0;
  border-top-left-radius: 0; }

.pagination > li:last-child > a,
.pagination > li:last-child > span {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0; }

.pagination > li > a:focus,
.pagination > li > a:hover,
.pagination > li > span:focus,
.pagination > li > span:hover {
  color: #00b300;
  background-color: #030;
  border-color: #555; }

.pagination > .active > a,
.pagination > .active > a:focus,
.pagination > .active > a:hover,
.pagination > .active > span,
.pagination > .active > span:focus,
.pagination > .active > span:hover,
.pagination > li > .active {
  z-index: 2;
  color: #222;
  background-color: #0f0;
  border-color: #0f0;
  cursor: default; }

.pagination > .disabled > a,
.pagination > .disabled > a:focus,
.pagination > .disabled > a:hover,
.pagination > .disabled > span,
.pagination > .disabled > span:focus,
.pagination > .disabled > span:hover {
  color: #3f3;
  background-color: #3c3c3c;
  border-color: #444;
  cursor: not-allowed; }

.pagination-lg > li > a,
.pagination-lg > li > span {
  padding: 10px 16px;
  font-size: 18px; }

.pagination-lg > li:first-child > a,
.pagination-lg > li:first-child > span {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0; }

.pagination-lg > li:last-child > a,
.pagination-lg > li:last-child > span {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0; }

.pagination-sm > li > a,
.pagination-sm > li > span {
  padding: 5px 10px;
  font-size: 12px; }

.pagination-sm > li:first-child > a,
.pagination-sm > li:first-child > span {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0; }

.pagination-sm > li:last-child > a,
.pagination-sm > li:last-child > span {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0; }

.pager {
  padding-left: 0;
  margin: 20px 0;
  list-style: none;
  text-align: center; }

.pager li {
  display: inline; }

.pager li > a,
.pager li > span {
  display: inline-block;
  padding: 5px 14px;
  background-color: #222;
  border: 1px solid #444;
  border-radius: 0; }

.pager li > a:focus,
.pager li > a:hover {
  text-decoration: none;
  background-color: #030; }

.pager .next > a,
.pager .next > span {
  float: right; }

.pager .previous > a,
.pager .previous > span {
  float: left; }

.pager .disabled > a,
.pager .disabled > a:focus,
.pager .disabled > a:hover,
.pager .disabled > span {
  color: #030;
  background-color: #222;
  cursor: not-allowed; }

.label {
  display: inline;
  padding: 0.2em 0.6em 0.3em;
  font-size: 75%;
  font-weight: 700;
  line-height: 1;
  color: #222;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: 0.25em; }

a.label:focus,
a.label:hover {
  color: #fff;
  text-decoration: none;
  cursor: pointer; }

.label:empty {
  display: none; }

.btn .label {
  position: relative;
  top: -1px; }

.label-default {
  background-color: #030; }

.label-default[href]:focus,
.label-default[href]:hover {
  background-color: #000; }

.label-primary {
  background-color: #0f0; }

.label-primary[href]:focus,
.label-primary[href]:hover {
  background-color: #0c0; }

.label-success {
  background-color: #090; }

.label-success[href]:focus,
.label-success[href]:hover {
  background-color: #060; }

.label-info {
  background-color: #36c; }

.label-info[href]:focus,
.label-info[href]:hover {
  background-color: #2952a3; }

.label-warning {
  background-color: #f4ff00; }

.label-warning[href]:focus,
.label-warning[href]:hover {
  background-color: #c3cc00; }

.label-danger {
  background-color: red; }

.label-danger[href]:focus,
.label-danger[href]:hover {
  background-color: #c00; }

.badge {
  display: inline-block;
  min-width: 10px;
  padding: 3px 7px;
  font-size: 12px;
  font-weight: 700;
  color: #0f0;
  line-height: 1;
  vertical-align: baseline;
  white-space: nowrap;
  text-align: center;
  background-color: #222;
  border-radius: 10px; }

.badge:empty {
  display: none; }

.btn .badge {
  position: relative;
  top: -1px; }

.btn-group-xs > .btn .badge,
.btn-xs .badge {
  top: 0;
  padding: 1px 5px; }

a.badge:focus,
a.badge:hover {
  color: #fff;
  text-decoration: none;
  cursor: pointer; }

.list-group-item.active > .badge,
.nav-pills > .active > a > .badge {
  color: #0f0;
  background-color: #fff; }

.list-group-item > .badge {
  float: right; }

.list-group-item > .badge + .badge {
  margin-right: 5px; }

.nav-pills > li > a > .badge {
  margin-left: 3px; }

.jumbotron {
  padding: 30px 15px;
  margin-bottom: 30px;
  color: inherit;
  background-color: #080808; }

.jumbotron .h1,
.jumbotron h1 {
  color: inherit; }

.jumbotron p {
  margin-bottom: 15px;
  font-size: 21px;
  font-weight: 200; }

.jumbotron > hr {
  border-top-color: #000; }

.container .jumbotron,
.container-fluid .jumbotron {
  border-radius: 0; }

.jumbotron .container {
  max-width: 100%; }

@media screen and (min-width: 768px) {
  .jumbotron {
    padding: 48px 0; }
  .container .jumbotron,
  .container-fluid .jumbotron {
    padding-left: 60px;
    padding-right: 60px; }
  .jumbotron .h1,
  .jumbotron h1 {
    font-size: 63px; } }

.thumbnail {
  display: block;
  padding: 4px;
  margin-bottom: 20px;
  line-height: 1.428571429;
  background-color: #222;
  border: 1px solid #ddd;
  border-radius: 0;
  -webkit-transition: border 0.2s ease-in-out;
  -o-transition: border 0.2s ease-in-out;
  transition: border 0.2s ease-in-out; }

.thumbnail a > img,
.thumbnail > img {
  margin-left: auto;
  margin-right: auto; }

a.thumbnail.active,
a.thumbnail:focus,
a.thumbnail:hover {
  border-color: #0f0; }

.thumbnail .caption {
  padding: 9px;
  color: #0c0; }

.alert {
  padding: 15px;
  margin-bottom: 20px;
  border: 1px solid transparent;
  border-radius: 0; }

.alert h4 {
  margin-top: 0;
  color: inherit; }

.alert .alert-link {
  font-weight: 700; }

.alert > p,
.alert > ul {
  margin-bottom: 0; }

.alert > p + p {
  margin-top: 5px; }

.alert-dismissable,
.alert-dismissible {
  padding-right: 35px; }

.alert-dismissable .close,
.alert-dismissible .close {
  position: relative;
  top: -2px;
  right: -21px;
  color: inherit; }

.alert-success {
  background-color: #3c3c3c;
  border-color: #2f2f2f;
  color: #0d0; }

.alert-success hr {
  border-top-color: #222; }

.alert-success .alert-link {
  color: #0a0; }

.alert-info {
  background-color: #3c3c3c;
  border-color: #2a2a2a;
  color: #7d8cff; }

.alert-info hr {
  border-top-color: #1d1d1d; }

.alert-info .alert-link {
  color: #4a5fff; }

.alert-warning {
  background-color: #3c3c3c;
  border-color: #343434;
  color: #f4ff00; }

.alert-warning hr {
  border-top-color: #272727; }

.alert-warning .alert-link {
  color: #c3cc00; }

.alert-danger {
  background-color: #3c3c3c;
  border-color: #343434;
  color: #d00; }

.alert-danger hr {
  border-top-color: #272727; }

.alert-danger .alert-link {
  color: #a00; }

@-webkit-keyframes progress-bar-stripes {
  from {
    background-position: 40px 0; }
  to {
    background-position: 0 0; } }

@keyframes progress-bar-stripes {
  from {
    background-position: 40px 0; }
  to {
    background-position: 0 0; } }

.progress {
  overflow: hidden;
  height: 20px;
  margin-bottom: 20px;
  background-color: #3c3c3c;
  border-radius: 0;
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1); }

.progress-bar {
  float: left;
  width: 0;
  height: 100%;
  font-size: 12px;
  line-height: 20px;
  color: #fff;
  text-align: center;
  background-color: #0f0;
  -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  -webkit-transition: width 0.6s ease;
  -o-transition: width 0.6s ease;
  transition: width 0.6s ease; }

.progress-bar-striped,
.progress-striped .progress-bar {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 40px 40px; }

.progress-bar.active,
.progress.active .progress-bar {
  -webkit-animation: progress-bar-stripes 2s linear infinite;
  -o-animation: progress-bar-stripes 2s linear infinite;
  animation: progress-bar-stripes 2s linear infinite; }

.progress-bar-success {
  background-color: #090; }

.progress-striped .progress-bar-success {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent); }

.progress-bar-info {
  background-color: #36c; }

.progress-striped .progress-bar-info {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent); }

.progress-bar-warning {
  background-color: #f4ff00; }

.progress-striped .progress-bar-warning {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent); }

.progress-bar-danger {
  background-color: red; }

.progress-striped .progress-bar-danger {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent); }

.media {
  margin-top: 15px; }

.media:first-child {
  margin-top: 0; }

.media,
.media-body {
  zoom: 1;
  overflow: hidden; }

.media-body {
  width: 10000px; }

.media-object {
  display: block; }

.media-right,
.media > .pull-right {
  padding-left: 10px; }

.media-left,
.media > .pull-left {
  padding-right: 10px; }

.media-body,
.media-left,
.media-right {
  display: table-cell;
  vertical-align: top; }

.media-middle {
  vertical-align: middle; }

.media-bottom {
  vertical-align: bottom; }

.media-heading {
  margin-top: 0;
  margin-bottom: 5px; }

.media-list {
  padding-left: 0;
  list-style: none; }

.list-group {
  margin-bottom: 20px;
  padding-left: 0; }

.list-group-item {
  position: relative;
  display: block;
  padding: 10px 15px;
  margin-bottom: -1px;
  background-color: #3c3c3c;
  border: 1px solid #222; }

.list-group-item:first-child {
  border-top-right-radius: 0;
  border-top-left-radius: 0; }

.list-group-item:last-child {
  margin-bottom: 0;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0; }

a.list-group-item {
  color: #0f0; }

a.list-group-item .list-group-item-heading {
  color: #0f0; }

a.list-group-item:focus,
a.list-group-item:hover {
  text-decoration: none;
  color: #0f0;
  background-color: #151515; }

.list-group-item.disabled,
.list-group-item.disabled:focus,
.list-group-item.disabled:hover {
  background-color: #030;
  color: #030;
  cursor: not-allowed; }

.list-group-item.disabled .list-group-item-heading,
.list-group-item.disabled:focus .list-group-item-heading,
.list-group-item.disabled:hover .list-group-item-heading {
  color: inherit; }

.list-group-item.disabled .list-group-item-text,
.list-group-item.disabled:focus .list-group-item-text,
.list-group-item.disabled:hover .list-group-item-text {
  color: #030; }

.list-group-item.active,
.list-group-item.active:focus,
.list-group-item.active:hover {
  z-index: 2;
  color: #222;
  background-color: #0f0;
  border-color: #0f0; }

.list-group-item.active .list-group-item-heading,
.list-group-item.active .list-group-item-heading > .small,
.list-group-item.active .list-group-item-heading > small,
.list-group-item.active:focus .list-group-item-heading,
.list-group-item.active:focus .list-group-item-heading > .small,
.list-group-item.active:focus .list-group-item-heading > small,
.list-group-item.active:hover .list-group-item-heading,
.list-group-item.active:hover .list-group-item-heading > .small,
.list-group-item.active:hover .list-group-item-heading > small {
  color: inherit; }

.list-group-item.active .list-group-item-text,
.list-group-item.active:focus .list-group-item-text,
.list-group-item.active:hover .list-group-item-text {
  color: #222; }

.list-group-item-success {
  color: #0d0;
  background-color: #3c3c3c; }

a.list-group-item-success {
  color: #0d0; }

a.list-group-item-success .list-group-item-heading {
  color: inherit; }

a.list-group-item-success:focus,
a.list-group-item-success:hover {
  color: #0d0;
  background-color: #2f2f2f; }

a.list-group-item-success.active,
a.list-group-item-success.active:focus,
a.list-group-item-success.active:hover {
  color: #fff;
  background-color: #0d0;
  border-color: #0d0; }

.list-group-item-info {
  color: #7d8cff;
  background-color: #3c3c3c; }

a.list-group-item-info {
  color: #7d8cff; }

a.list-group-item-info .list-group-item-heading {
  color: inherit; }

a.list-group-item-info:focus,
a.list-group-item-info:hover {
  color: #7d8cff;
  background-color: #2f2f2f; }

a.list-group-item-info.active,
a.list-group-item-info.active:focus,
a.list-group-item-info.active:hover {
  color: #fff;
  background-color: #7d8cff;
  border-color: #7d8cff; }

.list-group-item-warning {
  color: #f4ff00;
  background-color: #3c3c3c; }

a.list-group-item-warning {
  color: #f4ff00; }

a.list-group-item-warning .list-group-item-heading {
  color: inherit; }

a.list-group-item-warning:focus,
a.list-group-item-warning:hover {
  color: #f4ff00;
  background-color: #2f2f2f; }

a.list-group-item-warning.active,
a.list-group-item-warning.active:focus,
a.list-group-item-warning.active:hover {
  color: #fff;
  background-color: #f4ff00;
  border-color: #f4ff00; }

.list-group-item-danger {
  color: #d00;
  background-color: #3c3c3c; }

a.list-group-item-danger {
  color: #d00; }

a.list-group-item-danger .list-group-item-heading {
  color: inherit; }

a.list-group-item-danger:focus,
a.list-group-item-danger:hover {
  color: #d00;
  background-color: #2f2f2f; }

a.list-group-item-danger.active,
a.list-group-item-danger.active:focus,
a.list-group-item-danger.active:hover {
  color: #fff;
  background-color: #d00;
  border-color: #d00; }

.list-group-item-heading {
  margin-top: 0;
  margin-bottom: 5px; }

.list-group-item-text {
  margin-bottom: 0;
  line-height: 1.3; }

.panel {
  margin-bottom: 20px;
  background-color: #222;
  border: 1px solid transparent;
  border-radius: 0;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05); }

.panel-body {
  padding: 15px; }

.panel-heading {
  padding: 10px 15px;
  border-bottom: 1px solid transparent;
  border-top-right-radius: -1;
  border-top-left-radius: -1; }

.panel-heading > .dropdown .dropdown-toggle {
  color: inherit; }

.panel-title {
  margin-top: 0;
  margin-bottom: 0;
  color: inherit; }

.panel-title > .small,
.panel-title > .small > a,
.panel-title > a,
.panel-title > small,
.panel-title > small > a {
  color: inherit; }

.panel-footer {
  padding: 10px 15px;
  background-color: #080808;
  border-top: 1px solid #3c3c3c;
  border-bottom-right-radius: -1;
  border-bottom-left-radius: -1; }

.panel > .list-group,
.panel > .panel-collapse > .list-group {
  margin-bottom: 0; }

.panel > .list-group .list-group-item,
.panel > .panel-collapse > .list-group .list-group-item {
  border-width: 1px 0;
  border-radius: 0; }

.panel > .list-group:first-child .list-group-item:first-child,
.panel
> .panel-collapse
> .list-group:first-child
.list-group-item:first-child {
  border-top: 0;
  border-top-right-radius: -1;
  border-top-left-radius: -1; }

.panel > .list-group:last-child .list-group-item:last-child,
.panel > .panel-collapse > .list-group:last-child .list-group-item:last-child {
  border-bottom: 0;
  border-bottom-right-radius: -1;
  border-bottom-left-radius: -1; }

.panel-heading + .list-group .list-group-item:first-child {
  border-top-width: 0; }

.list-group + .panel-footer {
  border-top-width: 0; }

.panel > .panel-collapse > .table,
.panel > .table,
.panel > .table-responsive > .table {
  margin-bottom: 0; }

.panel > .panel-collapse > .table caption,
.panel > .table caption,
.panel > .table-responsive > .table caption {
  padding-left: 15px;
  padding-right: 15px; }

.panel > .table-responsive:first-child > .table:first-child,
.panel > .table:first-child {
  border-top-right-radius: -1;
  border-top-left-radius: -1; }

.panel
> .table-responsive:first-child
> .table:first-child
> tbody:first-child
> tr:first-child,
.panel
> .table-responsive:first-child
> .table:first-child
> thead:first-child
> tr:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child,
.panel > .table:first-child > thead:first-child > tr:first-child {
  border-top-left-radius: -1;
  border-top-right-radius: -1; }

.panel
> .table-responsive:first-child
> .table:first-child
> tbody:first-child
> tr:first-child
td:first-child,
.panel
> .table-responsive:first-child
> .table:first-child
> tbody:first-child
> tr:first-child
th:first-child,
.panel
> .table-responsive:first-child
> .table:first-child
> thead:first-child
> tr:first-child
td:first-child,
.panel
> .table-responsive:first-child
> .table:first-child
> thead:first-child
> tr:first-child
th:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:first-child,
.panel > .table:first-child > thead:first-child > tr:first-child td:first-child,
.panel
> .table:first-child
> thead:first-child
> tr:first-child
th:first-child {
  border-top-left-radius: -1; }

.panel
> .table-responsive:first-child
> .table:first-child
> tbody:first-child
> tr:first-child
td:last-child,
.panel
> .table-responsive:first-child
> .table:first-child
> tbody:first-child
> tr:first-child
th:last-child,
.panel
> .table-responsive:first-child
> .table:first-child
> thead:first-child
> tr:first-child
td:last-child,
.panel
> .table-responsive:first-child
> .table:first-child
> thead:first-child
> tr:first-child
th:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:last-child,
.panel > .table:first-child > thead:first-child > tr:first-child td:last-child,
.panel > .table:first-child > thead:first-child > tr:first-child th:last-child {
  border-top-right-radius: -1; }

.panel > .table-responsive:last-child > .table:last-child,
.panel > .table:last-child {
  border-bottom-right-radius: -1;
  border-bottom-left-radius: -1; }

.panel
> .table-responsive:last-child
> .table:last-child
> tbody:last-child
> tr:last-child,
.panel
> .table-responsive:last-child
> .table:last-child
> tfoot:last-child
> tr:last-child,
.panel > .table:last-child > tbody:last-child > tr:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child {
  border-bottom-left-radius: -1;
  border-bottom-right-radius: -1; }

.panel
> .table-responsive:last-child
> .table:last-child
> tbody:last-child
> tr:last-child
td:first-child,
.panel
> .table-responsive:last-child
> .table:last-child
> tbody:last-child
> tr:last-child
th:first-child,
.panel
> .table-responsive:last-child
> .table:last-child
> tfoot:last-child
> tr:last-child
td:first-child,
.panel
> .table-responsive:last-child
> .table:last-child
> tfoot:last-child
> tr:last-child
th:first-child,
.panel > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child th:first-child {
  border-bottom-left-radius: -1; }

.panel
> .table-responsive:last-child
> .table:last-child
> tbody:last-child
> tr:last-child
td:last-child,
.panel
> .table-responsive:last-child
> .table:last-child
> tbody:last-child
> tr:last-child
th:last-child,
.panel
> .table-responsive:last-child
> .table:last-child
> tfoot:last-child
> tr:last-child
td:last-child,
.panel
> .table-responsive:last-child
> .table:last-child
> tfoot:last-child
> tr:last-child
th:last-child,
.panel > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child th:last-child {
  border-bottom-right-radius: -1; }

.panel > .panel-body + .table,
.panel > .panel-body + .table-responsive,
.panel > .table + .panel-body,
.panel > .table-responsive + .panel-body {
  border-top: 1px solid #444; }

.panel > .table > tbody:first-child > tr:first-child td,
.panel > .table > tbody:first-child > tr:first-child th {
  border-top: 0; }

.panel > .table-bordered,
.panel > .table-responsive > .table-bordered {
  border: 0; }

.panel > .table-bordered > tbody > tr > td:first-child,
.panel > .table-bordered > tbody > tr > th:first-child,
.panel > .table-bordered > tfoot > tr > td:first-child,
.panel > .table-bordered > tfoot > tr > th:first-child,
.panel > .table-bordered > thead > tr > td:first-child,
.panel > .table-bordered > thead > tr > th:first-child,
.panel > .table-responsive > .table-bordered > tbody > tr > td:first-child,
.panel > .table-responsive > .table-bordered > tbody > tr > th:first-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > td:first-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > th:first-child,
.panel > .table-responsive > .table-bordered > thead > tr > td:first-child,
.panel > .table-responsive > .table-bordered > thead > tr > th:first-child {
  border-left: 0; }

.panel > .table-bordered > tbody > tr > td:last-child,
.panel > .table-bordered > tbody > tr > th:last-child,
.panel > .table-bordered > tfoot > tr > td:last-child,
.panel > .table-bordered > tfoot > tr > th:last-child,
.panel > .table-bordered > thead > tr > td:last-child,
.panel > .table-bordered > thead > tr > th:last-child,
.panel > .table-responsive > .table-bordered > tbody > tr > td:last-child,
.panel > .table-responsive > .table-bordered > tbody > tr > th:last-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > td:last-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > th:last-child,
.panel > .table-responsive > .table-bordered > thead > tr > td:last-child,
.panel > .table-responsive > .table-bordered > thead > tr > th:last-child {
  border-right: 0; }

.panel > .table-bordered > tbody > tr:first-child > td,
.panel > .table-bordered > tbody > tr:first-child > th,
.panel > .table-bordered > thead > tr:first-child > td,
.panel > .table-bordered > thead > tr:first-child > th,
.panel > .table-responsive > .table-bordered > tbody > tr:first-child > td,
.panel > .table-responsive > .table-bordered > tbody > tr:first-child > th,
.panel > .table-responsive > .table-bordered > thead > tr:first-child > td,
.panel > .table-responsive > .table-bordered > thead > tr:first-child > th {
  border-bottom: 0; }

.panel > .table-bordered > tbody > tr:last-child > td,
.panel > .table-bordered > tbody > tr:last-child > th,
.panel > .table-bordered > tfoot > tr:last-child > td,
.panel > .table-bordered > tfoot > tr:last-child > th,
.panel > .table-responsive > .table-bordered > tbody > tr:last-child > td,
.panel > .table-responsive > .table-bordered > tbody > tr:last-child > th,
.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > td,
.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > th {
  border-bottom: 0; }

.panel > .table-responsive {
  border: 0;
  margin-bottom: 0; }

.panel-group {
  margin-bottom: 20px; }

.panel-group .panel {
  margin-bottom: 0;
  border-radius: 0; }

.panel-group .panel + .panel {
  margin-top: 5px; }

.panel-group .panel-heading {
  border-bottom: 0; }

.panel-group .panel-heading + .panel-collapse > .list-group,
.panel-group .panel-heading + .panel-collapse > .panel-body {
  border-top: 1px solid #3c3c3c; }

.panel-group .panel-footer {
  border-top: 0; }

.panel-group .panel-footer + .panel-collapse .panel-body {
  border-bottom: 1px solid #3c3c3c; }

.panel-default {
  border-color: #3c3c3c; }

.panel-default > .panel-heading {
  color: #222;
  background-color: #080808;
  border-color: #3c3c3c; }

.panel-default > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #3c3c3c; }

.panel-default > .panel-heading .badge {
  color: #080808;
  background-color: #222; }

.panel-default > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #3c3c3c; }

.panel-primary {
  border-color: #00ff00; }

.panel-primary > .panel-heading {
  color: #222;
  background-color: #00ff00;
  border-color: #00ff00; }

.panel-primary > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #00ff00; }

.panel-primary > .panel-heading .badge {
  color: #00ff00;
  background-color: #222; }

.panel-primary > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #00ff00; }

.panel-danger {
  border-color: #dd0000; }

.panel-danger > .panel-heading {
  color: #222;
  background-color: #dd0000;
  border-color: #dd0000; }

.panel-danger > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #dd0000; }

.panel-danger > .panel-heading .badge {
  color: #dd0000;
  background-color: #222; }

.panel-danger > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #dd0000; }

.embed-responsive {
  position: relative;
  display: block;
  height: 0;
  padding: 0;
  overflow: hidden; }

.embed-responsive .embed-responsive-item,
.embed-responsive embed,
.embed-responsive iframe,
.embed-responsive object,
.embed-responsive video {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  height: 100%;
  width: 100%;
  border: 0; }

.embed-responsive-16by9 {
  padding-bottom: 56.25%; }

.embed-responsive-4by3 {
  padding-bottom: 75%; }

.well {
  min-height: 20px;
  padding: 19px;
  margin-bottom: 20px;
  background-color: #080808;
  border: 1px solid #000;
  border-radius: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05); }

.well blockquote {
  border-color: #ddd;
  border-color: rgba(0, 0, 0, 0.15); }

.well-lg {
  padding: 24px;
  border-radius: 0; }

.well-sm {
  padding: 9px;
  border-radius: 0; }

.btn-group-vertical > .btn-group:after,
.btn-group-vertical > .btn-group:before,
.btn-toolbar:after,
.btn-toolbar:before,
.clearfix:after,
.clearfix:before,
.container-fluid:after,
.container-fluid:before,
.container:after,
.container:before,
.dl-horizontal dd:after,
.dl-horizontal dd:before,
.form-horizontal .form-group:after,
.form-horizontal .form-group:before,
.modal-footer:after,
.modal-footer:before,
.nav:after,
.nav:before,
.navbar-collapse:after,
.navbar-collapse:before,
.navbar-header:after,
.navbar-header:before,
.navbar:after,
.navbar:before,
.pager:after,
.pager:before,
.panel-body:after,
.panel-body:before,
.row:after,
.row:before {
  content: " ";
  display: table; }

.btn-group-vertical > .btn-group:after,
.btn-toolbar:after,
.clearfix:after,
.container-fluid:after,
.container:after,
.dl-horizontal dd:after,
.form-horizontal .form-group:after,
.modal-footer:after,
.nav:after,
.navbar-collapse:after,
.navbar-header:after,
.navbar:after,
.pager:after,
.panel-body:after,
.row:after {
  clear: both; }

.center-block {
  display: block;
  margin-left: auto;
  margin-right: auto; }

.pull-right {
  float: right; }

.pull-left {
  float: left; }

.hide {
  display: none; }

.show {
  display: block; }

.invisible {
  visibility: hidden; }

.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0; }

.hidden {
  display: none; }

.affix {
  position: fixed; }

.visible-lg,
.visible-md,
.visible-sm,
.visible-xs {
  display: none; }

.visible-lg-block,
.visible-lg-inline,
.visible-lg-inline-block,
.visible-md-block,
.visible-md-inline,
.visible-md-inline-block,
.visible-sm-block,
.visible-sm-inline,
.visible-sm-inline-block,
.visible-xs-block,
.visible-xs-inline,
.visible-xs-inline-block {
  display: none; }

@media (max-width: 767px) {
  .visible-xs {
    display: block; }
  table.visible-xs {
    display: table; }
  tr.visible-xs {
    display: table-row; }
  td.visible-xs,
  th.visible-xs {
    display: table-cell; } }

@media (max-width: 767px) {
  .visible-xs-block {
    display: block; } }

@media (max-width: 767px) {
  .visible-xs-inline {
    display: inline; } }

@media (max-width: 767px) {
  .visible-xs-inline-block {
    display: inline-block; } }

@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm {
    display: block; }
  table.visible-sm {
    display: table; }
  tr.visible-sm {
    display: table-row; }
  td.visible-sm,
  th.visible-sm {
    display: table-cell; } }

@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-block {
    display: block; } }

@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-inline {
    display: inline; } }

@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-inline-block {
    display: inline-block; } }

@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md {
    display: block; }
  table.visible-md {
    display: table; }
  tr.visible-md {
    display: table-row; }
  td.visible-md,
  th.visible-md {
    display: table-cell; } }

@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-block {
    display: block; } }

@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-inline {
    display: inline; } }

@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-inline-block {
    display: inline-block; } }

@media (min-width: 1200px) {
  .visible-lg {
    display: block; }
  table.visible-lg {
    display: table; }
  tr.visible-lg {
    display: table-row; }
  td.visible-lg,
  th.visible-lg {
    display: table-cell; } }

@media (min-width: 1200px) {
  .visible-lg-block {
    display: block; } }

@media (min-width: 1200px) {
  .visible-lg-inline {
    display: inline; } }

@media (min-width: 1200px) {
  .visible-lg-inline-block {
    display: inline-block; } }

@media (max-width: 767px) {
  .hidden-xs {
    display: none; } }

@media (min-width: 768px) and (max-width: 991px) {
  .hidden-sm {
    display: none; } }

@media (min-width: 992px) and (max-width: 1199px) {
  .hidden-md {
    display: none; } }

@media (min-width: 1200px) {
  .hidden-lg {
    display: none; } }

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
menu,
nav,
section,
summary {
  display: block; }

audio,
canvas, abbr
progress,
video {
  display: inline-block;
  vertical-align: baseline; }

audio:not([controls]) {
  display: none;
  height: 0; }

[hidden],
template {
  display: none; }

html {
  background-color: #222222;
  color: #9f9f9f;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  -webkit-tap-highlight-color: transparent; }

body {
  margin: 0;
  font-family: monospace; }

a {
  background: transparent; }
  a:focus {
    outline: thin dotted; }
  a:hover, a:active {
    outline: 0; }

abbr[title] {
  border-bottom: 1px dotted; }

b,
strong {
  font-weight: bold; }

small {
  font-size: 80%; }

dfn {
  font-style: italic; }

mark {
  background: #ff0;
  color: #000000; }

code,
kbd,
pre,
samp {
  font-family: monospace, monospace;
  font-size: 1em; }

pre {
  white-space: pre;
  white-space: pre-wrap;
  word-wrap: break-word;
  overflow: auto; }

q {
  quotes: "\201C" "\201D" "\2018" "\2019"; }

q:before, q:after {
  content: '';
  content: none; }

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline; }
  sub::before,
  sup::before {
    content: ''; }

sub {
  bottom: -0.25em; }

sup {
  top: -0.5em; }

img {
  border: 0; }

svg:not(:root) {
  overflow: hidden; }

figure {
  margin: 0; }

fieldset {
  border: 1px solid #c0c0c0;
  margin: 0 2px;
  padding: 0.35em 0.625em 0.75em; }

legend {
  border: 0;
  padding: 0;
  white-space: normal; }

button,
input,
optgroup,
select,
textarea {
  font-family: inherit;
  font-size: 100%;
  margin: 0;
  vertical-align: baseline; }

button, input {
  line-height: normal; }

button,
select {
  text-transform: none; }

button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
  -webkit-appearance: button;
  cursor: pointer; }

button[disabled],
input[disabled] {
  cursor: default; }

button::-moz-focus-inner, input::-moz-focus-inner {
  border: 0;
  padding: 0; }

textarea {
  overflow: auto;
  vertical-align: top; }

table {
  border-collapse: collapse;
  border-spacing: 0; }

input[type="search"] {
  -webkit-appearance: textfield;
  -moz-box-sizing: content-box;
  -webkit-box-sizing: content-box;
  box-sizing: content-box; }
  input[type="search"]::-webkit-search-cancel-button, input[type="search"]::-webkit-search-decoration {
    -webkit-appearance: none; }

input[type="checkbox"], input[type="radio"] {
  box-sizing: border-box;
  padding: 0; }

optgroup {
  font-weight: bold; }

td,
th {
  padding: 0; }

:after,
:before {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box; }

hr {
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  height: 0; }

pre,
blockquote {
  border: 1px solid #999;
  page-break-inside: avoid; }

*,
*:before,
*:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box; }

.btn {
  display: inline-block;
  margin: 1rem 0;
  text-align: center;
  vertical-align: middle;
  touch-action: manipulation;
  cursor: pointer;
  background-image: none;
  border: 1px solid transparent;
  white-space: nowrap;
  padding: 0.7rem;
  line-height: 1.428571429;
  border-radius: 0;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  color: #222222;
  background-color: #6f6f6f; }
  .btn.active, .btn:active {
    outline: 0;
    background-image: none;
    -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125); }

.btn-primary {
  color: #222222;
  background-color: #00ff00; }
  .btn-primary.active, .btn-primary.focus, .btn-primary:active, .btn-primary:focus, .btn-primary:hover {
    color: #222222;
    background-color: #00cc00; }
  .btn-primary.active, .btn-primary:active {
    background-image: none; }
  .btn-primary.disabled, .btn-primary.disabled.active, .btn-primary.disabled.focus, .btn-primary.disabled:active, .btn-primary.disabled:focus, .btn-primary.disabled:hover, .btn-primary[disabled], .btn-primary[disabled].active, .btn-primary[disabled].focus, .btn-primary[disabled]:active, .btn-primary[disabled]:focus, .btn-primary[disabled]:hover {
    background-color: #00ff00; }

.btn-block {
  display: block;
  width: 100%; }

.content {
  font-size: 1.2rem; }
  .content figure {
    margin: 2rem 0; }
  .content .entry-content img {
    width: 100%;
    height: auto; }
  .content figcaption {
    padding: 0.5rem 0; }

.w-100 {
  width: 100%; }

.h-100 {
  height: 100%; }

.d-flex {
  display: flex; }

.d-none {
  display: none; }

.p-0 {
  padding: 0; }

.px-1 {
  padding: 0 1em 0 1em; }

.m-0 {
  margin: 0; }

.mt-1 {
  margin-top: 1em; }

.mb-1 {
  margin-bottom: 1em; }

.align-items-center {
  align-items: center; }

.justify-content-center {
  justify-content: center; }

.justify-content-between {
  justify-content: space-between; }

/* set base values */
/* type scale */
/* spacing values */
body {
  font-size: 1rem;
  font-family: monospace;
  color: #9f9f9f;
  line-height: 1.42857; }

h1, h2, h3, h4, form legend {
  color: #00cc00;
  margin: 2rem 0;
  line-height: 1.1; }

.h1, .h2, .h3, .h4, .h5, .h6,
h1, h2, h3, h4, h5, h6 {
  font-family: Hacked-KerX, monospace;
  font-weight: 500; }

/* text size */
.text-xxxl {
  font-size: 4.48403rem; }

h1, .text-xxl {
  font-size: 3.32151rem; }

h2, .text-xl {
  font-size: 2.46038rem; }

h3, .text-lg {
  font-size: 1.8225rem; }

h4, .text-md {
  font-size: 1.35rem; }

.text-sm, small {
  font-size: 0.74074rem; }

.text-xs {
  font-size: 1rem; }

/*# sourceMappingURL=main-amp.css.map */
    </style>

  </head>
  <body>
    <amp-auto-ads type="adsense" data-ad-client="ca-pub-3780041077137992"></amp-auto-ads>
    <header>
      <nav class="navbar navbar-default navbar-static-top">
      <amp-state id="navbarState">
        <script type="application/json">
          {
            "navbarActive": false
          }
        </script>
      </amp-state>
        <div class="container">
          <div class="navbar-header">
            <button
              type="button"
              class="navbar-toggle"
              data-toggle="collapse"
              data-target="#navbar"
              aria-expanded="false"
              aria-controls="navbar"
              on="tap:AMP.setState({ navbarActive: !navbarActive })"
              [class]="navbarActive ? 'navbar-toggle' : 'navbar-toggle collapsed'">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <span class="m-0 h1">
              <a class="navbar-brand" href="<?= get_bloginfo('url') ?>">
                <!-- <img src="<?php // get_template_directory_uri() ?>/assets/images/logo-jejakcyber.png" alt=""> -->
                <?php bloginfo( 'name' ); ?>
              </a>
            </span>
          </div>
          <div
            id="navbar"
            class="navbar-collapse collapse"
            [class]="navbarActive ? 'navbar-collapse collapse' : 'navbar-collapse'">
              <ul class="nav navbar-nav navbar-right">
                <!-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">CLICK ME!!!<span class="caret"></span> </a>
                  <ul class="dropdown-menu" role="menu">
                      <li><a href="javascript:void(0)">Ooh a link</a></li>
                      <li><a href="javascript:void(0)">Two links?! Oh boy</a></li>
                      <li><a href="javascript:void(0)">Now you're being ridiculous</a></li>
                      <li class="divider"></li>
                      <li class="dropdown-header">Much Wow</li>
                      <li><a href="javascript:void(0)">So link</a></li>
                      <li><a href="javascript:void(0)">Many internet</a></li>
                  </ul>
                </li> -->
                <?php $categories = get_categories( ['orderby' => 'id', 'order' => 'DESC'] );
                foreach( $categories as $category ) : ?>
                  <li <?php if (is_category()) {
                      echo (get_the_category()[0]->slug == $category->slug) ? 'class="active"' : '' ;
                  } ?> >
                    <a href="<?= esc_url( get_category_link( $category->term_id ) ) ?>" rel="nofollow"><?= esc_html( $category->name ) ?></a>
                  </li>
                <?php endforeach; ?>
              </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- /.header -->