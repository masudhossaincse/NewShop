@extends('admin.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h3 class="text-center text-success">{{ Session::get('message') }}</h3>
			<hr>
			<div class="well">
				
				<form method="POST" name="editCategoryForm" action="{{ url('/category/update') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="categoryName" class="col-md-4 col-form-label text-md-right">{{ __('Category Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" value="{{ $categoryById->categoryName }}" type="text" class="form-control"  name="categoryName">
                                <input type="hidden" name="id" value="{{ $categoryById->id }}" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="categoryDescription" class="col-md-4 col-form-label text-md-right">{{ __('Category Description') }}</label>

                            <div class="col-md-6">
                                <textarea name="categoryDescription" class="form-control" rows="5">{{ $categoryById->categoryName }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Publication Status') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="publicationStatus">
                                	<option>Publication Status</option>
                                	<option value="1">Published</option>
                                	<option value="0">Unpublished</option>
                                </select>
                            </div>
                        </div>

                        
                       

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update Category Info') }}
                                </button>
                            </div>
                        </div>
                    </form>

			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	document.forms['editCategoryForm'].elements['publicationStatus'].value={{ $categoryById->publicationStatus }}
</script>

@endsection