<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 2 - Stat Cards</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <h2 class="text-center mb-4">Student Statistics</h2>

    <div class="row">

        <!-- Card 1 -->
        <div class="col-12 col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Enrolled Subjects: 6</h5>

                    <span class="badge bg-success">
                        Active
                    </span>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-12 col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Pending Tasks: 2</h5>

                    <span class="badge bg-warning text-dark">
                        Due Soon
                    </span>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-12 col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Attendance: 98%</h5>

                    <span class="badge bg-info text-dark">
                        Good
                    </span>
                </div>
            </div>
        </div>

    </div>

</div>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>