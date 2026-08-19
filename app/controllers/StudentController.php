<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

require_once __DIR__ . '/../middlewares/StudentMiddleware.php';

class StudentController extends Controller
{


  public function index()
{
    session_start();

    $_SESSION['student_access'] = true;

    $this->call->view('student_home');
}

  public function profile()
{
    $middleware = new StudentMiddleware();
    $middleware->handle();

    $student = [
        'title'       => 'Kasandra D. Inog - Profile',
        'student_id'  => 'MCC2024-01533',
        'name'        => 'Kasandra D. Inog',
        'course'      => 'BS Information Technology',
        'year'        => '3rd Year',
        'section'     => '3F6',
        'email'       => 'kasandra.inog@gmail.com',
        'description' => 'I am currently a 3rd year BSIT Student at Mindoro State University Calapan Campus'
    ];

    $this->call->view('student_profile', $student);
}
}