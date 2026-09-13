l
<!DOCTYPE html>
<html>
<head>
    <title>Exercise 4</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>


<nav class="navbar navbar-dark bg-primary">

    <div class="container">

     <span class="navbar-brand">
            ACT Student Portal
     </span>

    </div>

</nav>
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

    <div class="row">

     <div class="col-12 col-md-8">

         <div class="card mb-3">

            <div class="card-header">
                    Class Schedule
            </div>

            <div class="card-body">

                <table class="table">

                     <tr>
                        <th>Subject</th>
                        <th>Schedule</th>
                        <th>Room</th>
                         <th>Status</th>
                    </tr>

                    <tr>
                        <td>Information Management</td>
                         <td>Wednesday 7 AM</td>
                         <td>Room 101</td>
                         <td>Active</td>
                    </tr>

                     <tr>
                         <td>Data Structures</td>
                         <td>Saturday 7 AM</td>
                         <td>Room 102</td>
                         <td>Active</td>
                    </tr>

                </table>

             </div>

        </div>
        </div>

        <div class="col-12 col-md-4">

            <div class="card mb-3">

                <div class="card-header">
                    Announcements
                </div>

                <div class="card-body">

                    <div class="alert alert-warning">
                        Reminder: Asynchronous session today!
                    </div>

                    <ul class="list-group">

                    <li class="list-group-item">
                            Submit your activity.
                    </li>

                    <li class="list-group-item">
                            Check the LMS.
                    </li>

                </ul>

            </div>

         </div>

    </div>

    </div>



    <div class="row">

        <div class="col-12 col-md-6 mb-3">

            <button class="btn btn-primary w-100">
                Download Official Schedule PDF
            </button>

        </div>

        <div class="col-12 col-md-6 mb-3">

            <button class="btn btn-outline-danger w-100">
                Report a Portal Issue
            </button>

        </div>

    </div>

</div>

</body>
</html>

