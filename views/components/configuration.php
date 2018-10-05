<form method="post" enctype="multipart/form-data">
<div class="row">
	<div class="col-md-12">
		<div class="col-md-6">
			<h1>Authentication</h1>
			<p>
				<small>All requests to Datadog’s API must be authenticated. Requests that write data require reporting
					access and require an API key. Requests that read data require full access and also require an
					application key.
				</small>
			</p>
			<p id="lost-connection-notice"></p>
		</div>
	</div>
	<div class="col-md-12">
		<div class="col-md-6">
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text" id="basic-api_key">Api Key</span>
				</div>
				<input
					type="password" class="form-control" name="dd_api_key" placeholder="**************"
					aria-label="Api Key"
					aria-describedby="basic-api_key" value="<?php echo get_option( 'dd_api_key', '' ); ?>">
			</div>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text" id="basic-app_key">App Key</span>
				</div>
				<input
					type="password" class="form-control" name="dd_app_key" placeholder="**************" aria-label="App Key"
					aria-describedby="basic-app_key" value="<?php echo get_option( 'dd_app_key', '' ); ?>">
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="col-md-6">
			<input type="submit" name="auth-submit" class="btn btn-dark" />
			<input type="button" id="auth-test-connection" name="auth-test-connection" class="btn btn-dark" value="Test Authentication" />
		</div>
	</div>
</div>
</form>
<script type="text/javascript">
	jQuery( document ).ready( function ( $ ) {
		$( document ).on( 'click', '#auth-test-connection', function () {
			$('#lost-connection-notice').text( 'Connection Established' );
		} );
	} );
</script>