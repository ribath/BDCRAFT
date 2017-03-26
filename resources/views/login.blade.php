@extends('layouts.layout')
@section('content')




<section >

    {{--Sign In--}}

<div  class="container">
    <div  class="row">
        <div style="background:white" class="col-xs-6  col-md-5 ">
            <h2>Sign in</h2>
            <form role="form" action="login" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="rememberme"> Remember me</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a  href="">Forget password?</a>
                </div>

                <button type="submit" class="btn btn-info">Login</button>
            </form>
        </div>


        {{--Sign Up--}}

        <div class="col-xs-12  col-md-2 "> </div>

        <div style="background:white" class="col-xs-12  col-md-5 ">
            <h2>Sign up</h2>
            <form role="form" action="registered" method="post">

                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                </div>

                {{--<form action="registered">--}}

                    <button type="submit" onclick="alert_reg()" class="btn btn-info">Register</button>

                {{--</form>--}}
            </form>

        </div>



    </div>
</div>

    <script>
        function alert_reg(){
            alert("Registered Successfully");
        }
    </script>

</section>

@endsection
