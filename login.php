<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	
  // username and password sent from form 
  $user_name = $_GET['user_name'];
  echo 'test echo line 13 php ';
  echo 'Hello ['.$user_name.']!';
 // $password = $_GET['password']; 


 // $sql="SELECT * FROM user_db WHERE user_name ='$user_name' and password ='$password'"; 
  $sql="SELECT * FROM user_db WHERE user_name ='$user_name'"; 
  //SELECT * FROM users_db WHERE user_name ='Imaan' and password ='1234';
  //"insert into users_db (user_id,user_name,password,role) values ('$user_id','$user_name','$password','$role')";
  $result = mysqli_query($con, $query);


  // Mysql_num_row is counting table row
  $count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){}

     // Register $myusername, $mypassword and redirect to file "login_success.php"
     $role = mysqli_fetch_array($result);


      if($role == "1"){
        header("location:index.php");
            exit();
      }
      elseif($role['role'] == "2"){
  header("location:index2.php");
        exit();
     }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<style type="text/css">
	
	#text{

		height: 30px;
		border-radius: 10px;
		padding: 8px;
		border: solid thin white;
		width: 100%;
	}
		
#button{

padding: 20px;
width: 95px;
color: white;
background-color: #2D4363;
border: none;
border-radius: 10px;
font-weight: bold;
font-size: 15px;
}

#box{

background-color: lightblue;
width:300px;
padding:60px;
height: 450px;
position: absolute;
top:50%;
left:50%;
transform: translate(-50%,-50%);
text-align: center;
border-radius: 10px;

}

	</style>

	<div id="box">
		
		<form method="post">
		<form method="post">
		<a href="#" class="logo">
                <img src="Capstone Project\frontpage\images\log02.png" class="logo" width="150px" height="120px">
            </a>
			<h1>Sliver Wood College</h1>
			
			<input id="text" type="text" placeholder="Enter Username" name="user_name"><br><br>
			<input id="text" type="password" placeholder="Enter Password"name="password"><br><br>

			<meta name="role" content="width=device-width, initial-scale=1.0">
<style>
.custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none;
}

.select-selected {
  background-color:#99C2EC;
  border-radius: 5px;
  
}


.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}


.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}


.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}


.select-items {
  position: absolute;
  background-color:#99C2EC;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
  border-radius: 5px;
}


.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
</style>
</head>     

<body>

<div class="custom-select" style="width:100px;">
  <select>
    <option value="0">Select</option>
    <option value="1">Admin</option>
    <option value="2">User</option>
  </select>
</div>

<script>
var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}

document.addEventListener("click", closeAllSelect);
</script>
			<input id="button" type="submit" value="Login"><br><br>
			<a href="signup.php">Click to Sign Up</a><br><br>
		</form>
	</div>
</body>
</html>