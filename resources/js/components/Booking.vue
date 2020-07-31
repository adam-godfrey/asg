<template>
  <div class="booking-duration">
    <div class="form-group">
      <v-date-picker mode="range" v-model="range" :columns="$screens({ default: 1, lg: 2 })" />
    </div>
    <div class="form-group row">
      <label for="arrival" class="col-sm-3 col-form-label">Arrival</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="arrival" ref="arrival" placeholder="Arrival">
      </div>
    </div>
    <div class="form-group row">
      <label for="departure" class="col-sm-3 col-form-label">Departure</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="departure" ref="departure" placeholder="Departure">
      </div>
    </div>
    <div class="form-group row">
      <label for="duration" class="col-sm-3 col-form-label">No. of Nights</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="duration" ref="duration" placeholder="Duration">
      </div>
    </div>
    <div class="form-check form-check-flat form-check-primary">
      <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
        Remember me
      </label>
    </div>
  </div>
</template>

<script>

import { DatePicker } from 'v-calendar'

export default {
  name: 'Booking',
  components: {
    DatePicker
  },
  data() {
    return {
      range: {
        start: new Date(),
        end: null
      }
    }
  },
  watch: {
    range: {
      handler: function () {
        this.$refs.arrival.value = this.formatDate(this.range.start);
        this.$refs.departure.value = this.formatDate(this.range.end);
        this.$refs.duration.value = this.calculateDuration(this.range.start, this.range.end);
      },
      deep: true
    }
  },
  methods: {
    calculateDuration: function(start, end) {
      // To calculate the time difference of two dates 
      var time_diff = end.getTime() - start.getTime(); 
      // To calculate the no. of days between two dates 
      var days_diff = time_diff / (1000 * 3600 * 24);

      this.$root.$emit('durationChange', days_diff);

      return days_diff;
    },
    formatDate: function(date) {
      return new Date(date.getTime() - (date.getTimezoneOffset() * 60000 ))
                    .toISOString()
                    .split("T")[0];
    }
  }
}

</script>
