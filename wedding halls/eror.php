<?php  



?>



<!DOCTYPE html>

<html lang="ar" dir="rtl">
<meta charset="utf-8">

<head>
  <meta http-equiv="refresh" content="150" >

				
				<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
				<meta charset="UTF-8">
				<title>التحقق من المنطقة</title>
	<meta name="viewport" content="width=device-width, initeal-scale=1">
				<style>
								
								*{

padding: 0;

margin: 0;
font-weight: normal;
   font-family: 'Cairo', sans-serif;
text-decoration: none;
text-shadow: rgba(175, 185, 184, 0.61) 1px 1px;


}
								#sel{
margin-top: 50px;
padding: 10px;
background: #eaeaea;
border-radius: 10px ;
width: 100%;


}
								
				</style>
</head>
<body style="background-image: url(bac.webp);
background-size: cover;">
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>تأكيد البحث</strong> حدد المنطقة
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
	
					
<center>
				

  		<select name="forma" onchange="location = this.value;"  id="sel">
  <option value="#"  > حدد منطقتك ? </option>
			<option value="index.php" >السبعين</option>
  	<option value="index2.php" >التحرير</option>
  	<option value="index3.php" >الوحدة</option>
  	<option value="index4.php" >صنعاء القديمة</option>
  		<option value="index3.php" >بني الحارث</option>
  	<option value="index2.php" >الصافية</option>
  	<option value="index2.php" >شعوب</option>
  	<option value="index2.php" >الثورة</option>
  		<option value="index2.php" >معين</option>
  	<option value="index2.php" >ازال</option>
  	</center>
  		</select>			</center>	<div class="d-flex justify-content-center"> <div class="spinner-border" role="status"> <span class="visually-hidden">Loading...</span> </div> </div>		<br>
  		</center>	
</body>
</html>
