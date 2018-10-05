<?php
/**
 * Created by PhpStorm.
 * User: achaitanyajami
 * Date: 04/10/18
 * Time: 1:08 PM
 */
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo DD_PLUGIN_DIR_URL.'/assets/css/custom.css' ?>">
<div class="row" style="margin-top: 15px;">
	<div class="col-md-12">
		<div class="col-md-2">
			<img src="<?php echo DD_PLUGIN_DIR_URL . '/assets/img/datadog_icn.png' ?>" alt="Data Dog" />
		</div>
		<div class="col-md-10"><h1>Data Dog</h1></div>
	</div>
</div>
<div class="row" style="margin-top: 15px; padding: 15px; min-height: 400px;">
	<div class="col-md-12">
		<div class="row">
			<div class="col-3">
				<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical" >
					<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Authentication</a>
					<a class="nav-link" id="v-pills-rate-limiting-tab" data-toggle="pill" href="#v-pills-rate-limiting" role="tab" aria-controls="v-pills-rate-limiting" aria-selected="true">Rate Limiting</a>
				</div>
			</div>
			<div class="col-9" style="border-left: 1px solid #79429f;">
				<div class="tab-content" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
						<!--- configuration -->
						<?php include_once 'components/configuration.php'; ?>
						<!--- configuration -->
					</div>
					<div class="tab-pane fade show" id="v-pills-rate-limiting" role="tabpanel" aria-labelledby="v-pills-rate-limiting-tab">
						<!--- Rate Limiting -->
						<?php include_once 'components/rate-limiting.php'; ?>
						<!--- Rate Limiting -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
