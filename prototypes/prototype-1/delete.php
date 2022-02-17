<?php


if(isset($_GET['id'])){
        $id = $_GET['id'];
         $fichier=file_get_contents('personnes.json');
        $data = json_decode($fichier);
        for($i = 0; $i < count($data); ++$i){
            if($data[$i][0]== $id){
                unset($data[$i]);
                // -The array_values() function returns an array containing
                //  all the values of an array.
                $data = array_values($data);
                
                file_put_contents("personnes.json",json_encode($data));
                break;
            }
        }

        header('Location: index.php');
    }

?>