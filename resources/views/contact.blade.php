@extends('base2')

@section('contact-us-css')

<link rel="stylesheet" href="/css/contact.css">
<link rel="stylesheet" 
          href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@stop

@section('contact-us')

    <div class="contact-container">

        <div class="form-container d-flex">

        <h2 class="text-center">CONTACT US FOR ANY ENQUIRY</h2>
        <h6 class="text-center py-3">Get in Contact with us by filling the form below.</h6>
        
        <form action="{{ route('send.email') }}" method="POST">
            @csrf
            
            
                <div class="top-form d-flex">
                    <div class="form-group-1">    
                        {{-- <label for="name">Your Name </label> --}}
                        <input type="text" name="name" id="form-control" placeholder="Enter your name" class="form-control">
                    </div>
                    <div class="form-group-1">       
                        {{-- <label for="email">Your email </label> --}}
                        <input type="email" name="email" id="form-control" placeholder="Enter your email" class="form-control">
                    </div>    
                </div>
                     <div class="form-group-2">
                        {{-- <label for="message">Your Message:</label> --}}
                        <textarea name="message"  cols="15" rows="5" class="form-control" placeholder="Write your message"></textarea>
                     </div>
                 <div class="d-flex">

                    <input type="submit" value="Send Message" class="btn btn-primary">
                    <a href="/search2"><input class="btn btn-success" value="Cancel"></a>

                 </div>    
                

            </div>

           
        </form>   
        
        
    </div>

@stop