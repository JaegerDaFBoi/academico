<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Editar Materia')}}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <form action="{{ route ('materias.update', $materia) }}" method="post">
          <div class="block">
            <x-jet-label for="name" value="{{ __('Nombre Materia') }}" />
            <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $materia->name)" required autofocus />

            <x-jet-label for="version" value="{{ __('Version') }}" />
            <x-jet-input id="version" class="block mt-1 w-full" type="text" name="version" :value="old('version', $materia->version)" required autofocus />
            <div class="flex justify-center">
              <div class="p-2">
                <div class="flex justify-end">
                  <a href="{{ route('materias.update') }}">
                    <x-jet-button type="submit">
                      Guardar
                    </x-jet-button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</x-app-layout>