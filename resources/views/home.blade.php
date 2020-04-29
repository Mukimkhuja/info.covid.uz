@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Маълумотларни киритиш</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                        @if($errors->any())
                            <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                    @endforeach
                            </ul>
                            </div>
                            @endif

                        <div class="form-group">
                            <form method="post" action="{{route('home-form')}}">
                                @csrf

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter your name">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="Enter your email">
                                </div>

                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <input type="text" name="message" class="form-control" placeholder="Enter your message">
                                </div>

                                <div class="form-group">
                                    <label for="date">Date</label>
                                    <input type="date" name="date" class="form-control" placeholder="Enter your birthday">
                                </div>


                                <div class="form-group">
                                    <input type="submit" name="submit" value="Submit" class="btn-success" placeholder="Enter your e-mail">
                                </div>

                            </form>
                        </div>
                        <?php
                        if (isset($_POST['submit'])) {
                            echo "natija = ",$name,"<p>",$email;
                        }
                        ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
