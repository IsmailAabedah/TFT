<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registration</title>
</head>



<script type="text/javascript">
  function validateForm()
  {

    var a=document.forms["reg"]["fullname"].value;
    var c=document.forms["reg"]["email"].value;
    var d=document.forms["reg"]["contact"].value;
    var e=document.forms["reg"]["username"].value;
    var f=document.forms["reg"]["password"].value;
	
  
    if ((a==null || a=="") && (c==null || c=="") &&
	 (d==null || d=="") && (e==null || e=="") && (f==null || f==""))
    {
      alert("All Field must be filled out");
      return false;
    }
    if (a==null || a=="")
    {
      alert("Your full name must be filled out");
      return false;
    }

    if (c==null || c=="")
    {
      alert("Email name must be filled out");
      return false;
    }
    if (d==null || d=="")
    {
      alert("Contact must be filled out");
      return false;
    }
    if (e==null || e=="")
    {
      alert("username must be filled out");
      return false;
    }
    if (f==null || f=="")
    {
      alert("password must be filled out");
      return false;
    }
	
    var RE =/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im ;
    if(!RE.test(d))
    {
        alert("You have entered an invalid phone number");
        return false;
    }
	
	var atpos = c.indexOf("@");
    var dotpos = c.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert(d.value);
        return false;
    }
	
	
	
	
	
  
	
	
	
	
	
  }
</script>




<body>
 
<form name="reg" action="code_exec.php" onsubmit="return validateForm()" method="post">
  <table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td colspan="2">
        <div align="center">
          <?php 
          // $remarks=$_GET['remarks'];
          if (!isset($_GET['remarks']))
          {
            echo 'Moderator registration Here ';
          }
          if (isset($_GET['remarks']) && $_GET['remarks']=='success')
          {
            echo 'Registration Success';
          }
          ?>  
        </div></td>
      </tr>
      <tr>
        <td width="95"><div align="right">Full Name:</div></td>
        <td width="171"><input type="text" name="fullname" /></td>
      </tr>
      <tr>
        <td><div align="right">Email:</div></td>
        <td><input type="text" name="email" /></td>
      </tr>
      <tr>
        <td><div align="right">Contact No.:</div></td>
        <td><input type="text" name="contact" /></td>
      </tr>
      <tr>
        <td><div align="right">Username:</div></td>
        <td><input type="text" name="username" /></td>
      </tr>
      <tr>
        <td><div align="right">Password:</div></td>
        <td><input type="text" name="password" /></td>
      </tr>
      <tr>
        <td><div align="right"></div></td>
        <td><input name="submit" type="submit" value="Submit" /></td>
      </tr>
    </table>
  </form>
</body>
</html>