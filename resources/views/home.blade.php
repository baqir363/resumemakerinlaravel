@extends('layouts.main')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-3">

                @if(Auth::user()->image==null)
                    <img class="w-100 rounded" src="{{ asset('images/img_avatar.png')}}" alt="Avatar">
                @else
                    <img class="w-100 rounded" src="{{ url('storage/'.Auth::user()->image) }}" alt="Profile">
                @endif
                  <form action="{{ route('avatar')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input class="form-control form-control-sm mt-2" type="file" name="image" accept="image/x-png,image/gif,image/jpeg">
                    @error('image')
                        <p class="text-danger">{{ $message}}</p>
                    @enderror
                    <input type="submit" name="submit" class="mt-2 btn btn-sm btn-primary" value="Upload">
                  </form>
            </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">

                    <a class="btn btn-sm btn-primary float-end ms-2" href="{{ route('profile.edit')}}">Edit Profile</a>
                    <a class="btn btn-sm btn-info float-end" href="{{ route('profile.print')}}">Print Resume</a>
                <table class="table table-striped">
                    <tr>
                        <th colspan="2">Personal Details</th>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td>{{Auth::user()->name }}</td>
                    </tr>
                    <tr>
                        <td>Date of Birth</td>
                        <td> {{ date("d-m-Y", strtotime(Auth::user()->dob))}}</td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>{{Auth::user()->gender }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{Auth::user()->email }}</td>
                    </tr>

                    <tr>
                        <td>Address</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>City</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Country</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>State</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Pin</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Languages Known</td>
                        <td>{{Auth::user()->language }}</td>
                    </tr>
                    <tr>
                        <th colspan="2">Educational Qualification</th>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Qualification</th>
                                    <th>Year</th>
                                    <th>Percent</th>
                                </tr>

                            <?php
                            $edArr = json_decode(Auth::user()->education);
                            if(isset($edArr->qualification)){
                                foreach($edArr->qualification as $key=>$val){
                                    ?>
                                    <tr>
                                        <td><?php echo $edArr->qualification[$key]; ?></td>
                                        <td><?php echo $edArr->year[$key]; ?></td>
                                        <td><?php echo $edArr->percent[$key]; ?></td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="2">Work Experience</th>
                    </tr><tr>
                        <td colspan="2">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Company</th>
                                    <th>Year From</th>
                                    <th>Year To</th>
                                    <th>Designation</th>
                                </tr>

                            <?php
                            $expArr = json_decode(Auth::user()->experience);
                            if(isset($expArr->company)){
                                foreach($expArr->company as $key=>$val){
                                    ?>
                                    <tr>
                                        <td><?php echo $expArr->company[$key]; ?></td>
                                        <td><?php echo $expArr->yearFrom[$key]; ?></td>
                                        <td><?php echo $expArr->yearTo[$key]; ?></td>
                                        <td><?php echo $expArr->designation[$key]; ?></td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="2">Other Details</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>

                </table>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
