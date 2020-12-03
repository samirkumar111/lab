<?php
$conn=mysqli_connect("localhost","root","","hotel");
$result=$conn->query("select * from details");
$finalarray=array();
while ($row=$result->fetch_assoc())
{
	$sys=["id"=>$row["id"]];
	$fields=["name"=>$row["name"],
			 "slug"=>$row["slug"],
			 "type"=> $row["type"],
			 "price"=> $row["price"],
			 "size"=>$row["size"],
			 "capacity"=> $row["capacity"],
			 "pets"=> $row["pets"],
			 "breakfast"=> $row["breakfast"],
			 "featured"=> $row["featured"],
			 "description"=>$row["description"],
			 "extras"=>explode("<--;-->",$row["extras"]),
			  "Images"=>[array("fields"=>array("file"=>array("url"=>"https://newratechnologies.com/justvend/pimages/sample.png"))),
			array("fields"=>array("file"=>array("url"=>"https://newratechnologies.com/justvend/pimages/sample.png"))),
			array("fields"=>array("file"=>array("url"=>"https://newratechnologies.com/justvend/pimages/sample.png"))),
			array("fields"=>array("file"=>array("url"=>"https://newratechnologies.com/justvend/pimages/sample.png")))
			]
			 ];
	array_push($finalarray,array("sys"=>$sys,"fields"=>$fields));
}

echo (json_encode($finalarray));
?>