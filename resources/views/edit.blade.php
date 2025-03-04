<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Create Page</title>
</head>
<body>
    <div class="container d-flex justify-content-between my-8">
        <div class="container">
            <h1 class="txt-primary">Edit</h1>
        </div>
        <div class="col-auto">
            <a href="/" type="submit" class="btn btn-success mb-3">Back To Home</a>
        </div>
    </div>
    
    <div class="container px-5">
        <form method="POST" action="{{route('update', $ourPost->id)}}" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" name="name" id="name" value="{{ $ourPost->name }}">
              @error('name')
                  <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>


            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" name="description" id="description" value="{{ $ourPost->description }}">
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3 ">
                <label for="image" class="form-label">Select Image</label>
                <input type="file" class="form-control" name="image" id="image" value="{{ $ourPost->image }}">
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>


            <div>
                <input type="submit" class="btn btn-primary">
            </div>

        </form>
    </div>
</body>
</html>