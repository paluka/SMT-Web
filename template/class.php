<!DOCTYPE html>
<html>
<head>
	<?php
		$title = "[Reference]";
		$containsCode = true;
		include 'include/head.php';
	?>
</head>
<body>
	<?php
		$thisPage = "Reference";
		include 'include/header.php';
	?>
	<!--Start of this page's content-->
		<div class="row-fluid referenceRow">
			<div class="referenceTag">
				Name
			</div>
			<div class="referenceDescriptor">
				<span class="referenceName">$Name</span>
			</div>
		</div>
		<div class="row-fluid referenceRow">
			<div class="referenceTag">
				Description
			</div>
			<div class="referenceDescriptor">
				<p>
					$Description
				</p>
			</div>
		</div>
	<!--End of this page's content-->
	<?php
		include 'include/footer.php';
	?>
</body>
</html>