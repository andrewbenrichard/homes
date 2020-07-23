<template>
  <div class="site-wrapper">
    <topHeader pageTitle="Empire" />

    <!-- Home Section Start -->
    <div class="home-style-three home-bg-three">
      <div class="d-table">
        <div class="d-table-cell">
          <div class="container-fluid">
            <div class="row align-items-center">
              <div class="col-md-7 offset-lg-1">
                <div class="home-text-three">
                  <h1>
                    Property maintenance <span>experts</span>
                  </h1>
                  <p>Covering multiple services 24/7
                     in Your Area.</p>
                  <div class="theme-button">
                    <a href="testimonial.html" class="default-btn active-btn">Request a Callback</a>
                    <a href="service.html" class="default-btn">Our Services</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-5 p-0">
                <div class="home-image">
                  <img src="public/assets/img/home/8.jpg" alt="home image" />
                </div>
              </div>
            </div>

            <div class="home-three-shapes">
              <img src="public/assets/img/process-pattern-3.png" alt="shape" />
              <img src="public/assets/img/process-pattern-4.png" alt="shape" />
              <img src="public/assets/img/process-pattern-5.png" alt="shape" />
              <img src="public/assets/img/process-pattern-6.png" alt="shape" />
              <img src="public/assets/img/process-pattern-7.png" alt="shape" />
              <img src="public/assets/img/process-pattern-6.png" alt="shape" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Home Section End -->

    <!-- About Section Start -->
   <AboutStyle2/>
    <!-- About Section End -->

    <!-- Service Section Start -->
    <ServicesOwl />
    
    <!-- Service Section End -->

    <!-- Why Choose Start -->
   <WhyUs />
    <!-- Why Choose End -->

    <!-- Contact Section Start -->
    <ContactSection />
    
    <!-- Contact Section End -->

    <Bottomfooter />
  </div>
</template>

<script>
import topHeader from "../layouts/header.vue";
import Bottomfooter from "../layouts/footer.vue";
import preloader from "../widgets/preloader.vue";
import AboutStyle2 from "../components/about-style-2.vue";
import ServicesOwl from "../components/services-owl.vue";
import WhyUs from "../components/why-us.vue";
// import Process from "../components/process-style-1.vue";
// import RecentWork from "../components/RecentWork.vue";
// import Pricing from "../components/Pricing-style-1.vue";
// import Testimonial from "../components/Testimonial.vue";
// import BlogSection from "../components/BlogSection.vue";
import ContactSection from "../components/ContactSection.vue";

export default {
  mounted() {
    console.log("Component mounted.");
  },
  components: {
    topHeader,
    Bottomfooter,
    AboutStyle2,
    ServicesOwl,
    WhyUs,
    // Process,
    // RecentWork,
    // Pricing,
    // Testimonial,
    // BlogSection,
    ContactSection,
  },
  data() {
    return {
      testimonials: {},
      articles: {}
    };
  },
  methods: {
    loadMeals() {
      axios.get("/api/sc_front/meals").then(({ data }) => (this.meals = data));
    },
    loadChef() {
      axios.get("/api/sc_front/chef").then(({ data }) => (this.chef = data));
    },
    loadTestimonials() {
      axios
        .get("/api/sc_front/testimonials")
        .then(({ data }) => (this.testimonials = data));
    },
    loadTopArticle() {
      axios
        .get("/api/sc_front/top_article")
        .then(({ data }) => (this.top_article = data));
    },
    loadArticles() {
      axios
        .get("/api/sc_front/articles_mini")
        .then(({ data }) => (this.articles = data));
    }
  },
  created() {
    this.$route.params;
  }
};
</script>
