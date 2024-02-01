@extends('layouts.app')

@section('title', 'User List')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>User List</h1>
    </div>

    <div class="section-body">
        <h2 class="section-title">Users</h2>
        <p class="section-lead">
            Manage your users here.
        </p>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>All Users</h4>
                </div>
                <div class="card-body">

                    <div class="float-right">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="clearfix mb-3"></div>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>E-Mail</th>
                                <th>Phone</th>
                                <th>Status</th>
                            </tr>

                            <tr>
                                <td>
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                            id="checkbox-1">
                                        <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                    </div>
                                </td>
                                <td>Laravel 5 Tutorial: Deployment
                                    <div class="table-links">
                                        <a href="#">View</a>
                                        <div class="bullet"></div>
                                        <a href="#">Edit</a>
                                        <div class="bullet"></div>
                                        <a href="#" class="text-danger">Trash</a>
                                    </div>
                                </td>
                                <td>
                                    <a href="#">Web Developer</a>,
                                    <a href="#">Tutorial</a>
                                </td>
                                <td>
                                    <a href="#">
                                        <img alt="image" src="../assets/img/avatar/avatar-5.png" class="rounded-circle"
                                            width="35" data-toggle="title" title="">
                                        <div class="d-inline-block ml-1">Rizal Fakhri</div>
                                    </a>
                                </td>
                                <td>2018-01-20</td>
                                <td>
                                    <div class="badge badge-warning">Pending</div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="float-right">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('sidebar')
@parent
<li class="menu-header">Starter</li>
<li class="nav-item dropdown">
    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
        <span>Layout</span></a>
    <ul class="dropdown-menu">
        <li><a class="nav-link" href="layout-default.html">Default Layout</a></li>
        <li><a class="nav-link" href="layout-transparent.html">Transparent Sidebar</a></li>
        <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
    </ul>
</li>
@endsection