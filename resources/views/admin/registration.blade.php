<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="{{ asset("/assets/css/bootstrap.min.css") }}">
	<link rel="stylesheet" href="{{ asset("/assets/css/style.css") }}">
	<link rel="stylesheet" href="{{ asset("/assets/css/responsive.css") }}">
</head>
<body>



	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">


          @if ($errors->any())
          <ul>
                @foreach ($errors->all() as $x )

                      <li>{{ $x }}</li>

                @endforeach
            </ul>
          @endif
				<h2>Sign Up</h2>
				<form action="{{ route("admin-regi") }}" method="POST" enctype="multipart/form-data">
                    @csrf
					<div class="form-group">
						<label for="">Name</label>
						<input class="form-control" type="text" name="name">
					</div>
                    <div class="form-group">
						<label for="">Username</label>
						<input class="form-control" type="text" name="uname">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input class="form-control" type="email" name="email">
					</div>
			
					<div class="form-group">
						<label for="">photo</label>
						<input class="form-control-file" type="file" name="photo">
					</div>
					<div class="form-group">
						<label for="">password</label>
						<input class="form-control" type="password" name="pass">
					</div>

					<div class="form-group">
						<input class="btn btn-primary" type="submit" value="Sign Up">
					</div>
				</form>
			</div>
            <div class="card-footer">
                <a href="{{ route("admin-login") }}"> login</a>
              </div>
		</div>
	</div>








	<!-- JS FILES  -->
	<script src="{{ asset('/assets/js/jquery-3.4.1.min.js') }}"></script>
	<script src="{{ asset("/assets/js/popper.min.js") }}"></script>
	<script src="{{ asset("/assets/js/bootstrap.min.js") }}"></script>
	<script src="{{ asset("/assets/js/bootstrap.min.js" )}}"></script>
</body>
</html>
