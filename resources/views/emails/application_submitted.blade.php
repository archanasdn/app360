<!DOCTYPE html>
<html>
<head>
    <title>Application Submitted</title>
</head>
<body>
    <h1>New Application Received</h1>
    <p>Name: {{ $application->name }}</p>
    <p>Email: {{ $application->email }}</p>
    <p>Phone: {{ $application->phone }}</p>
    <p>CV Path: {{ $application->cv_path }}</p>
</body>
</html>
