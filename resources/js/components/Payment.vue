<template>
  <div class="booking-payment">
    <div class="form-group row">
      <label for="booking-total" class="col-sm-3 col-form-label">Email</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="booking-total" v-model="total" placeholder="Username">
        <div class="form-check form-check-flat form-check-primary">
          <label class="form-check-label">
          <input type="checkbox" class="form-check-input">
            Override
          </label>
        </div>
      </div>
    </div>

  </div>
</template>

<script>

export default {
  props: {
    tariffData: {
      type: Array
    }
  },
  data() {
    return {
      total: ''
    }
  },
  name: 'Payment',
  mounted() {
    console.dir(this.tariffData)
    this.$root.$on('durationChange', duration => {
      this.calculateTotal(duration)
    });
  },
  methods: {
    calculateTotal: function(duration) {
      let res = this.tariffData.filter(tariff => tariff.nights == duration)[0].price;

      this.total = res;
    }
  }
}
</script>