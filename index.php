<?php 
include('lib/main-header.php');
?>
<head><title>Home - SOAPnote.org</title></head>
<ul class="breadcrumb">
    <li class="active">Home</li>
</ul>
<div class="container">
	<div class="row">
		<div class="col-sm-9">
			<script>
			  (function() {
				var cx = '005538851919056736266:haf16mzpwdo';
				var gcse = document.createElement('script');
				gcse.type = 'text/javascript';
				gcse.async = true;
				gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
					'//cse.google.com/cse.js?cx=' + cx;
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(gcse, s);
			  })();
			</script>
			<gcse:search></gcse:search>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="hidden-xs col-sm-3">
		<a href="/cardiovascular/index.php">Cardiology</a>
		<?php include 'lib/menu-structure/cat-cardiovascular.php';?>
		<a href="/skin/index.php">Dermatology</a>
		<?php include 'lib/menu-structure/cat-skin.php';?>
		<a href="/endocrine-metabolic/index.php">Endocrine</a>
		<?php include 'lib/menu-structure/cat-endocrine-metabolic.php';?>
		<a href="/digestive-system/index.php">Gastroenterology</a>
		<?php include 'lib/menu-structure/cat-digestive-system.php';?>
		<a href="/general/index.php">General</a>
		<?php include 'lib/menu-structure/cat-general.php';?>
		<a href="/elder-care/index.php">Geriatrics</a>
		<?php include 'lib/menu-structure/cat-elder-care.php';?>
		<a href="/women/index.php">Gynecology</a>
		<?php include 'lib/menu-structure/cat-women.php';?>
	</div>
	<div class="hidden-xs col-sm-3">
		<a href="/blood-lymph/index.php">Hematology and Oncology</a>
		<?php include 'lib/menu-structure/cat-blood-lymph.php';?>
		<a href="/infectious/index.php">Infectious Disease</a>
		<?php include 'lib/menu-structure/cat-infectious.php';?>
		<a href="/injury/index.php">Injury and Poisoning</a>
		<?php include 'lib/menu-structure/cat-injury.php';?>
		<a href="/men/index.php">Men's Health</a>
		<?php include 'lib/menu-structure/cat-men.php';?>
		<a href="/musculoskeletal/index.php">Musculoskeletal</a>
		<?php include 'lib/menu-structure/cat-musculoskeletal.php';?>
		<a href="/kidney/index.php">Nephrology</a>
		<?php include 'lib/menu-structure/cat-kidney.php';?>
	</div>
	<div class="hidden-xs col-sm-3">
		<a href="/neurological/index.php">Neurology</a>
		<?php include 'lib/menu-structure/cat-neurological.php';?>
		<a href="/pregnancy/index.php">Obstetrics</a>
		<?php include 'lib/menu-structure/cat-pregnancy.php';?>
		<a href="/eye/index.php">Ophthalmology</a>
		<?php include 'lib/menu-structure/cat-eye.php';?>
		<a href="/ear-nose-throat/index.php">Otolaryngology</a>
		<?php include 'lib/menu-structure/cat-ear-nose-throat.php';?>
		<a href="/patient-information/index.php">Patient Information</a>
		<?php include 'lib/menu-structure/cat-patient-information.php';?>
		<a href="/child-health/index.php">Pediatrics</a>
		<?php include 'lib/menu-structure/cat-child-health.php';?>
	</div>
	<div class="hidden-xs col-sm-3">
		<a href="/mental-health/index.php">Psychiatry</a>
		<?php include 'lib/menu-structure/cat-mental-health.php';?>
		<a href="/respiratory/index.php">Pulmonology</a>
		<?php include 'lib/menu-structure/cat-respiratory.php';?>
		<a href="/sample/index.php">Samples/Snippets</a>
		<?php include 'lib/menu-structure/cat-sample.php';?>
		<a href="/subjective/index.php">Subjective/History Elements</a>
		<?php include 'lib/menu-structure/cat-subjective.php';?>			
		<a href="/objective/index.php">Objective/Exam Elements</a>
		<?php include 'lib/menu-structure/cat-objective.php';?>			
		<a href="/assessment-plan/index.php">Assessment & Plan Elements</a>
		<?php include 'lib/menu-structure/cat-assessment-plan.php';?>			
		<a href="/complete-note/index.php">Complete Notes</a>
		<?php include 'lib/menu-structure/cat-complete-note.php';?>																														</div>
</div>
<?php
include('lib/front-footer.php');
?>