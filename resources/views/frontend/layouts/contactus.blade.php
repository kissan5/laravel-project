<section class="main-heading my-5 pt-5" id="contactus">
    <div class="text-center">
        <h1 class="display-4 text-danger">Contact Us</h1>
        <hr class="w-25 mx-auto" style="color:red" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-10 col-md-8 mx-auto">
                <form action="./Contact.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="fullname">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="email">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Number</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="number">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Complete Address</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="address">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Comments</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comments"></textarea>
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                </form>

            </div>
        </div>
    </div>

</section>