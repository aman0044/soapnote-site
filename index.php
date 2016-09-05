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
</div>
<hr>
<div id="container" class="container">
<h4>New & Frequently Visited</h4>
<ul class="filterSection">
    <li>
        <input checked="true" type="checkbox" value="calc"/>
        <label>Calculator</label><img src="calculator.png">
        <input checked="true" type="checkbox" value="note"/>
        <label>Note</label><img src="page_white_text.png">
    </li>
</ul>
<div class="container-fluid">
	<div class="col-sm-6 panel-group">
		<ul id="itemsToFilter">
			<li data-type="note"><a href="/general/acute-adult-physical-exams/">Adult Acute Physical Exams</a></li>
			<li data-type="note"><a href="/general/adult-chronic-exams/">Adult Chronic Disease Physical Exams</a></li>
			<li data-type="calc"><a href="/cardiovascular/coumadin-calculator/">Anticoagulation - Coumadin Adjustment Calculator</a></li>
			<li data-type="calc"><a href="/musculoskeletal/arthritis-tests/">Arthritis Decision Tool - Testing for Chronic Inflammatory Arthritides</a></li>				
			<li data-type="calc"><a href="/elder-care/charlson-comorbidity-index/">Charlson Comorbidity Index</a></li>
			<li data-type="calc"><a href="/cardiovascular/chest-pain-decision-rule/">Chest Pain - Diamond and Forrester Chest Pain Decision Rule</a></li>				
			<li data-type="calc"><a href="/women/contraception-quick-start/">Contraception Quick Start Algorithm</a></li>
			<li data-type="calc"><a href="/mental-health/patient-health-questionnaire-phq-9-calculator/">Depression - Patient Health Questionnaire (PHQ 9) Calculator</a></li>
			<li data-type="note"><a href="/mental-health/depression-plan/">Depression Assessment/Plan</a></li>
			<li data-type="calc"><a href="/general/differential-diagnosis/">Differential Diagnosis Tool</a></li>
			<li data-type="calc"><a href="/general/e-m-established/">E/M Coding for Established Outpatient Visit</a></li>
			<li data-type="calc"><a href="/general/general-adult-physical-exams/">General Adult Physical 			Exams</a></li>
			<li data-type="calc"><a href="/mental-health/generalized-anxiety-disorder-gad-7/">Generalized Anxiety Disorder GAD 7 Calculator</a></li>
			<li data-type="note"><a href="/general/generic-visit-note/index.php">Generic Visit Note</a></li>		</ul>
	</div>
	<div class="col-sm-6 panel-group">
		<ul id="itemsToFilter">
			<li data-type="note"><a href="/general/health-risk/">Health Risk Appraisal (Longevity Calculator)</a></li>
			<li data-type="calc"><a href="../mental-health/hope-checklist/index.php">Hope Checklist</a></li>			
			<li data-type="note"><a href="/cardiovascular/htn-plan/">Hypertension Plan</a></li>
			<li data-type="note"><a href="/musculoskeletal/low-back-pain-exam/">Low Back Pain Exam</a></li>
			<li data-type="calc"><a href="/mental-health/mental-status-exam/">Mental Status Exam</a></li>
			<li data-type="calc"><a href="/general/mri-ct-tool/">MRI and CT Scan Decision Tool</a></li>
			<li data-type="note"><a href="/musculoskeletal/musculoskeletal-exams/">Musculoskeletal Physical Exams</a></li>
			<li data-type="note"><a href="/child-health/health-maintenance-visit/">Pediatric Health Maintenance Visit (Expanded)</a></li>
			<li data-type="calc"><a href="../child-health/drug-doses/index.php">Pediatric Oral Medication Dosing Tables</a></li>			
			<li data-type="note"><a href="/ear-nose-throat/sore-throat-complete-note/">Pharyngitis Visit Complete Note</a></li>
			<li data-type="calc"><a href="/pregnancy/wheel/">Pregnancy Dating Wheel – LMP</a></li>
			<li data-type="calc"><a href="/ear-nose-throat/strep-throat-decision-tool/">Strep Throat Decision Tool</a></li>
			<li data-type="calc"><a href="/cardiovascular/oesil-risk-score/">Syncope - OESIL Risk Score for Syncope</a></li>
			<li><a href="/categories/index.php">See the Full List</a></li>
		</ul>
	</div>
</div>
<?php
include('lib/front-footer.php');
?>