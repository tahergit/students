<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <style>
      body {
        font-family: 'Nunito', sans-serif;
      }
    </style>
  </head>

  <body>
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-xs-11 col-md-8">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title fw-bold text-primary">
                Create New Student
              </h3>

              <h6 class="card-subtitle mb-2 text-muted">
                Enter student's data then press "Create"
              </h6>

                <form class="mt-4" method="get" action="{{ url('create-student') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">
                            Name
                        </label>

                        <input type="text" name="name" id="name" placeholder="Full name please." class="form-control">

                        @error('name')
                            <b class="text-danger mt-1">{{ $message }}</b>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">
                            Email
                        </label>

                        <input type="text" name="email" id="email" placeholder="name@example.com" class="form-control">

                        @error('email')
                        <b class="text-danger mt-1">{{ $message }}</b>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="age" class="form-label">
                            Age
                        </label>

                        <input type="text" name="age" id="age" placeholder="How old is he?" class="form-control">

                        @error('age')
                        <b class="text-danger mt-1">{{ $message }}</b>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-outline-primary mt-2">
                        Create
                    </button>
                </form>
            </div>
          </div>

            <div class="card mt-5">
                <table class="table table-striped table-hover mb-0">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Age</th>
{{--                            <th scope="col">Actions</th>--}}
                        </tr>
                    </thead>

                    <tbody>
                    @foreach($students as $student)
                        <tr>
                            <th scope="row">{{ $student->id }}</th>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->age }}</td>
{{--                            <td>@@@</td>--}}
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
      </div>
    </div>
  </body>
</html>
