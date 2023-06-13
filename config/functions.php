<?php 
    // Main functions
    
    function getCurrentUser($id,&$array,$connection){
        $query = $connection->prepare("SELECT * FROM users WHERE id = ?");
        $query->bind_param("s",$id);
        $query->execute();

        $result = $query->get_result();
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                array_push($array['id'],$row['id']);
                array_push($array['name'],$row['name']);
                array_push($array['lastname'],$row['lastname']);
                array_push($array['username'],$row['username']);
                array_push($array['email'],$row['email']);
                array_push($array['birthday'],$row['birthday']);
                array_push($array['regDate'],$row['regDate']);
                array_push($array['lastLog'],$row['lastLog']);
                array_push($array['credit'],$row['kredit']);
            }
        }
    }

    function getAllUsers(&$array,$connection){
        $query = $connection->prepare("SELECT * FROM users");
        $query->execute();

        $result = $query->get_result();
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                array_push($array['id'],$row['id']);
                array_push($array['name'],$row['name']);
                array_push($array['lastname'],$row['lastname']);
                array_push($array['username'],$row['username']);
                array_push($array['email'],$row['email']);
                array_push($array['birthday'],$row['birthday']);
                array_push($array['regDate'],$row['regDate']);
                array_push($array['lastLog'],$row['lastLog']);
                array_push($array['credit'],$row['kredit']);
            }
        }
    }

    function getAllBooks(&$array,$connection){
        $query = $connection->prepare("SELECT * FROM knjige");
        $query->execute();

        $result = $query->get_result();

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                array_push($array['id'],$row['id']);
                array_push($array['name'],$row['naziv']);
                array_push($array['author'],$row['autor']);
                array_push($array['zanr'],$row['zanr']);
                array_push($array['year'],$row['godina_izdanja']);
                array_push($array['quantity'],$row['broj_primeraka']);
                array_push($array['price'],$row['cena']);
                array_push($array['rating'],$row['rating']);
            }
        }
    }

    function addMessage(&$array,$message){
        array_push($array,$message);
    }

    function read($field){
        foreach($field as $item){
            echo $item;
        }
 
    }

    function readForProfile($prefix,$field){
        foreach($field as $item){
            echo $prefix . " " . $item;
        }
 
    }

    function scrollToTop() {
        if(!isset($_SESSION['admin'])){
            echo '<script>
                window.addEventListener("load", (e) => {
                    window.scrollTo({top: 0, behavior: "smooth"});
                });
            </script>
            ';
        }
    }

    scrollToTop();


    function checkModeRole($user,$connection){
        $query = $connection->prepare("SELECT korisnik_username FROM administratori WHERE korisnik_username = ?");
        $query->bind_param("s",$user['username'][0]);
        $query->execute();

        $result = $query->get_result();
        
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $_SESSION['admin'] = $row['korisnik_username'];
            }
        }

    }
?>
