<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{ isset($service->id) ? 'Update Service' : 'Service Details' }}</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ isset($service->id) ? route('services.update', $service) : route('services.store') }}">
            @csrf
            {{-- Use PUT method for updates --}}
            @if (isset($service->id))
                @method('PUT')
            @endif

            {{-- Title --}}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $service->title ?? '') }}" required>
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Subtitle --}}
            <div class="form-group">
                <label for="subtitle">Subtitle</label>
                <input type="text" class="form-control @error('subtitle') is-invalid @enderror" id="subtitle" name="subtitle" value="{{ old('subtitle', $service->subtitle ?? '') }}" required>
                @error('subtitle')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Filter Class --}}
            <div class="form-group">
                <label for="filter_class">Filter Class (e.g., filter-egov, filter-banking)</label>
                <input type="text" class="form-control @error('filter_class') is-invalid @enderror" id="filter_class" name="filter_class" value="{{ old('filter_class', $service->filter_class ?? '') }}" required>
                @error('filter_class')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- URL --}}
            <div class="form-group">
                <label for="url">URL</label>
                <input type="url" class="form-control @error('url') is-invalid @enderror" id="url" name="url" value="{{ old('url', $service->url ?? '') }}" required>
                @error('url')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Image Path/URL --}}
            <div class="form-group">
                <label for="image">Image Path/URL</label>
                <input type="text" class="form-control @error('image') is-invalid @enderror" id="image" name="image" value="{{ old('image', $service->image ?? '') }}">
                <small class="form-text text-muted">Use relative path (e.g., images/pan-s.png) or a full URL.</small>
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Alt Text --}}
            <div class="form-group">
                <label for="alt">Alt Text</label>
                <input type="text" class="form-control @error('alt') is-invalid @enderror" id="alt" name="alt" value="{{ old('alt', $service->alt ?? '') }}">
                @error('alt')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Style (Optional) --}}
            <div class="form-group">
                <label for="style">Inline Style (Optional)</label>
                <input type="text" class="form-control @error('style') is-invalid @enderror" id="style" name="style" value="{{ old('style', $service->style ?? '') }}">
                <small class="form-text text-muted">e.g., width:55px</small>
                @error('style')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">
                {{ isset($service->id) ? 'Update Service' : 'Create Service' }}
            </button>
            <a href="{{ route('services.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
