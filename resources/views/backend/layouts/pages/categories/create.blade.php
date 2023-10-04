@extends('backend.pages.master')

@section('content')
<section class="category_create">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center mb-3"><strong>Category Create </strong></div>
                    <div class="card-body">
                    
                        <form action="" method="" enctype="">
                            @csrf
                            <div class="mb-3">
                                <label for="">Categroy Name</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="category name" value="{{old('name')}}">
                                   
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                            </div>
                           
                            <div class="mb-3">
                                <label for="">Status</label>
                                    <select name="status" class="form-control @error('status') is-invalid @enderror" value="{{old('status')}}">
                                         <option value="1">Active</option>
                                         <option value="0">Deactive</option>
                                     </select>

                                     @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Image </label>
                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">

                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Descriptions</label>
                                   <textarea name="description" class="form-control @error('description') is-invalid @enderror" placeholder="category description ">
                                    {{old('description')}}
                                   </textarea>
                                   @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                            </div>
                            <button type="submit" class="btn btn-md btn-success">Submit Form</button>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</section>
@endsection