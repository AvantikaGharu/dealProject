@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h2><u><strong>Make a Deal</strong></u></h2>
		</div>
		
		<div class="col-md-4 text-right">
			<a class="btn btn-primary" href="{{ route('deals.index')}}">Back</a>
			
		</div>
	</div>

	@if ($errors->any())

    <div class="alert alert-danger">

        <strong>There were some problems with your input.</strong> 

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif

<form action="{{ route('deals.store')}}" method="POST" enctype="multipart/form-data">

	@csrf

	<div class="container">
	  <div class="row">
		 <div class="col-md-12">

		<div class="form-group">

			<strong>Title:</strong>

			<input type="text" name="title" class="form-control" value="{{ old('title') }}">
			
		</div>
	</div>
</div>

		</div>

        <div class="col-md-12">

            <div class="form-group">

                <strong>Link:</strong>

                <input type="text" class="form-control" name="link" value="{{ old('link') }}">

            </div>

        </div>

        <div class="col-md-12">

            <div class="form-group">

                <strong>Image:</strong>

                <input type="file" class="form-control" name="image">

            </div>

        </div>

        <div class="col-md-12">

            <div class="form-group">

                <strong>Discount:</strong>

                <input type="number" class="form-control" name="discount" value="{{ old('discount') }}">

            </div>

        </div>

        <div class="col-md-12 text-right">

                <button type="submit" class="btn btn-primary">Done</button>

        </div>


    </div>

  </div>
		
</div>
	
</form>
	
</div>


@endsection