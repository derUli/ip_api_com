<?php

class IpApiComExample extends Controller
{

    public function render()
    {
        ob_start();
        $controller = ModuleHelper::getMainController("ip_api_com");
        var_dump($controller->getGeoLocation());
        return nl2br(htmlspecialchars(ob_get_clean()));
    }
}