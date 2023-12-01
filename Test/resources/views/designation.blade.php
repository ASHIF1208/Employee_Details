<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department</title>
</head>
<style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        .form-control {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:not(:last-child) {
            margin-right: 10px;
        }

        a button {
            background-color: #008CBA;
        }
    </style>
<body>
<form action="{{url('adddesign')}}" method='post'>
    @csrf
  <div class="form-group">
    <label for="Name">Name:</label>
    <input type="text" class="form-control" name="Name">
  </div>
  <div class="form-group">
    <label for="Department">Department:</label>
    <input type="number" class="form-control" name="Department">
  </div>
  <div class="form-group">
    <label for="Description">Description:</label>
    <input type="text" class="form-control" name="Description">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
  
</form>
</body>
</html>