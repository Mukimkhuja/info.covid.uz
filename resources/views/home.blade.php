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
                        <?php
                        // define variables and set to empty values
                        $nameErr = $emailErr = $genderErr = $websiteErr = "";
                        $name = $email = $gender = $comment = $website = "";

                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            if (empty($_POST["name"])) {
                                $nameErr = "Name is required";
                            } else {
                                $name = test_input($_POST["name"]);
                            }

                            if (empty($_POST["email"])) {
                                $emailErr = "Email is required";
                            } else {
                                $email = test_input($_POST["email"]);
                            }

                            if (empty($_POST["website"])) {
                                $website = "";
                            } else {
                                $website = test_input($_POST["website"]);
                            }

                            if (empty($_POST["comment"])) {
                                $comment = "";
                            } else {
                                $comment = test_input($_POST["comment"]);
                            }

                            if (empty($_POST["gender"])) {
                                $genderErr = "Gender is required";
                            } else {
                                $gender = test_input($_POST["gender"]);
                            }
                        }
                        ?>
                        <div class="alert-dark">
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                @csrf
                                Name: <input type="text" name="name">
                                <span class="error">* <?php echo $nameErr;?></span>
                                <br><br>
                                E-mail:
                                <input type="text" name="email">
                                <span class="error">* <?php echo $emailErr;?></span>
                                <br><br>
                                Website:
                                <input type="text" name="website">
                                <span class="error"><?php echo $websiteErr;?></span>
                                <br><br>
                                <label>Comment: <textarea name="comment" rows="5" cols="40"></textarea>
                                    <br><br>
                                    Gender:
                                    <input type="radio" name="gender" value="female">Female
                                    <input type="radio" name="gender" value="male">Male
                                    <span class="error">* <?php echo $genderErr;?></span>
                                    <br><br>
                                    <input type="submit" name="submit" value="Submit">
                                </label>
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
