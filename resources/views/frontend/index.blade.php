@extends('frontend.layouts.main')
@section('main-section')
    <section class="main-heading my-5 pt-2" id="about">
        <div class="text-center">
            <h1 class="display-4 text-danger">About Us</h1>
            <hr class="w-25 mx-auto" style="color:red" />
            <div class="container">
                <div class="row my-5">
                    <div class="col-lg-6 col-md-6 col-12 col-xxl-6">
                        <figure>
                            <img src="{{ 'frontend/img/first.jpeg' }}" alt="about images" class="img-fluid about_img">
                        </figure>

                    </div>
                    <div
                        class="col-lg-6 col-md-6 col-12 col-xxl-6 d-flex justify-content-center align-items-start flex-column">
                        <!-- <h1 class="text-primary">RK Hostel</h1> -->
                        <p>RK University is a private university located in Rajkot, Gujarat. The university provides
                            accommodation to its students in the form of hostels. The hostels at RK University offer
                            comfortable and safe living quarters for students, equipped with necessary amenities. The
                            hostels are designed to meet the needs of students, providing them with a conducive environment
                            to study and live. The rooms in the hostels are spacious and well-furnished, with facilities
                            like beds, study tables, and storage spaces. The university also provides food and dining
                            facilities in the hostels, serving nutritious and hygienic food. The hostels are supervised by
                            trained staff and have round-the-clock security to ensure the safety of the students. Overall,
                            the hostels at RK University provide a comfortable and conducive living environment for students
                            and are a great option for those looking for affordable and convenient accommodation in Rajkot.

                        </p>

                    </div>





                </div>
            </div>


        </div>
    </section>
    <!-- about us end -->
    <!-- Contact us start  -->
    <section class="main-heading my-5 pt-5" id="contactus">
        <div class="text-center">
            <h1 class="display-4 text-danger">Contact Us</h1>
            <hr class="w-25 mx-auto" style="color:red" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-10 col-md-8 mx-auto">
                    <form action="{{ url('/contactus') }}" method="post">
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
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                name="email">
                                <span style="color: red">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Number</label>
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

    <!-- contact us end  -->
    <!-- rules and regulations  -->
    <section class="ourteam mb-2" id="rules">
        <div class="container text-center">
            <h1 class="text-danger">Rules And Regulations</h1>
            <hr class="w-50 mx-auto" style="color:red" />
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-10 col-12 m-auto">
                    <figure class="figure">
                        <img src="{{ 'frontend/img/rag.jpeg' }}" alt="ragging" class="figure-img img-fluid rounded"
                            height="250px" width="400px">
                        <figcaption>
                            <p class="figure-caption">stg</p>
                        </figcaption>
                    </figure>

                </div>

                <!-- here  -->
                <div class="col-lg-4 col-md-4 col-sm-10 col-12 m-auto">
                    <figure class="figure">
                        <img src="{{ 'frontend/img/warning.jpeg' }}" alt="ragging" class="figure-img img-fluid rounded"
                            height="250px" width="400px">
                        <figcaption>
                            <p class="figure-caption">stg</p>
                        </figcaption>
                    </figure>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-10 col-12  m-auto">
                    <figure class="figure">
                        <img src="{{ 'frontend/img/Ragging.jpg' }}" alt="ragging" class="figure-img img-fluid rounded"
                            height="250px" width="400px">
                        <figcaption>
                            <p class="figure-caption">stg</p>
                        </figcaption>
                    </figure>

                </div>

            </div>

        </div>
    </section>
    <!-- end  -->
    <!-- faq start  -->
    <section id="faq">
        <div class="wrapper">
            <div class="accordion_container">
                <div class="accordion_header">
                    Frequently Asked Questions
                </div>
                <div class="accordion_body">
                    <ul>
                        <li>
                            <div class="li_qus">
                                <div class="btn"></div>
                                <p>What types of rooms are available? </p>
                            </div>
                            <div class="li_ans">
                                Students may want to know if there are different room types such as shared and what
                                amenities are included in each option.
                            </div>
                        </li>
                        <li>
                            <div class="li_qus">
                                <div class="btn"></div>
                                <p>How much does it cost per night?</p>
                            </div>
                            <div class="li_ans">
                                Students may want to know the pricing structure and any additional fees or deposits
                                required.
                            </div>
                        </li>
                        <li>
                            <div class="li_qus">
                                <div class="btn"></div>
                                <p>What amenities are included in the stay? </p>
                            </div>
                            <div class="li_ans">
                                Students may want to know what amenities are included in the hostel stay, such as Wi-Fi,
                                breakfast, laundry facilities, or common areas.
                            </div>
                        </li>
                        <li>
                            <div class="li_qus">
                                <div class="btn"></div>
                                <p>What is the check-in and check-out policy?</p>
                            </div>
                            <div class="li_ans">
                                Students may want to know the specific times for check-in and check-out and any penalties
                                for late check-out or early check-in.
                            </div>
                        </li>
                        <li>
                            <div class="li_qus">
                                <div class="btn"></div>
                                <p>What is the security like?</p>
                            </div>
                            <div class="li_ans">
                                Students may want to know what security measures the hostel has in place, such as security
                                cameras, lockers, or 24-hour reception.
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>



    <!-- faq end  -->
@endsection
