
<!DOCTYPE html>
<html>
<head>
    <title>Exercise 2</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>
<div class="container mt-4">

    <h2>Student Statistics</h2>

    <div class="row">

        <div class="col-12 col-md-4">
            <div class="card mb-3">
               <div class="card-body">

                <h5>Enrolled Subjects: 6</h5>

                <span class="badge bg-success">
                        Active
                </span>

                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
        <div class="card mb-3">
             <div class="card-body">

                <h5>Pending Tasks: 2</h5>

                <span class="badge bg-warning text-dark">
                        Due Soon
                </span>

                </div>
            </div>
</div>
        <div class="col-12 col-md-4">
            <div class="card mb-3">
                <div class="card-body">

                    <h5>Attendance: 98%</h5>

               <span class="badge bg-info text-dark">
                  Good
</span>
          </div>
            </div>
        </div>

    </div>

</div>

</body>
</html>
