<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE_FARMER</title>
    <link rel="stylesheet" href="css/styles.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    <section class="top-page">
        <header class="header">
            <img src="images/logo1-re.png" alt="Logo du site">
            <nav class="nav">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="blog.php ">Blog</a></li>
                <li><a href="recrutement.php">Recrutement</a></li>
                <li><a href="forum.php">Forum</a></li>
                <li><div class="box">
	                    <a class="button" href="#popup1">Compte</a>
                    </div>
                    <div id="popup1" class="overlay">
	                    <div class="popup">
                            <div id="container">
                                <form action="verification.php" method="POST">
                                    <h2>Connexion</h2>
                                    <a class="close" href="#">&times;</a>

                                    <section class="info-compte">
                                        <input type="text" placeholder="Email" name="username" required>
                                        <input type="password" placeholder="Mot de passe" name="password" required>
                                        <input type="submit" id='submit' value='VALIDER' >

                                        <?php
                                        if(isset($_GET['erreur'])){
                                            $err = $_GET['erreur'];
                                            if($err==1 || $err==2)
                                                echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                                        }
                                        ?>
                                    </section>
                                </form>
                            </div>

                            <section class="pas-membre">
                                <p class="membre">Si vous n'avez pas de compte. <a href="inscription.html">Rejoignez-nous</a></p></p>
                            </section>

	                    </div>
                    </div>
                </li>
            </nav>
        </header>
        
    </section>
    
    
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html class="supernova"><head><script>console.warn("Server Side Rendering => render-from: frontend");</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&amp;url=https%3A%2F%2Fform.jotform.com%2F222772263448359" title="oEmbed Form">
<link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&amp;url=https%3A%2F%2Fform.jotform.com%2F222772263448359" title="oEmbed Form">
<meta property="og:title" content="Votre candidature" >
<meta property="og:url" content="https://form.jotform.com/222772263448359" >
<meta property="og:description" content="Please click the link to complete this form." >
<meta name="slack-app-id" content="AHNMASS8M">
<link rel="shortcut icon" href="https://cdn.jotfor.ms/assets/img/favicons/favicon-2021.svg">
<meta property="og:image" content="https://cdn.jotfor.ms/assets/img/favicons/favicon-2021.svg" />
<link rel="canonical" href="https://form.jotform.com/222772263448359" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1" />
<meta name="HandheldFriendly" content="true" />
<title>Votre candidature</title>
<style type="text/css">@media print{.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style>
<link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?themeRevisionID=5eb3b4ae85bd2e1e2966db96"/>
<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/payment/payment_styles.css?3.3.36253" />
<link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/css/styles/payment/payment_feature.css?3.3.36253" />
<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
*,
*:after,
*:before {
  box-sizing: border-box;
}
.form-all {
  font-family: "Inter", sans-serif;
}
.main .jotform-form {
  width: 100%;
  padding: 0 3%;
}
.form-all {
  display: flex;
  flex-direction: column;
  margin: 72px auto;
  width: 100%;
  max-width: 752px;
}
.form-line.form-line-active {
  -webkit-transition-property: all;
  -moz-transition-property: all;
  -ms-transition-property: all;
  -o-transition-property: all;
  transition-property: all;
  -webkit-transition-duration: 0.3s;
  -moz-transition-duration: 0.3s;
  -ms-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease;
  -moz-transition-timing-function: ease;
  -ms-transition-timing-function: ease;
  -o-transition-timing-function: ease;
  transition-timing-function: ease;
  background-color: #ffffe0;
}
.form-label-left,
.form-label-right {
  width: 230px;
}
.form-label {
  display: flex;
  font-size: 16px;
  font-weight: 500;
  word-break: break-word;
}
.form-label.form-label-auto {
  width: 100%;
  margin-bottom: 14px;
}
.form-label-top {
  width: 100%;
  margin-bottom: 14px;
}
.form-label:not(.form-label-top) {
  margin-right: 10px;
  margin-top: .625em;
  margin-bottom: .625em;
}
.form-label-right {
  justify-content: flex-end;
  text-align: right;
}
.form-all {
  font-size: 16px;
}
li.form-line {
  margin-top: 12px;
  margin-bottom: 12px;
}
.form-line {
  padding: 12px 10px;
}
.form-section {
  padding: 0px 38px;
}
.form-textbox,
.form-textarea {
  padding: 1px 10px -1px 10px;
}
.form-textbox,
.form-textarea,
.form-radio-other-input,
.form-checkbox-other-input,
.form-captcha input,
.form-spinner input {
  background-color: #ffffff;
}
.form-label {
  font-family: "Inter", sans-serif;
}
.form-line-column {
  width: calc(50% - 8px);
}
.form-line-column.form-line-column-clear {
  width: calc(43%);
}
[data-type="control_dropdown"] .form-input,
[data-type="control_dropdown"] .form-input-wide {
  width: 310px !important;
}
.form-checkbox-item label,
.form-checkbox-item span,
.form-radio-item label,
.form-radio-item span {
  color:;
}
.form-radio-item,
.form-checkbox-item {
  padding-bottom: 0px !important;
}
.form-radio-item:last-child,
.form-checkbox-item:last-child {
  padding-bottom: 0;
}
.form-single-column .form-checkbox-item,
.form-single-column .form-radio-item {
  width: 100%;
}
.form-checkbox-item .editor-container div,
.form-radio-item .editor-container div {
  position: relative;
}
.form-checkbox-item .editor-container div:before,
.form-radio-item .editor-container div:before {
  display: inline-block;
  vertical-align: middle;
  left: 0;
  width: 20px;
  height: 20px;
}
.form-checkbox-item input,
.form-radio-item input {
  margin-top: 2px;
}
.form-checkbox-item .form-checkbox:checked + label:before,
.form-checkbox-item .form-checkbox:checked + span:before {
  background-color: #2e69ff;
  border-color: #2e69ff;
}
.form-radio-item .form-radio:checked + label:before,
.form-radio-item .form-radio:checked + span:before {
  border-color: #2e69ff;
}
.form-radio-item .form-radio:checked + label:after,
.form-radio-item .form-radio:checked + span:after {
<}
.form-all .form-pagebreak-back,
.form-all .form-pagebreak-next {
  font-size: 1em;
  padding: 9px 15px;
  font-family: "Inter", sans-serif;
  font-size: 16px;
  font-weight: normal;
}
.form-all .qq-upload-button,
.form-all .form-submit-button,
.form-all .form-submit-reset,
.form-all .form-submit-print {
  font-size: 1em;
  padding: 9px 15px;
  font-family: "Inter", sans-serif;
  font-size: 16px;
  font-weight: normal;
}
.form-iframe-container .formFooter {
  font-size: 16px;
}
.form-iframe-container .formFooter-leftSide {
  margin-left: 52px;
  margin-right: 0;
}
.form-iframe-container .formFooter-rightSide {
  position: absolute;
  right: 34%;
}
li[data-type="control_image"] div {
  text-align: left;
}
li[data-type="control_image"] img {
  border: none;
  border-width: 0px !important;
  border-style: solid !important;
  border-color: false !important;
}
.supernova {
  height: 100%;
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center top;
  background-repeat: repeat;
}
.supernova {
  background-image: none;
}
#stage {
  background-image: none;
}
/* | */
.form-all {
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center top;
  background-repeat: repeat;
}
.form-header-group {
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center top;
}
.header-large h1.form-header {
  font-size: 2em;
}
.header-large h2.form-header {
  font-size: 1.5em;
}
.header-large h3.form-header {
  font-size: 1.17em;
}
.header-large h1 + .form-subHeader {
  font-size: 1em;
}
.header-large h2 + .form-subHeader {
  font-size: .875em;
}
.header-large h3 + .form-subHeader {
  font-size: .75em;
}
.header-default h1.form-header {
  font-size: 2em;
}
.header-default h2.form-header {
  font-size: 1.5em;
}
.header-default h3.form-header {
  font-size: 1.17em;
}
.header-default h1 + .form-subHeader {
  font-size: 1em;
}
.header-default h2 + .form-subHeader {
  font-size: .875em;
}
.header-default h3 + .form-subHeader {
  font-size: .75em;
}
.header-small h1.form-header {
  font-size: 2em;
}
.header-small h2.form-header {
  font-size: 1.5em;
}
.header-small h3.form-header {
  font-size: 1.17em;
}
.header-small h1 + .form-subHeader {
  font-size: 1em;
}
.header-small h2 + .form-subHeader {
  font-size: .875em;
}
.header-small h3 + .form-subHeader {
  font-size: .75em;
}
.form-header-group {
  text-align: left;
}
.form-header-group {
  font-family: "Inter", sans-serif;
}
div.form-header-group {
  margin: 0px -38px;
}
div.form-header-group {
  padding: 40px 52px;
}
.ie-8 .form-all {
  margin-top: auto;
  margin-top: initial;
}
.ie-8 .form-all:before {
  display: none;
}
[data-type="control_clear"] {
  display: none;
}
/* | */
@media screen and (max-width: 480px), screen and (max-device-width: 767px) and (orientation: portrait), screen and (max-device-width: 415px) and (orientation: landscape) {
  .testOne {
    letter-spacing: 0;
  }
  .form-all {
    border: 0;
    max-width: initial;
  }
  .form-sub-label-container {
    width: 100%;
    margin: 0;
    margin-right: 0;
    float: left;
    box-sizing: border-box;
  }
  span.form-sub-label-container + span.form-sub-label-container {
    margin-right: 0;
  }
  .form-sub-label {
    white-space: normal;
  }
  .form-submit-button,
  .form-submit-print,
  .form-submit-reset {
    width: 100%;
    margin-left: 0!important;
  }
  div[id*=at_] {
    font-size: 14px;
    font-weight: 700;
    height: 8px;
    margin-top: 6px;
  }
}
.form-line-error {
  overflow: hidden;
  -webkit-transition-property: none;
  -moz-transition-property: none;
  -ms-transition-property: none;
  -o-transition-property: none;
  transition-property: none;
  -webkit-transition-duration: 0.3s;
  -moz-transition-duration: 0.3s;
  -ms-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease;
  -moz-transition-timing-function: ease;
  -ms-transition-timing-function: ease;
  -o-transition-timing-function: ease;
  transition-timing-function: ease;
  background-color: #fff4f4;
}
.form-line-error .form-error-message {
  background-color: #f23a3c;
  clear: both;
  float: none;
}
.form-line-error .form-error-message .form-error-arrow {
  border-bottom-color: #f23a3c;
}
.form-line-error input:not(#coupon-input),
.form-line-error textarea,
.form-line-error .form-validation-error {
  border: 1px solid #f23a3c;
  box-shadow: 0 0 3px #f23a3c;
}
.supernova {
  background-color: #ffffff;
}
.supernova body {
  background-color: transparent;
}
/* | */
@media screen and (min-width: 480px) {
  .supernova .form-all {
    box-shadow: 0 4px 4px rgba(87, 100, 126, 0.21);
  }
}
/* | */
.supernova .form-all,
.form-all {
  background-color: #ffffff;
}
.form-header-group {
  border-color: #e6e6e6;
}
.form-matrix-table tr {
  border-color: #e6e6e6;
}
.form-matrix-table tr:nth-child(2n) {
  background-color: #f2f2f2;
}
.form-all {
  color: #152e6b;
}
.form-header-group .form-header {
  color: #152e6b;
}
.form-header-group .form-subHeader {
  color: #1d4096;
}
.form-sub-label {
  color: #1d4096;
}
.form-label-top,
.form-label-left,
.form-label-right,
.form-html {
  color: #152e6b;
}
.form-iframe-container {
  font-size: 16px;
}
.radio-button-style-item {
  background-position: center;
  background-repeat: no-repeat;
  background-size: 40px;
  padding: 0;
  margin: 0 12px 12px 0;
  background-color: #4E4E4E;
  border: 1px solid #696969;
}
.radio-button-style-item img {
  opacity: 0;
}
.radio-button-style-item:nth-child(1) {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='//www.w3.org/2000/svg' fill='none' viewBox='0 0 60 62'%3E%3Cdefs/%3E%3Crect width='24' height='24' x='.5' y='.5' fill='%23fff' stroke='%23C3CAD8' rx='12'/%3E%3Crect width='24' height='24' x='.5' y='37.5' fill='%23fff' stroke='%232E69FF' rx='12'/%3E%3Ccircle cx='12.5' cy='49.5' r='8.5' fill='%232E69FF'/%3E%3Crect width='24' height='24' x='35.5' y='37.5' fill='%23fff' stroke='%23C3CAD8' rx='1.5'/%3E%3Crect width='24' height='24' x='35.5' y='37.5' fill='%232E69FF' stroke='%232E69FF' rx='1.5'/%3E%3Cpath stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M43 49.5l3.3 3.5 6.7-7'/%3E%3Crect width='24' height='24' x='35.5' y='.5' fill='%23fff' stroke='%23C3CAD8' rx='1.5'/%3E%3C/svg%3E");
}
.radio-button-style-item:nth-child(2) {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='//www.w3.org/2000/svg' fill='none' viewBox='0 0 60 63'%3E%3Cdefs/%3E%3Crect width='24' height='24' x='.5' y='.5' fill='%23fff' stroke='%23C3CAD8' rx='12'/%3E%3Crect width='24' height='24' x='.5' y='37.5' fill='%23fff' stroke='%232E69FF' rx='12'/%3E%3Crect width='24' height='24' x='35.5' y='37.5' fill='%23fff' stroke='%23C3CAD8' rx='1.5'/%3E%3Crect width='24' height='24' x='35.5' y='37.5' fill='%232E69FF' stroke='%232E69FF' rx='1.5'/%3E%3Crect width='24' height='24' x='35.5' y='.5' fill='%23fff' stroke='%23C3CAD8' rx='1.5'/%3E%3Crect width='24.9' height='24.9' x='.2' y='37.1' fill='%232E69FF' rx='12.5'/%3E%3Ccircle cx='12.7' cy='49.6' r='3.7' fill='%23fff'/%3E%3Crect width='24' height='24' x='35.5' y='37.5' fill='%23fff' stroke='%23C3CAD8' rx='1.5'/%3E%3Crect width='24' height='24' x='35.5' y='37.5' fill='%232E69FF' stroke='%232E69FF' rx='1.5'/%3E%3Crect width='7' height='7' x='44' y='46' fill='%23fff' rx='1'/%3E%3C/svg%3E");
}
.radio-button-style-item:nth-child(3) {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='//www.w3.org/2000/svg' fill='none' viewBox='0 0 62 63'%3E%3Cdefs/%3E%3Crect width='24' height='24' x='.5' y='.5' fill='%23fff' stroke='%23C3CAD8' rx='12'/%3E%3Crect width='22' height='22' x='1.5' y='1.5' stroke='%23C3CAD8' stroke-width='3' rx='11'/%3E%3Cpath fill='%232E69FF' d='M9.3 47c-.7-.8-1.8-.8-2.5 0-.8.7-.8 1.8 0 2.5l3.6 3.7c.4.4.8.6 1.3.6.6 0 1-.2 1.3-.6l12.9-13c.7-.7.7-1.8 0-2.5-.7-.8-1.8-.8-2.6 0L11.7 49.3 9.3 47z'/%3E%3Cpath fill='%232E69FF' d='M12.7 62.1c7 0 12.6-5.5 12.6-12.5 0-1-.8-1.8-1.8-1.8-1.1 0-1.8.7-1.8 1.8 0 5-4 9-9 9s-8.9-4-8.9-9a8.8 8.8 0 0112-8.4c.9.4 2-.2 2.3-1 .4-1-.2-2-1-2.4a12 12 0 00-4.4-.7C5.7 37.1.2 42.7.2 49.6c0 7 5.6 12.5 12.5 12.5z'/%3E%3Cmask id='a' fill='%23fff'%3E%3Crect width='25' height='25' x='35' rx='2'/%3E%3C/mask%3E%3Crect width='25' height='25' x='35' fill='%23fff' stroke='%23C3CAD8' stroke-width='6' mask='url(%23a)' rx='2'/%3E%3Cpath fill='%232E69FF' d='M51.5 39.8a1.5 1.5 0 000-3v3zm8.1 9.3a1.5 1.5 0 10-3 0h3zm-3.5 10h-17v3h17v-3zm-17.6-.6V40.3h-3v18.2h3zm.5-18.7h12.5v-3H39v3zm20.6 18.7v-9.4h-3v9.4h3zM39 59a.5.5 0 01-.5-.5h-3c0 2 1.6 3.5 3.5 3.5v-3zm17.1 3c2 0 3.5-1.5 3.5-3.5h-3c0 .3-.2.5-.5.5v3zM38.5 40.3c0-.3.3-.5.5-.5v-3c-1.9 0-3.5 1.6-3.5 3.5h3zM44.8 46.8c-.7-.8-1.8-.8-2.5 0-.8.7-.8 1.8 0 2.5l3.6 3.7c.3.3.7.5 1.3.5.5 0 .9-.2 1.2-.5l12.7-12.8c.7-.7.7-1.8 0-2.5-.7-.8-1.8-.8-2.6 0L47.2 49l-2.4-2.3z'/%3E%3C/svg%3E");
}
.radio-button-style-item:nth-child(4) {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='//www.w3.org/2000/svg' fill='none' viewBox='0 0 53 57'%3E%3Cdefs/%3E%3Ccircle cx='9' cy='9' r='9' fill='%23C3CAD8'/%3E%3Cpath stroke='%23C3CAD8' stroke-linecap='round' stroke-linejoin='round' stroke-width='4' d='M37 9l4.3 5L50 4'/%3E%3Ccircle cx='9' cy='47.8' r='9' fill='%232E69FF'/%3E%3Cpath stroke='%232E69FF' stroke-linecap='round' stroke-linejoin='round' stroke-width='4' d='M37.4 48.5l4.1 4.6 8.2-9.3'/%3E%3C/svg%3E");
}
.radio-button-style-item:nth-child(5) {
  display: none;
}
.radio-button-style-item:nth-child(6) {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='//www.w3.org/2000/svg' fill='none' viewBox='0 0 45 63'%3E%3Cdefs/%3E%3Crect width='45' height='26' y='37' fill='%232E69FF' rx='13'/%3E%3Ccircle cx='31' cy='50' r='10' fill='%23fff'/%3E%3Crect width='45' height='26' fill='%23C3CAD8' rx='13'/%3E%3Ccircle cx='14' cy='13' r='10' fill='%23fff'/%3E%3C/svg%3E");
}
.radio-button-style-item:nth-child(7) {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='//www.w3.org/2000/svg' fill='none' viewBox='0 0 45 63'%3E%3Cdefs/%3E%3Crect width='45' height='26' y='37' fill='%232E69FF' rx='13'/%3E%3Ccircle cx='31' cy='50' r='10' fill='%23fff'/%3E%3Ccircle cx='27.4' cy='48.5' r='1.4' fill='%232E69FF'/%3E%3Ccircle cx='34.5' cy='48.5' r='1.4' fill='%232E69FF'/%3E%3Cpath fill='%232E69FF' d='M31 56c2 0 3.5-1.3 3.5-3h-7c0 1.7 1.6 3 3.5 3z'/%3E%3Crect width='45' height='26' fill='%23C3CAD8' rx='13'/%3E%3Ccircle cx='14' cy='13' r='10' fill='%23fff'/%3E%3Ccircle cx='10.4' cy='11.5' r='1.4' fill='%23C3CAD8'/%3E%3Ccircle cx='17.5' cy='11.5' r='1.4' fill='%23C3CAD8'/%3E%3Cpath fill='%23C3CAD8' d='M14 16c-2 0-3.5 1.3-3.5 3h7c0-1.7-1.6-3-3.5-3z'/%3E%3C/svg%3E");
}
#propsFormLayout #enableFormCols {
  display: none;
}
#propsLabels .sb-input-color + .sb-seperator + .sb-col-half + .sb-col-half.even {
  display: none;
}
#propsRadio .sb-option.sb-col-half.even.sb-input-color + .sb-seperator + .sb-option,
#propsRadio .sb-option + .sb-seperator + .sb-option.sb-col-half {
  display: none;
}
#propsRadio .sb-option.sb-col-half.even.sb-input-color {
  padding-left: 18px;
  padding-right: 12px;
}
#propsPageBreaks .sb-option:nth-child(20),
#propsPageBreaks .sb-seperator:nth-child(21) {
  display: none;
}
#propsButtons .sb-option:nth-child(20),
#propsButtons .sb-seperator:nth-child(21) {
  display: none;
}
#buttonSizeChangeContainer {
  display: none;
}
#buttonSizeChangeContainer + .sb-option.sb-col-half.even {
  padding-left: 18px;
  padding-right: 12px;
}

