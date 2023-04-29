<template>
  <div>
    <!-- Topbar Start -->
    <div class="container-fluid px-5 d-none d-lg-block">
      <div class="row gx-5 py-3 align-items-center">
        <div class="col-lg-3">
          <div class="d-flex align-items-center justify-content-start">
            <i class="bi bi-phone-vibrate fs-1 text-primary me-2"></i>
            <h2 class="mb-0">+012 345 6789</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="d-flex align-items-center justify-content-center">
            <a href="index.html" class="navbar-brand ms-lg-5">
              <h1 class="m-0 display-4 text-primary">
                <span class="text-secondary">Farm</span>Fresh
              </h1>
            </a>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="d-flex align-items-center justify-content-end">
            <a class="btn btn-primary btn-square rounded-circle me-2" href="#"
              ><i class="fab fa-twitter"></i
            ></a>
            <a class="btn btn-primary btn-square rounded-circle me-2" href="#"
              ><i class="fab fa-facebook-f"></i
            ></a>
            <a class="btn btn-primary btn-square rounded-circle me-2" href="#"
              ><i class="fab fa-linkedin-in"></i
            ></a>
            <a class="btn btn-primary btn-square rounded-circle" href="#"
              ><i class="fab fa-instagram"></i
            ></a>
          </div>
        </div>
      </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav
      class="navbar navbar-expand-lg bg-primary navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-5"
    >
      <a href="index.html" class="navbar-brand d-flex d-lg-none">
        <h1 class="m-0 display-4 text-secondary">
          <span class="text-white">Farm</span>Fresh
        </h1>
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto py-0">
          <router-link to="/" class="nav-item nav-link">Home</router-link>
          <router-link to="/about" class="nav-item nav-link">About</router-link>
          <router-link to="/crops" class="nav-item nav-link">Crops</router-link>
          <router-link to="/addCrop" class="nav-item nav-link">Add Crops</router-link>
          <!-- <router-link to="/services" class="nav-item nav-link">Services</router-link> -->
          <!-- <router-link to="/products" class="nav-item nav-link">Products</router-link> -->
          <router-link to="/login" class="nav-item nav-link">Login</router-link>
          <router-link to="/register" class="nav-item nav-link">Register</router-link>
          <!-- <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle"
              data-bs-toggle="dropdown"
              >Pages</a
            >
            <div class="dropdown-menu m-0">
              <a href="blog.html" class="dropdown-item">Blog Grid</a>
              <a href="detail.html" class="dropdown-item">Blog Detail</a>
              <a href="feature.html" class="dropdown-item">Features</a>
              <a href="team.html" class="dropdown-item">The Team</a>
              <a href="testimonial.html" class="dropdown-item">Testimonial</a>
            </div>
          </div> -->
          <!-- <router-link to="/contact" class="nav-item nav-link">Contact</router-link> -->
        </div>
      </div>
    </nav>
    <!-- Navbar End -->
  </div>
</template>

<script>
export default {};
</script>

<style></style>
