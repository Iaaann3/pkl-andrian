@extends('layouts.admin')
@section('content')
<div class="container">
    <h1 class="mb-4">Edit Product</h1>
    <form action="{{ route('admin.product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Product Name</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama', $product->nama) }}" required>
            @error('nama')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi Product</label>
            <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" value="{{ old('deskripsi', $product->deskripsi) }}">
            @error('deskripsi')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga Product</label>
            <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ old('harga', $product->harga) }}">
            @error('harga')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="stok" class="form-label">Stock Product</label>
            <input type="number" class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok" value="{{ old('stok', $product->stok) }}">
            @error('stok')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Product Image</label>
            @if($product->gambar)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $product->gambar) }}" alt="" class="rounded-2" width="80" height="80">
                </div>
                <small>Kosongkan jika tidak ingin mengubah gambar</small>
            @endif
            <input type="file" accept="image/*" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar">
            @error('gambar')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id">
                <option value=""> Pilih Category </option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>{{ $category->nama }}</option>
                @endforeach
            </select>
            @error('category_id')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update Product</button>
        <a href="{{ route('admin.product.index') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection
