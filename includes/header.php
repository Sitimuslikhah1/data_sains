<?php
if (!isset($pageTitle)) $pageTitle = 'UTS Sains Data';
if (!isset($activePage)) $activePage = '';
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Tugas UTS Sains Data - Siti Muslikhah">
  <title><?= e($pageTitle) ?> | Sains Data</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div class="app-shell">
  <aside class="sidebar" id="sidebar">
    <a class="brand" href="index.php"><span class="brand-mark">S<span>D</span></span><span class="brand-name">Sains<span>Data</span><small>UTS ASSIGNMENT</small></span></a>
    <div class="sidebar-label">DAFTAR ISI</div>
    <nav class="side-nav">
      <a href="index.php#identitas"><span class="nav-icon">♙</span>Identitas</a>
      <a href="index.php#teori"><span class="nav-icon">▤</span>Soal Teori <span class="nav-count">05</span></a>
      <a href="index.php#praktikum"><span class="nav-icon">{ }</span>Praktikum <span class="nav-count">05</span></a>
      <a href="index.php#cara-menjalankan"><span class="nav-icon">⌘</span>Petunjuk kode</a>
    </nav>
    <div class="sidebar-bottom">
      <div class="sidebar-profile"><div class="avatar avatar-small">SM</div><div><strong>Siti Muslikhah</strong><small>2222803 · TRPL Reg B</small></div></div>
    </div>
  </aside>
  <div class="main-wrap">
    <header class="topbar">
      <button class="menu-toggle" id="menuToggle" aria-label="Buka menu" aria-expanded="false">☰</button>
      <div class="breadcrumb"><span>UTS</span><b>/</b><strong>Sains Data</strong></div>
      <div class="topbar-right"><span class="topbar-status"><i></i> Tugas Lengkap</span><div class="topbar-avatar">SM</div></div>
    </header>
