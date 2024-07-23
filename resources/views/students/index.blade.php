<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>fullname</th>
                                <th>email</th>
                                <th>phone</th>
                                <th>address</th>
                                <th>city</th>
                                <th>province</th>
                                <th>zip</th>
                                <th>birthdate</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                            <tr>
                                <td>{{ $students->fullname }}</td>
                                <td>{{ $students->email }}</td>
                                <td>{{ $students->phone }}</td>
                                <td>{{ $students->address }}</td>
                                <td>{{ $students->city }}</td>
                                <td>{{ $students->province }}</td>
                                <td>{{ $students->zip }}</td>
                                <td>{{ $students->birthday }}</td>
                                <td>
                                <a href="{{ url('students', $student->id) }}/edit" class="btn btn-outline-success btn-sm"></a>
                                <form action="{{ url('students'), $student->id }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure you want to delete?')">delete</button>
                               </form> 
                                </td>
                               @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>