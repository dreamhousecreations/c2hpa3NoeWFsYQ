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
                        <b>Grade: </b><br>
                        <b>Date of Birth: </b><br>
                        <b>Gender: </b><br>
                        <b>Avatar: </b><br>
                        <b>Address: </b><br>
                        <table class="table table-bordered">
                            <tr>
                                <td>Country</td>
                                <td>State</td>
                                <td>City</td>
                                <td>municipality </td>
                                <td>locality</td>
                                <td>current</td>
                            </tr>
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
