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
          <label for="idade" class="block text-sm font-medium text-gray-700 mb-2">Peso:</label>
          <input type="number" id="peso" name="peso" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
        </div>
        <div class="mb-4">
          <label for="idade" class="block text-sm font-medium text-gray-700 mb-2">Altura:</label>
          <input type="number" id="altura" name="altura" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
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
          <label for="diabetes" class="block text-sm font-medium text-gray-700 mb-2">Você possui alguma das doenças abaixo?</label>
          <div class="space-y-2">
            <label class="flex items-center">
              <input type="radio" id="doenca_diabetes" name="doenca" value="1" class="mr-2">
              <span>Diabetes</span>
            </label>
            <label class="flex items-center">
              <input type="radio" id="doenca_dvc" name="doenca" value="2" class="mr-2">
              <span>DVC</span>
            </label>
            <label class="flex items-center">
              <input type="radio" id="doenca_loa" name="doenca" value="3" class="mr-2">
              <span>LOA</span>
            </label>
            <label class="flex items-center">
              <input type="radio" id="doenca_drc" name="doenca" value="4" class="mr-2">
              <span>DRC</span>
            </label>
            <small class="text-gray-500">Selecione a doença do paciente.</small>
          </div>
        </div>

        <div class="mb-4">
          <label for="historico" class="block text-sm font-medium text-gray-700 mb-2">Pressão Arterial Sistólica (PAS) </label>
          <select id="has_pas" name="has_pas" required class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            <option>Selecione uma opção</option>
            <option value="1">Sim</option>
            <option value="0">Não</option>
          </select>
        </div>
        <div id="input_pas" class="mb-4 hidden">
          <input type="number" id="pas" name="pas" class="w-full border border-gray-300 rounded-md p-2">
          <small class="text-gray-500">Informe o valor de PAS do paciente.</small>
        </div>
        <div class="mb-4">
          <label for="historico" class="block text-sm font-medium text-gray-700 mb-2">Pressão Arterial Diastólica (PAD) </label>
          <select id="has_pad" name="has_pad" required class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            <option>Selecione uma opção</option>
            <option value="1">Sim</option>
            <option value="0">Não</option>
          </select>
        </div>
        <div id="input_pad" class="mb-4 hidden">
          <input type="number" id="pad" name="pad" class="w-full border border-gray-300 rounded-md p-2">
          <small class="text-gray-500">Informe o valor de PAD do paciente.</small>
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
<script>
  const hasPasSelect = document.getElementById('has_pas');
  const inputPas = document.getElementById('input_pas');

  hasPasSelect.addEventListener('change', function() {
    if (this.value === '1') {
      inputPas.classList.remove('hidden');
    } else {
      inputPas.classList.add('hidden');
    }
  });

  const hasPadSelect = document.getElementById('has_pad');
  const inputPad = document.getElementById('input_pad');

  hasPadSelect.addEventListener('change', function() {
    if (this.value === '1') {
      inputPad.classList.remove('hidden');
    } else {
      inputPad.classList.add('hidden');
    }
  });
</script>