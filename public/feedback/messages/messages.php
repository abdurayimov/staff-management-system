<?php
require "../db/connection.php";
require "../db/db.php";

$connection = new connection();
$sqlite     = new db($connection->connect());
$messages   = $sqlite->getMessages();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Сообщения</title>
    <link rel="stylesheet" href="../vendors/bootstrap/css/bootstrap.min.css">
</head>
<body style="padding: 50px 0;">
<div class="container">
    <p class="h3 text-center">Сообщения</p>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Имя</th>
            <th>Email</th>
            <th>Сообщение</th>
            <th>Файлы</th>
        </tr>
        </thead>
        <tbody>
        <?php if(!empty($messages)) { ?>
            <?php foreach($messages as $message) { ?>
                <tr>
                    <td><?php echo $message['name'] ?></td>
                    <td><?php echo $message['email'] ?></td>
                    <td><?php echo $message['message'] ?></td>
                    <td>
                        <?php if(!empty($paths = explode('||', $message['file_path']))) { ?>
                            <?php foreach($paths as $path) { ?>
                                <?php if(!empty($path)) { ?>
                                    <img class="d-block" style="max-height: 50px;" src="<?php echo '../' . $path; ?>"/><br>
                                <?php } ?>
                            <?php } ?>
                        <?php } ?>
                    </td>
                </tr>
            <?php } ?>
        <?php } else { ?>
            <tr>
                <td colspan="4" style="text-align: center;">Нет данных</td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>