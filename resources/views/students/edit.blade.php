<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />
</head>
<body>
    <div>
        <div class="container my-5">
            <div class="d-flex justify-content-end">
                <a href="{{ url('students') }}" class="btn btn-primary">Student List</a>

            </div>
            <div class="row">
                <div class="col-md-6 mx-auto d-grid gap-2">
                <form action="{{ url('students', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label class="form-group mb-3">First Name</label>
            <input type="text" name="fname" class="form-control" />
        </div>
        <div>
            <label class="form-group mb-3">Last Name</label>
            <input type="text" name="lname" class="form-control" />
        </div>
        <div>
            <label class="form-group mb-3">Email</label>
            <input type="text" name="email" class="form-control" />
        </div>
        <div>
            <label class="form-group mb-3">Phone Number</label>
            <input type="text" name="phone" class="form-control" />
        </div>
        <div>
            <label class="form-group mb-3">Address</label>
            <input type="text" name="address" class="form-control" />
        </div>
        <div>
            <label class="form-group mb-3">City</label>
            <input type="text" name="city" class="form-control" />
        </div>
        <div>
            <label class="form-group mb-3">Province</label>
            <input type="text" name="province" class="form-control" />
        </div>
        <div>
            <label class="form-group mb-3">Zip Code</label>
            <input type="text" name="zip" class="form-control" />
        </div>
        <div>
            <label class="form-group mb-3">Birthday</label>
            <input type="text" name="birthdate" class="form-control" />
        </div>
        <div>
            <button class="btn btn-primary">Save Changes</button>
        </div>
    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>