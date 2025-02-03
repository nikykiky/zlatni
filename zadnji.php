<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="txt">Unesi</label> <br>
        <!-- <textarea id='txt' name='txt'></textarea> -->
         <!-- <input type="text" name='br'> -->
          <input type="text" name='email'>
            <input type="hidden" name='task' value='mail'>  
            <!-- value='brojac' , 'sort'-->
        <input type="submit" id='btn'name='btn'value='Submit'>
    </form>
    <?php
    
    // if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['task'] == 'brojac'){
    //     $txt = $_POST['txt'];
    //     $brojac = str_word_count($txt);

    //     if($brojac >= 10)
    //         echo 'rijeci je vise od 10 ('.$brojac.')';
    //     else
    //         echo 'rijeci je manje od 10 ('.$brojac.')';
    // }

    // if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['task'] == 'sort'){
    //     $n = $_POST['br'];
    //     $niz = explode(',', $n);
    //     sort($niz);
    //     echo 'Sortirani brojevi '. implode(',',$niz);
    // }
    
    if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['task'] == 'mail'){
        $email = $_POST['email'];
        if(filter_var($email,FILTER_VALIDATE_EMAIL))
            echo 'mail ispravan';
        else
            echo 'neispravan mail';
    }
    ?>
</body>
</html>