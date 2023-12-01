<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Submitted Details </title>
</head><style>
    body {
        font-family: 'Times New Roman', Times, serif;
        margin: 20px;
        background-color: #f2f2f2;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 8px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 12px;
        text-align: left;
    }

    th {
        background-color: #4CAF50; /* Green color for header */
        color: white;
    }

    button {
        background-color: #ff4d4d; /* Red color for buttons */
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #cc0000; /* Darker red on hover */
    }

    a {
        text-decoration: none;
        color: #007bff; /* Blue color for links */
    }

    a:hover {
        text-decoration: underline;
    }
</style>


<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Dob</th>
            <th>Address</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Department</th>
            <th>Designation</th>
            <th>Doj</th>
        </tr>
        @foreach($form as $submitdetails)
        <tr>
            <td>{{$submitdetails->Name}}</td>
            <td>{{$submitdetails->Gender}}</td>
            <td>{{$submitdetails->Dob}}</td>
            <td>{{$submitdetails->Address}}</td>
            <td>{{$submitdetails->Mobile}}</td>
            <td>{{$submitdetails->Email}}</td>
            <td>{{$submitdetails->Department}}</td>
            <td>{{$submitdetails->Designation}}</td>
            <td>{{$submitdetails->Doj}}</td>
            <td><img src="{{asset('storage/file/'.$submitdetails->filename)}}" alt="" width="100px" height="100px"></td>
            <td>
            <a href="{{url('update',$submitdetails->id)}}"><button>Update Details</button></a>
            <a href="{{url('delete',$submitdetails->id)}}"><button>Delete Emp</button></a>
            </td>
        </tr>
        @endforeach
</table>
<a href="/"><button>Add Members</button></a>
</body>
</html>