<?php
const APP_URL = "http://localhost/portofolio";
const UCP_URL = "https://ucp.alinsoaita.com";

function url($path, $get = null)
{
    if($path == '')
        return APP_URL;
    else if($get == null)
        return APP_URL . $path . ".php";
    else
        return APP_URL . $path . ".php?" . $get;
}

function asset($name)
{
    return APP_URL . "/style/" . $name;
}