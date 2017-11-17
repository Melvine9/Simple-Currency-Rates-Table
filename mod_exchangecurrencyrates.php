<?php

/*
 * @package Joomla 3
 * @copyright Copyright (C) 2005 Open Source Matters. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 *
 * @module		Simple Currency Rates Table Module (mod_exchangecurrencyrates)
 * @version		2.0.0 (23/01/2012) Joomla 3
 * @copyright	Copyright (C) 2012 by Melvine (www.melvineobserver.com)
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */


// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
JHtml::stylesheet('modules/mod_exchangecurrencyrates/assets/css/style.css');
if( !defined('SMART_JQUERY') && $params->get('include_jquery', 0) == "1" ){
	JHtml::script('modules/mod_sj_currency_rates/assets/js/jquery-1.8.2.min.js');
	JHtml::script('modules/mod_sj_currency_rates/assets/js/jquery-noconflict.js');
	define('SMART_JQUERY', 1);
}
$t = $params->get('t'); 
$w = $params->get('w'); 
$tc = $params->get('tc'); 
$mbg = $params->get('mbg');  
$bdrc = $params->get('bdrc');   
$fc = $params->get('fc'); 	
$timezone = $params->get('timezone');
$nb = $params->get('nb'); 
$mc = $params->get('mc');  
$c1 = $params->get('c1'); 
$c2 = $params->get('c2');
$c3 = $params->get('c3');
$c4 = $params->get('c4');
$c5 = $params->get('c5');
$c6 = $params->get('c6');
$c7 = $params->get('c7');
$c8 = $params->get('c8');
$c9 = $params->get('c9');
$c10 = $params->get('c10');


echo"
<!-- Simple Currency Rates Table START -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"http://www.exchangerates.org.uk/widget/ER-SCRT2-css.php?w=$w&nb=$nb&bdrc=$bdrc&mbg=$mbg&fc=$fc&tc=$tc\" media=\"screen\" />
<div id=\"erscrt2\">
   <div id=\"erscrt2-widget\"></div>
  <div id=\"erscrt2-infolink\">Source: <a href=\"http://www.exchangerates.org.uk/\" target=\"_new\">ExchangeRates.org.uk</a></div>
<script type=\"text/javascript\">		
var t = '".$t."';	
var tc = '".$tc."';
var w = '".$w."';
var c1 = '".$c1."';
var c2 = '".$c2."';
var c3 = '".$c3."';
var c4 = '".$c4."';
var c5 = '".$c5."';
var c6 = '".$c6."';
var c7 = '".$c7."';
var c8 = '".$c8."';
var c9 = '".$c9."';
var c10 = '".$c10."';
var nb = '".$nb."';
var mc = '".$mc."';
var mbg = '".$mbg."';
var bdrc = '".$bdrc."';
var fc = '".$fc."'; 
var tz = '".$timezone."';

var ccHost = ((\"https:\" == document.location.protocol) ? \"https://www.\" : \"http://www.\");
document.write(unescape(\"%3Cscript src='\" + ccHost + \"exchangerates.org.uk/widget/ER-SCRT2-1.php' type='text/javascript'%3E%3C/script%3E\"));
</script>
</div>
<!-- Simple Currency Rates Table END -->
";


?>