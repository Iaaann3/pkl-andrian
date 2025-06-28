@extends('layouts.admin')
@section('content')
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="table-responsive">
        <a href="{{ route('admin.product.create') }}" class="btn btn-primary">Tambah Product</a><br><br>
        <table class="table">
            <thead class="bg-inverse table-primary">
                <tr>
                    <th>#</th>
                    <th>Photo</th>
                    <th>Product Name</th>
                    <th>Slug</th>
                    <th>Category Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($product as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            @if($data->gambar && file_exists(public_path('storage/' . $data->gambar)))
                                <img src="{{ asset('storage/' . $data->gambar) }}" alt="" class="rounded-2" width="80" height="80">
                            @elseif($data->gambar)
                                <span class="text-danger">File gambar tidak ditemukan</span>
                            @else
                                <span class="text-muted">No Image</span>
                            @endif
                        </td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->slug }}</td>
                        <td>{{ $data->category->nama ?? '-' }}</td>
                        <td>
                            <form action="{{ route('admin.product.destroy', $data->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('admin.product.edit', $data->id) }}" class="btn btn-warning">Edit</a>
                                <button type="submit" class="btn btn-danger">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
