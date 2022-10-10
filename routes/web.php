<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;




Route::get(  '/imc/{nome}/{peso}/{altura}/{genero}',  [PacienteController::class, 'calcularIMC']);












