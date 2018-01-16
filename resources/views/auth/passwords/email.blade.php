@extends('layouts.app')

@section('content')

    @if (session('status'))
        <div class="notification is-success">
        {{ session('status') }}
        </div>
    @endif
    <div class="columns">
        <div class="column is-one-third is-offset-one-third m-t-100">
            <div class="card">
                <div class="card-content">
                    <h1 class="title">Forgot password?</h1>

                    <form action="{{ route('password.email') }}" method="post" role="form">
                        {{csrf_field()}}
                        <div class="field">
                            <label for="email" class="label">Email Address</label>
                            <p class="control">
                                <input class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="text" name="email" id="email" placeholder="name@example.com" value="{{old('email')}}">
                            </p>
                            @if($errors->has('email'))
                                <p class="help is-danger">{{$errors->first('email')}}</p>
                            @endif
                        </div>

                        <button class="button is-primary is-outlined is-fullwidth m-t-30">Get password</button>
                    </form>
                </div><!-- ./Card-content -->
            </div>
            <h5 class="has-text-centered m-t-20"><a href="{{route('login')}}" class="is-muted"><i class="fa fa-caret-left m-r-10"></i>Back to log in</a></h5>
        </div>
    </div>
@endsection
