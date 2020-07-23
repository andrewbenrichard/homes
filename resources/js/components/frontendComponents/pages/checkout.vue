<template>
  <div>
    <topHeader />

    <!-- Start Page Title Area -->
    <div class="page-title-area">
      <div class="d-table">
        <div class="d-table-cell">
          <div class="container">
            <div class="page-title-content">
              <h2>{{ project.project_name }}</h2>
              <ul>
                <li>
                  <a href="/">Home</a>
                </li>
                <li>{{ project.project_name }}</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Title Area -->

    <Bottomfooter />
  </div>
</template>

<script>
import topHeader from "../layouts/header.vue";
import Bottomfooter from "../layouts/footer.vue";
import paystack from "vue-paystack";

export default {
  mounted() {
    this.$route.params;
  },
  components: {
    topHeader,
    Bottomfooter,
    paystack
  },
  data() {
    return {
      paystackkey: "pk_test_6382db1bfccac4380925f4166400907ee4e464fd", //paystack public key
      project: {
        id: "",
        project_name: "",
        project_des: "",
        project_img: "",
        project_slug: "",
        created_at: ""
      },
      form: new Form({
        first_name: "",
        last_name: "",
        email: "",
        number: "",
        amount: "",
        message: "",
        project_slug: this.$route.params.slug
      })
    };
  },
  computed: {
    reference() {
      let text = "";
      let possible =
        "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

      for (let i = 0; i < 10; i++)
        text += possible.charAt(Math.floor(Math.random() * possible.length));

      return text;
    }
  },
  methods: {
    callback: function(response) {
      console.log(response);
      this.saveDonation();
    },
    close: function() {
      console.log("Payment closed");
    },
    loadProject() {
      axios
        .get("/api/sc_admin/single/project/" + this.$route.params.slug)
        .then(({ data }) => (this.project = data));
    },
    saveDonation() {
      this.$Progress.start();
      this.form
        .post("/api/sc_admin/post/donation")
        .then(() => {
          this.$router.replace({
            name: "thanks"
          });
        })
        .catch(() => {});
    }
  },
  created() {
    this.loadProject();
  }
};
</script>
