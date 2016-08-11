<?php 
 include('../lib/main-header.php');
?>
<head><title>Categories - SOAPnote.org</title></head>
<ul class="breadcrumb">
    <li><a href="/">Home</a></li>
    <li class="active">Categories</li>
</ul>
<div id="container" class="container">
<ul class="nav nav-pills nav-stacked">
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Cardiology <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="/cardiovascular/">All</a></li>
			<li role="separator" class="divider"></li>
			<?php include '../lib/menu-structure/cat-cardiovascular.php';?>
		</ul>
	</li>
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Dermatology <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="/skin/">All</a></li>
			<li role="separator" class="divider"></li>
			<?php include '../lib/menu-structure/cat-skin.php';?>
		</ul>
	</li>
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Endocrine <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="/endocrine-metabolic/">All</a></li>
			<li role="separator" class="divider"></li>
			<?php include '../lib/menu-structure/cat-endocrine-metabolic.php';?>
		</ul>
	</li>
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Gastroenterology <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="/digestive-system/">All</a></li>
			<li role="separator" class="divider"></li>
			<?php include '../lib/menu-structure/cat-digestive-system.php';?>
		</ul>
	</li>
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">General <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="/general/">All</a></li>
			<li role="separator" class="divider"></li>
			<?php include '../lib/menu-structure/cat-general.php';?>
		</ul>
	</li>
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Geriatrics <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="/elder-care/">All</a></li>
			<li role="separator" class="divider"></li>
			<?php include '../lib/menu-structure/cat-elder-care.php';?>
		</ul>
	</li>
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Gynecology <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="/women/">All</a></li>
			<li role="separator" class="divider"></li>
			<?php include '../lib/menu-structure/cat-women.php';?>
		</ul>
	</li>
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Hematology and Oncology <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="/blood-lymph/">All</a></li>
			<li role="separator" class="divider"></li>
			<?php include '../lib/menu-structure/cat-blood-lymph.php';?>
		</ul>
	</li>
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Infectious Disease <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="/infectious/">All</a></li>
			<li role="separator" class="divider"></li>
			<?php include '../lib/menu-structure/cat-infectious.php';?>
		</ul>
	</li>
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Injury and Poisoning <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="/injury/">All</a></li>
			<li role="separator" class="divider"></li>
			<?php include '../lib/menu-structure/cat-injury.php';?>
		</ul>
	</li>
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Men's Health <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="/men/">All</a></li>
			<li role="separator" class="divider"></li>
			<?php include '../lib/menu-structure/cat-men.php';?>
		</ul>
	</li>
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Musculoskeletal <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="/musculoskeletal/">All</a></li>
			<li role="separator" class="divider"></li>
			<?php include '../lib/menu-structure/cat-musculoskeletal.php';?>
		</ul>
	</li>
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Nephrology <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="/kidney/">All</a></li>
			<li role="separator" class="divider"></li>
			<?php include '../lib/menu-structure/cat-kidney.php';?>
		</ul>
	</li>
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Neurology <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="/neurological/">All</a></li>
			<li role="separator" class="divider"></li>
			<?php include '../lib/menu-structure/cat-neurological.php';?>
		</ul>
	</li>
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Obstetrics <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="/pregnancy/">All</a></li>
			<li role="separator" class="divider"></li>
			<?php include '../lib/menu-structure/cat-pregnancy.php';?>
		</ul>
	</li>
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Ophthalmology <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="/eye/">All</a></li>
			<li role="separator" class="divider"></li>
			<?php include '../lib/menu-structure/cat-eye.php';?>
		</ul>
	</li>
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Otolaryngology <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="/ear-nose-throat/">All</a></li>
			<li role="separator" class="divider"></li>
			<?php include '../lib/menu-structure/cat-ear-nose-throat.php';?>
		</ul>
	</li>
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Patient Information <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="/patient-information/">All</a></li>
			<li role="separator" class="divider"></li>
			<?php include '../lib/menu-structure/cat-patient-information.php';?>
		</ul>
	</li>
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Pediatrics <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="/child-health/">All</a></li>
			<li role="separator" class="divider"></li>
			<?php include '../lib/menu-structure/cat-child-health.php';?>
		</ul>
	</li>
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Psychiatry <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="/mental-health/">All</a></li>
			<li role="separator" class="divider"></li>
			<?php include '../lib/menu-structure/cat-mental-health.php';?>
		</ul>
	</li>
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Pulmonology <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="/respiratory/">All</a></li>
			<li role="separator" class="divider"></li>
			<?php include '../lib/menu-structure/cat-respiratory.php';?>
		</ul>
	</li>
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Samples/Snippets <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="/sample/">All</a></li>
			<li role="separator" class="divider"></li>
			<?php include '../lib/menu-structure/cat-sample.php';?>
		</ul>
	</li>
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Subjective/History Elements <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="/subjective/">All</a></li>
			<li role="separator" class="divider"></li>
			<?php include '../lib/menu-structure/cat-subjective.php';?>			
		</ul>
	</li>
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Objective/Exam Elements <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="/objective/">All</a></li>
			<li role="separator" class="divider"></li>
			<?php include '../lib/menu-structure/cat-objective.php';?>			
		</ul>
	</li>
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Assessment & Plan Elements <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="/assessment-plan/">All</a></li>
			<li role="separator" class="divider"></li>
			<?php include '../lib/menu-structure/cat-assessment-plan.php';?>			
		</ul>
	</li>
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Complete Notes <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="/complete-note/">All</a></li>
			<li role="separator" class="divider"></li>
			<?php include '../lib/menu-structure/cat-complete-note.php';?>			
		</ul>
	</li>
</ul>
</div>
<?php 
 include('../lib/front-footer.php');
?>