<?php
error_reporting(0);
if(!defined('IN_INDEX')) { die('Sorry, you cannot access this file.'); }
$_CONFIG['mysql']['connection_type'] = 'connect'; 
$_CONFIG['mysql']['hostname'] = 'localhost'; 
$_CONFIG['mysql']['username'] = 'root'; 
$_CONFIG['mysql']['password'] = ''; 
$_CONFIG['mysql']['database'] = 'retro'; 

$_CONFIG['mysql']['port'] = '3306'; 
$_CONFIG['hotel']['server_ip'] = 'localhost'; 
$_CONFIG['hotel']['url'] = 'http://localhost'; 
$_CONFIG['hotel']['name'] = 'MabboZone'; 
$_CONFIG['hotel']['desc'] = 'Voor diegene die het willen!'; 
$_CONFIG['hotel']['email'] = 'Hamza@Mabbozone.nl';
$_CONFIG['hotel']['in_maint'] = false;
$_CONFIG['hotel']['motto'] = 'Van harte welkom in Mabbo Hotel' . $_CONFIG['hotel']['name'];
$_CONFIG['hotel']['credits'] = 5000;
$_CONFIG['hotel']['pixels'] = 2500; 
$_CONFIG['hotel']['figure'] = 'hd-180-8.ca-3175-1408.ch-3222-92.lg-281-92.sh-295-73.hr-3163-1395'; 
$_CONFIG['hotel']['web_build'] = '63_1dc60c6d6ea6e089c6893ab4e0541ee0/2863';

$_CONFIG['hotel']['external_vars'] = 'http://localhost/r63/external_variables.txt';
$_CONFIG['hotel']['external_texts'] = 'http://localhost/r63/external_flash_texts.txt';
$_CONFIG['hotel']['product_data'] = 'http://localhost/r63/productdata.txt';
$_CONFIG['hotel']['furni_data'] = 'http://localhost/r63/furnidata.txt';
$_CONFIG['hotel']['swf_folder'] = 'http://localhost/r63';

$_CONFIG['template']['style'] = 'Custom-Habbo'; 
$_CONFIG['thehabbos']['username'] = 'Kryptos';
$_CONFIG['retro_top']['user'] = 'Kryptos'; 
$_CONFIG['recaptcha']['priv_key'] = '6LcZ58USAAAAABSV5px9XZlzvIPaBOGA6rQP2G43';
$_CONFIG['recaptcha']['pub_key'] = '6LcZ58USAAAAAAQ6kquItHl4JuTBWs-5cSKzh6DD';
?>