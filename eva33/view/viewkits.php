<?php
session_start(); 

?>


<html>
<body style="background-color:#82bda0";>

<h2 style="text-align:center;background-color:#94d9d7;font-size:50px;"> Kit Item</h2>

<h4>
    The Government of Bangladesh has approved the production of a locally developed <br>
    low-cost coronavirus (Covid-19) testing kit to tackle the pandemic Public health organisation Gono Shasthaya Kendra<br>
     that runs hospitals and medical research work in the country developed the kit, which requires some chemical reagents that<br>
    need to be imported.The Directorate General of Drug Administration (DGDA) granted the approval to import raw materials.</h4>
    <br>
<p>you can get your kit here.</p>



    
<form method="post" id="myForm" action="viewkits.php" onSubmit="alert('Thank you for your order.');" >


<p>The select the kit you want to take.</p>


  <label for="kit">Choose your kit type:</label>
  <select name="kits" id="kits">
    <option value="1COPY COVID-19 QPCR KIT">1COPY COVID-19 QPCR KIT</option>
    <option value="TRUPCR SARS-CoV-2 Kit">TRUPCR SARS-CoV-2 Kit</option>
    <option value="3DMed 2019-nCoV RT-qPCR Detection Ki">3DMed 2019-nCoV RT-qPCR Detection Ki</option>
    <option value="ID NOW COVID-19 Test Kit">ID NOW COVID-19 Test Kit</option>
    <option value="ID NOW COVID-19 2.0 TestKit">ID NOW COVID-19 2.0 TestKit</option>
    <option value="Alinity m SARS-CoV-2 AMPKit ">Alinity m SARS-CoV-2 AMPKit </option>


    <option value="Abbott RealTime SARS-CoV-2RT-PCR Kit ">Abbott RealTime SARS-CoV-2RT-PCR Kit </option>
    <option value="MassARRAY® SARS-CoV-2Panel">MassARRAY® SARS-CoV-2Panel</option>
   
    
  </select>
  <br><br>


  <p>The select the amount of  kit you want to take.</p>

<lable> kit amount</lable>

			<input type="txt" name="text">
      <br>
      <input type="submit" value="Submit">
</form>



<br>
<br>
<br>


         
                 <a href="../view/clienthome.php">
                        <h3><i>Back</h3></i>
                    </a>
           
            





</body>
</html>







