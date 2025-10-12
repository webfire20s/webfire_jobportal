<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $feedback->name ?? '') }}"
        required>
    @error('name')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="office_address">Office Address</label>
    <input type="text" name="office_address" id="office_address" class="form-control"
        value="{{ old('office_address', $feedback->office_address ?? '') }}" required>
    @error('office_address')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="feedback">Feedback</label>
    <textarea name="feedback" id="feedback" class="form-control" rows="4" required>{{ old('feedback', $feedback->feedback ?? '') }}</textarea>
    @error('feedback')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="photo">Photo (Max 2MB)</label>
    <input type="file" name="photo" id="photo" class="form-control-file">
    @error('photo')
        <div class="text-danger">{{ $message }}</div>
    @enderror

    @if (isset($feedback) && $feedback->photo)
        <p>Current Photo:</p>
        <img src="{{ url('public/').$feedback->photo }}" alt="Current Photo"
            style="width: 100px; height: 100px; object-fit: cover; margin-bottom: 10px;">
    @endif
</div>

<div class="form-check">
    <input type="checkbox" name="is_published" id="is_published" class="form-check-input" value="1"
        {{ old('is_published', $feedback->is_published ?? false) ? 'checked' : '' }}>
    <label class="form-check-label" for="is_published">Publish on Website?</label>
</div>

<button type="submit" class="btn btn-success mt-3">Save Feedback</button>
