<?php
$cptInsert = 0;
session_start();    
echo session_id();

if($_SERVER['REQUEST_METHOD'] == "POST" AND isset($_POST['Ajout']) AND $GLOBALS['cptInsert'] < 1)
{
    var_dump($_POST);
    $GLOBALS['cptInsert'] = $GLOBALS['cptInsert'] + 1;
    include("connect.inc.php");
    $reqInsert = "INSERT INTO Panier (idPanier, idDetailProduit, nomProduit, descriptionProduit, tailleProduit, colorisProduit, prixProduit, qtePanier) VALUES(:pIdPanier, :pIdP, :pNomP, :pDescP, :pSizeP, :pColP, :pPrixP, :pQteP)";						 
    $insertPanier = oci_parse($connect, $reqInsert);
    $idUser = session_id();
    $idDetailProd = $_GET["id"];
    $nomProd = $_GET["nomProd"];
    $descProd = $_GET["descProd"] ; 
    $sizeProd = $_POST["LDTaille"];
    $colorProd = $_POST["LDColor"];
    $prixProd = $_GET["prixProd"];
    $qteProd = $_POST["quantiteSelectionne"];
    oci_bind_by_name($insertPanier, ":pIdPanier", $idUser);
    oci_bind_by_name($insertPanier, ":pIdP", $idDetailProd);
    oci_bind_by_name($insertPanier, ":pNomP", $nomProd);
    oci_bind_by_name($insertPanier, ":pDescP", $descProd);
    oci_bind_by_name($insertPanier, ":pSizeP", $sizeProd);
    oci_bind_by_name($insertPanier, ":pColP", $colorProd);
    oci_bind_by_name($insertPanier, ":pPrixP", $prixProd);
    oci_bind_by_name($insertPanier, ":pQteP", $qteProd);

    $result = oci_execute($insertPanier);
    if (!$result) {
        $e = oci_error($insertPanier); 
        print htmlentities($e['message'].' pour cette requete : '.$e['sqltext']);		
    }
    oci_commit($connect);
    oci_free_statement($insertPanier);
    $_SESSION['message'] = "Ajouté au Panier !";

    header("Location: ConsultOneProduct.php?id=$idDetailProd");
}
?>