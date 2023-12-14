@extends('theme.admin')
@section('title', 'Kuhava | User List')
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
                                View Accounts
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
            <div class="card mb-4">
                <div class="card-header">Lista de utilizadores</div>
                <div class="card-body">
                    <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                        <div class="datatable-top">
                            <div class="datatable-dropdown">
                                <label>
                                    <select class="datatable-selector">
                                        <option value="5">5</option>
                                        <option value="10" selected="">10</option>
                                        <option value="15">15</option>
                                        <option value="20">20</option>
                                        <option value="25">25</option>
                                    </select> entries per page
                                </label>
                            </div>
                            <div class="datatable-search">
                                <input class="datatable-input" placeholder="Search..." type="search"
                                    title="Search within table" aria-controls="datatablesSimple">
                            </div>
                        </div>
                        <div class="datatable-container">
                            <table id="datatablesSimple" class="datatable-table">
                                <thead>
                                    <tr>
                                        <th data-sortable="true" style="width: 12.777053455019557%;"><a href="#"
                                                class="datatable-sorter">Img</a></th>
                                        <th data-sortable="true" style="width: 12.777053455019557%;"><a href="#"
                                                class="datatable-sorter">Codigo</a></th>
                                        <th data-sortable="true" style="width: 12.777053455019557%;"><a href="#"
                                                class="datatable-sorter">Name</a></th>
                                        <th data-sortable="true" style="width: 15.254237288135593%;"><a href="#"
                                                class="datatable-sorter">Titulo</a></th>
                                        <th data-sortable="true" style="width: 12.25554106910039%;"><a href="#"
                                                class="datatable-sorter">Categoria</a></th>
                                        <th data-sortable="true" style="width: 12.25554106910039%;"><a href="#"
                                                class="datatable-sorter">Votos</a></th>
                                        <th data-sortable="true" style="width: 14.21121251629726%;"><a href="#"
                                                class="datatable-sorter">Joined date</a></th>
                                        <th data-sortable="true" style="width: 12.1251629726206%;"><a href="#"
                                                class="datatable-sorter">Actions</a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($songs as $song)
                                    <tr data-index="0">
                                        <td>
                                            <a class="btn btn-icon btn-transparent-dark dropdown-toggle"
                                                id="navbarDropdownUserImage" href="javascript:void(0);" role="button"
                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"><img class="img-fluid"
                                                    src="{{ url('storage/'.$song->image) }}"></a>
                                        </td>
                                        <td>{{ $song->code }}</td>
                                        <td>{{ $song->singer }}</td>
                                        <td>{{ $song->title }}</td>
                                        <td>{{ $song->categoria }}</td>
                                        <td>{{ $song->votes ?? 0 }}</td>
                                        <td>{{ $song->created_at }}</td>
                                        <td>
                                            <!-- <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><svg
                                                    class="svg-inline--fa fa-ellipsis-vertical" aria-hidden="true"
                                                    focusable="false" data-prefix="fas" data-icon="ellipsis-vertical"
                                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 512"
                                                    data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M56 472a56 56 0 1 1 0-112 56 56 0 1 1 0 112zm0-160a56 56 0 1 1 0-112 56 56 0 1 1 0 112zM0 96a56 56 0 1 1 112 0A56 56 0 1 1 0 96z">
                                                    </path>
                                                </svg></button> -->
                                            <button type="button"
                                                class="btn btn-datatable btn-icon btn-transparent-dark"
                                                data-toggle="modal" data-target="#exampleModal">
                                                <i class="fas fa fa-edit"></i>
                                            </button>
                                            <a href="{{ route('song.delete', $song->id) }}" type="button"
                                                class="btn btn-datatable btn-icon btn-transparent-dark"
                                                data-toggle="modal" data-target="#exampleModal"><svg
                                                    class="svg-inline--fa fa-trash-can" aria-hidden="true"
                                                    focusable="false" data-prefix="far" data-icon="trash-can" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                    data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z">
                                                    </path>
                                                </svg><!-- <i class="fa-regular fa-trash-can"></i> Font Awesome fontawesome.com --></a>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="datatable-bottom">
                            <div class="datatable-info">Showing 1 to 10 of 57 entries</div>
                            <nav class="datatable-pagination">
                                <ul class="datatable-pagination-list">
                                    <li class="datatable-pagination-list-item datatable-hidden datatable-disabled">
                                        <a data-page="1" class="datatable-pagination-list-item-link">‹</a>
                                    </li>
                                    <li class="datatable-pagination-list-item datatable-active"><a data-page="1"
                                            class="datatable-pagination-list-item-link">1</a></li>
                                    <li class="datatable-pagination-list-item"><a data-page="2"
                                            class="datatable-pagination-list-item-link">2</a></li>
                                    <li class="datatable-pagination-list-item"><a data-page="3"
                                            class="datatable-pagination-list-item-link">3</a></li>
                                    <li class="datatable-pagination-list-item"><a data-page="4"
                                            class="datatable-pagination-list-item-link">4</a></li>
                                    <li class="datatable-pagination-list-item"><a data-page="5"
                                            class="datatable-pagination-list-item-link">5</a></li>
                                    <li class="datatable-pagination-list-item"><a data-page="6"
                                            class="datatable-pagination-list-item-link">6</a></li>
                                    <li class="datatable-pagination-list-item"><a data-page="2"
                                            class="datatable-pagination-list-item-link">›</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    @endSection