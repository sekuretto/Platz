@extends('app')

@section('content')

@if (count($people))
<h3>best dudes:</h3>
<ul>
	@foreach ($people as $person)
		<li>{{ $person }}</li>
	@endforeach
</ul>
@endif

<p>{{-- $first --}} - {{-- $last --}}</p>
<p>PagesController/about2-method</p>
@stop

@section('footer')
<em>&copy; late late late 2k18</em>
@stop
