@extends('main')

@section('title', '| Create New Post')

@section('stylesheets')
    <script src="https://cdn.tiny.cloud/1/{{ config('services.tinymce.api_key') }}/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak code',
            toolbar_mode: 'floating',
        });
    </script>
@endsection

@section('content')
        <div class="row">
            <div class="col-md-12">
                <h1>Create New Post</h1>
                <hr>
                {{ html()->modelForm('POST')->route('posts.store')->attribute('enctype', 'multipart/form-data')->open() }}

                    {{ html()->label('Title:', 'title') }}
                    {{ html()->text('title')->attribute('class', 'form-control') }}

                    {{ html()->label('Slug:', 'slug') }}
                    {{ html()->text('slug')->attribute('class', 'form-control') }}

                    {{ html()->label('Category:', 'category_id') }}
                    <select class="form-control select2" name="category_id">
                        @foreach($categories as $category)
                        <option value='{{ $category->id }}'>{{ $category->name }}</option>
                        @endforeach
                    </select>

                    {{ html()->label('Tags:', 'tags') }}
                    <select class="form-control select2" name="tags[]" multiple="multiple">
                        @foreach($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach
                    </select>

                    {{ html()->label('Featured Image:', 'featured_image') }}
                    {{ html()->file('featured_image')->attribute('class', 'form-control') }}

                    {{ html()->label('Content:', 'body') }}
                    {{ html()->textarea('body')->attribute('class', 'form-control')->attribute('rows', '5') }}

                    {{ html()->submit('Create Post')->attribute('class', 'btn btn-success btn-lg btn-block mt-4')}}
                {{ html()->closeModelForm() }}
            </div>
        </div>

@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
@endsection
