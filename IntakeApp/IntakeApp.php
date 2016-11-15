<!DOCTYPE HTML>
<html>
<!--
Developed By TeamZero under the Marist Computer Science Capping Course Program.
This Web Application was developed to replace the paper copy of the Intake form for the Parent Empowerment Program (PEP).
-->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<title> Parent Empowerment Intake Form </title> 

</head>
<body>
<header id = "header"> <h1 style="font-weight:bold;"><img id = "titleImage" src="Images\CPCALogo.png"/> Parent Empowerment Intake Form </h1> </header>
<div class="container-fluid" id= "container-fluid" style="text-align:left">

<form class="form-inline">
  <br>
  <!--Name for now, dont wanna change the intake form just yet. Can easily be altered in the future. -->
  <br>

<label for="fName"> First Name: </label> 
<input type="text" name= "fName" maxlength="20" size="30" oninput="validateAlpha('fName');" id="fName" class="form-control"> 

<label for="mName"> Middle Initial: </label> 
<input type="text" name= "mName" maxlength="1" size="1" oninput="validateAlpha('mName');" id="mName" class="form-control"> 

<label for="LName"> Last Name: </label> 
<input type="text" name= "lName" maxlength="20" size="30" oninput="validateAlpha('lName');" id="lName" class="form-control"> 

 
<br>
<br>

<label for="date"> Date: </label> 
<input type="date" name= "date" maxlength="8" size="30" oninput="isNumberKey('DOB');" id="date" class="form-control">

<br>
<br>

<label for="street"> Street: </label> 
<input type="text" name= "street" maxlength="30" size="30"  id="street" class="form-control">
<label for="city"> City: </label> 
<input type="text" name= "city" maxlength="30" size="30" id="city" class="form-control">

<br>
<br>

<label for="state"> State: </label> 
<select name="state" id="state" class="form-control" style="margin-right:9%;" >
    <option value="">-- select one --</option>
	<option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District Of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
</select>

<label for="zip"> Zip: </label> 
<input type="text" name= "zip" maxlength="5" size="5" oninput="isNumberKey('zip');" id="zip" class="form-control">

<br>
<br>


<label for="numPeople" style="width:24%;"> Number of people living in the household with you or at home: </label> 
<input type="number" name= "numPeople" min="0" max="99" id="numPeople" class="form-control">

<label for="peopleRelationship" style="width:13%;">  What is their relationship to you?: </label> 
<input type="text" name= "peopleRelationship" maxlength="30" size="30"  id="peopleRelationship" class="form-control">

<br>
<br>

<label for="dayPhone"> Daytime Phone: </label> 
<input type="text" name= "dayphone" maxlength="30" size="30" onkeypress="return isNumber(event)" oninput="isNumberKey('dayPhone');" id="dayPhone" class="form-control">

<label for="dayPhone" style="width:9%;"> May message be left?: </label> 
<select name="dayMessage" class="form-control">
<option value="">-- select one --</option>
<option value="dayYes">Yes</option>
<option value="dayNo">No</option>
</select>

<br>
<br>

<label for="nightPhone"> Evening Phone: </label> 
<input type="text" name= "nightphone" maxlength="30" size="30" onkeypress="return isNumber(event)" oninput="isNumberKey('dayPhone');" id="nightPhone" class="form-control">
<label for="nightPhone" style="width:9%;"> May message be left?: </label> 
<select name="nightMessage" class="form-control">
<option value="">-- select one --</option>
<option value="nightYes">Yes</option>
<option value="nightNo">No</option>
</select>

<br>
<br>

<label for="DOB"> Date of Birth: </label> 
<input type="text" name= "DOB" maxlength="10" size="30" id="DOB" class="form-control" oninput="isDateOfBirth('DOB', event);" placeholder="mm/dd/yyyy">

<br>
<br>

