@extends('main')

@section('title', '| Edit Blog Post')

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
        <div class="col-md-8">
            {!! html()->modelForm($post, 'PUT', route('posts.update', $post->id))->attribute('enctype', 'multipart/form-data')->open() !!}
            
            {{ html()->label('Title:', 'title') }}
            {{ html()->text('title')->attribute('class', 'form-control') }}

            {{ html()->label('Slug:', 'slug')->attribute('class', 'form-spacing-top') }}
            {{ html()->text('slug')->attribute('class', 'form-control') }}
            
            {{ html()->label('Category:', 'category_id') }}
            <select class="form-control select2" name="category_id">
                @foreach($categories as $category)
                <option value='{{ $category->id }}' {{ $post->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>

            {{ html()->label('Tags:', 'tags') }}
            <select class="form-control select2" name="tags[]" multiple="multiple">
                @foreach($tags as $tag)
                    <option value="{{ $tag->id }}" {{ in_array($tag->id, $post->tags->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $tag->name }}</option>
                @endforeach
            </select>

            {{ html()->label('Featured Image:', 'featured_image') }}
            {{ html()->file('featured_image')->attribute('class', 'form-control') }}
            
            {{ html()->label('Content:', 'body')->attribute('class', 'form-spacing-top') }}
            {{ html()->textarea('body')->attribute('class', 'form-control')->attribute('rows', '5') }}
        </div>
        <div class="col-md-4">
            <div class="card bg-light">
                <div class="card-body">
                    <dl>
                        <div class="row">
                            <div class="col-md-6">
                                <dt>Created at:</dt>
                            </div>
                            <div class="col-md-6">
                                <dd>{{ date('M j, Y H:i', strtotime($post->created_at)) }}</dd>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <dt>Last updated:</dt>
                            </div>
                            <div class="col-md-6">
                                <dd>{{ date('M j, Y H:i', strtotime($post->updated_at)) }}</dd>
                            </div>
                        </div>
                    </dl>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            {!! Html()->a(route('posts.show', $post->id), 'Cancel')->attribute('class', 'btn btn-danger btn-block') !!}
                        </div>
                        <div class="col-md-6">
                        {{ html()->submit('Save Changes')->attribute('class', 'btn btn-success btn-block')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {!! html()->closeModelForm() !!}
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
@endsection