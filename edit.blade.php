<!DOCTYPE html>
<html lang="en">
<head>
  <title>||Registration Form||</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Register Yourself!</h2>
  <form action="{{ route('update', $student->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3 mt-3">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value={{ $student->name }}>
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value={{ $student->email }}>
    </div>
   
    <div class="mb-3">
      <label for="image">Upload Image:</label>
      <input type="file" class="form-control" id="image" placeholder="Upload image" name="image"></br>
      <p style=color:blue;>Current image: <img src="{{ asset('/images/'. $student->image) }}" style="height:70px; width:60px;">
      </p>
        
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
