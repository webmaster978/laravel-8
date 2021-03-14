@extends('layouts.master',['title' => 'Home'])

@section('content')
<h1>Hello</h1>
@endsection
{{ $name }}

@if( $isWeekend )
{{ "va travailler"}}
@else
{{" Dorcas "}}
@endif



