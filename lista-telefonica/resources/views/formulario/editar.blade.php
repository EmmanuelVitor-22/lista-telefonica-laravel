@extends('layouts')

@section('content')
    <form method="post" action="">
        {{csrf_field()}}
    </form>
@endsection
