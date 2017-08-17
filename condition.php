<?php
	$servername = "localhost";
	$username = "";
	$password = "";
	$dbname = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}
$i=1;
$sql = "SELECT * FROM sensor ORDER BY id ASC ";
$result = $conn->query($sql);
 while($row = $result->fetch_assoc()) {
	if($row["temp"]>20&&$i==1){
		echo nl2br("CROP: WHEAT PRICE: 23.5/KG RAINFALL: 25CM \nCROP: MUSTARD SEEDS PRICE: 45/KG SEASON: WINTER \nCROP: POTATOES PRICE: 5.5/KG \n CROP: GARLIC PRICE: 23.5/KG \nCROP: FENNEL SEEDS PRICE: 110/KG MONTH: JUNE/JULY \nCROP: FENNUGREEK  PRICE: 70/KG");


		 
	   
                
               
                $i=2;

                }
         if($row["temp"]>25&&$i==1){
		echo nl2br("CROP: WHEAT PRICE: 23.5/KG RAINFALL: 25CM \nCROP: MUSTARD SEEDS PRICE: 45/KG SEASON: WINTER \nCROP: POTATOES PRICE: 5.5/KG \n CROP: GARLIC PRICE: 23.5/KG \nCROP: FENNEL SEEDS PRICE: 110/KG MONTH: JUNE/JULY \nCROP: FENNUGREEK  PRICE: 70/KG \nCROP: RICE PRICE: 25/KG");
                $i=2;

                }
         if($row["temp"]>30&&$i==1){
		echo nl2br("CROP: MUSTARD SEEDS PRICE: 45/KG SEASON: WINTER \nCROP: CHICK PEAS PRICE: 75/KG \n CROP: MAIZE PRICE: 5.5/KG \nCROP: FENNEL SEEDS PRICE: 110/KG MONTH: JUNE/JULY \nCROP: FENNUGREEK  PRICE: 70/KG");
                $i=2;

                }
         if($row["temp"]>35&&$i==1){
		echo nl2br("CROP: CHICK PEAS PRICE: 75/KG   \nCROP: FENNEL SEEDS PRICE: 110/KG MONTH: JUNE/JULY \nCROP: FENNUGREEK  PRICE: 70/KG");
                $i=2;

                }




}      
?>