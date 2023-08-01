<?php
// COUNT VISITOR (IP ADDRESS)
$countVisitor = $conn->query("SELECT COUNT(*) countVisitor FROM tb_visitor");
$resultVisitor = mysqli_fetch_assoc($countVisitor);

// COUNT STUDENTS
$countStudents = $conn->query("SELECT COUNT(*) countStudents FROM tb_students");
$resultStudents = mysqli_fetch_assoc($countStudents);

// COUNT STUDENTS (CLASS A)
$countStudentsA = $conn->query("SELECT COUNT(*) countStudentsA FROM tb_students WHERE id_class = 'class_a' ");
$resultStudentsA = mysqli_fetch_assoc($countStudentsA);

// COUNT STUDENTS (CLASS B)
$countStudentsB = $conn->query("SELECT COUNT(*) countStudentsB FROM tb_students WHERE id_class = 'class_b' ");
$resultStudentsB = mysqli_fetch_assoc($countStudentsB);

// COUNT STUDENT RAPORTS
$countStudentRaports = $conn->query("SELECT COUNT(*) countStudentRaports FROM tb_student_raports");
$resultStudentRaports = mysqli_fetch_assoc($countStudentRaports);

// COUNT STUDENT RAPORTS (CLASS A)
$countStudentRaportsA = $conn->query("SELECT COUNT(*) countStudentRaportsA FROM tb_student_raports WHERE id_class = 'class_a' ");
$resultStudentRaportsA = mysqli_fetch_assoc($countStudentRaportsA);

// COUNT STUDENT RAPORTS (CLASS B)
$countStudentRaportsB = $conn->query("SELECT COUNT(*) countStudentRaportsB FROM tb_student_raports WHERE id_class = 'class_b' ");
$resultStudentRaportsB = mysqli_fetch_assoc($countStudentRaportsB);

// COUNT ACCOUNT
$countAccount = $conn->query("SELECT COUNT(*) countAccount FROM tb_users");
$resultAccount = mysqli_fetch_assoc($countAccount);

// COUNT STUDENTS
$countStudents = $conn->query("SELECT COUNT(*) countStudents FROM tb_students");
$resultStudents = mysqli_fetch_assoc($countStudents);
