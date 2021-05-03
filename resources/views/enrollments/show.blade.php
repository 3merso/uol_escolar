@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Matrícula </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('enrollments.index') }}" title="Retroceder"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Código</strong>
                <input type="text" name="id" value="{{ $enrollment->id }}" class="form-control" readonly>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Curso</strong>
                <input type="text" value="{{ $enrollment['course']->nome }}" class="form-control" readonly>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Aluno</strong>
                <input type="text" value="{{ $enrollment['student']->nome }}" class="form-control" readonly>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Situação</strong><br>
                <input type="radio" id="ativo" name="ativo" disabled @if ($enrollment->ativo == 1) checked @endif >
                <label for="ativo">Ativo</label><br>
                <input type="radio" id="inativo" name="ativo" disabled value="0" @if ($enrollment->ativo == 0) checked @endif >
                <label for="ativo">Inativo</label><br>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Data de admissão</strong>
                <input type="text" name="data_admissao" value="{{ $enrollment->data_admissao }}" class="form-control" readonly>
            </div>
        </div>
    </div>
@endsection