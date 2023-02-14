<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

<title>Form validation challenge</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Form validation challenge</h1>
				<form>
					<div class="form-group">
						<label>Required field:</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Max length 8:</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Required - Min length 10 - Max length 25:</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Not required - Min length 10 - Max length 25:</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Letters only:</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group">
						<strong>Not required:</strong><br>
						<input type="radio" name="required" value="yes">
						<label for="yes">Yes</label>
						<input type="radio" name="required" value="no"> 
						<label for="no">No</label>
					</div>
					<div class="form-group">
						<label>Required if above field is Yes:</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-success" value="Validate!">
					</div>
					<div id="optional">
						<h4>Optional</h4>
						<div class="form-group">
							<label>Valid email:</label>
							<input type="text" class="form-control">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>