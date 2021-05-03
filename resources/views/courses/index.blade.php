@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Cursos </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('courses.create') }}" title="Cursos"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>Curso</th>
            <th>Data de início</th>
            <th>Ações</th>
        </tr>
        @foreach ($courses as $course)
            <tr>
                <td>{{ $course->nome }}</td>
                <td>{{ $course->data_inicio }}</td>
                <td>
                    <form action="{{ route('courses.destroy', $course->id) }}" method="POST">

                        <a href="{{ route('courses.show', $course->id) }}" title="visualizar">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('courses.edit', $course->id) }}" title="editar">
                            <i class="fas fa-edit  fa-lg"></i>
                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="excluir" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection