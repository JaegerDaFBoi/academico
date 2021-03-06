<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Ver Materia')}}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <div class="block">
          <x-jet-label for="name" value="{{ __('Nombre Materia') }}" />
          <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $materia->name)" required disabled />
        </div>
        <div class="block">
          <x-jet-label for="version" value="{{ __('Version Materia') }}"/>
          <x-jet-input id="version" class="block mt-1 w-full" type="text" name="version" :value="old('version', $materia->version)" required disabled/>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>