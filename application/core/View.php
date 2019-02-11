<?php
/**
 * Created by PhpStorm.
 * User: vyacheslav
 * Date: 2/6/19
 * Time: 4:37 PM
 */

class View
{
    function generate($contentView, $templateView, $data = null)
    {
        include 'application/views/' . $templateView;
    }
}