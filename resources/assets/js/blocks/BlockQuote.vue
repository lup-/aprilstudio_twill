<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-locale type="a17-textfield" :attributes="{ label: 'Quote text', name: fieldName('quote'), type: 'textarea', maxlength: 250, rows: 4, inStore: 'value' }" ></a17-locale><a17-textfield label="Quote class" :name="fieldName('quote_class')" type="text" :maxlength="200" in-store="value" ></a17-textfield>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
