@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Category</h1>
    </div>    

    <div class="col-lg-8">
        <form action="/dashboard/categories" method="POST" enctype="multipart/form-data" class="mb-5">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name') }}">
              @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Slug</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
              @error('slug')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="image" class="form-label">Post Image</label>
              <img src="" class="img-preview img-fluid mb-3 col-sm-5" id="frame" style="max-height: 500px; overflow:hidden">
              <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="preview()">
              @error('image')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            
            <button type="submit" class="btn btn-primary">Create Category</button>
          </form>
    </div>

    <script>
      const name = document.querySelector('#name');
      const slug = document.querySelector('#slug');

      name.addEventListener('change', function() {
        fetch('/dashboard/categories/checkSlug?name=' + name.value)
          .then(response => response.json())
          .then(data => slug.value = data.slug)
      });

      function preview() {
        const frame = document.querySelector('#frame');
        frame.style.display = 'block';
        frame.src=URL.createObjectURL(event.target.files[0]);
      }
    </script>
@endsection