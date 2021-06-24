<!DOCTYPE html>
<html>
<link rel="stylesheet" href="w3.css">

<!--- Responsive ---->	
<meta name="viewport" content="width=device-width, initial-scale=1">
	
<style>
.content {
  max-width: 500px;
  margin: auto;
  background: white;
  padding: 10px;
}
.content2 {
  max-width: 500px;
  margin: auto;
  background: orange;
  padding: 10px;
}
.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 2px dotted black;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 250px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
</style>    
    
<body class="w3-theme-l2">
<!--- TITLE/HEADER of the form ---->
<div class="w3-container w3-2019-fiesta content2" style='background-color:#f2552c'>
<h2 class="w3-center">Fully Booked Employee COVID-19 Daily Safety Checklist</h2>
</div>
 
<!--- INFORMATION/IMPORTANT Contact Details ---->
<div class="content">
<p class="w3-center w3-small">HR Manager (0916-3486077)</p>
<p class="w3-center w3-small">Operations Manager (0998-8698424)</p>
<p class="w3-center w3-small">DOH COVID-19 EMERGENCY HOTLINES</p>
<p class="w3-center w3-small">02-894-COVID (02-894-26843) and 1555</p>
<p class="w3-center w3-small w3-text-red">* Required</p>
</div>
    
<div class="w3-container content">
<p></p> <!--- For spacing purposes ---->
  
<div class="w3-card-4">
  <div class="w3-container">
      <h2 class="w3-center w3-opacity"><b>Input Form</b></h2>
  </div>
	
<?php
	
date_default_timezone_set("Asia/Manila");	
$datenow = new DateTime(); // Date object using current date and time
$dt=date('Y-m-d');
$dm=date('H:i:s');
	
?>
	
   <form name="indexForm" class="w3-container" action="insert.php" method="post">
      <p><label><b>Date</b><b class="w3-text-red">*</b></label></p>
      <input name="date" class="w3-input w3-border w3-round-large" type="date" value="<?php echo $dt ?>">
	  <p><label><b>Email Address </b><b class="w3-text-red">*</b></label></p>
      <input name="email" class="w3-input w3-border w3-round-large" type="text" required>
	  <div class="tooltip"><label><b>Employee's Name</b><b class="w3-text-red">*</b><b>?</b></label><span class="tooltiptext">Please make sure that your name is in correct spelling everytime</span></div>
      <input name="name" id="search" class="w3-input w3-border w3-round-large form-contro" type="text" required placeholder="Firstname Lastname">
	  <p><label><b>Department</b><b class="w3-text-red">*</b></label></p>
      <select name="dept" class="w3-select w3-border" name="option" required>
            <option value="" disabled selected>Choose</option>
            <option value="Business Technology">Business Technology</option>
            <option value="Direct Sales">Direct Sales</option>
            <option value="E-Commerce Operations">E-Commerce Operations</option>
            <option value="Finance and Accounting">Finance and Accounting</option>
            <option value="Marketing">Marketing</option>
            <option value="Merchandising and Planning Control">Merchandising and Planning Control</option>
            <option value="Operations">Operations</option>
            <option value="Organizational Developmen">Organizational Development</option>
            <option value="People Management">People Management</option>
            <option value="Property Management">Property Management</option>
            <option value="Purchasing">Purchasing</option>
            <option value="Warehouse and Logistics">Warehouse and Logistics</option>
      </select>
	   
