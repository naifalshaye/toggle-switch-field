<template>
    <PanelItem :index="index" :field="field">
        <template #value>
            <span v-if="field.value === '1'">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="green" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </span>
            <span v-else-if="field.value === '0'">
               <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="red"
                    stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round"
                        d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"/>
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
