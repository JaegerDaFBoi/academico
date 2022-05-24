@csrf

<div class="block">
    <x-jet-label for="doc" value="{{ __('Documento') }}" />
    <x-jet-input id="doc" class="block mt-1 w-full" type="text" name="doc" :value="old('doc', $estudiante->documento)" required autofocus />
    <x-jet-input-error for="doc" />

    <x-jet-label for="name" value="{{ __('Nombre') }}" />
    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $estudiante->nombre)" required autofocus />
    <x-jet-input-error for="name" />

    <x-jet-label for="grade" value="{{ __('Grado') }}" />
    <x-jet-input id="grade" class="block mt-1 w-full" type="text" name="grade" :value="old('grade', $estudiante->grado)" required autofocus />
    <x-jet-input-error for="grade" />

    
    <x-jet-label class="my-1" value="{{ __('Nivel') }}" />
    <div class="form-check"> 
        <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="nivel" id="primaria" value="primaria" checked>
        <label class="form-check-label inline-block text-gray-800" for="primaria">
            Primaria
        </label>
    </div>
    <div class="form-check"> 
        <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="nivel" id="secundaria" value="secundaria">
        <label class="form-check-label inline-block text-gray-800" for="secundaria">
            Secundaria
        </label>
    </div>
    <x-jet-input-error for="nivel" />

    <x-jet-label for="correo" value="{{ __('E-Mail') }}" />
    <x-jet-input id="correo" class="block mt-1 w-full" type="email" name="correo" :value="old('correo', $estudiante->correo)" required autofocus />
    <x-jet-input-error for="correo" />   
    

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

