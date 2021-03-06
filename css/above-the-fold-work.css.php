html {
  font-family: sans-serif;
  
  -ms-text-size-adjust: 100%;
  
  -webkit-text-size-adjust: 100%;
   }


body {
  margin: 0; }
footer,
nav,
section{
  display: block; }



a {
  background: transparent; }


h1 {
  font-size: 2em;
  margin: 0.67em 0; }



img {
  border: 0; }


code{
  font-family: monospace, monospace;
  font-size: 1em; }

html {
  font-size: 100%;
  line-height: 1.5em; }

*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box; }


.this-sidebar {
  width: 25%;
  float: left;
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  background: #D32F2F;
  color: #FFFFFF;
  z-index: 100; }
  .this-sidebar #bars {
    display: none; }
  @media all and (max-width: 64em) {
    .this-sidebar {
      width: 100%;
      float: left;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
      height: auto; }
      .this-sidebar #bars {
        display: block;
        padding: 10px 20px;
        right: 0;
        top: 20px;
        position: absolute;
        font-size: 1.5em;
        line-height: 1.5em; } }

.name {
  font-size: 1.125em;
  line-height: 1.6em;
  font-weight: 700; }

.job {
  color: #FFCDD2; }

nav:after {
  content: "";
  display: table;
  clear: both; }
@media all and (max-width: 64em) {
  nav {
    display: none; } }
nav ul {
  margin: 0;
  padding: 0;
  overflow: auto; }
  nav ul:after {
    content: "";
    display: table;
    clear: both; }
  @media all and (max-width: 64em) {
    nav ul {
      height: auto !important; } }
  nav ul li {
    margin: 0;
    padding: 0;
    list-style: none;
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    border-top: 1px solid rgba(255, 255, 255, 0.1); }
    nav ul li:after {
      content: "";
      display: table;
      clear: both; }
    nav ul li:first-child {
      border-top: 0; }
    nav ul li:last-child {
      box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1); }
    nav ul li a{
      width: 66.66667%;
      float: left;
      padding: 0.75em 0;
      float: none;
      margin: 0 auto;
      font-size: 1.125em;
      line-height: 1.6em;
      display: block;
      text-decoration: none;
      color: #FFFFFF;
      font-family: 'Source Code Pro'; }
      @media all and (max-width: 64em) {
        nav ul li a{
          width: 100%;
          float: left;
          padding: 0.75em 8.33333%; } }
      nav ul li a i{
        padding: 0 10px 0 0; }

html {
  box-sizing: border-box;
  height: 100%; }

*,
*:before,
*:after {
  box-sizing: inherit; }

.row:after {
  content: "";
  display: table;
  clear: both; }

body {
  margin: 0;
  padding: 0;
  height: 100%;
  font-family: 'Merriweather';
  background: #f9f9f9;
  max-width: 100%;
  margin-left: auto;
  margin-right: auto;
  -webkit-overflow-scrolling: touch; }
  body:after {
    content: " ";
    display: block;
    clear: both; }
  @media all and (max-width: 64em) {
    body {
      padding: 101px 0 0; } }

.sub-container-sidebar {
  width: 66.66667%;
  float: left;
  margin: 0 auto;
  float: none;
  padding: 3em 0 1.5em; }
  @media all and (max-width: 64em) {
    .sub-container-sidebar {
      width: 100%;
      float: left;
      float: none;
      padding: 1.5em 8.33333%; } }

.page-container {
  width: 75%;
  float: left;
  float: right; }
  @media all and (max-width: 64em) {
    .page-container {
      width: 100%;
      float: left;
      padding: 1.5em 0; } }
  @media all and (max-width: 30em) {
    .page-container {
      padding: 0; } }

