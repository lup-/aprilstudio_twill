<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-repeater type="fixed_image_item" :name="repeaterName('fixed_image_item')" ></a17-repeater>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
