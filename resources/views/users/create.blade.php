@extends('users.layout')

@section('content')



<section>
    <div class="left_panel--container">
        <div class="left_panel">
            <div class="left_panel--title">
                <h1>Hello Friend!</h1>
            </div>

            <div class="left_panel--content">
                <p>Enter your personal<br>details and start journey<br>with us!</p>
            </div>
        </div>
    </div>

    <div class="right_panel--container">
        <div class="right_panel">
            <div class="right_panel--title">
                <h1>Add a User</h1>
                <p>Type in your info</p>
            </div>

            @if($errors->any())
                {!! implode('', $errors->all('<div class="warning">:message</div>')) !!}
            @endif

            <form action="{{ route('users.store') }}" method="POST">
                @csrf

                <div class="name_container input">
                    <input type="text" name="name" placeholder="Name">
                </div>

                <div class="country_container input">
                    <select name="country_id" id="">
                        @foreach($countries as $country)
                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                        @endforeach
                    </select>
                </div>
                
               
                <div class="date_container input">
                    <input type="date" name="date_of_birth">
                </div>
                <div class="btn_container input">
                    <input type="submit" value="SAVE">
                </div>
            </form>
        </div>
    </div>
</section>

@endsection