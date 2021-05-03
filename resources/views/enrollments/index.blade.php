@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Matrículas </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('enrollments.create') }}" title="Matrículas"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>Matrícula</th>
            <th>Curso</th>
            <th>Aluno</th>
            <th>Data de admissão</th>
            <th>Ações</th>
        </tr>
        @foreach ($enrollments as $enrollment)
            <tr>
                <td>{{ $enrollment->id }}</td>
                {{-- <td></td>
                <td></td> --}}
                <td>{{ $enrollment->student->nome }}</td>
                <td>{{ $enrollment->course->nome }}</td>
                <td>{{ $enrollment->data_admissao }}</td>
                <td>
                    <form action="{{ route('enrollments.destroy', $enrollment->id) }}" method="POST">

                        <a href="{{ route('enrollments.show', $enrollment->id) }}" title="visualizar">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('enrollments.edit', $enrollment->id) }}" title="editar">
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