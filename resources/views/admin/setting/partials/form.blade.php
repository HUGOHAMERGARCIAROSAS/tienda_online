<div class ="row gy-15 mb-4">
    <div class="col-md-6">
        <label class="form-label">Email</label>
        <input class="form-control" name="email" id="email" type="email" placeholder="Email" value="{{ $setting->email }}">
    </div>
    <div class="col-md-3">
        <label class="form-label">Celular</label>
        <input class="form-control" name="celular" id="celular" type="text" placeholder="Celular" value="{{ $setting->celular }}">
    </div>
    <div class="col-md-3">
        <label class="form-label">Whatsapp</label>
        <input class="form-control" name="whatsapp" id="whatsapp" type="text" placeholder="whatsapp" value="{{ $setting->whatsapp }}">
    </div>
</div>
<div class ="row gy-15 mb-4">
    <div class="col-md-6">
        <label class="form-label">Instagram</label>
        <input class="form-control" name="instagram" id="instagram" type="text" placeholder="instagram" value="{{ $setting->instagram }}">
    </div>
    <div class="col-md-6">
        <label class="form-label">Tiktok</label>
        <input class="form-control" name="vimeo" id="vimeo" type="text" placeholder="tiktok" value="{{ $setting->vimeo }}">
    </div>
</div>
<div class ="row gy-15 mb-4">
    <div class="col-md-1">
        <img src="{{ asset($setting->url) }}" height="50" alt="image">
    </div>
    <div class="col-md-11">
        <input class="form-control" name="url" id="url" type="file" placeholder="url" value="{{ $setting->url }}">
    </div>
</div>
<div class ="row gy-15 mb-4">
    <div class="col-md-12">
        <textarea class="form-control" name="descripcion" id="descripcion" rows="3" placeholder="Descripción">{{ $setting->descripcion }}</textarea>
    </div>
</div>
<div class ="row gy-15 mb-6">
    <div class="col-md-12  text-center">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
