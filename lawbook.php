<table>
<?php
//fetch.php

$connect = new PDO('mysql:host=localhost;dbname=csv_db', 'root', '');

$query = "
SELECT * FROM table2 where CATEGORYID='14'  ORDER BY id ASC limit 0,7
";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$output = '';
foreach($result as $row)
{$name=$row['TITLE'];
  $name2=$row['AUTHOR'];
 $rating = countin_ratin($row['id'], $connect);
 $color = '';
 $output .= '<th><img src='.$row['IMAGEURL'].' width=150 height=180 style="margin-left:50px; margin-top:0px;">
 <ul class="list-inline" data-rating="'.$rating.'" title="Average Rating - '.$rating.'"style=margin-left:50px;>
 ';
 
 for($count=1; $count<=5; $count++)
 {
  if($count <= $rating)
  {
   $color = 'color:#ffcc00;';
  }
  else
  {
   $color = 'color:#ccc;';
  }
  $output .= '<li title="'.$count.'" id="'.$row['id'].'-'.$count.'" data-index="'.$count.'"  data-business_id="'.$row['id'].'" data-rating="'.$rating.'" class="rating" style="cursor:pointer; display:inline;float:top;'.$color.' font-size:16px;">&#9733;</li>';
 }
 $output .= '
 </ul>
 <p style="color:rgb(226, 226, 226); margin-left:50px;font-size:13px;">'.$row["TITLE"].'</p>
 <p style="color:rgb(226, 226, 226);padding-left:50px;font-size:13px;">'.$row["AUTHOR"].'</p>
 <label style="color:rgb(226, 226, 226);padding-left:50px;font-size:13px;">'.$row["CATEGORY"].'</label></th>
 ';
}
echo $output;

function countin_ratin($business_id, $connect)
{
 $output = 0;
 $query = "SELECT AVG(rating) as rating FROM rating WHERE business_id = '".$business_id."'";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 if($total_row > 0)
 {
  foreach($result as $row)
  {
   $output = round($row["rating"]);
  }
 }
 return $output;
}

?>
</table>