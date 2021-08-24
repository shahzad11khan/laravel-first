@extends('layout')
<x-jompotrun componentname="My Second Gallery Page"/>
@section('content')
<div class="container">

    <h2 class="text-center">Gallery page</h2>
    <div class="row">
        <div class="col-sm-4">
            <div class="fakeing"><img src="{{asset('/images/aa.jpg')}}" alt="" height="200" width="380" style="" class="img-fluid "></div>
        </div>
        <div class="col-sm-4">
            <div class="fakeing"><img src="{{asset('/images/aa.jpg')}}" alt="" height="200" width="380" style="" class="img-fluid "></div>
        </div>
        <div class="col-sm-4">
            <div class="fakeing"><img src="{{asset('/images/aa.jpg')}}" alt="" height="200" width="380" style="" class="img-fluid "></div>
        </div>
    </div>
</div>
@stop