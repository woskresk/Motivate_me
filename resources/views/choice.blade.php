@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Информация</div>

                <div class="card-body">

                        <div class="alert alert-success" role="alert">
                            {{ $item ?? 'НЕТ' }}
                        </div>
                    <a href="/user">Вернутся в личный кабинет</a>

                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
