<template>
    <DefaultField
        :field="field"
        :errors="errors"
        :show-help-text="showHelpText"
        :full-width-content="fullWidthContent">

        <template #field>
            <input
                :id="field.attribute"
                type="checkbox"
                :class="'custom-color'"
                :style.checked="this.field.color ? 'color:' +  this.field.color :  'color:#3AB95A;'"
                :placeholder="field.name"
                v-model="value"
                v-bind:true-value="1" v-bind:false-value="0"
            />
        </template>
    </DefaultField>
</template>

<script>
import {FormField, HandlesValidationErrors} from 'laravel-nova'

export default {
    mixins: [FormField, HandlesValidationErrors],
    props: ['resourceName', 'resourceId', 'field'],

    methods: {
        /*
         * Set the initial, internal value for the field.
         */

        setInitialValue() {
            var field_value = false;
            if (this.field.value === '1' || this.field.value === 1 || this.field.value === true){
                field_value = 1;
            } else{
                field_value = 0;
            }
            this.value = field_value || 0
        },

        /**
         * Fill the given FormData object with the field's internal value.
         */
        fill(formData) {
            var field_value = false;
            if (this.value === '1' || this.value === 1 || this.value === true){
                field_value = 1;
            } else{
                field_value = 0;
            }
            formData.append(this.fieldAttribute, field_value || 0)
        },

    },
}
</script>
