<x-app-layout>
  <div class="max-w-7xl mx-auto p-4 sm:p-6 lg:p-8">
    <div class="py-4">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="lg:flex space-y-2 items-center justify-between py-4 bg-white">
            <div class="pl-5">
              <h4 class="font-bold text-gray-700">
                PACIENTES
              </h4>
            </div>
            <div class="lg:flex space-x-2 pr-4">
              <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 lg:block" type="button">
                Opções
              </button>
              <div class="hidden lg:block">
                <div id="dropdownAction" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                  <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownActionButton">
                    <li>
                      <a href="#" class="block px-4 py-2 hover:bg-gray-100">Exportar Dados</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                  <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                  </svg>
                </div>
                <input type="text" id="busca" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Busca">
              </div>
            </div>
          </div>
          <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3">
                  Nome
                </th>
                <th scope="col" class="px-6 py-3">
                  Idade
                </th>
                <th scope="col" class="px-6 py-3">
                  Sexo
                </th>
                <th scope="col" class="px-6 py-3">
                  Risco Vascular
                </th>
                <th scope="col" class="px-6 py-3">

                </th>
                <th scope="col" class="px-6 py-3">
                  Data de Cadastro
                </th>
                <th scope="col" class="px-6 py-3">
                  Opções
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($pacientes as $patient)
              <tr class="bg-white border-b">
                <td class="px-6 py-4 text-gray-900 whitespace-nowrap">
                  <div class="text-base font-semibold">{{ $patient->nome }}</div>
                </td>

                <td class="px-6 py-4 text-gray-900 whitespace-nowrap">
                  <div class="text-base font-semibold">{{ $patient->idade }}</div>
                </td>

                <td class="px-6 py-4 text-gray-900 whitespace-nowrap">
                  <div class="text-base font-semibold">{{ $patient->sexo }}</div>
                </td>
                <td class="px-6 py-4 text-gray-900 whitespace-nowrap">
                  <div class="relative pt-1 mx-5">
                    <div class="overflow-hidden h-4 mb-4 text-xs flex rounded">
                      @if ($patient->risco_vascular <= 0) <div style="width: 100%" class="shadow-none flex 9]}flex-col text-center whitespace-nowrap text-white justify-center bg-green-500">
                    </div>
                    @elseif ($patient->risco_vascular <= 2) <div style="width: 100%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-yellow-500">
                  </div>
                  @elseif ($patient->risco_vascular <= 3) <div style="width: 100%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-orange-500">
        </div>
        @else
        <div style="width: 100%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-500"></div>
        @endif
        </td>
        <td class="px-6 py-4">
          <div class="flex items-center space-x-2">
            <div class="text-base font-semibold">{{ $patient->risco_vascular }}</div>
          </div>
        </td>
        <td class="px-6 py-4">
          {{ $patient->created_at->format('j M Y, g:i a') }}
        </td>
        <td class="px-6 py-4">
          <form action="{{ route('pacientes.destroy', $patient->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-600">Excluir</button>
          </form>
          <a href="{{ route('pacientes.show', $patient->id) }}">Ver perfil</a>
        </td>
        </tr>
        @endforeach
        </tbody>
        </table>
      </div>
    </div>
</x-app-layout>
<script>
  const inputBusca = document.querySelector('#busca');
  inputBusca.addEventListener('input', () => {
    const termoBusca = inputBusca.value.toLowerCase();
    filtrarLinhas(termoBusca);
  });

  function filtrarLinhas(termo) {
    const tbody = document.querySelector('table tbody');
    const linhas = tbody.querySelectorAll('tr');

    linhas.forEach((linha) => {
      const textoLinha = linha.textContent.toLowerCase();
      if (textoLinha.includes(termo)) {
        linha.classList.remove('hidden');
      } else {
        linha.classList.add('hidden');
      }
    });
  }
</script>