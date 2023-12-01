<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department Details</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #3498db;
            color: white;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        a button {
            background-color: #008CBA;
        }

        a button:hover {
            background-color: #005680;
        }

        button:hover {
            background-color: #45a049;
        }

        a {
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <table>
        <tr>
        <th>Name</th>
        <th>Description</th>
        </tr>
        @foreach($dtform as $departmentdetails)
        <tr>
            <td>{{$departmentdetails->Name}}</td>
            <td>{{$departmentdetails->Description}}</td>
            <td>
            <a href="{{url('update',$departmentdetails->id)}}"><button>Update</button></a>
            <a href="{{url('delete',$departmentdetails->id)}}"><button>Delete</button></a></td>
        </tr>
        @endforeach
    </table>
    <a href="/dept"><button>Add Department</button></a>
</body>
</html>