<hr style="height:2px;border-width:0;color:gray;background-color:gray">

	   <!--- Start of the YES or NO questions---->
        <h6 class="w3-small">1. Before coming to work today, am I experiencing flu-like symptoms (e.g. fever, headache, body aches, cough, difficulty in breathing)? (If Yes, do not come to work. Let us know you are not feeling well. Contact your health care provider or LGU immediately; If Yes and you did come to work or if you feel ill during the day, contact your health care provider immediately and notify HR or your supervisor)<b class="w3-text-red">*</b></h6>
        <select name="option1" class="w3-select w3-border" required>
            <option value="" disabled selected>Choose</option>
            <option value="YES">YES</option>
            <option value="NO">NO</option>
        </select>
    <p></p>
        <h6 class="w3-small">2. Am I washing my hands frequently enough (before and after breaks, lunch, meetings, or using the bathroom)? (Wash for at least 20 seconds each time in accordance with DOH guidelines)<b class="w3-text-red">*</b></h6>
        <select name="option2" class="w3-select w3-border" required>
            <option value="" disabled selected>Choose</option>
            <option value="YES">YES</option>
            <option value="NO">NO</option>
        </select>
    <p></p>
        <h6 class="w3-small">3. Are hand sanitizer and/or alcohol available in my work area? Am I using them when entering and when leaving my work area? (If sanitizer or alcohol are out, notify your Supervisor or HR immediately)<b class="w3-text-red">*</b></h6>
        <select name="option3" class="w3-select w3-border" required>
            <option value="" disabled selected>Choose</option>
            <option value="YES">YES</option>
            <option value="NO">NO</option>
        </select>
    <p></p>
        <h6 class="w3-small">4. Do I have the proper protective equipment, PPE (mask, gloves, or face shield)? Is my equipment clean? <b class="w3-text-red">*</b></h6>
        <select name="option4" class="w3-select w3-border" required>
            <option value="" disabled selected>Choose</option>
            <option value="YES">YES</option>
            <option value="NO">NO</option>
        </select>
    <p></p>
        <h6 class="w3-small">5. Did I get a new/newly washed mask and new gloves at the beginnin gof my shift, after breaks, and after lunch?<b class="w3-text-red">*</b></h6>
        <select name="option5" class="w3-select w3-border" required>
            <option value="" disabled selected>Choose</option>
            <option value="YES">YES</option>
            <option value="NO">NO</option>
        </select>
    <p></p>
        <h6 class="w3-small">6. Am I disposing of my used masks and gloves in designated waste bins? (for disposable masks)<b class="w3-text-red">*</b></h6>
        <select name="option6" class="w3-select w3-border" required>
            <option value="" disabled selected>Choose</option>
            <option value="YES">YES</option>
            <option value="NO">NO</option>
        </select>
    <p></p>
        <h6 class="w3-small">7. Am I practicing 6-foot distancing in my work area, during lunch and breaks, and when I enter and leave the workplace?<b class="w3-text-red">*</b></h6>
        <select name="option7" class="w3-select w3-border" required>
            <option value="" disabled selected>Choose</option>
            <option value="YES">YES</option>
            <option value="NO">NO</option>
        </select>
    <p></p>
        <h6 class="w3-small">8. Have I wiped down company phones and my cellphone before and after use?<b class="w3-text-red">*</b></h6>
        <select name="option8" class="w3-select w3-border" required>
            <option value="" disabled selected>Choose</option>
            <option value="YES">YES</option>
            <option value="NO">NO</option>
        </select>
    <p></p>
        <h6 class="w3-small">9. Is there anyone in the building I am not sure should be here? (If Yes, immediately notify your supervisor)<b class="w3-text-red">*</b></h6>
        <select name="option9" class="w3-select w3-border" required>
            <option value="" disabled selected>Choose</option>
            <option value="YES">YES</option>
            <option value="NO">NO</option>
        </select>
    <p>
		
	<!--- Acknowledgement Part ---->	
<div class="w3-container content">
    <header class="w3-container w3-2019-orange-tiger" style='background-color:#f2552c'>
      <h3 class="w3-center w3-opacity" style='text-shadow:1px 1px 0 #444'>Certification and Data Privacy Content</h3>
    </header>

    <div class="w3-container">
      <h6>I certify that the information I have provided is true, correct and complete. I hereby give my full consent to Fully Booked (Sketch Books Inc.) to collect, record, and process information, whether personal, sensitive or privileged, pertaining to myself for the purpose of drafting and implementing internal policies related to the prevention and/or containment of COVID-19 in the workplace. In this connection, I hereby express my full consent and conformity to the above information.</h6><b class="w3-text-red">*</b>
  		<input class="w3-check" type="checkbox" name="acknowledge" value="check1" required>
  			<label>Acknowledge</label>
	</div>
</div>	
	 <!--- SUBMIT BUTTON ---->
    <input class="w3-btn submit w3-center" name="submit" type="submit" value="Next" style='background-color:#f2552c'>
    </form>
  </div>
</div> 
    
<script type="text/javascript">
  $(function() {
     $( "#search" ).autocomplete({
       source: 'autosearch.php',
     });
  });
</script>
</body>
</html>
