<?php
class Browser
{
    static function getBrowser()
    {        
        if (isset($_SERVER['HTTP_USER_AGENT'])) {
            $agent = $_SERVER['HTTP_USER_AGENT'];
            if (strpos($agent, 'Firefox')) {
                $browser = 'Firefox';
            } elseif (strpos($agent, 'OPR')) {
                $browser = 'Opera';
            } elseif (strpos($agent, 'Chrome')) {
                $browser = 'Chrome';
            } elseif (strpos($agent, 'Safari')) {
                $browser = 'Safari';
            } elseif (strpos($agent, 'Trident')) {
                $browser = 'MSIE';
            } else {
                $browser = false;
            }
            return $browser;
        } else {
            return false;
        }
    }
}
$browser = Browser::getBrowser();
//var_dump($_SERVER['HTTP_USER_AGENT']);
?>