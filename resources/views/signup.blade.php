<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ACT Portal - Sign Up</title>
<!-- Bootstrap 5 CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
<div class="row justify-content-center">
<div class="col-md-6">
<div class="card shadow-sm border-0">
<div class="card-header bg-primary text-white py-3">
<h4 class="card-title mb-0">Student Sign Up</h4>
</div>

<div class="card-body p-4">

<!-- IMPORTANT: Form Action points to POST route -->
<form action="{{ url('/signup') }}" method="POST">
<!-- REQUIREMENT 1: CSRF Protection Directive -->

@csrf
<!-- Full Name Field -->
<div class="mb-3">
<label for="fullname" class="form-label">Full Name</label>

<input type="text"
name="fullname"

id="fullname"

class="form-control @error('fullname') is-invalid

@enderror"
value="{{ old('fullname') }}"
placeholder="Juan Dela Cruz">
<!-- REQUIREMENT 3: Displaying Validation Error -->

@error('fullname')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>
<!-- Email Address Field -->
<div class="mb-3">
<label for="email" class="form-label">Email Address</label>

<input type="email"
name="email"
id="email"
class="form-control @error('email') is-invalid @enderror"

value="{{ old('email') }}"
placeholder="student@example.com">
@error('email')

<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>
<!-- Password Field -->
<div class="mb-3">
<label for="password" class="form-label">Password</label>

<input type="password"
name="password"
id="password"
class="form-control @error('password') is-invalid

@enderror"
placeholder="At least 6 characters">

@error('password')

<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>
<!-- Submit Button -->
<button type="submit" class="btn btn-primary w-100">Create
Account</button>
</form>
</div>
</div>
</div>
</div>
</div>
</body>
</html>