<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>

    <h1>Admin Dashboard</h1>

    <h3>Total Applications</h3>
    <p>{{ $totalApplications }}</p>

    <h3>Pending</h3>
    <p>{{ $pendingApplications }}</p>

    <h3>Approved</h3>
    <p>{{ $approvedApplications }}</p>

    <h3>Rejected</h3>
    <p>{{ $rejectedApplications }}</p>

</body>
</html>