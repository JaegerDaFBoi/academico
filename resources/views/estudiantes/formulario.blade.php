@csrf

<div class="block">
    <x-jet-label for="doc" value="{{ __('Documento') }}" />
    <x-jet-input id="doc" class="block mt-1 w-full" type="text" name="doc" :value="old('doc', $estudiante->documento)" required autofocus />

    <x-jet-label for="name" value="{{ __('Nombre') }}" />
    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $estudiante->nombre)" required autofocus />

    <x-jet-label for="grade" value="{{ __('Grado') }}" />
    <x-jet-input id="grade" class="block mt-1 w-full" type="text" name="grade" :value="old('grade', $estudiante->grado)" required autofocus />
</div>
<div class="flex justify-center">
    <div class="p-2">
        <div class="flex justify-end">
            
                <x-jet-button type="submit">
                    Guardar
                </x-jet-button>
            
        </div>
    </div>
</div>

