<html class='no-js'>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Die Altersberechnungs App</title>
        <meta name='description' content=''>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    </head>
    <body>
        <?php
            error_reporting(E_ALL ^ E_NOTICE);
            setlocale(LC_ALL, "de_DE");
            date_default_timezone_set('Europe/Berlin');

            if ( isset($_GET['action']) ) {
                $action = $_GET['action'];
            } else {
                $action = "form";
            }

            switch($action) {
                case 'form':
                    require_once 'actions/form.php';
                    break;
                case 'calculate':
                    require_once 'actions/calculate.php';
                    break;
                default:
                    require_once 'actions/error.php';
                    break;
            }
        ?>
    </body>
</html>