<script setup>
import AudioPlayer from "@music/Components/AudioPlayer.vue"
import { ref } from "vue"

defineProps({
  songs: {
    type: Array,
    default: () => [],
  },
  poster: {
    type: String,
    default: null,
  }
})
const currentSong = ref(null)
</script>
<template>
  <h1>Music</h1>
  <audio-player
    ref="audioPlayer"
    :options="{
      autoplay: true,
      controls: true,
      sources: currentSong,
      poster: poster,
    }"
  />
  <ul v-for="song in songs">
    <li>
      <button
        class="mb-4 rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
        @click.prevent="() => $refs.audioPlayer.player.src(song.sources)"
      >
        {{ song.name }}
      </button>
    </li>
  </ul>
</template>
