@extends('layouts')

@yield('content')
    <form method="post" action="">
        {{csrf_field()}}
    </form>

