<div class="row">
    <div class="mb-3 col-10">
        <label for="input-name" class="form-label">Name</label>
        <input type="text" name="name" value="{{ old('name', $tag->name) }}" class="form-control" id="input-name" required>
    </div>
</div>
<div class="mb-3 text-center">
    <button type="submit" class="btn btn-md btn-primary">
        Save & Publish
    </button>
</div>