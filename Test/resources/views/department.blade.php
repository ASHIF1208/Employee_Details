<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department</title>
    
</head>
    <body>
<form action="{{url('adddept')}}" method='post'>
@csrf
  <div class="form-group">
    <label for="Name">Name:</label>
    <input type="text" class="form-control" name="Name">
  </div>
  <div class="form-group">
    <label for="Description">Description:</label>
    <input type="text" class="form-control" name="Description">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
  <a href=""><button>Add</button></a>
</form>
</body>
</html>