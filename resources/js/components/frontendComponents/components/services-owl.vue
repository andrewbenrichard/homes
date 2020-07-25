<template>
     <div class="service-style-three pt-100 pb-70">
      <div class="container">
        <div class="section-head text-center">
          <span>Services</span>
          <h2>Some of our main services</h2>
        </div>

         <div class="row">
                    <div class="col-lg-3 col-md-6" v-for="(service, id) in services" :key="id">
                        <div class="service-card">
                            <img :src="'/public/assets/icons/svg/'+service.service_img"/>
            <h3>{{service.service_name}}</h3>
            <p>


            </p>
                            <div class="theme-button">
                                <router-link to="/booking" class="default-btn">Book now</router-link>
                            </div>
                        </div>
                    </div>

                </div>
      </div>
    </div>
</template>

<script>
export default {
  mounted() {},
  props: ["services"],
  created() {}
};
</script>
