<?php  



?>



<!DOCTYPE html>

<html lang="ar" dir="rtl">

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
text-shadow: rgba(175, 185, 184, 0.61) 0px 1px;


}
								#sel{
margin-top: 10px;
padding: 10px;
background: #eaeaea;
border-radius: 10px ;
width: 100%;


}
								 #qa{
								 width: 50%;
  background: #eaffea;
  border-radius: 2px  11px ;
  }
   #help ,h3{
  padding: 4px;
  border: 2px solid #96968a; width: 100%; 
  
  border-radius: 23px  1px ;
  font-size: 15px;
  }
   #help{
  padding: 4px;
  border: 2px solid #96968a; width: 70%; 
  
  border-radius: 23px  1px ;
  font-size: 15px;
  }
				</style>
</head>
<body style="background-image: url(wedding halls/bac.webp);
background-size: cover;">


<br><br>
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>تأكيد الحجز</strong> اكمل البيانات
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
	
					
<center>
				
				<form> <label style="color:#eaffea;">اسم الحاجز</label>
								<input  id="sel"type="text"  name="fullname" placeholder="اسمك الرباعي" required minlength="30" maxlength="30">
								<br><label style="color:#eaffea;">نوع العرس</label>
								<select required id="sel"  >
								
												<option>رجال</option>
												<option>نساء</option>
								</select>
								<label style="color:#eaffea;">تاريخ الحجز</label><br><br>
							<input id="qa" type="date" value="2022-02-02" required max="2023-05-05" min="2022-03-03">	
							
							
							
								<br><br>
								<button type="sudmit" id="qa"> حجز</button>
								
								
				</form>

  			</center>	
  		</center>	
  
</div>

<br>
<hr> <center>
				

<div id="help" class="card mb-3" style="max-width: 100%"> <center>
				
<h3>مساعدة حلم العاصمة</h3>
			<center>	<img src="wedding halls/logo.jpg" width="50%"alt="">
				</center>
				<br>
				       <p>
               ««     أخبرنا عن تفاصيل القاعة التي تبحث عنها، سيقوم فريقنا لتنظيم حفلات الزفاف بإرسال قاعات تناسب احتياجاتك مجاناً!»»
                </p> </center> 
              <center>
              				
           <a href="comm.php">  <button class="btn btn-danger" >
   				تواصل
   				 </button></a> </center>  
</div></center>
<br>
<hr>
</body>
</html>
