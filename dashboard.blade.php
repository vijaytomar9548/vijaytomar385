<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Student Dashboard </h2></br>


       
  <table class="table">
    <thead>
      <tr>
        <th>Student ID</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <h4>Welcome : {{ Auth::user()->name }}</h4>
    <tbody>
      @foreach ($students as $student)
          <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>

            <td>
                <img src="{{ asset('/images/'. $student->image) }}" style="height:70px; width:60px;">
            </td>

            <td>
                <a href="{{ route('edit', $student->id) }}">
                    <button type="button" class="btn btn-primary">Edit</button>
                </a>
            
                <a href="{{ route('delete', $student->id) }}">
                    <button type="button" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</button>
                </a>
            </td>
          </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
