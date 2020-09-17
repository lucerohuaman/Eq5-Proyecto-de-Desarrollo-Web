<?php
    include_once('functions/bd_conn.php');
    if(!empty($_POST['busqueda'])){
        $busqueda = explode(" ", $_POST['busqueda']);
        $sql = "SELECT * FROM productos WHERE name LIKE '%".$busqueda[0]."%'";
        for($i =1; $i < count($busqueda);$i++){
            if(!empty($busqueda[$i])){
                $sql .= "AND name LIKE '%".$busqueda[$i]."%'";
            }
        }
        $sql .= "LIMIT 5";
        $result = mysqli_query($conn,$sql);
        while($item = mysqli_fetch_assoc($result)){
           echo '
           <li>
                <div class="img">
                    <img src="'.$item['img'].'">
                </div>
                <div class="title">
                    <h4>'.$item['name'].'</h4>
                </div>
                <div class="price">
                <span>'.$item['name'].'</span>
            </div>
           </li>
           ';
           
        }
    }

?>