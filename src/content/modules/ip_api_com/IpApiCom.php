<?php

class IpApiCom extends Controller
{

    public function getGeoLocation($ip = null)
    {
        if (is_null($ip)) {
            $ip = get_ip();
        }
        
        return json_decode(file_get_contents_wrapper('http://ip-api.com/json/' . $ip, true), true);
    }
}