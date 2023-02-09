@extends('books.layout')

@section('content')
    <div class="row">
        <h1 class="mx-auto text-primary mb-3">My library</h1>
    </div>
    <div class="row">
        <a class="btn btn-success ml-auto  mb-3 mr-5" href="{{ route('books.create') }}"> Create New book</a>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Price</th>
                        <th class="text-center">Action</th>
                    </tr>
                    @foreach ($books as $book)
                        <tr>
                            <td>{{ $book->id }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->price }}</td>
                            <td class="text-center">
                                <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('books.show', $book->id) }}">Show</a>
                                    <a class="btn btn-primary" href="{{ route('books.edit', $book->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <caption>
                        {!! $books->links('pagination::bootstrap-4') !!}
                    </caption>
                </table>

            </div>
        </div>
    </div>

@endsection
