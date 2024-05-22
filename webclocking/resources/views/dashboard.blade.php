<!-- resources/views/dashboard.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Dashboard</h2>
    <p id="datetime"></p>
    <p>Email: {{ Auth::user()->email }}</p>
    <p>Type: {{ Auth::user()->type }}</p>
    @if(Auth::user()->type == 'admin')
        <a href="/users">Users</a>
    @endif
    <a href="/report">Report</a>
    <a href="/logout">Logout</a>
    <button onclick="clockInOut()">Time In/Out</button>
</div>

<script>
function clockInOut() {
    fetch('/clockinout', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
    }).then(response => response.json())
      .then(data => {
        alert(data.message);
      });
}

setInterval(() => {
    document.getElementById('datetime').innerHTML = new Date().toLocaleString();
}, 1000);
</script>
</body>
</html>
