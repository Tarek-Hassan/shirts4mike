<?php
try{
$db= new PDO("mysql:host=localhost;dbname=neural;port=3306","root","");
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $db->exec("SET NAMES 'utf8'");
    

}catch( Exception $e ){?>
    <script>
    alert("you can't connect to the databasse");
    </script>
    <?php 
    exit;
    
}
?>

<?php
// this quary for  execuit 
//include("databasse.php");
//try{
//    $res =$db->query("SELECT * FROM proj");
//    
//}
//catch(Exception $e)
//{
//    echo"your quary don,t execute";
//    exit;
//}
//$pro=$res->FetchAll(PDO::FETCH_ASSOC);
//    return $pro;
?>

<?php // this quary for  execuit  using prepare
//include("databasse.php");
//try{
//    $res =$db->prepare("SELECT * FROM proj where $sid=?");
//$res->bindparam(1,$ks);
//$res->execute();
//    
//}
//catch(Exception $e)
//{
//    echo"your quary don,t execute";
//    exit;
//}


//product["size"]=array();
// when using while fatch  should use array
//while($row=$res->FetchAll(PDO::FETCH_ASSOC)){
//$product["size"][]=$row[];
//PDO::PARAM_INT  // PDO  for integer
//}?>
//  <?php // this quary for  execuit search 
//include("databasse.php");
//try{
//    $res =$db->prepar("
//                        SELECT *  FROM proj  WHERE NAME LIKE '%?%' ORDER BY  ASC
//                        ");
//                        $res->bindparam(1,$nnnnnn);
//                        res->execute();
//      $res =$db->prepar("
//                        SELECT *  FROM proj  WHERE NAME LIKE ? ORDER BY  ASC
//                        ");
//                        $res->bindValue(1,"%" .$s."%");
//                        res->execute();
    
//    
//}
//catch(Exception $e)
//{
//    echo"not found";
//    exit;
//}
//$pro=$res->Fetch(PDO::FETCH_ASSOC);
//    return $pro;
?>

    