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
				<h2>Login</h2>
                @if ($errors->any())
                <ul>
                      @foreach ($errors->all() as $x )

                            <li>{{ $x }}</li>

                      @endforeach
                  </ul>
                @endif
				<form action="{{ route("admin-login") }}" method="POST" >
                    @csrf


					<div class="form-group">
						<label for="">Email/cell/UserName</label>
						<input class="form-control" type="text" name="login_data">
					</div>
					<div class="form-group">
						<label for="">password</label>
						<input class="form-control" type="password" name="password">
					</div>


					<div class="form-group">
						<input class="btn btn-primary" type="submit" value="Sign Up">
					</div>
				</form>
			</div>
            <div class="card-footer">
              <a href="{{ route("admin-regi") }}"> registration</a>
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