<label for="religion"> Religion: </label> 
<select name="religion" class="form-control">
  <option value="">-- select one --</option>
  <option value="African Traditional & Diasporic">African Traditional & Diasporic</option>
  <option value="Agnostic">Agnostic</option>
  <option value="Atheist">Atheist</option>
  <option value="Baha'i">Baha'i</option>
  <option value="Buddhism">Buddhism</option>
  <option value="Cao Dai">Cao Dai</option>
  <option value="Chinese traditional religion">Chinese traditional religion</option>
  <option value="Christianity">Christianity</option>
  <option value="Hinduism">Hinduism</option>
  <option value="Islam">Islam</option>
  <option value="Jainism">Jainism</option>
  <option value="Juche">Juche</option>
  <option value="Judaism">Judaism</option>
  <option value="Neo-Paganism">Neo-Paganism</option>
  <option value="Nonreligious">Nonreligious</option>
  <option value="Rastafarianism">Rastafarianism</option>
  <option value="Secular">Secular</option>
  <option value="Shinto">Shinto</option>
  <option value="Sikhism">Sikhism</option>
  <option value="Spiritism">Spiritism</option>
  <option value="Tenrikyo">Tenrikyo</option>
  <option value="Unitarian-Universalism">Unitarian-Universalism</option>
  <option value="Zoroastrianism">Zoroastrianism</option>
  <option value="primal-indigenous">primal-indigenous</option>
  <option value="Other">Other</option>
</select>

<br>
<br>

<label for="language" style="width:13%;">What languages do you speak?:</label> 
<select name="language" class="form-control">
<option value="">-- select one --</option>
<option value="Afrikanns">Afrikanns</option>
<option value="Albanian">Albanian</option>
<option value="Arabic">Arabic</option>
<option value="Armenian">Armenian</option>
<option value="Basque">Basque</option>
<option value="Bengali">Bengali</option>
<option value="Bulgarian">Bulgarian</option>
<option value="Catalan">Catalan</option>
<option value="Cambodian">Cambodian</option>
<option value="Chinese (Mandarin)">Chinese (Mandarin)</option>
<option value="Croation">Croation</option>
<option value="Czech">Czech</option>
<option value="Danish">Danish</option>
<option value="Dutch">Dutch</option>
<option value="English">English</option>
<option value="Estonian">Estonian</option>
<option value="Fiji">Fiji</option>
<option value="Finnish">Finnish</option>
<option value="French">French</option>
<option value="Georgian">Georgian</option>
<option value="German">German</option>
<option value="Greek">Greek</option>
<option value="Gujarati">Gujarati</option>
<option value="Hebrew">Hebrew</option>
<option value="Hindi">Hindi</option>
<option value="Hungarian">Hungarian</option>
<option value="Icelandic">Icelandic</option>
<option value="Indonesian">Indonesian</option>
<option value="Irish">Irish</option>
<option value="Italian">Italian</option>
<option value="Japanese">Japanese</option>
<option value="Javanese">Javanese</option>
<option value="Korean">Korean</option>
<option value="Latin">Latin</option>
<option value="Latvian">Latvian</option>
<option value="Lithuanian">Lithuanian</option>
<option value="Macedonian">Macedonian</option>
<option value="Malay">Malay</option>
<option value="Malayalam">Malayalam</option>
<option value="Maltese">Maltese</option>
<option value="Maori">Maori</option>
<option value="Marathi">Marathi</option>
<option value="Mongolian">Mongolian</option>
<option value="Nepali">Nepali</option>
<option value="Norwegian">Norwegian</option>
<option value="Persian">Persian</option>
<option value="Polish">Polish</option>
<option value="Portuguese">Portuguese</option>
<option value="Punjabi">Punjabi</option>
<option value="Quechua">Quechua</option>
<option value="Romanian">Romanian</option>
<option value="Russian">Russian</option>
<option value="Samoan">Samoan</option>
<option value="Serbian">Serbian</option>
<option value="Slovak">Slovak</option>
<option value="Slovenian">Slovenian</option>
<option value="Spanish">Spanish</option>
<option value="Swahili">Swahili</option>
<option value="Swedish ">Swedish </option>
<option value="Tamil">Tamil</option>
<option value="Tatar">Tatar</option>
<option value="Telugu">Telugu</option>
<option value="Thai">Thai</option>
<option value="Tibetan">Tibetan</option>
<option value="Tonga">Tonga</option>
<option value="Turkish">Turkish</option>
<option value="Ukranian">Ukranian</option>
<option value="Urdu">Urdu</option>
<option value="Uzbek">Uzbek</option>
<option value="Vietnamese">Vietnamese</option>
<option value="Welsh">Welsh</option>
<option value="Xhosa">Xhosa</option>
</select>

