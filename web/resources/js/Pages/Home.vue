<template>

    <Layout>
        <div class="w-screen">
            <div class="p-20 flex space-between justify-between">
                <div>
                    <h1 class="font-bold text-4xl">Household Budget</h1>
                    <h2>Control your household budget based on your own income goals</h2>

            </div>
            <div class="space-x-6 flex justify-center items-center w-100">

                <DropDownButton title="Year"></DropDownButton>

                <DropDownButton title="Month"></DropDownButton>

                <div class="text-white text-center mb-10 space-y-4">
                    <h1>Income</h1>
                    <input type="text" id="first_name" class="border text-sm rounded-lg block w-full p-2.5"  placeholder="Income" required />
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center space-x-10 mt-5">
            <Container title="Gastos">

            </Container>
            <Container title="Resumo">

            </Container>
            <Container title="Metas">

            </Container>
        </div>
    </div>
    </Layout>


</template>

<script>
import Container from '../Shared/Container.vue';
import DropDownButton from '../Shared/DropDownButton.vue';
import Layout from '../Shared/Layout.vue';
export default {
    components: {
        Layout,
        Container,
        DropDownButton
    },


}
</script>
