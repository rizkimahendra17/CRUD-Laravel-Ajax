<div class="p2">
    <div class="form-group">
        <label for="name">Produk</label>
        <input type="text" name="name" id="name" value="{{ $data->name }}" class="form-control" placeholder="name produk">
    </div>

    <div class="form-group mt-2">
        <button class="btn btn-warning" onclick="update({{ $data->id }})">Update</button>    
    </div>
</div>