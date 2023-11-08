<?php

if(isset($_POST['submit'])){
    if(!empty($_POST['mnText'])){
        echo $_POST['mnText'];
    }
   else{
    echo'Pas de texte';
   } 
    
    // $todos['mnText']= $_POST['mnText'];
    // echo $_POST['mnText'];
    // $js= file_get_contents('todos.json');
    // $js= json_decode($js, true);
    // $js[]= $todo ;
    // $js = json_encode($js) ;
    // file_put_contents('todos.json', $js);
    //  header("location: ./");

}
// else if(isset($_POST['reset'])) {
//     $todos = file_get_contents('todos.json');
//     $totos =json_decode($todos, true);
// }

?>