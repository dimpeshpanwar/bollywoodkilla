
<?php include('connection.php');
$function_name="";
function insert($table,$col=[],$val=[])
{	global $conn,$function_name;
	
	$col=implode("`,`",$col);
	
	$val=implode("','",$val);
	$sql="insert into $table (`".$col."`) VALUES ('".$val."')";
	//echo "$sql";
	if($conn->exec($sql))
		{ 
			
		 if($function_name!="imgname")
		  {echo "<script>alert('Data Inserted Successfully');</script>";} 
		 
		} 
		
	else echo "<script>alert('Data Insertion Fail:');</script>";
	$function_name="";
}

//insert('MyGuests',$col=['firstname'],['mohit']);

function read($table,$id)
{
	global $conn;
	$sql="Select * from $table Where id=:id";
	$stmt=$conn->prepare($sql);
	$stmt->bindParam(':id',$id);
	$stmt->execute();
	$result=$stmt->setFetchMode(PDO:: FETCH_ASSOC);
	if($result)
	{
		$data = $stmt->fetchall();
		return $data[0];
	}
}
//$data = read('MyGuests',2);
//print_r($data);

function update($table,$id,$col=[],$val=[])
{
	global $conn;
	$sql="Update `$table` SET ";
	$i=0;
	foreach ($col as $c) {
		$sql=$sql."`".$c."`='".$val[$i]."',";
		$i++;
	}

	
	$len =strlen($sql)-1;
	$sql=substr($sql,0,$len);//comma removing form after last column
	$sql=$sql." where id=:id";
	
	$stmt=$conn->prepare($sql);
	$stmt->bindParam(':id',$id);
	$stmt->execute();
}
//update('MyGuests',2,['firstname','lastname'],['Tony','stark']);

function count1($table){
	global $conn;
	$sql="Select COUNT(*) from $table";
	$stmt=$conn->prepare($sql);
	$stmt->execute();
	$data = $stmt->fetchColumn();
	return $data;
	
}
 
function imgname($name)
{	 global $function_name;
	$function_name="imgname";
	insert('imgname',$col=['name'],$val=[$name]);
}

function image_formate($w,$h,$image,$uploadedfile)
{  //echo var_dump($_FILES);
	if($image!="")
            {
                
                if ($image) 
                {	$filename = stripslashes($image);
                	$extension = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
                	$x=count1('imagename');
                	$tname=explode(".",$filename);//extension removal
                	$name=$tname[0].$x.".".$extension;//make a new file name i.e. filename+maxid+extention
                    
                    $image=$name;//new name is assigned to imag.
                    //$extension = getExtension($filename);
                    //$extension = strtolower($extension);
                    if($extension=="gif")
                    {	
                        $filename = "assets/images/".$image;
                        move_uploaded_file($uploadedfile,$filename);
                    }
                    else if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png")) 
                    {
                        echo ' Unknown Image extension ';
                        $errors=1;
                    }
                    else
                    {
                        $size=filesize($uploadedfile);
                        if($extension=="jpg" || $extension=="jpeg" )
                        {
                            $uploadedfile = $uploadedfile;
                            $src = imagecreatefromjpeg($uploadedfile);
                        }
                        else if($extension=="png")
                        {
                            $uploadedfile = $uploadedfile;
                            $src = imagecreatefrompng($uploadedfile);
                        }
                        list($width,$height)=getimagesize($uploadedfile);
                        
                        $newwidth=$w;
                        $newheight=$h;
                        $tmp=imagecreatetruecolor($newwidth,$newheight);
                        imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
                        $filename = "images/". $image;
                        $filename1 = "images/". $image;
                        
                        imagejpeg($tmp,$filename,100);
                        imagedestroy($src);
                        imagedestroy($tmp);
                        //insert into database
                        imgname($name);//new name is inserted into database.
                        return $filename1;
                    }
                }
            }
}

function delete($table,$id)
{
	global $conn;
	
	$sql="DELETE FROM `".$table."` WHERE `id` = '".$id."'";
	//echo "$sql";
	if($conn->exec($sql))
		{ 
		  echo "<script>alert('Data Deleted Successfully');</script>"; 
		} 
		
	else echo "<script>alert('Data Deletion Failed');</script>";
	
del($table);

}
function del($table)
{
	global $conn;
	
	$sql="ALTER TABLE `".$table."` DROP COLUMN `id`";
	//echo "$sql";
	if($conn->exec($sql))
		{  
			//echo "<script>alert('Id Deleted');</script>";
		} 
		
	else echo "<script>alert('Id Deletion Failed');</script>";
	
	createid($table);

}

function createid($table)
{	global $conn;
	$sql="ALTER TABLE `".$table."` ADD `id` INT(11) NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (`id`);";
$conn->exec($sql);
				} 
		
 ?>

