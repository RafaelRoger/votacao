@extends('theme.admin')
@section('title', 'Kuhava - new account')
@section('content')
<div id="layoutSidenav_content">
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container-xl px-4">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-activity">
                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                    </svg></div>
                                Account
                            </h1>
                            <div class="page-header-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container-xl px-4 mt-n10">
            <div class="row">
                <div class="col-lg-9">
                    <!-- Default Bootstrap Form Controls-->
                    <div id="default">
                        <div class="card mb-4">
                            <div class="card-header">Formulário de adição de utilizadores</div>
                            <div class="card-body">
                                <!-- Component Preview-->
                                <div class="sbp-preview">
                                    <div class="sbp-preview-content">
                                        <form method="post">
                                            @if($errors->any() || session('message'))
                                            <div class="alert alert-@php if($errors->any()) echo 'danger'; else echo 'success'; @endphp alert-dismissible fade show"
                                                role="alert">
                                                @if($errors->any())
                                                <x-validation-errors class="mb-4" :errors="$errors" />
                                                @else
                                                {{ __(session('message')) }}
                                                @endif
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                            @endif
                                            @csrf
                                            <div class="mb-3">
                                                <label for="fullNameControlInput">Nome Completo</label>
                                                <input class="form-control" id="fullNameControlInput" type="text"
                                                    placeholder="Rafael Rogério Munguambe" name="name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1">Email</label>
                                                <input class="form-control" id="exampleFormControlInput1" type="email"
                                                    placeholder="name@example.com" name="email">
                                            </div>
                                            <div class="mb-3">
                                                <label for="fullNameControlInput">Senha</label>
                                                <input class="form-control" name="password" id="fullNameControlInput"
                                                    type="password" placeholder="password">
                                            </div>
                                            <div class="mb-3">
                                                <label for="fullNameControlInput">Confirmar Senha</label>
                                                <input class="form-control" id="fullNameControlInput" type="password"
                                                    placeholder="password confirmation" name="password_confirmation">
                                            </div>
                                            <button class="btn btn-primary mb-3"
                                                id="toastBasicTrigger">Registar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sticky Navigation-->
                <div class="col-lg-3">
                    <div class="nav-sticky">
                        <div class="card">
                            <div class="card-body">
                                <ul class="nav flex-column" id="stickyNav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#default">
                                            Basic instructions
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Toast -->
    <div style="position: absolute; bottom: 1rem; right: 1rem;">
        <!-- Toast -->
        <div class="toast" id="toastNoAutohide" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header bg-success text-white">
                <i data-feather="alert-circle"></i>
                <strong class="mr-auto">Success Text Toast</strong>
                <small class="text-white-50 ml-2">just now</small>
                <button class="ml-2 mb-1 btn-close btn-close-white" type="button" data-bs-dismiss="toast"
                    aria-label="Close"> </button>
            </div>
            <div class="toast-body">This toast uses the success background color utility on the toast header.</div>
        </div>

    </div>
    @endSection