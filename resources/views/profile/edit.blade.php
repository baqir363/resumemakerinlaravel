@extends('layouts.main')

@section('content')

    <div class="container">
    <h1>Edit Profile</h1>
    <form action="{{ route('profile.update')}}" method="POST">
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-7">
        <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" name="name" id="name" required class="form-control @error('name') is-invalid @enderror" value="{{ Auth::user()->name}}">
            @error('name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="mb-3">
            <label class="form-label" for="email">Email</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ Auth::user()->email}}" maxlength="40">
            @error('email')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" name="dob" id="dob" required class="form-control @error('dob') is-invalid @enderror" value="{{ date('Y-m-d', strtotime(Auth::user()->dob)) }}">
            @error('dob')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Gender</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="male" value="Male" required
                <?php
                if(Auth::user()->gender=='Male'){ echo "checked";}
                ?>>
                <label class="form-check-label" for="male">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="female" value="Female" required
                <?php
                  if(Auth::user()->gender == 'Female'){
                    echo "checked";
                  }
                ?>>
                <label class="form-check-label" for="female" required>
                    Female
                </label>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label" for="mobile">Mobile</label>
            <input type="number" name="mobile" class="form-control @error('mobile') is-invalid @enderror" value="{{ Auth::user()->mobile}}">
            @error('mobile')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" name="address" id="address" required class="form-control @error('address') is-invalid @enderror" value="{{ Auth::user()->address }}">
            @error('address')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        @livewire('form.city')


        <input type="submit" class="btn btn-primary" value="Submit" name="submit">
    </div>
        </div>
    </form>
    <div class="row justify-content-center">
        <div class="col-md-7">
    <h5>Educational Details</h5>

    @livewire('form.education')
        </div>
    </div>




@endsection
