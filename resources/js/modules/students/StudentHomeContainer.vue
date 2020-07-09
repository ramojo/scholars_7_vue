<template>
<div class="wrapper student__container">
  <div class="row justify-content-center">
    <div class="col-md-3">
      <h4>Simple Search</h4>
  <form>
    <label for="fuzzysearch">Search for name, nationality or class joined or thesis title</label>
      <input name="fuzzysearch" type="search" placeholder="Type search parameter here">


  </form>

      <card-component>

        <template slot="title">Quick Links</template>
        <div class="section">

        </div>


        <template slot="body"  v-for="program in programmes">

          <div class="card card-columns" style="width: 18rem;" :prog="program">
            <ul class="list-group list-group-flush">
              <li  class="list-group-item"><a href="">{{program}}</a></li>

            </ul>
          </div>
        </template>

      </card-component>
    </div>
    <div class="col-md-9">
      <h3>Current Students</h3>
      <card-component v-for="prog in programmes" :program="prog">
<!--        v-bind="prog"-->
<!--        :key="prog.id">-->

        <template slot="title">
<!--          <h3 v-for: v-bind:(programmes as programme></h3>-->
          {{prog}}
        </template>
        <template slot="body">{{prog}}</template>
      </card-component>
    </div>




  </div>
</div>


</template>

<script>
  import Multiselect from 'vue-multiselect';
  import _ from 'lodash';
  export default {
    props: ['items'],

    components: {
      Multiselect
    },

    created() {
      _.forEach(this.items, (item,key) => {
      this.programmes.push(key);
      });
    },
    data() {
      return {
        programmes:[]
        // this.data
      }
    }


  }
</script>
