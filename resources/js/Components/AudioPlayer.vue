<script>
import videojs from 'video.js'
import "video.js/dist/video-js.css"

export default {
  name: 'VideoPlayer',
  props: {
    options: {
      type: Object,
      default() {
        return {}
      }
    },
  },
  data() {
    return {
      player: null
    }
  },
  mounted() {
    this.player = videojs(this.$refs.audioPlayer, this.options, () => {
      this.player.aspectRatio('1:1')
      this.player.responsive(true)
    })
  },
  beforeUnmount() {
    if (this.player) {
      this.player.dispose()
    }
  }
}
</script>
<template>
  <audio
    ref="audioPlayer"
    class="video-js"
    controls
    preload="auto"
    data-setup="{}"
  />
</template>
