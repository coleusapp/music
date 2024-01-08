<script setup>
import AudioPlayer from "@music/Components/AudioPlayer.vue"

defineProps({
  songs: {
    type: Array,
    default: () => [],
  }
})
</script>
<template>
  <h1>Music</h1>
  <audio-player
    :options="{
      autoplay: true,
      controls: true,
    }"
    :playlist="songs"
  />
</template>
