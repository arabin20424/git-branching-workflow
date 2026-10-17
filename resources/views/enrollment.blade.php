<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Enrollment</title>

    <!-- Local Bootstrap Theme -->
     <link rel="stylesheet" href="{{ asset('css/bootstrap-superhero.min.css') }}">

</head>
<body class="bg-light">

<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-7">

            <div class="card shadow">
                <div class="card-header bg-primary text-white text-center">
                    <h3>Student Enrollment Form</h3>
                </div>

                <div class="card-body">

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ url('/enrollment') }}" method="POST">
                        @csrf

                        <!-- Full Name -->
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="fullname"
                                value="{{ old('fullname') }}"
                                class="form-control @error('fullname') is-invalid @enderror">

                            @error('fullname')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Student ID -->
                        <div class="mb-3">
                            <label class="form-label">Student ID</label>
                            <input type="text" name="student_id"
                                placeholder="2026-01234"
                                value="{{ old('student_id') }}"
                                class="form-control @error('student_id') is-invalid @enderror">

                            @error('student_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Course Track -->
                        <div class="mb-3">
                            <label class="form-label">Course Track</label>
                            <select name="track"
                                class="form-select @error('track') is-invalid @enderror">

                                <option value="">Select Track</option>

                                <option value="web"
                                    {{ old('track') == 'web' ? 'selected' : '' }}>
                                    Web Development
                                </option>

                                <option value="network"
                                    {{ old('track') == 'network' ? 'selected' : '' }}>
                                    Network Administration
                                </option>
                            </select>

                            @error('track')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" name="email"
                                value="{{ old('email') }}"
                                class="form-control @error('email') is-invalid @enderror">

                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Units -->
                        <div class="mb-3">
                            <label class="form-label">Units to Enroll</label>
                            <input type="number" name="units"
                                value="{{ old('units') }}"
                                class="form-control @error('units') is-invalid @enderror">

                            @error('units')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Terms -->
                        <div class="mb-3">
                            <input type="checkbox" name="terms" value="1"
                                id="terms"
                                class="form-check-input @error('terms') is-invalid @enderror"
                                {{ old('terms') ? 'checked' : '' }}>

                            <label for="terms" class="form-check-label">
                                I agree to the enrollment terms and conditions
                            </label>

                            @error('terms')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary w-100">
                            Submit Enrollment Application
                        </button>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>