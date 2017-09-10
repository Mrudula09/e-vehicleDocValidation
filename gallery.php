<?php include 'database.php' ; ?>
<?php 
	session_start();
	$emailid = $_SESSION['user'];
	$query = "SELECT * FROM user WHERE emailid='$emailid'";
	$result = mysqli_query($con,$query);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$name = $row['name'];
	$emailid = $row['emailid'];
?>
<?php
	if(isset($_FILES['image1'])){
      $errors= array();
      $file_name = $_FILES['image1']['name'];
      $file_size =$_FILES['image1']['size'];
      $file_tmp =$_FILES['image1']['tmp_name'];
      $file_type=$_FILES['image1']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image1']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
	$img1="images/".$file_name;
         echo "Success";
      }else{
    //     print_r($errors);
      }
   }
	if(isset($_FILES['image2'])){
      $errors= array();
      $file_name = $_FILES['image2']['name'];
      $file_size =$_FILES['image2']['size'];
      $file_tmp =$_FILES['image2']['tmp_name'];
      $file_type=$_FILES['image2']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image2']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
	$img2="images/".$file_name;
         echo "Success";
      }else{
    //     print_r($errors);
      }
   }
	if(isset($_FILES['image3'])){
      $errors= array();
      $file_name = $_FILES['image3']['name'];
      $file_size =$_FILES['image3']['size'];
      $file_tmp =$_FILES['image3']['tmp_name'];
      $file_type=$_FILES['image3']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image3']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
	$img3="images/".$file_name;
         echo "Success";
      }else{
    //     print_r($errors);
      }
   }
if(isset($_FILES['image4'])){
      $errors= array();
      $file_name = $_FILES['image4']['name'];
      $file_size =$_FILES['image4']['size'];
      $file_tmp=$_FILES['image4']['tmp_name'];
      $file_type=$_FILES['image4']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image4']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
	$img4="images/".$file_name;
         echo "Success";
      }else{
      //   print_r($errors);
      }
   }
	if(isset($_FILES['image5'])){
      $errors= array();
      $file_name = $_FILES['image5']['name'];
      $file_size =$_FILES['image5']['size'];
      $file_tmp =$_FILES['image5']['tmp_name'];
      $file_type=$_FILES['image5']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image5']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
	$img5="images/".$file_name;
         echo "Success";
      }else{
     //    print_r($errors);
      }
	$name=$_POST['name'];
	$licenseno=$_POST['licno'];
	$rcno=$_POST['rcno'];
	$query="INSERT into details values('$name','$licno','$img1','$img2','$rcno','$img3','$img4','$img5')";
	$conn->query($query);
   }
?>
<html>
<head>	
	<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="gallery.css">
		<link rel="stylesheet" href="gallery2.css">
		<script type="text/javascript" src="gallery.js"></script>
		<meta name="veiwport" content="width=device-width, intial-scale=1,user-scalable=no">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js">
		</script>
		<style>
.kv-avatar .krajee-default.file-preview-frame,.kv-avatar .krajee-default.file-preview-frame:hover {
    margin: 0;
    padding: 0;
    border: none;
    box-shadow: none;
    text-align: center;
}
.kv-avatar {
    display: inline-block;
}
.kv-avatar .file-input {
    display: table-cell;
    width: 213px;
}
.kv-reqd {
    color: red;
    font-family: monospace;
    font-weight: normal;
}
</style>
<script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
	<head>
<body>
<div id="kv-avatar-errors-2" class="center-block" style="width:800px;display:none"></div>
</br>
</br>
 <div class="container">
        <div class="row">
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 class="gallery-title">V-WALLET</h1>
        </div>
        <br/>
		<form action="" method="POST" enctype="multipart/form-data">
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
				<input type="file" name="image1" onchange="readURL(this);"/>
				<img id="blah" src="#" alt="your image" />
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
				<input type="file" name="image2" onchange="readURL(this);"/>
				<img id="blah" src="#" alt="your image" />

            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <input type="file" name="image3" onchange="readURL(this);"/>
				<img id="blah" src="#" alt="your image" />
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <input type="file" name="image4" onchange="readURL(this);"/>
				<img id="blah" src="#" alt="your image" />

            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <input type="file" name="image5" onchange="readURL(this);"/>
				<img id="blah" src="#" alt="your image" />

            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <input type="file" name="image6" onchange="readURL(this);"/>
				<img id="blah" src="#" alt="your image" />
            </div>
		</form>
        </div>
    </div>
	<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                <form class="form-signin" method="post" action="process3.php">
                <input type="text" class="form-control" name="lid" value="lid"  placeholder="LICENSE NO" required autofocus>
                <input type="text" class="form-control" name="rnumber" value="rnumber" placeholder="REGISTRATION NO" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    CHECK</button>
                </form>
            </div>
        </div>
    </div>
</div>
</section>
</body>
<script>
var btnCust = '<button type="button" class="btn btn-secondary" title="Add picture tags" ' + 
    'onclick="alert(\'Call your custom code here.\')">' +
    '<i class="glyphicon glyphicon-tag"></i>' +
    '</button>'; 
$("#avatar-1").fileinput({
    overwriteInitial: true,
    maxFileSize: 1500,
    showClose: false,
    showCaption: false,
    browseLabel: '',
    removeLabel: '',
    browseIcon: '<i class="glyphicon glyphicon-folder-open"></i>',
    removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
    removeTitle: 'Cancel or reset changes',
    elErrorContainer: '#kv-avatar-errors-1',
    msgErrorClass: 'alert alert-block alert-danger',
    defaultPreviewContent: '<img src="/uploads/default_avatar_male.jpg" alt="Your Avatar">',
    layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
    allowedFileExtensions: ["jpg", "png", "gif"]
});
</script>
</html>