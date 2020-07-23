<template>
  <div>
    <topHeader v-bind:pageTitle="pageTitle"/>
    <breadCrum v-bind:pageTitle="pageTitle" />

<form-wizard>
  <tab-content title="Personal details">
    My first tab content
  </tab-content>
  <tab-content title="Additional Info">
      My second tab content
   </tab-content>
   <tab-content title="Last step">
     Yuhuuu! This seems pretty damn simple
   </tab-content>
</form-wizard>
    <Bottomfooter />
  </div>
</template>

<script>

import {FormWizard, TabContent} from 'vue-form-wizard'
import 'vue-form-wizard/dist/vue-form-wizard.min.css'
import topHeader from "../layouts/header.vue";
import Bottomfooter from "../layouts/footer-2.vue";
import preloader from "../widgets/preloader.vue";
import breadCrum from "../components/breadcrum.vue";
import paystack from "vue-paystack";

export default {
  mounted() {
    this.$route.params;
  },
  components: {
    topHeader,
    Bottomfooter,
    breadCrum,
    FormWizard,
  TabContent
  },
  data() {
    return {
      pageTitle: "Booking",
      form: new Form({
        first_name: "",
        last_name: "",
        email: "",
        number: "",
        amount: "",
        message: "",
      })
    };
  },
  computed: {
   
  },
  methods: {
  
  },
  created() {
  }
};
</script>
