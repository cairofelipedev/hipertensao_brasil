<x-app-layout>
  <div class="max-w-7xl mx-auto p-4 sm:p-6 lg:p-8">
    <div class="py-4">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h1>Perfil do Paciente</h1>

        <h2>{{ $paciente->nome }}</h2>
        <ul>
          <li>Idade: {{ $paciente->idade }}</li>
          <li>Peso: {{ $paciente->peso }}</li>
          <li>Altura: {{ $paciente->altura }}</li>
          <li>Tabagismo: {{ $paciente->tabagismo }}</li>
          <li>Doença: {{ $paciente->doenca }}</li>
          <li>Risco Vascular: {{ $paciente->risco }}</li>
        </ul>
      </div>
    </div>
</x-app-layout>