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
                :style.unchecked="this.field.color ? 'background-color:' +  this.field.color :  'background-color:#3AB95A;'"
                :placeholder="field.name"
                v-model="value"
                v-bind:true-value="1"
                v-bind:false-value="0"
                :disabled="isDisabled"
            />
        </template>
    </DefaultField>
</template>

<script>
import {FormField, HandlesValidationErrors} from 'laravel-nova'

export default {
    mixins: [FormField, HandlesValidationErrors],
    props: ['resourceName', 'resourceId', 'field'],
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
        /*
         * Set the initial, internal value for the field.
         */
        setInitialValue() {
            this.value = this.field.value === '1' || this.field.value === 1 || this.field.value === true ? 1 : 0;
        },
        /**
         * Fill the given FormData object with the field's internal value.
         */
        fill(formData) {
            formData.append(this.field.attribute, this.value === 1 ? 1 : 0);
        },
    },
}
</script>
