<div class="row">
	<div class="col-md-12">
		<div class="col-md-6">
			<h1>Rate Limiting</h1>
			<p>
				<small>
					Some of the API endpoints are rate limited. Once you exceed a certain number of requests in a certain time period we return an error.
					For rate limited API endpoints we return headers so you can know how close you are to your limit. If you exceed your limit, review these headers to determine when you are able to try again.
				</small>
			</p>
		</div>
	</div>
	<div class="col-md-12">
		<div class="col-md-6">
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon1">X-RateLimit-Limit</span>
				</div>
				<input type="password" class="form-control" placeholder="**************" aria-label="X-RateLimit-Limit" aria-describedby="basic-addon1">
			</div>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon1">X-RateLimit-Period</span>
				</div>
				<input type="password" class="form-control" placeholder="**************" aria-label="X-RateLimit-Period" aria-describedby="basic-addon1">
			</div>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon1">X-RateLimit-Remaining</span>
				</div>
				<input type="password" class="form-control" placeholder="**************" aria-label="X-RateLimit-Remaining" aria-describedby="basic-addon1">
			</div>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon1">X-RateLimit-Reset</span>
				</div>
				<input type="password" class="form-control" placeholder="**************" aria-label="X-RateLimit-Reset" aria-describedby="basic-addon1">
			</div>
		</div>
	</div>
</div>