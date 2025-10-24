<div class="row">
    {{-- Name --}}
    <div class="mb-3 col-md-6">
        <label for="name" class="form-label fw-bold">Name</label>
        <input type="text" name="name" id="name" required
               value="{{ old('name', $member->name ?? '') }}"
               class="form-control @error('name') is-invalid @enderror" placeholder="Enter name">
        @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>

    {{-- Designation --}}
    <div class="mb-3 col-md-6">
        <label for="designation" class="form-label fw-bold">Designation</label>
        <input type="text" name="designation" id="designation" required
               value="{{ old('designation', $member->designation ?? '') }}"
               class="form-control @error('designation') is-invalid @enderror" placeholder="Enter designation (e.g., CEO, Developer)">
        @error('designation')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
</div>

{{-- Description --}}
<div class="mb-3">
    <label for="description" class="form-label fw-bold">Description</label>
    <textarea name="description" id="description" rows="4"
              class="form-control @error('description') is-invalid @enderror" placeholder="A short bio or description">{{ old('description', $member->description ?? '') }}</textarea>
    @error('description')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>

{{-- Photo --}}
<div class="mb-3">
    <label for="photo" class="form-label fw-bold">Photo</label>
    {{-- Note: 'form-control' is also used for file inputs in BS5 --}}
    <input type="file" name="photo" id="photo"
           class="form-control @error('photo') is-invalid @enderror">
    @error('photo')<div class="invalid-feedback">{{ $message }}</div>@enderror

    @if(isset($member) && $member->photo_path)
        <p class="mt-2 text-muted small">Current Photo:</p>
        <img src="{{ Storage::url($member->photo_path) }}" alt="{{ $member->name }}"
             class="img-fluid rounded-circle border border-2 mt-1" style="width: 80px; height: 80px; object-fit: cover;">
    @endif
</div>
