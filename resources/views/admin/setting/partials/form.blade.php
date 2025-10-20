<div class ="row gy-15 mb-4">
    <div class="col-md-3">
        <input class="form-control" name="email" id="email" type="email" placeholder="Email" value="{{ $setting->email }}">
    </div>
    <div class="col-md-3">
        <input class="form-control" name="celular" id="celular" type="text" placeholder="Celular" value="{{ $setting->celular }}">
    </div>
    <div class="col-md-3">
        <input class="form-control" name="whatsapp" id="whatsapp" type="text" placeholder="whatsapp" value="{{ $setting->whatsapp }}">
    </div>
    <div class="col-md-3">
        <input class="form-control" name="messenger" id="messenger" type="text" placeholder="messenger" value="{{ $setting->messenger }}">
    </div>
</div>
<div class ="row gy-15 mb-4">
    <div class="col-md-3">
        <input class="form-control" name="facebook" id="facebook" type="text" placeholder="facebook" value="{{ $setting->facebook }}">
    </div>
    <div class="col-md-3">
        <input class="form-control" name="twitter" id="twitter" type="text" placeholder="twitter" value="{{ $setting->twitter }}">
    </div>
    <div class="col-md-3">
        <input class="form-control" name="instagram" id="instagram" type="text" placeholder="instagram" value="{{ $setting->instagram }}">
    </div>
    <div class="col-md-3">
        <input class="form-control" name="pinterest" id="pinterest" type="text" placeholder="pinterest" value="{{ $setting->pinterest }}">
    </div>
</div>
<div class ="row gy-15 mb-4">
    <div class="col-md-3">
        <input class="form-control" name="youtube" id="youtube" type="text" placeholder="youtube" value="{{ $setting->youtube }}">
    </div>
    <div class="col-md-3">
        <input class="form-control" name="vimeo" id="vimeo" type="text" placeholder="vimeo" value="{{ $setting->vimeo }}">
    </div>
    <div class="col-md-1">
        <img src="{{ asset($setting->url) }}" height="50" alt="image">
    </div>
    <div class="col-md-5">
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