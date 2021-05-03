@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>  </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('courses.index') }}" title="Retroceder"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Curso</strong>
                <input type="text" name="nome" class="form-control" value="{{ $course->nome }}" readonly>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Data de início</strong>
                <input type="text" name="data_inicio" class="form-control" value="{{ $course->data_inicio }}" readonly>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Data de criação</strong>
                <input type="text" name="created_at" class="form-control" value="{{ $course->created_at }}" readonly>

            </div>
        </div>
    </div>
@endsection