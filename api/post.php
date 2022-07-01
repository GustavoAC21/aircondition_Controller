<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API</title>
    <!-- BOOTSTRAP 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SCROOLL REVEAL JS LIBRARY CDN -->
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="api.js"></script>
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/estiloMenu.css">
    <!-- FONTAWESOME ICONS -->
    <script src="https://kit.fontawesome.com/0fbbba592c.js" crossorigin="anonymous"></script>
</head>

<body></body>
<?php
    include "config.php";
    include "utils.php";
    $dbConn =  connect($db);
    /*
    listar todos los posts o solo uno
    */
    if ($_SERVER['REQUEST_METHOD'] == 'GET')
    {
        if (isset($_GET['id']))
        {
        //Mostrar un post
        // $sql = $dbConn->prepare("SELECT * FROM blog where id=:id");
        $sql = $dbConn->prepare("SELECT * FROM grados INNER JOIN ambiente ON grados.id_ambiente = ambiente.id ORDER BY RAND() LIMIT 6 where id_grados=:id");
        
        $sql->bindValue(':id', $_GET['id']);
        $sql->execute();
        header("HTTP/1.1 200 OK");
        echo json_encode(  $sql->fetch(PDO::FETCH_ASSOC)  );
        exit();
        }
        else {
        //Mostrar lista de post
        $sql = $dbConn->prepare("SELECT * FROM grados INNER JOIN ambiente ON grados.id_ambiente = ambiente.id ORDER BY RAND() LIMIT 6 ");
        $sql->execute();
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        header("HTTP/1.1 200 OK");
        // echo json_encode( $sql->fetchAll()  );
            $tabla = '
            <table style="text-align: center;" border="solid" class="table table-striped table-bordered table-hover">
                <tr>
                    <td >N.H/P</td>
                    <td>Temperatura</td>
                    <td>Tipo Ambiente</td>
                </tr>
                ';
            
            $contador=1;
            //recorro toda la consulta
            foreach ($sql as $fila) {
                
                $tabla .= "<tr>";
                $tabla .= "<td>".$contador."</td>";
                $tabla .= "<td>".$fila['temperatura']."</td>";
                $tabla .= "<td>".$fila['tipo']."</td>";
                $tabla .= "</tr>";
                $contador= $contador+1;
            }
            $tabla .= '</table>';
            echo ($tabla);

        exit();
        }
    }
    // Crear un nuevo post
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $input = $_POST;
        $sql = "INSERT INTO blog
            (title, status, content, user_id)
            VALUES
            (:title, :status, :content, :user_id)";
        $statement = $dbConn->prepare($sql);
        bindAllValues($statement, $input);
        $statement->execute();
        $postId = $dbConn->lastInsertId();
        if($postId)
        {
        $input['id'] = $postId;
        header("HTTP/1.1 200 OK");
        echo json_encode($input);
        exit();
        }
    }
    //Borrar
    if ($_SERVER['REQUEST_METHOD'] == 'DELETE')
    {
        $id = $_GET['id'];
    $statement = $dbConn->prepare("DELETE FROM blog where id=:id");
    $statement->bindValue(':id', $id);
    $statement->execute();
        header("HTTP/1.1 200 OK");
        exit();
    }
    //Actualizar
    if ($_SERVER['REQUEST_METHOD'] == 'PUT')
    {
        $input = $_GET;
        $postId = $input['id'];
        $fields = getParams($input);
        $sql = "
            UPDATE blog
            SET $fields
            WHERE id='$postId'
            ";
        $statement = $dbConn->prepare($sql);
        bindAllValues($statement, $input);
        $statement->execute();
        header("HTTP/1.1 200 OK");
        exit();
    }
    //En caso de que ninguna de las opciones anteriores se haya ejecutado
    header("HTTP/1.1 400 Bad Request");
?>
</html>