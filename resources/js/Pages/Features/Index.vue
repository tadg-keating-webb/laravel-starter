<script setup>
  import Layout from "../Layouts/Layout.vue";
  import { Link } from "@inertiajs/inertia-vue3";
</script>

<template>
    <Layout>
      <main>
        <section>
          	<Link :href="'/features/1'">Go to Feature</Link>
        </section>
      </main>
    </Layout>
</template>