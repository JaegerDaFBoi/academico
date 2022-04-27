@csrf

<div class="block">
    <x-jet-label for="name" value="{{ __('Nombre Materia') }}" />
    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $materia->name)" required autofocus />

    <x-jet-label for="version" value="{{ __('Version') }}" />
    <x-jet-input id="version" class="block mt-1 w-full" type="text" name="version" :value="old('version', $materia->version)" required autofocus />
</div>
<div class="flex justify-center">
    <div class="p-2">
        <div class="flex justify-end">
            <a href="{{ route('materias.create') }}">
                <x-jet-button type="submit">
                    Guardar
                </x-jet-button>
            </a>
        </div>
    </div>
</div>
