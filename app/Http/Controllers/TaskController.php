<?php
namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function agregarTarea(Request $request)
    {
        $titulo = $request->input('titulo');
        $descripcion = $request->input('descripcion');
        $timempoEstimado = $request->input('tiempoEstimado');
        $fecha = $request->input('fecha');

        Task::createTask($titulo, $descripcion, $timempoEstimado, $fecha);
    }

    public function showDashboard()
    {
        // Obtener todas las tareas desde el modelo Task
        $tasks = Task::all();

        // Pasar las tareas a la vista dashboard
        return view('dashboard', compact('tasks'));
    }


    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
