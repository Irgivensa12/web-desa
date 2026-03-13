<script setup>
defineProps({
  pengumuman: Array
})
</script>

<template>
<div>
  <h1>Pengumuman Desa</h1>

  <div v-for="item in pengumuman" :key="item.id">
    <h2>{{ item.judul }}</h2>
    <p>{{ item.isi }}</p>
  </div>

</div>
</template>