<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentMiddleware
{
    public function run()
    {
        // Simple session-based condition check
        if (!isset($_SESSION['student_access']) || $_SESSION['student_access'] !== true) {
            // Redirect unauthorized users to student home page
            redirect('student');
            exit();
        }
    }
}