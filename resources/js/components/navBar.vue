<template>
    <nav
        class="navbar navbar-expand-lg bg-dark border-bottom border-body"
        data-bs-theme="dark"
    >
        <div class="container-fluid">
            <a class="navbar-brand" href="#"
                ><img
                    src="/resources/images/logo.png"
                    class="img-fluid"
                    width="140"
                    alt="Logo Tacsay"
            /></a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            ><router-link
                                to="/"
                                class="text-decoration-none link-light"
                                >Home</router-link
                            ></a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            ><router-link
                                to="/login"
                                class="text-decoration-none link-light"
                                >Login</router-link
                            ></a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            ><router-link
                                to="/managementOrders"
                                class="text-decoration-none link-light"
                                >Gestion de Ordenes</router-link
                            ></a
                        >
                    </li>
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            Admin Panel
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#"
                                    ><router-link
                                        to="/crudOrders"
                                        class="text-decoration-none link-light"
                                        >CRUD Ordenes</router-link
                                    ></a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"
                                    >Another action</a
                                >
                            </li>
                            <li><hr class="dropdown-divider" /></li>
                            <li>
                                <a class="dropdown-item" href="#"
                                    >Something else here</a
                                >
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- <form class="d-flex" role="search">
                    <input
                        class="form-control me-2"
                        type="search"
                        placeholder="Search"
                        aria-label="Search"
                    />
                    <button class="btn btn-outline-success" type="submit">
                        Search
                    </button>
                </form> -->
            </div>
        </div>
    </nav>
</template>

<script></script>
