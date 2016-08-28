<?php 
 include('../lib/main-header.php');
?>
<head><title>Index - SOAPnote.org</title></head>
<ul class="breadcrumb">
    <li><a href="/">Home</a></li>
    <li class="active">Index</li>
</ul>
<div id="container" class="container">
<ul class="filterSection">
    <li>
        <strong>Show:</strong>
        <input checked="true" type="checkbox" value="calc"/>
        <label>Calculator</label><img src="http://www.soapnote.org/calculator.png">
    </li>
    <li>
        <input checked="true" type="checkbox" value="note"/>
        <label>Note</label><img src="http://www.soapnote.org/page_white_text.png">
    </li>
</ul>
<div class="container-fluid">
	<div class="col-sm-4 panel-group">
		<a style="font-weight:bold" href="/cardiovascular/index.php">Cardiology</a>
		<ul id="itemsToFilter"><?php include '../lib/menu-structure/cat-cardiovascular.php';?></ul>
		<a style="font-weight:bold" href="/skin/index.php">Dermatology</a>
		<ul id="itemsToFilter"><?php include '../lib/menu-structure/cat-skin.php';?></ul>
		<a style="font-weight:bold" href="/endocrine-metabolic/index.php">Endocrine</a>
		<ul id="itemsToFilter"><?php include '../lib/menu-structure/cat-endocrine-metabolic.php';?></ul>
		<a style="font-weight:bold" href="/digestive-system/index.php">Gastroenterology</a>
		<ul id="itemsToFilter"><?php include '../lib/menu-structure/cat-digestive-system.php';?></ul>
		<a style="font-weight:bold" href="/general/index.php">General</a>
		<ul id="itemsToFilter"><?php include '../lib/menu-structure/cat-general.php';?></ul>
		<a style="font-weight:bold" href="/elder-care/index.php">Geriatrics</a>
		<ul id="itemsToFilter"><?php include '../lib/menu-structure/cat-elder-care.php';?></ul>
		<a style="font-weight:bold" href="/women/index.php">Gynecology</a>
		<ul id="itemsToFilter"><?php include '../lib/menu-structure/cat-women.php';?></ul>
		<a style="font-weight:bold" href="/blood-lymph/index.php">Hematology and Oncology</a>
		<ul id="itemsToFilter"><?php include '../lib/menu-structure/cat-blood-lymph.php';?></ul>
		<a style="font-weight:bold" href="/infectious/index.php">Infectious Disease</a>
		<ul id="itemsToFilter"><?php include '../lib/menu-structure/cat-infectious.php';?></ul>
		<a style="font-weight:bold" href="/injury/index.php">Injury and Poisoning</a>
		<ul id="itemsToFilter"><?php include '../lib/menu-structure/cat-injury.php';?></ul>
	</div>
	<div class="col-sm-4 panel-group">
		<a style="font-weight:bold" href="/men/index.php">Men's Health</a>
		<ul id="itemsToFilter"><?php include '../lib/menu-structure/cat-men.php';?></ul>
		<a style="font-weight:bold" href="/musculoskeletal/index.php">Musculoskeletal</a>
		<ul id="itemsToFilter"><?php include '../lib/menu-structure/cat-musculoskeletal.php';?></ul>
		<a style="font-weight:bold" href="/kidney/index.php">Nephrology</a>
		<ul id="itemsToFilter"><?php include '../lib/menu-structure/cat-kidney.php';?></ul>
		<a style="font-weight:bold" href="/neurological/index.php">Neurology</a>
		<ul id="itemsToFilter"><?php include '../lib/menu-structure/cat-neurological.php';?></ul>
		<a style="font-weight:bold" href="/pregnancy/index.php">Obstetrics</a>
		<ul id="itemsToFilter"><?php include '../lib/menu-structure/cat-pregnancy.php';?></ul>
		<a style="font-weight:bold" href="/eye/index.php">Ophthalmology</a>
		<ul id="itemsToFilter"><?php include '../lib/menu-structure/cat-eye.php';?></ul>
		<a style="font-weight:bold" href="/ear-nose-throat/index.php">Otolaryngology</a>
		<ul id="itemsToFilter"><?php include '../lib/menu-structure/cat-ear-nose-throat.php';?></ul>
		<a style="font-weight:bold" href="/patient-information/index.php">Patient Information</a>
		<ul id="itemsToFilter"><?php include '../lib/menu-structure/cat-patient-information.php';?></ul>
		<a style="font-weight:bold" href="/child-health/index.php">Pediatrics</a>
		<ul id="itemsToFilter"><?php include '../lib/menu-structure/cat-child-health.php';?></ul>
		<a style="font-weight:bold" href="/mental-health/index.php">Psychiatry</a>
		<ul id="itemsToFilter"><?php include '../lib/menu-structure/cat-mental-health.php';?></ul>
	</div>
	<div class="col-sm-4 panel-group">
		<a style="font-weight:bold" href="/respiratory/index.php">Pulmonology</a>
		<ul id="itemsToFilter"><?php include '../lib/menu-structure/cat-respiratory.php';?></ul>
		<a style="font-weight:bold" href="/sample/index.php">Samples/Snippets</a>
		<ul id="itemsToFilter"><?php include '../lib/menu-structure/cat-sample.php';?></ul>
		<a style="font-weight:bold" href="/subjective/index.php">Subjective/History Elements</a>
		<ul id="itemsToFilter"><?php include '../lib/menu-structure/cat-subjective.php';?></ul>			
		<a style="font-weight:bold" href="/objective/index.php">Objective/Exam Elements</a>
		<ul id="itemsToFilter"><?php include '../lib/menu-structure/cat-objective.php';?></ul>			
		<a style="font-weight:bold" href="/assessment-plan/index.php">Assessment & Plan Elements</a>
		<ul id="itemsToFilter"><?php include '../lib/menu-structure/cat-assessment-plan.php';?></ul>			
		<a style="font-weight:bold" href="/complete-note/index.php">Complete Notes</a>
		<ul id="itemsToFilter"><?php include '../lib/menu-structure/cat-complete-note.php';?></ul>																														</div>
</div>
</div>
<?php 
 include('../lib/front-footer.php');
?>