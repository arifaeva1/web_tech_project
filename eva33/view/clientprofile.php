<?php
session_start(); 

?>


<html>
<body style="background-color:#82bda0";>

<h2 style="text-align:center;background-color:#94d9d7;font-size:50px;">user profile</h2>
<h4> Hello user,welcome to your profile.You can change your information from here.Also can update your profile </h4>
<h4> </h4>
<h3>Thank you.</h3>


<table>
    <tr><td>

<tr><td></td></tr>
<form method="post" id="myForm" action="clientprofile.php" onSubmit="alert('your profile is updated');" >
<lable> change information</lable>

			<input type="txt" name="text">
      <br>
      <input type="submit" value="update">

</form>
<br>
<br>
<br>
<br>

            <tr>
                <td> <a href="../view/clienthome.php">
                        <h3><i>Back</h3></i>
                    </a></td>
            </tr>
            




    </table>
</body>
</html>