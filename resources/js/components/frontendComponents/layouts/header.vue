<template>
  <div class="header___sk_shop">
    <title>{{pageTitle}} | Property Maintenance Experts</title>
    <!-- Header Section Start -->
    <div class="header-section header-style-two">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-8 col-md-12">
            <div class="header-widget">
              <ul>
                <li>
                  <i class="icofont-clock-time"></i>
                  Mon - Sun : 08:00AM - 07:00PM
                </li>
                <li>
                  <i class="icofont-location-pin"></i>
                  70 Airport Road, Benin city
                </li>
                <li>
                  <i class="icofont-phone"></i>
                  <a href="tel:+2348153372133">+234 8153 372 133</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="header-social text-right">
              <ul>
                <li>
                  <a href="#">
                    <i class="icofont-facebook"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="icofont-twitter"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="icofont-linkedin"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="icofont-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Header Section End -->

    <!-- Navbar Section Start -->
    <div class="nav-style-two">
      <div class="navbar-area">
        <!-- Menu For Mobile Device -->
        <div class="mobile-nav">
          <a href="index.html" class="logo">
            <img src="public/assets/img/logo.png" alt="logo" />
          </a>
        </div>

        <!-- Menu For Desktop Device -->
        <div class="container">
          <div class="main-nav">
            <div class="container">
              <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.html">
                  <img src="public/assets/img/logo.png" alt="logo" />
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                  <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                      <router-link to="/" class="nav-link">
                        Home
                      </router-link>
                    </li>
                    <li class="nav-item">
                      <router-link to="/services" class="nav-link ">
                        Services
                      </router-link>
                    </li>
                    <li class="nav-item">
                      <router-link to="/pricing" class="nav-link ">
                        Pricing
                      </router-link>
                    </li>
                    <li class="nav-item">
                      <router-link to="/contact" class="nav-link">Contact</router-link>
                    </li>
                  </ul>
                  <div class="other-option">
                    <div class="search-option">
                      <router-link to="/booking">
                        Book Online
                      </router-link >
                    </div>

                    
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Navbar Section End -->
  </div>
</template>

<script>
import { mapGetters, mapActions } from "vuex";
export default {
  mounted() {
    console.log("header mounted.");
  },
  props: ['pageTitle'],
  data: () => ({
    activeItem: 0
  }),
  computed: {
    ...mapGetters({
      authenticated: "auth/authenticated",
      user: "auth/user"
    })
  },
  methods: {
    ...mapActions({
      signOutAction: "auth/signOut"
    }),
    signOut() {
      this.signOutAction().then(() => {
        this.$router.replace({
          name: "home"
        });
      });
    }
  }
};
</script>
