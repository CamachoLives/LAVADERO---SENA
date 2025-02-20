<?php
include 'conexion.php';
$nom = $_POST['nom'];
$pla = $_POST['pla'];
$tel = $_POST['tel'];
$id = $_POST['cedu'];

if($nom != "" && $pla != "" && $tel != "" && $id != ""){
    
$stmt = $dbh->prepare("INSERT INTO user (nom, pla, tel, id) VALUES (?, ?, ?, ?)");

$stmt->bindParam(1 , $nom);
$stmt->bindParam(2 , $pla);
$stmt->bindParam(3 , $tel);
$stmt->bindParam(4 , $id);
$stmt->execute();

header("Location: http://localhost:8080/lava/two.html");
exit();

}else{
    header("Location: http://localhost:8080/lava/inicio.html");
exit();
    return false;
}

// FETCH_ASSOC
//$stmt = $dbh->prepare("SELECT * FROM usuario");
// Especificamos el fetch mode antes de llamar a fetch()
//$stmt->setFetchMode(PDO::FETCH_ASSOC);
// Ejecutamos
//$stmt->execute();
// Mostramos los resultados
//while ($row = $stmt->fetch()){
//    echo "Cedula: {$row["cedu"]} <br>";
//    echo "Nombre: {$row["nom"]} <br><br>";
//    echo "Telefono: {$row["tel"]} <br><br>";
//    echo "Placa: {$row["pla"]} <br><br>";
//}


?>