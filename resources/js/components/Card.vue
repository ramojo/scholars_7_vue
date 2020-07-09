<template>
  <div class="card">
    <div class="card-header">
      <slot name="title"></slot>

    </div>

    <div class="card-body">
      <slot name="body"></slot>
<!--      <student-container :items="{{json_encode($programmes)}}"></student-container>-->
    </div>
  </div>

</template>

<script>
  export default {

  }
</script>
