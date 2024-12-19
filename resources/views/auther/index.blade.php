@extends('layouts.app')
@section('content')
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">Penulis</h2>
                </div>
                <div class="offset-md-7 col-md-2">
                    <a class="add-new" href="{{ route('authors.create') }}">Add Author</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="message"></div>
                    <table class="content-table table-hover">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Author Name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($authors as $author)
                                <tr>
                                    <td>{{ $author->id }}</td>
                                    <td>{{ $author->name }}</td>
                                    <td class="edit">
                                        <a href="{{ route('authors.edit', $author) }}" class="btn btn-success">Edit</a>
                                    </td>
                                    <td class="delete">
                                        <form action="{{ route('authors.destroy', $author->id) }}" method="post"
                                            class="form-hidden">
                                            <button class="btn btn-danger delete-author">Delete</button>
                                            @csrf
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">No Authors Found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $authors->links('vendor/pagination/bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    .content-table {
        width: 100%;
        margin: 20px 0;
        border-collapse: collapse;
    }

    .content-table thead {
        background-color: #f8f9fa;
    }

    .content-table th,
    .content-table td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .content-table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .content-table tr:hover {
        background-color: #ddd;
    }

    .content-table th {
        font-size: 16px;
        font-weight: bold;
        color: #333;
    }

    .content-table td {
        font-size: 14px;
        color: #555;
    }

    .content-table .btn {
        font-size: 12px;
        padding: 5px 10px;
        border-radius: 5px;
    }

    .edit .btn-success {
        background-color: #28a745;
        border-color: #28a745;
    }

    .delete .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .add-new {
        background-color: #007bff;
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
    }

    .add-new:hover {
        background-color: #0056b3;
        text-decoration: none;
    }

    .message {
        margin-bottom: 15px;
    }
</style>
