<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        function __autoload($className) {
            include_once $className . '.php';
        }

        $array = array('A', 'B', 'C', 'D');
        echo "Collection: ";
        foreach (new Collection($array) as $key => $value) {
            echo "$key => $value. ";
        }
        echo "\n";
        ?>
    </body>
</html>
