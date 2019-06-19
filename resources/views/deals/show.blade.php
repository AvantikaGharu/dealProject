

@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <h2><u><strong>Show User Deals</h2></u></strong>

            </div>

           <div class="col-xs-12 col-sm-12 col-md-12 text-right">

            <a class="btn btn-primary" href="{{ route('deals.index') }}"> Back</a>

        </div>

        </div>

    </div>
</div>
   
<div class= "container">

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Title:</strong>

                {{ $deal->title }}

            </div>

        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Dealer Name:</strong>

                {{ $deal->user->name }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Link:</strong>

                {{ $deal->link }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Image:</strong>

                {{ $deal->image }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Discount:</strong>

                {{ $deal->discount }}

            </div>

        </div>

    </div>
</div>
@endsection