.sub-container {
  width: 77.77778%;
  float: left;
  float: none;
  padding: 1.5em 0;
  margin: 0 auto; }
  .sub-container.work:after {
    content: "";
    display: table;
    clear: both; }
  @media all and (max-width: 30em) {
    .sub-container {
      width: 100%;
      float: left;
      margin: 0 auto;
      padding: 0em 4.16667%;
      float: none; } }
  .sub-container .work-item {
    width: 47.77778%;
    float: left;
    background: #FFFFFF;
    padding: 1.5em;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.155); }
    .sub-container .work-item img {
      margin: 0 0 1.5em; }
    .sub-container .work-item:nth-child(odd) {
      margin: 0 2.08333% 4.16667% 0; }
    @media all and (max-width: 90em) {
      .sub-container .work-item {
        width: 100%;
        float: left; }
        .sub-container .work-item:nth-child(odd) {
          margin: 4.16667% 0; } }

h1 {
  font-size: 2.25em;
  line-height: 1.33333em;
  color: #F44336;
  font-weight: 700;
  margin: 0 0 0.75em 0; }
  @media all and (max-width: 30em) {
    h1 {
      font-size: 1.625em;
      line-height: 1.29231em;
      margin: 0.75em 0; } } li {
  font-size: 1em;
  line-height: 1.8em;
  font-weight: 400; }
  @media all and (max-width: 30em) { li {
      font-size: 0.875em;
      line-height: 1.71429em; } } code {
  font-family: 'Source Code Pro' !important; }

a{
  color: #F44336;
  text-decoration: none; }

.social-cont {
  font-size: 2em;
  text-align: left;
  margin: 0;
  width: 100%;
  overflow: auto;
  text-align: center; }
  @media all and (max-width: 48em) {
    .social-cont {
      width: 100%;
      float: left;
      text-align: center; } }
  .social-cont .social-box {
    width: 25%;
    float: left;
    overflow: hidden;
    border-radius: 0;
    margin: 0;
    padding: 15px 0; }
    .social-cont .social-box a {
      display: block;
      width: 100%;
      height: 100%; }
  .social-cont i.social-ico {
    color: white; }

.footer {
  z-index: 100;
  width: 25%;
  float: left;
  position: fixed;
  bottom: 0;
  left: 0;
  background: #D32F2F;
  color: #FFFFFF;
  font-size: 0.8125em;
  line-height: 1.84615em;
  text-align: left; }
  .footer .sub-container-sidebar {
    width: 100%;
    float: left;
    padding: 0 8.33333% 8.33333%; }
  @media all and (max-width: 64em) {
    .footer {
      width: 100%;
      float: left;
      padding: 1.5em 0;
      position: static; } }
  .footer a{
    color: #FFFFFF;
    text-decoration: underline; }

@media all and (max-width: 64em) {
  .site-info {
    width: 100%;
    float: left;
    text-align: center; } }

.footer-sep {
  border-top: 1px solid rgba(0, 0, 0, 0.1);
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  border-left: 0;
  border-right: 0;
  width: 100%;
  margin: 1.5em 0;
  display: inline-block; }
  @media all and (max-width: 64em) {
    .footer-sep {
      margin: 1.5em 0 0; } }

img {
  width: 100%;
  border: 0;
  vertical-align: bottom; }

#info_cookie {
  background: #222;
  color: white;
  padding: 10px 20px;
  font-size: 12px;
  line-height: 16px;
  font-family: 'Source Code Pro';
  text-align: center;
  position: fixed;
  z-index: 999;
  bottom: 0;
  left: 0;
  width: 100%; }
  @media all and (min-width: 1025px) {
    #info_cookie {
      position: static;
      float: right;
      width: 75%; } }

.cookie-btn {
  display: inline-block;
  padding: 5px 20px;
  font-size: 14px;
  background: white;
  background-image: linear-gradient(to top, #eeeeee, #ffffff);
  color: black;
  margin: 10px 0 0 0;
  border-radius: 3px;
  border-bottom: 2px solid lightgrey;
  text-transform: capitalize;
  cursor: pointer; }
  .cookie-btn:nth-child(3) {
    margin: 0 0 0 10px; }
  .cookie-btn a {
    color: inherit;
    text-decoration: inherit;
    cursor: inherit; }

.cookie-visible {
  display: block !important; }