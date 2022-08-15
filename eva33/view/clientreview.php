<?php
session_start(); 

?>


<html>
<body style="background-color:#82bda0";>

<h2 style="text-align:center;background-color:#94d9d7;font-size:50px;">Client Review</h2>
<h4> Hello user,if you choice our product or you face any issue you  can let us know here .</h4>
<h4>If you have any problem with our site you can give review about our site. </h4>
<h3>Thank you.</h3>


<table>
    <tr><td>

<tr><td></td></tr>
<form method="post" id="myForm" action="clientreview.php" onSubmit="alert('Thank you for your review.');" >
<b>Review Here: <br><br>
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