/*__INSPECT_SEPERATOR__*/
.form-textbox {
    max-width : 80;
}

.form-sub-label {
    font-size : 13px;
}



.form-sub-label-container {
padding-right: 30px
}

#input_13_phone
{
padding-right: 70px

}
    /* Injected CSS Code */
</style>

<script src="https://cdn01.jotfor.ms/static/prototype.forms.js?3.3.36253" type="text/javascript"></script>
<script src="https://cdn02.jotfor.ms/static/jotform.forms.js?3.3.36253" type="text/javascript"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.js"></script>
<script src="https://cdn03.jotfor.ms/js/vendor/jquery-1.8.0.min.js?v=3.3.36253" type="text/javascript"></script>
<script defer src="https://cdn01.jotfor.ms/js/vendor/maskedinput.min.js?v=3.3.36253" type="text/javascript"></script>
<script defer src="https://cdn02.jotfor.ms/js/vendor/jquery.maskedinput.min.js?v=3.3.36253" type="text/javascript"></script>
<script src="https://cdn03.jotfor.ms/js/vendor/imageinfo.js?v=3.3.36253" type="text/javascript"></script>
<script src="https://cdn01.jotfor.ms/file-uploader/fileuploader.js?v=3.3.36253"></script>
<script src="https://js.jotform.com/vendor/postMessage.js?3.3.36253" type="text/javascript"></script>
<script src="https://js.jotform.com/WidgetsServer.js?v=1664956293753" type="text/javascript"></script>
<script type="text/javascript">	JotForm.newDefaultTheme = true;
	JotForm.extendsNewTheme = false;
	JotForm.singleProduct = false;
	JotForm.newPaymentUIForNewCreatedForms = false;
	JotForm.newPaymentUI = true;

	JotForm.init(function(){
	/*INIT-START*/
      setTimeout(function() {
          $('input_12').hint('Prénom@gmail.com');
       }, 20);

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("15", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.onTranslationsFetch(function() { JotForm.setCalendar("15", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); });
 JotForm.formatDate({date:(new Date()), dateField:$("id_"+15)});
 JotForm.displayLocalTime("input_15_hourSelect", "input_15_minuteSelect","input_15_ampm", "input_15_timeInput", false);
      setTimeout(function() {
          JotForm.initMultipleUploads();
      }, 2);
	/*INIT-END*/
	});

   JotForm.prepareCalculationsOnTheFly([null,null,null,null,null,null,null,null,null,{"name":"_nbsp_","qid":"9","text":"Postuler ","type":"control_button"},{"name":"candidaturePour10","qid":"10","text":"Votre candidature","type":"control_head"},{"name":"nomComplet","qid":"11","text":"Nom complet","type":"control_fullname"},{"name":"adresseEmail","qid":"12","text":"Adresse E-mail","type":"control_email"},{"name":"numeroDe","qid":"13","text":"Numero de telephone","type":"control_phone"},{"name":"candidatureAu","qid":"14","text":"Candidature au poste de","type":"control_dropdown"},{"name":"disponibleA15","qid":"15","text":"Disponible a partir de : ","type":"control_datetime"},{"name":"adresseActuelle","qid":"16","text":"Adresse actuelle","type":"control_address"},{"name":"deposezVotre","qid":"17","text":"Deposez votre CV \u002F et lettre de motivation ici : ","type":"control_fileupload"},{"name":"typeDe","qid":"18","text":"Type de contrat","type":"control_dropdown"},null,{"name":"divider","qid":"20","type":"control_divider"},{"name":"divider21","qid":"21","type":"control_divider"},{"name":"divider22","qid":"22","type":"control_divider"},{"name":"divider23","qid":"23","type":"control_divider"},{"name":"saisissezUne","qid":"24","text":"Validation de l'E-mail","type":"control_widget"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,null,null,null,null,null,null,null,null,{"name":"_nbsp_","qid":"9","text":"Postuler ","type":"control_button"},{"name":"candidaturePour10","qid":"10","text":"Votre candidature","type":"control_head"},{"name":"nomComplet","qid":"11","text":"Nom complet","type":"control_fullname"},{"name":"adresseEmail","qid":"12","text":"Adresse E-mail","type":"control_email"},{"name":"numeroDe","qid":"13","text":"Numero de telephone","type":"control_phone"},{"name":"candidatureAu","qid":"14","text":"Candidature au poste de","type":"control_dropdown"},{"name":"disponibleA15","qid":"15","text":"Disponible a partir de : ","type":"control_datetime"},{"name":"adresseActuelle","qid":"16","text":"Adresse actuelle","type":"control_address"},{"name":"deposezVotre","qid":"17","text":"Deposez votre CV \u002F et lettre de motivation ici : ","type":"control_fileupload"},{"name":"typeDe","qid":"18","text":"Type de contrat","type":"control_dropdown"},null,{"name":"divider","qid":"20","type":"control_divider"},{"name":"divider21","qid":"21","type":"control_divider"},{"name":"divider22","qid":"22","type":"control_divider"},{"name":"divider23","qid":"23","type":"control_divider"},{"name":"saisissezUne","qid":"24","text":"Validation de l'E-mail","type":"control_widget"}]);}, 20); 
