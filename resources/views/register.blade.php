<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ACT Student Portal - Registration</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card shadow-sm border-0">
<div class="card-header bg-primary text-white py-3">
<h4 class="card-title mb-0">ACT Student Registration</h4>
</div>
<div class="card-body p-4">
<form action="#" method="POST">

@csrf

<div class="row g-3">
<div class="col-md-6">
<label for="firstName" class="form-label">First Name</label>
<input type="text" class="form-control" id="firstName"

placeholder="John" required>
</div>

<div class="col-md-6">

<label for="lastName" class="form-label">Last Name</label>
<input type="text" class="form-control" id="lastName"

placeholder="Doe" required>
</div>
<div class="col-md-12">
<label for="email" class="form-label">Email Address</label>
<input type="email" class="form-control" id="email"
placeholder="student@example.com" required>
</div>

<div class="col-md-6">
<label for="studentId" class="form-label">Student ID
Number</label>
<input type="text" class="form-control" id="studentId"
placeholder="2026-XXXXX" required>
</div>
<div class="col-md-6">
<label for="yearLevel" class="form-label">Year Level</label>
<select class="form-select" id="yearLevel" required>
<option selected disabled value="">Choose
level...</option>

<option value="1">1st Year ACT</option>
<option value="2">2nd Year ACT</option>

</select>
</div>
<div class="col-md-12">
<label class="form-label d-block">Gender</label>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio"
name="gender" id="male" value="Male">
<label class="form-check-label" for="male">Male</label>
</div>

<div class="form-check form-check-inline">
<input class="form-check-input" type="radio"
name="gender" id="female" value="Female">
<label class="form-check-label"
for="female">Female</label>
</div>
</div>
<div class="col-md-12">
<div class="form-check">
<input class="form-check-input" type="checkbox"
id="terms" required>
<label class="form-check-label" for="terms">
I agree to the terms and data privacy policy.
</label>
</div>
</div>
<div class="col-12 mt-4">
<button type="submit" class="btn btn-primary w-100">Register
Student</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/bootstrap.bundle.min.js"></script>
</body>
</html>