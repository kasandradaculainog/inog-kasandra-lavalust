<?php

class StudentMiddleware
{
    public function handle()
    {
        session_start();

        if (!isset($_SESSION['student_access'])) {
            header("Location: /student");
            exit;
        }
    }
}