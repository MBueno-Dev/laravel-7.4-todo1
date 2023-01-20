@extends('layouts.app')

@section('title', '| Dashboard')

@section('content')
    <a href="{{ route('logout') }}" class="position-absolute top-0 end-0 link-secondary p-3">
        <i class="bi bi-box-arrow-right fs-3"></i>
    </a>
    <div class="min-vh-100 d-flex justify-content-center align-items-center">
        <div class="shadow-lg p-3 bg-dark text-white rounded p-5" style="width: 850px; min-height: 300px;">
            <a href="/todos/{{ $todo->id }}/complete" class="text-light ms-2">
                <i class="bi bi-check2-square fs-4"></i>
            </a>
            <h1>Editar Tarefa</h1>
            <form action="/todos" method="post" class="mt-3">
                @csrf
                <div class="input-group">
                    <div class="input-group-text bg-white p-0">
                         <!--<input type="color" class="form-control form-control-color border-0" name="color" title="Escolha uma cor"> -->
                         <input type="color" class="form-control form-control-color border-0" id="color" title="Escolha uma cor">
                    </div>
                    <input type="text" class="form-control" name="title" placeholder="{{ $todo->title }}" required>
                    <button type="submit" class="btn btn-secondary">
                        <i class="bi bi-plus fs-4"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
