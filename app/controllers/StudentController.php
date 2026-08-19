<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    // Student Home Page
    public function index()
    {
        $this->call->view('student/home');
    }

    // Student Profile Page
    public function profile()
    {
        // Student information
        $student = [
            'student_id' => 'YOUR-STUDENT-ID',
            'name'       => 'Kasandra Inog',
            'course'     => 'BS Information Technology',
            'year'       => '3rd Year',
            'section'    => '3F6',
            'email'      => 'YOUR-EMAIL'
        ];

        // Pass student information to the view
        $this->call->view('student/profile', [
            'student' => $student
        ]);
    }
}