<br>
<br>

<label for="handicapMeds" style="width:40%;">Do you have any handicapping condition, or take any medications that we should know about?:</label><br>
<textarea style="width:100%;height:100px;" name="handicapMeds" class="form-control">
</textarea>

<br>
<br>

<label for="schooling" style="width:13%;">Last year of school completed:</label> 
<select name="schooling" class="form-control">
<option value="">-- select one --</option>
<option value="none">None</option>
<option value="elementary">Elementary</option>
<option value="someHS">Some High School</option>
<option value="HS">High School degree</option>
<option value="someCollege">Some college, no degree</option>
<option value="associates">Associate's Degree</option>
<option value="bachelors">Bachelor's Degree</option>
<option value="masters">Master's Degree</option>
<option value="professionals">Professional Degree</option>
<option value="doctorate">Doctorate</option>
</select>

<br>
<br>

<label for="drugs" style="width:28%;">Do you now, or have you ever had, a problem with drug/alcohol abuse?:</label> 
<select name="drugs" id="drugs" class="form-control" onChange="enableDrugExplan();">
<option value="">-- select one --</option>
<option value="drugsYes">Yes</option>
<option value="drugsNo">No</option>
</select>

<br>
<br>

<label for="drugsExplan" style="width:100%;">If you answered yes to the previous questions, please explain:</label>
<textarea style="width:100%;height:100px;" name="drugsExplan" id="drugsExplan" class="form-control" maxlength="250" oninput="validateAlpha('drugsExplan');" disabled>
</textarea>

<br>
<br>
<label for="childSeperationTime" style="width:35%;">If you are not living with your child(ren), for what length of time have you been separated?:</label>
<input type="text" name="childSeperationTime" maxlength="100" size="50" class="form-control">

<br>
<br>


<label for="relationship" style="width:35%;">What is your relationship like with the other parent?: </label> 
<input type="text" name="relationship" maxlength="75" size="50" class="form-control">

<br>
<br>

<label for="parentTogether" style="width:35%;">Have you and your children's other parent beeen able to parent together?:</label>
<input type="text" name="parentTogether" maxlength="125" size="50" class="form-control">

<br>
<br>

<label for="cps" style="width:20%;">Are you involved with Child Protective Services?:</label> 
<select name="cps" class="form-control">
<option value="">-- select one --</option>
<option value="cpsYes">Yes</option>
<option value="cpsNo">No</option>
</select>

<label for="pastCPS" style="width:26%;">If yes, were you previously involved with Child Protective Services?:</label>
<select name="pastCPS" class="form-control">
<option value="">-- select one --</option>
<option value="pastCpsYes">Yes</option>
<option value="pastCpsNo">No</option>
</select>

<br>
<br>

<label for="mandated"  style="width:18%;">Have you been mandated to take this class?:</label>
<select name="mandated" class="form-control" onChange="enableWhoMandated();">
<option value="">-- select one --</option>
<option value="mandatedYes">Yes</option>
<option value="mandatedNo">No</option>
</select>

<label for="whoMandated" style="width:13%;">If yes, who mandated you?:</label> 
<input type="text" name="whoMandated" size="50" maxlength="50" class="form-control" disabled>

<br>
<br>

<label for="whyMandated" style="width:18%;">Why did they mandate you? (Be specific):</label>
<textarea style="width:13%;" maxlength="300" name="whyMandated" class="form-control" disabled>
</textarea>

<br>
<br>

<label for="whyTake" style="width:40%;">If you were not mandated please explain why in deatail why you would like to attend parent classes:</label>
<textarea style="width:100%;height:100px;" name="whyTake" class="form-control" maxlength="300">
</textarea>

