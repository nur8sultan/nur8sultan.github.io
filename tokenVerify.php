<?php
$verify_token = "megabot_token_verify";
if (!empty($_REQUEST['hub_mode']) && $_REQUEST['hub_mode'] == 'subscribe' && $_REQUEST['hub_verify_token'] == $verify_token) { 
echo $_REQUEST['hub_challenge']; 
}