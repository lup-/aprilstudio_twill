<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-textfield label="Vimeo URL" :name="fieldName('url')" type="text" in-store="value" ></a17-textfield>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
