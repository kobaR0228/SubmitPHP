<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/phppractice/about.php">About</a></li>
            <li><a href="/phppractice/contact.php">Contacts</a></li>
        </ul>
    </nav>
    <p>
       hello 
    </p>
        <?php foreach($tasks as $task):?>
        
        <li><?php var_dump($task); ?></li>
    
       <?php endforeach;?>
    
    

    
</body>
</html>