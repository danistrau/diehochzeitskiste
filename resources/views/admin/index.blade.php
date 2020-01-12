@extends('layouts.master') @section('container')
<main>
    <section class="main">
        <h1 class="subheader">Dashboard</h1>
        <ul class="main-text">
            <li class="nav-item">
                <a class="nav-link" href="admin/blog">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin/inspiration">Inspiration</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin/users">User</a>
            </li>
           
        </ul>
    </section>
</main>
@endsection
