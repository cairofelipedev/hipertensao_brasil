<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="lg:flex space-y-2 items-center justify-between py-4 bg-white">
                    <div class="pl-5">
                        <h4 class="font-bold text-gray-700">
                            PACIENTES
                        </h4>
                    </div>
                    <div class="lg:flex space-x-2">
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
                                Categoria
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Telefone
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Data de Cadastro
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4 text-gray-900 whitespace-nowrap">
                                <div class="text-base font-semibold">THEO</div>
                            </td>

                            <td class="px-6 py-4 text-gray-900 whitespace-nowrap">
                                <div class="text-base font-semibold">TESTE</div>
                            </td>

                            <td class="px-6 py-4 text-gray-900 whitespace-nowrap">
                                <div class="text-base font-semibold">TESTE</div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-2">
                                    <div class="text-base font-semibold">TESTE</div>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-gray-900 whitespace-nowrap">
                                <div class="relative pt-1 mx-5">
                                    <div class="overflow-hidden h-4 mb-4 text-xs flex rounded bg-emerald-200">
                                        <div style="width: 10%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-500"></div>
                                        <div style="width: 15%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-orange-500"></div>
                                        <div style="width: 25%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-emerald-500"></div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded btnAbrirModal" data-parametro="TESTE">Ver mais</button>
                            </td>
                        </tr>

                      
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
