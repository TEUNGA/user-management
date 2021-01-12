@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                @php

                
                @endphp

               
                <div class="card-body">
                @if(auth()->user()->role == 'student')
                    <div class="card-header">You are a {{ auth()->user()->role}}</div>
                    @else
                    <div class="card-header">ok</div>

                @endif
                
                  
                    
                </div>
                
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
