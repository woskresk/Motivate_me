@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $choice_one ?? 'Lfi,jhl' }}</div>

                <div class="card-body">
                   

                    <form class="form-horizontal" method="post" action="{{ route('pastArticls') }}" enctype="multipart/form-data">
                    @csrf
                <fieldset id="account">
                    <legend>Введите данные по примеру</legend>
                    <div class="form-group required">
                        <label for="input-email" class="col-sm-3 control-label">Link</label>
                        <div class="col-sm-9">
                            <input  type="text" class="form-control @error('link') is-invalid @enderror"   placeholder="123" name="link">
                                @error('link')
                                    
                                        <strong>{{ $message }}</strong>
                                    
                                @enderror
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-firstname" class="col-sm-3 control-label">Title</label>
                        <div class="col-sm-9">
                            <input  type="text" class="form-control @error('name') is-invalid @enderror"   placeholder="Маникюр" value="" name="title">
                                @error('name')
                                    
                                        <strong>{{ $message }}</strong>
                                    
                                @enderror
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-email" class="col-sm-3 control-label">Фото (500х400)</label>
                        <div class="col-sm-9">
                            <input  type="file" class="form-control @error('foto') is-invalid @enderror"  name="foto">
                                @error('foto')
                                    
                                        <strong>{{ $message }}</strong>
                                    
                                @enderror
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-email" class="col-sm-3 control-label">Description</label>
                        <div class="col-sm-9">
                            <input  type="text" class="form-control @error('descrip') is-invalid @enderror"   placeholder="123" name="descrip">
                                @error('descrip')
                                    
                                        <strong>{{ $message }}</strong>
                                    
                                @enderror
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-email" class="col-sm-3 control-label">Key words</label>
                        <div class="col-sm-9">
                            <input  type="text" class="form-control @error('keyword') is-invalid @enderror"   placeholder="123" name="keyword">
                                @error('keyword')
                                    
                                        <strong>{{ $message }}</strong>
                                    
                                @enderror
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-email" class="col-sm-3 control-label">h1</label>
                        <div class="col-sm-9">
                            <input  type="text" class="form-control @error('h1') is-invalid @enderror"   placeholder="123" name="h1">
                                @error('h1')
                                    
                                        <strong>{{ $message }}</strong>
                                    
                                @enderror
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-email" class="col-sm-3 control-label">h2_link</label>
                        <div class="col-sm-9">
                            <input  type="text" class="form-control @error('h2_link') is-invalid @enderror"   placeholder="123" name="h2_link">
                                @error('h2_link')
                                    
                                        <strong>{{ $message }}</strong>
                                    
                                @enderror
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-email" class="col-sm-3 control-label">text</label>
                        <div class="col-sm-9">
                            <input  type="text" class="form-control @error('text') is-invalid @enderror" placeholder="Колпино..." name="text">
                                @error('text')
                                    
                                        <strong>{{ $message }}</strong>
                                    
                                @enderror
                        </div>
                    </div>
                <div class="buttons">
                    <div class="pull-right">Нажимая кнопку отправить, я соглашаюсь с <a class="agree" href="#"><b>политикой конфеденциальности </b></a>
                        <input type="submit" class="btn btn-primary" value="Отправить">
                    </div>
                </div>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
