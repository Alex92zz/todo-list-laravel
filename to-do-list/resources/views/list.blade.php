<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>
<body>


    <div class="container">
        <div class="position-relative">
        <div>
        <br/>
        <h1 class="alert alert-danger ">To do list</h1>
        <br/>
        <form action="/create" method="post">
          @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Enter to do:</label>
              <input type="text" class="form-control" name="content" aria-describedby="content" required>
            </div>

            <input type="radio" class="btn-check" name="color" value="danger" id="option1" autocomplete="off" required>
            <label class="btn btn-danger" for="option1">Red</label>
            
            <input type="radio" class="btn-check" name="color" value="primary" id="option2" autocomplete="off">
            <label class="btn btn-primary" for="option2">Blue</label>
            
            <input type="radio" class="btn-check" name="color" value="warning" id="option3" autocomplete="off">
            <label class="btn btn-warning" for="option3">Yellow</label>

            <input type="radio" class="btn-check" name="color" value="success" id="option4" autocomplete="off">
            <label class="btn btn-success" for="option4">Green</label>

            <input type="radio" class="btn-check" name="color" value="secondary" id="option5" autocomplete="off">
            <label class="btn btn-secondary" for="option5">Grey</label>

            <input type="radio" class="btn-check" name="color" value="info" id="option6" autocomplete="off">
            <label class="btn btn-info" for="option6">Cobalt</label>

            <br/>
            <br/>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

          <br/>
          <h2>To do's:</h2>
          <br/>
          @foreach ($todos as $todo)
          <div class="alert alert-{{ $todo->color }}" role="alert">
            {{ $todo->content }}
          </div>
                  

              
          @endforeach
        </div>
    </div>
</div>

    <script src=""></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>
</html>
