@extends('includes.layout')


@section('content')

<div class="container-fluid">
  <section class="content">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card card-outline-secondary">
          <div class="card-header">
            <h3 class="mb-0">Add New Book</h3>
          </div>
          <div class="card-body">
            <form method="POST" action="">
              <div class="form-group">
                <label for="inputISBN">ISBN #</label>
                <input type="text" class="form-control @error('isbn') is-invalid @enderror" value="{{ old('isbn') }}" id="isbn" name="isbn" aria-describedby="isbn">
                @error('isbn')
                    <p class="text-danger">{{ $errors->first('isbn') }}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="inputTitle">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" id="title" name="title">
                @error('title')
                    <p class="text-danger">{{ $errors->first('title') }}</p>
                @enderror
              </div>
              <div class="form-group">
                <label>Author</label>
                <select class="form-control" id="author_id" name="author_id">
                    <option disabled>Select Author</option>
                    @foreach($author as $authors)
                    <option value="{{ $authors->id }}"> {{ $authors->initials }}  {{ $authors->lastname }}</option> 
                    @endforeach
                </select>
                @error('author_id')
                    <p class="text-danger">{{ $errors->first('author_id') }}</p>
                @enderror  
              </div>
              <div class="form-group">
                <label for="inputPages">Number of Pages</label>
                <input type="text" class="form-control  @error('pages') is-invalid @enderror" value="{{ old('pages') }}" id="pages" name="pages">
                @error('pages')
                    <p class="text-danger">{{ $errors->first('pages') }}</p>
                @enderror 
              </div>

              @csrf

              <div class="modal-footer">
                <a class="btn btn-default btn-light btn-flat pull-left" href="/books">Cancel</a>
                <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-save"></i> Save</button>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
  </section>   
</div>

@endsection