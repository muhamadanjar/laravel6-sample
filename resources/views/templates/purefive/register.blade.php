@extends('templates.purefive.main')

@section('content')
<section id="sign-up" class="bg-img-10"> 
    <div class="sign-up-container"> 
        
        <div class="container text-center">
            
            <div class="col-md-12 dark"> 
                <h3 class="mb5 white">Create your account</h3> 
                <p class="subheading white">Welcome to Purefive</p>
                <div class="login-form pt30 pb30">
                    <form>
                        <input class="sign-up-first-name bg-transparent" type="text" placeholder="First Name">
                        <input class="sign-up-last-name bg-transparent" type="text" placeholder="Last Name">
                        <input class="sign-up-email bg-transparent" type="text" placeholder="Email Address">
                        <input class="sign-up-password bg-transparent" type="password" placeholder="Password">
                        
                        <div class="actions">
                            <p class="dark-grey">By creating an account, you agree to the <a href="#">Terms of Service</a>.</p> 
                        </div>
                         
                        <input class="btn btn-sm btn-primary btn-sign-up" type="submit" value="Sign Up">
                    </form>  
                </div> 
                <p>Or <a href="#">login</a> usign an existing account</p> 

            </div>   
            
        </div>
        
    </div> 
</section>
@endsection