<?php
function ordenarPorHorario(array $consultas): array {
    usort($consultas, function ($a, $b) {
        return strtotime($a['horario']) - strtotime($b['horario']);
    });
    return $consultas;
}

function contarPacientesDiferentes(array $consultas): int {
    $pacientes = array_column($consultas, 'paciente');
    return count(array_unique($pacientes));
}

function contarPorEspecialidade(array $consultas): array {
    $especialidades = [];
    foreach ($consultas as $consulta) {
        $esp = $consulta['especialidade'];
        if (!isset($especialidades[$esp])) {
            $especialidades[$esp] = 0;
        }
        $especialidades[$esp]++;
    }
    return $especialidades;
}

function buscarPaciente(array $consultas, string $nomeBusca): array {
    return array_values(array_filter($consultas, function ($consulta) use ($nomeBusca) {
        return strtolower($consulta['paciente']) === strtolower($nomeBusca);
    }));
}

function verificarHorariosDuplicados(array $consultas): bool {
    $horariosRegistrados = [];
    foreach ($consultas as $consulta) {
        $chave = $consulta['data'] . ' ' . $consulta['horario'];
        if (in_array($chave, $horariosRegistrados)) {
            return true; // Encontrou duplicado
        }
        $horariosRegistrados[] = $chave;
    }
    return false;
}

function organizarAgenda(array $consultas, string $pacientePesquisado = ''): array {
    if (empty($consultas)) {
        return [
            'total_consultas' => 0,
            'pacientes_diferentes' => 0,
            'consultas_por_especialidade' => [],
            'primeiro_atendimento' => null,
            'ultimo_atendimento' => null,
            'agenda_ordenada' => [],
            'pesquisa_paciente' => [],
            'possui_horarios_duplicados' => false
        ];
    }

   
    $agendaOrdenada = ordenarPorHorario($consultas);

    return [
        'total_consultas'            => count($consultas),
        'pacientes_diferentes'       => contarPacientesDiferentes($consultas),
        'consultas_por_especialidade'=> contarPorEspecialidade($consultas),
        'primeiro_atendimento'       => $agendaOrdenada[0],
        'ultimo_atendimento'         => end($agendaOrdenada),
        'agenda_ordenada'            => $agendaOrdenada,
        'pesquisa_paciente'          => buscarPaciente($consultas, $pacientePesquisado),
        'possui_horarios_duplicados' => verificarHorariosDuplicados($consultas)
    ];
}

$agenda = [
    [
        'paciente'      => 'Ana Silva',
        'especialidade' => 'Cardiologia',
        'data'          => '2026-08-10',
        'horario'       => '14:30'
    ],
    [
        'paciente'      => 'Carlos Souza',
        'especialidade' => 'Dermatologia',
        'data'          => '2026-08-10',
        'horario'       => '09:00'
    ],
    [
        'paciente'      => 'Ana Silva',
        'especialidade' => 'Ortopedia',
        'data'          => '2026-08-10',
        'horario'       => '11:00'
    ],
    [
        'paciente'      => 'Beatriz Lima',
        'especialidade' => 'Cardiologia',
        'data'          => '2026-08-10',
        'horario'       => '16:00'
    ]
];

$resultado = organizarAgenda($agenda, 'Ana Silva');

print_r($resultado);