<br>
<br>

<label for="safetyNeeds" style="width:40%;">What do you need from this class in order to feel safe and fully participate in discussion?:</label>
<textarea style="width:100%;height:100px;" name="safetyNeeds" maxlength="300" class="form-control">
</textarea>

<br>
<br> 

<label for="behaviors" style="width:40%;">What behaviors would keep you from voicing your parenting style?:</label>
<textarea style="width:100%;height:100px;" name="behaviors" class="form-control" maxlength="300">
</textarea>

<br>
<br> 

<label for="otherClasses" style="width:20%;">Have you atttended any other parenting classes?:</label>
<select name="otherClasses" class="form-control">
<option value="">-- select one --</option>
<option value="otherClassesYes">Yes</option>
<option value="otherClassesNo">No</option>
</select>

<label for="classDuration" style="width:13%;">If yes, where and how long ago?:</label>
<input type="text" name="classDurations" size="50" class="form-control" disabled>

<br>
<br>

<label for="therapy" style="width:18%;">Did you ever deal with your abuse in therapy?:</label>
<select name="therapy" class="form-control">
<option value="">-- select one --</option>
<option value="therapyYes">Yes</option>
<option value="therapysNo">No</option>
</select>

<br>
<br>

<label for="childhoodAbuse" style="width:28%;">Do you feel as if you still have some issues relating to childhood abuse?:</label>
<input type="text" name="childhoodAbuse" maxlength="150" size="50" class="form-control">

<br>
<br>
  
<label for="emergencyContact" style="width:30%;">Who would you like use to contact incase of an emergency?:</label>
<br>
<label for="efName"> First Name: </label> 
<input type="text" name= "efName" maxlength="20" size="30" oninput="validateAlpha('efName');" id="efName" class="form-control">  

<label for="eLName"> Last Name: </label> 
<input type="text" name= "elName" maxlength="20" size="30" oninput="validateAlpha('elName');" id="elName" class="form-control">

<br>
<br>

<label for="eRelationship" style="width:13%;">What is their relationship to you: </label> 
<input type="text" name= "eRelationship" maxlength="20" size="30" oninput="validateAlpha('eRelationship');" id="eRelationship" class="form-control">

<label for="emergencyPhone">Thier phone number:</label>
<input type="text" name="emergencyContactPhone" onkeypress="return isNumber(event)" maxlength="10" size="10" class="form-control">

<br>
<br>

<label for="importantLearning" style="width:30%;">What do you see as the most importanct thing you would like to learn from this class?:</label> 
<textarea style="width:100%;height:100px;" name="importantLearning" class="form-control" maxlength="500">
</textarea>

<br>
<br> 

<label for="domesticViolence" style="width:24%;">Have you ever had any involvement with domestic violence?:</label>
<select name="domesticViolence" class="form-control">
<option value="">-- select one --</option>
<option value="domesticViolenceYes">Yes</option>
<option value="domesticViolenceNo">No</option>
</select>

<label for="domesticViolenceTalk" style="width:20%;">If yes, have you discussed it with someone?:</label>
<select name="domesticViolenceTalk" class="form-control">
<option value="">-- select one --</option>
<option value="domesticViolenceTalkYes">Yes</option>
<option value="domesticViolenceTalkNo">No</option>
</select>

<br>
<br>

<label for="domesticViolenceOriginFamily" style="width:24%;">Is there any history of violence in your family of origin?:</label>
<select name="domesticViolenceOriginFamily" class="form-control">
<option value="">-- select one --</option>
<option value="domesticViolenceOriginFamilyYes">Yes</option>
<option value="domesticViolenceOriginFamilyNo">No</option>
</select>

<br>
<br>

<label for="domesticViolenceNuclearFamily" style="width:24%;">Is there any history of violence in your nuclear family?:</label> 
<select name="domesticViolenceNuclearFamily" class="form-control">
<option value="">-- select one --</option>
<option value="domesticViolenceNuclearFamilyYes">Yes</option>
<option value="domesticViolenceNuclearFamilyNo">No</option>
</select>

