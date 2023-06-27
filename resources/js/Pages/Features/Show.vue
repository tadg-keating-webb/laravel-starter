<script setup>
  import Layout from "../Layouts/Layout.vue";
  import { Link } from "@inertiajs/inertia-vue3";
</script>

<template>
  <Layout>
      <main>
        <section>
          	<Link :href="'/features'">Go Back</Link>
        </section>
      </main>
  </Layout>
</template>