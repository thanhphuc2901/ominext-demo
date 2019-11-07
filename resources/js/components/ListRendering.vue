<template>
    <div class="list-rendering">
        <ul>
            <li v-for="(food, index) in foods">{{ food.name }} at position {{index}}</li>
        </ul>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                foods: [
                    { name: 'Hamburger' },
                    { name: 'Sandwich' },
                    { name: 'Chicken chop' },
                ]
            }
        }
    }
</script>

<style lang="scss" scoped>
</style>