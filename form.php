<!DOCTYPE html>
<html>
<head>
	<title>Add New Employee Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php        
    //define variables and set to empty
    $nameErr= $genderErr = $maritalErr = $numberErr = $emailErr = $addressErr = $date_of_birthErr = $date_of_hiringErr = $departmentErr = $nationalityErr = "";
    $name= $gender = $marital = $number = $email = $address = $date_of_birth = $date_of_hiring = $department = $nationality = "";

        if($_SERVER["REQUEST_METHOD"] == "POST") 
        {
        
          if(empty($_POST["name"])) {
               $fullnameErr = "Please Enter Valid Name" ;
               }
           else { 
               $name = test_input($_POST["name"]);
               if(!preg_match ("/^[a-zA-z]*$/", $name) ) {
               $nameErr = "Only alphabets and whitespace are allowed.";    
                    }
          
               }
        
    

        if(empty($_POST["email"])) {
            $emailErr = " Invalid Email Address";
        }
        else {
            $email = test_input($_POST["email"]);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = " The Email address is incorrect";
            }
          }   
            


        if(empty($_POST["gender"])) {
            $genderErr = "Please Select a Gender"; 
        }
        else {
            $gender = test_input($_POST["gender"]);
            }



        if(empty($_POST["marital"])) {
            $maritalErr = "Please Select a marital status"; 
        }
        else {
            $marital = test_input($_POST["marital"]);
            }
        


        if(empty($_POST["number"])) {
            $numberErr = "Please Enter Phone Number"; 
            }
        else {
                $number = test_input($_POST["number"]);
                if (!preg_match ("/^[0-9]*$/", $number) ){  
                    $numberErr = "Only numeric value is allowed.";
                } 
               }
        

        if(empty($_POST["address"])) {
             $addressErr = "Please Enter The Address"; 
                    }
        else {
            $address = test_input($_POST["address"]);
            if (!preg_match ("/^\\d+ [a-zA-Z ]+, \\d+ [a-zA-Z ]+, [a-zA-Z ]+$/", $address) ) {  
            $addressErr = "";
                }
               } 
        
         if(empty($_POST["date_of_birth"])) {
            $date_of_birthErr = "Please Select Date of Birth"; 
        }
        else {
            $date_of_birth = test_input($_POST["date_of_birth"]);
            }
        

        if(empty($_POST["date_of_birth"])) {
            $date_of_birthErr = "Please Select Date of Birth"; 
        }
        else {
            $date_of_birth = test_input($_POST["date_of_birth"]);
            }

        if(empty($_POST["date_of_hiring"])) {
        $date_of_hiringErr = "Please Select Date of Hiring"; 
        }
        else {
            $date_of_hiring = test_input($_POST["date_of_hiring"]);
            }

        if(empty($_POST["department"])) {
             $departmentErr = "Please Enter Department"; 
                    }
        else {
            $department = test_input($_POST["department"]);
            if (!preg_match ("/^[a-zA-z]*$/", $department) ) {  
            $departmentErr = "Only alphabets and whitespace are allowed.";
                } 
               }

        if(empty($_POST["nationality"])) {
        $nationalityErr = "Please Select Nationality"; 
        }
        else {
            $nationality = test_input($_POST["nationality"]);
            }

     }
        function test_input ($data) {
               $data = trim($data);
               $data = stripslashes($data);
               $data = htmlspecialchars($data);
               return $data;
        }
     
        
