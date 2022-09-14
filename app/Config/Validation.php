<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation extends BaseConfig
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    public $investigaciones = [
        'nombre' => 'required|max_length[255]',
        'descripcion' => 'required|max_length[255]',
        'año' => 'required',
        'estatus' => 'required'
    ];

    public $temas = [
        'estatus' => 'required'
    ];


    public $investigador = [
        'estatus' => 'required'
    ];

    public $objetivos = [
        'estatusO' => 'required'
    ];

    public $encuesta = [
        'estatus' => 'required'
    ];

    public $pregunta = [
        'estatusP' => 'required'
    ];

    public $encuestaLarga = [
        'estatusL' => 'required'

    ];

    public $slider = [
        'descripcionS' => 'required',
        'estatusS' => 'required'

    ];

    public $apoyos = [
        'estatus' => 'required'

    ];

    public $derechos = [
        'estatusDerecho' => 'required'

    ];

    public $dependencia = [
        'estatusDependencia' => 'required'

    ];

    public $tapoyo = [
        'estatusApoyo' => 'required'

    ];

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------
}
