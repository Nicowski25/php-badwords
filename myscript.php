<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paragraph</title>
</head>
<body>
    
<p>
    <?php
        echo 'Paragraph: '.$_POST['paragraph'];
    ?>
</p>
<p>
    <?php
        echo 'Paragraph lenght is '.strlen($_POST['paragraph']);
    ?>
</p>

<p>
    <?php
        echo str_replace( $_POST['badword'], '***',$_POST['paragraph']);
    ?>
</p>
</body>
</html>

