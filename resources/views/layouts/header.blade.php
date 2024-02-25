<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">
<link rel="stylesheet" href="{{ asset('bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">

{{-- div for the main header logo section --}}

<div class="grid text-center" style="background-color: #05264b;">
  <div class="container p-4">
    <a href="https://isernepal.org.np/">
      <img src="{{ asset('images/isernepal website logo.png')}}" class="img-fluid" alt="ISER-N">
    </a>
  </div>
</div>

{{-- section for the main header menu nav bar section --}}
<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            News & Announcements
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">News</a></li>
            <li><a class="dropdown-item" href="#">Announcements</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Events</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Research
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Ongoing Research</a></li>
            <li><a class="dropdown-item" href="#">Completed Research</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Data
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Data</a></li>
            <li><a class="dropdown-item" href="#">Instruments</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Publications
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Journal Articles</a></li>
            <li><a class="dropdown-item" href="#">Book & Book Chapter</a></li>
            <li><a class="dropdown-item" href="#">Dissertation</a></li>
            <li><a class="dropdown-item" href="#">Presentations</a></li>
            <li><a class="dropdown-item" href="#">Policy Brief</a></li>
            <li><a class="dropdown-item" href="#">Report to Respondent</a></li>
            <li><a class="dropdown-item" href="#">Annual Report</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Other Publications</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Policy & Intervations
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Intervation</a></li>
            <li><a class="dropdown-item" href="#">Policy Feedback</a></li>
            <li><a class="dropdown-item" href="#">Dissemination</a></li>
            <li><a class="dropdown-item" href="#">Interaction Program with Respondent</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Capacity Building
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Comminity Capacity Building</a></li>
            <li><a class="dropdown-item" href="#">Training & Workshops</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          About Us
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Introduction</a></li>
            <li><a class="dropdown-item" href="#">Working Approach</a></li>
            <li><a class="dropdown-item" href="#">Governance</a></li>
            <li><a class="dropdown-item" href="#">Working Approach</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <!--
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
        -->
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</head>