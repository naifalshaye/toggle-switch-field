<template>
    <PanelItem :index="index" :field="field">
        <template #value>
            <span v-if="Number(field.value) === 1">
             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="24"
                  height="24" class="inline-block text-green-500" role="presentation">
                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                       d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
             </svg>
            </span>
            <span v-else-if="Number(field.value) === 0">
             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="24"
                  height="24" class="inline-block text-red-500" role="presentation">
                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                       d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
             </svg>
            </span>
        </template>
    </PanelItem>
</template>

<script>
export default {
    props: ['index', 'resource', 'resourceName', 'resourceId', 'field'],
}
</script>
