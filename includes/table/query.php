<?php
// ------------------------------------------------
// STUDENTS
// ------------------------------------------------
// === QUERY STUDENTS ===
$students = query_students("SELECT * FROM tb_students");

// ------------------------------------------------
// TEACHER
// ------------------------------------------------
// === QUERY TEACHER ===
$teacher = query_teacher("SELECT * FROM tb_users");

// === QUERY STUDENT RAPORTS===
$studentRaports = query_student_raports("SELECT * FROM tb_student_raports");

// === QUERY STUDENT RAPORTS (MAX 1)===
if (isset($_SESSION["login"])) {
  $idClass = $rowSession["level"];

  $studentRaportsMax1 = $conn->query("SELECT * FROM tb_student_raports WHERE id_class = '$idClass'  ORDER BY nilai_rata_rata DESC LIMIT 0 , 1 ");
  $resultRaportsMax1 = mysqli_fetch_assoc($studentRaportsMax1);

  // === QUERY STUDENT RAPORTS (MAX 2)===
  $studentRaportsMax2 = $conn->query("SELECT * FROM tb_student_raports ORDER BY nilai_rata_rata DESC LIMIT 1 , 1");
  $resultRaportsMax2 = mysqli_fetch_assoc($studentRaportsMax2);

  // === QUERY STUDENT RAPORTS (MAX 3)===
  $studentRaportsMax3 = $conn->query("SELECT * FROM tb_student_raports ORDER BY nilai_rata_rata DESC LIMIT 2 , 1");
  $resultRaportsMax3 = mysqli_fetch_assoc($studentRaportsMax3);

  // === QUERY STUDENT RAPORTS (MAX 4)===
  $studentRaportsMax4 = $conn->query("SELECT * FROM tb_student_raports ORDER BY nilai_rata_rata DESC LIMIT 3 , 1");
  $resultRaportsMax4 = mysqli_fetch_assoc($studentRaportsMax4);

  // === QUERY STUDENT RAPORTS (MAX 5)===
  $studentRaportsMax5 = $conn->query("SELECT * FROM tb_student_raports ORDER BY nilai_rata_rata DESC LIMIT 4 , 1");
  $resultRaportsMax5 = mysqli_fetch_assoc($studentRaportsMax5);

  // === QUERY STUDENT RAPORTS (MAX 6)===
  $studentRaportsMax6 = $conn->query("SELECT * FROM tb_student_raports ORDER BY nilai_rata_rata DESC LIMIT 5 , 1");
  $resultRaportsMax6 = mysqli_fetch_assoc($studentRaportsMax6);

  // === QUERY STUDENT RAPORTS (MAX 7)===
  $studentRaportsMax7 = $conn->query("SELECT * FROM tb_student_raports ORDER BY nilai_rata_rata DESC LIMIT 6 , 1");
  $resultRaportsMax7 = mysqli_fetch_assoc($studentRaportsMax7);

  // === QUERY STUDENT RAPORTS (MAX 8)===
  $studentRaportsMax8 = $conn->query("SELECT * FROM tb_student_raports ORDER BY nilai_rata_rata DESC LIMIT 7 , 1");
  $resultRaportsMax8 = mysqli_fetch_assoc($studentRaportsMax8);

  // === QUERY STUDENT RAPORTS (MAX 9)===
  $studentRaportsMax9 = $conn->query("SELECT * FROM tb_student_raports ORDER BY nilai_rata_rata DESC LIMIT 8 , 1");
  $resultRaportsMax9 = mysqli_fetch_assoc($studentRaportsMax9);

  // === QUERY STUDENT RAPORTS (MAX 10)===
  $studentRaportsMax10 = $conn->query("SELECT * FROM tb_student_raports ORDER BY nilai_rata_rata DESC LIMIT 9 , 1");
  $resultRaportsMax10 = mysqli_fetch_assoc($studentRaportsMax10);
}

// ------------------------------------------------
// VISITOR
// ------------------------------------------------
// === QUERY TABLE VISITOR ===
$visitor = query("SELECT * FROM tb_visitor ORDER BY id DESC");
