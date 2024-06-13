<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'estimated_time', 
        'due_date', 
    ];

    /**
     * Método estático para crear una nueva tarea.
     *
     * @param string $title
     * @param string $description
     * @param float $estimatedTime
     * @param string $dueDate
     * @return Task
     */
    public static function createTask($title, $description, $estimatedTime, $dueDate)
    {
        return static::create([
            'title' => $title,
            'description' => $description,
            'estimated_time' => $estimatedTime,
            'due_date' => $dueDate,
        ]);
    }

    /**
     * Método estático para obtener todos los registros de tareas.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function getAllTasks()
    {
        return static::all();
    }
}
