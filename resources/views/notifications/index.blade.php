@extends('layouts.app')
@section('content')
    <section>
        <ul>
            @foreach ($notifications as $notification) )
                <li></li>
            @endforeach
        </ul>
    </section>
@endsection