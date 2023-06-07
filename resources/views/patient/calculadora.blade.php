<x-app-layout>
  <div class="max-w-7xl mx-auto p-4 sm:p-6 lg:p-8">
    <div class="max-w-md mx-auto">
      <h1 class="text-2xl font-semibold mb-6">Calculadora de Risco Vascular</h1>

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
          <button type="submit" class="py-2 px-4 bg-red-500 text-white rounded-md hover:bg-red-600">Calcular Risco Vascular</button>
        </div>
      </form>
    </div>
  </div>
</x-app-layout>