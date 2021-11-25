@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Você ainda está logado!') }}</div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Utilize o menu na parte superior para se deslogar.') }}
                </div>
            </div>
        </div>
    </div>
    <hr>
    <br>
    
</div>
@endsection