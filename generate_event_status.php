<?php
require_once('common_php/header_footer.php');

printHeader("Home");


?>

	<div style='margin-left: 20px; margin-right: 20px; margin-top: 20px'>
		<div>
			<h4 style='display: inline; font-size: 45px'>Generate Event Report</h4>
		</div>
		<br><br>
		<form class='form'>

			<div class='card'>
				<div class='card-body container-fluid'>
					<h4 class='card-title'>Date Range</h4>

					<div class='row' style='margin-top: 16px; margin-bottom: 16px'>
						
						<div class='row col-lg-4'>
							<div class='col-sm-6'>
								<p class='label'>Start Date:</p>
							</div>
							<div class='col-sm-6'>
								<input name='startDate' type='date' class='label' value="<?php echo date('Y-m-d', round(microtime(true) - (604800 * 2) ));?>">
							</div>
						</div>

					</div>


					<div class='row' style='margin-top: 16px; margin-bottom: 16px'>
						
						<div class='row col-lg-4'>
							<div class='col-sm-6'>
								<p class='label'>End Date:</p>
							</div>
							<div class='col-sm-6'>
								<input name='endDate' type='date' class='label' value="<?php echo date('Y-m-d');?>">
							</div>
						</div>

					</div>


				</div>
			</div>


			<div class='card' style='margin-top: 55px;'>
				<div class='card-body container-fluid'>
					<h4 class='card-title'>Filter By Status</h4>

					<div class='row' style='margin-top: 15px; margin-bottom: 15px'>

					<div class="form-check col-md-4">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input" checked name='generate' value="Approved">Approved
						</label>
					</div>
					<div class="form-check col-md-4">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input" checked name='generate' value=""Canceled>Canceled
						</label>
					</div>
					<div class="form-check col-md-4">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input" checked name='generate' value="Completed">Completed
						</label>
					</div>
					<div class="form-check col-md-4">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input" checked name='generate' value="Sold OUt">Sold Out
						</label>
					</div>
					<div class="form-check col-md-4">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input" name='generate' checked value="Advertised">Advertised
						</label>
					</div>
					<div class="form-check col-md-4">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input" name='generate' checked value="Created">Created
						</label>
					</div>
					</div>


				</div>
			</div>



			<div class='row container-fluid' style='margin-top: 25px;'>
				<div class='col-md-2'>
					<input class='btn btn-outline-danger' id="btntest" type="button" value="Cancel" onclick="window.location.href='index.php'">
				</div>
				<div class='col-md-2 offset-md-8'>
					<input type='submit' class='btn btn-success' value='Generate Report'>
				</div>
			</div>
		</form>
		
		<br><br>

	</div>

<?php

printFooter();
?>