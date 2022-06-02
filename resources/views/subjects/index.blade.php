@extends('subjects.layout')

@section('content')
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Laravel 9 CRUD</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success" href="{{ route('subjects.create') }}"> Tambah Mata Pelajaran</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Guru</th>
            <th width="280px">Aksi</th>
        </tr>
        @foreach ($subjects as $subject)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $subject->name }}</td>
            <td>{{ $subject->teacher }}</td>
            <td>
                <form action="{{ route('subjects.destroy',$subject->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('subjects.show',$subject->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('subjects.edit',$subject->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="row text-center">
        {!! $subjects->links() !!}
    </div>

@endsection
