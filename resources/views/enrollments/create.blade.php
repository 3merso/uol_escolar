@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Adicionar Matrícula</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('enrollments.index') }}" title="Retroceder"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Erro!</strong> 
            <ul>
                @foreach ($errors->all() as $error)
                    <li></li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('enrollments.store') }}" method="POST" >
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Curso</strong>
                    <select name="curso_id" class="form-control">
                        @foreach ($courses as $course)
                            <option value="{{ $course->id }}"> {{ $course->nome }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Aluno</strong>
                    <select name="aluno_id" class="form-control">
                        @foreach ($students as $student)
                            <option value="{{ $student->id }}"> {{ $student->nome }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Situação</strong><br>
                    <input type="radio" id="ativo" name="ativo" value="1">
                    <label for="ativo">Ativo</label><br>
                    <input type="radio" id="inativo" name="ativo" value="0">
                    <label for="ativo">Inativo</label><br>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Data de admissão</strong>
                    <input type="date" name="data_admissao" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </div>

    </form>
@endsection