<html class='no-js'>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Die Todo App</title>
        <meta name='description' content=''>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    </head>
    <body>
        <?php
            error_reporting(E_ALL ^ E_NOTICE);
            setlocale(LC_ALL, "de_DE");
            date_default_timezone_set('Europe/Berlin');

            $mysqli = new mysqli("localhost", "root", "boot", "php-examples");
            if ($mysqli->connect_errno) {
                echo "Konnte Verbinung nicht herstellen: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            }
        ?>

        <form id="age-calulation-form" action="index.php?action=add" method="post">
            <label for="todo">Todo:</label>
            <input name="todo" type="" placeholder="Was gemacht werden muss!" required="" autofocus="" size=30/>
        </form>

        <?php
            $action = $_GET['action'] != '' ? $_GET['action'] : null;

            switch ($action) {
                case 'add':
                    $todo = $_POST['todo'];
                    $mysqli->query("INSERT INTO todos(todo) VALUES ('$todo')");
                    break;
                case 'delete':
                    $id = $_GET['id'];
                    $mysqli->query("DELETE FROM todos WHERE id = '$id'");
                    break;
                case 'done':
                    $id = $_GET['id'];
                    $mysqli->query("UPDATE todos SET done=1 WHERE id='$id'");
                    break;
                case 'undone':
                    $id = $_GET['id'];
                    $mysqli->query("UPDATE todos SET done=0 WHERE id='$id'");
                    break;
                default:

                    break;
            }
        ?>

        <ul id="todos">
            <h3>Deine Liste</h3>
            <?php
                $todos = $mysqli->query("SELECT * FROM todos ORDER BY id DESC");

                while ($todo = $todos->fetch_assoc()) {
                    $name = $todo['todo'];
                    $id = $todo['id'];

                    $action = (bool) $todo['done'] === false ? "done" : "undone";
                    $sign = (bool) $todo['done'] === true ? "-" : "+";

                    echo "<li><a href='index.php?action=$action&id=$id'>$sign</a> $name <a href='index.php?action=delete&id=$id'>✗</a></li>";
                }
            ?>
        </ul>
    </body>
</html>