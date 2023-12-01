<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details Update</title>
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
<form action="{{url('updating',$updatedetail->id)}}" method='post'>
@csrf
  <div class="mb-3 mt-3">
    <label for="Name" class="form-label">Name:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter Your Name:" name="Name" value="{{$updatedetail->Name}}">
  </div>
  <div class="mb-3">
    <label for="Gender" class="form-label">Gender:</label>
    <input type="radio" name="Gender" value="Male"> Male
    <input type="radio" name="Gender" value="Female"> Female
  </div>
  <div class="mb-3">
  <label for="Dob">Dob:</label>
  <input type="date" id="dob" name="Dob" value="{{$updatedetail->Dob}}">
  </div>
  <div class="mb-3">
    <label for="Address" class="form-label">Address:</label>
    <input type="text" class="form-control" id="address" placeholder="Enter Address" name="Address" value="{{$updatedetail->Address}}">
  </div>
  <div class="mb-3">
    <label for="Mobile" class="form-label">Mobile:</label>
    <input type="number" class="form-control" id="model" placeholder="Enter Mobile no" name="Mobile" value="{{$updatedetail->Mobile}}">
  </div>
  <div class="mb-3">
    <label for="Email" class="form-label">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter Email" name="Email" value="{{$updatedetail->Email}}">
  </div>
  <div class="mb-3">
    <label for="Department" class="form-label">Department:</label>
    <select class="form-select"  aria-label="multiple select example" name="Department" value="{{$updatedetail->Department}}">
        <option selected>Open this select menu</option>
        <option value="Information Technology">Information Technology</option>
        <option value="Marketing Department">Marketing Department</option>
        <option value="Cooking Department">Cooking Department</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="Designation" class="form-label">Designation:</label>
    <select class="form-select"  aria-label="multiple select example" name="Designation" value="{{$updatedetail->Designation}}">
        <option selected>Open this select menu</option>
        <option value="1">Information Technology</option>
        <option value="2">Marketing Department</option>
        <option value="3">Cooking Department</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="Doj">Doj:</label>
    <input type="date" id="birthday" name="Doj" value="{{$updatedetail->Doj}}">
  </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        
</form>
</body>
</html>
