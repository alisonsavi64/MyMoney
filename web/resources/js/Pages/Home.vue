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

                    <div class="text-center mb-10 space-y-4 font-bold">
                        <h1>Income</h1>
                        <input type="text" id="first_name"
                            class="border bg-lightBlue text-white text-sm rounded-lg block w-full p-2.5 placeholder-white"
                            placeholder="0,00" required />
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center space-x-10 mt-5">
                <Container title="Expenses">
                </Container>
                <Container title="Resume">

                </Container>
                <Container title="Goals" width="80" height="10">
                    <div class="space-y-4">
                        <ul class="flex justify-between">
                            <li>Financial Freedom</li>
                            <li>60%</li>
                        </ul>
                        <ul class="flex justify-between">
                            <li>Goals</li>
                            <li>60%</li>
                        </ul>
                        <ul class="flex justify-between">
                            <li>Fixed Expensives</li>
                            <li>60%</li>
                        </ul>
                        <ul class="flex justify-between">
                            <li>knowledge</li>
                            <li>60%</li>
                        </ul>
                        <ul class="flex justify-between">
                            <li>Financial Freedom</li>
                            <li>60%</li>
                        </ul>
                    </div>
                </Container>
            </div>
        </div>
    </Layout>


</template>

<script>
import Container from '../Shared/Components/Container.vue';
import DropDownButton from '../Shared/Components/DropDownButton.vue';
import Layout from '../Shared/Layouts/Layout.vue';
export default {
    components: {
        Layout,
        Container,
        DropDownButton
    },


}
</script>
