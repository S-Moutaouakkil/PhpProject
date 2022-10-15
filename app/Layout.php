<?php

namespace App;

class Layout
{
    public static string $layout = "layout1";

    public static function getLayout()
    {
        return self::$layout.".php";
    }

    public static function setLayout(string $layout) : bool
    {
        $layoutFileName = implode(DIRECTORY_SEPARATOR, ["..", "pages", "templates", $layout.".php"]);
        if (file_exists($layoutFileName)) {
            self::$layout = $layout;
            return true;
        } else {
            return false;
        }
    }
}
