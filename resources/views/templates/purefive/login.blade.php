@extends('templates.purefive.main')

@section('content')
<section id="login" class="bg-grey-1"> 
    <div class="login-container"> 
        
        <div class="container text-center">
            
            <div class="col-md-12">
                <h3 class="mb5">Login to your account</h3> 
                <p class="subheading">Welcome to Purefive</p>
                <div class="login-form pt30 pb30">
                    <form>
                        <input class="form-email bg-white" type="text" placeholder="Email Address">
                        <input class="form-password bg-white" type="password" placeholder="Password">
                        
                        <div class="actions">
                            <a href="#" class="pull-left dark-grey">Forgot Password?</a>
                            <a href="#" class="pull-right dark-grey">Login with <i class="fa fa-facebook-official"></i></a>
                        </div>
                         
                        <input class="btn btn-sm btn-login" type="submit" value="Login">
                    </form>  
                </div> 
                <p>Don't have an account? <a href="#">Sign up</a></p>
                <p class="terms">By logging in, you agree to our <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>.</p>
            </div>   
            
        </div>
        
    </div> 
</section>
@endsection