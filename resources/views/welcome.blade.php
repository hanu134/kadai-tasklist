@extends("layouts.app")

@section("content")
    @if (Auth::check())
        {{ Auth::user()->name }}
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Your task is here</h1>
                {!! link_to_route("signup.get", "Sign uo now!", [] ["class" => "btn btn-lg btn-info"]) !!}
            </div>
        </div>
    @endif
@endsection