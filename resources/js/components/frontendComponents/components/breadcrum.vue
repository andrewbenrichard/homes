<template>
    <div class="service-title service-title-bg bg-1">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="service-title-text">
                            <h2>{{pageTitle}}</h2>
                            <ul>
                                <li>
                                    <router-link to="/">Home</router-link>
                                </li>
                                <li>
                                    <i class="icofont-rounded-double-right"></i>
                                    {{pageTitle}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</template>

<script>
export default {
  mounted() {},
  props: ['pageTitle'],
  created() {}
};
</script>
