<div class="row">
    {{-- Title --}}
    <div class="mb-3 col-md-8">
        <label for="title" class="form-label fw-bold">Title</label>
        <input type="text" name="title" id="title" required
               value="{{ old('title', $post->title ?? '') }}"
               class="form-control @error('title') is-invalid @enderror" placeholder="Enter post title">
        @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>

    {{-- Author Name --}}
    <div class="mb-3 col-md-4">
        <label for="author_name" class="form-label fw-bold">Author</label>
        <input type="text" name="author_name" id="author_name"
               value="{{ old('author_name', $post->author_name ?? '') }}"
               class="form-control @error('author_name') is-invalid @enderror" placeholder="Default: Admin">
        @error('author_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
</div>

{{-- Content (Use a rich text editor if possible, for now, textarea) --}}
<div class="mb-3">
    <label for="content" class="form-label fw-bold">Content</label>
    <textarea name="content" id="content" rows="10" required
              class="form-control @error('content') is-invalid @enderror" placeholder="Write your blog post content here...">{{ old('content', $post->content ?? '') }}</textarea>
    @error('content')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>

{{-- Featured Image --}}
<div class="mb-3">
    <label for="image" class="form-label fw-bold">Featured Image</label>
    <input type="file" name="image" id="image"
           class="form-control @error('image') is-invalid @enderror">
    @error('image')<div class="invalid-feedback">{{ $message }}</div>@enderror

    @if(isset($post) && $post->image_path)
        <p class="mt-2 text-muted small">Current Image:</p>
        <img src="{{ asset('public/storage/blog_images/' . $post->image_path) }}" alt="{{ $post->title }}"
             class="img-fluid rounded border border-2 mt-1" style="max-width: 150px; height: auto;">
    @endif
</div>

{{-- Publish Status Checkbox --}}
<div class="mb-3 form-check form-switch">
    <input class="form-check-input" type="checkbox" role="switch" id="is_published" name="is_published" value="1"
           @if (old('is_published', $post->is_published ?? false)) checked @endif>
    <label class="form-check-label fw-bold" for="is_published">Publish Post Now</label>
    <small class="d-block text-muted">A published post is visible on the public blog page.</small>
</div>