</script>
</head>
<body>
<form class="jotform-form" action="https://submit.jotformeu.com/submit/222772263448359/" method="post" enctype="multipart/form-data" name="form_222772263448359" id="222772263448359" accept-charset="utf-8" autocomplete="on">
  <input type="hidden" name="formID" value="222772263448359" />
  <input type="hidden" id="JWTContainer" value="" />
  <input type="hidden" id="cardinalOrderNumber" value="" />
  <div role="main" class="form-all">
    <style>
      .form-all:before { background: none;}
    </style>
    <ul class="form-section page-section">
      <li id="cid_10" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-large">
          <div class="header-text httac htvam">
            <h1 id="header_10" class="form-header" data-component="header">
              Votre candidature
            </h1>
            <div id="subHeader_10" class="form-subHeader">
              Veuillez remplir le formulaire ci-dessous pour postuler à un emploi chez un de nos collaborateur agricole.
            </div>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_fullname" id="id_11" data-compound-hint=",,">
        <label class="form-label form-label-top form-label-extended form-label-auto" id="label_11" for="first_11">
          Nom complet
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_11" class="form-input-wide jf-required" data-layout="full">
          <div data-wrapper-react="true" class="extended">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
              <input type="text" id="first_11" name="q11_nomComplet[first]" class="form-textbox validate[required]" data-defaultvalue="" autoComplete="section-input_11 given-name" size="10" value="" data-component="first" aria-labelledby="label_11 sublabel_11_first" required="" />
              <label class="form-sub-label" for="first_11" id="sublabel_11_first" style="min-height:13px" aria-hidden="false"> Prénom </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
              <input type="text" id="last_11" name="q11_nomComplet[last]" class="form-textbox validate[required]" data-defaultvalue="" autoComplete="section-input_11 family-name" size="15" value="" data-component="last" aria-labelledby="label_11 sublabel_11_last" required="" />
              <label class="form-sub-label" for="last_11" id="sublabel_11_last" style="min-height:13px" aria-hidden="false"> Nom de famille </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_divider" id="id_21">
        <div id="cid_21" class="form-input-wide" data-layout="full">
          <div class="divider" aria-label="Divider" data-component="divider" style="border-bottom-width:1px;border-bottom-style:solid;border-color:#e6e6e6;height:1px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px">
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_address" id="id_16">
        <label class="form-label form-label-top form-label-auto" id="label_16" for="input_16_addr_line1">
          Adresse actuelle
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_16" class="form-input-wide jf-required" data-layout="full">
          <div summary="" class="form-address-table jsTest-addressField">
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-street-line jsTest-address-lineField">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_16_addr_line1" name="q16_adresseActuelle[addr_line1]" class="form-textbox validate[required] form-address-line" data-defaultvalue="" autoComplete="section-input_16 address-line1" value="" data-component="address_line_1" aria-labelledby="label_16 sublabel_16_addr_line1" required="" />
                  <label class="form-sub-label" for="input_16_addr_line1" id="sublabel_16_addr_line1" style="min-height:13px" aria-hidden="false"> Adresse </label>
                </span>
              </span>
            </div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-street-line jsTest-address-lineField">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_16_addr_line2" name="q16_adresseActuelle[addr_line2]" class="form-textbox form-address-line" data-defaultvalue="" autoComplete="section-input_16 address-line2" value="" data-component="address_line_2" aria-labelledby="label_16 sublabel_16_addr_line2" />
                  <label class="form-sub-label" for="input_16_addr_line2" id="sublabel_16_addr_line2" style="min-height:13px" aria-hidden="false"> Complément adresse </label>
                </span>
              </span>
            </div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-city-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_16_city" name="q16_adresseActuelle[city]" class="form-textbox validate[required] form-address-city" data-defaultvalue="" autoComplete="section-input_16 address-level2" value="" data-component="city" aria-labelledby="label_16 sublabel_16_city" required="" />
                  <label class="form-sub-label" for="input_16_city" id="sublabel_16_city" style="min-height:13px" aria-hidden="false"> Ville </label>
                </span>
              </span>
              <span class="form-address-line form-address-state-line jsTest-address-lineField form-address-hiddenLine" style="display:none">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_16_state" name="q16_adresseActuelle[state]" class="form-textbox form-address-state" data-defaultvalue="" autoComplete="section-input_16 address-level1" value="" data-component="state" aria-labelledby="label_16 sublabel_16_state" />
                  <label class="form-sub-label" for="input_16_state" id="sublabel_16_state" style="min-height:13px" aria-hidden="false"> Département / Région </label>
                </span>
              </span>
            </div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-zip-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_16_postal" name="q16_adresseActuelle[postal]" class="form-textbox validate[required] form-address-postal" data-defaultvalue="" autoComplete="section-input_16 postal-code" value="" data-component="zip" aria-labelledby="label_16 sublabel_16_postal" required="" />
                  <label class="form-sub-label" for="input_16_postal" id="sublabel_16_postal" style="min-height:13px" aria-hidden="false"> Code postal </label>
                </span>
              </span>
            </div>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_divider" id="id_20">
        <div id="cid_20" class="form-input-wide" data-layout="full">
          <div class="divider" aria-label="Divider" data-component="divider" style="border-bottom-width:1px;border-bottom-style:solid;border-color:#e6e6e6;height:1px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px">
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_email" id="id_12">
        <label class="form-label form-label-top form-label-auto" id="label_12" for="input_12">
          Adresse E-mail
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_12" class="form-input-wide jf-required" data-layout="half">
          <input type="email" id="input_12" name="q12_adresseEmail" class="form-textbox validate[required, Email]" data-defaultvalue="" style="width:310px" size="310" value="" placeholder="Prénom@gmail.com" data-component="email" aria-labelledby="label_12" required="" />
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_widget" id="id_24">
        <label class="form-label form-label-top form-label-auto" id="label_24" for="input_24">
          Validation de l'E-mail
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_24" class="form-input-wide jf-required" data-layout="full">
          <div data-widget-name="Validateur d&#x27;e-mail" style="width:100%;text-align:Left;overflow-x:auto" data-component="widget-field">
            <iframe data-client-id="53451665a01cdaaa49000005" title="Validateur d&#x27;e-mail" frameBorder="0" scrolling="no" allowtransparency="true" allow="geolocation; microphone; camera; autoplay; encrypted-media; fullscreen" data-type="iframe" class="custom-field-frame" id="customFieldFrame_24" src="" style="max-width:450px;border:none;width:100%;height:150px" data-width="450" data-height="150">
            </iframe>
            <div class="widget-inputs-wrapper">
              <input type="hidden" id="input_24" class="form-hidden form-widget widget-required " name="q24_saisissezUne" value="" />
              <input type="hidden" id="widget_settings_24" class="form-hidden form-widget-settings" value="%5B%7B%22name%22%3A%22mailSubject%22%2C%22value%22%3A%22Merci%20de%20v%C3%A9rifier%20votre%20email%22%7D%2C%7B%22name%22%3A%22mailContent%22%2C%22value%22%3A%22Vous%20recevez%20ce%20message%20car%20vous%20avez%20saisi%20votre%20adresse%20e-mail%20sur%20un%20formulaire%20de%20v%C3%A9rification.%20Si%20ce%20n&#x27;%C3%A9tait%20pas%20vous%2C%20veuillez%20ignorer%20ce%20message.%5Cn%5CnCopiez%20ce%20code%2C%20puis%20collez-le%20dans%20votre%20formulaire%20pour%20terminer%20le%20processus%20de%20v%C3%A9rification%20de%20votre%20adresse%20e-mail.%5Cn%5CnVotre%20code%20de%20v%C3%A9rification%20%3A%20%5Bcode%5D%5Cn%5CnLe%20code%20est%20valide%20pendant%2024h%20et%20ne%20peut%20%C3%AAtre%20utilis%C3%A9%20qu&#x27;une%20seule%20fois.%22%7D%2C%7B%22name%22%3A%22codeMessage%22%2C%22value%22%3A%22Le%20code%20de%20v%C3%A9rification%20a%20%C3%A9t%C3%A9%20envoy%C3%A9%20%C3%A0%20%7Bmail%7D.%5CnV%C3%A9rifiez%20la%20bo%C3%AEte%20de%20r%C3%A9ception%20de%20votre%20messagerie%20et%20collez%20le%20code%20ci-dessous%20pour%20terminer%20la%20v%C3%A9rification.%22%7D%2C%7B%22name%22%3A%22successMessage%22%2C%22value%22%3A%22Votre%20e-mail%20a%20%C3%A9t%C3%A9%20v%C3%A9rifi%C3%A9%20avec%20succ%C3%A8s.%22%7D%2C%7B%22name%22%3A%22customVerify%22%2C%22value%22%3A%22V%C3%A9rifier%20l&#x27;email%22%7D%2C%7B%22name%22%3A%22customSubmit%22%2C%22value%22%3A%22Code%20de%20confirmation%22%7D%2C%7B%22name%22%3A%22customReset%22%2C%22value%22%3A%22R%C3%A9initialisation%20du%20mail%22%7D%5D" data-version="2" />
            </div>
            <script type="text/javascript">
            setTimeout(function()
{
  var _cFieldFrame = document.getElementById("customFieldFrame_24");
  if (_cFieldFrame)
  {
    _cFieldFrame.onload = function()
    {
      if (typeof widgetFrameLoaded !== 'undefined')
      {
        widgetFrameLoaded(24, {
          "formID": 222772263448359
        })
      }
    };
    _cFieldFrame.src = "//data-widgets.jotform.io/mailValidator/?qid=24&ref=" + encodeURIComponent(window.location.protocol + "//" + window.location.host) + '' + '' + '&injectCSS=' + encodeURIComponent(window.location.search.indexOf("ndt=1") > -1);
    _cFieldFrame.addClassName("custom-field-frame-rendered");
  }
}, 0);
            </script>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_phone" id="id_13">
        <label class="form-label form-label-top form-label-auto" id="label_13" for="input_13_area"> Numéro de téléphone </label>
        <div id="cid_13" class="form-input-wide" data-layout="half">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="areaCode">
              <input type="tel" id="input_13_area" name="q13_numeroDe[area]" class="form-textbox" data-defaultvalue="" autoComplete="section-input_13 tel-area-code" value="" data-component="areaCode" aria-labelledby="label_13 sublabel_13_area" />
              <span class="phone-separate" aria-hidden="true">
                 -
              </span>
              <label class="form-sub-label" for="input_13_area" id="sublabel_13_area" style="min-height:13px" aria-hidden="false"> Indicatif </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="phone">
              <input type="tel" id="input_13_phone" name="q13_numeroDe[phone]" class="form-textbox" data-defaultvalue="" autoComplete="section-input_13 tel-local" value="" data-component="phone" aria-labelledby="label_13 sublabel_13_phone" />
              <label class="form-sub-label" for="input_13_phone" id="sublabel_13_phone" style="min-height:13px" aria-hidden="false"> Numéro de téléphone </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_divider" id="id_22">
        <div id="cid_22" class="form-input-wide" data-layout="full">
          <div class="divider" aria-label="Divider" data-component="divider" style="border-bottom-width:1px;border-bottom-style:solid;border-color:#e6e6e6;height:1px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px">
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_dropdown" id="id_14">
        <label class="form-label form-label-top form-label-auto" id="label_14" for="input_14">
          Candidature au poste de
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_14" class="form-input-wide jf-required" data-layout="half">
          <select class="form-dropdown validate[required]" id="input_14" name="q14_candidatureAu" style="width:310px" data-component="dropdown" required="">
            <option value=""> Please Select </option>
            <option selected="" value="Maraicher"> Maraicher </option>
            <option value="Viticulteur"> Viticulteur </option>
            <option value="Chauffeur agricole "> Chauffeur agricole </option>
            <option value="Agent d&#x27;élevage "> Agent d&#x27;élevage </option>
            <option value="Manager de champs"> Manager de champs </option>
            <option value="Chef de campagne marketing "> Chef de campagne marketing </option>
            <option value="Community Manager"> Community Manager </option>
          </select>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_dropdown" id="id_18">
        <label class="form-label form-label-top form-label-auto" id="label_18" for="input_18">
          Type de contrat
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_18" class="form-input-wide jf-required" data-layout="half">
          <select class="form-dropdown validate[required]" id="input_18" name="q18_typeDe" style="width:310px" data-component="dropdown" required="">
            <option value=""> Please Select </option>
            <option value="CDD"> CDD </option>
            <option value="CDI "> CDI </option>
            <option value="Stage"> Stage </option>
            <option value="Contrat professionnel "> Contrat professionnel </option>
            <option value="Apprentisage "> Apprentisage </option>
            <option value="Interim "> Interim </option>
            <option value="">  </option>
          </select>
        </div>
      </li>
      <li class="form-line" data-type="control_datetime" id="id_15">
        <label class="form-label form-label-top form-label-auto" id="label_15" for="lite_mode_15"> Disponible à partir de : </label>
        <div id="cid_15" class="form-input-wide" data-layout="half">
          <div data-wrapper-react="true">
            <div style="display:none">
              <span class="form-sub-label-container" style="vertical-align:top">
                <input type="tel" class="form-textbox validate[limitDate]" id="month_15" name="q15_disponibleA15[month]" size="2" data-maxlength="2" data-age="" maxLength="2" value="10" autoComplete="section-input_15 off" aria-labelledby="label_15 sublabel_15_month" />
                <span class="date-separate" aria-hidden="true">
                   -
                </span>
                <label class="form-sub-label" for="month_15" id="sublabel_15_month" style="min-height:13px" aria-hidden="false"> Month </label>
              </span>
              <span class="form-sub-label-container" style="vertical-align:top">
                <input type="tel" class="currentDate form-textbox validate[limitDate]" id="day_15" name="q15_disponibleA15[day]" size="2" data-maxlength="2" data-age="" maxLength="2" value="05" autoComplete="section-input_15 off" aria-labelledby="label_15 sublabel_15_day" />
                <span class="date-separate" aria-hidden="true">
                   -
                </span>
                <label class="form-sub-label" for="day_15" id="sublabel_15_day" style="min-height:13px" aria-hidden="false"> Day </label>
              </span>
              <span class="form-sub-label-container" style="vertical-align:top">
                <input type="tel" class="form-textbox validate[limitDate]" id="year_15" name="q15_disponibleA15[year]" size="4" data-maxlength="4" data-age="" maxLength="4" value="2022" autoComplete="section-input_15 off" aria-labelledby="label_15 sublabel_15_year" />
                <label class="form-sub-label" for="year_15" id="sublabel_15_year" style="min-height:13px" aria-hidden="false"> Year </label>
              </span>
            </div>
            <span class="form-sub-label-container" style="vertical-align:top">
              <input type="text" class="form-textbox validate[limitDate, validateLiteDate]" id="lite_mode_15" size="12" data-maxlength="12" maxLength="12" data-age="" value="10-05-2022" data-format="mmddyyyy" data-seperator="-" placeholder="MM-DD-YYYY" autoComplete="section-input_15 off" aria-labelledby="label_15 sublabel_15_litemode" />
              <img class=" newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date" id="input_15_pick" src="https://cdn.jotfor.ms/images/calendar.png" data-component="datetime" aria-hidden="true" data-allow-time="No" data-version="v2" />
              <label class="form-sub-label" for="lite_mode_15" id="sublabel_15_litemode" style="min-height:13px" aria-hidden="false"> Date </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_divider" id="id_23">
        <div id="cid_23" class="form-input-wide" data-layout="full">
          <div class="divider" aria-label="Divider" data-component="divider" style="border-bottom-width:1px;border-bottom-style:solid;border-color:#e6e6e6;height:1px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px">
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_fileupload" id="id_17">
        <label class="form-label form-label-top form-label-auto" id="label_17" for="input_17"> Déposez votre CV / et lettre de motivation ici : </label>
        <div id="cid_17" class="form-input-wide" data-layout="full">
          <div class="jfQuestion-fields" data-wrapper-react="true">
            <div class="jfField isFilled">
              <div class="jfUpload-wrapper">
                <div class="jfUpload-container">
                  <div class="jfUpload-text-container">
                    <div class="jfUpload-icon forDesktop">
                      <span class="iconSvg  dhtupload ">
                        function SvgDhtupload(props) { return /* @__PURE__ */ react.createElement("svg", dhtupload_svg_extends({ width: 54, height: 47, xmlns: "http://www.w3.org/2000/svg" }, props), dhtupload_svg_path || (dhtupload_svg_path = /* @__PURE__ */ react.createElement("path", { d: "M40.213 10.172c1.897.21 3.68.738 5.35 1.58a15.748 15.748 0 014.374 3.242 15.065 15.065 0 012.951 4.533c.72 1.704 1.08 3.522 1.08 5.455 0 1.827-.28 3.654-.843 5.48-.562 1.828-1.379 3.47-2.45 4.929A13.39 13.39 0 0146.669 39c-1.599.948-3.452 1.458-5.56 1.528H37.26a1.62 1.62 0 01-1.185-.5 1.62 1.62 0 01-.501-1.186c0-.457.167-.852.5-1.186.334-.334.73-.5 1.186-.5h3.848c1.44 0 2.75-.37 3.926-1.108a10.851 10.851 0 003.03-2.846 13.53 13.53 0 001.95-3.9 14.23 14.23 0 00.686-4.321c0-1.582-.316-3.066-.949-4.454a11.623 11.623 0 00-2.582-3.636 12.857 12.857 0 00-3.742-2.478 11.054 11.054 0 00-4.48-.922l-1.212-.053-.37-1.159c-.878-2.81-2.292-4.998-4.242-6.562-1.95-1.563-4.594-2.345-7.932-2.345-2.108 0-4.005.36-5.692 1.08-1.686.72-3.136 1.722-4.348 3.005-1.212 1.282-2.143 2.81-2.793 4.585-.65 1.774-.975 3.68-.975 5.718h.053l.105 1.581-1.528.264c-1.863.316-3.444 1.317-4.744 3.004-1.3 1.686-1.95 3.584-1.95 5.692 0 2.39.8 4.462 2.398 6.219 1.599 1.757 3.488 2.635 5.666 2.635h4.849c.492 0 .896.167 1.212.5.316.335.474.73.474 1.187 0 .456-.158.852-.474 1.185-.316.334-.72.501-1.212.501h-4.849a10.08 10.08 0 01-4.374-.975 11.673 11.673 0 01-3.61-2.661 13.173 13.173 0 01-2.478-3.9A12.073 12.073 0 010 28.301c0-2.706.755-5.148 2.266-7.326 1.511-2.178 3.444-3.636 5.798-4.374.14-2.354.658-4.542 1.554-6.562.896-2.02 2.091-3.777 3.584-5.27 1.494-1.494 3.25-2.662 5.27-3.505C20.493.422 22.733 0 25.193 0c1.898 0 3.637.237 5.218.711 1.581.475 3.004 1.151 4.269 2.03a13.518 13.518 0 013.268 3.215 18.628 18.628 0 012.266 4.216zm-11.964 13.44l6.22 6.85c.245.247.368.537.368.87 0 .334-.123.642-.369.923l-.421.263c-.211.246-.484.343-.817.29a1.544 1.544 0 01-.87-.448l-3.69-4.11v16.97c0 .492-.166.896-.5 1.212-.334.316-.729.474-1.186.474-.492 0-.896-.158-1.212-.474-.316-.316-.474-.72-.474-1.212V28.25l-3.584 4.005a1.544 1.544 0 01-.87.448.959.959 0 01-.87-.29l-.42-.264c-.247-.28-.37-.588-.37-.922 0-.334.123-.624.37-.87l6.113-6.746v-.052l.421-.422a.804.804 0 01.396-.29c.158-.053.307-.079.448-.079.175 0 .333.026.474.079.14.053.281.15.422.29l.421.422v.052z", fill: "none" }))); }
                      </span>
                    </div>
                  </div>
                  <div class="jfUpload-button-container">
                    <div class="jfUpload-button" aria-hidden="true" tabindex="0" style="display:none" data-version="v2">
                      Parcourir les fichiers
                      <div class="jfUpload-heading forDesktop">
                        Drag and drop files here
                      </div>
                      <div class="jfUpload-heading forMobile">
                        Choose a file
                      </div>
                    </div>
                  </div>
                </div>
                <div class="jfUpload-files-container">
                  <input type="file" id="input_17" name="q17_deposezVotre[]" multiple="" class="form-upload-multiple" data-imagevalidate="yes" data-file-accept="pdf, doc, docx, xls, xlsx, csv, txt, rtf, html, zip, mp3, wma, mpg, flv, avi, jpg, jpeg, png, gif" data-file-maxsize="10882" data-file-minsize="0" data-file-limit="4" data-component="fileupload" aria-label="Parcourir les fichiers" />
                </div>
              </div>
              <div data-wrapper-react="true">
              </div>
            </div>
            <span style="display:none" class="cancelText">
              Cancel
            </span>
            <span style="display:none" class="ofText">
              of
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_9">
        <div id="cid_9" class="form-input-wide" data-layout="full">
          <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
            <button id="input_9" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
              Postuler
            </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
  <script>
  JotForm.showJotFormPowered = "new_footer";
  </script>
  <script>
  JotForm.poweredByText = "Powered by Jotform";
  </script>
  <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="222772263448359" />
  <script type="text/javascript">
  var all_spc = document.querySelectorAll("form[id='222772263448359'] .si" + "mple" + "_spc");
for (var i = 0; i < all_spc.length; i++)
{
  all_spc[i].value = "222772263448359-222772263448359";
}
    
   