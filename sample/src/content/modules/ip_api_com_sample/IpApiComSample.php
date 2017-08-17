<?php

class IpApiComSample extends Controller
{

    public function render()
    {
        ob_start();
        $controller = ModuleHelper::getMainController("IpApiCom");
        var_dump($controller->getGeoLocation());
        return nl2br(htmlspecialchars(ob_get_clean()));
    }
}