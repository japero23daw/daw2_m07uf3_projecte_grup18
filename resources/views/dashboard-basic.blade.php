<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard dels usuaris tipus treballador') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ url('trebs') }}">Treballadors: Visualitza, actualitza i esborra registres</a>
                </div>
                <div class="p-6 text-gray-900">
                    <a href="{{ url('trebs/create') }}">Treballadors: Crea un nou treballador</a>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ url('auto') }}">Cotxes: Visualitza, actualitza i esborra registres</a>
                </div>
                <div class="p-6 text-gray-900">
                    <a href="{{ url('auto/create') }}">Cotxe: Crea un nou cotxe</a>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ url('client') }}">clients: Visualitza, actualitza i esborra registres</a>
                </div>
                <div class="p-6 text-gray-900">
                    <a href="{{ url('client/create') }}">Clients: Crea un nou client</a>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ url('llog') }}">Lloguer: Visualitza, actualitza i esborra registres</a>
                </div>
                <div class="p-6 text-gray-900">
                    <a href="{{ url('llog/create') }}">Lloguer: Crea un nou lloguer</a>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('error'))
                <div class="alert alert-success">
                    {{ session('error') }}
                </div>
            @endif
        </div> <!-- Cierre de la etiqueta div añadido aquí -->
    </div>
</x-app-layout>
