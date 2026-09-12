<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 3 - Schedule</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <h2 class="text-center mb-4">Class Schedule</h2>

    <div class="row">

        <!-- Main Area -->
        <div class="col-12 col-md-8 mb-4">

            <div class="card">

                <div class="card-header">
                    Class Schedule
                </div>

                <div class="card-body">

                    <table class="table table-bordered table-striped">

                        <thead>
                            <tr>
                                <th>Subject</th>
                                <th>Schedule</th>
                                <th>Room</th>
                                <th>Status</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>Information Management</td>
                                <td>Wednesday 7:00 AM - 10:00 AM</td>
                                <td>Lab 1</td>
                                <td>
                                    <span class="badge bg-success">
                                        Active
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <td>Data Structures and Algorithms</td>
                                <td>Saturday 7:00 AM - 10:00 AM</td>
                                <td>Lab 2</td>
                                <td>
                                    <span class="badge bg-success">
                                        Active
                                    </span>
                                </td>
                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>


        <!-- Sidebar -->
        <div class="col-12 col-md-4 mb-4">

            <div class="card">

                <div class="card-header">
                    Announcements
                </div>

                <div class="card-body">

                    <div class="alert alert-warning">
                        <strong>Reminder:</strong>
                        Asynchronous session today!
                    </div>

                    <h6>Announcements</h6>

                    <ul class="list-group">

                        <li class="list-group-item">
                            Submit your activity before the deadline.
                        </li>

                        <li class="list-group-item">
                            Check the LMS for new announcements.
                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

</div>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>