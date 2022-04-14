<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAD WORDS</title>
</head>
<body>
    
<?php

$text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo ipsa debitis numquam optio tempore odit veniam voluptate corrupti pariatur alias dolore quos, quam doloribus quo earum officia eos aut! Officia, lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti ullam nostrum cum facere! Accusamus ut in esse ullam qui enim quo sit, placeat itaque vero voluptatem atque obcaecati quibusdam velit.
';

/*
stampo il testo con echo
i . servono a concatenare
strlen stampa la lunghezza
*/
echo '<p>' . $text . '</p>' . 'Il testo è composto da: ' . str_word_count($text) . ' parole, ' . strlen($text) . ' caratteri';


// variabile per prendere la parola da sostituire. In url es. ?badword=lorem
$replace = $_GET['badword'];

echo '<p>' . str_ireplace($replace, '***', $text) . '</p>' . 'Il testo è composto da: ' . str_word_count($text) . ' parole, ' . strlen(str_ireplace($replace, '***', $text)) . ' caratteri';

?>

</body>
</html>
