<!-- resources/views/report.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Report</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Report</h2>
    @if(Auth::user()->type == 'admin')
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>User</th>
                    <th>Time In</th>
                    <th>Time Out</th>
                </tr>
            </thead>
            <tbody>
                @foreach($logs as $log)
                <tr>
                    <td>{{ $log->email }}</td>
                    <td>{{ $log->time_in }}</td>
                    <td>{{ $log->time_out }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Time In</th>
                    <th>Time Out</th>
                </tr>
            </thead>
            <tbody>
                @foreach($logs as $log)
                <tr>
                    <td>{{ $log->time_in }}</td>
                    <td>{{ $log->time_out }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
</body>
</html>