?>
     <form method="post" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
     <h2>Add New Employee</h2>
                    
                    <label>Name</label>
     	          <input    type="text" 
                              name="name" 
                              placeholder="Name"><span class="error">* <?php echo $nameErr;?><br>
      <div class="row">
      <div class="column">
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender">
	                    <option value=""selected>--- Select Gender ---</option>
	                    <option value="Male">Male</option>
	                    <option value="Female" >Female</option>
	                    <option value="RNTS">Rather Not To Say</option>
                    </select><span class="error">* <?php echo $genderErr;?><br><br>
      </div>             
      <div class="column">
                    <label for="marital">Marital Status</label>
                    <select name="marital" id="marital">
                      <option value=""selected>--- Select Status ---</option>
                      <option value="Single">Single</option>
                      <option value="Married" >Married</option>
                      <option value="Divorced">Divorced</option>
                    </select><span class="error">* <?php echo $maritalErr;?><br>
     </div>  
     </div>
                    <label>Phone Number</label>
     	          <input    type="text" 
                              name="number" 
                              placeholder="Phone Number"><span class="error">* <?php echo $numberErr;?> </span><br><br>

                    <label>Email</label>
     	          <input    type="text" 
                              name="email" 
                              placeholder="Email"><span class="error">* <?php echo $emailErr;?></span><br><br>

                    <label>Address</label>
     	          <input    type="text" 
                              name="address" 
                              placeholder="Address"><span class="error">* <?php echo $addressErr;?></span><br><br>

                    <label>Date of Birth</label>
     	          <input    type="date" 
                              name="date_of_birth" 
                              placeholder="Date of Birth"><span class="error">* <?php echo $date_of_birthErr;?></span><br><br>

                    <label>Hire Date</label>
     	          <input    type="date" 
                              name="date_of_hiring" 
                              placeholder="Hire Date"><span class="error">* <?php echo $date_of_hiringErr;?></span><br><br>

                    <label>Department</label>
     	          <input    type="text" 
                              name="department" 
                              placeholder="Department"><span class="error">* <?php echo $departmentErr;?></span><br><br>

     <div class="row">
     <div class="column">
                    <label>Nationality</label>
     	          <select name="nationality">
                                                                      <option value="">-- select one --</option>
                                                                      <option value="afghan">Afghan</option>
                                                                      <option value="albanian">Albanian</option>
                                                                      <option value="algerian">Algerian</option>
                                                                      <option value="american">American</option>
                                                                      <option value="andorran">Andorran</option>
                                                                      <option value="angolan">Angolan</option>
                                                                      <option value="antiguans">Antiguans</option>
                                                                      <option value="argentinean">Argentinean</option>
                                                                      <option value="armenian">Armenian</option>
                                                                      <option value="australian">Australian</option>
                                                                      <option value="austrian">Austrian</option>
                                                                      <option value="azerbaijani">Azerbaijani</option>
                                                                      <option value="bahamian">Bahamian</option>
                                                                      <option value="bahraini">Bahraini</option>
                                                                      <option value="bangladeshi">Bangladeshi</option>
                                                                      <option value="barbadian">Barbadian</option>
                                                                      <option value="barbudans">Barbudans</option>
                                                                      <option value="batswana">Batswana</option>
                                                                      <option value="belarusian">Belarusian</option>
                                                                      <option value="belgian">Belgian</option>
                                                                      <option value="belizean">Belizean</option>
                                                                      <option value="beninese">Beninese</option>
                                                                      <option value="bhutanese">Bhutanese</option>
                                                                      <option value="bolivian">Bolivian</option>
                                                                      <option value="bosnian">Bosnian</option>
                                                                      <option value="brazilian">Brazilian</option>
                                                                      <option value="british">British</option>
                                                                      <option value="bruneian">Bruneian</option>
                                                                      <option value="bulgarian">Bulgarian</option>
                                                                      <option value="burkinabe">Burkinabe</option>
                                                                      <option value="burmese">Burmese</option>
                                                                      <option value="burundian">Burundian</option>
                                                                      <option value="cambodian">Cambodian</option>
                                                                      <option value="cameroonian">Cameroonian</option>
                                                                      <option value="canadian">Canadian</option>
                                                                      <option value="cape verdean">Cape Verdean</option>
                                                                      <option value="central african">Central African</option>
                                                                      <option value="chadian">Chadian</option>
                                                                      <option value="chilean">Chilean</option>
                                                                      <option value="chinese">Chinese</option>
                                                                      <option value="colombian">Colombian</option>
                                                                      <option value="comoran">Comoran</option>
                                                                      <option value="congolese">Congolese</option>
                                                                      <option value="costa rican">Costa Rican</option>
                                                                      <option value="croatian">Croatian</option>
                                                                      <option value="cuban">Cuban</option>
                                                                      <option value="cypriot">Cypriot</option>
                                                                      <option value="czech">Czech</option>
                                                                      <option value="danish">Danish</option>
                                                                      <option value="djibouti">Djibouti</option>
                                                                      <option value="dominican">Dominican</option>
                                                                      <option value="dutch">Dutch</option>
                                                                      <option value="east timorese">East Timorese</option>
                                                                      <option value="ecuadorean">Ecuadorean</option>
                                                                      <option value="egyptian">Egyptian</option>
                                                                      <option value="emirian">Emirian</option>
                                                                      <option value="equatorial guinean">Equatorial Guinean</option>
                                                                      <option value="eritrean">Eritrean</option>
                                                                      <option value="estonian">Estonian</option>
                                                                      <option value="ethiopian">Ethiopian</option>
                                                                      <option value="fijian">Fijian</option>
                                                                      <option value="filipino">Filipino</option>
                                                                      <option value="finnish">Finnish</option>
                                                                      <option value="french">French</option>
                                                                      <option value="gabonese">Gabonese</option>
                                                                      <option value="gambian">Gambian</option>
                                                                      <option value="georgian">Georgian</option>
                                                                      <option value="german">German</option>
                                                                      <option value="ghanaian">Ghanaian</option>
                                                                      <option value="greek">Greek</option>
                                                                      <option value="grenadian">Grenadian</option>
                                                                      <option value="guatemalan">Guatemalan</option>
                                                                      <option value="guinea-bissauan">Guinea-Bissauan</option>
                                                                      <option value="guinean">Guinean</option>
                                                                      <option value="guyanese">Guyanese</option>
                                                                      <option value="haitian">Haitian</option>
                                                                      <option value="herzegovinian">Herzegovinian</option>
                                                                      <option value="honduran">Honduran</option>
                                                                      <option value="hungarian">Hungarian</option>
                                                                      <option value="icelander">Icelander</option>
                                                                      <option value="indian">Indian</option>
                                                                      <option value="indonesian">Indonesian</option>
                                                                      <option value="iranian">Iranian</option>
                                                                      <option value="iraqi">Iraqi</option>
                                                                      <option value="irish">Irish</option>
                                                                      <option value="israeli">Israeli</option>
                                                                      <option value="italian">Italian</option>
                                                                      <option value="ivorian">Ivorian</option>
                                                                      <option value="jamaican">Jamaican</option>
                                                                      <option value="japanese">Japanese</option>
                                                                      <option value="jordanian">Jordanian</option>
                                                                      <option value="kazakhstani">Kazakhstani</option>
                                                                      <option value="kenyan">Kenyan</option>
                                                                      <option value="kittian and nevisian">Kittian and Nevisian</option>
                                                                      <option value="kuwaiti">Kuwaiti</option>
                                                                      <option value="kyrgyz">Kyrgyz</option>
                                                                      <option value="laotian">Laotian</option>
                                                                      <option value="latvian">Latvian</option>
                                                                      <option value="lebanese">Lebanese</option>
                                                                      <option value="liberian">Liberian</option>
                                                                      <option value="libyan">Libyan</option>
                                                                      <option value="liechtensteiner">Liechtensteiner</option>
                                                                      <option value="lithuanian">Lithuanian</option>
                                                                      <option value="luxembourger">Luxembourger</option>
                                                                      <option value="macedonian">Macedonian</option>
                                                                      <option value="malagasy">Malagasy</option>
                                                                      <option value="malawian">Malawian</option>
                                                                      <option value="malaysian">Malaysian</option>
                                                                      <option value="maldivan">Maldivan</option>
                                                                      <option value="malian">Malian</option>
                                                                      <option value="maltese">Maltese</option>
                                                                      <option value="marshallese">Marshallese</option>
                                                                      <option value="mauritanian">Mauritanian</option>
                                                                      <option value="mauritian">Mauritian</option>
                                                                      <option value="mexican">Mexican</option>
                                                                      <option value="micronesian">Micronesian</option>
                                                                      <option value="moldovan">Moldovan</option>
                                                                      <option value="monacan">Monacan</option>
                                                                      <option value="mongolian">Mongolian</option>
                                                                      <option value="moroccan">Moroccan</option>
                                                                      <option value="mosotho">Mosotho</option>
                                                                      <option value="motswana">Motswana</option>
                                                                      <option value="mozambican">Mozambican</option>
                                                                      <option value="namibian">Namibian</option>
                                                                      <option value="nauruan">Nauruan</option>
                                                                      <option value="nepalese">Nepalese</option>
                                                                      <option value="new zealander">New Zealander</option>
                                                                      <option value="ni-vanuatu">Ni-Vanuatu</option>
                                                                      <option value="nicaraguan">Nicaraguan</option>
                                                                      <option value="nigerien">Nigerien</option>
                                                                      <option value="north korean">North Korean</option>
                                                                      <option value="northern irish">Northern Irish</option>
                                                                      <option value="norwegian">Norwegian</option>
                                                                      <option value="omani">Omani</option>
                                                                      <option value="pakistani">Pakistani</option>
                                                                      <option value="palauan">Palauan</option>
                                                                      <option value="panamanian">Panamanian</option>
                                                                      <option value="papua new guinean">Papua New Guinean</option>
                                                                      <option value="paraguayan">Paraguayan</option>
                                                                      <option value="peruvian">Peruvian</option>
                                                                      <option value="polish">Polish</option>
                                                                      <option value="portuguese">Portuguese</option>
                                                                      <option value="qatari">Qatari</option>
                                                                      <option value="romanian">Romanian</option>
                                                                      <option value="russian">Russian</option>
                                                                      <option value="rwandan">Rwandan</option>
                                                                      <option value="saint lucian">Saint Lucian</option>
                                                                      <option value="salvadoran">Salvadoran</option>
                                                                      <option value="samoan">Samoan</option>
                                                                      <option value="san marinese">San Marinese</option>
                                                                      <option value="sao tomean">Sao Tomean</option>
                                                                      <option value="saudi">Saudi</option>
                                                                      <option value="scottish">Scottish</option>
                                                                      <option value="senegalese">Senegalese</option>
                                                                      <option value="serbian">Serbian</option>
                                                                      <option value="seychellois">Seychellois</option>
                                                                      <option value="sierra leonean">Sierra Leonean</option>
                                                                      <option value="singaporean">Singaporean</option>
                                                                      <option value="slovakian">Slovakian</option>
                                                                      <option value="slovenian">Slovenian</option>
                                                                      <option value="solomon islander">Solomon Islander</option>
                                                                      <option value="somali">Somali</option>
                                                                      <option value="south african">South African</option>
                                                                      <option value="south korean">South Korean</option>
                                                                      <option value="spanish">Spanish</option>
                                                                      <option value="sri lankan">Sri Lankan</option>
                                                                      <option value="sudanese">Sudanese</option>
                                                                      <option value="surinamer">Surinamer</option>
                                                                      <option value="swazi">Swazi</option>
                                                                      <option value="swedish">Swedish</option>
                                                                      <option value="swiss">Swiss</option>
                                                                      <option value="syrian">Syrian</option>
                                                                      <option value="taiwanese">Taiwanese</option>
                                                                      <option value="tajik">Tajik</option>
                                                                      <option value="tanzanian">Tanzanian</option>
                                                                      <option value="thai">Thai</option>
                                                                      <option value="togolese">Togolese</option>
                                                                      <option value="tongan">Tongan</option>
                                                                      <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                                                                      <option value="tunisian">Tunisian</option>
                                                                      <option value="turkish">Turkish</option>
                                                                      <option value="tuvaluan">Tuvaluan</option>
                                                                      <option value="ugandan">Ugandan</option>
                                                                      <option value="ukrainian">Ukrainian</option>
                                                                      <option value="uruguayan">Uruguayan</option>
                                                                      <option value="uzbekistani">Uzbekistani</option>
                                                                      <option value="venezuelan">Venezuelan</option>
                                                                      <option value="vietnamese">Vietnamese</option>
                                                                      <option value="welsh">Welsh</option>
                                                                      <option value="yemenite">Yemenite</option>
                                                                      <option value="zambian">Zambian</option>
                                                                      <option value="zimbabwean">Zimbabwean</option>
                                                                      </select><span class="error">* <?php echo $nationalityErr;?></span><br><br>

     </div>  
          </div>

     	<button type="submit">Submit</button>
     </form>

     <?php
     echo "<h2> Your Input</h2>";
               echo $name;
               echo "<br>";
               echo $gender;
               echo "<br>"; 
               echo $marital;
               echo "<br>"; 
               echo $number;
               echo "<br>"; 
               echo $email;
               echo "<br>"; 
               echo $address;
               echo "<br>"; 
               echo $date_of_birth;
               echo "<br>"; 
               echo $date_of_hiring;
               echo "<br>"; 
               echo $department;
               echo "<br>"; 
               echo $nationality;
               echo "<br>";

     ?>
</body>
</html>