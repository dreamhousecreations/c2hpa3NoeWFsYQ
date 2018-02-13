@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>
                        <b>Username:</b> {{Auth::user()->username}}<br>
                        <b>Name: </b>{{Auth::user()->name}}<br>
                        <b>Email: </b>{{Auth::user()->email}}<br>
                        <b>Role: </b> {{Auth::user()->role()}}<br>
                        @if(Auth::user()->hasRole('student')) <b>Grade: </b>{{ ucfirst(Auth::user()->grade())}}<br> @endif
                        <b>Date of Birth:  </b> {{ Auth::user()->detail->birthday }} <br>
                        <b>Gender: </b> @if(Auth::user()->detail->gender == "M") Male @elseif(Auth::user()->detail->gender == "F") Female @else Other @endif  <br>
                        <b>Avatar: </b>{{ Auth::user()->avatar }}<br>
                        <b>Address: </b><br>
                        <table class="table table-bordered">
                            @foreach(Auth::user()->address as $a)
                            <tr>
                                <td>{{ \App\Helpers\Country\Country::countryName($a->country) }}</td>
                                <td>{{ $a->state}}</td>
                                <td>{{ $a->city }} </td>
                                <td>{{ $a->address1 }}</td>
                                <td>{{ $a->address2 }}</td>
                                <td>@if($a->current === 1)True @else False @endif</td>
                            </tr>
                            @endforeach
                        </table>
                        <br>
                        <b>Phone: </b><br>
                        <table class="table table-bordered">
                            <tr>
                                <td>Country Code</td>
                                <td>Number</td>
                                <td>Current</td>
                            </tr>
                        </table>
                        <br>
                        <b>Landline: </b><br>
                        <table class="table table-bordered">
                            <tr>
                                <td>Country Code</td>
                                <td>Area Code</td>
                                <td>Number</td>
                                <td>Current</td>
                            </tr>
                        </table>
                        <br>
                        <b>Parents: </b><br>
                        <table class="table table-bordered">
                            <tr>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Relation</td>
                                <td>Avatar</td>
                            </tr>
                        </table>
                        <br>
                        <b>Parents Phone: </b><br>
                        <table class="table table-hovered">
                            <tr>
                                <td>Country Code</td>
                                <td>Number</td>
                                <td>Current</td>
                            </tr>
                        </table>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
