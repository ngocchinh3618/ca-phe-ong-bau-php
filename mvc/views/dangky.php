<script type="text/javascript">
$(document).ready(function(e) {
	$("#email").attr("disabled","true");
		$("#psw").attr("disabled","true");
		$("#phoneNumber").attr("disabled","true");
    $("#name").blur(function(){
		$.ajax({
			type:"POST",
			url:"./mvc/controllers/process.php",
			data:"name="+ $("#name").val(),
			success: function(html)
			{
				if(html=="co")
          $("#kqname").html("User nay da co roi. Moi ban chon user khac!");
        else if(html == "hoa")
        $("#kqname").html("Khong duoc de trong");
				else
					{
						$("#kqname").html("User nay co the su dung!");
						$("#email").removeAttr("disabled");

					}
			}
			
			})
		
		})
	
	$("#name").focus(function(){
		
		$("#email").attr("disabled","true");
		$("#psw").attr("disabled","true");
		$("#phoneNumber").attr("disabled","true");
		$("#kqname").html(" ");
		
    })
    
    $("#email").blur(function(){
		$.ajax({
			type:"POST",
			url:"./mvc/controllers/process.php",
			data:"email="+ $("#email").val(),
			success: function(html)
			{
				if(html=="co")
          $("#kqemail").html("email nay da co roi. Moi ban chon email khac!");
        else if(html == "hoa")
        $("#kqemail").html("Khong duoc de trong");
				else
					{
                        $("#kqemail").html("email nay co the su dung!");
                        $("#psw").removeAttr("disabled");
					}
			}
			
			})
		
		})
	
	$("#email").focus(function(){
		
		$("#psw").attr("disabled","true");
		$("#phoneNumber").attr("disabled","true");
		$("#kqemail").html(" ");
		
	})
    
    $("#psw").blur(function(){
		$.ajax({
			type:"POST",
			url:"./mvc/controllers/process.php",
			data:"psw="+ $("#psw").val(),
			success: function(html)
			{
				if(html == "hoa")
					$("#kqpsw").html("Khong duoc de trong");
				else
				{
					$("#kqpsw").html("psw nay co the su dung!");
					$("#phoneNumber").removeAttr("disabled");
				}
			}
			
		})
		
	})
	
	$("#psw").focus(function(){
		
		$("#phoneNumber").attr("disabled","true");
		$("#kqpsw").html(" ");
		
	})
    
    $("#phoneNumber").blur(function(){
		$.ajax({
			type:"POST",
			url:"./mvc/controllers/process.php",
			data:"phoneNumber="+ $("#phoneNumber").val(),
			success: function(html)
			{
				if(html=="co")
          $("#kqphoneNumber").html("sdt nay da co roi. Moi ban chon sdt khac!");
        else if(html == "hoa")
        $("#kqphoneNumber").html("Khong duoc de trong");
				else
					{
                        $("#kqphoneNumber").html("sdt nay co the su dung!");
                        $("#myBBtn").removeAttr("disabled");
					}
			}
			
			})
		
		})
	
	$("#phoneNumber").focus(function(){
		
		$("#myBBtn").attr("disabled","true");
		$("#kqphoneNumber").html(" ");
		
	})
    

});

</script>
<form id="form1" name="form1" method="post" action="./mvc/controllers/process.php" class="form_container">
<h1>????ng k?? l??m th??nh vi??n</h1>
<p>??i???n th??ng tin c???a b???n v??o ????y.</p>
<hr>

<label for="name"><b>T??n</b></label>
<input type="text" name="name" id="name" placeholder="Nh???p t??n" required/>
<p id="kqname"></p>

<label for="email"><b>Email</b></label>
<input type="text" placeholder="Nh???p Email" name="email"  id="email" required>
<p id="kqemail"></p>

<label for="psw"><b>Password</b></label>
<input type="password" placeholder="Nh???p Password" name="psw" id="psw" required>
<p id="kqpsw"></p>

<label for="phoneNumber"><b>S??t</b></label>
<input type="text" name="phoneNumber" id="phoneNumber" placeholder="Nh???p S??t" required/>
<p id="kqphoneNumber"></p>

<hr>
<button type="submit" name="myBBtn" id="myBBtn" class="registerbtn" disabled><b>????ng k??</b></button>

</form>
