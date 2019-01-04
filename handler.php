<?php
function hello($eventData) : string
{
    return json_encode(["msg" => "hello from PHP " . PHP_VERSION]);
}
