@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h2><u><strong>MAKE A DEAL..</h2></strong></u>
		</div>
		<div class="col-md-4 text-right">
			<a class="btn btn-success" href="{{ route('deals.create') }}"> Make New Deal</a>
		</div>
	</div>
	

 @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif


    <table class="table table-bordered">

        <tr>

            <th>No.</th> 

            <th>Dealer Name</th> 
            
            <th>Title</th>

            <th>Link</th>

            <th>Image</th>

            <th>Discount</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($deals as $deal)

        <tr>

             <td>{{ ++$i }}</td> 

             <td>{{ $deal->user->name }}</td>

            <td>{{ $deal->title }}</td>

            <td>{{ $deal->link }}</td>

            <td><img src="{{ asset($deal->image) }}" height="100" width="100"></td>

            <td>{{ $deal->discount }}</td>
             



            <td>

                <form action="{{ route('deals.destroy', $deal->id) }}" method="POST">

   

                    <a class="btn btn-info" href="{{ route('deals.show',$deal->id) }}">Show</a>

   

   

                    @csrf

                    @method('DELETE')

      

                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

</div>  

    {!! $deals->links() !!}

      

@endsection


 