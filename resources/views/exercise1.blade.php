<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1 - Profile Cards</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <h2 class="text-center mb-4">Student Profiles</h2>

    <div class="row">

        <!-- Student 1 -->
        <div class="col-12 col-md-6 mb-4">
            <div class="card">

                <div class="card-header">
                    Juan Cruz
                </div>

                <div class="card-body">
                    <p><strong>Student ID:</strong> 2026-001</p>
                    <p><strong>Course:</strong> ACT 1st Year</p>

                    <span class="badge bg-success">Enrolled</span>
                </div>

                <div class="card-footer">
                    <button class="btn btn-outline-primary btn-sm">
                        View Profile
                    </button>
                </div>

            </div>
        </div>

        <!-- Student 2 -->
        <div class="col-12 col-md-6 mb-4">
            <div class="card">

                <div class="card-header">
                    Maria Santos
                </div>

                <div class="card-body">
                    <p><strong>Student ID:</strong> 2026-002</p>
                    <p><strong>Course:</strong> ACT 1st Year</p>

                    <span class="badge bg-success">Enrolled</span>
                </div>

                <div class="card-footer">
                    <button class="btn btn-outline-primary btn-sm">
                        View Profile
                    </button>
                </div>

            </div>
        </div>

    </div>
</div>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>