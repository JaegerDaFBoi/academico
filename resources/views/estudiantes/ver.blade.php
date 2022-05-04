<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Ver Estudiante')}}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <div class="block">
          <x-jet-label for="doc" value="{{ __('Documento Estudiante') }}" />
          <x-jet-input id="doc" class="block mt-1 w-full" type="text" name="doc" :value="old('doc', $estudiante->documento)" required disabled />
        </div>
        <div class="block">
          <x-jet-label for="name" value="{{ __('Nombre Estudiante') }}"/>
          <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $estudiante->nombre)" required disabled/>
        </div>
        <div class="block">
          <x-jet-label for="grade" value="{{ __('Grado Estudiante') }}"/>
          <x-jet-input id="grade" class="block mt-1 w-full" type="text" name="grade" :value="old('grade', $estudiante->grado)" required disabled/>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>