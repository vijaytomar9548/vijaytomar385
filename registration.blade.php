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
  <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3 mt-3">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{ old('name') }}">
      <span class='text-danger'>
        @error('name')
            {{ $message }}
        @enderror
      </span>
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{ old('email') }}">
      <span class='text-danger'>
        @error('email')
            {{ $message }}
        @enderror
      </span>
    </div>
    <div class="mb-3">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
      <span class='text-danger'>
        @error('password')
            {{ $message }}
        @enderror
      </span>
    </div>
    <div class="mb-3">
      <label for="confirmpassword">Password:</label>
      <input type="password" class="form-control" id="confirmpassword" placeholder="Enter confirm password" name="confirmpassword">
      <span class='text-danger'>
        @error('confirmpassword')
            {{ $message }}
        @enderror
      </span>
    </div>
    <div class="mb-3">
      <label for="image">Upload Image:</label>
      <input type="file" class="form-control" id="image" placeholder="Upload image" name="image" >
      <span class='text-danger'>
        @error('image')
            {{ $message }}
        @enderror
      </span>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
