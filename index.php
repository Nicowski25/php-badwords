<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            width: 40%;
        }
    </style>
</head>
<body>
    <h1>Form</h1>
    <form action="myscript.php" method="POST">
        <label for="paragraph">Paragraph</label>
        <input type="text" name="paragraph" placeholder="insert paragraph">
        <label for="badword">Badword</label>
        <input type="text" name="badword" placeholder="insert badword">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>