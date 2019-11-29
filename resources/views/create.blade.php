@extends('layout.app')

@section('content')
    
    <div class="row justify-content-center">
        <div class="col-md-12">
            {!! Form::open(['role'=>'form', 'route' => 
            ['category.store'], 'metode'=>'post'])!!}

                    {!! Form::label('name', 'Nama')!!}

                    {!! Form::text('name', null, ['class' =>
                    'form-control'])!!}

                <button type="submit" class="btn btn-primary">Simpan</button>

            {!! Form::close()!!}
        </div>
    </div>