<?php
session_start(); 

?>


<html>
<body style="background-color:#82bda0";>

<h2 style="text-align:center;background-color:#94d9d7;font-size:50px;">Report Issue</h2>

<h4>Hello user,If you have any problem with our site you can give let us know your problems.</h4>
<h3>Thank you.</h3>


<table>
    <tr><td>

<tr><td></td></tr>
<form method="post" id="myForm" action="reportissue.php.php" onSubmit="alert('Thank you for your review.');" >
<b>Report your issue here : <br><br>
Comment: <textarea name="comment" rows="5" cols="40"></textarea>
<br>
<br>
<input type="submit">
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