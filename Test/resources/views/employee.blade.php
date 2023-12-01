<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
</head>

<body>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

/* Style the form container */
form {
    max-width: 600px;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Style form labels */
label {
    display: block;
    margin-bottom: 8px;
}

/* Style form inputs and selects */
input[type="text"],
input[type="number"],
input[type="email"],
select,
input[type="date"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

/* Style the submit button */
button {
    background-color: #4caf50;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

/* Add some styling for better visual appeal */
select,
button {
    transition: background-color 0.3s ease;
}

/* Hover effect for select and button */
select:hover,
button:hover {
    background-color: #45a049;
}
</style>
<form action="{{url('empdetailsShow')}}" method='post' enctype="multipart/form-data">
@csrf
  <div class="mb-3 mt-3">
    <label for="Name" class="form-label">Name:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter Your Name:" name="Name">
  </div>
  <div class="mb-3">
    <label for="Gender" class="form-label">Gender:</label>
    <input type="radio" name="Gender" value="Male"> Male
    <input type="radio" name="Gender" value="Female"> Female
  </div>
  <div class="mb-3">
  <label for="Dob">Dob:</label>
  <input type="date" id="dob" name="Dob">
  </div>
  <div class="mb-3">
    <label for="Address" class="form-label">Address:</label>
    <input type="text" class="form-control" id="address" placeholder="Enter Address" name="Address">
  </div>
  <div class="mb-3">
    <label for="Mobile" class="form-label">Mobile:</label>
    <input type="tel" class="form-control" id="model" placeholder="Enter Mobile no" name="Mobile" pattern="[9876][0-9]{10}">
  </div>
  <div class="mb-3">
    <label for="Email" class="form-label">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter Email" name="Email">
  </div>
  <div class="mb-3">
    <label for="Department" class="form-label">Department:</label>
    <select class="form-select"  aria-label="multiple select example" name="Department">
      
        <option selected>Open this select menu</option>
        @foreach($dept as $d)
        <option value="{{$d->id}}">{{$d->Name}}</option>
        @endforeach
      
    </select>
  </div>
  <div class="mb-3">
    <label for="Designation" class="form-label">Designation:</label>
    <select class="form-select"  aria-label="multiple select example" name="Designation">
        <option selected>Open this select menu</option>
        @foreach($design as $de)
        <option value="{{$de->id}}">{{$de->Name}}</option>
        @endforeach
        
    </select>
  </div>
  <div class="mb-3">
    <label for="Doj">Doj:</label>
    <input type="date" id="birthday" name="Doj">
  </div>
  <div class="mb-3">
  <label for="" class="form-label">upload image</label>
  <input type="file" class="form-control" name="image">
  </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        
</form>
<a href="dept"><button>add department</button></a>
<a href="desig"><button>add designation</button></a>
</body>
</html>
