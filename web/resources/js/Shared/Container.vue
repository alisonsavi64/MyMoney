<template>
    <div class="border w-auto h-auto">
        <h1 class="text-complementaryOrange font-bold text-3xl">{{ title }}</h1>
        <slot></slot>
    </div>
</template>

<script>
export default {
    props:{
        title: {
            type: String,
            required: true
        }
    }
};
</script>