<br>
<br>

<label for="ordersOfProtection" style="width:20%;">Are there any orders of protection involved?:</label>
<select name="ordersOfProtection" class="form-control">
<option value="">-- select one --</option>
<option value="ordersOfProtectionYes">Yes</option>
<option value="ordersOfProtectionNo">No</option>
</select>

<br>
<br>

<label for="ordersOfProtectionWhyWho" style="width:35%;">If yes, why are they in place and who are they against?:</label>
<textarea style="width:100%;height:100px;" name="ordersOfProtectionWhyWho" class="form-control" maxlength="175" disabled>
</textarea>

<br>
<br>

<label for="arrested" style="width:18%;">Have you ever been arrested for a crime?:</label>
<select name="arrested" class="form-control">
<option value="">-- select one --</option>
<option value="arrestedYes">Yes</option>
<option value="arrestedNo">No</option>
</select>

<br>
<br>

<label for="convicted" style="width:18%;">Have you ever been convicted of a crime?:</label>
<select name="convicted" class="form-control">
<option value="">-- select one --</option>
<option value="convictedYes">Yes</option>
<option value="convictedNo">No</option>
</select>

<br>
<br>

<label for="convictedExplan">If yes, explain:</label>
<textarea style="width:100%;height:100px;" name="convictedExplan" class="form-control" maxlength="200" disabled>
</textarea>

<br>
<br>

<label for="record" style="width:20%;">Do you have a jail and/or prison record?:</label>
<select name="record" class="form-control">
<option value="">-- select one --</option>
<option value="recordYes">Yes</option>
<option value="recordNo">No</option>
</select>

<br>
<br>

<label for="recordExplan" style="width:35%;">If you answered yes to the last question, when were you in jail/prison, and for what offense?:</label>
<textarea style="width:100%;height:100px;" name="recordExplan" class="form-control" maxlength="100" disabled>
</textarea>

<br>
<br>

<label for="probation" style="width:18%;">Are you currently on parole or probation?</label>
<select name="probation" class="form-control">
<option value="">-- select one --</option>
<option value="probationYes">Yes</option>
<option value="probationNo">No</option>
</select>

<br>
<br>

<label for="probationExplan" style="width:13%;">If yes, for what offense?:</label>
<textarea style="width:100%;height:100px;" name="convictedExplan" class="form-control" maxlength="100" disabled>
</textarea>

<br>
<br>

<label for="familyClasses" style="width:40%;">Are there any other members of your family, that you know of, taking a parenting class with this agency?:</label>
<select name="familyClasses" class="form-control">
<option value="">-- select one --</option>
<option value="familyClassesYes">Yes</option>
<option value="familyClassesNo">No</option>
</select>

<br>
<br>

<label for="familyClassesName" style="width:20%;">If yes, please list their name/names:</label>
<textarea style="width:100%;height:100px;" name="familyClassesName" class="form-control" maxlength="200" disabled>
</textarea>

<br>
<br>
  
<label for="clientSig">Client Signature:</label>
<input type="text" name="clientSig" size="50"> 
<label for="clientStaffDate"> Date: </label> 
<input type="date" name= "clientSigDate" maxlength="8" size="30" oninput="isNumberKey('DOB');" id="clientSigDate" class="form-control">

<br>
<br>

<label for="staffSig">Staff Witness:</label>
<input type="text" name="staffSig" size="50"> 
<label for="staffSigDate"> Date: </label> 
<input type="date" name= "staffSigDate" maxlength="8" size="30" oninput="isNumberKey('DOB');" id="staffSigDate" class="form-control">

<br>
<br>

<input type="submit" class="form-control" value="Submit">
  
</form>

</div>

<hr/>
<footer id="footer">

Important discosure information will go here

</footer> 

<!-- Links to JS Files, CSS page, and additional Libraries.... --> 

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Intake Style Sheet -->
<link rel="stylesheet" href="IntakeStyleSheet.css">

<!-- JS Functions  -->
<script src="FormAppFunctions.js"></script>

</body>

</html>