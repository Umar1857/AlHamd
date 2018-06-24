@extends('layouts.app')
<!---->
@section('content')
    <div class="intro about_content">
        <div class="main_banner">
            <div class="hotel_description text-center">
                <h1>CONTACT US</h1>

                <p>We take pride in service with great<span class="white_txt">attention</span>to detail</p>
            </div>
        </div>
    </div>
    <div class="about_txt">
        <h1>Contact Us</h1>
    </div>
    <div class="contact-form">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form method="post" action="">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control fields" name="username" id="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="number">Number</label>
                        <input type="text" class="form-control fields" name="phone" id="number" placeholder="Number">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control fields" name="emailID" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" name="message" placeholder="Type your message here..." rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!---->
@endsection
