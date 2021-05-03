@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Matrícula</h2>
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

    <form action="{{ route('enrollments.update', $enrollment->id) }}" method="POST" >
        @csrf
        @method('PUT')

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
                    <select name="curso_id" class="form-control">
                        @foreach ($courses as $course)
                            <option value="{{ $course->id }}" @if ($course->id == $enrollment['course']->id) selected @endif >{{ $course->nome }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Aluno</strong>
                    <select name="aluno_id" class="form-control">
                        @foreach ($students as $student)
                            <option value="{{ $student->id }}" @if ($student->id == $enrollment['student']->id) selected @endif >{{ $student->nome }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Situação</strong><br>
                    <input type="radio" id="ativo" name="ativo" value="1" @if ($enrollment->ativo == 1) checked @endif >
                    <label for="ativo">Ativo</label><br>
                    <input type="radio" id="inativo" name="ativo" value="0" @if ($enrollment->ativo == 0) checked @endif >
                    <label for="ativo">Inativo</label><br>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Data de admissão</strong>
                    <input type="date" name="data_admissao" value="{{ substr($enrollment->data_admissao, 0, 10) }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Alterar</button>
            </div>
        </div>

    </form>
@endsection