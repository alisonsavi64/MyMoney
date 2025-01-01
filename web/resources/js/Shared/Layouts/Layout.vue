<template>

    <div class="flex">
        <NavBar></NavBar>
        <slot></slot>
    </div>


</template>

<script>
import NavBar from './NavBar.vue';
export default {
    components: { NavBar }
}
</script>
