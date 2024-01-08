<script>
import videojs from 'video.js'
import "videojs-playlist/dist/videojs-playlist"
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
    playlist: {
      type: Object,
      default() {
        return {}
      }
    }
  },
  data() {
    return {
      player: null
    }
  },
  mounted() {
    this.player = videojs(this.$refs.audioPlayer, this.options, () => {
      this.player.log('onPlayerReady', this)
    })
    this.player.aspectRatio('1:1')
    this.player.responsive(true)
    this.player.playlist(this.playlist)
    this.player.playlist.autoadvance(0)
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
