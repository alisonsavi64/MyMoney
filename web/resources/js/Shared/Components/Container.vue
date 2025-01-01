<template>
    <div :class="`border w-${width} h-${height}`">
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
