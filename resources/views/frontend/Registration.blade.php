<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/registerbyadmin.css">
</head>

<body>


    <section class="main-heading   text-danger" id="contactus">
        <div class="pl-5 pt-5">
            <a href="{{ '/' }}"> <button type="submit" name="back" class="btn btn-success">Back To
                    Previous Page</button></a><br><br>
        </div>

        <div class="text-center text-danger">
            <h1 class="display-4 text-red">Student Registration Form</h1>
            <hr class="w-50 mx-auto" style="color:red" />
        </div>


        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-10 col-md-8 mx-auto" style="color:black">
                    <form action="{{ url('register') }}" method="post">
                        @csrf 
                        <div class="mb-3 text-danger">
                            <label for="exampleInputPassword1" style="color:black" class="form-label">Hostel
                                Registration Number</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="reg">
                            <span style="color: red">
                                @error('reg')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3 text-danger">
                            <label for="exampleInputPassword1" style="color:black" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="fullname">
                            <span style="color: red">
                                @error('fullname')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="Seater">Seater</label>
                                <select class="form-Seaterl form-select" id="gender" name="seater" >
                                    <option value="Seater">Select Seater</option>
                                    <option value="s3">Seater-2</option>
                                    <option value="s4">Seater-4</option>
                                    <option value="s6">Seater-6</option>
                                </select>
                                <span style="color: red">
                                    @error('seater')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Room Number</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="Roomno">
                            <span style="color: red">
                                @error('Roomno')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="email" autocomplete="off">
                            <span style="color: red">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="date">Date:</label>
                                <input type="date" class="form-control" id="date" name="date" >
                                <span style="color: red">
                                    @error('date')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            {{-- <div class="mb-3">
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <select class="form-control form-select" id="gender" name="gender" >
                                        <option value="gender">Select Gender</option>
                                        <option value="male" name="gender">Male</option>
                                        <option value="female" name="gender">Female</option>
                                        <option value="others" name="gender">Others</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('gender')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div> --}}

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Contact Number</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="number"
                                    autocomplete="off">
                                <span style="color: red">
                                    @error('number')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Guardin Number</label>
                                <input type="text" class="form-control" id="exampleInputPassword1"
                                    name="Gnumber">
                                <span style="color: red">
                                    @error('Gnumber')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>


                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Complete Address</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="address"
                                    autocomplete="off">
                                <span style="color: red">
                                    @error('address')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Guardin Address</label>
                                <input type="text" class="form-control" id="exampleInputPassword1"
                                    name="Gaddress" autocomplete="off">
                                <span style="color: red">
                                    @error('Gaddress')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <button type="submit" name="add" class="btn btn-success">Add
                                Student</button><br><br>



                    </form>

                </div>


            </div>
        </div>


    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
