<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <nav class="navbar navbar-expand-lg sticky-top shadow navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand fs-3 fw-bold" href="/product/html/home/">Shopping Mart</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ps-2">
                        <li class="nav-item">
                            <a href="/product/html/order" class="nav-link"> <i class="bi bi-cart4 fs-5"></i></a>
                        </li>
                    </ul>
                    <ul class="navbar-nav d-flex">
                        <li class="nav-item dropdown me-5 pe-5">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle fs-3"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li class="nav-item"> <a href="/product/html/user/profile/" class="dropdown-item"> Profile</a> </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        