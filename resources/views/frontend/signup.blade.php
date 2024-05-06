<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div>
        <div class="mt-3">
            <a href="/loginAll"> <button type="submit" name="back" class="btn btn-success">Back To Previous
                    Page</button></a><br><br>
        </div>
    </div>
    <section class="main-heading my-2 pt-2" id="contactus">

        <div class="text-center text-danger">
            <h1 class="display-4">Student Registration Form</h1>
            <hr class="w-50 mx-auto" style="color:red" />
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-10 col-md-8 mx-auto">
                    <form action="{{ url('register1') }}" method="post">
                        @csrf
                       
                        
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="fullname">
                            <span style="color: red">
                                @error('fullname')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="email">
                            <span style="color: red">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                                <span style="color: red">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>


                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="password">Confirm Password</label>
                                <input type="password" class="form-control" id="password" name="confirm_password">
                                <span style="color: red">
                                    @error('confirm_password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                        </div>

                        {{-- <div class="mb-3">
                <div class="form-group">
                  <label for="gender">Gender</label>
                  <select class="form-control form-select" id="gender" name="gender">
                      <option value="gender">Select Gender</option>
                      <option value="male" name="gender">Male</option>
                      <option value="female" name="gender">Female</option>
                      <option value="others" name="gender">Others</option>
                  </select>
              </div>
              </div>
            --}}



                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Contact Number</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="number">
                            <span style="color: red">
                                @error('number')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>


                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Complete Address</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="address">
                            <span style="color: red">
                                @error('address')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>



                        <button type="submit" name="submit" class="btn btn-success">Submit</button><br><br>
                        <p>Have an account already? <a href="{{ url('/loginAll') }}">Log In</a></p>

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
