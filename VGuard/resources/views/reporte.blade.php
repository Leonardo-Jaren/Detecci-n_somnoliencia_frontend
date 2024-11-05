<div class="relative bg-gradient-to-b from-white to-blue-100 rounded-t-lg shadow-lg overflow-hidden">
    <h1 class="text-center text-xl font-bold py-4 relative z-10 mt-2">REPORTE</h1>
    <div class="absolute top-0 left-0 w-full h-8 bg-white custom-zigzag"></div>
</div>
    
<div class="p-4">
    <h2 class="font-bold mb-4">Panel de Estado</h2>
    
    <div class="flex items-center space-x-4 bg-gradient-to-b from-white to-blue-100 rounded-lg shadow-md p-4 relative overflow-hidden">
        <div class="bg-white p-1 rounded-lg shadow text-center border border-blue-100 w-1/5">
            <h3 class="font-semibold text-sm">Nivel de Somnolencia</h3>
            <p class="text-2xl mt-2">{{ $somnolencia }}</p>
        </div>

        <div class="bg-white p-1 rounded-lg shadow text-center border border-blue-100 w-1/5">
            <h3 class="font-semibold text-sm">Parpadeos</h3>
            <p class="text-2xl text-blue-500 mt-2">{{ $parpadeos }}</p>
        </div>

        <div class="bg-white p-1 rounded-lg shadow text-center border border-blue-100 w-1/5">
            <h3 class="font-semibold text-sm">Cabecear</h3>
            <p class="text-2xl text-blue-500 mt-2">{{ $cabecear }}</p>
        </div>

        <div class="bg-white p-1 rounded-lg shadow text-center border border-blue-100 w-1/5">
            <h3 class="font-semibold text-sm">Bostezo</h3>
            <p class="text-2xl text-blue-500 mt-2">{{ $bostezo }}</p>
        </div>
            
        <div class="w-1/6">
            <form action="{{ route('reporte.update') }}" method="POST">
                @csrf
                <label for="periodo" class="block font-medium text-sm mb-1">Periodo</label>
                <select name="selectedPeriod" id="periodo" class="w-full p-2 border border-blue-300 rounded-md bg-blue-50 text-sm" onchange="this.form.submit()">
                    <option value="diario" {{ $selectedPeriod == 'diario' ? 'selected' : '' }}>Diario</option>
                    <option value="semanal" {{ $selectedPeriod == 'semanal' ? 'selected' : '' }}>Semanal</option>
                    <option value="mensual" {{ $selectedPeriod == 'mensual' ? 'selected' : '' }}>Mensual</option>
                </select>
            </form>
        </div>
    </div>
</div>
