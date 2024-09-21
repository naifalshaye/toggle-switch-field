<template>
    <div :class="field.toggle_align">
        <template v-if="field.index_toggle !== undefined && !field.index_toggle">
      <span v-show="Number(field.value) === 1">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            width="24"
            height="24"
            class="inline-block text-green-500"
            role="presentation"
        >
          <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
          />
        </svg>
      </span>
            <span v-show="Number(field.value) === 0">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            width="24"
            height="24"
            class="inline-block text-red-500"
            role="presentation"
        >
          <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"
          />
        </svg>
      </span>
        </template>
        <template v-else>
            <input
                :id="field.attribute"
                type="checkbox"
                class="custom-color"
                :style.unchecked="this.field.color ? 'background-color:' +  this.field.color :  'background-color:#3AB95A;'"
                :placeholder="field.name"
                v-model="new_value"
                :true-value="1"
                :false-value="0"
                :checked="new_value"
                @click="toggle"
                :disabled="isDisabled"
            />
        </template>
    </div>
</template>

<script>
export default {
    props: ['resource', 'resourceName', 'field'],
    data() {
        return {
            new_value: Number(this.field.value),
        };
    },
    computed: {
        isDisabled() {
            if (this.field.extraAttributes && this.field.extraAttributes.readonly) {
                this.field.color = '#DADFE4';
                return true;
            }
            return false;
        },
    },
    methods: {
        toggle(event) {
            event.stopPropagation();
            const updatedValue = !this.new_value;
            const data = {
                resource_id: this.resource.id.value,
                resource_name: this.resourceName,
                attribute: this.field.attribute,
                new_value: updatedValue,
            };

            Nova.request()
                .post('/nova-vendor/naif/toggle-switch-field/update-toggle', data)
                .then(() => {
                    this.new_value = updatedValue;
                })
                .catch((error) => {
                    Nova.error(error);
                });
        },
    },
};
</script>
