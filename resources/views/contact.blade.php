@extends('layouts.main')
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
{{-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> --}}

@section('contents')
<!-- Contact area start -->
<section class="contact__area-6">
    <div class="container g-0 line pt-120 pb-110">
        <span class="line-3"></span>
        <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                <div class="sec-title-wrapper">
                    <h2 class="sec-title-2 animation__char_come">Let’s get in touch</h2>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                <div class="contact__text">
                    <p style="font-size: large">Great! We're excited to hear from you and let's start something special together. Call us for any inquiry.</p>
                </div>
            </div>
        </div>
        <div class="row contact__btm">
            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                    <div class="contact__info">
                        <h3 class="sub-title-anim-top animation__word_come">Don't be afraid man! <br>Say hello</h3>
                        <ul>
                            <li><a href="tel:+918360602121">+918360602121</a></li>
                            <li><a href="mailto:codeoptimalsolutions@gmail.com">codeoptimalsolutions@gmail.com</a></li>
                            <li><span>SCO 98, Singh Tower, 2nd Floor, D-Block Market, Ranjit Avenue, Amritsar Punjab, 143001</span></li>
                        </ul>
                    </div>
            </div>
            <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                <div class="text-center">
                
                        <h2 class="sec-title-2 animation__char_come">Send messege</h2>
                    
                </div> 
                <br>
                {{-- @if (Session::has('msg'))
                    <p class="alert alert-success">{{ Session::get('msg') }}</p>
                @endif --}}

                @if (Session::has('msg'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ Session::get('msg') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {{-- <div class="alert alert-success alert-dismissible fade show" role="alert">

                </div> --}}
            @endif



                <div class="contact__form">
                    <form id="validateContact" action="{{ ('/post-messege') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Name" required>
                            <input type="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" placeholder="Phone" maxlength="12" minlength="8" class="input-numeric">
                            <input type="text" name="subject" placeholder="Subject" maxlength="100">
                        </div>
                        <div class="form-group">
                            <textarea name="message" placeholder="Message" required maxlength="300"></textarea>
                        </div>
                        <div class="btn_wrapper">
                            <button type="submit" class="wc-btn-primary btn-hover btn-item">
                                <span></span> Send <br>Messages 
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact area end -->

<style>
    .contact__area-6 {
        padding-top: 120px;
        padding-bottom: 110px;
    }

    .line-3 {
        display: block;
        width: 100%;
        height: 1px;
        background-color: #ddd;
        position: absolute;
        top: 0;
    }

    .sec-title-wrapper {
        margin-bottom: 20px;
    }

    .sec-title-2 {
        font-size: 36px;
        animation: char_come 1s ease forwards;
    }

    .contact__text p {
        margin-bottom: 0;
    }

    .contact__btm {
        margin-top: 40px;
    }

    .contact__info h3 {
        font-size: 28px;
        margin-bottom: 20px;
        animation: word_come 1s ease forwards;
    }

    .contact__info ul {
        list-style: none;
        padding: 0;
    }

    .contact__info ul li {
        margin-bottom: 10px;
    }

    .contact__info ul li a {
        text-decoration: none;
        /* color: #000; */
    }

    .contact__form form {
        display: flex;
        flex-direction: column;
    }

    .form-group {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        margin-bottom: 20px;
    }

    .form-group input,
    .form-group textarea {
        flex: 1 1 calc(50% - 20px);
        padding: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    .form-group textarea {
        flex: 1 1 100%;
        height: 150px;
        resize: none;
    }

    .btn_wrapper {
        text-align: center;
        margin-top: 20px;
    }

    .wc-btn-primary {
        display: inline-block;
        padding: 15px 30px;
        background-color: #000;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s;
    }

    .wc-btn-primary:hover {
        background-color: #444;
    }
</style>
@endsection
