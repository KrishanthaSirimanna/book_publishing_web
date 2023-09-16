<?php
function is_empty($var, $text, $location, $ms, $data)
{
    if(empty($var))
    {
        $em = "The ".$text." is required";
        header("location: $location?$ms=$em&$data");
        exit;
    }
    return 0;
}
?>