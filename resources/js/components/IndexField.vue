<template>
    <span v-show="Number(field.value) === 1">
       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="24"
            height="24" class="inline-block text-green-500" role="presentation">
           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                 d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
       </svg>
    </span>
    <span v-show="Number(field.value) === 0">
         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="24"
              height="24" class="inline-block text-red-500" role="presentation">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                   d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
         </svg>
    </span>
</template>

<script>
export default {
    props: ['resourceName', 'field'],
    computed: {
        fieldValue() {
            return this.field.displayedAs || this.field.value
        },
    },
}
</script>
