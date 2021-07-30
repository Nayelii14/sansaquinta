@extends("layouts.master")

@section("contenido")
<div class="row mt-5">
    <div class="col-12 col-md-6 col-lg-5 mx-auto">
        <div class="card">
            <div class="card-header bg-danger text-white">
                <span>Registrar Lectura</span>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="fecha-txt" class="form-label">Fecha</label>
                    <input type="date" id="fecha-txt" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="hora-txt" class="form-label">Hora</label>
                    <input type="time" id="hora-txt" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="medidor-select" class="form-label">Medidor</label>
                    <select class="form-select" id="medidor-select">
                    </select>
                </div>
                <div class="mb-3">
                    <label for="direccion-txt" class="form-label">Dirección</label>
                    <input type="text" id="direccion-txt" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="valor-txt" class="form-label">Valor</label>
                    <input type="number" class="form-control" id="valor-txt">
                </div>
                <div class="mb-3">
                    <label for="medidas-select" class="form-label">Medidas</label>
                    <select class="form-select" id="medidas-select">
                    </select>
                </div>
            </div>
            <div class="card-footer d-grid gap-1">
                <button id="registrar-btn" class="btn btn-warning">Registrar</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section("javascript")
    <script src="{{asset('js/servicios/medicionesService.js')}}"></script>
    <script src="{{asset('js/servicios/medidoresService.js')}}"></script>
    <script src="{{asset('js/servicios/medidasService.js')}}"></script>
    <script src="{{asset('js/home.js')}}"></script>
@endsection