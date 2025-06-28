@extends('layouts.admin')
@section('content')
<div>
    <h1>Latihan javascript</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, ad adipisci molestiae doloremque ea nobis obcaecati provident labore delectus ducimus laudantium facilis sint! Id, in? Natus molestias quidem nulla soluta.</p>
<button id="alertButton" class="btn btn-primary">Click Me!</button>
</div>
@endsection

@push('script')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        document.getElementById('alertButton')
        .addEventListener('click', () => alert('Button was clicked!'));
    })
</script>
@endpush