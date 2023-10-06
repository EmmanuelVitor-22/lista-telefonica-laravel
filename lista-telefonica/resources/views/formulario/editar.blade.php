@extends('layout')

@section('content')
    <form method="post" action="">
        {{csrf_field()}}
    </form>
@endsection
