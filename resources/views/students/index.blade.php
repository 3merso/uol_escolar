@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Alunos </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('students.create') }}" title="Alunos"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Senha</th>
            <th>Ações</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->nome }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->senha }}</td>
                <td>
                    <form action="{{ route('students.destroy', $student->id) }}" method="POST">

                        <a href="{{ route('students.show', $student->id) }}" title="visualizar">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('students.edit', $student->id) }}" title="editar">
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