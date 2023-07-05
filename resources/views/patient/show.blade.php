<x-app-layout>
  <div class="max-w-7xl mx-auto p-4 sm:p-6 lg:p-8">
    <div class="py-4">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <section class="flex flex-col lg:flex-row">
          <div class="w-full p-2 md:p-6 bg-white rounded-lg shadow-md">

            <div class="grid grid-cols-7 gap-6">
              <div class="col-span-2">
                <h4 class="text-xl">Informações do paciente</h4>
                <div class="rounded-lg shadow-md rounded-md p-2">
                  <h2 class="text-lg font-semibold">{{ $paciente->nome }}, <span class="font-medium text-gray-600">{{ $paciente->idade }}</span></h2>
                  <h2 class="text-lg font-semibold">Peso: {{ $paciente->peso }}, <span class="font-medium text-gray-600">IMC ({{ $paciente->imc }})</span></h2>
                  <h2 class="text-lg font-semibold">Altura: {{ $paciente->altura }}</h2>
                  <h2 class="text-lg font-semibold">Fumante: {{ $paciente->tabagismo }}</h2>
                  <li>Doença: {{ $paciente->doenca }}</li>
                  <li>Risco Vascular: {{ $paciente->risco }}</li>
                  </ul>
                </div>
              </div>

              <div class="col-span-5">
                <h4 class="text-xl">Risco Vascular</h4>

                <div class="flex flex-wrap gap-5 md:gap-10 m-3 mt-10">
                  <div class="text-sm">
                    <span class="bg-green-500 align-middle w-4 h-4 inline-block mr-1 -mt-1"></span>
                    Sem Risco
                  </div>

                  <div class="text-sm">
                    <span class="bg-yellow-500 align-middle w-4 h-4 inline-block mr-1 -mt-1"></span>
                    Risco Baixo
                  </div>

                  <div class="text-sm">
                    <span class="bg-orange-500 align-middle w-4 h-4 inline-block mr-1 -mt-1"></span>
                    Risco Moderado
                  </div>

                  <div class="text-sm">
                    <span class="bg-red-500 align-middle w-4 h-4 inline-block mr-1 -mt-1"></span>
                    Risco Alto
                  </div>
                </div>

                <div class="space-y-3 mt-10">
                  <div class="flex flex-col md:flex-row items-center">
                    <div class="w-full md:w-2/3 p-3">
                      O paciente apresenta está sem risco, pois não possui nenhum fator de risco.
                    </div>
                    <div class="flex w-full md:w-2/3 min-h-[60px]">
                      <span class="rounded-l p-3 text-center leading-10 mr-1 bg-green-500 w-[100%] text-white">0</span>
                      <!-- <span class="text-center p-3 leading-10 mr-1 bg-green-300 w-[30%] text-black">30%</span>
                      <span class="text-center p-3 leading-10 mr-1 bg-gray-300 w-[10%] text-black">10%</span>
                      <span class="text-center p-3 leading-10 mr-1 bg-gray-400 w-[6%] text-white">6%</span>
                      <span class="rounded-r p-3 text-center leading-10 mr-1 bg-gray-500 w-[4%] text-white">4%</span> -->
                    </div>
                  </div>
                  <div class="flex flex-col md:flex-row items-center">
                    <div class="w-full md:w-2/3 p-3">
                      O paciente apresenta está em risco baixo, pois possui 2 fatores de risco (fumante, IMC > 30).
                    </div>
                    <div class="flex w-full md:w-2/3 min-h-[60px]">
                      <span class="rounded-l p-3 text-center leading-10 mr-1 bg-yellow-500 w-[100%] text-white">2</span>
                    </div>
                  </div>
                  <div class="flex flex-col md:flex-row items-center">
                    <div class="w-full md:w-2/3 p-3">
                      O paciente apresenta está em risco moderado, com PDA 145 e PAD 92 e 1 fator de risco (fumante).
                    </div>
                    <div class="flex w-full md:w-2/3 min-h-[60px]">
                      <span class="rounded-l p-3 text-center leading-10 mr-1 bg-orange-500 w-[100%] text-white">3</span>
                    </div>
                  </div>
                  <div class="flex flex-col md:flex-row items-center">
                    <div class="w-full md:w-2/3 p-3">
                      O paciente apresenta está em risco alto, por ter diabetes.
                    </div>
                    <div class="flex w-full md:w-2/3 min-h-[60px]">
                      <span class="rounded-l p-3 text-center leading-10 mr-1 bg-red-500 w-[100%] text-white">4</span>
                    </div>
                  </div>
                </div>

                <p class="text-sm text-gray-400 my-5 px-3">
                 As informações exibidas nestes resultados são de acordos com as Diretrizes de Hipertensão de 2022, em casos de duvidas acess www.hepertensaoarterial.com.br
                </p>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
</x-app-layout>