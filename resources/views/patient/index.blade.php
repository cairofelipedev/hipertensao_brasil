<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <div class="max-w-md mx-auto">
            <h1 class="text-2xl font-semibold mb-6">Formulário de Informações do Paciente</h1>

            <form method="POST" action="{{ route('pacientes.store') }}">
                @csrf

                <div class="mb-4">
                    <label for="nome" class="block text-sm font-medium text-gray-700 mb-2">Nome:</label>
                    <input type="text" id="nome" name="nome" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>

                <div class="mb-4">
                    <label for="idade" class="block text-sm font-medium text-gray-700 mb-2">Idade:</label>
                    <input type="number" id="idade" name="idade" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>

                <div class="mb-4">
                    <label for="sexo" class="block text-sm font-medium text-gray-700 mb-2">Sexo:</label>
                    <select id="sexo" name="sexo" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="tabagismo" class="block text-sm font-medium text-gray-700 mb-2">Tabagismo:</label>
                    <select id="tabagismo" name="tabagismo" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="diabetes" class="block text-sm font-medium text-gray-700 mb-2">Diabetes:</label>
                    <select id="diabetes" name="diabetes" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="colesterol_total" class="block text-sm font-medium text-gray-700 mb-2">Colesterol Total:</label>
                    <input type="number" id="colesterol_total" name="colesterol_total" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>

                <div class="mb-4">
                    <label for="hdl" class="block text-sm font-medium text-gray-700 mb-2">HDL:</label>
                    <input type="number" id="hdl" name="hdl" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
                <div class="mb-4">
                    <label for="pa" class="block text-sm font-medium text-gray-700 mb-2">Pressão Arterial (PA):</label>
                    <input type="text" id="pa" name="pa" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>

                <div class="mb-4">
                    <label for="historico" class="block text-sm font-medium text-gray-700 mb-2">Histórico Familiar:</label>
                    <select id="historico" name="historico" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                    </select>
                </div>

                <div>
                    <button type="submit" class="py-2 px-4 bg-indigo-500 text-white rounded-md hover:bg-indigo-600">Calcular Risco Vascular</button>
                </div>
            </form>
        </div>
        <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
            @foreach ($pacientes as $patient)
            <div class="p-6 flex space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 -scale-x-100" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                </svg>
                <div class="flex-1">
                    <div class="flex justify-between items-center">
                        <div>
                            <span class="text-gray-800">{{ $patient->user->name }}</span>
                            <small class="ml-2 text-sm text-gray-600">{{ $patient->created_at->format('j M Y, g:i a') }}</small>
                        </div>
                    </div>
                    <p class="mt-4 text-lg text-gray-900">{{ $patient->nome }}</p>
                    <p class="mt-4 text-lg text-gray-900">{{ $patient->risco_vascular }}
                    <p class="mt-4 text-lg text-gray-900">{{ $patient->resultado_risco }}</p>
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>