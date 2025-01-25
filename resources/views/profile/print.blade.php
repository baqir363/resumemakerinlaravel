<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
<style>
    body{font-family: 'Lato', sans-serif;}
    @page { size: auto; margin: 0mm;}
    @media print{
        .pagebreak {page-break-before: always;}
    }
</style>
</head>
<body onload="window.print()">

    <main>
        <div class="container-fluid p-5">

        <table class="table table-borderdless">
            <tr>
                <td>

                @if(Auth::user()->user_image==null)

                    <img style="width: 100px;" class="rounded-circle" src="{{ asset('images/img_avatar.png')}}" alt="Profile">
                @else
                    <img style="width: 100px;" class="rounded-circle" src="{{ url('storage/'.Auth::user()->image) }}" alt="Profile">
                @endif
                </td>
                <td>
                <h1 style="display: block; line-height:100px;" id="textTitle" class="text-center"><?php echo Auth::user()->name;  ?> </h1>

                </td>
            </tr>
        </table>


        <div class="border-top border-bottom my-3 py-3">
        <div class="row">
<div class="col">Email : <?php echo Auth::user()->email; ?>
    <br>Contact :<?php
    // echo Auth::user()->user_contact;
     ?></div>
<div class="col text-end">Address</div>
    </div>
    </div>
    <h5 class="mt-3">Objective</h5>
    <ul>
        <li>
            Objective line asdfasdfaasd adfasd asdaa
        </li>
    </ul>

    <h5 class="mt-3">Educational Qualification</h5>
<ul>

</ul>

<h5 class="mt-3">Work Experience</h5>
<ul>

</ul>

                <h5 class="mt-3">General Skills</h5>
                   <ul>
                        <li>Skill 1</li>
                        <li>Skill 2</li>
                    </ul>
                    </div>
                    <div class="pagebreak"></div>
                    <div class="container-fluid p-5">
                    <h5 class="mt-3">Technical Skills</h5>
                   <ul>
                        <li>Programming Languages : PHP, C, C++</li>
                        <li>Database</li>
                        <li>Framework</li>
                    </ul>
                    <h5 class="mt-3">Other Activities</h5>
                   <ul>
                        <li>activity 1</li>
                        <li>activity 2</li>
                    </ul>

                <h5 class="mt-3">Personal Details</h5>
            <table class="table table-borderless">

                <tr>
                    <td>Name</td>
                    <td><?php echo Auth::user()->name; ?></td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td><?php echo Auth::user()->dob; ?></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td><?php echo Auth::user()->gender; ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?php echo Auth::user()->email; ?></td>
                </tr>

            </table>
        </div>
</main>
</body>
</html>
