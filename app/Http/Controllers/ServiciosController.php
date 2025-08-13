
use App\Http\Controllers\Controller;

class ServiciosController extends Controller

    public function index()
    {
        $servicios = [
            [
            'titulo' => 'Desarrollo de sistemas web',
            'descripcion' => 'Creamos sistemas robustos, escalables y personalizados para automatizar procesos y mejorar tu operación digital.',
            'icono' => 'bi bi-window',
        ],
        [
            'titulo' => 'Desarrollo de páginas web',
            'descripcion' => 'Diseñamos sitios modernos, responsivos y alineados con tu branding para captar la atención de tus clientes.',
            'icono' => 'bi bi-globe',
        ],
        [
            'titulo' => 'Administración y mantención web',
            'descripcion' => 'Nos encargamos de la gestión técnica y visual de tus plataformas para que siempre estén optimizadas.',
            'icono' => 'bi bi-tools',
        ],
        [
            'titulo' => 'Alojamiento y dominio',
            'descripcion' => 'Te ayudamos a configurar tu hosting y dominio profesional, asegurando velocidad y seguridad.',
            'icono' => 'bi bi-hdd-network',
        ],
        [
            'titulo' => 'Desarrollo de plantillas',
            'descripcion' => 'Creamos plantillas personalizadas y escalables para distintos rubros, listas para implementar.',
            'icono' => 'bi bi-layout-text-window',
        ],
    ];

    return view('layouts.servicios', compact('servicios'));
}